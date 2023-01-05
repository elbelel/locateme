
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
            Home          
          </div>
        </div>
          <a
            href="/product"
          >
          <img src={{ asset('/images/icons/booking.png') }} class="me-3" />
            Products
          </a>  
          <a
          href="/shop"
        >
        <img src={{ asset('/images/icons/users.png') }} class="me-3" />
        Shops
        </a>
       
      </aside>
    </div>
    <main class="content"> 
        
        @include('partials.navbar')

        @yield('content')
</main>
  </div>