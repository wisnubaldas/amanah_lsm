<!-- Start Header Top 
============================================= -->
<div class="top-bar-area address-two-lines bg-dark text-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8 address-info">
                <div class="info box">
                    <ul>
                        <li>
                            <span >
                                Headline SMK al Amanah
                            </span>
                                <div class='marquee'>
                                    Ikutilah Acara Lomba Balap Gundu <a href="{{ url('/home') }}">
                                    <i style="color:#e9f5f9;">Daftar disini..!!!</i></a>
                                    &emsp;
                                    Ikutilah Acara Lomba Balap Karung <a href="{{ url('/home') }}">
                                    <i style="color:#e9f5f9;">Daftar disini..!!!</i></a>
                                </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="user-login text-right col-md-4">
                @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/home') }}" >Home</a>
                        @else
                            <a href="{{ route('login') }}" ><i class="fas fa-user"></i>Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"><i class="fas fa-edit"></i>Register</a>
                            @endif
                        @endauth
                @endif
            </div>
        </div>
    </div>
</div>
<!-- End Header Top -->