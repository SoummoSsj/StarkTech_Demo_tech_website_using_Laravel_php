<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <link rel="stylesheet" href="{{ asset('/css/main3.css') }}">
</head>
<body>
    
    <img class="bck" src="/images/pic5.jpg" alt="">
    <div class="navbar">
        <div class="container">
        <a class="logo" href="{{ route('home') }}">Stark<span>Tech</span></a>
            <form action="{{ route('products.sindex') }}" method="GET" class="search-bar">
                <input type="text" placeholder="Search" class="search" name="keyword">
                <button type="submit"><img src="images/search.svg" alt=""></button>
            </form>
            <div class="suggestions">
        <ul id="suggestions-list"></ul>
    </div>
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
    @if($product->type==="Monitor")
    <section class="hero"> 
     <div class="flex-wrap">
        <div class="item">
            <div class="item-inner">
               <div class="i-img">
                <a href="#"><img src="{{ $product->image }}" alt="" width="480" height="480" ></a>

               </div>
               <div class="details">
                <h4 class="name">
                    <a href="#">{{ $product->name }}</a>
                    <h1 style="color: black;">Key Features</h1>

                </h4>
                <div class="desc">
                    <ul>
                        <li>
                            Resolution: {{ $product->Resolution }}
                            

                        </li>
                        <li>
                            Display: {{ $product->RefreshRate }}, {{ $product->ResponseTime }}
                            

                        </li>
                        <li>
                            Parts: {{ $product->Connectivity }}
                            

                        </li>
                        <li>
                            Features: {{ $product->DisplayType }},{{ $product->PanelType }}
                            

                        </li>




                    </ul>

                </div>
                <div class="price">
                    <span>{{ $product->price}}</span>

                </div>
                <div class="buy">
                <form action="{{ route('addToCart', ['productId' => $product->id]) }}" method="POST">
    @csrf
    <button id="rad" type="submit">Add to Cart</button>
</form>

                </div>
                <div class="buy">
                    <a href="{{route('cart')}}"><img src="images/cart.png" alt=""> Buy now</a>

                </div>

               </div>
                
            
            </div>
          </div>
        
          
        </div>
    </section>
    <section class="specification" id="specification">
        <div class="section-head">
            <h2 class="gg">Specification</h2>
        </div>
        <table class="data" cellpadding="0" cellspacing="0">
            <colgroup>
                <col class="name">
                <col class="value">
            </colgroup>
                    <thead>
            <tr>
                <td class="heading-row" colspan="3">Display Features</td>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="name">Display Size</td><td class="value">{{ $product->DisplaySize }}</td>
            </tr><tr>
                <td class="name">Display Type</td><td class="value">{{ $product->DisplayType }}</td>
            </tr><tr>
                <td class="name">Panel Type</td><td class="value">{{ $product->PanelType }}</td>
            </tr><tr>
                <td class="name">Resolution</td><td class="value">{{ $product->Resolution }}<br>
    </td>
            </tr><tr>
                <td class="name">Pixel pitch</td><td class="value">0.2835 Mm</td>
            </tr><tr>
                <td class="name">Aspect Ratio</td><td class="value">{{ $product->AspectRatio }}</td>
            </tr><tr>
                <td class="name">Viewing Angle</td><td class="value">{{ $product->ViewingAngle }}</td>
            </tr><tr>
                <td class="name">Brightness</td><td class="value">{{ $product->Brightness}}</td>
            </tr><tr>
                <td class="name">Refresh Rate</td><td class="value">{{ $product->RefreshRate}}</td>
            </tr><tr>
                <td class="name">Color Support</td><td class="value">{{ $product->ColorSupport}}</td>
            </tr><tr>
                <td class="name">Color Gamut</td><td class="value">{{ $product->ColorGamut}} </td>
            </tr><tr>
                <td class="name">Response Time</td><td class="value">{{ $product->ResponseTime}}</td>
            </tr>        </tbody>
                    <thead>
            <tr>
                <td class="heading-row" colspan="3">Video Features</td>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="name">Flicker Free</td><td class="value">{{ $product->FlickerFree}}</td>
            </tr>        </tbody>
                    <thead>
            <tr>
                <td class="heading-row" colspan="3">Audio Features</td>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="name">Speaker (Built In)</td><td class="value">{{ $product->Speaker}}</td>
            </tr>        </tbody>
                    <thead>
            <tr>
                <td class="heading-row" colspan="3">Connectivity</td>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="name">Ports</td><td class="value">{{ $product->Connectivity}}<br>
    </td>
            </tr>      </tbody>
                    <thead>
            <tr>
                <td class="heading-row" colspan="3">Physical Specification</td>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="name">Color</td><td class="value">{{ $product->Color}}</td>
            </tr><tr>
                <td class="name">Dimension</td><td class="value">{{ $product->Dimension}}</td>
            </tr><tr>
                <td class="name">Weight</td><td class="value">{{ $product->Weight}}</td>
            </tr>        </tbody>
                    <thead>
            <tr>
                <td class="heading-row" colspan="3">Power</td>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="name">Power Consumption</td><td class="value">{{ $product->Voltage}}</td>
            </tr>     </tbody>
                    <thead>
            <tr>
                <td class="heading-row" colspan="3">Warranty Information</td>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="name">Warranty</td><td class="value">{{ $product->Warranty}}</td>
            </tr>        </tbody>
                </table>
    </section>
    @endif
    @if($product->type==="laptop")
    <section class="hero"> 
     <div class="flex-wrap">
        <div class="item">
            <div class="item-inner">
               <div class="i-img">
                <a href="#"><img src="{{ $product->image }}" alt="" width="480" height="480" ></a>

               </div>
               <div class="details">
                <h4 class="name">
                    <a href="#">{{ $product->name }}</a>
                    <h1 style="color: black;">Key Features</h1>

                </h4>
                <div class="desc">
                    <ul>
                        <li>
                            Resolution: {{ $product->Resolution }}
                            

                        </li>
                        <li>
                            Display: {{ $product->RefreshRate }}, {{ $product->ResponseTime }}
                            

                        </li>
                        <li>
                            Parts: {{ $product->Ram }}
                            

                        </li>
                        <li>
                            Features: {{ $product->GPU }},{{ $product->OS }}
                            

                        </li>




                    </ul>

                </div>
                <div class="price">
                    <span>{{ $product->price}}</span>

                </div>
                <div class="buy">
                <form action="{{ route('addToCart', ['productId' => $product->id]) }}" method="POST">
    @csrf
    <button type="submit">Add to Cart</button>
