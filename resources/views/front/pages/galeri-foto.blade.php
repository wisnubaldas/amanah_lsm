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
                            @foreach ($data['group'] as $group)
                                <button data-filter=".{{ $group->id }}">{{ $group->name }}</button>
                            @endforeach
                        </div>
                        <!-- End Mixitup Nav-->

                        <div class="row magnific-mix-gallery masonary text-light">
                            <div id="portfolio-grid" class="portfolio-items col-6">
                                @foreach ($data['foto'] as $foto)
                                    <div class="pf-item {{ $foto->group_media_id }}">
                                        <div class="item-effect">
                                            <img src="{{ $foto->link_tumb }}" alt="thumb" />
                                            <div class="overlay">
                                                <a href="{{ $foto->link_img }}" class="item popup-link"><i class="fa fa-expand"></i></a>
                                                <a href="{{ $foto->link_img }}" target="_blank"><i class="fas fa-link"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Portfolio -->
@endsection
