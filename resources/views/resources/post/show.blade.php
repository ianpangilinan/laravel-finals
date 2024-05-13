<x-app-layout>

    <div class="pagetitle">
        <h1>{{ __('Post') }}</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a></li>
                <li class="breadcrumb-item active">{{ __('Resources') }}</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body p-5">
                        <h1><b>Subject:</b>{{$post->subject}}</h1>
                        <p><b>Post:</b>{{$post->post}}</p>

                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>