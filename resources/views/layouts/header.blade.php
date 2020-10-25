<header>
    <div class="border-bottom shadow-sm">
        <div class="container">
            <div class="row py-4 align-items-center">
                <div class="col-md-2">
                    <a class="d-flex align-items-center" href="{{ route('main') }}">
                        <img class="mr-1" alt="logo" src="/images/logo.png">
                        BRAN<span>D</span>
                    </a>
                </div>
                <div class="col-md-6">
                    <form class="form-inline mt-2 mt-md-0">
                        <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
                <div class="col-md-1 text-right">
                    <a href="#">
                        <img alt="cart" src="/images/icons/cart.png">
                    </a>
                </div>
                <div class="col-md-3 justify-content-end d-flex">
                    @guest
                        <a class="btn btn-primary mr-1" href="{{ route('login') }}">{{ __('auth.login') }}</a>
                        <a class="btn btn-outline-primary" href="{{ route('register') }}">{{ __('auth.register') }}</a>
                    @else
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="p-0 dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('auth.logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    @endguest
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div>
            <nav class="row">
                <ul class="col-md-12 d-flex list-unstyled justify-content-between mb-0">
                    <li class="nav-item active">
                        <a class="text-decoration-none text-uppercase p-2 d-block font-weight-bold"
                           href="{{ route('main') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="text-decoration-none text-uppercase p-2 d-block font-weight-bold"
                           href="{{ route('category') }}">Man</a>
                    </li>
                    <li class="nav-item">
                        <a class="text-decoration-none text-uppercase p-2 d-block font-weight-bold"
                           href="{{ route('category') }}">Women</a>
                    </li>
                    <li class="nav-item">
                        <a class="text-decoration-none text-uppercase p-2 d-block font-weight-bold"
                           href="{{ route('category') }}">Kids</a>
                    </li>
                    <li class="nav-item">
                        <a class="text-decoration-none text-uppercase p-2 d-block font-weight-bold"
                           href="{{ route('category') }}">Accessories</a>
                    </li>
                    <li class="nav-item">
                        <a class="text-decoration-none text-uppercase p-2 d-block font-weight-bold"
                           href="{{ route('category') }}">Featured</a>
                    </li>
                    <li class="nav-item">
                        <a class="text-decoration-none text-uppercase p-2 d-block font-weight-bold"
                           href="{{ route('category') }}">Hot Deals</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
