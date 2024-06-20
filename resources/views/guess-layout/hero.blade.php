<style>
    .countdown {
        display: flex;
        justify-content: center;
        gap: 10px;
    }

    .countdown-item {
        text-align: center;
        background-color: rgba(255, 255, 255, 0.1);
        border-radius: 10px;
        padding: 20px;
        min-width: 80px;
    }

    .countdown-number {
        display: block;
        font-size: 2em;
        color: white;
    }

    .countdown-label {
        display: block;
        font-size: 1em;
        color: white;
        margin-top: 10px;
    }
</style>

@foreach ($sections as $section)
    @if ($section->sequence == 1)
        <header class="masthead"
            style="background-image: url('{{ asset("../storage/{$section->main_image}") }}'); background-color: rgba(0, 0, 0, 0.7); background-blend-mode: multiply;">
            <div class="container px-4 px-lg-5 h-100">
                <div class="text-center row gx-4 gx-lg-5 h-100 align-items-center justify-content-center">
                    <div class="col-lg-8 align-self-end">
                        <h2 class="text-white font-weight-bold" style="color: white;">{{ $section->description }}</h2>
                        <hr class="divider" style="background-color: white;" />
                    </div>
                    <!-- Countdown Timer -->
                    <div class="col-lg-8 align-self-baseline">
                        <p class="mb-5 text-white-75" style="color: white;">September 3-4, 2024</p>
                        <div id="countdown" class="countdown">
                            <div class="countdown-item">
                                <span class="countdown-number" id="days"></span>
                                <span class="countdown-label">Days</span>
                            </div>
                            <div class="countdown-item">
                                <span class="countdown-number" id="hours"></span>
                                <span class="countdown-label">Hours</span>
                            </div>
                            <div class="countdown-item">
                                <span class="countdown-number" id="minutes"></span>
                                <span class="countdown-label">Minutes</span>
                            </div>
                            <div class="countdown-item">
                                <span class="countdown-number" id="seconds"></span>
                                <span class="countdown-label">Seconds</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        {{-- <p class="mb-5 text-white-75" style="color: white;">{{ $section->content }}</p> --}}
                        <a class="btn btn-primary btn-xl" href="#2"
                            style="background-color: {{ $section->section_color }}; color: white; border-color: white;">Find
                            Out More</a>
                    </div>
                </div>
            </div>
        </header>
    @endif
@endforeach

<!-- Countdown Timer Script -->
<script>
    // Set the date we're counting down to
    var countDownDate = new Date("Sep 3, 2024 00:00:00").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the corresponding elements
        document.getElementById("days").innerHTML = days;
        document.getElementById("hours").innerHTML = hours;
        document.getElementById("minutes").innerHTML = minutes;
        document.getElementById("seconds").innerHTML = seconds;

        // If the count down is over, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("countdown").innerHTML = "EXPIRED";
        }
    }, 1000);
</script>

<!-- Countdown Timer Styles -->
