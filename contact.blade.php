<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link href="https://fonts.bunny.net/css2?family=Kanit:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/scss/home.scss', 'resources/scss/contact.scss'])
</head>
<body>
    @include('header')

    <section class="contact-background">
        <div class="section-header">
            <h3>Got a question?</h3>
            <h5>We'd like to talk more about what you need</h5>
        </div>
    </section>
    <section class="container">
        <div class="grid-container">

            <div class="grid-item">
                <div class="icon-wrapper">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <h1>Address</h1>
                <p>moodlearning</p>
                <p>3/F National Engineering Center</p>
                <p>University of the Philippines</p>
                <p>Diliman, Quezon City</p>
            </div>

            <div class="grid-item">
                <div class="icon-wrapper">
                    <i class="fas fa-envelope"></i>
                </div>
                <h1>Email</h1>
                <p><a href="mailto:contact@moodlearning.com">contact@moodlearning.com</a></p>
            </div>

            <div class="grid-item">
                <div class="icon-wrapper">
                    <i class="fas fa-phone-alt"></i>
                </div>
                <h1>Phone Number</h1>
                <p><a href="tel:+639171378589">(+63) 2 8652 6922</a></p>
                <p><a href="tel:+63287159522">(+63) 2 8715 9522</a></p>
                <p><a href="tel:+639171378589">(+63) 917 137 8589</a></p>
                <p><a href="tel:+639690971471">(+63) 969 097 1471</a></p>
            </div>
        </div>
    </section>

    <section class="call-to-action">
  <h2>Need Assistance?</h2>
  <p>
    Let us respond to requests efficiently and serve you better. 
    This Helpdesk assigns a ticket number to your support request. 
    If you already filed a ticket, you may use the number to track the status of your request. 
    A valid email address is required to submit a ticket.
  </p>
  <div class="logo">
    <a href="https://helpdesk.moodlearning.com/open.php" target="#">
      <img class="img-circle" src="/images/addticket.png" alt="include moodLearning to your day">
    </a>
    <a href="https://helpdesk.moodlearning.com/view.php" target="#">
      <img class="img-circle" src="/images/searchticket.png" alt="include moodLearning to your day">
    </a>
  </div>
  <div class="circle-1"></div>
  <div class="circle-2"></div>
</section>



    @include('footer')
</body>
</html>
