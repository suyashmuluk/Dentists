<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="./aboutus.css">
    <script src="https://kit.fontawesome.com/c2b848f28d.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./globalstyle.css">
    <title>Document</title>
</head>

<body>
    <div class="contact_absolute">
        <a href="tel:+">
            <img src="./images/img/icons/phone-fill.png" alt="">
        </a>
    </div>
    <div class="message_absolute">
        <a href="mailto:">
            <img src="./images/img/icons/email.png" alt="">
        </a>
    </div>

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
            <div class="why_us_header_text">Why Us?</div>
            <div class="secondary_navLink">
                <span><a href="homepage">Home</a></span>
                <span><a href="about">Why us?</a></span>
            </div>
        </div>
    </section>
    <!-- header section end here -->

    <!-- main content script start here -->
    <section>
        <div class="main_content_container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="./images/row_img.png" style="width: 100%" alt="" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="content_header" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1000">
                        Relationship Based <span style="font-weight: bold;">Dental Practice</span>
                    </div>
                    <div class="content_desc" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1300">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                        laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore architecto beatae vitae dicta
                        sunt explicabo.
                    </div>
                </div>
            </div>
        </div>

        <div class="main_content_container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="content_header" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1000">
                        Awesome <span style="font-weight: bold;">Technology</span>
                    </div>
                    <div class="content_desc" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1300">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                        laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore architecto beatae vitae dicta
                        sunt explicabo.
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="./images/row_img.png" style="width: 100%" alt="" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
                </div>
            </div>
        </div>

        <div class="appointment_block">
            <div class="content_container_secondary">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-12">
                        <div class="appointment_block_desc">Better life through <span style="font-weight: bold;">better
                                dentistry!</span></div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 btn_container">
                        <button class="get_connected_btn">
                            Book Appointment
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="doctors_block">
            <div class="main_content_container">
                <div class="doctors_block_header" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
                    Meet <span style="font-weight: bold;">Our Doctors</span>
                </div>
                <!-- <div class="doctors_name_block_container">
                    <div class="doctors_name_block">
                        <div class="doctors_name active_tab"><span>Dr. Nikhil G</span></div>
                        <div class="doctors_name"><span>Dr. Nikhil G</span></div>
                        <div class="doctors_name"><span>Dr. Nikhil G</span></div>
                        <div class="doctors_name"><span>Dr. Nikhil G</span></div>
                    </div>
                </div> -->
                <div id="doctors-carousel" class="owl-carousel">
                    <div class="carousel1">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12 text-center">
                                <img src="./images/doctor.png" alt="" class="img_media_view">
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="doctor_carousel_name">
                                    Dr. Nikhil
                                </div>
                                <div class="content_desc">
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                    laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore architecto beatae vitae
                                    dicta
                                    sunt explicabo.
                                    <br><br>
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                    laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore architecto beatae vitae
                                    dicta
                                    sunt explicabo.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel2">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12 text-center">
                                <img src="./images/doctor.png" alt="" class="img_media_view">
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="doctor_carousel_name">
                                    Dr. Nikhil
                                </div>
                                <div class="content_desc">
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                    laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore architecto beatae vitae
                                    dicta
                                    sunt explicabo.
                                    <br><br>
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                    laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore architecto beatae vitae
                                    dicta
                                    sunt explicabo.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel3">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12 text-center">
                                <img src="./images/doctor.png" alt="" class="img_media_view">
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="doctor_carousel_name">
                                    Dr. Nikhil
                                </div>
                                <div class="content_desc">
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                    laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore architecto beatae vitae
                                    dicta
                                    sunt explicabo.
                                    <br><br>
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                    laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore architecto beatae vitae
                                    dicta
                                    sunt explicabo.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel4">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12 text-center">
                                <img src="./images/doctor.png" alt="" class="img_media_view">
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="doctor_carousel_name">
                                    Dr. Nikhil
                                </div>
                                <div class="content_desc">
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                    laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore architecto beatae vitae
                                    dicta
                                    sunt explicabo.
                                    <br><br>
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                    laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore architecto beatae vitae
                                    dicta
                                    sunt explicabo.
                                </div>
                            </div>
                        </div>
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


    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>

</html>

<script>
    AOS.init();

    $(document).ready(function() {
        $('#doctors-carousel').owlCarousel({
            items: 1,
            itemsDesktop: [1000, 1],
            itemsDesktopSmall: [979, 1],
            itemsTablet: [777, 1],
            pagination: true,
            navigation: true,
            navigationText: ["", ""],
            slideSpeed: 1000,
            autoPlay: true
        })
    })
</script>