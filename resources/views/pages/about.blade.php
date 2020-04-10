@extends('layouts.app')

@section('content')
<style>
    .flip-card {
  background-color: transparent;
  width: 250px;
  height: 250px;
  margin-left: 22px;
  float: left;
  border: 1px solid #f1f1f1;
  perspective: 1000px; /* Remove this if you don't want the 3D effect */
}

/* This container is needed to position the front and back side */
.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

/* Do an horizontal flip when you move the mouse over the flip box container */
.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

/* Position the front and back side */
.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden; /* Safari */
  backface-visibility: hidden;
}

/* Style the front side (fallback if image is missing) */
.flip-card-front {
  background-color: #bbb;
  color: black;
}

/* Style the back side */
.flip-card-back {
  background-color: black;
  color: white;
 padding-top: 20px;
  transform: rotateY(180deg);
}
.main{
    width: 100%;

}
h6{
  background-color: white;
  padding: 10px;
  width: 90%;
  margin-left: 10px;
  font-weight: bold;
  color: black;
}
.apara{
  font-family: century gothic;
  font-weight: bold;
  text-align: justify;
  background-color: black;
  height: 50px;
  
  width: 96.5%;
 margin-top: 200px;
 margin-left: 20px;
  margin-bottom: -28%;
  
}

</style>
<body>
    <div class="main">
    <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img src="/storage/cover_images/avatar1.png  " alt="Avatar" style="width:250px;height:250px;">
          </div>
          <div class="flip-card-back">
            <h2 style="font-family:century gothic;">Jotish Sharma</h5>
              <h6 style="font-family:century gothic;">Web Designer & Developer</h6>
              <p style="font-family:century gothic;">Bachelor in Computer Science & Engineering</p>
              <p style="font-family:century gothic;">Lovely Professional University<br>Phagwara Punjab 144411</p>
          </div>
        </div>
    </div>
    <div class="flip-card">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <img src="/storage/cover_images/avatar2.png  " alt="Avatar" style="width:250px;height:250px;">
        </div>
        <div class="flip-card-back">
          <h2 style="font-family:century gothic;">Ankit Yadav</h5>
            <h6 style="font-family:century gothic;">Data Processing</h6>
            <p style="font-family:century gothic;">Bachelor in Computer Science & Engineering</p>
            <p style="font-family:century gothic;">Lovely Professional University<br>Phagwara Punjab 144411</p>
        </div>
      </div>
  </div>
  <div class="flip-card">
    <div class="flip-card-inner">
      <div class="flip-card-front">
        <img src="/storage/cover_images/avatar3.png  " alt="Avatar" style="width:250px;height:250px;">
      </div>
      <div class="flip-card-back">
        <h2 style="font-family:century gothic;">Aman Kumar</h5>
          <h6 style="font-family:century gothic;">Web Designer</h6>
          <p style="font-family:century gothic;">Bachelor in Computer Science & Engineering</p>
          <p style="font-family:century gothic;">Lovely Professional University<br>Phagwara Punjab 144411</p>
      </div>
    </div>
</div>
    <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img src="/storage/cover_images/avatar4.png  " alt="Avatar" style="width:250px;height:250px;">
          </div>
          <div class="flip-card-back">
            <h2 style="font-family:century gothic;font-size:25px;">Kalash Palwanda</h5>
              <h6 style="font-family:century gothic;">Web Designer</h6>
              <p style="font-family:century gothic;">Bachelor in Computer Science & Engineering</p>
              <p style="font-family:century gothic;">Lovely Professional University<br>Phagwara Punjab 144411</p>
          </div>
        </div>
    </div>
    
      </div> <br><br> <br>
      <div class="apara"><img src="/storage/cover_images/avatar.png  " alt="Avatar" style="width:45px;height:45px;margin-left:5px;margin-top:3px;"><p class="pp" style="color:white;margin-top:-25px;margin-left:64%;font-size:15px;">@bloggingmadeeasy | Lovely Professional University</p></div>
      
      <!-- Footer -->
<footer class="page-footer font-small blue pt-4" style="background-color:black;margin-top:340px;">

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
        <h5 class="text-uppercase" style="color:white;">Blogging made easy</h5>
        <p style="color:white">Blogging is like work, but without coworkers thwarting you at every turn.</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3" style="color:white;">

     
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-0 mx-auto" >

        <!-- Links -->
        <h5 class="text-uppercase">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="/">Home</a>
          </li>
          <li>
            <a href="/service">Our Services</a>
          </li>
          <li>
            <a href="/posts">Blog</a>
          </li>
          <li>
            <a href="/about">About Us</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3" style="color:white ; background-color:#2e2d2d;">© 2020 Copyright:
    <a href="#"> Bloggingmadeeasy.com</a>
  </div>
  <!-- Copyright -->

</footer>
</body>


@endsection
    