<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Bootstrap cdn --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}

    {{-- navbar css --}}
    {{-- custom css --}}
    <link rel="stylesheet" href="{{ asset('css/contactus.css') }}">

    <!-- custom css -->
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />

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
                <a href="#"><i class="bx bx-user-circle"></i></a>
            </div>

            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header>



    {{-- navbar script  --}}
    <script src="{{ asset('js/index.js') }}"></script>
</body>

</html>
