<section class="page-section" id="4">
    <div class="container px-4 px-lg-5">
        <h2 class="mt-0 text-center">Objectives</h2>
        <hr class="divider" />
        <div class="row gx-4 gx-lg-5">
            @foreach ($sections as $section)
                @if ($section->sequence == 4)
                    <div class="text-center col-lg-3 col-md-6">
                        <div class="mt-5">
                            <div class="mb-2">
                                @foreach ($section->thumbnails as $thumbnail)
                                    @if ($thumbnail->is_active)
                                        <img src="{{ asset("../storage/{$thumbnail->thumbnail_path}") }}"
                                            alt="Sturdy Themes" class="rounded-circle"
                                            style="width: 3rem; height: 3rem; object-fit: contain;">
                                    @endif
                                @endforeach
                            </div>
                            <h3 class="mb-2 h4">{{ $section->description }}</h3>
                            <p class="mb-0 text-muted">{{ $section->content }}</p>
                        </div>
                    </div>
                @endif
            @endforeach

        </div>
    </div>
</section>
