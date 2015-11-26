<div class="slider hide-on-large-only">
    <ul class="slides">
        <li>
            <img u="image" src="images/tarde.jpg" />
            <div class="caption center-align">
                <h3>Welcome to paradise</h3>

                <h5>We Care, We Listen.</h5>

            </div>
        </li>
        @foreach($images as $image)
            <li>
                <a href="casasayulita" class="brand-logo " ><img u="image" src="uploads/{{ $image->image }}" /></a>
                <div class="caption center-align">
                    <h3>{{ $image->name }}</h3>
                    <h5 class="light grey-text text-lighten-3">{{ $image->slogan }}</h5>
                </div>
            </li>
        @endforeach
    </ul>
</div>