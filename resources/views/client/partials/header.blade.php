 <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
     <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
         <a class="navbar-brand brand-logo" href="{{ url('dashboard') }}"><img
                 src="{{ asset('client/assets/images/logo.svg') }}" alt="logo" /></a>
         <a class="navbar-brand brand-logo-mini" href="index.html"><img
                 src="{{ asset('client/assets/images/logo-mini.svg') }}" alt="logo" /></a>
     </div>
     <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
         <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
             <span class="icon-menu"></span>
         </button>

         <ul class="navbar-nav navbar-nav-right">
         </ul>
         <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
             data-toggle="offcanvas">
             <span class="icon-menu"></span>
         </button>
     </div>
 </nav>
