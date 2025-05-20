<div>
    <div class="container-fluid">
        <div class="product m-5">
            <div class="head-main p-3 row d-flex justify-content-around border-bottom" style="box-shadow: 0 2px 1px rgba(0, 0, 0, 0.05);">
                <div class="col-9 title">
                    <h1 class="fw-bolder">{{ $product -> name }}</h1>
                </div>
                <div class="col-3 type justify-content-end">
                    <div class="nav-content d-flex justify-content-evenly">
                        <a href="">T-Shirt</a>
                        <a href="">Shirt</a>
                        <a href="">Pants</a>
                    </div>
                </div>
            </div>
            <div class="row main h-auto d-flex justify-content-center border rounded-2 mx-auto mt-5 shadow-sm" style="width: 78vw">
                <div class="col-10 col-lg-4 py-4 left-side m-3" style="height: 63vh;">
                    <img src="../images/product3.jpg" alt="product" style="width: 100%; height:100%;">
                </div>
                <div class="col-10 col-lg-7 right-side m-3 p-4" style="height: 63vh;">
                    <div class="row">
                        <div class="information">
                            <h3 class="fs-4 fw-bolder">
                                {{ $product -> name }}
                            </h3>
                            <div class="pricing mt-3">
                                <p class="fs-6 fw-bolder d-inline">Harga: <p class="fs-6 fs-light d-inline">{{ $product -> price }}</p></p>
                            </div>
                            <div class="sizing">
                                <p class="fs-6 fw-bolder d-inline">Size: <p class="fs-6 fs-light d-inline">{{ $product -> size }}</p></p>
                            </div>
                            <div class="gender">
                                <p class="fs-6 fw-bolder d-inline">Gender: <p class="fs-6 fs-light d-inline">{{ $product -> gender }}</p></p>
                            </div>
                            <div class="stock">
                                <p class="fs-6 fw-bolder d-inline">Stock: <p class="fs-6 fs-light d-inline">{{ $product -> stock }}</p></p>
                            </div>
                            <div class="stock">
                                <p class="fs-6 fw-bolder d-inline">Condition: <p class="fs-6 fs-light d-inline">{{ $product -> condition }}</p></p>
                            </div>
                            <div class="stock">
                                <p class="fst-italic fs-6 d-inline">uploaded by {{ $product -> users -> name }} at {{ $product -> created_at }}</p>
                            </div>
                            <div class="desc mt-4">
                                <h3 class="fw-bold">
                                    Description:
                                </h3>
                                <p>{{ $product -> description }}</p>
                            </div>
                            <div class="checkout d-flex justify-content-center mt-5">
                                <button wire:click='shCheckout()' type="button" class="btn shadow-sm" style="background-color: #689e80; color: white;">checkout!</button>
                                @if ($isOpenModal)
                                @include('livewire.detail.co')
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
