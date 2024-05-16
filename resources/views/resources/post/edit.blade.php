<x-app-layout>

    <div class="pagetitle">
        <h1>{{ __('Post') }}</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a></li>
                <li class="breadcrumb-item "><a href="{{ route('post.index') }}">{{ __('Resources') }}</a></li>
                <li class="breadcrumb-item active">{{ __('Post') }}</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body p-5">
                        <h4>Edit Post</h4>
                        <form action="{{ route('post.update', $post) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="col-sm-10">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control @error('subject') is-invalid @enderror"
                                        name="subject" id="subject" placeholder="Subject" value="{{ $post->subject }}">
                                    <label for="floatingInput">Subject</label>
                                    @error('subject')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="form-floating mb-3">
                                    <textarea class="form-control @error('post') is-invalid @enderror"
                                        placeholder="Post" id="post" name="post"
                                        style="height: 100px;">{{ $post->post }}</textarea>
                                    <label for=" floatingTextarea">Post</label>
                                    @error('post')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="form-check form-switch mb-3">
                                    <input class="form-check-input" type="checkbox" name="status" {{($post->status == 1 ? 'checked' : '')}}>
                                    <label class="form-check-label" for="status">Status</label>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Save Post</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>