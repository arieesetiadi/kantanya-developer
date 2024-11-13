@use(App\Enums\ExperienceType)

@if (!empty($experiences[ExperienceType::Work->value]) || !empty($experiences[ExperienceType::Education->value]))
    <section id="experiences">
        <div class="container">
            <h2 class="section-title">
                Experiences.
            </h2>

            <div class="spacer" data-height="60"></div>

            <div class="row">
                @foreach ([ExperienceType::Work->value, ExperienceType::Education->value] as $type)
                    @if (!empty($experiences[$type]))
                        <div class="col-md-6 bg-white">
                            <div class="spacer d-md-none d-lg-none" data-height="30"></div>
                            <div class="timeline exp shadow-dark padding-30 overflow-hidden rounded">
                                @foreach ($experiences[$type] as $experience)
                                    <div class="timeline-container">
                                        <div class="content">
                                            <span class="time">{{ $experience->timeline }}</span>
                                            <div class="d-flex align-items-center gap-2">
                                                @if ($type == ExperienceType::Work->value)
                                                    <img width="20" height="20"
                                                        src="{{ asset('assets/images/icons/briefcase-line.svg') }}"
                                                        alt="Briefcase icon">
                                                @else
                                                    <img width="20" height="20"
                                                        src="{{ asset('assets/images/icons/graduation-cap-line.svg') }}"
                                                        alt="Graduation cap icon">
                                                @endif

                                                <h3 class="title">
                                                    {{ $experience->title ?? '' }}
                                                </h3>
                                            </div>
                                            <p>
                                                {{ $experience->place ?? '' }}<br />
                                                {{ $experience->role ?? '' }}
                                            </p>
                                        </div>
                                    </div>
                                @endforeach

                                <span class="line"></span>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
@endif
