<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="/Dental-WebApp/twentytwenty-master/css/twentytwenty.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="gallery.css">
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
            <div class="why_us_header_text">Our Gallery</div>
            <div class="secondary_navLink">
                <span><a href="homepage">Home</a></span>
                <span><a href="gallery">Our Gallery</a></span>
            </div>
        </div>
    </section>
    <!-- header section end here -->

    <!-- main section script start here -->
    <section>
        <div class="doctors_name_block_container">
            <div class="doctors_name_block">
                <div class="doctors_name active_tab">Before/After</div>
                <div class="doctors_name">Clinic</div>
                <div class="doctors_name">Equipment</div>
            </div>
        </div>
        <div class="gallery">
            <div class="main_content_container" style="padding-top: 0">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <div id="container1">
                            <!-- The before image is first -->
                            <img src="/Dental-WebApp/images/img/icons/before_pic.png" />
                            <!-- The after image is last -->
                            <img src="/Dental-WebApp/images/img/icons/after_pic.png" />
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div id="container2">
                            <!-- The before image is first -->
                            <img src="/Dental-WebApp/images/img/icons/before_pic.png" />
                            <!-- The after image is last -->
                            <img src="/Dental-WebApp/images/img/icons/after_pic.png" />
                        </div>
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
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <div id="container4">
                            <!-- The before image is first -->
                            <img src="/Dental-WebApp/images/img/icons/before_pic.png" />
                            <!-- The after image is last -->
                            <img src="/Dental-WebApp/images/img/icons/after_pic.png" />
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div id="container5">
                            <!-- The before image is first -->
                            <img src="/Dental-WebApp/images/img/icons/before_pic.png" />
                            <!-- The after image is last -->
                            <img src="/Dental-WebApp/images/img/icons/after_pic.png" />
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div id="container6">
                            <!-- The before image is first -->
                            <img src="/Dental-WebApp/images/img/icons/before_pic.png" />
                            <!-- The after image is last -->
                            <img src="/Dental-WebApp/images/img/icons/after_pic.png" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <div id="container7">
                            <!-- The before image is first -->
                            <img src="/Dental-WebApp/images/img/icons/before_pic.png" />
                            <!-- The after image is last -->
                            <img src="/Dental-WebApp/images/img/icons/after_pic.png" />
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div id="container8">
                            <!-- The before image is first -->
                            <img src="/Dental-WebApp/images/img/icons/before_pic.png" />
                            <!-- The after image is last -->
                            <img src="/Dental-WebApp/images/img/icons/after_pic.png" />
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div id="container9">
                            <!-- The before image is first -->
                            <img src="/Dental-WebApp/images/img/icons/before_pic.png" />
                            <!-- The after image is last -->
                            <img src="/Dental-WebApp/images/img/icons/after_pic.png" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- main section script end here -->

    <!-- footer section start here -->
    <?php
    include('footer.php');
    ?>
    <!-- footer section end here -->

    <script type="text/javascript" src="/Dental-WebApp/twentytwenty-master/js/jquery.event.move.js"></script>
    <script type="text/javascript" src="/Dental-WebApp/twentytwenty-master/js/jquery.twentytwenty.js"></script>
    <!-- <script type="text/javascript" src="/Dental-WebApp/before-after-js/custom.js"></script> -->
</body>

</html>

<script>
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
        $("#container4").twentytwenty({
            default_offset_pct: 0.3,
            before_label: 'Before', // Set a custom before label
            after_label: 'After', // Set a custom after label
        });
        $("#container5").twentytwenty({
            default_offset_pct: 0.3,
            before_label: 'Before', // Set a custom before label
            after_label: 'After', // Set a custom after label
        });
        $("#container6").twentytwenty({
            default_offset_pct: 0.3,
            before_label: 'Before', // Set a custom before label
            after_label: 'After', // Set a custom after label
        });
        $("#container7").twentytwenty({
            default_offset_pct: 0.3,
            before_label: 'Before', // Set a custom before label
            after_label: 'After', // Set a custom after label
        });
        $("#container8").twentytwenty({
            default_offset_pct: 0.3,
            before_label: 'Before', // Set a custom before label
            after_label: 'After', // Set a custom after label
        });
        $("#container9").twentytwenty({
            default_offset_pct: 0.3,
            before_label: 'Before', // Set a custom before label
            after_label: 'After', // Set a custom after label
        });
    });
</script>