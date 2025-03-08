<section class="home d-flex light align-items-center" id="home">
    <div class="container">
        <div class="intro">
            <h1 class="mb-2 mt-0">{{ $personal->name ?? '' }}</h1>

            <span>
                <span class="text-rotating">{{ $personal->headline ?? '' }}</span>
            </span>

            {{-- Social Icons --}}
            <ul class="social-icons light list-inline mb-0 mt-4">
                @if (!empty($personal->linkedin_url))
                    <li class="list-inline-item">
                        <a href="{{ $personal->linkedin_url }}" aria-label="Visit the LinkedIn account"
                            target="_blank">
                            <img width="20" height="20"
                                src="{{ asset('assets/images/icons/linkedin-original.svg') }}" alt="LinkedIn icon" />
                        </a>
                    </li>
                @endif

                @if (!empty($personal->whatsapp_url))
                    <li class="list-inline-item">
                        <a href="{{ $personal->whatsapp_url }}" aria-label="Get in touch via Whatsapp" target="_blank">
                            <img width="20" height="20" src="{{ asset('assets/images/icons/whatsapp.svg') }}"
                                alt="WhatsApp icon" />
                        </a>
                    </li>
                @endif
                
                @if (!empty($personal->github_url))
                    <li class="list-inline-item">
                        <a href="{{ $personal->github_url }}" aria-label="Visit the GitHub account" target="_blank">
                            <img width="20" height="20" src="{{ asset('assets/images/icons/github-original.svg') }}"
                                alt="Github icon" />
                        </a>
                    </li>
                @endif
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
