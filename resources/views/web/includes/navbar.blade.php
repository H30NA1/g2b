<header class="u-clearfix u-header u-header" id="sec-4f98">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <a href="{{ route('web.index') }}" class="u-image u-logo u-image-1">
            <img src="{{ getFileVersion('assets/web/images/logo.png') }}" class="u-logo-image u-logo-image-1" />
        </a>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
            <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px">
                <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
                    <svg class="u-svg-link" viewBox="0 0 24 24">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use>
                    </svg>
                    <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <rect y="1" width="16" height="2"></rect>
                            <rect y="7" width="16" height="2"></rect>
                            <rect y="13" width="16" height="2"></rect>
                        </g>
                    </svg>
                </a>
            </div>
            <div class="u-nav-container">
                <ul class="u-nav u-unstyled u-nav-1">
                    <li class="u-nav-item">
                        <a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="{{ route('web.index') }}" style="padding: 10px 20px">Home</a>
                    </li>
                    <li class="u-nav-item">
                        <a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="{{ route('web.about') }}" style="padding: 10px 20px">About</a>
                    </li>
                    <li class="u-nav-item">
                        <a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="{{ route('web.contact') }}" style="padding: 10px 20px">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="u-nav-container-collapse">
                <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                    <div class="u-inner-container-layout u-sidenav-overflow">
                        <div class="u-menu-close"></div>
                        <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                            <li class="u-nav-item">
                                <a class="u-button-style u-nav-link" href="{{ route('web.index') }}">Home</a>
                            </li>
                            <li class="u-nav-item">
                                <a class="u-button-style u-nav-link" href="{{ route('web.about') }}">About</a>
                            </li>
                            <li class="u-nav-item">
                                <a class="u-button-style u-nav-link" href="{{ route('web.contact') }}">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
            </div>
        </nav>
    </div>
</header>