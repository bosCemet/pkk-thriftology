<div>
    <div class="container-fluid">
        <div class="products m-5">
            <div class="head-main p-3 row d-flex justify-content-around border-bottom">
                <div class="col-9 title">
                    <h4>Producto</h4>
                </div>
                <div class="col-3 type justify-content-end">
                    <div class="nav-content d-flex justify-content-evenly">
                        <a href="">T-Shirt</a>
                        <a href="">Shirt</a>
                        <a href="">Pants</a>
                    </div>
                </div>
            </div>
            <div class="body m-2">
                <div class="row d-flex justify-content-evenly p-0">
                    @foreach($products as $product)
                    <div class="card mt-4 p-0" style="width: 18rem;">
                        <img src="/images/product3.jpg" alt=" Product 1" class="card-img-top" style="max-height: 40vh;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product -> name }}</h5>
                                <div class="content mt-3">
                                    <p class="card-text product-price mt-1 mb-0 fs-6 fw-light">{{ $product -> price }}</p>
                                    <p class="card-text product-size mt-1 mb-0 fs-6 fw-light">{{ $product -> size }}</p>
                                    <p class="card-text product-condition mt-1 mb-0 fs-6 fw-light">{{ $product -> condition }}</p>
                                    <p class="card-text product-desc mt-2 mb-0 fs-6 fw-light lh-sm">{{ $product -> description }}</p>
                                    <div class="more mt-3 d-flex justify-content-center">
                                        <button type="button" class="btn" style="background-color: #d1dcd6"><a href="{{ route('show.detail', ['id' => $product->id]) }}" class="btn">Lihat Produk </a></button>
                                    </div>
                                </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
