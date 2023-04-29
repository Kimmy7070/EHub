<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Bootstrap cdn --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{-- custom css --}}
    <link rel="stylesheet" href="{{ asset('css/contactus.css') }}">

    {{-- navbar css --}}
    <!-- custom css -->
    <link rel="stylesheet" href="{{ asset('css/navfoot.css') }}" />

    <!-- font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet" />

    <!-- fontawsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- boxicons -->

    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" />

    <title>Contact Us</title>
</head>

<body>
    {{-- navbar --}}
    <header>
        <a href="" class="logo"><img src="./img/logo.png" alt="" /></a>
        <ul class="search-bar">
            <input type="search" class="search" placeholder="Search" />
            <a href="#"><i class="bx bx-search"></i></a>
        </ul>

        <div class="nav-icon">
            <div class="icons-container">
                <a href=""><i class="bx bx-heart"></i></a>
                <a href="#"><i class="bx bx-cart"></i></a>
                <a href=""><i class="bx bx-bell"></i></a>
                <div class="dropdown">
                    <button class="btn btn-link" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-user-circle"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Login</a>
                    </div>
                </div>

            </div>

            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header>

    {{-- section of form and map --}}
    <section class=".full-section">
        <div class="full-container">

            {{-- form integration --}}
            <div class="left-container">
                <h1>Contact Us</h1>
                <form action=" {{ url('contactus_backend_api') }} " method="GET" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="name" id="name"
                            placeholder="First name" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="email" id="email"
                            placeholder="Your email" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    </div>

                    <div class="input-group mb-3">
                        <textarea class="form-control" name="query" id="query" placeholder="Your query" aria-label="With textarea"></textarea>
                    </div>

                    {{-- <input class="btn btn-primary" type="submit" value="Submit"> --}}
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            {{-- map integration --}}
            <div class="right-container">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3675.5902933229836!2d88.37954111496536!3d22.891588485019646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f89167529a8f17%3A0xe94a8f21ca53259a!2sTechno%20India%20Hooghly!5e0!3m2!1sen!2sin!4v1682076381784!5m2!1sen!2sin"
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

    </section>

    <!-- footer  -->

    <div class="contact">
        <div class="contact-info">
            <div class="first-info">
                <img src="./img/logo.png" alt="" srcset="" />

                <p>
                    <a href="#"><i class="fa-solid fa-phone"></i>+123-456-7890</a>
                </p>
                <p>
                    <a href="#"><i class="fa-solid fa-mobile"></i>+919123066813</a>
                </p>
                <p>
                    <a href="#"><i class="fa-solid fa-envelope"></i> maxvolt123@gmail.com</a>
                </p>
                <p>
                    <a href="#"><i class="fa-solid fa-location-dot"></i> Chinsurah ,
                        west-bengal,712136</a>
                </p>
                <br />

                <div class="social-icon">
                    <a href="#"><i class="bx bxl-facebook-circle"></i></a>
                    <a href="#"><i class="bx bxl-twitter"></i></a>
                    <a href="#"><i class="bx bxl-instagram"></i></a>
                    <a href="#"><i class="bx bxl-linkedin-square"></i></a>
                    <a href="#"><i class="bx bxl-github"></i></a>
                </div>
            </div>

            <div class="second-info">
                <h4>Support</h4>
                <p>Contact Us</p>
                <p>Policy</p>
                <p>privacy</p>
                <p>Cancellation and Return</p>
            </div>

            <div class="third-info">
                <h4>Shop</h4>
                <p>Laptops</p>
                <p>Mobiles</p>
                <p>Custom PCs</p>
                <p>Tablets</p>
                <p>Mobile accessories</p>
                <p>PC components</p>
            </div>

            <div class="forth-info">
                <h4>Company</h4>
                <p>About Us</p>
                <p>Blog</p>
                <p>Donate</p>
                <p>Login</p>
                <p>Register</p>
            </div>
        </div>
    </div>
    <div class="end-text">
        <p>
            Copyright &copy; 2023. All Rights Reserved. Designed By Jai shree ram
        </p>
    </div>

    {{-- navbar script  --}}
    <script src="{{ asset('js/index.js') }}"></script>
    {{-- footer script --}}

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

</body>

</html>
