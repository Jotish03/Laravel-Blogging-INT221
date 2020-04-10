@extends('layouts.app')
@section('content')
{{-- <h1>{{$title}}</h1>
@if(count($service)>0)
<ul class="list-group">
@foreach ($service as $sv)
<li class="list-group-item">{{$sv}}</li>
@endforeach
</ul>
@endif     --}}

<style>
    .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      max-width: 300px;
      height: 260px;
      
     margin-left: 50px;
     margin-bottom: 20px;
      text-align: center;
      font-family: century gothic;
      float: left;
    }
    
    .para{
        text-align: justify;
        padding:10px;
        padding-left: 12px;
    }
    
    
    
    #namep{
        font-family: century gothic;
        font-weight: bold;
        text-align: left;
        padding-left: 5px;
        max-height: 250px;

    }
    </style>
    </head>
    <body>
    
    
    
    <div class="card">
      <img src="/storage/cover_images/quotes.png" alt="Denim Jeans" style="width:100%">
      
      <p class="para"><q>My mission in life is not merely to survive, but to thrive; and to do so with some passion, some compassion, some humor, and some style.<q><br><b><i>-Maya Angelou</i></b></p>
      
    </div>
    <div class="card">
        <img src="/storage/cover_images/quotes.png" alt="Denim Jeans" style="width:100%">
        
        <p class="para"><q>A fool thinks himself to be wise, but a wise man knows himself to be a fool.</q><br><b><i>-William Shakespeare</i></b></p>
        
      </div>
      <div class="card">
        <img src="/storage/cover_images/quotes.png" alt="Denim Jeans" style="width:100%">
        
        <p class="para"><q>Boys will be boys. And even that wouldn't matter if only we could prevent girls from being girls.</q><br><b><i>-Anne Frank</i></b></p>
        
      </div>
      <div class="card">
        <img src="/storage/cover_images/quotes.png" alt="Denim Jeans" style="width:100%">
        
        <p class="para"><q>Keep your face always toward the sunshine - and shadows will fall behind you.</q><br><b><i>-Walt Whitman</i></b></p>
        
      </div>
      <div class="card">
        <img src="/storage/cover_images/quotes.png" alt="Denim Jeans" style="width:100%">
        
        <p class="para"><q>Perfection is not attainable, but if we chase perfection we can catch excellence.</q><br><b><i>-Vince Lombardi</i></b></p>
        
      </div>
      <div class="card">
        <img src="/storage/cover_images/quotes.png" alt="Denim Jeans" style="width:100%">
        
        <p class="para"><q>Happiness is not something you postpone for the future; it is something you design for the present.</q><br><b><i>-Jim Rohn</i></b></p>
        
      </div>
      
    </body>
    @include('inc.footer');
@endsection
