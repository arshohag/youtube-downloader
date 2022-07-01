<!DOCTYPE html>
<html>

<head>
    <title>Download Youtube Video</title>
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <!-- bootstrap cdn -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body>

    <div class="container mt-2 pt-2">

        <form method="get" action="{{ route('download') }}" id="downloadForm">
            @csrf

            @if($data ?? '')
            <div class="row">

                <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-12 m-auto p-4">

                    <div class="form-group text-center">

                        <br>
                        <br>
                        <br>

                        <h2>FULLY REDEEMED</h2>

                    </div>

                </div>

            </div>

            <div class="row">

                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12 m-auto">

                    <div class="form-group text-center">

                        <p>Due to the overwhelming response, this voucher has been fully redeemed. Thank you all for
                            your tremendous support and we look forward to seeing you at our stores.</p>

                    </div>
                </div>

            </div>
            @endif

            @if(empty($data ?? ''))
            <div class="row">

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 m-auto p-4">

                    @if(Session::has('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ Session::get('error') }}
                        @php
                        Session::forget('error');
                        @endphp
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif

                </div>
            </div>

            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 m-auto pl-4 pr-4 pb-4">
                    <div class="form-group">
                        <label for="url"><small class="text-danger">*</small> Enter the URL</label>
                        <input type="url" name="url" id="url" class="form-control" placeholder="Example - https://www.youtube.com/watch?v=OU87JIsMTXU"
                            required>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 m-auto p-4">
                        <div class="form-group">
                            <button type="submit" id="savebtn" class="btn btn-success btn-md btn-block" @if($data ?? ''
                                ) disabled @endif> Download </button>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </form>
    </div>

    <br>
    <br>
    <br>
    <br>

    <!-- Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"> </script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>


    <!-- custom script js -->

    {{-- <script type="text/javascript" src="./script.js"></script> --}}

</body>

</html>
