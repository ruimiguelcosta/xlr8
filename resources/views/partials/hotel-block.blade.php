<div class="hotel-block_one col-lg-6 col-md-6 col-sm-12">
    <div class="hotel-block_one-inner">
        <div class="hotel-block_one-image">
            <div class="rating">
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
            </div>
            <a href="{{ url('/hotels/' . $property->id) }}">
                <img src="{{ url('/storage/' . $property->image) }}" alt="{{ $property->name }}" />
            </a>
        </div>
        <div class="hotel-block_one-content">
            <h5 class="hotel-block_one-heading">
                <a href="{{ url('/hotels/' . $property->id) }}">{{ $property->name }}</a>
            </h5>
            <div class="hotel-block_one-location">{{ $property->city }}</div>
            <a class="hotel-block_one-arrow flaticon-next-2" href="{{ url('/hotels/' . $property->id) }}"></a>
        </div>
    </div>
</div>
