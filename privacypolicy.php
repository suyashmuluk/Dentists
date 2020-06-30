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
    <link rel="stylesheet" href="./privacypolicy.css">
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
            <div class="why_us_header_text">Privacy Policy</div>
            <div class="secondary_navLink">
                <span><a href="homepage">Home</a></span>
                <span><a href="privacy-policy">Privacy Policy</a></span>
            </div>
        </div>
    </section>
    <!-- header section end here -->

    <!-- main content script start here -->
    <section>
        <div class="main_content_container">
            <div class="privacy_policy_text">
                We are committed to safeguarding the privacy of our website visitors; this policy sets out how we will treat your personal information. You can visit the Website without disclosing any information about yourself. We do not collect personal identifying information when you access the Website homepage and browse the Website without disclosing your personal data (except Cookies; see below under “Cookies”).
            </div>
            <div class="policy_list">
                <span class="policy_text_number">1)</span>
                <span class="content_header">What information do we collect?</span>
            </div>
            <div class="privacy_policy_text">
                We collect data about patients who use our services that is relevant to their healthcare and that allows Smilecare India Pvt Ltd to deliver its services to our patients. We process personal information about our patients, customers, suppliers and employees. <br><br> The types of data we may collect are listed below and we will only use that data in ways relevant to carrying out our legitimate purposes and functions and in a way that is not detrimental to the interests of our patients or employees. Smilecare India Pvt Ltd will take particular care in the collection and storage of any personal sensitive data. Everyone working within Smilecare India Pvt Ltd has a legal duty to keep information about you confidential. Similarly, anyone who receives information from us has a legal duty to keep it confidential.
            </div>
            <div class="data_collection_text">
                Collection of data:
            </div>
            <div class="privacy_policy_text">
                The dental professionals caring for you keep records about your health and any treatment and care you receive from our practices. These records help to ensure that you receive the best possible care. They may be written down in paper records or held on computer. These records may include:<br><br>
                1. Basic details about you such as name, address, date of birth, next of kin, etc.<br>
                2. Contact we have had with you such as appointments.<br>
                3. Notes and reports about your health, treatment and care.<br>
                4. Results of x-rays.<br>
                5. Relevant information from people who care for you and know you well such as health professionals and relatives.<br>
                6. Financial information for payment of any treatments <br><br>
                It is essential that your details are accurate and up to date. Always check that your personal details are correct when you visit us and please inform us of any changes as soon as possible.
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