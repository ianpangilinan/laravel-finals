<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
</head>

<body class="font-sans antialiased">


    @include('layouts.header')
    <!-- Page Content -->
    <main id="main" class="main">
        <div class="container my-5">
            @if(session()->has('message'))
                <div id="alert" class="alert alert-success bg-success text-light border-0 alert-dismissible fade show"
                    role="alert">
                    {{ session()->get('message') }}
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"
                        aria-label="Close"></button>
                </div>
                <script>
                    setTimeout(function () {
                        var alert = document.getElementById('alert');
                        alert.classList.remove('show');
                        alert.classList.add('hide');
                        setTimeout(function () {
                            alert.parentNode.removeChild(alert);
                        }, 1000); // 1 second for fade out transition
                    }, 2000); // 3 seconds
                </script>
            @endif
            <div class="row">
                <div class="col-12 mb-3">
                    <h3>Posts</h3>
                </div>
            </div>
            <div class="card">
                @foreach ($posts as $post)
                    <div class="card-body">

                        <h5 class="card-title">{{ $post->subject }}</h5>
                        <p><small><b>Author: </b>{{ $post->user->name}}</small></p>
                        {{ $post->post }}
                        <p class="font-monospace mt-5">For your Feedback you can email the author <a
                                href="mailto:{{ $post->user->email }}">{{ $post->user->email }}</a></p>
                        <form action="{{ route('comment.store') }}" method="post">
                            @csrf
                            <input type="hidden" name="post_id" value="{{ $post->id }}">
                            <textarea name="comment" id="comment" class="form-control"></textarea>
                            <button type="submit" class="btn btn-secondary mt-3">Comment</button>
                            <input type="hidden" name="status" value="{{ $post->status }}">
                        </form>
                    </div>
                @endforeach
            </div>
        </div>
    </main>






    <script src="{{asset('assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/chart.js/chart.umd.js')}}"></script>
    <script src="{{asset('assets/vendor/echarts/echarts.min.js')}}"></script>
    <script src="{{asset('assets/vendor/quill/quill.js')}}"></script>
    <script src="{{asset('assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
    <script src="{{asset('assets/vendor/tinymce/tinymce.min.js')}}"></script>
    <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>