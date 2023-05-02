@extends('layout')

<!-- team section css -->
<link rel="stylesheet" href="{{ asset('css/team.css') }}" />

<!--about us section css-->
<link rel="stylesheet" href="{{ asset('css/aboutus.css') }}" />

<!-- fontawsome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />


@section('body')
<!-- about section -->

<section class="about_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                About Us
              </h2>

            </div>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua. Ut enim ad minim veniam
            </p>
            <a href="">
              Buy us a GOAT
            </a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="img-box">
            <img src="./img/3.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

    <div class="team-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-container">
                        <h2>Our Team</h2>
                    </div>
                </div>
                <!--1st member-->
                <div class="col-md-3">
                    <div class="single-team">
                        <div class="team-img">
                            <img src="./img/3.jpg">
                        </div>
                        <div class="team-info">
                            <h3>Smita chatterjee</h3>
                            <p>Member</p>
                        </div>
                    </div>
                </div>
                <!--2nd member-->
                <div class="col-md-3">
                    <div class="single-team">
                        <div class="team-img">
                            <img src="./img/3.jpg">
                        </div>
                        <div class="team-info">
                            <h3>Sounak Mukhopadhyay</h3>
                            <p>Member</p>
                        </div>
                    </div>
                </div>
                <!--3rd member-->
                <div class="col-md-3">
                    <div class="single-team">
                        <div class="team-img">
                            <img src="./img/3.jpg">
                        </div>
                        <div class="team-info">
                            <h3>Suranjan kumar Ghosh</h3>
                            <p>Member</p>
                        </div>
                    </div>
                </div>
                <!--4th member-->
                <div class="col-md-3">
                    <div class="single-team">
                        <div class="team-img">
                            <img src="./img/3.jpg">
                        </div>
                        <div class="team-info">
                            <h3>Shresth Shaw</h3>
                            <p>Member</p>
                        </div>
                    </div>
                </div>
                <!--5th member-->
                <div class="col-md-3">
                    <div class="single-team">
                        <div class="team-img">
                            <img src="./img/3.jpg">
                        </div>
                        <div class="team-info">
                            <h3>Snehasish Banerjee</h3>
                            <p>Member</p>
                        </div>
                    </div>
                </div>
                <!--6th member-->
                <div class="col-md-3">
                    <div class="single-team">
                        <div class="team-img">
                            <img src="./img/3.jpg">
                        </div>
                        <div class="team-info">
                            <h3>Sayantan Bhattacharya</h3>
                            <p>Member</p>
                        </div>
                    </div>
                </div>
                <div>
                </div>
            </div>
        </div>

    @stop
