<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Bootstrap cdn --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{-- custom css --}}
    <link rel="stylesheet" href="{{asset('css/contactus.css')}}">

    <title>Contact Us</title>
</head>
<body>
    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

    {{-- section of form and map --}}
    <section>
        <div class="left-container">

        <h3>Contact Us</h3>
            <form class="contact">
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
            </form>
        </div>


    {{-- map integration --}}
    <div class="right-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3675.5902933229836!2d88.37954111496536!3d22.891588485019646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f89167529a8f17%3A0xe94a8f21ca53259a!2sTechno%20India%20Hooghly!5e0!3m2!1sen!2sin!4v1682076381784!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

</section>
</body>
</html>
