<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Elkart|HomePage</title>

    <!-- bootstrap  -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />

    <!-- custom css -->
    <link rel="stylesheet" href="{{asset('css/layout.css')}}" />

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
</head>

<body>
    {{-- navbar starts here --}}
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
                        <a class="dropdown-item" href="{{url('/home')}}">Login</a>
                    </div>
                </div>

            </div>

            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header>
    {{-- navbar ends here --}}

    @yield('body')

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
                <p><a href="{{url('contactus')}}">Contact Us</a></p>
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

    <script src="./js/index.js"></script>
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
