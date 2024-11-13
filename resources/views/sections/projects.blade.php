@if (!empty($projects))
    <section id="projects">
        <div class="container">
            <h2 class="section-title">
                Recent Projects.
            </h2>

            <div class="spacer" data-height="60"></div>

            <div class="row portfolio-wrapper">
                @foreach ($projects as $project)
                    <div class="col-lg-6 col-md-6 col-sm-6 grid-item mb-5">
                        <a class="work-content" href="#project-{{ $loop->iteration }}-modal">
                            <div class="portfolio-item shadow-dark rounded">
                                <div class="details">
                                    <span class="term">{{ $project->type_name ?? 'Web' }}</span>
                                    <h3 class="title">
                                        {{ $project->title ?? '' }}
                                        <br><br>
                                        <small>{{ $project->headline ?? '' }}</small>
                                    </h3>
                                </div>
                                <div class="thumb">
                                    <img loading="lazy" src="{{ $project->thumbnail_image_url }}"
                                        alt="Image of {{ $project->title ?? 'the project' }}" />
                                    <div class="mask"></div>
                                </div>
                            </div>
                        </a>
                        <div class="white-popup zoom-anim-dialog mfp-hide" id="project-{{ $loop->iteration }}-modal">
                            <h2>{{ $project->title ?? '' }}</h2>
                            <div>{{ $project->description ?? '' }}</div>
                            <div class="d-block d-md-flex">
                                <button class="btn btn-default btn-mfp-close mt-4">
                                    Close
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="d-flex justify-content-center">
                <a class="btn btn-default w-xs-100 d-inline-flex justify-content-center align-items-center mt-3 gap-2"
                    href="{{ $personal->github_url }}" target="_blank">
                    <img width="18" height="18" src="assets/images/icons/github-original-white.svg"
                        title="Github" alt="Github icon" />
                    Explore more on Github
                </a>
            </div>
        </div>
    </section>
@endif
