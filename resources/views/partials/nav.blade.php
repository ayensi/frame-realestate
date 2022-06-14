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
                    <div><a style="color:white" href="{{route('setLocale',['language'=>'tr'])}}">TR</a></div>
                    <div style="margin-left:10px;"><a style="color:white" href="{{route('setLocale',['language'=>'en'])}}">EN</a></div>
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
                    @foreach($menus as $m)
                        @if(!$m->isSubMenu)
                            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-427 current_page_item active menu-item-22 nav-item">
                                <a title="{{__($m->url->url)}}" href="{{route('page',['url' => $m->url->url])}}" class="nav-link" aria-current="page"
                                   data-text="HOME">{{__($m->slug)}}</a><i></i>
                                @if($m->submenus()->exists())
                                    <ul class="dropdown" role="menu">
                                        @foreach($m->submenus as $s)
                                            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1378 nav-item">
                                                <a title="{{$s->slug}}" href="{{route('page',['url' => $s->url->url])}}" class="dropdown-item" data-text="For Rent">
                                                    {{__($s->slug)}}</a><i></i>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        @endif

                    @endforeach

                </ul>
            </div>
        </div>
    </div>
</nav>
