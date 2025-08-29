{{--<header id="header">--}}
{{--    <div class="header-top">--}}
{{--        <div class="container">--}}
{{--            <div class="row align-items-center">--}}
{{--                <div class="col-lg-3 col-6">--}}
{{--                    <a href="{{ route('front.home-page') }}" class="logo" title="{{ $config->web_title}}">--}}
{{--                        <img src="{{ $config->image ? $config->image->path : 'https://placehold.co/100x100' }}" alt="{{ $config->web_title }}" class="img-fluid" loading="lazy">--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="col-lg-6 col-12 search-header">--}}
{{--                    <div class="search-smart">--}}
{{--                        <form action="{{ route('front.search') }}" method="get" class="search-form header-search-form" role="search">--}}
{{--                            <input type="text" name="keyword" required--}}
{{--                                class="input-group-field auto-search search-auto form-control"--}}
{{--                                placeholder="Nhập tên sản phẩm..." autocomplete="off">--}}
{{--                            <button class="btn btn-default" type="submit" aria-label="Tìm kiếm" title="Tìm kiếm">--}}
{{--                                Tìm kiếm--}}
{{--                            </button>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-6 header-control">--}}
{{--                    <ul class="ul-control">--}}
{{--                        <li class="header-cart block-cart">--}}
{{--                            <a href="/cart" class="icon" aria-label="Giỏ hàng" title="Giỏ hàng">--}}
{{--                                <img src="/site/images/shopping-cart.png"--}}
{{--                                    alt="Lofi Decor" width="24" height="24">--}}
{{--                                <span class="title">Giỏ hàng</span>--}}
{{--                                <span class="count_item_pr count-item" ng-if="cart.count > 0"><% cart.count %></span>--}}
{{--                            </a>--}}
{{--                            <div class="top-cart-content">--}}
{{--                                <div class="CartHeaderContainer">--}}
{{--                                    <form class="cart ajaxcart cartheader" ng-if="cart.count > 0">--}}
{{--                                        <div class="ajaxcart__inner ajaxcart__inner--has-fixed-footer cart_body items">--}}
{{--                                            <div class="ajaxcart__row" ng-repeat="item in cart.items">--}}
{{--                                                <div class="ajaxcart__product cart_product" data-line="1">--}}
{{--                                                    <a ng-href="/san-pham/<% item.attributes.slug %>.html" class="ajaxcart__product-image cart_image" title="<% item.name %>">--}}
{{--                                                        <img width="80" height="80" ng-src="<% item.attributes.image %>" alt="<% item.name %>">--}}
{{--                                                    </a>--}}
{{--                                                    <div class="grid__item cart_info">--}}
{{--                                                        <div class="ajaxcart__product-name-wrapper cart_name">--}}
{{--                                                            <a ng-href="/san-pham/<% item.attributes.slug %>.html" class="ajaxcart__product-name h4" title="<% item.name %>"><% item.name %></a>--}}
{{--                                                            <div class="cart_attribute">--}}
{{--                                                                <div ng-repeat="attribute in item.attributes.attributes" style="line-height: 1;">--}}
{{--                                                                    <span class="cart_attribute_name" style="margin-left: 8px; font-weight: 600; font-size: 14px;"><% attribute.name %> :</span>--}}
{{--                                                                    <span class="cart_attribute_value" style="font-size: 14px;"><% attribute.value %></span>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <a title="Xóa" class="cart__btn-remove remove-item-cart ajaxifyCart--remove" href="javascript:;" data-line="1" ng-click='removeItem(item.id)'></a>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="grid">--}}
{{--                                                        <div class="grid__item one-half cart_select cart_item_name">--}}
{{--                                                            <div class="ajaxcart__qty input-group-btn">--}}
{{--                                                                <button type="button" class="ajaxcart__qty-adjust ajaxcart__qty--minus items-count" data-id="" data-qty="1" data-line="1" aria-label="-" ng-click="decrementQuantity(item); changeQty(item.quantity, item.id)">--}}
{{--                                                                ---}}
{{--                                                                </button>--}}
{{--                                                                <input type="text" name="" class="ajaxcart__qty-num number-sidebar" maxlength="3" ng-model="item.quantity" value="<%item.quantity%>" min="0" data-id="" data-line="1" aria-label="quantity" pattern="[0-9]*" ng-change="changeQty(item.quantity, item.id)">--}}
{{--                                                                <button type="button" class="ajaxcart__qty-adjust ajaxcart__qty--plus items-count" data-id="" data-line="1" data-qty="3" aria-label="+" ng-click="incrementQuantity(item); changeQty(item.quantity, item.id)">--}}
{{--                                                                +--}}
{{--                                                                </button>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="grid__item one-half text-right cart_prices">--}}
{{--                                                            <span class="cart-price"><% item.price | number %>₫</span>--}}
{{--                                                        </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="ajaxcart__footer ajaxcart__footer--fixed cart-footer" ng-if="cart.count > 0">--}}
{{--                                            <div class="ajaxcart__subtotal">--}}
{{--                                                <div class="cart__subtotal">--}}
{{--                                                    <div class="cart__col-6">Tổng tiền:</div>--}}
{{--                                                    <div class="text-right cart__totle"><span class="total-price"><% cart.total | number %>₫</span></div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="cart__btn-proceed-checkout-dt ">--}}
{{--                                                <button onclick="location.href='{{ route('cart.checkout') }}'" type="button" class="button btn btn-default cart__btn-proceed-checkout" id="btn-proceed-checkout" title="Xem giỏ hàng">Xem giỏ hàng</button>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </form>--}}
{{--                                    <div class="cart--empty-message" ng-if="!cart.items || cart.count == 0">--}}
{{--                                        <img width="32" height="32" src="/site/images/no-cart.png?1677998172667">--}}
{{--                                        <p>Không có sản phẩm nào trong giỏ hàng của bạn</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                    <div class="menu-bar d-lg-none d-block">--}}
{{--                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="16"--}}
{{--                            viewBox="0 0 20 16" fill="none">--}}
{{--                            <path fill-rule="evenodd" clip-rule="evenodd"--}}
{{--                                d="M0.958984 1C0.958984 0.516751 1.35074 0.125 1.83398 0.125H12.334C12.8172 0.125 13.209 0.516751 13.209 1C13.209 1.48325 12.8172 1.875 12.334 1.875H1.83398C1.35074 1.875 0.958984 1.48325 0.958984 1Z"--}}
{{--                                fill="white"></path>--}}
{{--                            <path fill-rule="evenodd" clip-rule="evenodd"--}}
{{--                                d="M0.958984 15C0.958984 14.5168 1.35074 14.125 1.83398 14.125H8.83399C9.31723 14.125 9.70899 14.5168 9.70899 15C9.70899 15.4832 9.31723 15.875 8.83399 15.875H1.83398C1.35074 15.875 0.958984 15.4832 0.958984 15Z"--}}
{{--                                fill="white"></path>--}}
{{--                            <path fill-rule="evenodd" clip-rule="evenodd"--}}
{{--                                d="M0.958984 8C0.958984 7.51675 1.35074 7.125 1.83398 7.125H18.1673C18.6506 7.125 19.0423 7.51675 19.0423 8C19.0423 8.48325 18.6506 8.875 18.1673 8.875H1.83398C1.35074 8.875 0.958984 8.48325 0.958984 8Z"--}}
{{--                                fill="white"></path>--}}
{{--                        </svg>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="header-bottom">--}}
{{--        <div class="container">--}}
{{--            <div class="header-menu">--}}
{{--                <div class="header-menu-des">--}}
{{--                    <nav class="header-nav">--}}
{{--                        <div class="user-menu d-lg-none">--}}
{{--                            <div class="user-icon">--}}
{{--                                <img src="{{ $config->image ? $config->image->path : 'https://placehold.co/100x100' }}" alt="{{ $config->web_title }}" loading="lazy">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <ul class="item_big">--}}
{{--                            <li class="nav-item active ">--}}
{{--                                <a class="a-img" href="{{ route('front.home-page') }}" title="Trang chủ">--}}
{{--                                    Trang chủ--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item ">--}}
{{--                                <a class="a-img" href="{{ route('front.about-us') }}" title="Giới thiệu">--}}
{{--                                    Giới thiệu--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item   has-mega">--}}
{{--                                <a class="a-img caret-down" href="javascript:void(0);" title="Sản phẩm">--}}
{{--                                    Sản phẩm--}}
{{--                                </a>--}}
{{--                                <i class="fa fa-caret-down"></i>--}}
{{--                                <div class="mega-content d-lg-block d-none">--}}
{{--                                    <div class="container">--}}
{{--                                        <ul class="level0">--}}
{{--                                            @foreach ($productCategories as $category)--}}
{{--                                            <li class="level1 parent item fix-navs " data-title="{{$category->name}}"--}}
{{--                                                data-link="{{ route('front.show-product-category', ['categorySlug' => $category->slug]) }}">--}}
{{--                                                <a class="hmega" href="{{ route('front.show-product-category', ['categorySlug' => $category->slug]) }}"--}}
{{--                                                    title="{{$category->name}}">{{$category->name}}</a>--}}
{{--                                                @if ($category->childs->count() > 0)--}}
{{--                                                <ul class="level1">--}}
{{--                                                    @foreach ($category->childs as $child)--}}
{{--                                                    <li class="level2 ">--}}
{{--                                                        <a href="{{ route('front.show-product-category', ['categorySlug' => $child->slug]) }}" title="{{$child->name}}">{{$child->name}}</a>--}}
{{--                                                    </li>--}}
{{--                                                    @endforeach--}}
{{--                                                </ul>--}}
{{--                                                @endif--}}
{{--                                            </li>--}}
{{--                                            @endforeach--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <ul class="item_small d-lg-none d-block">--}}
{{--                                    @foreach ($productCategories as $category)--}}
{{--                                    <li>--}}
{{--                                        <a class="caret-down" href="{{ route('front.show-product-category', ['categorySlug' => $category->slug]) }}" title="{{$category->name}}">--}}
{{--                                            {{$category->name}}--}}
{{--                                        </a>--}}
{{--                                        @if ($category->childs->count() > 0)--}}
{{--                                        <i class="fa fa-caret-down"></i>--}}
{{--                                        <ul>--}}
{{--                                            @foreach ($category->childs as $child)--}}
{{--                                            <li>--}}
{{--                                                <a href="{{ route('front.show-product-category', ['categorySlug' => $child->slug]) }}" title="{{$child->name}}" class="a3">{{$child->name}}</a>--}}
{{--                                            </li>--}}
{{--                                            @endforeach--}}
{{--                                        </ul>--}}
{{--                                        @endif--}}
{{--                                    </li>--}}
{{--                                    @endforeach--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            @foreach ($postCategories as $postCategory)--}}
{{--                            <li class="nav-item ">--}}
{{--                                <a class="a-img" href="{{ route('front.list-blog', ['slug' => $postCategory->slug]) }}" title="{{$postCategory->name}}">--}}
{{--                                    {{$postCategory->name}}--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            @endforeach--}}
{{--                            <li class="nav-item ">--}}
{{--                                <a class="a-img" href="{{ route('front.contact-us') }}" title="Liên hệ">--}}
{{--                                    Liên hệ--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </nav>--}}
{{--                    @if ($categorySpecialFlashsale)--}}
{{--                    <div class="flash-scroll">--}}
{{--                        <a href="{{ route('front.show-product-category', ['categorySlug' => $categorySpecialFlashsale->slug]) }}" class="scroll-down">--}}
{{--                            <img width="12"--}}
{{--                                src="/site/images/menu_icon_3.png"--}}
{{--                                alt="{{$categorySpecialFlashsale->name}}"> {{$categorySpecialFlashsale->name}}--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    @endif--}}
{{--                    <div class="control-menu">--}}
{{--                        <a href="#" id="prev">--}}
{{--                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">--}}
{{--                                <path fill="#000"--}}
{{--                                    d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 278.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z" />--}}
{{--                            </svg>--}}
{{--                        </a>--}}
{{--                        <a href="#" id="next">--}}
{{--                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">--}}
{{--                                <path fill="#000"--}}
{{--                                    d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />--}}
{{--                            </svg>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</header>--}}


<header id="header" class="site-header">
    <div class="container">
        <div class="header-row">
            <!-- Hamburger (mobile) -->
            <button class="nav-toggle" aria-label="Mở menu" aria-expanded="false">
                <span></span><span></span><span></span>
            </button>

            <!-- Logo -->
            <a class="logo" href="{{ route('front.home-page') }}">
                <img src="{{ $config->image->path ?? '' }}" alt="Logo"/>
            </a>

            <!-- NAV -->
            <nav class="main-nav" aria-label="Điều hướng chính">
                <ul>
                    <li class="{{ request()->routeIs('front.home-page') ? 'active' : '' }}"><a href="{{ route('front.home-page') }}">TRANG CHỦ</a></li>
                    <li class="{{ request()->routeIs('front.about-us') ? 'active' : '' }}"><a href="{{ route('front.about-us') }}">GIỚI THIỆU</a></li>
                    <li class="has-sub {{ request()->routeIs('front.show-product-category*') ? 'active' : '' }}">
                        <a href="#">DANH MỤC</a>
                        <button class="sub-toggle" aria-label="Mở Danh mục"></button>

                        <ul class="sub">

                            @foreach ($productCategories as $category)
                                @if ($category->childs->count() > 0)
                                    <li class="has-sub">
                                        <a href="{{ route('front.show-product-category', ['categorySlug' => $category->slug]) }}">{{$category->name}}</a>
                                        <button class="sub-toggle" aria-label="Mở {{$category->name}}"></button>
                                        <ul class="sub">
                                            @foreach ($category->childs as $child)
                                                <li><a href="{{ route('front.show-product-category', ['categorySlug' => $child->slug]) }}">{{$child->name}}</a></li>
                                            @endforeach

                                        </ul>
                                    </li>
                                @else
                                    <li><a href="{{ route('front.show-product-category', ['categorySlug' => $category->slug]) }}">{{$category->name}}</a></li>
                                @endif
                            @endforeach

                        </ul>
                    </li>

                    @foreach ($postCategories as $postCategory)
                        <li class="{{ request()->routeIs('front.list-blog*') ? 'active' : '' }}"><a href="{{ route('front.list-blog', ['slug' => $postCategory->slug]) }}">
                                {{ mb_strtoupper($postCategory->name, 'UTF-8') }}
                            </a>
                        </li>
                    @endforeach
                    <li class="{{ request()->routeIs('front.contact-us') ? 'active' : '' }}"><a href="{{ route('front.contact-us') }}">LIÊN HỆ</a></li>
                </ul>
            </nav>

            <!-- Actions (right) -->
            <div class="header-actions">
                <form class="search" action="{{ route('front.search') }}" method="get" role="search">
                    <button type="submit" aria-label="Tìm">
                        <svg viewBox="0 0 24 24" width="20" height="20" aria-hidden="true">
                            <circle cx="11" cy="11" r="7" fill="none" stroke="currentColor" stroke-width="2"/>
                            <path d="M20 20l-3.5-3.5" fill="none" stroke="currentColor" stroke-width="2"/>
                        </svg>
                    </button>
                    <input type="search" name="keyword" placeholder="Tìm kiếm..." aria-label="Tìm kiếm" required>
                </form>

                <a class="action" href="{{ route('front.contact-us') }}" title="Cửa hàng">
                    <svg viewBox="0 0 24 24" width="22" height="22" aria-hidden="true">
                        <path d="M3 10h18v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-9z" fill="none" stroke="currentColor"
                              stroke-width="2"/>
                        <path d="M4 10l2-6h12l2 6" fill="none" stroke="currentColor" stroke-width="2"/>
                    </svg>
                    <span>Cửa hàng</span>
                </a>


                <!-- Đặt trong .header-actions -->
                <div class="cart-wrap" id="header-cart">
                    <a class="action cart" href="/thanh-toan.html" title="Giỏ hàng">
                        <div class="header-cart block-cart">
                            <svg viewBox="0 0 24 24" width="22" height="22" aria-hidden="true">
                                <path d="M6 6h15l-2 9H8L6 3H3" fill="none" stroke="currentColor" stroke-width="2"/>
                                <circle cx="9" cy="20" r="1.8"/><circle cx="18" cy="20" r="1.8"/>
                            </svg>
                        </div>
                        <span>Giỏ hàng</span>
                        <em class="badge"><% cart.count %></em>
                    </a>

                    <!-- PANEL DROPDOWN -->
                    <div class="top-cart-content">
                        <div class="CartHeaderContainer">
                            <form class="cart ajaxcart cartheader" ng-if="cart.count > 0">
                                <div class="ajaxcart__inner ajaxcart__inner--has-fixed-footer cart_body items">
                                    <div class="ajaxcart__row" ng-repeat="item in cart.items">
                                        <div class="ajaxcart__product cart_product">
                                            <a ng-href="/san-pham/<% item.attributes.slug %>.html" class="ajaxcart__product-image cart_image" title="<% item.name %>">
                                                <img width="80" height="80" ng-src="<% item.attributes.image %>" alt="<% item.name %>">
                                            </a>
                                            <div class="grid__item cart_info">
                                                <div class="ajaxcart__product-name-wrapper cart_name">
                                                    <a ng-href="/san-pham/<% item.attributes.slug %>.html" class="ajaxcart__product-name h4"><% item.name %></a>
                                                    <div class="cart_attribute">
                                                        <div ng-repeat="attribute in item.attributes.attributes" style="line-height:1;">
                                                            <span class="cart_attribute_name" style="margin-left:8px;font-weight:600;font-size:14px;"><% attribute.name %> :</span>
                                                            <span class="cart_attribute_value" style="font-size:14px;"><% attribute.value %></span>
                                                        </div>
                                                    </div>
                                                    <a title="Xóa" class="cart__btn-remove remove-item-cart ajaxifyCart--remove" href="javascript:;" ng-click='removeItem(item.id)'></a>
                                                </div>
                                                <div class="grid">
                                                    <div class="grid__item one-half cart_select cart_item_name">
                                                        <div class="ajaxcart__qty input-group-btn">
                                                            <button type="button" class="ajaxcart__qty-adjust ajaxcart__qty--minus items-count" ng-click="decrementQuantity(item); changeQty(item.quantity, item.id)">-</button>
                                                            <input type="text" class="ajaxcart__qty-num number-sidebar" maxlength="3" ng-model="item.quantity" ng-change="changeQty(item.quantity, item.id)">
                                                            <button type="button" class="ajaxcart__qty-adjust ajaxcart__qty--plus items-count" ng-click="incrementQuantity(item); changeQty(item.quantity, item.id)">+</button>
                                                        </div>
                                                    </div>
                                                    <div class="grid__item one-half text-right cart_prices">
                                                        <span class="cart-price"><% item.price | number %>₫</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="ajaxcart__footer ajaxcart__footer--fixed cart-footer">
                                    <div class="ajaxcart__subtotal">
                                        <div class="cart__subtotal">
                                            <div class="cart__col-6">Tổng tiền:</div>
                                            <div class="text-right cart__totle"><span class="total-price"><% cart.total | number %>₫</span></div>
                                        </div>
                                    </div>
                                    <div class="cart__btn-proceed-checkout-dt">
                                        <button onclick="location.href='{{ route('cart.checkout') }}'" type="button" class="button btn btn-default cart__btn-proceed-checkout">Xem giỏ hàng</button>
                                    </div>
                                </div>
                            </form>

                            <div class="cart--empty-message" ng-if="!cart.items || cart.count == 0">
                                <img width="32" height="32" src="/site/images/no-cart.png">
                                <p>Không có sản phẩm nào trong giỏ hàng của bạn</p>
                            </div>
                        </div>
                    </div>
                </div>


{{--                <a class="action cart" href="/cart" title="Giỏ hàng">--}}
{{--                    <div class="header-cart block-cart">--}}
{{--                        <svg viewBox="0 0 24 24" width="22" height="22" aria-hidden="true"  >--}}
{{--                            <path d="M6 6h15l-2 9H8L6 3H3" fill="none" stroke="currentColor" stroke-width="2"/>--}}
{{--                            <circle cx="9" cy="20" r="1.8"/>--}}
{{--                            <circle cx="18" cy="20" r="1.8"/>--}}
{{--                        </svg>--}}


{{--                        <div class="top-cart-content">--}}
{{--                            <div class="CartHeaderContainer">--}}
{{--                                <form class="cart ajaxcart cartheader" ng-if="cart.count > 0">--}}
{{--                                    <div class="ajaxcart__inner ajaxcart__inner--has-fixed-footer cart_body items">--}}
{{--                                        <div class="ajaxcart__row" ng-repeat="item in cart.items">--}}
{{--                                            <div class="ajaxcart__product cart_product" data-line="1">--}}
{{--                                                <a ng-href="/san-pham/<% item.attributes.slug %>.html" class="ajaxcart__product-image cart_image" title="<% item.name %>">--}}
{{--                                                    <img width="80" height="80" ng-src="<% item.attributes.image %>" alt="<% item.name %>">--}}
{{--                                                </a>--}}
{{--                                                <div class="grid__item cart_info">--}}
{{--                                                    <div class="ajaxcart__product-name-wrapper cart_name">--}}
{{--                                                        <a ng-href="/san-pham/<% item.attributes.slug %>.html" class="ajaxcart__product-name h4" title="<% item.name %>"><% item.name %></a>--}}
{{--                                                        <div class="cart_attribute">--}}
{{--                                                            <div ng-repeat="attribute in item.attributes.attributes" style="line-height: 1;">--}}
{{--                                                                <span class="cart_attribute_name" style="margin-left: 8px; font-weight: 600; font-size: 14px;"><% attribute.name %> :</span>--}}
{{--                                                                <span class="cart_attribute_value" style="font-size: 14px;"><% attribute.value %></span>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <a title="Xóa" class="cart__btn-remove remove-item-cart ajaxifyCart--remove" href="javascript:;" data-line="1" ng-click='removeItem(item.id)'></a>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="grid">--}}
{{--                                                        <div class="grid__item one-half cart_select cart_item_name">--}}
{{--                                                            <div class="ajaxcart__qty input-group-btn">--}}
{{--                                                                <button type="button" class="ajaxcart__qty-adjust ajaxcart__qty--minus items-count" data-id="" data-qty="1" data-line="1" aria-label="-" ng-click="decrementQuantity(item); changeQty(item.quantity, item.id)">--}}
{{--                                                                    ---}}
{{--                                                                </button>--}}
{{--                                                                <input type="text" name="" class="ajaxcart__qty-num number-sidebar" maxlength="3" ng-model="item.quantity" value="<%item.quantity%>" min="0" data-id="" data-line="1" aria-label="quantity" pattern="[0-9]*" ng-change="changeQty(item.quantity, item.id)">--}}
{{--                                                                <button type="button" class="ajaxcart__qty-adjust ajaxcart__qty--plus items-count" data-id="" data-line="1" data-qty="3" aria-label="+" ng-click="incrementQuantity(item); changeQty(item.quantity, item.id)">--}}
{{--                                                                    +--}}
{{--                                                                </button>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="grid__item one-half text-right cart_prices">--}}
{{--                                                            <span class="cart-price"><% item.price | number %>₫</span>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="ajaxcart__footer ajaxcart__footer--fixed cart-footer" ng-if="cart.count > 0">--}}
{{--                                        <div class="ajaxcart__subtotal">--}}
{{--                                            <div class="cart__subtotal">--}}
{{--                                                <div class="cart__col-6">Tổng tiền:</div>--}}
{{--                                                <div class="text-right cart__totle"><span class="total-price"><% cart.total | number %>₫</span></div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="cart__btn-proceed-checkout-dt ">--}}
{{--                                            <button onclick="location.href='{{ route('cart.checkout') }}'" type="button" class="button btn btn-default cart__btn-proceed-checkout" id="btn-proceed-checkout" title="Xem giỏ hàng">Xem giỏ hàng</button>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </form>--}}
{{--                                <div class="cart--empty-message" ng-if="!cart.items || cart.count == 0">--}}
{{--                                    <img width="32" height="32" src="/site/images/no-cart.png?1677998172667">--}}
{{--                                    <p>Không có sản phẩm nào trong giỏ hàng của bạn</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}


{{--                    </div>--}}

{{--                    <span>Giỏ hàng</span>--}}
{{--                    <em class="badge"><% cart.count %></em>--}}

{{--                </a>--}}





{{--                    <li class="header-cart block-cart">--}}
{{--                        <a href="/cart" class="icon" aria-label="Giỏ hàng" title="Giỏ hàng">--}}
{{--                            <img src="/site/images/shopping-cart.png"--}}
{{--                                 alt="Lofi Decor" width="24" height="24">--}}
{{--                            <span class="title">Giỏ hàng</span>--}}
{{--                            <span class="count_item_pr count-item" ng-if="cart.count > 0"><% cart.count %></span>--}}
{{--                        </a>--}}
{{--                        <div class="top-cart-content">--}}
{{--                            <div class="CartHeaderContainer">--}}
{{--                                <form class="cart ajaxcart cartheader" ng-if="cart.count > 0">--}}
{{--                                    <div class="ajaxcart__inner ajaxcart__inner--has-fixed-footer cart_body items">--}}
{{--                                        <div class="ajaxcart__row" ng-repeat="item in cart.items">--}}
{{--                                            <div class="ajaxcart__product cart_product" data-line="1">--}}
{{--                                                <a ng-href="/san-pham/<% item.attributes.slug %>.html" class="ajaxcart__product-image cart_image" title="<% item.name %>">--}}
{{--                                                    <img width="80" height="80" ng-src="<% item.attributes.image %>" alt="<% item.name %>">--}}
{{--                                                </a>--}}
{{--                                                <div class="grid__item cart_info">--}}
{{--                                                    <div class="ajaxcart__product-name-wrapper cart_name">--}}
{{--                                                        <a ng-href="/san-pham/<% item.attributes.slug %>.html" class="ajaxcart__product-name h4" title="<% item.name %>"><% item.name %></a>--}}
{{--                                                        <div class="cart_attribute">--}}
{{--                                                            <div ng-repeat="attribute in item.attributes.attributes" style="line-height: 1;">--}}
{{--                                                                <span class="cart_attribute_name" style="margin-left: 8px; font-weight: 600; font-size: 14px;"><% attribute.name %> :</span>--}}
{{--                                                                <span class="cart_attribute_value" style="font-size: 14px;"><% attribute.value %></span>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <a title="Xóa" class="cart__btn-remove remove-item-cart ajaxifyCart--remove" href="javascript:;" data-line="1" ng-click='removeItem(item.id)'></a>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="grid">--}}
{{--                                                        <div class="grid__item one-half cart_select cart_item_name">--}}
{{--                                                            <div class="ajaxcart__qty input-group-btn">--}}
{{--                                                                <button type="button" class="ajaxcart__qty-adjust ajaxcart__qty--minus items-count" data-id="" data-qty="1" data-line="1" aria-label="-" ng-click="decrementQuantity(item); changeQty(item.quantity, item.id)">--}}
{{--                                                                    ---}}
{{--                                                                </button>--}}
{{--                                                                <input type="text" name="" class="ajaxcart__qty-num number-sidebar" maxlength="3" ng-model="item.quantity" value="<%item.quantity%>" min="0" data-id="" data-line="1" aria-label="quantity" pattern="[0-9]*" ng-change="changeQty(item.quantity, item.id)">--}}
{{--                                                                <button type="button" class="ajaxcart__qty-adjust ajaxcart__qty--plus items-count" data-id="" data-line="1" data-qty="3" aria-label="+" ng-click="incrementQuantity(item); changeQty(item.quantity, item.id)">--}}
{{--                                                                    +--}}
{{--                                                                </button>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="grid__item one-half text-right cart_prices">--}}
{{--                                                            <span class="cart-price"><% item.price | number %>₫</span>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="ajaxcart__footer ajaxcart__footer--fixed cart-footer" ng-if="cart.count > 0">--}}
{{--                                        <div class="ajaxcart__subtotal">--}}
{{--                                            <div class="cart__subtotal">--}}
{{--                                                <div class="cart__col-6">Tổng tiền:</div>--}}
{{--                                                <div class="text-right cart__totle"><span class="total-price"><% cart.total | number %>₫</span></div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="cart__btn-proceed-checkout-dt ">--}}
{{--                                            <button onclick="location.href='{{ route('cart.checkout') }}'" type="button" class="button btn btn-default cart__btn-proceed-checkout" id="btn-proceed-checkout" title="Xem giỏ hàng">Xem giỏ hàng</button>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </form>--}}
{{--                                <div class="cart--empty-message" ng-if="!cart.items || cart.count == 0">--}}
{{--                                    <img width="32" height="32" src="/site/images/no-cart.png?1677998172667">--}}
{{--                                    <p>Không có sản phẩm nào trong giỏ hàng của bạn</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </li>--}}






























                <!-- Search toggle (mobile) -->
                <button class="search-toggle" aria-label="Mở tìm kiếm" aria-expanded="false">
                    <svg viewBox="0 0 24 24" width="22" height="22" aria-hidden="true">
                        <circle cx="11" cy="11" r="7" fill="none" stroke="currentColor" stroke-width="2"/>
                        <path d="M20 20l-3.5-3.5" fill="none" stroke="currentColor" stroke-width="2"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile search dropdown -->
    <div class="mobile-search">
        <form action="{{ route('front.search') }}" method="get" role="search">
            <input type="search" name="keyword" placeholder="Tìm kiếm sản phẩm..." aria-label="Tìm kiếm" required>
            <button type="submit" aria-label="Tìm">Tìm</button>
        </form>
    </div>
</header>


<style>
    :root {
        --brand: #F13A3A;
        --text: #1f2937;
        --muted: #6b7280;
        --bg: #fff;
        /*--container: 1200px;*/
    }
    html, body { overflow-x: clip; width: 100%; }

    /* ảnh/iframe/video không vượt khung */
    img, video, iframe { max-width: 100%; height: auto; }
    /** {*/
    /*    box-sizing: border-box*/
    /*}*/

    /* ===== HEADER (scoped) ===== */
    #header.site-header {
        background: var(--bg);
        box-shadow: 0 1px 0 rgba(0, 0, 0, .06);
    }

    #header .container { /*max-width:var(--container);*/
        margin: 0 auto;
        padding: 0 16px;
    }

    #header .header-row {
        display: flex;
        align-items: center;
        gap: 50px;
        min-height: 74px;
    }

    /* Logo */
    #header .logo {
        display: flex;
        align-items: center;
        gap: 10px;
        text-decoration: none;
    }

    #header .logo img {
        height: 46px;
        display: block;
    }

    #header .logo .fallback {
        font-weight: 800;
        color: var(--text);
        letter-spacing: .5px;
    }

    /* Nav (desktop base) */
    #header .main-nav ul {
        display: flex;
        gap: 26px;
        list-style: none;
        margin: 0;
        padding: 0;
    }

    #header .main-nav a {
        display: block;
        padding: 10px 0;
        font-size: 14px;
        font-weight: 700;
        letter-spacing: .02em;
        color: var(--text);
        text-decoration: none;
    }

    #header .main-nav li.active > a {
        color: var(--brand);
        position: relative;
    }

    #header .main-nav li.active > a:after {
        content: "";
        position: absolute;
        left: 0;
        right: 0;
        bottom: -8px;
        height: 2px;
        background: var(--brand);
        border-radius: 1px;
    }

    #header .has-sub {
        position: relative;
    }

    #header .has-sub > .sub {
        position: absolute;
        top: 100%;
        left: 0;
        min-width: 220px;
        background: #fff;
        border: 1px solid #e5e7eb;
        border-radius: 10px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, .08);
        padding: 8px 0;
        display: none;
        z-index: 20;
    }

    #header .has-sub:hover > .sub {
        display: block;
    }

    #header .has-sub .sub a {
        padding: 10px 14px;
        white-space: nowrap;
        font-weight: 600;
        color: #374151;
    }

    #header .has-sub .sub a:hover {
        background: #f3f4f6;
        color: var(--brand);
    }

    #header .has-sub > .sub-toggle {
        display: none;
    }

    /* Actions (right) */
    #header .header-actions {
        margin-left: auto;
        display: flex;
        align-items: center;
        gap: 18px;
    }

    #header .header-actions .action {
        position: relative;
        display: flex;
        align-items: center;
        gap: 8px;
        color: var(--muted);
        text-decoration: none;
        font-size: 13px;
    }

    #header .header-actions .action:hover {
        color: var(--brand);
    }

    #header .header-actions .badge {
        position: absolute;
        top: -4px;
        right: -8px;
        background: var(--brand);
        color: #fff;
        font-size: 11px;
        height: 18px;
        min-width: 18px;
        padding: 0 5px;
        border-radius: 9px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* Search (desktop) */
    #header .search {
        display: flex;
        align-items: center;
        gap: 8px;
        border: 1px solid #e5e7eb;
        border-radius: 999px;
        padding: 6px 10px;
        background: #fff;
    }

    #header .search input {
        border: none;
        outline: none;
        font-size: 14px;
    }

    #header .search button {
        border: none;
        background: transparent;
        padding: 0;
        cursor: pointer;
        color: #6b7280;
    }

    #header .search button:hover {
        color: var(--brand);
    }

    /* Toggles */
    #header .nav-toggle, #header .search-toggle {
        display: none;
        border: none;
        background: transparent;
        padding: 8px;
        border-radius: 10px;
        cursor: pointer;
    }

    #header .nav-toggle span {
        display: block;
        width: 22px;
        height: 2px;
        background: #111;
        margin: 4px 0;
        border-radius: 2px;
    }

    /* Ngắt mọi float cũ trong header (tránh xung đột theme khác) */
    #header .main-nav, #header .header-actions, #header .search {
        float: none !important;
    }

    /* ===== Desktop ===== */
    @media (min-width: 993px) {
        /* Nav inline, không off-canvas */
        #header .main-nav {
            position: static;
            transform: none;
            width: auto;
            box-shadow: none;
            padding: 0;
            display: block;
        }

        #header .nav-toggle {
            display: none;
        }

        #header .search {
            display: flex;
        }

        #header .search-toggle {
            display: none;
        }

        /* Icon trên, nhãn dưới */
        #header .header-actions {
            gap: 24px;
        }

        #header .header-actions .action {
            flex-direction: column;
            align-items: center;
            gap: 6px;
            min-width: 68px;
        }

        #header .header-actions .action svg {
            display: block;
        }

        #header .header-actions .action span {
            display: block;
            font-size: 12px;
            line-height: 1.1;
            white-space: nowrap;
            color: var(--muted);
        }

        #header .header-actions .action:hover span {
            color: var(--brand);
        }

        /* Ô tìm kiếm nhỏ lại */
        #header .search input {
            width: clamp(160px, 24vw, 220px);
        }
    }

    /* ===== Mobile / Tablet ===== */
    @media (max-width: 992px) {
        #header .main-nav {
            position: fixed;
            inset: 0 auto 0 0;
            width: 78%;
            max-width: 340px;
            transform: translateX(-100%);
            transition: transform .3s ease;
            background: #fff;
            box-shadow: 20px 0 40px rgba(0, 0, 0, .1);
            padding: 84px 18px 24px;
            overflow: auto;
            z-index: 100;
        }

        #header .main-nav ul {
            flex-direction: column;
            gap: 6px;
        }

        #header .main-nav a {
            padding: 12px 8px;
            font-size: 16px;
        }

        #header .has-sub > .sub-toggle {
            display: inline-block;
            width: 28px;
            height: 28px;
            margin-left: 6px;
            border: none;
            background: transparent;
            position: relative;
        }

        #header .has-sub > .sub-toggle:after {
            content: "▾";
            font-size: 16px;
            color: #6b7280;
        }

        #header .has-sub > .sub {
            position: static;
            display: none;
            border: none;
            box-shadow: none;
            padding: 0 0 6px 10px;
        }

        #header .has-sub.open > .sub {
            display: block;
        }

        #header .has-sub:hover > .sub {
            display: none;
        }

        /* tắt hover trên mobile */
        #header .nav-toggle {
            display: block;
        }

        #header .search {
            display: none;
        }

        /* ẩn ô tìm kiếm lớn */
        #header .search-toggle {
            display: block;
        }

        /* icon 🔍 */
        #header .header-actions {
            gap: 12px;
        }

        #header .header-actions .action span {
            display: none;
        }

        /* chỉ icon */
        #header .logo img {
            height: 46px;
        }

        /* Off-canvas & overlay */
        body.menu-open {
            overflow: hidden;
        }

        body.menu-open #header .main-nav {
            transform: translateX(0);
        }

        body.menu-open::before {
            content: "";
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, .4);
            z-index: 90;
        }

        /* Mobile search dropdown */
        #header .mobile-search {
            display: none;
            border-top: 1px solid #e5e7eb;
            background: #fff;
        }

        body.search-open #header .mobile-search {
            display: block;
        }

        #header .mobile-search form {
            max-width: var(--container);
            margin: 0 auto;
            padding: 10px 16px;
            display: flex;
            gap: 8px;
        }

        #header .mobile-search input {
            flex: 1;
            padding: 10px 12px;
            border-radius: 10px;
            border: 1px solid #d1d5db;
            font-size: 15px;
        }

        #header .mobile-search button {
            padding: 10px 14px;
            border-radius: 10px;
            border: 1px solid var(--brand);
            background: var(--brand);
            color: #fff;
            font-weight: 700;
        }
    }

    /* A11y focus */
    #header a:focus-visible, #header button:focus-visible, #header input:focus-visible {
        outline: 3px solid rgba(13, 110, 253, .35);
        outline-offset: 2px;
    }


    /* Kill-switch: luôn ẩn mobile-search mặc định */
    #header .mobile-search {
        display: none !important;
    }

    /* Chỉ hiển thị trên MOBILE khi có body.search-open */
    @media (max-width: 992px) {
        body.search-open #header .mobile-search {
            display: block !important;
        }
    }

    /* Phòng ngừa: tuyệt đối ẩn trên desktop dù body đang search-open */
    @media (min-width: 993px) {
        body.search-open #header .mobile-search {
            display: none !important;
        }
    }




    /* 1) Chỉ flex cho UL cấp 1 của main-nav */
    #header .main-nav > ul{
        display:flex; gap:26px; list-style:none; margin:0; padding:0;
    }

    /* 2) Mặc định tất cả UL con trong nav KHÔNG flex */
    #header .main-nav ul ul{ display:block; }

    /* 3) Reset mạnh cho menu 2 cấp (.tx-cat) để chống đè CSS cũ */
    #header .tx-cat__panel ul,
    #header .tx-cat__l1,
    #header .tx-cat__l2{
        display:block !important;
        gap:0 !important;
    }

    /* 4) Giữ layout cột trái dọc, cột phải nổi bên phải – tránh thanh kéo ngang */
    #header .tx-cat__l1{
        width:260px; max-height:70vh;
        overflow-y:auto; overflow-x:hidden;
    }
    #header .tx-cat__l2{
        left:260px; min-width:300px; max-height:70vh;
        overflow-y:auto; overflow-x:hidden;
    }

    /* 5) Phòng ngừa: tắt mọi flex trên item cấp 1 nếu theme khác gán */
    #header .tx-cat__l1 > .tx-cat__l1item{ display:block !important; }


