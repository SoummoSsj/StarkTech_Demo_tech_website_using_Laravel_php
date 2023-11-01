
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('/css/login.css') }}">
</head>
<body>
    <img class="bck" src="/images/bck8.jpg" alt="">
    <div class="navbar">
        <div class="container">
            <a class="logo" href="#">Stark<span>Tech</span></a>
            <form action="#" method="get" class="search-bar">
                <input type="text" class="srch" placeholder="Search" name="q">
                
            </form>
            <img id="mobile-cta" class="mobile-menu" src="images/menu.png" alt="Open Navigation">
            <nav>
            
                <img id="mobile-exit" class="mobile-menu-exit" src="images/menu-exit.png" alt="Close Navigation">
                <ul class="primary-nav">
                    <li class="mlist"><a href="list.html">Monitor</a>
                     <ul class="monsub">
                        <li> <a class="navitem" href="#">Samsung</a></li>
                        <li> <a class="navitem" href="#">LG</a></li>
                        <li> <a class="navitem" href="#">Acer</a></li>
                        <li> <a class="navitem" href="#">Asus</a></li>
                        <li> <a class="navitem" href="#">Dell</a></li>
                        <li> <a class="navitem" href="#">HP</a></li>
                     </ul>
                    </li>
                    <li class="mlist"><a  href="#">Laptop</a>
                        <ul class="monsub">
                           <li> <a class="navitem" href="#">Asus</a></li>
                           <li> <a class="navitem" href="#">MSI</a></li>
                           <li> <a class="navitem" href="#">Acer</a></li>
                           <li> <a class="navitem" href="#">Apple</a></li>
                           <li> <a class="navitem" href="#">HP</a></li>
                           <li> <a class="navitem" href="#">Dell</a></li>
                           <li> <a class="navitem" href="#">Razer</a></li>
                           <li> <a class="navitem" href="#">Microsoft</a></li>
                        </ul>
                       </li>
                       <li class="mlist"><a  href="#">CPU</a>
                        <ul class="monsub">
                           <li> <a class="navitem" href="#">Intel</a></li>
                           <li> <a class="navitem" href="#">AMD</a></li>
                        </ul>
                       </li>
                       <li class="mlist"><a  href="#">GPU</a>
                        <ul class="monsub">
                           <li> <a class="navitem" href="#">NVIDIA</a></li>
                           <li> <a class="navitem" href="#">AMD</a></li>
                           <li> <a class="navitem" href="#">Intel</a></li>
                        </ul>
                       </li>
                       <li class="mlist"><a  href="#">RAM</a>
                        <ul class="monsub">
                           <li> <a class="navitem" href="#">Corsair</a></li>
                           <li> <a class="navitem" href="#">Gigabyte</a></li>
                           <li> <a class="navitem" href="#">Toshiba</a></li>
                           <li> <a class="navitem" href="#">Kingston</a></li>
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
                     



                       
      
                    
                </ul>
                    
                    
               
            </nav>
        </div>
    </div>
    <section class="contact-section">
        <div class="containerlst">
            <div class="contact-left">
            <form method="POST" action="{{ route('password.email') }}">
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

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
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


