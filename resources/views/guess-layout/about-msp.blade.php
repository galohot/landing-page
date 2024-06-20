@foreach ($sections as $section)
    @if ($section->sequence == 3)
        <!-- Section for sequence 2 -->
        <section class="py-5 d-flex align-items-center flex-grow-1" id="{{$section->sequence}}"
            style="@if ($section->has_image)
                background-image: url('{{ asset("../storage/{$section->main_image}") }}'); background-color: rgba(0, 0, 0, 0.7); background-blend-mode: multiply;
                @else
                background-color:{{ $section->section_color }};
                @endif">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="text-center col-lg-8">
                        <h2 class="mt-0 text-white">{{ $section->title }}</h2>
                        <hr class="divider divider-light" />
                        <p class="mb-4 text-white-75">{{ $section->content }}</p>
                        <a class="btn btn-light btn-xl" href="{{ $section->link }}">To MSP Website</a>
                    </div>
                </div>
            </div>
        </section>
    @endif
@endforeach
