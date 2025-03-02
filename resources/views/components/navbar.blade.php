<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Roboto:wght@400;500;700;900&display=swap"
    rel="stylesheet">

<!-- Icon Font Stylesheet -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link rel="stylesheet" href="lib/animate/animate.min.css" />
<link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


<!-- Customized Bootstrap Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Template Stylesheet -->
<link href="css/style.css" rel="stylesheet">
<link rel="stylesheet" href="{{asset('css/tobBar.css')}}">

<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0 w-100" style="display:flex;justify-content:center;align-items:center">
            <a href="{{ route('services') }}"
                class="nav-item nav-link {{ Request::routeIs('services') ? 'active' : '' }}">Services</a>
            <a href="{{ route('portfolio') }}"
                class="nav-item nav-link {{ Request::routeIs('portfolio') ? 'active' : '' }}">Profile</a>
                <a href="{{ route('insights') }}"
                class="nav-item nav-link {{ Request::routeIs('insights') ? 'active' : '' }}">Insights</a>
            <!-- <a href="{{ route('construction') }}"
                class="nav-item nav-link {{ Request::routeIs('construction') ? 'active' : '' }}">Construction</a> -->
            <a href="{{ route('home') }}" class="navbar-brand p-0">

                <div style="display:flex;justify-content:center;align-items:center;" >
                    <!-- <h1 class="logo" style="font-size:28px">ARCH-TECHS'</h1>
                    <h1 class="logo" id="text-logo">DG</h1>
                    <h1 class="logo" style="font-size:28px">STUDIO</h1> -->
                    <img src="{{asset('../../img/logo.png')}}" alt="Logo">
                </div>
            </a>

            <a href="{{ route('career') }}"
                class="nav-item nav-link {{ Request::routeIs('career') ? 'active' : '' }}">Career</a>
            <a href="{{ route('about') }}"
                class="nav-item nav-link {{ Request::routeIs('about') ? 'active' : '' }}">About</a>
            <a href="{{ route('contactus') }}"
                class="nav-item nav-link {{ Request::routeIs('contactus') ? 'active' : '' }}">Contact Us</a>
        </div>
    </div>
</nav>

<style>
    #text-logo{
        font-size:38px;
        border:3px solid #62b702;
        padding:10px;
        margin-inline:10px;
        border-radius:40px;
    }

</style>
