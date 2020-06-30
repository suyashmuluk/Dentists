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
    <link rel="stylesheet" href="workwithus.css">
    <link rel="stylesheet" href="globalstyle.css">
    <title>Work With Us</title>
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
            <div class="why_us_header_text">Work with us</div>
            <div class="secondary_navLink">
                <span><a href="homepage">Home</a></span>
                <span><a href="work-with-us">Work with us</a></span>
            </div>
        </div>
    </section>
    <!-- header section end here -->

    <!-- main content script start here -->
    <section>
        <div class="main_content_container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="content_header">
                        Setting up a camp and <span style="font-weight: bold;">Need Doctors?</span>
                    </div>
                    <div class="content_desc">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                        laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore architecto beatae vitae dicta
                        sunt explicabo.
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12"></div>
            </div>
        </div>

        <div class="main_content_container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12"></div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="content_header">
                        Volunteering and Social Work <span style="font-weight: bold;">Need Doctors?</span>
                    </div>
                    <div class="content_desc">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                        laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore architecto beatae vitae dicta
                        sunt explicabo.
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
                        <button class="get_connected_btn">
                            Book Appointment
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="main_content_container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="content_header">
                        Want us to have/or <span style="font-weight: bold;">use your Products?</span>
                    </div>
                    <div class="content_desc">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                        laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore architecto beatae vitae dicta
                        sunt explicabo.
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12"></div>
            </div>
        </div>


    </section>
    <!-- main content script end here -->

    <!-- footer script start here -->
    <?php
    include('footer.php')
    ?>
    <!-- footer script end here -->

</body>

</html>

<script>
    function openNavMenup() {
        var nav = document.getElementById('toggle_nav');
        if (nav.style.display === 'block') {
            nav.style.display = 'none';
        } else {
            nav.style.display = 'block';
        }
    }
</script>