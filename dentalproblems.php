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
    <link rel="stylesheet" href="dentalproblems.css">
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
            <div class="why_us_header_text">Tooth Pain</div>
            <div class="secondary_navLink">
                <span><a href="homepage">Home</a></span>
                <span><a href="#">Dental Problems</a></span>
                <span><a href="dental-problems">Tooth Pain</a></span>
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
                        Relationship Based <span style="font-weight: bold;">Dental Practice</span>
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