</style>

<style>
    /* Chỉ áp flex cho UL cấp 1 của nav, tránh ảnh hưởng UL con */
    #header .main-nav > ul{ display:flex; gap:26px; list-style:none; margin:0; padding:0; }
    #header .main-nav ul ul{ display:block; } /* tất cả UL con về block */

    /* Base cho mọi cấp */
    #header .main-nav .has-sub{ position:relative; }
    #header .main-nav .sub{
        list-style:none; margin:0; padding:8px 0;
        background:#fff; border:1px solid #e5e7eb; border-radius:10px;
        box-shadow:0 10px 30px rgba(0,0,0,.08);
    }

    /* Link trong dropdown */
    #header .main-nav .sub a{
        display:block; padding:10px 14px; color:#374151; text-decoration:none; font-weight:600; white-space:nowrap;
    }
    #header .main-nav .sub a:hover{ background:#f3f4f6; color:var(--brand); }

    /* ===== DESKTOP (hover mở) ===== */
    @media (min-width:993px){
        /* cấp 1 dropdown dưới "Danh mục" */
        #header .main-nav > ul > .has-sub > .sub{
            position:absolute; top:100%; left:0; min-width:240px; display:none;
        }
        #header .main-nav > ul > .has-sub:hover > .sub{ display:block; }

        /* các cấp sâu hơn bay sang phải */
        #header .main-nav .sub .has-sub > .sub{
            position:absolute; top:0; left:100%; margin-left:2px; min-width:240px; display:none;
        }
        #header .main-nav .sub .has-sub:hover > .sub{ display:block; }

        /* mũi tên chỉ có ở desktop (CSS) */
        #header .main-nav .sub .has-sub > a::after{
            content:"▸"; margin-left:8px; font-size:12px; opacity:.6;
        }
        #header .main-nav .has-sub > .sub-toggle{ display:none; } /* ẩn nút accordion */
    }

    /* ===== MOBILE/TABLET (accordion) ===== */
    @media (max-width:992px){
        /* vị trí và hiển thị dạng accordion */
        #header .main-nav .has-sub > .sub{
            position:static; display:none; border:none; border-radius:0; box-shadow:none; padding:0 0 6px 12px;
        }
        #header .main-nav .has-sub.open > .sub{ display:block; }

        #header .main-nav .has-sub > a{
            display:flex; align-items:center; justify-content:space-between;
            padding:12px 8px; font-weight:800;
        }
        #header .main-nav .has-sub > .sub-toggle{
            display:inline-block; width:28px; height:28px; border:none; background:transparent; margin-left:6px;
        }
        #header .main-nav .has-sub > .sub-toggle::after{ content:"▾"; color:#6b7280; }

        /* các cấp sâu hơn: lùi vào một chút */
        #header .main-nav .sub .has-sub > a{ font-weight:600; padding:10px 6px; }
        #header .main-nav .sub .has-sub > .sub{ padding-left:12px; }
    }

