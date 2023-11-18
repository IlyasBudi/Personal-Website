@extends('layouts.app')

@section('title', 'Detail Blog')

@section('content')
    <div class="detail-blog">
        <div class="container">
            <div class="row">
                <div class="col d-flex justify-content-center">
                    <img src="{{ Storage::url($blogs->thumbnail) }}" class="img-fluid " alt="...">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h1>{{ $blogs->title }}</h1>
                    <div class="d-flex align-items-center">
                        <h5>{{ $blogs->created_at->format('d F Y') }}</h5>
                        <h5 class="blog-category mx-5">{{ $blogs->category->name }}</h5>
                    </div>
                </div>
            </div>
            <div class="row blog-body">
                <div class="col">
                    <p class="body">{!! $blogs->body !!}</p>
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
