@extends('front.layout.index')
@section('content')
    @include('front.layout.breadcrumb-1')
        <!-- Start Portfolio
    ============================================= -->
    <div id="portfolio" class="portfolio-area default-padding">
        <div class="container">
            <div class="portfolio-items-area text-center">
                <div class="row">
                    <div class="col-md-12 portfolio-content">
                        <div class="mix-item-menu active-theme">
                            <button class="active" data-filter="*">All</button>
                            <button data-filter=".campus">Campus</button>
                            <button data-filter=".teachers">Teachers</button>
                            <button data-filter=".education">Education</button>
                            <button data-filter=".ceremony">Ceremony</button>
                            <button data-filter=".students">Students</button>
                        </div>
                        <!-- End Mixitup Nav-->

                        <div class="row magnific-mix-gallery masonary text-light">
                            <div id="portfolio-grid" class="portfolio-items col-6">
                                <div class="pf-item ceremony students">
                                    <div class="item-effect">
                                        <img src="/assets/img/800x800.png" alt="thumb" />
                                        <div class="overlay">
                                            <a href="/assets/img/800x800.png" class="item popup-link"><i class="fa fa-expand"></i></a>
                                            <a href="#"><i class="fas fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="pf-item teachers ceremony">
                                    <div class="item-effect">
                                        <img src="/assets/img/800x800.png" alt="thumb" />
                                        <div class="overlay">
                                            <a href="/assets/img/800x800.png" class="item popup-link"><i class="fa fa-expand"></i></a>
                                            <a href="#"><i class="fas fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="pf-item campus education">
                                    <div class="item-effect">
                                        <img src="/assets/img/800x800.png" alt="thumb" />
                                        <div class="overlay">
                                            <a href="/assets/img/800x800.png" class="item popup-link"><i class="fa fa-expand"></i></a>
                                            <a href="#"><i class="fas fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="pf-item education students">
                                    <div class="item-effect">
                                        <img src="/assets/img/800x800.png" alt="thumb" />
                                        <div class="overlay">
                                            <a href="/assets/img/800x800.png" class="item popup-link"><i class="fa fa-expand"></i></a>
                                            <a href="#"><i class="fas fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="pf-item campus">
                                    <div class="item-effect">
                                        <img src="/assets/img/800x800.png" alt="thumb" />
                                        <div class="overlay">
                                            <a href="/assets/img/800x800.png" class="item popup-link"><i class="fa fa-expand"></i></a>
                                            <a href="#"><i class="fas fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="pf-item ceremony teachers">
                                    <div class="item-effect">
                                        <img src="/assets/img/800x800.png" alt="thumb" />
                                        <div class="overlay">
                                            <a href="/assets/img/800x800.png" class="item popup-link"><i class="fa fa-expand"></i></a>
                                            <a href="#"><i class="fas fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="pf-item">
                                    <div class="item-effect">
                                        <img src="/assets/img/800x800.png" alt="thumb" />
                                        <div class="overlay">
                                            <a href="/assets/img/800x800.png" class="item popup-link"><i class="fa fa-expand"></i></a>
                                            <a href="#"><i class="fas fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="pf-item ceremony students">
                                    <div class="item-effect">
                                        <img src="/assets/img/800x800.png" alt="thumb" />
                                        <div class="overlay">
                                            <a href="/assets/img/800x800.png" class="item popup-link"><i class="fa fa-expand"></i></a>
                                            <a href="#"><i class="fas fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="pf-item ceremony">
                                    <div class="item-effect">
                                        <img src="/assets/img/800x800.png" alt="thumb" />
                                        <div class="overlay">
                                            <a href="/assets/img/800x800.png" class="item popup-link"><i class="fa fa-expand"></i></a>
                                            <a href="#"><i class="fas fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="pf-item campus">
                                    <div class="item-effect">
                                        <img src="/assets/img/800x800.png" alt="thumb" />
                                        <div class="overlay">
                                            <a href="/assets/img/800x800.png" class="item popup-link"><i class="fa fa-expand"></i></a>
                                            <a href="#"><i class="fas fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="pf-item education teachers">
                                    <div class="item-effect">
                                        <img src="/assets/img/800x800.png" alt="thumb" />
                                        <div class="overlay">
                                            <a href="/assets/img/800x800.png" class="item popup-link"><i class="fa fa-expand"></i></a>
                                            <a href="#"><i class="fas fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="pf-item teachers">
                                    <div class="item-effect">
                                        <img src="/assets/img/800x800.png" alt="thumb" />
                                        <div class="overlay">
                                            <a href="/assets/img/800x800.png" class="item popup-link"><i class="fa fa-expand"></i></a>
                                            <a href="#"><i class="fas fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Portfolio -->

@endsection