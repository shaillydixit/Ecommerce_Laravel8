
  <header id="masthead" class="masthead">

<div class="header-top">
  <div class="container">
    <div class="row">
      <div class="col-sm-5 top-left text-left">
        <p class="top-contact">
          <i class="ti-email"></i><span><a href="#">support@company.com</a></span>
          <i class="ti-mobile"></i><span>+61 3 8376 6284</span>
        </p><!-- /.top-contact -->

      </div><!-- /.top-left -->

      <div class="col-sm-7 top-right text-right">
        <div id="currency" class="currency dropdown">
          <a href="#" class="current-title">USD $</a>
          <ul class="unsorted-list">
            <li>EURO &euro;</li>
            <li>POUND &pound;</li>
            <li>Franc &#x20a3;</li>
          </ul>
        </div>

        <div id="language" class="language dropdown">
          <a href="#" class="current-title">English</a>
          <ul class="unsorted-list">
            <li>Chiense</li>
            <li>French</li>
            <li>Spanish</li>
            <li>Mandarin</li>
          </ul>
        </div>

        <div class="wish-list">
          <a href="#" class="current-title">Wishlist</a>
          <span class="count">0</span>
          <span><i class="ti-heart"></i></span>
        </div>

        <div class="checkout"><a href="checkout.html">Checkout <i class="ti-check-box"></i></a></div><!-- /.checkout -->

        <div class="my-account dropdown">
          <a href="#">My Account<i class="ti-user"></i></a>
          <ul class="unsorted-list">
            <li><a href="{{ route('login') }}">Log In</a></li>
            <li><a href="{{ route('register') }}">Register</a></li>    
            <li><a href="#">My Profile</a></li>
            <li><a href="#">My Wishlist</a></li>
            <li><a href="cart.html">My Cart</a></li>
          </ul>
        </div><!-- /.my-account -->
        
      </div><!-- /.top-right -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</div><!-- /.header-top -->

<div class="header-middle">
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <h1><a class="navbar-brand hidden-xs" href="./"><img src="{{asset('frontend/images/logo.png')}}" alt="Site Logo"></a></h1>
      </div>
      <div class="col-sm-7">
        <div class="top-search-form">
          <form action="#" method="post" class="menu-form">
            <fieldset> 
              <select name="category" id="category">
                <option selected="selected">All Categories</option>
                <option>Men's Wear</option>
                <option>Women's Wear</option>
                <option>Kid's Wear</option>
                <option>Men's Fashion</option>
                <option>Women's Fashion</option>
                <option>Kid's Fashion</option>
                <option>Home Applience</option>
                <option>Electronics</option>
                <option>Gadgets</option>
                <option>Mobile</option>
                <option>Laptop</option>
                <option>Others</option>
              </select>
            </fieldset>

            <input type="text" placeholder="Keywords ..." class="form-control">
            <button type="submit" class="btn"><i class="fa fa-search"></i></button>
          </form>  
        </div><!-- /.top-search-form -->
      </div>
      <div class="col-sm-2">
        <div class="shop-cart">             
          <a class="cart-control" href="#" title="View your shopping cart">
            <i class="ti-bag"></i>
            <span class="count">3</span>
            <span>Cart - </span> 
            <span class="currency">$</span>
            <span class="amount">345.00</span>
          </a><!-- /.cart-control -->

          <div class="cart-items">
            <div class="widget_shopping_cart_content">
              <div class="cart-top">
                <div class="item media">
                  <button class="btn"><i class="fa fa-close"></i></button>
                  <div class="item-thumbnail media-left">
                    <img src="{{asset('frontend/images/menu/cart/1.png')}}" alt="Item Thimbnail">
                  </div><!-- /.item-thumbnail -->
                  <div class="item-details media-body">
                    <div class="rating"><input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5"/></div><!-- /.rating -->
                    <h4 class="item-title"><a href="#">Product Name Here</a></h4><!-- /.item-title -->
                    <div class="item-price">
                      <div class="item-price">
                        <span class="currency">$</span>
                        <span class="price">65</span> 
                        <span class="item-count">3</span><!-- /.item-count -->
                      </div><!-- /.item-price -->
                    </div><!-- /.item-price -->
                  </div><!-- /.item-details -->
                </div><!-- /.item -->

                <div class="item media">
                  <button class="btn"><i class="fa fa-close"></i></button>
                  <div class="item-thumbnail media-left">
                    <img src="{{asset('frontend/images/menu/cart/2.png')}}" alt="Item Thimbnail">
                  </div><!-- /.item-thumbnail -->
                  <div class="item-details media-body">
                    <div class="rating"><input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5"/></div><!-- /.rating -->

                    <h4 class="item-title"><a href="#">Product Name Here</a></h4><!-- /.item-title -->
                    <div class="item-price">
                      <div class="item-price">
                        <span class="currency">$</span>
                        <span class="price">65</span> 
                        <span class="item-count">3</span><!-- /.item-count -->
                      </div><!-- /.item-price -->
                    </div><!-- /.item-price -->
                  </div><!-- /.item-details -->
                </div><!-- /.item -->
              </div><!-- /.cart-top -->

              <div class="cart-middle">
                <button class="btn pull-left"><i class="ti-trash"></i> Empty Cart</button>
                <div class="price-total pull-right">
                  <span>Sub total:</span>
                  <span class="currency">$</span><span class="price">2500.00</span>
                </div><!-- /.price-total -->
              </div><!-- /.cart-middle -->

              <div class="cart-bottom">
                <a href="cart.html" class="btn pull-left"><i class="icons icon-basket-loaded"></i> View Cart</a>
                <a href="checkout.html" class="btn pull-right">Checkout</a>
              </div><!-- /.cart-bottom -->
            </div><!-- /.widget_shopping_cart_content -->
          </div><!-- /.scart-items -->
        </div>
      </div>
    </div><!-- /.row -->
  </div><!-- /.container -->
