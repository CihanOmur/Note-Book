<div class="mobile-menu md:hidden">
            <div class="mobile-menu-bar">
                <a href="" class="flex mr-auto">
                    <img alt="" class="w-6" src="dist/images/logo.svg">
                </a>
                <a href="javascript:;" id="mobile-menu-toggler"> <i data-feather="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
            </div>
            <ul class="border-t border-theme-29 py-5 hidden">
                <li>
                    <a href="{{ route('index')}}" class="menu menu--active">
                        <div class="menu__icon"> <i data-feather="home"></i> </div>
                        <div class="menu__title"> Home Page  </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('add_note')}}" class="menu menu">
                        <div class="menu__icon"> <i data-feather="file"></i> </div>
                        <div class="menu__title"> Notes  </div>
                    </a>
                </li>
            </ul>
        </div>
        <!-- END: Mobile Menu -->