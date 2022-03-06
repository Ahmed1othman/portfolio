<header>
    <div class="topbar d-flex align-items-center">
        <nav class="navbar navbar-expand">

            <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
            </div>

            <div class="top-menu ms-auto">
                <ul class="navbar-nav align-items-center">


                    <li class="nav-item dropdown dropdown-large">

                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            @if (App()->getLocale() == 'ar')
                                <i class="flag-icon flag-icon-eg"></i>
                            @else

                                <i class="flag-icon flag-icon-us"></i>
                            @endif
                        </a>


                        <div class="dropdown-menu dropdown-menu-end">
                            @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)<a
                                    rel="alternate" hreflang="{{ $localeCode }}"
                                    href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    <div class="msg-header"> {{ $properties['native'] }}
                                        <p class="msg-header-title ms-auto">
                                        <p class="msg-header-clear ms-auto">
                                            @if ($localeCode == 'ar')
                                                <i class="flag-icon flag-icon-eg"></i>
                                            @else
                                                <i class="flag-icon flag-icon-us"></i>
                                            @endif
                                        </p>
                                        </p>

                                    </div>
                                </a>
                            @endforeach

                            <div class="header-notifications-list">

                            </div>

                        </div>
                    </li>


                    <li class="nav-item dropdown dropdown-large">

                        <div class="dropdown-menu dropdown-menu-end">

                            <div class="header-message-list">
                                {{--  --}}
                            </div>

                        </div>
                    </li>


                </ul>
            </div>


            <div class="user-box dropdown">
                <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#"
                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{ asset('admin/assets/images/avatars/avatar-2.png') }}" class="user-img"
                        alt="user avatar">
                    <div class="user-info ps-3">
                        <p class="user-name mb-0">{{ auth()->user()->name }}</p>
                        <p class="designattion mb-0"></p>
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li class="dropdown-item"> <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            <i class='bx bx-log-out-circle'></i> {{ __('Log Out') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>

                </ul>
            </div>
        </nav>
    </div>
</header>
