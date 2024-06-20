<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="#page-top">
            <img src="{{ asset("../storage/{$siteSetting->site_logo}") }}" alt="Logo" style="height: 60px;">
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="my-2 navbar-nav ms-auto my-lg-0">
                @foreach ($sections as $section)
                    @if ($section->sequence != 1 && $section->sequence != 4 && $section->sequence != 5)
                        <li class="nav-item"><a class="nav-link"
                                href="#{{ $section->sequence }}">{{ $section->title }}</a>
                        </li>
                    @endif
                @endforeach
                <li class="nav-item"><a class="nav-link" href="#4">Objectives</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="#5">Portfolio</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="#6">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
