<nav class="navbar">
    <div class="container">
        <div class="upper-side">
            <div class="logo"><a href="">
                    <img src="{{ asset('src/logo.png') }}" alt="">
            </div>

            <div style="display: flex;" class="social-media">
               <!-- <button class="framesummerbuton">FRAME LONDON </button>-->
                <p style="font-size: 15px;" class="followus">{{\Illuminate\Support\Facades\App::getLocale() == 'tr' ? 'Takip Et' : 'Follow Us'}}</p>
                <ul class="sosyalmedyaclass" style="display: flex;list-style: none;">

                    <li> <a href="https://facebook.com/{{setting('site.facebook')}}" target="_blank" rel="noreferrer"> <i
                                class="fab fa-facebook-f facebooksosyal sosyal"
                                style="color: white; border-radius: 100%;"></i> </a>
                    </li>

                    <li> <a href="https://instagram.com/{{setting('site.instagram')}}" target="_blank" rel="noreferrer"> <i
                                class="fab fa-instagram instasosyal sosyal"
                                style="color: white;border-radius: 100%"></i> </a> </li>

                    <li> <a href="https://youtube.com/{{setting('site.youtube')}}" target="_blank" rel="noreferrer"> <i
                                class="fab fa-youtube youtubesosyal sosyal"
                                style="color: white;border-radius: 100%"></i> </a> </li>

                    <li> <a href="https://twitter.com/{{setting('site.twitter')}}" target="_blank" rel="noreferrer"> <i
                                class="fab fa-twitter twittersosyal sosyal"
                                style="color: white;border-radius: 100%"></i> </a> </li>

                    <li> <a href="mailto:{{setting('site.email')}}" target="_blank" rel="noreferrer"> <i
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
                           data-text="HOME">{{\Illuminate\Support\Facades\App::getLocale() == 'tr' ? 'ANASAYFA' : 'HOME'}}</a><i></i>
                    </li>
                    <li itemscope="itemscope"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-427 current_page_item active menu-item-22 nav-item">
                        <a title="HOME" href="{{route('about')}}" class="nav-link" aria-current="page"
                           data-text="HOME">{{\Illuminate\Support\Facades\App::getLocale() == 'tr' ? 'HAKKIMIZDA' : 'ABOUT US'}}
                        </a><i></i>
                    </li>
                    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-427 current_page_item active menu-item-22 nav-item">
                        <a title="HOME" href="{{route('team')}}" class="nav-link" aria-current="page"
                           data-text="HOME">{{\Illuminate\Support\Facades\App::getLocale() == 'tr' ? 'EKİBİMİZ' : 'OUR TEAM'}}</a><i></i>
                    </li>
                    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children dropdown menu-item-665 nav-item">
                        <a title="PROPERTIES" href="" class="nav-link"
                           data-text="PROPERTIES">{{\Illuminate\Support\Facades\App::getLocale() == 'tr' ? 'PORTFÖYLERİMİZ' : 'PROPERTIES'}}</a><i></i>
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
                           data-text="PROPERTIES">{{\Illuminate\Support\Facades\App::getLocale() == 'tr' ? 'HİZMETLERİMİZ' : 'SERVICES'}}</a><i></i>
                        <ul class="dropdown" role="menu">
                            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1378 nav-item">
                                <a title="For Rent" href="#" class="dropdown-item" data-text="For Rent">{{\Illuminate\Support\Facades\App::getLocale() == 'tr' ? 'PROFESYONEL FOTOĞRAF ÇEKİMİ' : 'PROFESSIONAL PHOTOSHOOT'}}</a><i></i>
                            </li>
                            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1378 nav-item">
                                <a title="For Rent" href="#" class="dropdown-item" data-text="For Rent">{{\Illuminate\Support\Facades\App::getLocale() == 'tr' ? 'SOSYAL MEDYA TANITIMIZ' : 'SOCIAL MEDIA MARKETING'}}</a><i></i>
                            </li>
                            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1378 nav-item">
                                <a title="For Rent" href="#" class="dropdown-item" data-text="For Rent">{{\Illuminate\Support\Facades\App::getLocale() == 'tr' ? 'PORTFÖY DEĞERLEME' : 'PROPERTY ASSESSMENT'}}</a><i></i>
                            </li>
                            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1378 nav-item">
                                <a title="For Rent" href="#" class="dropdown-item" data-text="For Rent">{{\Illuminate\Support\Facades\App::getLocale() == 'tr' ? 'KONUT KREDİSİ' : 'MORTGAGE'}}</a><i></i>
                            </li>
                            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1379 nav-item">
                                <a title="For Sale" href="#" class="dropdown-item" data-text="For Sale">{{\Illuminate\Support\Facades\App::getLocale() == 'tr' ? 'TAŞIMA HİZMETİ' : 'TRANSPORTATION'}}İ</a><i></i>
                            </li>
                            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1379 nav-item">
                                <a title="For Sale" href="#" class="dropdown-item" data-text="For Sale">{{\Illuminate\Support\Facades\App::getLocale() == 'tr' ? 'TEMİZLIK HİZMETİ' : 'CLEANING SERVICE'}}</a><i></i>
                            </li>
                        </ul>
                    </li>

                    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-427 current_page_item active menu-item-22 nav-item">
                        <a title="HOME" href="{{route('news')}}" class="nav-link" aria-current="page"
                           data-text="HOME">{{\Illuminate\Support\Facades\App::getLocale() == 'tr' ? 'MEDYA' : 'MEDIA'}}</a><i></i>
                    </li>
                    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-427 current_page_item active menu-item-22 nav-item">
                        <a title="HOME" href="{{route('contact')}}" class="nav-link" aria-current="page"
                           data-text="HOME">{{\Illuminate\Support\Facades\App::getLocale() == 'tr' ? 'İLETİŞİM' : 'CONTACT US'}}</a><i></i>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
