<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
        <img src="{{asset('asset/5.jpg')}}" class="w-25" alt="مجمع خدمات الجمهور السوداني">
        جمهورية السودان
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item ms-3">
                <a class="link-body-emphasis link-offset-2 link-underline-opacity-0 link-underline-opacity-75-hover" href="{{ route('home') }}">الصفحة الرئيسية</a>
            </li>
            <li class="nav-item ">
                <a class="link-body-emphasis link-offset-2 link-underline-opacity-0 link-underline-opacity-75-hover" href="{{ route('about') }}">من نحن</a>
            </li>
            <li class="nav-item me-3">
                <a class="link-body-emphasis link-offset-2 link-underline-opacity-0 link-underline-opacity-75-hover" href="{{ route('contact') }}">اتصل بنا</a>
            </li>
        </ul>
    </div>
</nav>
