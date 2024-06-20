@foreach ($sections as $section)
    @if ($section->sequence == 1)
    <header class="masthead"
    style="background-image: url('{{ asset("../storage/{$section->main_image}") }}'); background-color: rgba(0, 0, 0, 0.7); background-blend-mode: multiply;">
    <div class="container px-4 px-lg-5 h-100">
        <div class="text-center row gx-4 gx-lg-5 h-100 align-items-center justify-content-center">
            <div class="col-lg-8 align-self-end">
                <h1 class="text-white font-weight-bold" style="color: white;">{{ $section->description }}
                </h1>
                <hr class="divider" style="background-color: white;" />
            </div>
            <div class="col-lg-8 align-self-baseline">
                <p class="mb-5 text-white-75" style="color: white;">{{ $section->content }}</p>
                <a class="btn btn-primary btn-xl" href="#about"
                    style="background-color: {{ $section->section_color }}; color: white; border-color: white;">Find
                    Out More</a>
            </div>
        </div>
    </div>
</header>
    @endif
@endforeach
