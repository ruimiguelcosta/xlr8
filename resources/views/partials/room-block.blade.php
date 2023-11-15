<div class="room-block_one">
    <div class="room-block_one-inner">
        <div class="comfort-section">
            <ul class="image-carousel owl-carousel owl-theme">
                <li><a href="{{ url('/assets') }}/images/gallery/52.jpg" class="lightbox-image"><img src="{{ url('/assets') }}/images/gallery/52.jpg" alt=""></a></li>
                <li><a href="{{ url('/assets') }}/images/gallery/53.jpg" class="lightbox-image"><img src="{{ url('/assets') }}/images/gallery/53.jpg" alt=""></a></li>
                <li><a href="{{ url('/assets') }}/images/gallery/54.jpg" class="lightbox-image"><img src="{{ url('/assets') }}/images/gallery/54.jpg" alt=""></a></li>
                <li><a href="{{ url('/assets') }}/images/gallery/55.jpg" class="lightbox-image"><img src="{{ url('/assets') }}/images/gallery/55.jpg" alt=""></a></li>
                <li><a href="{{ url('/assets') }}/images/gallery/56.jpg" class="lightbox-image"><img src="{{ url('/assets') }}/images/gallery/56.jpg" alt=""></a></li>
                <li><a href="{{ url('/assets') }}/images/gallery/52.jpg" class="lightbox-image"><img src="{{ url('/assets') }}/images/gallery/52.jpg" alt=""></a></li>
            </ul>

            <ul class="thumbs-carousel owl-carousel owl-theme">
                <li><img src="{{ url('/assets') }}/images/gallery/52.jpg" alt=""></li>
                <li><img src="{{ url('/assets') }}/images/gallery/53.jpg" alt=""></li>
                <li><img src="{{ url('/assets') }}/images/gallery/54.jpg" alt=""></li>
                <li><img src="{{ url('/assets') }}/images/gallery/55.jpg" alt=""></li>
                <li><img src="{{ url('/assets') }}/images/gallery/56.jpg" alt=""></li>
                <li><img src="{{ url('/assets') }}/images/gallery/52.jpg" alt=""></li>
            </ul>
        </div>
        <div class="room-block_one-content">
            <div class="room-block_one-title"><a href="#">{{ $room->roomType->name }}</a></div>
            <ul class="room-block_one-options">
                <li><span class="icon"><img src="{{ url('/assets') }}/images/icons/hotel-icon-11.png" alt="" /></span>30 sqm</li>
                <li><span class="icon"><img src="{{ url('/assets') }}/images/icons/hotel-icon-12.png" alt="" /></span>Queen Size</li>
                <li><span class="icon"><img src="{{ url('/assets') }}/images/icons/hotel-icon-13.png" alt="" /></span>2 guests</li>
            </ul>
            <ul class="room-block_one-list">
                <li>Free Wi-Fi</li>
                <li>AC</li>
                <li>Toiletries</li>
                <li>Mini Bar</li>
                <li>No Breakfast</li>
            </ul>
            <a class="detail theme-btn" href="#">Room Details</a>
            <div class="price-box">
                <div class="price">{{ $room->prices[0]->price }} € <span>/ night</span></div>
                <div class="price">{{ $totalByRoom[$room->id]['bookingCost'] }} € <span>/ {{ $totalByRoom[$room->id]['bookingDays'] }} days</span></div>
                <div class="button-box">
                    <a class="btn-style-two theme-btn" href="#">
                        <div class="btn-wrap">
                            <span class="text-one">Book Now</span>
                            <span class="text-two">Book Now</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
