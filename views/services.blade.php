<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Why mL eLearning Services</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.0/css/bootstrap.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/scss/home.scss', 'resources/scss/services.scss', 'resources/js/services.js'])
    
</head>
<body>
    @include('header')

    <section class="services-section">
        <img src="{{ asset('images/services/services-bg.png') }}" alt="Background" class="background-image">
    </section>

    <section class="services">
        <h1>Why mL eLearning Services</h1>

        <div class="carousel-container">
            <button class="carousel-control-prev" role="button" onclick="plusSlides(-1)">
                <span class="carousel-control-prev-icon" aria-hidden="true">&lt;</span>
            </button>
            <button class="carousel-control-next" role="button" onclick="plusSlides(1)">
                <span class="carousel-control-next-icon" aria-hidden="true">&gt;</span>
            </button>

            <div id="carouselIndicators" class="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('images/services/services1.png') }}" class="service-img" alt="Service 1">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/services/services2.png') }}" class="service-img" alt="Service 2">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/services/services3.png') }}" class="service-img" alt="Service 3">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/services/services4.png') }}" class="service-img" alt="Service 4">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/services/services5.jpg') }}" class="service-img" alt="Service 5">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/services/services6.png') }}" class="service-img" alt="Service 6">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/services/services7.jpg') }}" class="service-img" alt="Service 7">
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <div id="fullpic-modal" class="fullpic-modal">
        <span class="close">&times;</span>
        <img class="fullpic-content" id="modal-image" src="" alt="Full Image">
    <div class="fullpic-caption" id="caption"></div>
    </div>

    @include('footer')

    <script src="{{ asset('js/services.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>
