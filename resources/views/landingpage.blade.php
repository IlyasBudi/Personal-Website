@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
    
    <main>
        <section id="profile">
            <div class="section-pict-container">
                <img src="{{ asset('css/profile-pic.png') }}" alt="Profile Picture">
            </div>
            <div class="section-text">
                <p class="section-text-p1">Hello, I'm</p>
                <h1 class="title">Ilyas Budi</h1>
                <p class="section-text-p2">Website Developer</p>
                <div class="btn-container">
                    <button class="btn btn-color-1" onclick="location.href='./#contact'">
                        Contact Info
                    </button>
                </div>
                <div id="socials-container">
                    <img src="{{ asset('css/linkedin.png') }}" alt="Linkedin Profile" class="icon" onclick="location.href='https://www.linkedin.com/in/ilyas-budi/'">
                    <img src="{{ asset('css/github.png') }}" alt="Github Profile" class="icon" onclick="location.href='https://github.com/IlyasBudi'">
                </div>
            </div>
        </section>
        <section id="about">
            <p class="section-text-p1">Get To Know More</p>
            <h1 class="title">About Me</h1>
            <div class="section-container">
                <div class="section-pict-container">
                    <img src="{{ asset('css/about-img.jpg') }}" alt="about-pict" class="about-pic">
                </div>
                <div class="about-details-container">
                    <div class="about-containers">
                        <div class="details-container">
                            <img src="{{ asset('css/experience.png') }}" alt="experience icon" class="icon">
                            <h3>Experience</h3>
                            <p>Front-End Development</p>
                        </div>
                        <div class="details-container">
                            <img src="{{ asset('css/experience.png') }}" alt="education icon" class="icon">
                            <h3>Education</h3>
                            <p>Indonesian Institute of Technology</p>
                        </div>
                    </div>
                    <div class="text-container">
                        <p>
                            I am a Informatics Engineering student with a focus on Front-End Web Development.
                            I have experience building websites using HTML, CSS, and JavaScript.
                            I also experienced in using several frameworks such as ReactJS and Tailwind CSS.
                            I am passionate about Web development and always eager to learn new things in this field.
                        </p>
                    </div>
                </div>
            </div>
            <img src="{{ asset('css/arrow.png') }}" alt="arrow.png" class="icon arrow" onclick="location.href='./#experience'">
        </section>
        <section id="experience">
            <p class="section-text-p1">Explore My</p>
            <h1 class="title">Experience</h1>
            <div class="experience-details-container">
                <div class="about-containers">
                    <div class="details-container">
                        <h2 class="experience-sub-tite">Front-End Development</h2>
                        <div class="article-container">
                            <article>
                                <img src="{{ asset('css/checkmark.png') }}" alt="Experience Icon" class="icon">
                                <div>
                                    <h5>HTML</h5>
                                    <p>           </p>
                                </div>
                            </article>
                            <article>
                                <img src="{{ asset('css/checkmark.png') }}" alt="Experience icon" class="icon">
                                <div>
                                    <h5>CSS</h5>
                                    <p>           </p>
                                </div>
                            </article>
                            <article>
                                <img src="{{ asset('css/checkmark.png') }}" alt="Experience icon" class="icon">
                                <div>
                                    <h5>Javascript</h5>
                                    <p>           </p>
                                </div>
                            </article>
                            <article>
                                <img src="{{ asset('css/checkmark.png') }}" alt="Experience icon" class="icon">
                                <div>
                                    <h5>Bootstrap</h4>
                                    <p>           </p>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="details-container">
                        <h2 class="experience-sub-ttle">Front-End Development</h2>
                        <div class="article-container">
                            <article>
                                <img src="{{ asset('css/checkmark.png') }}" alt="Experience icon" class="icon">
                                <div>
                                    <h5>TailwindCSS</h5>
                                    <p>           </p>
                                </div>
                            </article>
                            <article>
                                <img src="{{ asset('css/checkmark.png') }}" alt="Experience icon" class="icon">
                                <div>
                                    <h5>React JS</h5>
                                    <p>           </p>
                                </div>
                            </article>
                            <article>
                                <img src="{{ asset('css/checkmark.png') }}" alt="Experience icon" class="icon">
                                <div>
                                    <h5>Github</h5>
                                    <p>           </p>
                                </div>
                            </article>
                            <article>
                                <img src="{{ asset('css/checkmark.png') }}" alt="Experience icon" class="icon">
                                <div>
                                    <h5>Git</h5>
                                    <p>           </p>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
            <img src="{{ asset('css/arrow.png') }}" alt="arrow.png" class="icon arrow" onclick="location.href='./#projects'">
        </section>
        <section id="projects">
            <p class="section-text-p1">Browse My Recent</p>
            <h1 class="title">Projects</h1>
            <div class="experience-details-container">
                <div class="about-containers">
                    <div class="details-container color-container">
                        <div class="article-container">
                            <img src="{{ asset('css/calculator-bmi.png') }}" alt="Project 1" class="project-img">
                        </div>
                        <h2 class="experience-sub-tite project-title">Calculator BMI</h2>
                        <div class="btn-container">
                            <button class="btn btn-color-2 project-btn" onclick="location.href='https://github.com/IlyasBudi/TPA-2-BMI-Calculator'">Github</button>
                            <button class="btn btn-color-2 project-btn" onclick="location.href='https://ilyasbudi.github.io/TPA-2-BMI-Calculator/'">Live Demo</button>
                        </div>
                    </div>
                    <div class="details-container color-container">
                        <div class="article-container">
                            <img src="{{ asset('css/Movie-App.png') }}" alt="Project 2" class="project-img">
                        </div>
                        <h2 class="experience-sub-tite project-title">Movie App</h2>
                        <div class="btn-container">
                            <button class="btn btn-color-2 project-btn" onclick="location.href='https://github.com/IlyasBudi/TPA-3-Movie-App'">Github</button>
                            <button class="btn btn-color-2 project-btn" onclick="location.href='https://ilyasbudi.github.io/TPA-3-Movie-App/'">Live Demo</button>
                        </div>
                    </div>
                    <div class="details-container color-container">
                        <div class="article-container">
                            <img src="{{ asset('css/website-hmif.png') }}" alt="Project 3" class="project-img">
                        </div>
                        <h2 class="experience-sub-tite project-title">Website HMIF ITI</h2>
                        <div class="btn-container">
                            <button class="btn btn-color-2 project-btn" onclick="location.href='https://github.com/HMIF-ITI'">Github</button>
                            <button class="btn btn-color-2 project-btn" onclick="location.href='https://hmif.iti.ac.id'">Live Demo</button>
                        </div>
                    </div>
                </div>
            </div>
            <img src="{{ asset('css/arrow.png') }}" alt="arrow.png" class="icon arrow" onclick="location.href='./#contact'">
        </section>
        <div class="blogs">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="text-center">Blogs</h2>
                        <p class="text-center">Recent Post</p>
                    </div>
                </div>
                <div class="row row-cols-lg-4 row-cols-2 list-blog radius-8">
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
                <div class="row">
                    <div class="col">
                        <div class="tombol d-flex justify-content-center">
                            <a href="/blogs" class="btn mx-3 project">See More -></a>
                        </div>
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
    </main>

@endsection
