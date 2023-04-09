<!-- Start Banner 
============================================= -->
<div class="banner-area content-top-heading less-paragraph text-normal">
    <div id="bootcarousel" class="carousel slide animate_text carousel-fade" data-ride="carousel">

        <!-- Wrapper for slides -->
        <div class="carousel-inner text-light carousel-zoom">
            @foreach ($banner as $i)
            <div class="item {{$loop->first?'active':''}}">
                <div class="slider-thumb bg-fixed" style="background-image: url({{$i->image}});"></div>
                <div class="box-table shadow dark">
                    <div class="box-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="content">
                                        <h3 data-animation="animated slideInLeft">{{$i->title}}</h3>
                                        <h1 data-animation="animated slideInUp">{{$i->content}}</h1>
                                        <a data-animation="animated slideInUp" class="btn btn-light border btn-md" href="{{$i->link}}">Learn more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!-- End Wrapper for slides -->
        

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#bootcarousel" data-slide="prev">
            <i class="fa fa-angle-left"></i>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#bootcarousel" data-slide="next">
            <i class="fa fa-angle-right"></i>
            <span class="sr-only">Next</span>
        </a>

    </div>
</div>
<!-- End Banner -->