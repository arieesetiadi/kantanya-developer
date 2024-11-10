@extends('layouts.layout')

@push('after-metas')
    <title>Home - Arie's Portfolio</title>
@endpush

@section('content')
    <main class="content">
        {{-- Section Home --}}
        <section class="home d-flex light align-items-center" id="home">
            <div class="container">
                <div class="intro">
                    <h1 class="mb-2 mt-0">Arie Setiadi</h1>

                    <span>
                        <span class="text-rotating">Web Developer</span>
                    </span>

                    {{-- Social Icons --}}
                    <ul class="social-icons light list-inline mb-0 mt-4">
                        <li class="list-inline-item">
                            <a href="https://www.linkedin.com/in/arieesetiadi" aria-label="Visit the LinkedIn account"
                                target="_blank">
                                <img width="20" height="20"
                                    src="{{ asset('assets/images/icons/linkedin-original.svg') }}" alt="LinkedIn icon" />
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://wa.link/3b83dp" aria-label="Get in touch via Whatsapp" target="_blank">
                                <img width="20" height="20" src="{{ asset('assets/images/icons/whatsapp.svg') }}"
                                    alt="WhatsApp icon" />
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://github.com/arieesetiadi" aria-label="Visit the GitHub account" target="_blank">
                                <img width="20" height="20"
                                    src="{{ asset('assets/images/icons/github-original.svg') }}" alt="Github icon" />
                            </a>
                        </li>
                    </ul>

                    <div class="mt-4">
                        <a class="btn btn-default" href="#contact">Get In Touch</a>
                    </div>
                </div>

                {{-- Scroll Down Wheel --}}
                <div class="scroll-down light">
                    <a class="mouse-wrapper" href="#about">
                        <span>Scroll Down</span>
                        <span class="mouse">
                            <span class="wheel"></span>
                        </span>
                    </a>
                </div>
            </div>
        </section>

        {{-- Section About --}}
        <section id="about">
            <div class="container">
                <h2 class="section-title">
                    About<span class="text-danger">.</span>
                </h2>
                <div class="spacer" data-height="60"></div>
                <div class="row">
                    <div class="col-md-12 triangle-left-md triangle-top-sm">
                        <div class="shadow-dark rounded p-5">
                            <div class="row">
                                <div class="col-12">
                                    <p>
                                        I'am a web developer with 2 years of
                                        programming under my belt. Skilled
                                        in Laravel and backend development.
                                        Proven ability to work well in a
                                        team and deliver high-quality code.
                                        Always up for a challenge and
                                        committed to staying on top of the
                                        latest tech trends. I'am able to
                                        coding, debugging, and
                                        troubleshooting and being able to
                                        work well, both independently or as
                                        a part of a team.
                                    </p>

                                    <div class="mt-4">
                                        <a class="btn btn-default w-xs-100 d-inline-flex justify-content-center align-items-center gap-2"
                                            href="assets/resume/resume.pdf" target="_blank">
                                            <img width="18" height="18"
                                                src="{{ asset('assets/images/icons/download-white.svg') }}"
                                                alt="Download icon" />
                                            Resume
                                        </a>
                                    </div>

                                    <div class="mt-4">
                                        <span class="d-block mb-2">Personal Development Stack :</span>
                                        <div class="d-flex gap-3">
                                            <img width="18" height="18"
                                                src="{{ asset('assets/images/icons/html5.svg') }}" alt="HTML icon" />
                                            <img width="18" height="18"
                                                src="{{ asset('assets/images/icons/css3.svg') }}" alt="CSS icon" />
                                            <img width="18" height="18"
                                                src="{{ asset('assets/images/icons/javascript.svg') }}"
                                                alt="Javascript icon" />
                                            <img width="18" height="18"
                                                src="{{ asset('assets/images/icons/laravel.svg') }}" alt="Laravel icon" />
                                            <img width="18" height="18"
                                                src="{{ asset('assets/images/icons/github-original.svg') }}"
                                                alt="Github icon" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Section Skills --}}
        <section id="skills">
            <div class="container">
                <h2 class="section-title"></h2>

                <div class="row justify-content-around">
                    <div class="col-md-6 col-lg-4">
                        <div class="service-box data-background padding-30 text-light shadow-blue rounded text-center"
                            data-color="#6C6CE5">
                            <img class="service-image" src="{{ asset('assets/images/icons/service-1.svg') }}"
                                alt="Frontend development" />
                            <h3 class="mb-3 mt-0">Frontend Development</h3>
                            <p class="mb-0">
                                "Doing Frontend Development with HTML, CSS, and JS"
                            </p>
                        </div>
                        <div class="spacer d-md-none d-lg-none" data-height="30"></div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="service-box data-background padding-30 text-light shadow-pink rounded text-center"
                            data-color="#ff4c60">
                            <img class="service-image" src="{{ asset('assets/images/icons/service-2.svg') }}"
                                alt="Backend development" />
                            <h3 class="mb-3 mt-0">Backend Development</h3>
                            <p class="mb-0">
                                "Doing Backend Development with Laravel Framework"
                            </p>
                        </div>
                        <div class="spacer d-md-none d-lg-none" data-height="30"></div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Section Experience --}}
        <section id="experience">
            <div class="container">
                <h2 class="section-title">
                    Experience<span class="text-danger">.</span>
                </h2>

                <div class="spacer" data-height="60"></div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="timeline edu shadow-dark padding-30 overflow-hidden rounded">
                            {{-- Timeline Item --}}
                            <div class="timeline-container">
                                <div class="content">
                                    <span class="time">2015 - 2018</span>
                                    <h3 class="title">Vocational School</h3>
                                    <p>
                                        SMK Wira Harapan <br />
                                        Computer Engineering & Network
                                    </p>
                                </div>
                            </div>

                            {{-- Timeline Item --}}
                            <div class="timeline-container">
                                <div class="content">
                                    <span class="time">2018 - 2022</span>
                                    <h3 class="title">College</h3>
                                    <p>
                                        ITB STIKOM Bali <br />
                                        Enterprise System Major
                                    </p>
                                </div>
                            </div>

                            <span class="line"></span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="spacer d-md-none d-lg-none" data-height="30"></div>
                        {{-- Timeline Wrapper --}}
                        <div class="timeline exp shadow-dark padding-30 overflow-hidden rounded">
                            {{-- Timeline Item --}}
                            <div class="timeline-container">
                                <div class="content">
                                    <span class="time">2020 - Present</span>
                                    <h3 class="title">
                                        Part-time Freelance
                                    </h3>
                                    <p>
                                        Work from Home<br />
                                        Fullstack Web Developer | Laravel
                                    </p>
                                </div>
                            </div>

                            {{-- Timeline Item --}}
                            <div class="timeline-container">
                                <div class="content">
                                    <span class="time">2023 - Present</span>
                                    <h3 class="title">
                                        Full-time Web Developer
                                    </h3>
                                    <p>
                                        PT Eannovate Creative Technology<br />
                                        Backend Developer | Laravel
                                    </p>
                                </div>
                            </div>

                            {{-- main line --}}
                            <span class="line"></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Section Works --}}
        <section id="works">
            <div class="container">
                <h2 class="section-title">
                    Works<span class="text-danger">.</span>
                </h2>

                <div class="spacer" data-height="60"></div>

                {{-- Portolio Wrapper --}}
                <div class="row portfolio-wrapper">
                    {{-- Portfolio Item - Damamaya --}}
                    <div class="col-lg-6 col-md-6 col-sm-6 grid-item mb-5">
                        <a class="work-content" href="#damamaya-dialog">
                            <div class="portfolio-item shadow-dark rounded">
                                <div class="details">
                                    <span class="term">Web App</span>
                                    <h3 class="title">
                                        Damamaya Cyber Monitor <br /><br />
                                        <img class="mx-1" width="18" height="18"
                                            src="{{ asset('assets/images/icons/html5-white.svg') }}" title="HTML 5"
                                            alt="HTML icon" />
                                        <img class="mx-1" width="18" height="18"
                                            src="{{ asset('assets/images/icons/css3-white.svg') }}" title="CSS 3"
                                            alt="CSS icon" />
                                        <img class="mx-1" width="18" height="18"
                                            src="{{ asset('assets/images/icons/javascript-white.svg') }}"
                                            title="Javascript" alt="Javascript icon" />
                                        <img class="mx-1" width="18" height="18"
                                            src="{{ asset('assets/images/icons/laravel-white.svg') }}" title="Laravel 8"
                                            alt="Laravel 8 icon" />
                                        <img class="mx-1" width="18" height="18"
                                            src="{{ asset('assets/images/icons/bootstrap-5-white.svg') }}"
                                            title="Bootstrap 5" alt="Bootstrap 5 icon" />
                                    </h3>
                                </div>
                                <div class="thumb">
                                    <img loading="lazy"
                                        src="{{ asset('assets/images/projects/app-damamaya/login.webp') }}"
                                        alt="Portfolio thumbnail image" />
                                    <div class="mask"></div>
                                </div>
                            </div>
                        </a>
                        <div class="white-popup zoom-anim-dialog mfp-hide" id="damamaya-dialog">
                            <h2>Damamaya Cyber Monitor</h2>
                            <p>
                                Damamaya is a web-based application
                                developed for internal use in the Denpasar
                                Communication, Informatics, and Statistics
                                Office.
                            </p>
                            <p>
                                The purpose of this application is to help
                                internal agencies, among others to monitor
                                the Denpasar City resident's complaints,
                                tracking local and national issues, and
                                monitoring the Denpasar City subdomain
                                security.
                            </p>

                            <div class="d-block d-md-flex justify-content-between gap-2">
                                <a class="btn btn-default w-100 mt-2" href="https://github.com/arieesetiadi/damamaya-app"
                                    target="_blank">
                                    Check on Github
                                </a>
                            </div>
                        </div>
                    </div>

                    {{-- Portfolio Item - Penjadwalan Ruang Rapat --}}
                    <div class="col-lg-6 col-md-6 col-sm-6 grid-item mb-5">
                        <a class="work-content" href="#scheduler-dialog">
                            <div class="portfolio-item shadow-dark rounded">
                                <div class="details">
                                    <span class="term">Web App</span>
                                    <h3 class="title">
                                        Room Scheduling App
                                        <br /><br />
                                        <img class="mx-1" width="18" height="18"
                                            src="{{ asset('assets/images/icons/html5-white.svg') }}" title="HTML 5"
                                            alt="HTML icon" />
                                        <img class="mx-1" width="18" height="18"
                                            src="{{ asset('assets/images/icons/css3-white.svg') }}" title="CSS 3"
                                            alt="CSS icon" />
                                        <img class="mx-1" width="18" height="18"
                                            src="{{ asset('assets/images/icons/javascript-white.svg') }}"
                                            title="Javascript" alt="Javascript icon" />
                                        <img class="mx-1" width="18" height="18"
                                            src="{{ asset('assets/images/icons/laravel-white.svg') }}" title="Laravel 8"
                                            alt="Laravel 8 icon" />
                                        <img class="mx-1" width="18" height="18"
                                            src="{{ asset('assets/images/icons/bootstrap-5-white.svg') }}"
                                            title="Bootstrap 5" alt="Bootstrap 5 icon" />
                                    </h3>
                                </div>
                                <div class="thumb">
                                    <img loading="lazy"
                                        src="{{ asset('assets/images/projects/app-scheduler/login.webp') }}"
                                        alt="Portfolio thumbnail image" />
                                    <div class="mask"></div>
                                </div>
                            </div>
                        </a>
                        <div class="white-popup zoom-anim-dialog mfp-hide" id="scheduler-dialog">
                            <h2>Room Scheduling App</h2>
                            <p>
                                Dinas Komunikasi, Informatika, dan Statistik
                                Kota Denpasar is one of the agencies
                                government in Denpasar city engaged in
                                technology, information and communication.
                                During this time, the meeting room
                                scheduling process are still using separate
                                documents for each officers so that the
                                documents are not centralized. This probably
                                caused a conflict schedule because the
                                un-centralized documents.
                            </p>
                            <p>
                                So in this research, i built a meeting room
                                scheduling application that can organizing
                                the entire lending process includes create a
                                schedule, schedule approval and rejection,
                                and schedule validation.
                            </p>

                            <div class="d-block d-md-flex justify-content-between gap-2">
                                <a class="btn btn-default w-100 mt-2"
                                    href="https://github.com/arieesetiadi/penjadwalan-app" target="_blank">
                                    <i class="fa-brands fa-github"></i>
                                    Check on Github
                                </a>
                            </div>
                        </div>
                    </div>

                    {{-- Portfolio Item - My Todo --}}
                    <div class="col-lg-6 col-md-6 col-sm-6 grid-item mb-5">
                        <a class="work-content" href="#mytodo-dialog">
                            <div class="portfolio-item shadow-dark rounded">
                                <div class="details">
                                    <span class="term">Web App</span>
                                    <h3 class="title">
                                        Todo App - MEVN Stack
                                        <br /><br />
                                        <img class="mx-1" width="18" height="18"
                                            src="{{ asset('assets/images/icons/html5-white.svg') }}" title="HTML 5"
                                            alt="HTML icon" />
                                        <img class="mx-1" width="18" height="18"
                                            src="{{ asset('assets/images/icons/css3-white.svg') }}" title="CSS 3"
                                            alt="CSS icon" />
                                        <img class="mx-1" width="18" height="18"
                                            src="{{ asset('assets/images/icons/javascript-white.svg') }}"
                                            title="Javascript" alt="Javascript icon" />
                                        <img class="mx-1" width="18" height="18"
                                            src="{{ asset('assets/images/icons/vuejs-white.svg') }}" title="Vue 3"
                                            alt="Vue 3 icon" />
                                        <img class="mx-1" width="18" height="18"
                                            src="{{ asset('assets/images/icons/nodejs-white.svg') }}" title="NodeJS"
                                            alt="NodeJS icon" />
                                        <img class="mx-1" width="18" height="18"
                                            src="{{ asset('assets/images/icons/mongodb-white.svg') }}" title="MongoDB"
                                            alt="MongoDB icon" />
                                    </h3>
                                </div>
                                <div class="thumb">
                                    <img loading="lazy" src="{{ asset('assets/images/projects/app-my-todo/home.webp') }}"
                                        alt="Portfolio thumbnail image" />
                                    <div class="mask"></div>
                                </div>
                            </div>
                        </a>
                        <div class="white-popup zoom-anim-dialog mfp-hide" id="mytodo-dialog">
                            <h2>Todo App - MEVN Stack</h2>
                            <h6>
                                Deployed on Vercel :
                                <a href="https://my-todo-client.vercel.app" target="_blank">
                                    https://my-todo-client.vercel.app
                                </a>
                            </h6>
                            <p>
                                MyTodo is a web application to manage
                                todo-lists built with the MEVN Stack, which
                                stands for MongoDB, ExpressJS, VueJS, and
                                NodeJS.
                            </p>
                            <p>
                                With the MyTodo application, users can
                                create, modify, and delete todo-lists. They
                                can also tag todo-lists with finished state.
                                This application has clean and user friendly
                                interface which makes it easy for users to
                                stay organized and manage their tasks.
                            </p>
                            <div class="d-block d-md-flex justify-content-between gap-2">
                                <a class="btn btn-default w-100 mt-2"
                                    href="https://github.com/arieesetiadi/my-todo-client" target="_blank">
                                    Github - Frontend
                                </a>
                                <a class="btn btn-default w-100 mt-2"
                                    href="https://github.com/arieesetiadi/my-todo-server" target="_blank">
                                    Github - Backend
                                </a>
                            </div>
                        </div>
                    </div>

                    {{-- Portfolio Item - Vtour Jembrana --}}
                    <div class="col-lg-6 col-md-6 col-sm-6 grid-item mb-5">
                        <a class="work-content" href="#kerambitan-dialog">
                            <div class="portfolio-item shadow-dark rounded">
                                <div class="details">
                                    <span class="term">Web Site</span>
                                    <h3 class="title">
                                        Virtual Tour Website
                                        <br /><br />
                                        <img class="mx-1" width="18" height="18"
                                            src="{{ asset('assets/images/icons/html5-white.svg') }}" title="HTML 5"
                                            alt="HTML icon" />
                                        <img class="mx-1" width="18" height="18"
                                            src="{{ asset('assets/images/icons/css3-white.svg') }}" title="CSS 3"
                                            alt="CSS icon" />
                                        <img class="mx-1" width="18" height="18"
                                            src="{{ asset('assets/images/icons/javascript-white.svg') }}"
                                            title="Javascript" alt="Javascript icon" />
                                        <img class="mx-1" width="18" height="18"
                                            src="{{ asset('assets/images/icons/bootstrap-5-white.svg') }}"
                                            title="Bootstrap 5" alt="Bootstrap 5 icon" />

                                    </h3>
                                </div>
                                <div class="thumb">
                                    <img loading="lazy"
                                        src="{{ asset('assets/images/projects/site-kerambitan/home.webp') }}"
                                        alt="Portfolio thumbnail image" />
                                    <div class="mask"></div>
                                </div>
                            </div>
                        </a>
                        <div class="white-popup zoom-anim-dialog mfp-hide" id="kerambitan-dialog">
                            <h2>Virtual Tour Website</h2>
                            <p>
                                Puri Agung Kerambitan has not yet been
                                visited by many tourists and still wants to
                                survive in line with the development of
                                cultural tourism and continue to provide
                                benefits for society. Along the times is
                                getting faster, virtual tour is one of the
                                digital technology that delivers experience
                                of "touring" just by looking at the device
                                screen. Objective of this research is
                                designing and build a Virtual Tour 360
                                Application Degree as an introduction to
                                Puri Agung Kerambitan.
                            </p>

                            <div class="d-block d-md-flex justify-content-between gap-2">
                                <a class="btn btn-default w-100 mt-2"
                                    href="https://github.com/arieesetiadi/vtour-180030179" target="_blank">
                                    Check on Github
                                </a>
                            </div>
                        </div>
                    </div>

                    {{-- Portfolio Item - SPKT --}}
                    <div class="col-lg-6 col-md-6 col-sm-6 grid-item d-none mb-5">
                        <a class="work-content" href="#spkt-dialog">
                            <div class="portfolio-item shadow-dark rounded">
                                <div class="details">
                                    <span class="term">Web App</span>
                                    <h3 class="title">
                                        Badung Integrated Police Service Center<br /><br />
                                        <img class="mx-1" width="18" height="18"
                                            src="{{ asset('assets/images/icons/html5-white.svg') }}" title="HTML 5"
                                            alt="HTML icon" />
                                        <img class="mx-1" width="18" height="18"
                                            src="{{ asset('assets/images/icons/css3-white.svg') }}" title="CSS 3"
                                            alt="CSS icon" />
                                        <img class="mx-1" width="18" height="18"
                                            src="{{ asset('assets/images/icons/javascript-white.svg') }}"
                                            title="Javascript" alt="Javascript icon" />
                                        <img class="mx-1" width="18" height="18"
                                            src="{{ asset('assets/images/icons/laravel-white.svg') }}" title="Laravel 8"
                                            alt="Laravel 8 icon" />
                                        <img class="mx-1" width="18" height="18"
                                            src="{{ asset('assets/images/icons/bootstrap-5-white.svg') }}"
                                            title="Bootstrap 5" alt="Bootstrap 5 icon" />
                                    </h3>
                                </div>
                                <div class="thumb">
                                    <img loading="lazy" src="{{ asset('assets/images/projects/app-spkt/home.webp') }}"
                                        alt="Portfolio thumbnail image" />
                                    <div class="mask"></div>
                                </div>
                            </div>
                        </a>
                        <div class="white-popup zoom-anim-dialog mfp-hide" id="spkt-dialog">
                            <h2>Badung Integrated Police Service Center</h2>
                            <p>
                                The Integrated Police Service Center or
                                often abbreviated as SPKT is a part of the
                                police to provide services to the community,
                                in the form of receiving and first handling
                                reports or complaints. So far, the reporting
                                process carried out by the community is
                                still done manually, by coming directly to
                                the Badung Polres SPKT so that is a hassle
                                for the community and the physical storage
                                for incoming reports continues to grow so
                                that it requires a lot of space. So in this
                                study, a web-based application was built
                                that could make it easier for the public to
                                report and help the Badung Polres SPKT
                                reduce storage space for physical documents.
                            </p>
                            <p>
                                This application uses the Software
                                Development Life Cycle (SDLC) method with a
                                Waterfall model which consists of the
                                processes of communication, planning,
                                modeling, construction, and deployment.
                                Based on the results of the trial and
                                evaluation of the system for the application
                                that was built, it can be concluded that
                                this application can help the public to
                                report online and assist the Badung Polres
                                SPKT admin in managing reporting and storing
                                reporting documents digitally.
                            </p>
                            <div class="d-block d-md-flex justify-content-between gap-2">
                                <a class="btn btn-default w-100 mt-2"
                                    href="https://github.com/arieesetiadi/pelayanan-terpadu-app" target="_blank">
                                    Check on Github
                                </a>
                            </div>
                        </div>
                    </div>

                    {{-- Portfolio Item - Films --}}
                    <div class="col-lg-6 col-md-6 col-sm-6 grid-item d-none mb-5">
                        <a class="work-content" href="#films-dialog">
                            <div class="portfolio-item shadow-dark rounded">
                                <div class="details">
                                    <span class="term">Web Site</span>
                                    <h3 class="title">
                                        Film Provider - TMDB API
                                        <br /><br />
                                        <img class="mx-1" width="18" height="18"
                                            src="{{ asset('assets/images/icons/html5-white.svg') }}" title="HTML 5"
                                            alt="HTML icon" />
                                        <img class="mx-1" width="18" height="18"
                                            src="{{ asset('assets/images/icons/css3-white.svg') }}" title="CSS 3"
                                            alt="CSS icon" />
                                        <img class="mx-1" width="18" height="18"
                                            src="{{ asset('assets/images/icons/javascript-white.svg') }}"
                                            title="Javascript" alt="Javascript icon" />
                                        <img class="mx-1" width="18" height="18"
                                            src="{{ asset('assets/images/icons/vuejs-white.svg') }}" title="Vue 3"
                                            alt="Vue 3 icon" />
                                    </h3>
                                </div>
                                <div class="thumb">
                                    <img loading="lazy" src="{{ asset('assets/images/projects/vue-films-app/home-2.webp') }}"
                                        alt="Portfolio thumbnail image" />
                                    <div class="mask"></div>
                                </div>
                            </div>
                        </a>
                        <div class="white-popup zoom-anim-dialog mfp-hide" id="films-dialog">
                            <h2>Film Provider - TMDB API</h2>
                            <p>
                                This is a personal project that made by
                                experimenting using public REST APIs (
                                <a href="https://www.themoviedb.org/documentation/api" target="_blank">
                                    The Movie DB
                                </a>
                                ) to create a website using Vue JS version
                                3. The main purpose is to explore design
                                features and patterns in the new Vue JS
                                version 3 and learning how to use/consume
                                REST API from the front-end of the
                                application.
                            </p>
                            <div class="d-block d-md-flex justify-content-between gap-2">
                                <a class="btn btn-default w-100 mt-2" href="https://github.com/arieesetiadi/vue3-films"
                                    target="_blank">
                                    Check on Github
                                </a>
                            </div>
                        </div>
                    </div>

                    {{-- Portfolio Item - REST API --}}
                    <div class="col-lg-6 col-md-6 col-sm-6 grid-item d-none mb-5">
                        <a class="work-content" href="#api-cashier-dialog">
                            <div class="portfolio-item shadow-dark rounded">
                                <div class="details">
                                    <span class="term">REST API</span>
                                    <h3 class="title">
                                        REST API Cashier App <br /><br />
                                        <img class="mx-1" width="18" height="18"
                                            src="{{ asset('assets/images/icons/nodejs-white.svg') }}" title="NodeJS"
                                            alt="NodeJS icon" />
                                        <img class="mx-1" width="18" height="18"
                                            src="{{ asset('assets/images/icons/mongodb-white.svg') }}" title="MongoDB"
                                            alt="MongoDB icon" />
                                    </h3>
                                </div>
                                <div class="thumb">
                                    <img loading="lazy" src="{{ asset('assets/images/projects/api-cashier-app/main.webp') }}"
                                        alt="Portfolio thumbnail image" />
                                    <div class="mask"></div>
                                </div>
                            </div>
                        </a>
                        <div class="white-popup zoom-anim-dialog mfp-hide" id="api-cashier-dialog">
                            <h2>REST API Cashier App</h2>
                            <p>
                                This repository contains an API created
                                using NodeJS (Express) as the back-end of
                                the cashier application includes
                                Authentication, Manage Category and Product.
                            </p>

                            <div class="d-block d-md-flex justify-content-between gap-2">
                                <a class="btn btn-default w-100 mt-2"
                                    href="https://github.com/arieesetiadi/api-cashier-app" target="_blank">
                                    Check on Github
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-center">
                    <a class="btn btn-default w-xs-100 d-inline-flex justify-content-center align-items-center mt-3 gap-2"
                        href="https://github.com/arieesetiadi" target="_blank">
                        <img width="18" height="18" src="assets/images/icons/github-original-white.svg"
                            title="Github" alt="Github icon" />
                        Explore more on Github
                    </a>
                </div>
            </div>
        </section>

        {{-- Section Contact --}}
        <section id="contact">
            <div class="container">
                <h2 class="section-title">
                    Contact<span class="text-danger">.</span>
                </h2>

                <div class="spacer" data-height="60"></div>

                <div class="row">
                    <div class="col-sm-12 col-md-4">
                        <table class="table-borderless table">
                            {{-- Email --}}
                            <tr>
                                <td>
                                    <img width="18" height="18" src="{{ asset('assets/images/icons/envelope.svg') }}"
                                        alt="Email icon">
                                </td>
                                <td>
                                    <a class="text-dark text-decoration-none" href="mailto:ariee.setiadi@gmail.com"
                                        target="_blank">
                                        ariee.setiadi@gmail.com
                                    </a>
                                </td>
                            </tr>

                            {{-- Whatsapp --}}
                            <tr>
                                <td>
                                    <img width="18" height="18" src="{{ asset('assets/images/icons/whatsapp.svg') }}"
                                        alt="Whatsapp icon">
                                </td>
                                <td>
                                    <a class="text-dark text-decoration-none" href="https://wa.link/3b83dp"
                                        target="_blank">
                                        +62 821 4633 5727
                                    </a>
                                </td>
                            </tr>

                            {{-- Instagram --}}
                            <tr>
                                <td>
                                    <img width="18" height="18" src="{{ asset('assets/images/icons/instagram.svg') }}"
                                        alt="Instagram icon">
                                </td>
                                <td>
                                    <a class="text-dark text-decoration-none"
                                        href="https://www.instagram.com/arieesetiadi" target="_blank">
                                        arieesetiadi
                                    </a>
                                </td>
                            </tr>

                            {{-- Github --}}
                            <tr>
                                <td>
                                    <img width="18" height="18" src="{{ asset('assets/images/icons/github-original.svg') }}"
                                        alt="Github icon">
                                </td>
                                <td>
                                    <a class="text-dark text-decoration-none" href="https://github.com/arieesetiadi"
                                        target="blank">
                                        arieesetiadi
                                    </a>
                                </td>
                            </tr>

                            {{-- Codewars --}}
                            <tr>
                                <td>
                                    <img width="18" height="18" src="{{ asset('assets/images/icons/code.svg') }}"
                                        alt="Codewars icon">
                                </td>
                                <td>
                                    <a class="text-dark text-decoration-none"
                                        href="https://www.codewars.com/users/arieesetiadi" target="blank">
                                        Codewars (arieesetiadi)
                                    </a>
                                </td>
                            </tr>

                            {{-- Linkedin --}}
                            <tr>
                                <td>
                                    <img width="18" height="18" src="{{ asset('assets/images/icons/linkedin-original.svg') }}"
                                        alt="Linkedin icon">
                                </td>
                                <td>
                                    <a class="text-dark text-decoration-none"
                                        href="https://www.linkedin.com/in/arieesetiadi/" target="blank">
                                        Arie Setiadi
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </section>

        <div class="spacer" data-height="96"></div>
    </main>
@endsection
