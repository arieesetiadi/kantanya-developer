<section id="contact">
    <div class="container">
        <h2 class="section-title">
            Contact.
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
                            <a class="text-dark text-decoration-none" href="mailto:{{ $personal->email }}"
                                target="_blank">
                                {{ $personal->email }}
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
                            <a class="text-dark text-decoration-none" href="{{ $personal->whatsapp_url }}"
                                target="_blank">
                                {{ $personal->phone }}
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
                            <a class="text-dark text-decoration-none" href="{{ $personal->instagram_url }}"
                                target="_blank">
                                {{ $personal->instagram_username }}
                            </a>
                        </td>
                    </tr>

                    {{-- Github --}}
                    <tr>
                        <td>
                            <img width="18" height="18"
                                src="{{ asset('assets/images/icons/github-original.svg') }}" alt="Github icon">
                        </td>
                        <td>
                            <a class="text-dark text-decoration-none" href="{{ $personal->github_url }}"
                                target="blank">
                                {{ $personal->github_username }}
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
                            <a class="text-dark text-decoration-none" href="{{ $personal->codewars_url }}"
                                target="blank">
                                Codewars ({{ $personal->codewars_username }})
                            </a>
                        </td>
                    </tr>

                    {{-- Linkedin --}}
                    <tr>
                        <td>
                            <img width="18" height="18"
                                src="{{ asset('assets/images/icons/linkedin-original.svg') }}" alt="Linkedin icon">
                        </td>
                        <td>
                            <a class="text-dark text-decoration-none" href="{{ $personal->linkedin_url }}"
                                target="blank">
                                {{ $personal->linkedin_username }}
                            </a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>
