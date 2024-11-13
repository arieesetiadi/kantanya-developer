<section id="about">
    <div class="container">
        <h2 class="section-title">
            About.
        </h2>

        <div class="spacer" data-height="60"></div>

        <div class="row">
            <div class="col-md-12 triangle-left-md triangle-top-sm bg-white">
                <div class="shadow-dark rounded p-5">
                    <div class="row">
                        <div class="col-12">
                            <p>{{ $personal->about ?? '' }}</p>

                            @if (!empty($personal->resume_path))
                                <div class="mt-4">
                                    <a class="btn btn-default w-xs-100 d-inline-flex justify-content-center align-items-center gap-2"
                                        href="{{ $personal->resume_url }}" target="_blank">
                                        <img width="18" height="18"
                                            src="{{ asset('assets/images/icons/download-white.svg') }}"
                                            alt="Download icon" />
                                        Resume
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
