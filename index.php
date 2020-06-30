<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="/Dental-WebApp/twentytwenty-master/css/twentytwenty.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <script src="https://kit.fontawesome.com/c2b848f28d.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="/Dental-WebApp/smooth-scroll.js"></script>
    <script src="/Dental-Webapp/form-validate.js"></script>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="/Dental-WebApp/globalstyle.css">
    <title>Document</title>
</head>

<body>
    <div class="contact_absolute">
        <div class="wave_anim">
            <a href="tel:+919870287870">
                <img src="/Dental-WebApp/images/img/icons/phone-fill.png" alt="">
            </a>
        </div>
    </div>
    <div class="message_absolute">
        <div class="wave_anim">
            <a href="mailto:">
                <img src="/Dental-WebApp/images/img/icons/email.png" alt="">
            </a>
        </div>
    </div>

    <!-- book appointment modal section start here -->
    <section>
        <div class="modal fade" style="z-index: 99999" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal_header">
                        <div class="modal_title">
                            Book <b>Appointment</b>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal_body_form">
                        <form action="">
                            <div>
                                <input type="text" class="custom_input" id="name" style="margin-top: 0;" placeholder="Full name">
                                <div id="name-error"></div>
                            </div>
                            <div>
                                <input type="text" class="custom_input" id="email" placeholder="Email(optional)">
                                <div id="email-error"></div>
                            </div>
                            <div>
                                <input type="tel" class="custom_input" id="mob_number" placeholder="Phone number">
                                <div id="mob_number-error"></div>
                            </div>
                            <div>
                                <input type="date" class="custom_input" id="date" placeholder="Date">
                                <div id="date-error"></div>
                            </div>
                            <div>
                                <select class="custom_input" id="reference">
                                    <option selected>Reference</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <div id="reference-error"></div>
                            </div>
                            <div>
                                <textarea class="custom_input" id="message" placeholder="Enter message here"></textarea>
                                <div id="message-error"></div>
                            </div>
                        </form>
                    </div>
                    <div class="modal_footer">
                        <button class="get_connected_btn" type="submit" id="book" data-dismiss="modal">
                            Book Appointment
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- book appointment modal section end here -->

    <!-- navbar section start here -->
    <section>
        <?php
        include('navbar.php');
        ?>
    </section>
    <!-- navbar section end here -->

    <!-- main content start here -->
    <div class="scroll-wrapper">
        <section>
            <div class="landing_page">
                <div class="landing_page_header">
                    Welcome to<br>Ivory Dental Craft
                </div>
                <div class="landing_page_subtext">
                    “Crafting beautiful smiles with better life”
                </div>

                <button class="get_connected_btn" data-toggle="modal" data-target="#exampleModal">
                    Get Connected
                </button>
            </div>
            <div class="main_content_container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="content_header" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1000">
                            Why <span style="font-weight: bold;">Us?</span>
                        </div>
                        <div class="content_desc desc_bold" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1300">
                            Afraid of going to a dentist? <br> Well! Who isn’t? Dental pain itself is a bad experience
                        </div>

                        <div class="content_desc" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1400">
                            Our aim is to give you best Dental Treatment through expert group of doctors using latest technologies in relaxed and friendly environment. We focus on personalized attention, compassionate care and excellent results. <br><br> Owner and Founder of Ivory Dental Craft, Dr. Nikhil Ghavri is graduated from India’s renowned Dental Institute <span style="font-weight: 600">GOVT. DENTAL COLLEGE & HOSPITAL, Mumbai (St. George Hospital).</span> His mission is to transform your fear of Dentist and Dental Treatments in an unforgettable excellent experience through his skills using modernized approach at a well-equipped clinic. <br><br> We look forward to help you in the best possible way.
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <img src="/Dental-WebApp/images/row_img.png" style="width: 100%" alt="" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
                    </div>
                </div>
            </div>

            <div class="testimonials_container">
                <div class="doctors_block_header" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
                    What people say <span style="font-weight: bold;">about us?</span>
                </div>
                <div style="position: relative">
                    <div id="testimony-carousel" class="owl-carousel">
                        <div class="carousel1">
                            <div class="testimonies_card">
                                <div class="testimonies_card-border-Left"></div>
                                <div class="row">
                                    <div class="col-lg-8 col-md-8 col-12">
                                        <div class="testimonies_card_desc">
                                            Sed ut perspiciatis unde omnis iste natus error sit volup tatem accusantium doloremque laudantium totam rem aperiam, eaque ipsa.
                                        </div>
                                        <div class="client_info_grid">
                                            <div class="testimonies_card-client_img"></div>
                                            <div class="client_info">
                                                <div class="client_info_name">Christopher Doe</div>
                                                <div class="client_info_address">Orlando, Florida</div>
                                            </div>
                                            <img class="inverted_comma_img" src="/Dental-WebApp/images/img/icons/inverted_comma.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12">
                                        <img src="/Dental-WebApp/images/img/icons/before_pic.png" alt="" style="width: inherit">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel2">
                            <div class="testimonies_card">
                                <div class="testimonies_card-border-Left"></div>
                                <div class="row">
                                    <div class="col-lg-8 col-md-8 col-12">
                                        <div class="testimonies_card_desc">
                                            Sed ut perspiciatis unde omnis iste natus error sit volup tatem accusantium doloremque laudantium totam rem aperiam, eaque ipsa.
                                        </div>
                                        <div class="client_info_grid">
                                            <div class="testimonies_card-client_img"></div>
                                            <div class="client_info">
                                                <div class="client_info_name">Christopher Doe</div>
                                                <div class="client_info_address">Orlando, Florida</div>
                                            </div>
                                            <img class="inverted_comma_img" src="/Dental-WebApp/images/img/icons/inverted_comma.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12">
                                        <img src="/Dental-WebApp/images/img/icons/before_pic.png" alt="" style="width: inherit">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel3">
                            <div class="testimonies_card">
                                <div class="testimonies_card-border-Left"></div>
                                <div class="row">
                                    <div class="col-lg-8 col-md-8 col-12">
                                        <div class="testimonies_card_desc">
                                            Sed ut perspiciatis unde omnis iste natus error sit volup tatem accusantium doloremque laudantium totam rem aperiam, eaque ipsa.
                                        </div>
                                        <div class="client_info_grid">
                                            <div class="testimonies_card-client_img"></div>
                                            <div class="client_info">
                                                <div class="client_info_name">Christopher Doe</div>
                                                <div class="client_info_address">Orlando, Florida</div>
                                            </div>
                                            <img class="inverted_comma_img" src="/Dental-WebApp/images/img/icons/inverted_comma.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12">
                                        <img src="/Dental-WebApp/images/img/icons/before_pic.png" alt="" style="width: inherit">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="view-all_btn" onclick="redirect('view_all_testimony')">
                        View All
                    </button>
                </div>
            </div>

            <div class="available_services_card">
                <div class="main_content_container">
                    <div class="doctors_block_header" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
                        Available <span style="font-weight: bold;">Services</span>
                    </div>
                    <div class="row" style="margin-top: 50px">
                        <div class="col-lg-3 col-md-6 col-12">
                            <img src="/Dental-WebApp/images/img/icons/before_pic.png" alt="" style="width: 100%">
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <img src="/Dental-WebApp/images/img/icons/before_pic.png" alt="" style="width: 100%">
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <img src="/Dental-WebApp/images/img/icons/before_pic.png" alt="" style="width: 100%">
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <img src="/Dental-WebApp/images/img/icons/before_pic.png" alt="" style="width: 100%">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-12">
                            <img src="/Dental-WebApp/images/img/icons/before_pic.png" alt="" style="width: 100%">
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <img src="/Dental-WebApp/images/img/icons/before_pic.png" alt="" style="width: 100%">
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <img src="/Dental-WebApp/images/img/icons/before_pic.png" alt="" style="width: 100%">
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <img src="/Dental-WebApp/images/img/icons/before_pic.png" alt="" style="width: 100%">
                        </div>
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
                            <button class="get_connected_btn" data-toggle="modal" data-target="#exampleModal">
                                Book Appointment
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="smile_gallery">
                <div class="main_content_container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12" style="display: inline-flex; justify-content:center; align-items: center">
                            <div class="content_header">
                                Smile <span style="font-weight: bold;">Gallery</span>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                            <div id="container1">
                                <!-- The before image is first -->
                                <img src="/Dental-WebApp/images/img/icons/before_pic.png" />
                                <!-- The after image is last -->
                                <img src="/Dental-WebApp/images/img/icons/after_pic.png" />
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12" style="display: inline-flex; justify-content:center; align-items: center">
                            <img src="/Dental-WebApp/images/img/icons/tooth_img.png" alt="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div id="container2">
                                <!-- The before image is first -->
                                <img src="/Dental-WebApp/images/img/icons/before_pic.png" />
                                <!-- The after image is last -->
                                <img src="/Dental-WebApp/images/img/icons/after_pic.png" />
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12" style="display: inline-flex; justify-content:center; align-items: center">
                            <img src="/Dental-WebApp/images/img/icons/brush_img.png" alt="">
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                            <div id="container3">
                                <!-- The before image is first -->
                                <img src="/Dental-WebApp/images/img/icons/before_pic.png" />
                                <!-- The after image is last -->
                                <img src="/Dental-WebApp/images/img/icons/after_pic.png" />
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 50px;">
                        <div class="col-lg-12 col-md-12 col-12 text-center">
                            <button class="get_connected_btn" onclick="redirect('view_all_photos')">
                                View All Photos
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- main content end here -->


    <!-- footer section start here -->
    <section>
        <?php
        include('footer.php');
        ?>
    </section>
    <!-- footer section end here -->
    <script type="text/javascript" src="/Dental-WebApp/twentytwenty-master/js/jquery.event.move.js"></script>
    <script type="text/javascript" src="/Dental-WebApp/twentytwenty-master/js/jquery.twentytwenty.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>

