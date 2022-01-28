@extends('frontend.master')

@section('content')

<section class="featured">
    <div class="section-padding">
      <div class="container">

        <!-- Nav tabs -->
        <div class="featured-navs">
      <h2>Featured</h2>
      </div><!-- /.featured-navs -->

        <!-- Tab panes -->
        <div class="tab-content">
          <div id="featured">
            <div class="featured-slider owl-carousel owl-theme">
              <div class="item">
                <div class="item-top">
                  <div class="item-thumbnail">
                    <img src="{{asset('frontend/images/home01/featured/1.png')}}" alt="Item Image">
                    <span class="ribbon sale">Sale</span>
                  </div><!-- /.item-thumbnail -->

                  <div class="item-inner">
                    <button class="wish-list"><i class="fa fa-heart"></i><span>Add to wishlist </span></button>
                    <button class="add-to-cart"><i class="fa fa-shopping-cart"></i><span>Add to cart</span></button>
                    <a class="fancybox" href="{{asset('frontend/images/home01/featured/1.png')}}"><i class="fa fa-search"></i> <span> Quick View</span></a>
                  </div><!-- /.item-inner -->
                </div><!-- /.item-top -->
                <div class="item-bottom">
                  <h3 class="item-title"><a href="#">Product name here</a></h3><!-- /.item-title -->
                  <div class="item-price">
                    <span class="currency">$</span><!-- /.currency -->
                    <span class="price">88.00</span><!-- /.price -->
                  </div><!-- /.item-price -->

                  <div class="previous-price">
                    <span class="currency">$</span><!-- /.currency -->
                    <span class="price">98.00</span><!-- /.price -->
                  </div><!-- /.previous-price -->
                </div><!-- /.item-bottom -->
              </div><!-- /.item -->

              <div class="item">
                <div class="item-top">
                  <div class="item-thumbnail">
                    <img src="{{asset('frontend/images/home01/featured/2.png')}}" alt="Item Image">
                    <span class="ribbon new">New</span>
                  </div><!-- /.item-thumbnail -->

                  <div class="item-inner">
                    <button class="wish-list"><i class="fa fa-heart"></i><span>Add to wishlist </span></button>
                    <button class="add-to-cart"><i class="fa fa-shopping-cart"></i><span>Add to cart</span></button>
                    <a class="fancybox" href="{{asset('frontend/images/home01/featured/2.png')}}"><i class="fa fa-search"></i> <span> Quick View</span></a>
                  </div><!-- /.item-inner -->
                </div><!-- /.item-top -->
                <div class="item-bottom">
                  <h3 class="item-title"><a href="#">Product name here</a></h3><!-- /.item-title -->
                  <div class="item-price">
                    <span class="currency">$</span><!-- /.currency -->
                    <span class="price">88.00</span><!-- /.price -->
                  </div><!-- /.item-price -->
                </div><!-- /.item-bottom -->
              </div><!-- /.item -->

              <div class="item">
                <div class="item-top">
                  <div class="item-thumbnail">
                    <img src="{{asset('frontend/images/home01/featured/3.png')}}" alt="Item Image">
                  </div><!-- /.item-thumbnail -->

                  <div class="item-inner">
                    <button class="wish-list"><i class="fa fa-heart"></i><span>Add to wishlist </span></button>
                    <button class="add-to-cart"><i class="fa fa-shopping-cart"></i><span>Add to cart</span></button>
                    <a class="fancybox" href="{{asset('frontend/images/home01/featured/3.png')}}"><i class="fa fa-search"></i> <span> Quick View</span></a>
                  </div><!-- /.item-inner -->
                </div><!-- /.item-top -->
                <div class="item-bottom">
                  <h3 class="item-title"><a href="#">Product name here</a></h3><!-- /.item-title -->
                  <div class="item-price">
                    <span class="currency">$</span><!-- /.currency -->
                    <span class="price">88.00</span><!-- /.price -->
                  </div><!-- /.item-price -->
                </div><!-- /.item-bottom -->
              </div><!-- /.item -->

              <div class="item">
                <div class="item-top">
                  <div class="item-thumbnail">
                    <img src="{{asset('frontend/images/home01/featured/4.png')}}" alt="Item Image">
                  </div><!-- /.item-thumbnail -->

                  <div class="item-inner">
                    <button class="wish-list"><i class="fa fa-heart"></i><span>Add to wishlist </span></button>
                    <button class="add-to-cart"><i class="fa fa-shopping-cart"></i><span>Add to cart</span></button>
                    <a class="fancybox" href="{{asset('frontend/images/home01/featured/4.png')}}"><i class="fa fa-search"></i> <span> Quick View</span></a>
                  </div><!-- /.item-inner -->
                </div><!-- /.item-top -->
                <div class="item-bottom">
                  <h3 class="item-title"><a href="#">Product name here</a></h3><!-- /.item-title -->
                  <div class="item-price">
                    <span class="currency">$</span><!-- /.currency -->
                    <span class="price">88.00</span><!-- /.price -->
                  </div><!-- /.item-price -->
                </div><!-- /.item-bottom -->
              </div><!-- /.item -->

              <div class="item">
                <div class="item-top">
                  <div class="item-thumbnail">
                    <img src="{{asset('frontend/images/home01/featured/5.png')}}" alt="Item Image">
                    <span class="ribbon sale">Sale</span>
                  </div><!-- /.item-thumbnail -->

                  <div class="item-inner">
                    <button class="wish-list"><i class="fa fa-heart"></i><span>Add to wishlist </span></button>
                    <button class="add-to-cart"><i class="fa fa-shopping-cart"></i><span>Add to cart</span></button>
                    <a class="fancybox" href="{{asset('frontend/images/home01/featured/5.png')}}"><i class="fa fa-search"></i> <span> Quick View</span></a>
                  </div><!-- /.item-inner -->
                </div><!-- /.item-top -->
                <div class="item-bottom">
                  <h3 class="item-title"><a href="#">Product name here</a></h3><!-- /.item-title -->
                  <div class="item-price">
                    <span class="currency">$</span><!-- /.currency -->
                    <span class="price">88.00</span><!-- /.price -->
                  </div><!-- /.item-price -->
                  <div class="previous-price">
                    <span class="currency">$</span><!-- /.currency -->
                    <span class="price">98.00</span><!-- /.price -->
                  </div><!-- /.previous-price -->
                </div><!-- /.item-bottom -->
              </div><!-- /.item -->

              <div class="item">
                <div class="item-top">
                  <div class="item-thumbnail">
                    <img src="{{asset('frontend/images/home01/featured/6.png')}}" alt="Item Image">
                    <span class="ribbon new">New</span>
                  </div><!-- /.item-thumbnail -->

                  <div class="item-inner">
                    <button class="wish-list"><i class="fa fa-heart"></i><span>Add to wishlist </span></button>
                    <button class="add-to-cart"><i class="fa fa-shopping-cart"></i><span>Add to cart</span></button>
                    <a class="fancybox" href="{{asset('frontend/images/home01/featured/6.png')}}"><i class="fa fa-search"></i> <span> Quick View</span></a>
                  </div><!-- /.item-inner -->
                </div><!-- /.item-top -->
                <div class="item-bottom">
                  <h3 class="item-title"><a href="#">Product name here</a></h3><!-- /.item-title -->
                  <div class="item-price">
                    <span class="currency">$</span><!-- /.currency -->
                    <span class="price">88.00</span><!-- /.price -->
                  </div><!-- /.item-price -->
                </div><!-- /.item-bottom -->
              </div><!-- /.item -->

              <div class="item">
                <div class="item-top">
                  <div class="item-thumbnail">
                    <img src="{{asset('frontend/images/home01/featured/7.png')}}" alt="Item Image">
                  </div><!-- /.item-thumbnail -->

                  <div class="item-inner">
                    <button class="wish-list"><i class="fa fa-heart"></i><span>Add to wishlist </span></button>
                    <button class="add-to-cart"><i class="fa fa-shopping-cart"></i><span>Add to cart</span></button>
                    <a class="fancybox" href="{{asset('frontend/images/home01/featured/7.png')}}"><i class="fa fa-search"></i> <span> Quick View</span></a>
                  </div><!-- /.item-inner -->
                </div><!-- /.item-top -->
                <div class="item-bottom">
                  <h3 class="item-title"><a href="#">Product name here</a></h3><!-- /.item-title -->
                  <div class="item-price">
                    <span class="currency">$</span><!-- /.currency -->
                    <span class="price">88.00</span><!-- /.price -->
                  </div><!-- /.item-price -->
                </div><!-- /.item-bottom -->
              </div><!-- /.item -->

              <div class="item">
                <div class="item-top">
                  <div class="item-thumbnail">
                    <img src="{{asset('frontend/images/home01/featured/8.png')}}" alt="Item Image">
                  </div><!-- /.item-thumbnail -->

                  <div class="item-inner">
                    <button class="wish-list"><i class="fa fa-heart"></i><span>Add to wishlist </span></button>
                    <button class="add-to-cart"><i class="fa fa-shopping-cart"></i><span>Add to cart</span></button>
                    <a class="fancybox" href="{{asset('frontend/images/home01/featured/8.png')}}"><i class="fa fa-search"></i> <span> Quick View</span></a>
                  </div><!-- /.item-inner -->
                </div><!-- /.item-top -->
                <div class="item-bottom">
                  <h3 class="item-title"><a href="#">Product name here</a></h3><!-- /.item-title -->
                  <div class="item-price">
                    <span class="currency">$</span><!-- /.currency -->
                    <span class="price">88.00</span><!-- /.price -->
                  </div><!-- /.item-price -->
                </div><!-- /.item-bottom -->
              </div><!-- /.item -->

            </div>
          </div>
        </div><!-- /.tab-content -->
      </div><!-- /.container -->
    </div><!-- /.section-padding -->