</style>


<style>
    /* --- MOBILE/TABLET: accordion, tap area lớn --- */
    @media (max-width: 992px){
        /* Hàng mục có con */
        #header .main-nav .has-sub{ position: relative; }

        /* Dòng chữ: chừa chỗ cho nút ở bên phải */
        #header .main-nav .has-sub > a{
            display:flex; align-items:center; justify-content:space-between;
            padding:12px 44px 12px 12px;         /* <-- chừa 44px bên phải cho nút */
            font-weight:800;
        }

        /* Nút mở/đóng (tap 32px) */
        #header .main-nav .has-sub > .sub-toggle{
            display:block !important;
            position:absolute; right:6px; top:50%;
            transform:translateY(-50%) rotate(0deg);
            width:32px; height:32px; border:none; background:transparent;
            cursor:pointer;
        }
        #header .main-nav .has-sub > .sub-toggle::after{
            content:"▾"; font-size:16px; color:#6b7280; line-height:32px; display:block; text-align:center;
        }
        /* Khi đang mở: mũi tên quay lên */
        #header .main-nav .has-sub.open > .sub-toggle{ transform:translateY(-50%) rotate(180deg); }

        /* Submenu hiển thị kiểu accordion */
        #header .main-nav .has-sub > .sub{
            position:static !important; display:none; border:none; border-radius:0; box-shadow:none;
            padding:4px 0 8px 12px;               /* thụt vào một chút */
        }
        #header .main-nav .has-sub.open > .sub{ display:block; }

        /* Các cấp sâu hơn: thụt vào dần */
        #header .main-nav .sub .has-sub > a{ padding:10px 44px 10px 10px; font-weight:600; }
        #header .main-nav .sub .has-sub > .sub{ padding-left:12px; }
    }

