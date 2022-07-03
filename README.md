<p align="center"><a href="https://rdevs.xyz" target="_blank"><img src="https://www.webqe.com/wp-content/uploads/2020/05/save-youtube-video-featured-icon-1.png" width="400"></a></p>

## Introduction

YouTube Downloader built using [Laravel](https://laravel.com/) and [YT-DLP](https://github.com/yt-dlp/yt-dlp).

Main features -

-   Download YouTube Video using YT-DLP.
-   Download a single video or playlist of videos.
-   Download the video directly in the server directory.
-   Input URL validation.
-   Duplicate video download detection.

## Installation

First step is to download & install the [YT-DLP](https://github.com/yt-dlp/yt-dlp) & [Python 3](https://www.python.org/downloads/).

1. Clone this repository

```bash
git clone git@github.com:arshohag/youtube-downloader.git
```

2. Install dependencies

```bash
composer install
```

3. Copy .env.example to .env

```bash
cp .env.example .env
```

4. Generate app key

```bash
php artisan key:generate
```

4. Set these keys in .env.

```bash
APP_URL
DB_HOST
DB_PORT
DB_DATABASE
DB_USERNAME
DB_PASSWORD
YT_DLP_PATH
PYTHON_PATH
```

5. Run Migrations

```bash
php artisan migrate
```

6. Run Project

```bash
php artisan serve
```

## Attention!!

You need to install the [YT-DLP](https://github.com/yt-dlp/yt-dlp) & [Python 3](https://www.python.org/downloads/).

Also if you are facing SSL errro then you need to set
on `/Users/hello/backend/youtube-downloader/vendor/norkunas/youtube-dl-php/src/Options.php`

```
private bool $noCheckCertificate = true;
```

otherwise it will not be working.

## Contributing

Pull requests are welcome. Please open an issue to discuss.

## License

GPL-3.0-only. Please see the [license file](LICENSE.md) for more information.
