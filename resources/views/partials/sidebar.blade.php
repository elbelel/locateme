
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
ttttt          </div>
        </div>
        <a
          to="/dashboard"
        >
         
          Dashboard
        </a>

        
          <a
            to="/bookings"
          >
            
            Bookings
          </a>

          <a
            to="/users"
          >
           
            User Management
          </a>

          <a
            to="/report"
          >
           
          Reports and Analytics
          </a>

          <a
            to="/settings"
          >
           
          Settings
          </a>

          

       
      </aside>
    </div>
    <main class="content"> 
        
        @include('partials.navbar')

        @yield('content')
</main>
  </div>