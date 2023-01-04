
<div class="real">
    <div class="cont-div">
      <aside
        class="sidebar"
      >
        <div
          class="sidebar-toggle shadow"
          id="m-tog"
         
        >
          <div class="py-1 px-2 text-white h3">
Home          </div>
        </div>
        <a
          href="/dashboard"
        >
        <img src={{ asset('/images/icons/dashboard.png') }} class="me-3" />
         
          Dashboard
        </a>

        @if(Auth::user()->role ==0)

          <a
            href="/booking"
          >
          <img src={{ asset('/images/icons/booking.png') }} class="me-3" />
            Bookings
          </a>
          @endif
    @if(Auth::user()->role ==0)
          <a
            href="/users"
          >
          <img src={{ asset('/images/icons/users.png') }} class="me-3" />

            User Management
          </a>
@endif
          <a
            href="/reports"
          >
          <img src={{ asset('/images/icons/reports.png') }} class="me-3" />
          Reports and Analytics
          </a>

          <a
          href="client-booking"
        >
        <img src={{ asset('/images/icons/users.png') }} class="me-3" />
        Clients Bookings
        </a>

          {{-- <a
            to="/settings"
          >
          <img src={{ asset('/images/icons/setting.png') }} class="me-3" />
          Settings
          </a> --}}

          

       
      </aside>
    </div>
    <main class="content"> 
        
        @include('partials.navbar')

        @yield('content')
</main>
  </div>