</style>

{{--// 123 cart--}}
<style>
    /* vị trí dropdown dưới icon giỏ */
    #header .cart-wrap{ position:relative; }
    #header .cart-wrap .top-cart-content{
        position:absolute; right:0; top:calc(100% + 10px);
        width:clamp(300px, 30vw, 420px);
        background:#fff; border:1px solid #e5e7eb; border-radius:12px;
        box-shadow:0 12px 30px rgba(0,0,0,.12);
        padding:12px; z-index:1000; display:none;
    }

    /* hiển thị khi hover/focus (desktop + keyboard) */
    @media (hover:hover) and (pointer:fine){
        #header .cart-wrap:hover .top-cart-content,
        #header .cart-wrap:focus-within .top-cart-content{ display:block; }
    }

    /* danh sách trong panel giới hạn chiều cao */
    #header .cart-wrap .ajaxcart__inner{ max-height:340px; overflow:auto; }

    /* badge vị trí đẹp */
    #header .header-actions .action.cart .badge{ top:-6px; right:-10px; }



    /* Wrapper làm mốc */
    #header .cart-wrap{ position:relative; }

    /* Panel dropdown (ẩn mặc định) */
    #header .cart-wrap .top-cart-content{
        position:absolute; right:0; top:100%;   /* sát mép dưới nút */
        width:clamp(300px, 30vw, 420px);
        background:#fff; border:1px solid #e5e7eb; border-radius:12px;
        box-shadow:0 12px 30px rgba(0,0,0,.12);
        padding:12px; z-index:1000;

        /* Ẩn theo opacity/visibility để không giật */
        opacity:0; visibility:hidden; pointer-events:none;
        transform: translateY(12px);            /* khoảng cách nhìn thấy */
        transition: opacity .18s ease, transform .18s ease, visibility 0s linear .18s;
    }

    /* Cầu hover để không bị “lọt chuột” khi chuyển từ nút xuống panel */
    #header .cart-wrap .top-cart-content::before{
        content:""; position:absolute; left:0; right:0; top:-12px; height:12px;
    }

    /* Hiển thị khi hover hoặc focus trong (hỗ trợ bàn phím) */
    @media (hover:hover){
        #header .cart-wrap:hover .top-cart-content,
        #header .cart-wrap:focus-within .top-cart-content{
            opacity:1; visibility:visible; pointer-events:auto;
            transform: translateY(12px);
            transition-delay: 0s;
        }
    }

    /* Giới hạn chiều cao danh sách bên trong */
    #header .cart-wrap .ajaxcart__inner{ max-height:340px; overflow:auto; }

    /* Badge vị trí đẹp (tùy dự án) */
    #header .header-actions .action.cart .badge{ top:-6px; right:-10px; }

