@extends('main')

@include('partials.banner')

@section('contents')
    <section class="popular-hotels gallery-five">
        <div class="auto-container">
            <div
                class="page-header d-flex align-items-center justify-content-between flex-wrap flex-md-nowrap gap-2 gap-md-5">
                <div class="gallery-five_title-box">
                    <h4>Popular Hotels</h4>
                    <div class="text">Discover our top-rated hotels in the world's most desirable destinations.</div>
                </div>

            </div>

            <div class="row clearfix">
                <div class="column col-lg-12 col-md-12 col-sm-12">
                    <div class="popular-hotels_outer">
                        <div class="row clearfix">
                            @foreach($properties as $property)
                                @include('partials.hotel-block')
                            @endforeach

                        </div>
                    </div>

                    <div class="pagination-outer text-center">
                        <ul class="paginations">
                            <li><a href="#"><span class="flaticon-left-arrow-2"></span></a></li>
                            <li class="active"><a href="#">01</a></li>

                            <li><a href="#"><span class="flaticon-next-2"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
