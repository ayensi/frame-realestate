<nav class="navbar">
    <div class="container">
        <div class="upper-side">
            <div class="logo"><a href="">
                    <img src="{{ asset('src/logo.png') }}" alt="">
            </div>

            <div style="display: flex;" class="social-media">
               <!-- <button class="framesummerbuton">FRAME LONDON </button>-->
                <p style="font-size: 15px;" class="followus">{{__('follow-us')}}</p>
                <ul class="sosyalmedyaclass" style="display: flex;list-style: none;">

                    <li> <a href="" target="_blank" rel="noreferrer"> <i
                                class="fab fa-facebook-f facebooksosyal sosyal"
                                style="color: white; border-radius: 100%;"></i> </a>
                    </li>

                    <li> <a href="" target="_blank" rel="noreferrer"> <i
                                class="fab fa-instagram instasosyal sosyal"
                                style="color: white;border-radius: 100%"></i> </a> </li>

                    <li> <a href="" target="_blank" rel="noreferrer"> <i
                                class="fab fa-youtube youtubesosyal sosyal"
                                style="color: white;border-radius: 100%"></i> </a> </li>

                    <li> <a href="" target="_blank" rel="noreferrer"> <i
                                class="fab fa-twitter twittersosyal sosyal"
                                style="color: white;border-radius: 100%"></i> </a> </li>

                    <li> <a href="" target="_blank" rel="noreferrer"> <i
                                class="fas fa-envelope mailsosyal sosyal"
                                style="color: white;border-radius: 100%"></i> </a> </li>
                </ul>
                <div style="display: flex; color:white; margin-top: 7px; margin-left: 10px;">
                    <div><a style="color:white" href="{{url()->to("")}}/tr">TR</a></div>
                    <div style="margin-left:10px;"><a style="color:white" href="{{url()->to("")}}/en">EN</a></div>
                </div>

            </div>
            <!-- end language -->



            <div class="hamburger"> <span></span> <span></span> <span></span><span></span> </div>

            <!-- end hamburger -->
        </div>
        <!-- end upper-side -->
        <div class="menu">
            <div class="menu-main-menu-container">
                <ul id="menu-main-menu-1" class="menu-horizontal">
                    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-427 current_page_item active menu-item-22 nav-item">
                        <a title="HOME" href="{{route('home')}}" class="nav-link" aria-current="page"
                           data-text="HOME">{{ __('home') }}</a><i></i>
                    </li>
                    <li itemscope="itemscope"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-427 current_page_item active menu-item-22 nav-item">
                        <a title="HOME" href="{{route('aboutUs')}}" class="nav-link" aria-current="page"
                           data-text="HOME">{{ __('about-us') }}
                        </a><i></i>
                    </li>
                    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-427 current_page_item active menu-item-22 nav-item">
                        <a title="HOME" href="{{route('team')}}" class="nav-link" aria-current="page"
                           data-text="HOME">{{ __('our-team') }}</a><i></i>
                    </li>
                    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children dropdown menu-item-665 nav-item">
                        <a title="PROPERTIES" href="" class="nav-link"
                           data-text="PROPERTIES">{{ __('properties') }}</a><i></i>
                        <ul class="dropdown" role="menu">
                            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1378 nav-item">
                                <a title="For Rent" href="{{route('rent')}}" class="dropdown-item" data-text="For Rent">
                                    Frame İstanbul</a><i></i>
                            </li>
                            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1378 nav-item">
                                <a title="For Rent" href="{{route('rentBodrum')}}" class="dropdown-item" data-text="For Rent">
                                    Frame Bodrum</a><i></i>
                            </li>
                            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1378 nav-item">
                                <a title="For Rent" href="https://framelondonrealestate.co.uk" class="dropdown-item" data-text="For Rent">
                                    Frame London</a><i></i>
                            </li>

                        </ul>
                    </li>
                    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children dropdown menu-item-665 nav-item">
                        <a title="PROPERTIES" href="{{route('service')}}" class="nav-link"
                           data-text="PROPERTIES">{{ __('services') }}</a><i></i>
                        <ul class="dropdown" role="menu">
                            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1378 nav-item">
                                <a title="For Rent" href="#" class="dropdown-item" data-text="For Rent">{{ __('professional-photo-shoot') }}</a><i></i>
                            </li>
                            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1378 nav-item">
                                <a title="For Rent" href="#" class="dropdown-item" data-text="For Rent">{{ __('social-media-marketing') }}</a><i></i>
                            </li>
                            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1378 nav-item">
                                <a title="For Rent" href="#" class="dropdown-item" data-text="For Rent">{{ __('property-assessment') }}</a><i></i>
                            </li>
                            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1378 nav-item">
                                <a title="For Rent" href="#" class="dropdown-item" data-text="For Rent">{{ __('mortgage') }}</a><i></i>
                            </li>
                            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1379 nav-item">
                                <a title="For Sale" href="#" class="dropdown-item" data-text="For Sale">{{ __('transportation') }}</a><i></i>
                            </li>
                            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1379 nav-item">
                                <a title="For Sale" href="#" class="dropdown-item" data-text="For Sale">{{ __('cleaning') }}</a><i></i>
                            </li>
                        </ul>
                    </li>

                    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-427 current_page_item active menu-item-22 nav-item">
                        <a title="HOME" href="{{route('news')}}" class="nav-link" aria-current="page"
                           data-text="HOME">{{ __('media') }}</a><i></i>
                    </li>
                    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-427 current_page_item active menu-item-22 nav-item">
                        <a title="HOME" href="{{route('contact')}}" class="nav-link" aria-current="page"
                           data-text="HOME">{{ __('contact') }}</a><i></i>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