</div><!-- /.header-middle -->

<div class="header-bottom">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu" aria-expanded="false">
        <i class="fa fa-bars"></i>
      </button>
      <a class="navbar-brand visible-xs" href="./">
        <img src="{{asset('')}}frontend/images/logo.png" alt="Site Logo">
      </a><!-- /.navbar-brand -->
    </div>

    <nav id="main-menu" class="menu collapse navbar-collapse pull-left">
      <ul class="nav navbar-nav">
        <li class="menu-item menu-item-has-children active">
          <a href="#">Home</a>
          <ul class="sub-menu children">
            <li class="menu-item"><a href="index-01.html">Home 01</a></li>
            <li class="menu-item"><a href="index-02.html">Home 02</a></li>
            <li class="menu-item"><a href="index-03.html">Home 03</a></li>
            <li class="menu-item"><a href="index-04.html">Home 04</a></li>
            <li class="menu-item"><a href="index-05.html">Home 05</a></li>
            <li class="menu-item"><a href="index-06.html">Home 06</a></li>
            <li class="menu-item"><a href="index-07.html">Home 07</a></li>
            <li class="menu-item"><a href="index-08.html">Home 08</a></li>
            <li class="menu-item"><a href="index-09.html">Home 09</a></li>
            <li class="menu-item"><a href="index-10.html">Home 10</a></li>
            <li class="menu-item"><a href="index-11.html">Home 11</a></li>
          </ul>
        </li>

        <li class="menu-item menu-item-has-children menu-item-has-mega-menu">
          <a href="#">Shop</a>
          <ul class="mega-menu sub-menu">
            <li>
              <div class="container">
                <div class="menu-item col-sm-3">
                  <h6 class="menu-title">Shop Pages</h6>
                  <ul class="menu-list">
                    <li><a href="checkout.html">Checkout</a></li>
                    <li><a href="cart.html">Shopping Cart</a></li> 
                    <li><a href="shop-3column.html">Shop 3 Column</a></li>
                    <li><a href="shop-4column.html">Shop 4 Column</a></li>
                  </ul> 
                </div>

                <div class="menu-item col-sm-3">
                  <h6 class="menu-title">Shop Pages</h6>

                  <ul class="menu-list">
                    <li><a href="shop-list.html">Shop List 01</a></li>
                    <li><a href="shop-list-no-sidebar.html">Shop List 02</a></li>
                    <li><a href="shop-details-01.html">Shop Details 01</a></li>
                    <li><a href="shop-details-02.html">Shop Details 02</a></li>
                  </ul> 
                </div>

                <div class="menu-item col-sm-3">
                  <h6 class="menu-title">Accessories</h6>

                  <ul class="menu-list">
                    <li><a href="#">Innerwears</a></li>
                    <li><a href="#">T-Shirts & Shorts</a></li>
                    <li><a href="#">Caps & Scarf</a></li>
                    <li><a href="#">Trousers</a></li>
                  </ul> 
                </div>

                <div class="menu-item col-sm-3">
                  <div class="menu-content">
                    <a href="#">
                      <img src="{{asset('frontend/images/menu/shop.png')}}" alt="Image">
                      <h3 class="content-title">
                        <span>-65%</span>
                        Discount
                      </h3>
                    </a>
                  </div><!-- /.menu-content -->
                </div>
              </div>
            </li>
          </ul>
        </li>

        <li class="menu-item menu-item-has-children">
          <a href="#">Features</a>
          <ul class="sub-menu">
            <li class="menu-item menu-item-has-children">
              <a href="#">Banners</a>
              <ul class="sub-menu">
                <li><a href="banner-01.html">Banner 01</a></li>
                <li><a href="banner-02.html">Banner 02</a></li>
                <li><a href="banner-03.html">Banner 03</a></li>
                <li><a href="banner-04.html">Banner 04</a></li>
                <li><a href="banner-05.html">Banner 05</a></li>
                <li><a href="banner-06.html">Banner 06</a></li>
                <li><a href="banner-07.html">Banner 07</a></li>
                <li><a href="banner-08.html">Banner 08</a></li>
                <li><a href="banner-09.html">Banner 09</a></li>
                <li><a href="banner-10.html">Banner 10</a></li>                 
              </ul>
            </li>

            <li class="menu-item menu-item-has-children">
              <a href="#">Menu Styles</a>
              <ul class="sub-menu">
                <li><a href="menu-01.html">Menu 01</a></li>
                <li><a href="menu-02.html">Menu 02</a></li>
                <li><a href="menu-03.html">Menu 03</a></li>
                <li><a href="menu-04.html">Menu 04</a></li>
                <li><a href="menu-05.html">Menu 05</a></li>
              </ul>
            </li>

            <li class="menu-item menu-item-has-children">
              <a href="#">Footers</a>
              <ul class="sub-menu">
                <li><a href="footer-01.html">Footer 01</a></li>
                <li><a href="footer-02.html">Footer 02</a></li>
                <li><a href="footer-03.html">Footer 03</a></li>
              </ul>
            </li>      
          </ul>
        </li>

        <li class="menu-item menu-item-has-children menu-item-has-mega-menu">
          <a href="#">Pages</a>
          <ul class="mega-menu sub-menu">
            <li>
              <div class="container">
                <div class="menu-item col-sm-3">
                  <ul class="menu-list">
                    <li><a href="404.html">404</a></li>
                    <li><a href="about-01.html">About</a></li> 
                    <li><a href="checkout.html">Checkout</a></li>
                    <li><a href="contact.html">Contact</a></li>
                  </ul> 
                </div>

                <div class="menu-item col-sm-3">
                  <ul class="menu-list">
                    <li><a href="coming-soon.html">Coming Soon</a></li> 
                    <li><a href="faq.html">Faq</a></li>
                    <li><a href="pricing.html">Pricing</a></li>
                    <li><a href="register.html">Register / Login</a></li>  
                  </ul> 
                </div>

                <div class="menu-item col-sm-3">
                  <ul class="menu-list">
                    <li><a href="service-01.html">Service</a></li>
                    <li><a href="cart.html">Shopping Cart</a></li> 
                    <li><a href="shop-3column.html">Shop 3 Column</a></li>
                    <li><a href="shop-4column.html">Shop 4 Column</a></li>
                  </ul> 
                </div>

                <div class="menu-item col-sm-3">
                  <ul class="menu-list">
                    <li><a href="shop-list.html">Shop List 01</a></li>
                    <li><a href="shop-list-no-sidebar.html">Shop List 02</a></li>
                    <li><a href="shop-details-01.html">Shop Details 01</a></li>
                    <li><a href="shop-details-02.html">Shop Details 02</a></li>
                  </ul> 
                </div>
              </div>
            </li>
          </ul>
        </li>             

        <li class="menu-item menu-item-has-children menu-item-has-mega-menu">
          <a href="#">Shortcodes</a>
          <ul class="mega-menu sub-menu">
            <li>
              <div class="container">
                <div class="menu-item col-sm-3">
                  <ul class="menu-list with-icon">
                    <li><a href="alert.html"><i class="ti-info-alt"></i> Alert</a></li>
                    <li><a href="buttons.html"><i class="ti-link"></i> Buttons</a></li>
                    <li><a href="lists.html"><i class="ti-quote-right"></i> Lists &amp; Panels</a></li>
                    <li><a href="blockquotes.html"><i class="ti-quote-right"></i> Blockquotes</a></li>
                    <li><a href="counters.html"><i class="ti-alarm-clock"></i> Counters</a></li>
                    <li><a href="progress.html"><i class="ti-align-left"></i> Progress Bars</a></li>
                    <li><a href="deviders.html"><i class="ti-layout-line-solid"></i> Deviders</a></li>
                  </ul> 
                </div>

                <div class="menu-item col-sm-3">
                  <ul class="menu-list with-icon">
                    <li><a href="alert.html"><i class="ti-info-alt"></i> Alert</a></li>
                    <li><a href="buttons.html"><i class="ti-link"></i> Buttons</a></li>
                    <li><a href="lists.html"><i class="ti-quote-right"></i> Lists &amp; Panels</a></li>
                    <li><a href="blockquotes.html"><i class="ti-quote-right"></i> Blockquotes</a></li>
                    <li><a href="counters.html"><i class="ti-alarm-clock"></i> Counters</a></li>
                    <li><a href="progress.html"><i class="ti-align-left"></i> Progress Bars</a></li>
                    <li><a href="deviders.html"><i class="ti-layout-line-solid"></i> Deviders</a></li>
                  </ul> 
                </div>

                <div class="menu-item col-sm-3">
                  <ul class="menu-list with-icon">
                    <li><a href="alert.html"><i class="ti-info-alt"></i> Alert</a></li>
                    <li><a href="buttons.html"><i class="ti-link"></i> Buttons</a></li>
                    <li><a href="lists.html"><i class="ti-quote-right"></i> Lists &amp; Panels</a></li>
                    <li><a href="blockquotes.html"><i class="ti-quote-right"></i> Blockquotes</a></li>
                    <li><a href="counters.html"><i class="ti-alarm-clock"></i> Counters</a></li>
                    <li><a href="progress.html"><i class="ti-align-left"></i> Progress Bars</a></li>
                    <li><a href="deviders.html"><i class="ti-layout-line-solid"></i> Deviders</a></li>
                  </ul> 
                </div>

                <div class="menu-item col-sm-3">
                  <ul class="menu-list with-icon">
                    <li><a href="alert.html"><i class="ti-info-alt"></i> Alert</a></li>
                    <li><a href="buttons.html"><i class="ti-link"></i> Buttons</a></li>
                    <li><a href="lists.html"><i class="ti-quote-right"></i> Lists &amp; Panels</a></li>
                    <li><a href="blockquotes.html"><i class="ti-quote-right"></i> Blockquotes</a></li>
                    <li><a href="counters.html"><i class="ti-alarm-clock"></i> Counters</a></li>
                    <li><a href="progress.html"><i class="ti-align-left"></i> Progress Bars</a></li>
                    <li><a href="deviders.html"><i class="ti-layout-line-solid"></i> Deviders</a></li>
                  </ul> 
                </div>
              </div>
            </li>
          </ul>
        </li>

        <li class="menu-item menu-item-has-children">
          <a href="#">Blog</a>
          <ul class="sub-menu">
            <li class="menu-item menu-item-has-children">
              <a href="#">Classic</a>
              <ul class="sub-menu">
                <li><a href="classic-01.html">Right Sidebar</a></li>
                <li><a href="classic-02.html">Left Sidebar</a></li>
                <li><a href="classic-03.html">No Sidebar</a></li>
              </ul>
            </li>
            <li class="menu-item menu-item-has-children">
              <a href="#">Grid</a>
              <ul class="sub-menu">
                <li><a href="grid-2column-01.html">2 Column 01</a></li>
                <li><a href="grid-2column-02.html">2 Column 02</a></li>
                <li><a href="grid-3column-01.html">3 Column 01</a></li>
                <li><a href="grid-3column-02.html">3 Column 02</a></li>
              </ul>
            </li>
            <li class="menu-item menu-item-has-children">
              <a href="#">Masonary</a>
              <ul class="sub-menu">
                <li><a href="masonry-2column-01.html">2 Column 01</a></li>
                <li><a href="masonry-2column-02.html">2 Column 02</a></li>
                <li><a href="masonry-3column-01.html">3 Column 01</a></li>
                <li><a href="masonry-3column-02.html">3 Column 02</a></li>
              </ul>
            </li>
            <li class="menu-item menu-item-has-children">
              <a href="#">Blog Single</a>
              <ul class="sub-menu">
                <li><a href="blog-single-classic.html">Single Classic</a></li>
                <li><a href="blog-single-no-sidebar.html">Single Fullwidth</a></li>
                <li><a href="blog-single-left-sidebar.html">Left Sidebar</a></li>
                <li><a href="blog-single-right-sidebar.html">Right Sidebar</a></li>
              </ul>
            </li>
          </ul>
        </li>

        <li class="menu-item menu-item-has-children">
          <a href="#">Portfolio</a>
          <ul class="sub-menu">
            <li class="menu-item menu-item-has-children">
              <a href="#">Grid 2 Column</a>
              <ul class="sub-menu">
                <li><a href="portfolio-grid-2column-01.html">2 Column 01</a></li>
                <li><a href="portfolio-grid-2column-02.html">2 Column 02</a></li>
              </ul>
            </li>   

            <li class="menu-item menu-item-has-children">
              <a href="#">Grid 3 Column</a>
              <ul class="sub-menu">
                <li><a href="portfolio-grid-3column.html">3 Column 01</a></li>
                <li><a href="portfolio-grid-3column-02.html">3 Column 02</a></li>
              </ul>
            </li>

            <li class="menu-item menu-item-has-children">
              <a href="#">Grid 4 Column</a>
              <ul class="sub-menu">
                <li><a href="portfolio-grid-4column.html">4 Column 01</a></li>
                <li><a href="portfolio-grid-4column-02.html">4 Column 02</a></li>
              </ul>
            </li>    

            <li class="menu-item menu-item-has-children">
              <a href="#">Masonry 3 Column</a>
              <ul class="sub-menu">
                <li><a href="portfolio-masonry-3column.html">3 Column 01</a></li>
                <li><a href="portfolio-masonry-3column-02.html">3 Column 02</a></li>
              </ul>
            </li>                                                 

            <li><a href="portfolio-list.html">List Style</a></li>

            <li class="menu-item menu-item-has-children">
              <a href="#">Portfolio Detail</a>
              <ul class="sub-menu">
                <li><a href="portfolio-details.html">Details 01</a></li>
                <li><a href="portfolio-details-02.html">Details 02</a></li>
              </ul>
            </li>
          </ul>
        </li>

        <li class="menu-item"><a href="#">Buy</a></li> 

      </ul><!-- /.navbar-nav -->
    </nav><!-- /.navbar-collapse -->

    <div class="menu-social pull-right">
      <a href="#"><i class="ti-twitter-alt"></i></a>
      <a href="#"><i class="ti-facebook"></i></a>
      <a href="#"><i class="ti-pinterest-alt"></i></a>
      <a href="#"><i class="ti-vimeo-alt"></i></a>
    </div><!-- /.menu-social -->
  </div><!-- /.container -->
</div><!-- /.header-bottom -->

</header>