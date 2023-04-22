<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Bootstrap cdn --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}

    {{-- custom css --}}
    <link rel="stylesheet" href="{{asset('css/contactus.css')}}">

    <!-- custom css -->
    <link rel="stylesheet" href="{{asset('css/index.css')}}" />

    <!-- font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <!-- fontawsome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <!-- boxicons -->

    <link
      rel="stylesheet"
      href="https://unpkg.com/boxicons@latest/css/boxicons.min.css"
    />

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

    {{-- section of form and map --}}
    <section>
        <div class="full-container">

            <div class="left-container">
                <h2>Contact Us</h2>
                {{-- <h6>  Full name </h6> --}}
                <div class="input-group mb-3">
              {{-- <span class="input-group-text" id="basic-addon1">Name </span> --}}
              <input type="text" class="form-control" placeholder="First name" aria-label="Username" aria-describedby="basic-addon1">
            </div>

             {{-- <h6>  Your email</h6> --}}
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Your email" aria-label="Recipient's username" aria-describedby="basic-addon2">
              {{-- <span class="input-group-text" id="basic-addon2">@example.com</span> --}}
            </div>

            {{-- <h6>  Your query</h6> --}}
            <div class="input-group mb-3">
              {{-- <span class="input-group-text">Your query</span> --}}
              <textarea class="form-control" placeholder="Your query" aria-label="With textarea"></textarea>
            </div>

            {{-- <button type="button" class="btn btn-light">Light</button> --}}
            <input class="btn btn-success" type="submit" value="Submit">
            </div>
            {{-- map integration --}}
            <div class="right-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3675.5902933229836!2d88.37954111496536!3d22.891588485019646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f89167529a8f17%3A0xe94a8f21ca53259a!2sTechno%20India%20Hooghly!5e0!3m2!1sen!2sin!4v1682076381784!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

</section>
<script src="{{asset('js/index.js')}}"></script>
</body>
</html>
