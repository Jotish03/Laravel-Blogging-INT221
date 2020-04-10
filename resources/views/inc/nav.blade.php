

    <style>
        a{
            color:whitesmoke;

        }
        a:hover{
            color:aquamarine;
            
        }
    </style>
    {{-- new one --}}
    <nav class="navbar navbar-expand-sm " style="background-color:black; width:82% !important; margin-left:9%; color:black; !important">
      <div class="container">
          <a href="/">
          {{-- //<a class="navbar-brand" href="{{ url('storage/cover_image/logospace.jpg') }}"> --}}
            <img class="navbar-brand" src="/storage/cover_images/newlogo.png" alt="SpaceOut" style="width:50px;height:60px;">
              {{-- {{ config('app.name', 'Laravel') }} --}}
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
              <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <!-- Left Side Of Navbar -->
              <ul class="navbar-nav mr-auto">
                <li class="nav-item " >
                  <a class="nav-link" href="/" >Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item" >
                  <a class="nav-link" href="/service" >Quotes</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/posts">Blogs</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/about">About Us</a>
                </li>
                
              </ul>

              <!-- Right Side Of Navbar -->
              <ul class="navbar-nav ml-auto">
                  <!-- Authentication Links -->
                  @guest
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                      </li>
                      @if (Route::has('register'))
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                          </li>
                      @endif
                  @else
                      <li class="nav-item dropdown">
                          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              {{ Auth::user()->name }} <span class="caret"></span>
                          </a>

                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                              
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                  {{ __('Logout') }}
                              </a>
                              <a class="dropdown-item" href="/home">Dash Board</a>
                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  @csrf
                              </form>
                          </div>
                      </li>
                  @endguest
              </ul>
          </div>
      </div>
  </nav>