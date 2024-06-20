<div id="portfolio">
    <div class="p-0 container-fluid">
        <div class="row g-0">
            @foreach ($sections as $section)
                @if ($section->sequence == 5)
                        <div class="col-lg-4 col-sm-6">
                            <a target="_blank" class="portfolio-box" href="{{ asset("../landing-page/storage/{$section->main_image}") }}"
                                title="Project Name">
                                <div class="image-wrapper" style="height: 200px; overflow: hidden;">
                                    <img class="img-fluid" src="{{ asset("../landing-page/storage/{$section->main_image}") }}"
                                        alt="..." style="object-fit: cover;" />
                                </div>
                                <div class="portfolio-box-caption">
                                    <div class="project-category text-white-50">{{ $section->description }}</div>
                                    <div class="project-name">{{ $section->content }}</div>
                                </div>
                            </a>
                        </div>
                @endif
            @endforeach
        </div>
    </div>
</div>
