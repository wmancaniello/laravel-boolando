<div class="ms_card">
    <div class="ms_image">
        <img src="{{ Vite::asset('resources/img/' . $product['frontImage']) }}"
            class="card-img front"alt="{{ $product['name'] }}">
        <img src="{{ Vite::asset('resources/img/' . $product['backImage']) }}"
            class="card-img back"alt="{{ $product['name'] }}">
    </div>
    <div class="card-body">
        <div class="ms_info d-flex flex-column">
            <p>{{ $product['brand'] }}</p>
            <h5 class="card-title">{{ $product['name'] }}</h5>
            <p class="card-text">
                <span class="ms_red">{{ $product['price'] }}€</span>
                <span> Sconto:?</span>
            </p>
        </div>
    </div>
</div>
