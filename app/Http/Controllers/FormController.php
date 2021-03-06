<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use YoutubeDl\Options;
use YoutubeDl\YoutubeDl;

class FormController extends Controller
{
    public function index(Request $request)
    {
        return view('home');
    }

    public function download(Request $request)
    {
        $yt = new YoutubeDl();

        $yt->setBinPath(config('app.yt_dlp_path'));
        $yt->setPythonPath(config('app.python_path'));

        $yt->onProgress(static function (?string $progressTarget, string $percentage, string $size, string $speed, string $eta, ?string $totalTime): void {
            echo "Download file: $progressTarget; Percentage: $percentage; Size: $size <br>";
            if ($speed) {
                echo "; Speed: $speed <br>";
            }
            if ($eta) {
                echo "; ETA: $eta <br>";
            }
            if ($totalTime !== null) {
                echo "; Downloaded in: $totalTime <br>";
            }
        });

        $collection = $yt->download(
            Options::create()
                ->downloadPath(public_path('/downloads'))
                ->url($request->url)
        );

        foreach ($collection->getVideos() as $video) {
            if ($video->getError() !== null) {
                echo "Error downloading video: {$video->getError()}.";
            } else {
                echo "Download Success!! <br><br> Title - ".$video->getTitle()."<br><br><br>";
                echo "Folder - ".$video->getFile();

                echo "<br><br><a href='/'>Download another</a>";
            }
        }
    }
}
