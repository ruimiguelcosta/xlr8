@extends('main')

@section('contents')
<div class="page-wrapper">
    <section class="page-banner" style="background-image: url({{ asset('/assets') }}/images/background/17.jpg)">
        <div class="auto-container">
            <ul class="page-breadbrumbs">
                <li><a href="#">Home</a></li>
                <li>hotels</li>
                <li>{{ $property->name }}</li>
            </ul>
            <h1 class="page-banner_title">{{ $property->city }}</h1>
            <div class="banner-rating">
                <i class="fas fa-map-marker-alt fa-fw"></i>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
            </div>
        </div>
    </section>

    <section class="hotel-detail_gallery">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-9 col-md-9 col-sm-12">
                    <div class="image">
                        <a class="lightbox-image" href="#">
                            <img src="{{ url('/storage/' . $property->image) }}" alt="{{ $property->name }}" />
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="hotel-detail">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="left-column col-lg-8 col-md-12 col-sm-12">
                    <h2>OVERVIEW</h2>
                    <p>Situated just steps from the iconic Place Vendôme, the hotel offers easy access to some of the city's most famous attractions, including the Louvre Museum, the Champs-Élysées, the Arc de Triomphe, and the famous Eiffel Tower view.</p>

                    <div class="hotel-rooms">
                        <h3>ROOMS</h3>
                    </div>

                    @if (!count($rooms))
                        <p>There are no rooms available for this date!</p>
                    @else
                        @foreach ($rooms as $room)
                            @include('partials.room-block')
                        @endforeach
                    @endif
                </div>

                <div class="right-column col-lg-4 col-md-12 col-sm-12">
                    <div class="tour_plans position-sticky">
                        <div class="title-box">
                            <h4>BOOK A ROOM</h4>
                            <div class="text">No extra hassle, just fill the form and let us contact you for more informations.</div>
                        </div>

                        <div class="booking-form">
                            <form method="get" action="{{ url('/hotels/' . $property->id) }}">
                                <div class="form-group">
                                    <label>Check In Date *</label>
                                    <input class="datepicker" type="date" name="checkin"  value="{{ $checkin }}" required="" />
                                </div>

                                <div class="form-group">
                                    <label>Check Out Date *</label>
                                    <input class="datepicker" type="date" name="checkout" value="{{ $checkout }}"  required="" />
                                </div>

                                <div class="form-group">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <button class="btn-style-two theme-btn">
											<span class="btn-wrap">
												<span class="text-one">Show Price</span>
												<span class="text-two">Show Price</span>
											</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
