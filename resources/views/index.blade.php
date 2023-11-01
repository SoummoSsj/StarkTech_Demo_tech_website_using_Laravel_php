
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/main.css') }}">
</head>
<body>
    <img class="bck" src="https://i.postimg.cc/43YPyJBQ/bck8.jpg" alt="">
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
                       
                       
                       
                       <li class="mlist"><a href="{{route('admin.choose')}}">Admin</a>
                       
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
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="dashboard" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
    <section class="hero"> 
     <div class="container">
     
       
        <div class="left-col">
            <p class="subhead">Welcome &amp; Enjoy</p>
            <h1 class="heads">Stark  <span>Tech</span> </h1>
            
            <div class="hero-cta">
                 
                <label class="primary-cta">Find The Best Deals</label>
                <a href="#" class="watch-video-cta">
                    <img src="images/watch.svg" alt="watch">watch how to build your own PC
                </a>
                
            
            </div>
        </div>
<iframe width="120" height="640" src="https://www.youtube.com/embed/BL4DCEp7blY" title="How to build a PC, the last guide you&#39;ll ever need!" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </section>
    
        <div class="slider">
            <div class="slides">
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
          

                <div class="slide first">
                    <img src="images/macbook pro.png" alt="">


                </div>
                <div class="slide">
                    <img src="images/2.png" alt="">


                </div>
                <div class="slide">
                    <img src="images/3.png" alt="">


                </div>
                <div class="navigation-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>

                </div>

                
            </div>
            <div class="navigation-manual">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>

            </div>
            

        </div>
        <script type="text/javascript">
            var counter = 1;
            setInterval (function(){
                document.getElementById('radio' + counter).checked =true;
                counter++;
                if(counter>3)
                {counter=1;}},5000
            )

        </script>
    <section class="features-section">
        <div class="container">
               <h2>What We Offer</h2>
            
              <ul class="features-list">
                <li>Variety Of PC parts</li>
                <li>Buy Laptop and Monitor at a discount price</li>
                <li>Gadgets and Accessories</li>
                <li>Pay on delivery or online</li>
                <li>Keep up with the latest tech news</li>
                <li>Others</li>
              </ul> 
              <img src="nvidia.svg" alt="nvidia">
        </div>
    </section>
    <section class="testimonials-section">
        <div class="container">
            <ul>
                <li>
                    <img src="images/facebook.svg" alt="person">
                    <a href="#" class="colr">Facebook</a>
                    

                </li>
                <li>
                    <img src="images/twitter.svg" alt="person">
                    <a href="#" class="colr">Twitter</a>
                    
                </li>
                <li>
                    <img src="images/discord.svg" alt="person">
                    <a href="#" class="colr">Discord</a>
                    
                </li>
            </ul>
        </div>
    </section>
    <section class="contact-section">
        <div class="containerlst">
            <img src="/images/banner.jpg">
            <!-- <div class="contact-left">
                <h2>Contact Us</h2>

                <form action="">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter Your Name">


                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter Your Email">


                    <label for="message">Message</label>
                    <textarea name="message" id="txt" cols="30" rows="10"></textarea>
                    <input type="submit" class="send-message-cta" value="Send Message" id="send">
                </form>
            </div> -->
            <div class="contact-right">
                <h2>Location</h2>
                <iframe class="google" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14701.387639774932!2d89.49362318946923!3d22.90057192790911!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff9bda1d0ff6e5%3A0x123a926908efcd0c!2sKhulna%20University%20of%20Engineering%20%26%20Technology!5e0!3m2!1sen!2sbd!4v1677933252502!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>
        </div>
    </section>
    <section class="lst">
        <div class="end">
        <ul class="primary-nav">
        <li class="mlist"><a href="{{ route('products',['type' => 'Monitor']) }}">Developed by Soummo</a>
                    
                    </li> 

                     </ul>
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

       // Function to handle search input changes
function handleSearchInput(event) {
  const searchValue = event.target.value;
  
  // Make an API call to fetch the search suggestions based on the searchValue
  // Replace the fetchSuggestions() function with your actual API call or data retrieval logic
  fetchSuggestions(searchValue)
    .then(suggestions => {
      // Render the suggestions in the suggestion list
      renderSuggestions(suggestions);
    });
}

// Function to fetch search suggestions from the server
function fetchSuggestions(searchValue) {
  // Replace this with your actual API endpoint or data retrieval logic
  // You can use libraries like Axios or fetch API to make the HTTP request
  return fetch(`/api/search?s=${searchValue}`)
    .then(response => response.json())
    .then(data => data.suggestions)
    .catch(error => {
      console.error('Error fetching search suggestions:', error);
      return [];
    });
}

// Function to render the search suggestions
function renderSuggestions(suggestions) {
  const suggestionsList = document.getElementById('suggestions-list');
  
  // Clear previous suggestions
  suggestionsList.innerHTML = '';
  
  // Render new suggestions
  suggestions.forEach(suggestion => {
    const li = document.createElement('li');
    li.textContent = suggestion;
    suggestionsList.appendChild(li);
  });
}

// Attach event listener to the search input
const searchInput = document.getElementById('search-input');
searchInput.addEventListener('input', handleSearchInput);

    </script>
</body>
</html>