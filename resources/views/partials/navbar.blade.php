<nav class="navbar navbar-expand-lg  bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">   </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">              
        </ul>
        <div class="d-flex" >
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#"> <img src={{ asset('/images/icons/new.png') }}  class="me-5" /> </a>
            </li>
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle ms-5" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{ Auth::user()->name }} <span><img src={{ asset('/images/icons/user.png') }} width="30" /></span>
              </a>
              <ul class="dropdown-menu">
                {{-- <li><a class="dropdown-item" href="{{route('profile.edit')}}"> <small>Profile</small> </a></li> --}}
                <form method="POST" action="{{ route('logout') }}">
                @csrf
                <li><a class="dropdown-item" href="{{route('logout')}}" 
                onclick="event.preventDefault();
                this.closest('form').submit();"
                > <small>      {{ __('Log Out') }} </small> </a></li>
                </form>                        
              </ul>
            </li>
            
          </ul>
        </div>
      </div>
    </div>
  </nav>