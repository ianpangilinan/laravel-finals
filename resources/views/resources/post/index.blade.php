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
                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>Subject</th>
                                    <th>Post</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                    <tr>
                                        <td>{{$post->subject}}</td>
                                        <td>{{$post->post}}</td>
                                        <td>{{$post->status}}</td>
                                        <td>
                                            <a href="{{ route('post.show', $post) }}" class="btn btn-info m-1"><i
                                                    class="bi bi-folder-symlink"></i></a>
                                            <a href="#" class="btn btn-success m-1"><i class="bi bi-pencil-square"></i></a>
                                            <a href="#" class="btn btn-danger m-1"><i class="bi bi-trash"></i></a>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>