</style>



<script>
    const body = document.body;
    const navToggle = document.querySelector('.nav-toggle');
    const mainNav = document.querySelector('.main-nav');
    const searchToggle = document.querySelector('.search-toggle');
    const subToggles = document.querySelectorAll('.has-sub > .sub-toggle');

    navToggle?.addEventListener('click', () => {
        const open = body.classList.toggle('menu-open');
        navToggle.setAttribute('aria-expanded', open);
        if (open) body.classList.remove('search-open');
    });

    searchToggle?.addEventListener('click', () => {
        const open = body.classList.toggle('search-open');
        searchToggle.setAttribute('aria-expanded', open);
        if (open) body.classList.remove('menu-open');
    });

    // Đóng menu khi click bên ngoài
    document.addEventListener('click', (e) => {
        const clickOutsideMenu = !mainNav.contains(e.target) && !navToggle.contains(e.target);
        if (body.classList.contains('menu-open') && clickOutsideMenu) {
            body.classList.remove('menu-open');
            navToggle.setAttribute('aria-expanded', 'false');
        }
    });

    // Accordion submenu (mobile)
    subToggles.forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            btn.closest('.has-sub').classList.toggle('open');
        });
    });

    // ESC để đóng
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            body.classList.remove('menu-open', 'search-open');
            navToggle?.setAttribute('aria-expanded', 'false');
            searchToggle?.setAttribute('aria-expanded', 'false');
        }
    });