</form>

                </div>
                <div class="buy">
                    <a href="{{route('cart')}}"><img src="images/cart.png" alt=""> Buy now</a>

                </div>

               </div>
                
            
            </div>
          </div>
        
          
        </div>
    </section>
    <section class="specification" id="specification">
        <div class="section-head">
            <h2 class="gg">Specification</h2>
        </div>
        <table class="data" cellpadding="0" cellspacing="0">
            <colgroup>
                <col class="name">
                <col class="value">
            </colgroup>
                    <thead>
            <tr>
                <td class="heading-row" colspan="3">Basic Information</td>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="name">Processor Brand</td><td class="value">{{ $product->ProcessorBrand }}</td>
            </tr><tr>
                <td class="name">Processor Model</td><td class="value">{{ $product->ProcessorModel }}</td>
            </tr><tr>
                <td class="name">Generation</td><td class="value">{{ $product->Generation }}</td>
            </tr><tr>
                <td class="name">Ram</td><td class="value">{{ $product->Ram }} {{ $product->RamType }}<br>
    </td>
            </tr><tr>
                <td class="name">Storage</td><td class="value">{{ $product->StorageCap }} {{ $product->StorageType }}</td>
            </tr><tr>
                <td class="name">Brand</td><td class="value">{{ $product->brand }}</td>
            </tr><tr>
                <td class="name">OS</td><td class="value">{{ $product->OS }}</td>
            </tr>     </tbody>
                    <thead>
            <tr>
                <td class="heading-row" colspan="3">Display Features</td>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="name">Display Size</td><td class="value">{{ $product->DisplaySize}}</td>
            </tr>
            <tr>
                <td class="name">Resolution</td><td class="value">{{ $product->Resolution}}</td>
            </tr><tr>
                <td class="name">Refresh Rate</td><td class="value">{{ $product->RefreshRate}}</td>
            </tr><tr>
                <td class="name">Graphics Card</td><td class="value">{{ $product->GPU}}</td>
            </tr><tr>
                <td class="name">Touchscreen</td><td class="value">{{ $product->Touchscreen}}</td>
            </tr>       </tbody>
                    <thead>
            <tr>
                <td class="heading-row" colspan="3">Other Features</td>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="name">Camera</td><td class="value">{{ $product->Camera}}</td>
            </tr>
            <tr>
                <td class="name">Touchpad</td><td class="value">{{ $product->Touchpad}}</td>
            </tr>
                </tbody>
                    <thead>
            <tr>
                <td class="heading-row" colspan="3">Connectivity</td>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="name">Ports</td><td class="value">{{ $product->Ports}}<br>
    </td>
            </tr>
            <tr>
                <td class="name">Connectivity</td><td class="value">{{ $product->Connectivity}}<br>
    </td>
            </tr>
              </tbody>
                    <thead>
            <tr>
                <td class="heading-row" colspan="3">Physical Specification</td>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="name">Fingerprint</td><td class="value">{{ $product->Fingerprint}}</td>
            </tr><tr>
                <td class="name">Dimension</td><td class="value">{{ $product->Dimension}}</td>
            </tr><tr>
                <td class="name">Weight</td><td class="value">{{ $product->Weight}}</td>
            </tr>        </tbody>
                    
                    <thead>
            <tr>
                <td class="heading-row" colspan="3">Warranty Information</td>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="name">Warranty</td><td class="value">{{ $product->Warranty}}</td>
            </tr>        </tbody>
                </table>
    </section>
    @endif
        
            

        
        <script type="text/javascript">
            var counter = 1;
            setInterval (function(){
                document.getElementById('radio' + counter).checked =true;
                counter++;
                if(counter>3)
                {counter=1;}},5000
            )

        </script>
   
   
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