<!-- Start Breadcrumb 
============================================= -->
<div class="breadcrumb-area shadow dark text-center bg-fixed text-light" style="background-image: url({{$breadcrumb->image}});">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{$breadcrumb->title}}</h1>
                <ul class="breadcrumb">
                    @foreach ($breadcrumb->link as $i)
                        @if ($loop->first)
                            <li class="{{$i[3]}}"><a href="{{$i[1]}}"><i class="{{$i[2]}}"></i> {{$i[0]}}</a></li>
                        @elseif ($loop->last)
                            <li class="{{$i[3]}} ">{{$i[0]}}</li>
                        @else
                            <li><a href="{{$i[1]}}">{{$i[0]}}</a></li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->