</script>

<script>
    // Accordion cho tất cả cấp trên mobile/tablet
    document.querySelectorAll('#header .main-nav .has-sub > .sub-toggle').forEach(btn=>{
        btn.addEventListener('click', e=>{
            e.preventDefault();
            const item = btn.closest('.has-sub');

            // Đóng các anh em cùng cấp để gọn (tuỳ thích)
            item.parentElement.querySelectorAll(':scope > .has-sub.open').forEach(sib=>{
                if(sib !== item) sib.classList.remove('open');
            });

            item.classList.toggle('open');
        });
    });

    // Khi phóng to >992px, xóa trạng thái .open để không kẹt
    addEventListener('resize', ()=>{ if(innerWidth > 992){
        document.querySelectorAll('#header .main-nav .has-sub.open').forEach(x=>x.classList.remove('open'));
    }});
</script>

<script>
    (function(){
        const isMobile = () => matchMedia('(max-width: 992px)').matches;

        // 1) Click vào nút mũi tên: mở/đóng mục hiện tại
        document.querySelectorAll('#header .main-nav .has-sub > .sub-toggle').forEach(btn=>{
            btn.addEventListener('click', (e)=>{
                e.preventDefault();
                const li = btn.closest('.has-sub');
                // Đóng anh em cùng cấp cho gọn
                li.parentElement.querySelectorAll(':scope > .has-sub.open').forEach(sib=>{
                    if(sib !== li) sib.classList.remove('open');
                });
                li.classList.toggle('open');
            });
        });

        // 2) Cho phép bấm vào chính <a> để mở submenu trên mobile
        document.querySelectorAll('#header .main-nav .has-sub > a').forEach(a=>{
            a.addEventListener('click', (e)=>{
                if(!isMobile()) return;                 // desktop: để hover xử lý
                const li = a.closest('.has-sub');
                const href = a.getAttribute('href') || '';
                // Lần 1 mở, lần 2 mới đi link (tránh điều hướng ngay)
                if(!li.classList.contains('open')){
                    e.preventDefault();
                    // Đóng anh em
                    li.parentElement.querySelectorAll(':scope > .has-sub.open').forEach(sib=>{
                        if(sib !== li) sib.classList.remove('open');
                    });
                    li.classList.add('open');
                }else{
                    // Nếu href là "#" thì không điều hướng
                    if(href === '#'){ e.preventDefault(); li.classList.remove('open'); }
                }
            });
        });

        // 3) Khi resize lên desktop, bỏ trạng thái 'open' cho sạch
        addEventListener('resize', ()=>{
            if(!isMobile()){
                document.querySelectorAll('#header .main-nav .has-sub.open').forEach(x=>x.classList.remove('open'));
            }
        });
    })();
</script>

<script>
    (function(){
        const cartWrap = document.getElementById('header-cart');
        if(!cartWrap) return;
        const panel = cartWrap.querySelector('.top-cart-content');
        const link  = cartWrap.querySelector('a.action.cart');
        const isMobile = () => matchMedia('(max-width: 992px)').matches;

        // click lần 1 trên mobile: mở panel, lần 2 mới đi link
        link.addEventListener('click', (e)=>{
            if(!isMobile()) return;
            if(!cartWrap.classList.contains('open')){
                e.preventDefault();
                cartWrap.classList.add('open');
                panel.style.display = 'block';
            }
        });
        // click ngoài để đóng
        document.addEventListener('click', (e)=>{
            if(!isMobile()) return;
            if(!cartWrap.contains(e.target)){
                cartWrap.classList.remove('open');
                panel.style.display = 'none';
            }
        });
        // không đóng khi thao tác trong panel
        panel.addEventListener('click', e=> e.stopPropagation());

        // dọn trạng thái khi đổi breakpoint
        addEventListener('resize', ()=>{
            if(!isMobile()){
                cartWrap.classList.remove('open');
                panel.style.display = '';
            }
        });
    })();
</script>


