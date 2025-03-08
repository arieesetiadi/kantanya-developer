@if (!empty($skills))
    <section id="skills" style="padding-top: 1.5rem;">
        <div class="container">
            <div class="row justify-content-around">
                @foreach ($skills as $skill)
                    <div class="col-md-6 col-lg-6 bg-white" style="margin-bottom: 1.5rem">
                        <div class="service-box data-background padding-30 shadow-dark rounded text-center">
                            <img class="service-image" src="{{ $skill->icon_url }}"
                                alt="Icon of {{ $skill->title ?? 'technical' }} skill" />
                            <h3 class="mb-3 mt-0">{{ $skill->title ?? '' }}</h3>
                            <p class="mb-0">{{ $skill->description }}</p>
                        </div>
                        <div class="spacer d-md-none d-lg-none" data-height="30"></div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endif
