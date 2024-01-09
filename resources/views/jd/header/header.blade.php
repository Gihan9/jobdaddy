<nav class="navbar navbar-expand-lg bg-body-tertiary" style="margin-bottom:0px; background:transparent !important;">
    <div class="container-fluid mynav">
    <div class="contactBox">
        <img src="/jd_img/contact.png" alt="" title="Contact Us">
        <div class="contactNum"> 24/7 0094 76 311 45 49</div>
       
    </div>
    <!--<div class="logoText">Job Daddy</div>-->
    <a class="navbar-brand" href="/">
        <img class="companyLogo" src="/jd_img/monkey.png" alt="">
        <div class="logoText">Job Daddy</div>
    </a>


    <div class="loginAndLangLinks">
        <div>
            <form action="#">
                <select name="lang" id="lang">
                  <option value="volvo">En</option>
                  <option value="saab">Sin</option>
                  <option value="opel">Tm</option>
                </select>
              </form>
        </div>
        
    <ul class="navbar-nav ms-auto">
        <!-- Authentication Links -->
        @guest
            @if (Route::has('login'))
                <li class="nav-item navbtn navLogin">
                    <a class="nav-link" href="/jd/choice">{{ __('Login') }}</a>
                </li>
            @endif

        @else
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                
                <img src="/jd_img/profileIcon.png" style="max-width: 30px;" alt="">
            </a>

            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <div style="font-weight: bold; text-align:center;">{{ Auth::user()->name }} </div>
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
        @endguest
    </ul>
    </div>


    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    </div>  
</nav>
