<div class="page-header">
    <div class="header-wrapper row m-0">
        <form class="form-inline search-full col" action="#" method="get">
            <div class="form-group w-100">
                <div class="Typeahead Typeahead--twitterUsers">
                    <div class="u-posRelative">
                        <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text"
                            placeholder="Search Cuba .." name="q" title="" autofocus>
                        <div class="spinner-border Typeahead-spinner" role="status"><span
                                class="sr-only">Loading...</span>
                        </div><i class="close-search" data-feather="x"></i>
                    </div>
                    <div class="Typeahead-menu"></div>
                </div>
            </div>
        </form>
        <div class="header-logo-wrapper col-auto p-0">
            <div class="logo-wrapper"><a href="index.html"><img class="img-fluid" src="../assets/images/logo/logo.png"
                        alt=""></a></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i>
            </div>
        </div>
        <div class="left-header col-xxl-5 col-xl-6 col-lg-5 col-md-4 col-sm-3 p-0">
            <div class="notification-slider">
                <div class="d-flex h-100"> <img src="../assets/images/giftools.gif" alt="gif">
                    <h6 class="mb-0 f-w-400"><span class="font-primary">Productos sin stock! </span><span
                            class="f-light"> Realizar orden de compra.</span></h6><i
                        class="icon-arrow-top-right f-light"></i>
                </div>
                <div class="d-flex h-100"><img src="../assets/images/giftools.gif" alt="gif">
                    <h6 class="mb-0 f-w-400"><span class="f-light">Tienes cuentas por cobrar! </span>
                    </h6><a class="ms-1" href="https://1.envato.market/3GVzd" target="_blank"> Revisar ahora !</a>
                </div>
                <div class="d-flex h-100"><img src="../assets/images/giftools.gif" alt="gif">
                    <h6 class="mb-0 f-w-400"><span class="f-light">Existen nuevas promociones! </span>
                    </h6><a class="ms-1" href="https://1.envato.market/3GVzd" target="_blank"> Enviar por whatsapp a
                        mis clientes</a>
                </div>
            </div>
        </div>
        <div class="nav-right col-xxl-7 col-xl-6 col-md-7 col-8 pull-right right-header p-0 ms-auto">
            <ul class="nav-menus">




                <li class="onhover-dropdown">
                    <div class="notification-box">
                        <svg>
                            <use href="../assets/svg/icon-sprite.svg#notification"></use>
                        </svg><span class="badge rounded-pill badge-secondary">4 </span>
                    </div>
                    <div class="onhover-show-div notification-dropdown">
                        <h6 class="f-18 mb-0 dropdown-title">Notitications </h6>
                        <ul>
                            <li class="b-l-primary border-4">
                                <p>Delivery processing <span class="font-danger">10 min.</span></p>
                            </li>
                            <li class="b-l-success border-4">
                                <p>Order Complete<span class="font-success">1 hr</span></p>
                            </li>
                            <li class="b-l-secondary border-4">
                                <p>Tickets Generated<span class="font-secondary">3 hr</span></p>
                            </li>
                            <li class="b-l-warning border-4">
                                <p>Delivery Complete<span class="font-warning">6 hr</span></p>
                            </li>
                            <li><a class="f-w-700" href="#">Check all</a></li>
                        </ul>
                    </div>
                </li>
                <li class="profile-nav onhover-dropdown pe-0 py-0">
                    <div class="media profile-media"><img class="b-r-10" src="../assets/images/dashboard/profile.png"
                            alt="">
                        <div class="media-body">
                            <span>
                                @guest
                                LuisFax
                                @else
                                {{ Auth()->user()->name }}
                                @endguest
                            </span>
                            <p class="mb-0">
                                Admin
                                <i class="middle fa fa-angle-down"></i>
                            </p>
                        </div>
                    </div>
                    <ul class="profile-dropdown onhover-show-div">
                        <li><a href="{{route('profile.edit')}}"><i data-feather="user"></i><span>Perfil </span></a></li>
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i data-feather="log-in"> </i><span>Salir</span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>

    </div>
</div>