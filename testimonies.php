<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="testimonies.css">
    <link rel="stylesheet" href="globalstyle.css">
    <title>Document</title>
</head>

<body>
    <div class="contact_absolute">
        <a href="tel:+">
            <img src="/Dental-WebApp/images/img/icons/phone-fill.png" alt="">
        </a>
    </div>
    <div class="message_absolute">
        <a href="mailto:">
            <img src="/Dental-WebApp/images/img/icons/email.png" alt="">
        </a>
    </div>
    <img class="parallax_effect rellax" data-rellax-speed="3" src="/Dental-WebApp/images/img/icons/inverted_comma.png" alt="">


    <!-- navbar section start here -->
    <section>
        <?php
        include('navbar.php');
        ?>
    </section>
    <!-- navbar section end here -->

    <!-- header section start here -->
    <section>
        <div class="why_us_header">
            <div class="why_us_header_text">Testimonies</div>
            <div class="secondary_navLink">
                <span><a href="homepage">Home</a></span>
                <span><a href="testimonies">Testimonies</a></span>
            </div>
        </div>
    </section>
    <!-- header section end here -->

    <!-- main content script start here -->
    <section>
        <div class="main_content_container">
            <div class="testimonies_subtext">
                If you are looking for a dentist, then look no further than Ivory Dental Craft! We feel we’re the best, but you don’t have to take our word for it. Read what clients of Ivory Dental Craft have to say about their experience! We’re consistently ranked one of the top dental offices in the nation, as well as one of the best dentists in Mumbai.
            </div>
            <div class="doctors_block_header">
                Client <span style="font-weight: bold;">Testimonials</span>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="testimonies_card">
                        <div class="testimonies_card_img"></div>
                        <div class="testimonies_card_client_name">Christopher Doe</div>
                        <div class="testimonies_card_client_address">Orlando, Florida</div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="testimonies_card">
                        <div class="testimonies_card_img"></div>
                        <div class="testimonies_card_client_name">Christopher Doe</div>
                        <div class="testimonies_card_client_address">Orlando, Florida</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- main content script end here -->

    <!-- footer script start here -->
    <?php
    include('footer.php')
    ?>
    <!-- footer script end here -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/rellax/1.11.0/rellax.min.js"></script>

</body>

</html>

<script>
    var rellax = new Rellax('.rellax', {
        center:true,
        // wrapper:'.custom-element'
    });
</script>