<nav class="nav container">
    <a href="#" class="nav__logo">
        <i class="ri-book-line nav__logo-icon"></i> BUKU TAMU
    </a>

    <div class="nav__menu" id="nav-menu">
        <ul class="nav__list">
            <li class="nav__item">
                <a href="#home" class="nav__link active-link">Baranda</a>
            </li>
            <li class="nav__item">
                <a href="#about" class="nav__link">Tentang </a>
            </li>
            {{-- <li class="nav__item">
                <a href="#products" class="nav__link">Products</a>
            </li> --}}
            <li class="nav__item">
                <a href="#faqs" class="nav__link">FAQs</a>
            </li>
            <li class="nav__item">
                <a href="#form" class="nav__link">Forum</a>
            </li>
            <li class="nav__item">
                <a href="{{route('login')}}" class="nav__link"> Login </a>
            </li>
        </ul>

        <div class="nav__close" id="nav-close">
            <i class="ri-close-line"></i>
        </div>
    </div>

    <div class="nav__btns">
        <!-- Theme change button -->
        <i class="ri-moon-line change-theme" id="theme-button"></i>

        <div class="nav__toggle" id="nav-toggle">
            <i class="ri-menu-line"></i>
        </div>
    </div>
</nav>
