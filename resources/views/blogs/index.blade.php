@extends('layouts.app')

@section('title', 'My Blogs')

@section('content')

    <div class="blogs-hero">
        <div class="container">
            <div class="row d-flex mb-5 justify-content-center">
                <div class="col col-lg-8">
                    <h1 class="fw-bold text-center">Blogs</h1>
                    <p class="text-center">There is an Articles may You have Interest</p>
                    {{-- <input type="text" class="form-control" placeholder="Cari blog disini"> --}}
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="new-blogs">
        <div class="container">
            <div class="row">
                <div class="col text-center badge1">
                    <p class="badge">New Blog</p>
                </div>
            </div>
            <div class="row new">
                @foreach ($new_blog as $item)
                    <div class="col">
                        <a href="/blogs/detail/{{ $item->id }}" style="text-decoration: none;">
                            <div class="card bg-dark text-white">
                                <img src="{{ Storage::url($item->thumbnail) }}" class="card-img-top">
                                <div class="card-img-overlay">
                                    <p class="card-text tanggal">{{ $item->created_at->format('d F Y') }}</p>
                                    <h5 class="card-title">{{ $item->title }}</h5>
                                    <p class="card-text">{{ $item->description }}</p>
                                    <div class="card-text blog-category d-flex align-items-center">
                                        <p>{{ $item->category->name }}</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div> --}}

    <div class="all-blogs">
        <div class="container">
            {{-- <div class="row">
                <div class="col text-center badge1">
                    <p class="badge">All Blogs</p>
                </div>
            </div> --}}
            <div class="row">
                <div class="col">
                    <h2 class="text-center">Recent Post</h2>
                </div>
            </div>
            <div class="row row-cols-lg-4 row-cols-2 list-all-blogs">
                @foreach ($blogs as $blog)
                    <div class="col">
                        <a href="/blogs/detail/{{ $blog->id }}" style="text-decoration: none;">
                            <div class="card">
                                <img src="{{ Storage::url($blog->thumbnail) }}" class="card-img-top" alt="...">
                                <h5>{{ $blog->title }}</h5>
                                <p>{{ $blog->description }}</p>
                                <div class="tanggal d-flex justify-content-between align-items-center">
                                    <p>{{ $blog->created_at->format('d F Y') }}</p>
                                    <p class="category-blog">{{ $blog->category->name }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="my-3">
                    {{ $blogs->links() }}
                </div>
            </div>
        </div>
    </div>
    <section id="contact">
        <p class="section-text-p1">Get in Touch</p>
        <h1 class="title">Contact Me</h1>
        <div class="contact-info-upper-container">
            <div class="contact-info-container">
                <img src="{{ asset('css/email.png') }}" alt="Email icon" class="icon contact-icon email-icon">
                <p><a href="mailto:wjati145@gmail.com">wjati145@gmail.com</a></p>
            </div>
            <div class="contact-info-container">
                <img src="{{ asset('css/linkedin.png') }}" alt="LinkedIn icon" class="icon contact-icon">
                <p><a href="https://www.linkedin.com/in/ilyas-budi/">LinkedIn</a></p>
            </div>
            <div class="contact-info-container">
                <img src="{{ asset('css/github.png') }}" alt="Github icon" class="icon contact-icon">
                <p><a href="https://github.com/IlyasBudi">Github</a></p>
            </div>
        </div>
        <img src="{{ asset('css/arrow.png') }}" alt="arrow.png" class="icon arrow" onclick="location.href='./#blog'">
    </section>
@endsection
