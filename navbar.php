<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./navbar.css">
    <title>Document</title>
</head>

<body>
    <!-- navbar section start here -->
    <section>
        <nav class="navbar_fixed" id="nav_toggling">
            <div class="nav_items_container">
                <a href="index.php">
                    <img class="navbar_logo" src="https://res.cloudinary.com/msuyash/image/upload/v1591769860/logo_vzjogm.png" alt="logo here">
                </a>
                <div class="hamburger">
                    <div class="line-1"></div>
                    <div class="line-2"></div>
                    <div class="line-3"></div>
                </div>
                <ul class="navbar_menu_container">
                    <li class="navbar_menu">
                        <a href="aboutus.php">About Us</a>
                    </li>
                    <li class="navbar_menu">
                        <a href="services.php">Services</a>
                    </li>
                    <li class="navbar_menu">
                        <a href="gallery.php">Before/After</a>
                    </li>
                    <li class="navbar_menu">
                        <a href="dentalproblems.php">Dental Problems</a>
                    </li>
                    <li class="navbar_menu">
                        <a href="workwithus.php">Work With Us</a>
                    </li>
                    <li class="navbar_menu_btnContainer">
                        <button class="appointment_btn" data-toggle="modal" data-target="#exampleModal">
                            <span class="appointment_btn_text">Book Appointment</span>
                        </button>
                    </li>
                </ul>
            </div>
        </nav>
    </section>
    <!-- navbar section end here -->

    <!-- book appointment section start here -->
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
                                <input type="text" class="custom_input" style="margin-top: 0;" placeholder="Full name">
                            </div>
                            <div>
                                <input type="text" class="custom_input" placeholder="Email(optional)">
                            </div>
                            <div>
                                <input type="tel" class="custom_input" placeholder="Phone number">
                            </div>
                            <div>
                                <input type="date" date_format class="custom_input" placeholder="Date">
                            </div>
                            <div>
                                <select class="custom_input">
                                    <option selected>Reference</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div>
                                <textarea class="custom_input" placeholder="Enter message here"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal_footer">
                        <button class="get_connected_btn" data-dismiss="modal">
                            Book Appointment
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- book appointment section end here -->

</body>

</html>


<script>
    // function openNavMenup() {
    //     var nav = document.getElementById('toggle_nav');
    //     if (nav.style.display === 'block') {
    //         nav.style.display = 'none';
    //     } else {
    //         nav.style.display = 'block';
    //     }
    // }

    const hamBurger = document.querySelector('.hamburger');
    const navLinks = document.querySelector('.navbar_menu_container');
    const links = document.querySelectorAll('.navbar_menu_container li');

    hamBurger.addEventListener('click', () => {
        navLinks.classList.toggle('open');
        links.forEach(link => {
            link.classList.toggle('fade-in');
        });
        document.querySelector('.line-1').classList.toggle('line1');
        document.querySelector('.line-2').classList.toggle('line2');
        document.querySelector('.line-3').classList.toggle('line3');
    });
</script>