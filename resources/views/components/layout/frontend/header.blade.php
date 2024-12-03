<header class="container">
   <div class="header-top">
      <x-layout.frontend.logo />

      <nav class="secondary-menu">
         <ul class="navigation">
            <li>
               <a href="/support" class="menu-item">
                  <i class="fa-solid fa-question"></i> Support
               </a>
            </li>
            @auth
               <li class="logged-in">
                  <div class="dropdown">
                     <button class="dropdown-toggle" id="account-button">
                        <i class="fa-regular fa-user"></i> {{ auth()->user()->name }}
                     </button>
                     <div class="dropdown-menu">
                        <a href="/account" class="menu-item">Account settings</a>
                        <form action="/logout" method="POST">
                           @csrf
                           <button type="submit" class="button button-primary">Sign out</button>
                        </form>
                     </div>
                  </div>
               </li>
            @endauth
            @guest
               <li class="logged-out">
                  <div class="dropdown">
                     <button class="dropdown-toggle" id="account-button">
                        <i class="fa-regular fa-user"></i> Account
                     </button>
                     <div class="dropdown-menu">
                        <a href="/login" class="button button-primary">Sign in</a>
                        <a href="/creation">Create an account</a>
                     </div>
                  </div>
               </li>
            @endguest
         </ul>
      </nav>
   </div>

   <div class="header-bottom">
      <div class="primary-menu">
         <ul class="navigation">
            <li><a href="#" class="menu-item">Home</a></li>
            <li><a href="#" class="menu-item">About Us</a></li>
            <li><a href="#" class="menu-item">Features</a></li>
            @auth
               <li><a href="#" class="menu-item">Games</a></li>
            @endauth
            <li><a href="#" class="menu-item">Contact</a></li>
         </ul>
      </div>
      <div class="search-bar">
         <form action="#" method="POST">
            <label for="search">
               <i class="fa-solid fa-magnifying-glass"></i>
               <input type="search" name="search" id="search" placeholder="Search...">
            </label>
         </form>
      </div>
   </div>
</header>