</html>


<script>
    AOS.init();

    function openNavMenup() {
        var nav = document.getElementById('toggle_nav');
        if (nav.style.display === 'block') {
            nav.style.display = 'none';
        } else {
            nav.style.display = 'block';
        }
    }

    $(function() {
        $("#container1").twentytwenty({
            default_offset_pct: 0.3,
            before_label: 'Before', // Set a custom before label
            after_label: 'After', // Set a custom after label
        });
        $("#container2").twentytwenty({
            default_offset_pct: 0.3,
            before_label: 'Before', // Set a custom before label
            after_label: 'After', // Set a custom after label
        });
        $("#container3").twentytwenty({
            default_offset_pct: 0.3,
            before_label: 'Before', // Set a custom before label
            after_label: 'After', // Set a custom after label
        });
    });

    $(document).ready(function() {
        $('#testimony-carousel').owlCarousel({
            items: 1,
            itemsDesktop: [1000, 1],
            itemsDesktopSmall: [979, 1],
            itemsTablet: [777, 1],
            pagination: false,
            navigation: true,
            navigationText: ["", ""],
            slideSpeed: 1000,
            autoPlay: true
        });
    });

    function redirect(value) {
        if (value === 'view_all_testimony') {
            window.location.href = 'testimonies.php';
        } else if (value === 'view_all_photos') {
            window.location.href = 'gallery.php';
        }
    }
</script>