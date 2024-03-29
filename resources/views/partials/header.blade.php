<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="{{ url('/') }}" class="logo">
                        <img src="{{ asset('assets/images/klassy-logo.png') }}" align="klassy cafe html template">
                    </a>
                    <a class="menu-trigger">
                        <span>Menu</span>
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="{{ url('') }}" class="active">Home</a>
                            </li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>
                            <li class="scroll-to-section"><a href="#menu">Menu</a></li>
                            <li class="scroll-to-section"><a href="#chefs">Chiefs</a></li>
                            <li class="scroll-to-section"><a href="#reservation">Reservations</a></li>
                            <li class="scroll-to-section">
                                @auth
                                    @if (Auth::User()->user_type === '0')
                                        <a class="table-danger" href="{{ url('showcart', Auth::user()->id) }}">

                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-cart-plus-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0z" />
                                            </svg><i class="bi bi-cart-plus-fill"></i> Cart[{{ $count }}]</a>
                                </li>
                                @endif
                            @endauth
                            @guest
                                <li class="scroll-to-section table-danger"><a href="{{ url('login') }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-cart-plus-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0z" />
                                        </svg><i class="bi bi-cart-plus-fill"></i>Cart
                                </li>
                        </a>
                    @endguest

                    <li>
                        {{-- @guest --}}
                        @if (Route::has('login'))
                            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                @auth
                                    @if (Auth::User()->user_type === '1')
                        <li class="scroll-to-section">
                            <a style="color: rgb(51, 255, 0);" href="{{ url('admin') }}"
                                class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>

                        </li>
                        @endif
                        @if (Auth::User()->user_type === '0')
                            <li class="scroll-to-section">
                                <a href="{{ url('viewclientreservations') }}"
                                    class="text-sm text-gray-700 dark:text-gray-500 underline table-danger">My
                                    Reservations</a>

                            </li>
                        @endif
                        @if (Auth::User()->user_type === '2')
                            <li class="scroll-to-section">
                                <a style="color: rgb(51, 255, 0);" href="{{ url('vieworders') }}"
                                    class="text-sm text-gray-700 dark:text-gray-500 underline">Orders</a>

                            </li>
                        @endif

                        <li class="scroll-to-section">
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                                class="text-sm text-gray-700 dark:text-gray-500 underline">Log out</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf;
                            </form>
                        </li>
                    @else
                        <li><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log
                                in</a></li>

                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}"
                                    class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
                        @endif
                    @endauth
            </div>
            @endif
            </li>

            </ul>
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->


            <!-- ***** Menu End ***** -->
            </nav>
        </div>
    </div>
    </div>
</header>
