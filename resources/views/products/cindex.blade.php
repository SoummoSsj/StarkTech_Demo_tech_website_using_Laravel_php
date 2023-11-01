<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List</title>
    <link rel="stylesheet" href="{{ asset('/css/main2.css') }}">
</head>
<body>
    
    <img class="bck" src="/images/bck2 (2).jpg" alt="">
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
   

@if($type==='CPU')
    <section class="hero"> 
     <div class="flex-wrap">
     @foreach ($comps as $product)
        <div class="item">
             
            <div class="item-inner">
               <div class="i-img">
                <a href="#"><img src="{{ $product->Image }}" alt="" width="228" height="228" ></a>

               </div>
               <div class="details">
                <h4 class="name">
                    <a href="http://127.0.0.1:5501/details.html#">{{ $product->name }}</a>

                </h4>
                <div class="desc">
                    <ul>
                    <li>
                            Brand : {{ $product->brand}}
                            

                        </li>
                        <li>
                          Resolution: {{ $product->generation}}
                            

                        </li>
                        <li>
                          Refresh Rate : {{ $product->Cores}}
                            

                        </li>
                        <li>
                            Panel: {{ $product->Threads}}
                            

                        </li>
                      




                    </ul>

                </div>
                <div class="price">
                    <span>{{ $product->price }}</span>

                </div>
                <div class="buy">
                    <a href="payment.html"><img src="images/cart.png" alt=""> Buy now</a>

                </div>

               </div>
                
            
            </div>
          </div>
    @endforeach
    
     </div>  
     <div class="pagination-container">
    {{ $comps->appends(['type' => $type])->links('pagination') }}
 

</div>
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