</section><!-- /.featured -->


  <section class="trending bg-gray">
    <div class="section-padding">
      <div class="container">
        <div class="section-top">
          <h2 class="section-title">Trending <span></span></h2><!-- /.section-title -->
        </div><!-- /.section-top -->

        <div class="row">
          <div class="trending-slider owl-carousel owl-theme">

            <div class="item">
              <div class="col-sm-6">
                <div class="item-thumbnail">
                  <img src="{{asset('frontend/images/home01/trend/1.png')}}" alt="Item Thumbnail">
                </div>
                <div class="item-inner">
                  <button class="wish-list"><i class="fa fa-heart"></i><span>Add to wishlist </span></button>
                  <a class="fancybox" href="{{asset('frontend/images/home01/trend/1.png')}}"><i class="fa fa-search"></i> <span> Quick View</span></a>
                </div><!-- /.item-inner -->
              </div>

              <div class="col-sm-6">
                <div class="item-details">
                  <h3 class="item-title"><a href="#">Product name here</a></h3><!-- /.item-title -->
                  <div class="rating"><input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5"/></div><!-- /.rating -->
                  <div class="item-price">
                    <span class="currency">$</span><!-- /.currency -->
                    <span class="price">88.00</span><!-- /.price -->
                  </div><!-- /.item-price -->
                  <p class="description">
                    I returned from the City about three o'clock on that May pretty well
                  </p><!-- /.description -->
                  <a href="#" class="btn">Add to cart</a><!-- /.btn -->
                </div>
              </div>
            </div>

            <div class="item">
              <div class="col-sm-6">
                <div class="item-thumbnail">
                  <img src="{{asset('frontend/images/home01/trend/2.png')}}" alt="Item Thumbnail">
                </div>

                <div class="item-inner">
                  <button class="wish-list"><i class="fa fa-heart"></i><span>Add to wishlist </span></button>
                  <a class="fancybox" href="{{asset('frontend/images/home01/trend/2.png')}}"><i class="fa fa-search"></i> <span> Quick View</span></a>
                </div><!-- /.item-inner -->
              </div>

              <div class="col-sm-6">
                <div class="item-details">
                  <h3 class="item-title"><a href="#">Product name here</a></h3><!-- /.item-title -->
                  <div class="rating"><input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5"/></div><!-- /.rating -->
                  <div class="item-price">
                    <span class="currency">$</span><!-- /.currency -->
                    <span class="price">88.00</span><!-- /.price -->
                  </div><!-- /.item-price -->
                  <p class="description">
                    had been three months in the Old Country, and was fed up with it
                  </p><!-- /.description -->
                  <a href="#" class="btn">Add to cart</a><!-- /.btn -->
                </div>
              </div>
            </div>

            <div class="item">
              <div class="col-sm-6">
                <div class="item-thumbnail">
                  <img src="{{asset('frontend/images/home01/trend/3.png')}}" alt="Item Thumbnail">
                </div>

                <div class="item-inner">
                  <button class="wish-list"><i class="fa fa-heart"></i><span>Add to wishlist </span></button>
                  <a class="fancybox" href="{{asset('frontend/images/home01/trend/3.png')}}"><i class="fa fa-search"></i> <span> Quick View</span></a>
                </div><!-- /.item-inner -->
              </div>

              <div class="col-sm-6">
                <div class="item-details">
                  <h3 class="item-title"><a href="#">Product name here</a></h3><!-- /.item-title -->
                  <div class="rating"><input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5"/></div><!-- /.rating -->
                  <div class="item-price">
                    <span class="currency">$</span><!-- /.currency -->
                    <span class="price">88.00</span><!-- /.price -->
                  </div><!-- /.item-price -->
                  <p class="description">
                    The weather made me liverish, the talk of the ordinary Englishman made sick
                  </p><!-- /.description -->
                  <a href="#" class="btn">Add to cart</a><!-- /.btn -->
                </div>
              </div>
            </div>

            <div class="item">
              <div class="col-sm-6">
                <div class="item-thumbnail">
                  <img src="{{asset('frontend/images/home01/trend/4.png')}}" alt="Item Thumbnail">
                </div>
                <div class="item-inner">
                  <button class="wish-list"><i class="fa fa-heart"></i><span>Add to wishlist </span></button>
                  <a class="fancybox" href="{{asset('frontend/images/home01/trend/4.png')}}"><i class="fa fa-search"></i> <span> Quick View</span></a>
                </div><!-- /.item-inner -->
              </div>

              <div class="col-sm-6">
                <div class="item-details">
                  <h3 class="item-title"><a href="#">Product name here</a></h3><!-- /.item-title -->
                  <div class="rating"><input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5"/></div><!-- /.rating -->
                  <div class="item-price">
                    <span class="currency">$</span><!-- /.currency -->
                    <span class="price">88.00</span><!-- /.price -->
                  </div><!-- /.item-price -->
                  <p class="description">
                    It made me bite my lips to think of the plans I had been building up those
                  </p><!-- /.description -->
                  <a href="#" class="btn">Add to cart</a><!-- /.btn -->
                </div>
              </div>
            </div>

          </div><!-- /.trending-slider -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </div><!-- /.section-padding -->
  </section><!-- /.trending -->

  <section class="featured">
    <div class="section-padding">
      <div class="container">

        <!-- Nav tabs -->
        <div class="featured-navs">
          <h2>New Arrivals</h2>
        </div><!-- /.featured-navs -->

        <!-- Tab panes -->
        <div class="tab-content">
          <div id="new">
            <div class="featured-slider owl-carousel owl-theme">
              <div class="item">
                <div class="item-top">
                  <div class="item-thumbnail">
                    <img src="{{asset('frontend/images/home01/featured/8.png')}}" alt="Item Image">
                  </div><!-- /.item-thumbnail -->

                  <div class="item-inner">
                    <button class="wish-list"><i class="fa fa-heart"></i><span>Add to wishlist </span></button>
                    <button class="add-to-cart"><i class="fa fa-shopping-cart"></i><span>Add to cart</span></button>
                    <a class="fancybox" href="{{asset('frontend/images/home01/featured/8.png')}}"><i class="fa fa-search"></i> <span> Quick View</span></a>
                  </div><!-- /.item-inner -->
                </div><!-- /.item-top -->
                <div class="item-bottom">
                  <h3 class="item-title"><a href="#">Product name here</a></h3><!-- /.item-title -->
                  <div class="item-price">
                    <span class="currency">$</span><!-- /.currency -->
                    <span class="price">88.00</span><!-- /.price -->
                  </div><!-- /.item-price -->
                </div><!-- /.item-bottom -->
              </div><!-- /.item -->

              <div class="item">
                <div class="item-top">
                  <div class="item-thumbnail">
                    <img src="{{asset('frontend/images/home01/featured/7.png')}}" alt="Item Image">
                  </div><!-- /.item-thumbnail -->

                  <div class="item-inner">
                    <button class="wish-list"><i class="fa fa-heart"></i><span>Add to wishlist </span></button>
                    <button class="add-to-cart"><i class="fa fa-shopping-cart"></i><span>Add to cart</span></button>
                    <a class="fancybox" href="{{asset('frontend/images/home01/featured/7.png')}}"><i class="fa fa-search"></i> <span> Quick View</span></a>
                  </div><!-- /.item-inner -->
                </div><!-- /.item-top -->
                <div class="item-bottom">
                  <h3 class="item-title"><a href="#">Product name here</a></h3><!-- /.item-title -->
                  <div class="item-price">
                    <span class="currency">$</span><!-- /.currency -->
                    <span class="price">88.00</span><!-- /.price -->
                  </div><!-- /.item-price -->
                </div><!-- /.item-bottom -->
              </div><!-- /.item -->

              <div class="item">
                <div class="item-top">
                  <div class="item-thumbnail">
                    <img src="{{asset('frontend/images/home01/featured/6.png')}}" alt="Item Image">
                    <span class="ribbon sale">Sale</span>
                  </div><!-- /.item-thumbnail -->

                  <div class="item-inner">
                    <button class="wish-list"><i class="fa fa-heart"></i><span>Add to wishlist </span></button>
                    <button class="add-to-cart"><i class="fa fa-shopping-cart"></i><span>Add to cart</span></button>
                    <a class="fancybox" href="{{asset('frontend/images/home01/featured/6.png')}}"><i class="fa fa-search"></i> <span> Quick View</span></a>
                  </div><!-- /.item-inner -->
                </div><!-- /.item-top -->
                <div class="item-bottom">
                  <h3 class="item-title"><a href="#">Product name here</a></h3><!-- /.item-title -->
                  <div class="item-price">
                    <span class="currency">$</span><!-- /.currency -->
                    <span class="price">88.00</span><!-- /.price -->
                  </div><!-- /.item-price -->
                  <div class="previous-price">
                    <span class="currency">$</span><!-- /.currency -->
                    <span class="price">98.00</span><!-- /.price -->
                  </div><!-- /.previous-price -->
                </div><!-- /.item-bottom -->
              </div><!-- /.item -->

              <div class="item">
                <div class="item-top">
                  <div class="item-thumbnail">
                    <img src="{{asset('frontend/images/home01/featured/5.png')}}" alt="Item Image">
                    <span class="ribbon new">new</span>
                  </div><!-- /.item-thumbnail -->

                  <div class="item-inner">
                    <button class="wish-list"><i class="fa fa-heart"></i><span>Add to wishlist </span></button>
                    <button class="add-to-cart"><i class="fa fa-shopping-cart"></i><span>Add to cart</span></button>
                    <a class="fancybox" href="{{asset('frontend/images/home01/featured/5.png')}}"><i class="fa fa-search"></i> <span> Quick View</span></a>
                  </div><!-- /.item-inner -->
                </div><!-- /.item-top -->
                <div class="item-bottom">
                  <h3 class="item-title"><a href="#">Product name here</a></h3><!-- /.item-title -->
                  <div class="item-price">
                    <span class="currency">$</span><!-- /.currency -->
                    <span class="price">88.00</span><!-- /.price -->
                  </div><!-- /.item-price -->
                </div><!-- /.item-bottom -->
              </div><!-- /.item -->

              <div class="item">
                <div class="item-top">
                  <div class="item-thumbnail">
                    <img src="{{asset('frontend/images/home01/featured/4.png')}}" alt="Item Image">
                  </div><!-- /.item-thumbnail -->

                  <div class="item-inner">
                    <button class="wish-list"><i class="fa fa-heart"></i><span>Add to wishlist </span></button>
                    <button class="add-to-cart"><i class="fa fa-shopping-cart"></i><span>Add to cart</span></button>
                    <a class="fancybox" href="{{asset('frontend/images/home01/featured/4.png')}}"><i class="fa fa-search"></i> <span> Quick View</span></a>
                  </div><!-- /.item-inner -->
                </div><!-- /.item-top -->
                <div class="item-bottom">
                  <h3 class="item-title"><a href="#">Product name here</a></h3><!-- /.item-title -->
                  <div class="item-price">
                    <span class="currency">$</span><!-- /.currency -->
                    <span class="price">88.00</span><!-- /.price -->
                  </div><!-- /.item-price -->
                </div><!-- /.item-bottom -->
              </div><!-- /.item -->

              <div class="item">
                <div class="item-top">
                  <div class="item-thumbnail">
                    <img src="{{asset('frontend/images/home01/featured/3.png')}}" alt="Item Image">
                  </div><!-- /.item-thumbnail -->

                  <div class="item-inner">
                    <button class="wish-list"><i class="fa fa-heart"></i><span>Add to wishlist </span></button>
                    <button class="add-to-cart"><i class="fa fa-shopping-cart"></i><span>Add to cart</span></button>
                    <a class="fancybox" href="{{asset('frontend/images/home01/featured/3.png')}}"><i class="fa fa-search"></i> <span> Quick View</span></a>
                  </div><!-- /.item-inner -->
                </div><!-- /.item-top -->
                <div class="item-bottom">
                  <h3 class="item-title"><a href="#">Product name here</a></h3><!-- /.item-title -->
                  <div class="item-price">
                    <span class="currency">$</span><!-- /.currency -->
                    <span class="price">88.00</span><!-- /.price -->
                  </div><!-- /.item-price -->
                </div><!-- /.item-bottom -->
              </div><!-- /.item -->

              <div class="item">
                <div class="item-top">
                  <div class="item-thumbnail">
                    <img src="{{asset('frontend/images/home01/featured/2.png')}}" alt="Item Image">
                    <span class="ribbon sale">Sale</span>
                  </div><!-- /.item-thumbnail -->

                  <div class="item-inner">
                    <button class="wish-list"><i class="fa fa-heart"></i><span>Add to wishlist </span></button>
                    <button class="add-to-cart"><i class="fa fa-shopping-cart"></i><span>Add to cart</span></button>
                    <a class="fancybox" href="{{asset('frontend/images/home01/featured/2.png')}}"><i class="fa fa-search"></i> <span> Quick View</span></a>
                  </div><!-- /.item-inner -->
                </div><!-- /.item-top -->
                <div class="item-bottom">
                  <h3 class="item-title"><a href="#">Product name here</a></h3><!-- /.item-title -->
                  <div class="item-price">
                    <span class="currency">$</span><!-- /.currency -->
                    <span class="price">88.00</span><!-- /.price -->
                  </div><!-- /.item-price -->
                  <div class="previous-price">
                    <span class="currency">$</span><!-- /.currency -->
                    <span class="price">98.00</span><!-- /.price -->
                  </div><!-- /.previous-price -->
                </div><!-- /.item-bottom -->
              </div><!-- /.item -->

              <div class="item">
                <div class="item-top">
                  <div class="item-thumbnail">
                    <img src="{{asset('frontend/images/home01/featured/1.png')}}" alt="Item Image">
                    <span class="ribbon new">New</span>
                  </div><!-- /.item-thumbnail -->

                  <div class="item-inner">
                    <button class="wish-list"><i class="fa fa-heart"></i><span>Add to wishlist </span></button>
                    <button class="add-to-cart"><i class="fa fa-shopping-cart"></i><span>Add to cart</span></button>
                    <a class="fancybox" href="{{asset('frontend/images/home01/featured/1.png')}}"><i class="fa fa-search"></i> <span> Quick View</span></a>
                  </div><!-- /.item-inner -->
                </div><!-- /.item-top -->
                <div class="item-bottom">
                  <h3 class="item-title"><a href="#">Product name here</a></h3><!-- /.item-title -->
                  <div class="item-price">
                    <span class="currency">$</span><!-- /.currency -->
                    <span class="price">88.00</span><!-- /.price -->
                  </div><!-- /.item-price -->
                </div><!-- /.item-bottom -->
              </div><!-- /.item -->

            </div>
          </div>
        </div><!-- /.tab-content -->
      </div><!-- /.container -->
    </div><!-- /.section-padding -->
</section><!-- /.featured -->


  <section class="clients-logo bg-gray text-center">
    <div class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-sm-3">
            <div class="item"><a href="#"><img src="{{asset('frontend/images/brand/1.png')}}" alt="Brand Logo"></a></div><!-- /.item -->
          </div>
          <div class="col-sm-3">
            <div class="item"><a href="#"><img src="{{asset('frontend/images/brand/2.png')}}" alt="Brand Logo"></a></div><!-- /.item -->
          </div>
          <div class="col-sm-3">
            <div class="item"><a href="#"><img src="{{asset('frontend/images/brand/3.png')}}" alt="Brand Logo"></a></div><!-- /.item -->
          </div>
          <div class="col-sm-3">
            <div class="item"><a href="#"><img src="{{asset('frontend/images/brand/4.png')}}" alt="Brand Logo"></a></div><!-- /.item -->
          </div>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </div><!-- /.section-padding -->
  </section><!-- /.clients-logo -->

@endsection