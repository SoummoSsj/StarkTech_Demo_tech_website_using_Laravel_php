<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <img class="bck" src="images/bck8.jpg" alt="">
    <div class="navbar">
        <div class="container">
        <a class="logo" href="{{ route('home') }}">Stark<span>Tech</span></a>
            <form action="{{ route('products.sindex') }}" method="GET" class="search-bar">
                <input type="text" placeholder="Search" class="search" name="keyword">
                <button type="submit"><img src="images/search.svg" alt=""></button>
            </form>
            <img id="mobile-cta" class="mobile-menu" src="images/menu.png" alt="Open Navigation">
            <nav>
            
                <img id="mobile-exit" class="mobile-menu-exit" src="images/menu-exit.png" alt="Close Navigation">
                <ul class="primary-nav">
                    <li class="mlist"><a href="{{ route('products',['type' => 'Monitor']) }}">{{ __('Monitor') }}</a>
                     <ul class="monsub">
                        <li> <a class="navitem" href="{{ route('products.bindex',['type' => 'Monitor','brand' => 'Samsung']) }}">Samsung</a></li>
                        <li> <a class="navitem" href="{{ route('products.bindex',['type' => 'Monitor','brand' => 'LG']) }}">LG</a></li>
                        <li> <a class="navitem" href="{{ route('products.bindex',['type' => 'Monitor','brand' => 'Acer']) }}">Acer</a></li>
                        <li> <a class="navitem" href="{{ route('products.bindex',['type' => 'Monitor','brand' => 'Asus']) }}">Asus</a></li>
                        <li> <a class="navitem" href="{{ route('products.bindex',['type' => 'Monitor','brand' => 'Dell']) }}">Dell</a></li>
                        <li> <a class="navitem" href="{{ route('products.bindex',['type' => 'Monitor','brand' => 'MSI']) }}">MSI</a></li>
                        <li> <a class="navitem" href="{{ route('products.bindex',['type' => 'Monitor','brand' => 'Apple']) }}">Apple</a></li>
                        <li> <a class="navitem" href="{{ route('products.bindex',['type' => 'Monitor','brand' => 'BenQ']) }}">BenQ</a></li>
                        <li> <a class="navitem" href="{{ route('products.bindex',['type' => 'Monitor','brand' => 'Lenovo']) }}">Lenovo</a></li>
                        <li> <a class="navitem" href="{{ route('products.bindex',['type' => 'Monitor','brand' => 'Viewsonic']) }}">ViewSonic</a></li>
                        <li> <a class="navitem" href="{{ route('products.bindex',['type' => 'Monitor','brand' => 'Philips']) }}">Philips</a></li>
                        <li> <a class="navitem" href="{{ route('products.bindex',['type' => 'Monitor','brand' => 'Walton']) }}">Walton</a></li>


                     </ul>
                    </li>
                    <li class="mlist"><a href="{{ route('products',['type' => 'laptop']) }}">{{ __('Laptop') }}</a>

                        <ul class="monsub">
                           <li> <a class="navitem" href="{{ route('products.bindex',['type' => 'laptop','brand' => 'Asus']) }}">Asus</a></li>
                           <li> <a class="navitem" href="{{ route('products.bindex',['type' => 'laptop','brand' => 'MSI']) }}">MSI</a></li>
                           <li> <a class="navitem" href="{{ route('products.bindex',['type' => 'laptop','brand' => 'Acer']) }}">Acer</a></li>
                           <li> <a class="navitem" href="{{ route('products.bindex',['type' => 'laptop','brand' => 'Apple']) }}">Apple</a></li>
                           <li> <a class="navitem" href="{{ route('products.bindex',['type' => 'laptop','brand' => 'HP']) }}">HP</a></li>
                           <li> <a class="navitem" href="{{ route('products.bindex',['type' => 'laptop','brand' => 'Dell']) }}">Dell</a></li>
                           <li> <a class="navitem" href="{{ route('products.bindex',['type' => 'laptop','brand' => 'Lenovo']) }}">Lenovo</a></li>
                           <li> <a class="navitem" href="{{ route('products.bindex',['type' => 'laptop','brand' => 'Microsoft']) }}">Microsoft</a></li>
                        </ul>
                       </li>
                       <li class="mlist"><a  href="{{ route('products.oindex') }}">Components</a>
                        <ul class="monsub">
                           <li class="mlist2"> <a href="{{ route('products.cindex',['type' => 'CPU']) }}">CPU</a>
                           <ul class="monsub2">
                           <li> <a class="navitem" href="{{ route('products.cindex',['type' => 'CPU','brand'=>'Intel']) }}">Intel</a></li>
                           <li> <a class="navitem" href="{{ route('products.cindex',['type' => 'CPU','brand'=>'AMD']) }}">AMD</a></li>
                           </ul>
                        </li>
                        <li class="mlist2"> <a href="#">RAM</a>
                           <ul class="monsub2">
                           <li> <a class="navitem" href="#">Corsair</a></li>
                           <li> <a class="navitem" href="#">Gigabyte</a></li>
                           </ul>
                        </li>
                        <li class="mlist2"> <a href="#">GPU</a>
                           <ul class="monsub2">
                           <li> <a class="navitem" href="#">NVIDIA</a></li>
                           <li> <a class="navitem" href="#">AMD</a></li>
                           <li> <a class="navitem" href="#">Intel</a></li>
                           </ul>
                        </li>
                        <li class="mlist2"> <a href="#">Motherboard</a>
                           <ul class="monsub2">
                           <li> <a class="navitem" href="#">Asus</a></li>
                           <li> <a class="navitem" href="#">Gigabyte</a></li>
                           </ul>
                        </li>
                        <li class="mlist2"> <a href="#">Storage</a>
                           <ul class="monsub2">
                           <li> <a class="navitem" href="#">SSD</a></li>
                           <li> <a class="navitem" href="#">HDD</a></li>
                           </ul>
                        </li>
                        <li class="mlist2"> <a href="#">Power Supply</a>
                           <ul class="monsub2">
                           <li> <a class="navitem" href="#">Intel</a></li>
                           <li> <a class="navitem" href="#">AMD</a></li>
                           </ul>
                        </li>
                        <li class="mlist2"> <a href="#">CPU Cooler</a>
                           <ul class="monsub2">
                           <li> <a class="navitem" href="#">Intel</a></li>
                           <li> <a class="navitem" href="#">AMD</a></li>
                           </ul>
                        </li>
                        <li class="mlist2"> <a href="#">Casing</a>
                           <ul class="monsub2">
                           <li> <a class="navitem" href="#">Intel</a></li>
                           <li> <a class="navitem" href="#">AMD</a></li>
                           </ul>
                        </li>
                        
                           
                        </ul>
                       </li>
                       
                       
                       <li class="mlist"><a c href="#">Accessories</a>
                        <ul class="monsub">
                           <li> <a class="navitem" href="#">Digital Camera</a></li>
                           <li> <a class="navitem" href="#">Motherboards</a></li>
                           <li> <a class="navitem" href="#">CPU coolers</a></li>
                           <li> <a class="navitem" href="#">Mouse</a></li>
                           <li> <a class="navitem" href="#">Keyboard</a></li>
                           <li> <a class="navitem" href="#">Software</a></li>
                        </ul>
                       </li>
                       <li class="mlist"><a href="#">Gadgets</a>
                        <ul class="monsub">
                           <li> <a class="navitem" href="#">Smart Watch</a></li>
                           <li> <a class="navitem" href="#">Smart TV</a></li>
                           <li> <a class="navitem" href="#">Speakers</a></li>
                           <li> <a class="navitem" href="#">Headphones</a></li>
                           <li> <a class="navitem" href="#">Portable Power Station</a></li>
                        </ul>
                       </li>
                       <li class="mlist"><a href="{{route('cart')}}">Cart</a>

                      
                       </li>
                       @guest
                            @if (Route::has('login'))
                                <li class="mlist">
                                    <a class="navitem" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="mlist">
                                    <a class="navitem" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li> 
                        @endguest
                       


                     <main class="py-4">
            @yield('content')
        </main>
                     
      
                    
                </ul>
                    
                    
               
            </nav>
        </div>
    </div>
    <section class="contact-section">
        <div class="containerlst">
            <div class="contact-left">
    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
</div>
</div>
</section>
   
   
   
    <script>
        const mobileBtn = document.getElementById('mobile-cta');
          nav = document.querySelector('nav');
          mobileBtnExit = document.getElementById('mobile-exit');

        mobileBtn.addEventListener('click', () => {
            nav.classList.add('menu-btn');
        })
        mobileBtnExit.addEventListener('click', () => {
            nav.classList.remove('menu-btn');
        }
        )  

    </script>
    
</body>
</html>