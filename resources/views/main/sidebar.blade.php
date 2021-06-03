            <!-- BEGIN: Side Menu -->
            <nav class="side-nav">
                <a href="/" class="intro-x flex items-center">
                    <img alt="" class="items-center" src="{{asset('logo/chnlogo.png')}}"></a>
                <div class="side-nav__devider my-6  "></div>
                <ul>
                    <li>
                        <a href="{{ route('index')}}" class="side-menu  @if (URL::current()==URL::to('/') or URL::current()==URL::to('/trash') ){{'side-menu--active'}} @endif">
                            <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                            <div class="side-menu__title">
                                Home Page
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('add_note')}}" class="side-menu @if (URL::current()==URL::to('/add-note')){{'side-menu--active'}} @endif">
                            <div class="side-menu__icon"> <i data-feather="file"></i> </div>
                            <div class="side-menu__title">
                                New Notes
                            </div>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- END: Side Menu -->
