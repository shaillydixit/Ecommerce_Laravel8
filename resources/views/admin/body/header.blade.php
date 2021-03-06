<header class="dark-bg">
            <div class="usr-inf" style="background-image: url(backend/assets/images/usr-inf-bg.jpg);">
                <div class="usr-inf-inner">
                    <span class="usr-img"><img src="{{asset('backend/assets/images/resources/user-img.jpg')}}" alt="user-img.jpg"><i class="usr-sts onln"></i></span>
                    <div class="usr-nm-desg">
                        <h4>Shailly Dixit</h4>
                        <span>Laravel Developer</span>
                    </div>
                </div>
                <p>I'M Working in Web Development Company.</p>
                <div class="usr-inf-btns">
                    <a class="usr-msg" href="#" title="">Message</a>
                    <a class="usr-log" href="{{route('admin.logout')}}" title="">Log Out</a>
                </div>
            </div><!-- User Info -->
            <nav>
                <ul>
                    <li class="menu-item-has-children"><a href="#" title=""><span>Category</span></a>
                        <ul class="children">
                            <li><a href="{{route('category')}}" title="">Category View</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="#" title=""><span>SubCategory</span></a>
                        <ul class="children">
                            <li><a href="{{route('subcategory')}}" title="">SubCategory View</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="#" title=""><span>Brands</span></a>
                        <ul class="children">
                            <li><a href="{{route('brand')}}" title="">Brand View</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="#" title=""><span>Products</span></a>
                        <ul class="children">
                            <li><a href="{{route('add.product')}}" title="">Add Product</a></li>
                        </ul>
                    </li>
                </ul>
            </nav><!-- Nav -->
        </header>