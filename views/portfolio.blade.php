<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/portfolio.js', 'resources/scss/portfolio.scss', 'resources/scss/header.scss', 'resources/scss/footer.scss'])
</head>
<body>
    @include('header')
    <div class="slider">
        <img id="img-1" src="{{ asset('images/portfolio/portfolio1.png') }}" alt="Image 1">
        <img id="img-2" src="{{ asset('images/portfolio/portfolio2.png') }}" alt="Image 2">
        <img id="img-3" src="{{ asset('images/portfolio/portfolio3.png') }}" alt="Image 3">
        <img id="img-4" src="{{ asset('images/portfolio/portfolio4.png') }}" alt="Image 4">
        <img id="img-5" src="{{ asset('images/portfolio/portfolio5.png') }}" alt="Image 5">
    </div>
    <div class="navigation-button">
        <span class="dot active" onclick="changeSlide(0)"></span>
        <span class="dot" onclick="changeSlide(1)"></span>
        <span class="dot" onclick="changeSlide(2)"></span>
        <span class="dot" onclick="changeSlide(3)"></span>
        <span class="dot" onclick="changeSlide(4)"></span>
    </div>
    <section class="story">
        <h1>Why moodLearning?</h1>
        <div class="icons">
            <div class="icon" data-step="1">
                <img src="{{ asset('images/portfolio/diversified.png') }}" alt="diversified">
            </div>
            <div class="icon" data-step="2">
                <img src="{{ asset('images/portfolio/grow.png') }}" alt="grow">
            </div>
            <div class="icon" data-step="3">
                <img src="{{ asset('images/portfolio/value.png') }}" alt="investment">
            </div>
            <div class="icon" data-step="4">
                <img src="{{ asset('images/portfolio/investment.png') }}" alt="investment">
            </div>
            <div class="icon" data-step="5">
                <img src="{{ asset('images/portfolio/reflect.png') }}" alt="reflect">
            </div>
        </div>
        <div class="details" id="details">
            <h2>Diversified — Quisque a quam ante</h2>
            <p><b>moodLearning</b> has a diversified portfolio of clients from government, pharmaceutical industry, insurance, nutrition, publishing, international agencies, multinational companies, trade groups, professional societies, non-governmental organizations. Most of our contracts are covered by non-disclosure agreements but, with permission, our partner companies may be referenced in specific presentations, proposals, and reports. At moodLearning, we value discretion.</p>
        </div>
        <h2 class="quote">Work with us!</h2>
    </section>
    @include('footer')
</body>
</html>
