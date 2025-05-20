<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .bg-image {
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }
        .full-height {
            min-height: 100vh; /* Atau height: 100vh; tergantung kebutuhan */
        }
    </style>
    <title>Thriftology</title>
</head>
<body class="bg-light">
    <div class="container-fluid position-relative m-0 p-0">
        <div class="content w-100">
            <div class="w-100 h-100">
                <div class="full-height bg-image w-100" style="background-image: url('/images/banner1.jpg'); border-bottom-left-radius: 30px; border-bottom-right-radius: 30px;">
                    <nav class="position-relative p-2">
                        <div class="container d-flex justify-content-between align-items-center">
                            <div class="container-fluid p-0">
                                <a class="navbar-brand m-0" href="#">
                                <img src="images/logo.png" alt="" height="24">
                                </a>
                            </div>
                            <div class="navbar">
                                <div class="d-none d-md-flex gap-md-5">
                                    <a href="{{route('home')}}" class="text-decoration-none text-white">Beranda</a>
                                    <a href="{{route('products.index')}}" class="text-decoration-none text-white">Katalog</a>
                                    <a href="{{route('sell')}}" class="text-decoration-none text-white">Jual</a>
                                    <a href="#" class="text-decoration-none text-white">Tentang</a>
                                    <a href="#" class="text-decoration-none text-white">Kontak</a>
                                </div>
                                <button id="burgerBtn" class="d-md-none btn btn-light focus-ring-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                                    </svg>
                                </button>
                                <div id="mobileMenu" class="d-md-none position-absolute top-100 end-0 w-25 bg-light shadow-md z-1">
                                    <a href="#" class="d-block py-2 px-4 text-decoration-none text-secondary">Beranda</a>
                                    <a href="#" class="d-block py-2 px-4 text-decoration-none text-secondary">Katalog</a>
                                    <a href="#" class="d-block py-2 px-4 text-decoration-none text-secondary">Tentang Kami</a>
                                    <a href="#" class="d-block py-2 px-4 text-decoration-none text-secondary">Kontak</a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="main w-100 mt-5" style="height: 70vh;">
                <div class="popular-products w-85 mx-auto mt-16 mb-20 text-center">
                    <h2 class="fs-5 fs-md-4 fw-semibold mb-2">Our Popular Product</h2>
                    <p class="text-secondary fs-sm-6 fs-md-5 mb-8">Thriftology customers love this products!</p>
                    <div class="mt-4 d-flex flex-column flex-md-row justify-content-evenly align-items-center">
                        <div class="card mt-4" style="width: 18rem;">
                            <img src="/images/product1.jpg" alt="Popular Product 1" class="card-img-top" style="max-height: 70vh;">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                        <div class="card mt-4" style="width: 18rem;">
                            <img src="/images/product3.jpg" alt="Popular Product 1" class="card-img-top" style="max-height: 70vh;">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                        <div class="card mt-4" style="width: 18rem;">
                            <img src="/images/product2.jpg" alt="Popular Product 1" class="card-img-top" style="max-height: 70vh;">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="browse m-4 d-flex justify-content-center">
                    <button type="button" class="btn btn-primary">Browse Our Products</button>
                </div>
            </div>
            <div class="footer bg-light w-100" style="height: 58.7vh;">
                <div class="testimonial-title mt-6 d-flex justify-content-center" style="height: 5vh;">
                    <h1 class="fs-4 fw-medium">Testimonial</h1>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script>
        const burgerBtn = document.getElementById('burgerBtn');
        const mobileMenu = document.getElementById('mobileMenu');

        burgerBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('d-none');
        });
    </script>
</body>
</html>