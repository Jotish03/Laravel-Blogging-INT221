

@extends('layouts.app')
@section('content')

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-top:-20px;">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="/storage/cover_images/s1.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/storage/cover_images/s2.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/storage/cover_images/s3.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div><br>
<div class="jumbotron text-center" style="background-color:black;color:white;margin-top:-17px;margin-bottom:20px;padding-bottom:10px;" >
  <img  src="/storage/cover_images/newlogo.png" alt="SpaceOut" style="width:100px;height:105px;margin-top:-50px;margin-bottom:15px;float:left;">
      
    {{-- <p style="color:white;font-family:century gothic ;font-size:20px;font-weight:500;">I don't think the human race will  </a></p> --}}
    <p><a class="btn  btn-lg " href="/login" role="button" style="background-color:white; color:black;float:right;">Login</a> &nbsp <a class="btn  btn-lg " href="/register" role="button" style="background-color:white; color :black;margin-left:700px;">Register here</a></p>
</div>  

<footer class="page-footer font-small blue pt-4" style="background-color:black;margin-top:-15px;">

  
  <div class="container-fluid text-center text-md-left">

    
    <div class="row">

      
      <div class="col-md-6 mt-md-0 mt-3">

       
        <h5 class="text-uppercase" style="color:white;">Blogging made easy</h5>
        <p style="color:white">Blogging is like work, but without coworkers thwarting you at every turn.</p>

      </div>
      

      <hr class="clearfix w-100 d-md-none pb-3" style="color:white">

     
    
      <div class="col-md-0 mx-auto" >

     
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
      

    </div>
    

  </div>
 

  
  <div class="footer-copyright text-center py-3" style="color:white ; background-color:#2e2d2d;">© 2020 Copyright:
    <a href="#"> Bloggingmadeeasy.com</a>
  </div>
 

</footer>

@endsection



