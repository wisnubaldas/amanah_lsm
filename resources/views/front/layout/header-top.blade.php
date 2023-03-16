<!-- Start Header Top 
============================================= -->
<div class="top-bar-area address-two-lines bg-dark text-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8 address-info">
                <div class="info box">
                    <ul>
                        <li>
                            <span><i class="fas fa-map"></i> Alamat</span>Jalan Raya Pasarkemis Tangerang 123456
                        </li>
                        <li>
                            <span><i class="fas fa-envelope-open"></i> Email</span>admin@sekolah-alamanah.sch.id
                        </li>
                        <li>
                            <span><i class="fas fa-phone"></i> Contact</span>+123 456 7890
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