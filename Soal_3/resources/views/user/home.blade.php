@extends('layouts.app')
@section('content')


    {{-- ------------------- CAROUSEL ------------------- --}}


    <div id="myCarousel" class="carousel slide mb-6 d-none d-md-block" data-bs-ride="carousel" data-bs-theme="light">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://images.unsplash.com/photo-1626509653291-18d9a934b9db?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                    class="filter d-block w-100" alt="Background Image">
                <div class="container">
                    <div class="carousel-caption text-start justify-content-center">
                        <h1 class="judulcarousel">Your Favorite Food Delivered to You</h1>
                        <p class="isicarousel opacity-75">Some representative placeholder content for the first slide of the
                            carousel.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1626509653291-18d9a934b9db?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                    class="filter d-block w-100" alt="Background Image">
                <div class="container">
                    <div class="carousel-caption text-start justify-content-center">
                        <h1 class="judulcarousel">Your Favorite Food Delivered to You</h1>
                        <p class="isicarousel opacity-75">Some representative placeholder content for the first slide of the
                            carousel.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1626509653291-18d9a934b9db?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                    class="filter d-block w-100" alt="Background Image">
                <div class="container">
                    <div class="carousel-caption text-start justify-content-center">
                        <h1 class="judulcarousel">Your Favorite Food Delivered to You</h1>
                        <p class="isicarousel opacity-75">Some representative placeholder content for the first slide of the
                            carousel.</p>
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>


    {{-- ------------------- CAROUSEL ------------------- --}}


    {{-- ------------------- TENTANG KAMI ------------------- --}}


    <div id="about" class="py-5 container">
        <div class="py-5">
            <h1 class="Judul text-center">Tentang Kami</h1>
            <p class="lead text-body-secondary text-center">Mari kita mengungkap kisah di balik cita rasa lezat kami.
                Temukan sejarah yang memikat di balik Bakmie Joko</p>
            <p>
            <div class=" row py-3 gy-lg-5 align-items-center">
                <div class="col-lg-6 order-lg-0">
                    <img style="border-radius: 10%;"
                        src="https://s3.dealjava.com/content/thumb_small/f703292fdbbc208d3d705e8a08d5fb18.jpg"
                        alt="" class="img-fluid">
                </div>
                <div class="col-lg-6 order-lg-1 text-center text-lg-start">
                    <div class="title pt-3 pb-3">
                        <h2 class="position-relative d-inline-block">Sejarah</h2>
                    </div>
                    <p class="text-muted" style="text-align: justify">Bakmie Joko didirikan pada tanggal 05 Mei 2017 oleh
                        Joko di Jl.Pandu Raya No.3, Tegal Gundil, Bogor. Usaha ini diteruskan dari orangtuanya yang sudah
                        tiada. Selama 6 tahun, Bakmie Joko telah menjadi salah satu restoran mie ayam terpopuler di Kota
                        Bogor. Mereka juga menambahkan kwetiau ayam ke dalam menu mereka. Bakmie Joko menghadirkan hidangan
                        lezat dengan cita rasa tradisional yang menggugah selera. Restoran ini menjadi warisan keluarga yang
                        dicintai oleh banyak orang.</p>
                </div>
            </div>
        </div>
    </div>


    {{-- ------------------- TENTANG KAMI ------------------- --}}


    {{-- ------------------- DAFTAR MENU ------------------- --}}


    <div id="daftarMenu" class="py-5">
        <div class="mt-5 text-center container">
            <div class="row">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="Judul">Daftar Menu</h1>
                    <p class="lead text-body-secondary">Jelajahi menu lezat kami dan nikmati pengalaman kuliner yang memikat</p>
                    <p>
                        <a class="btn btn-lg btn-outline-warning filter-button" data-category="all"
                            onclick="toggleButton(this)">Semua</a>
                        <a class="btn btn-lg btn-outline-warning filter-button" data-category="makanan"
                            onclick="toggleButton(this)">Makanan</a>
                        <a class="btn btn-lg btn-outline-warning my-2 filter-button" data-category="minuman"
                            onclick="toggleButton(this)">Minuman</a>
                    </p>
                </div>
            </div>
        </div>

        <div class="container">

            <!-- Mulai perulangan di sini -->
            {{-- Controller CRUD nya apa --}}
            {{-- Mahee route nya kok sepi --}}
            <div class="row row-cols-2 row-cols-md-3 g-4">
                @foreach ($menus as $menu)
                    <div class="col col-12 col-sm-6 col-md-4">
                        <div class="card shadow border-0">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225">
                                <image class="image-package" href="images/content/{{ $menu->images }}" />
                            </svg>
                            <div class="card-body">
                                <h4 class="card-title" data-category="{{ $menu->kategori }}">{{ $menu->nama_menu }}</h4>
                                <p class="card-text">{{ $menu->deskripsi }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button"
                                            class="btn btn-lg btn-outline-warning">{{ $menu->harga }}</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- Akhir perulangan -->
        </div>
    </div>


    {{-- ------------------- DAFTAR MENU ------------------- --}}


    {{-- ------------------- TOKO ONLINE ------------------- --}}


    <div class="container py-5">
        <div class="row gy-lg-5 align-items-center">
            <div class="col-lg-8 order-lg-1">
                <img src="images/content-01.png" alt="" class="img-fluid" style="float: right;">
            </div>

            <div class="col-lg-4 order-lg-0 text-center text-lg-start">
                <div class="title pt-3 pb-3">
                    <h2 class="position-relative Judul">Kunjungi <br>Toko Online</h2>
                </div>
                <p class="text-muted" style="text-align: justify">Tunggu apa lagi? Jangan lewatkan kesempatan untuk
                    merasakan kelezatan Bakmie Joko di kenyamanan rumah Anda. Segera kunjungi toko online kami di Gojek dan
                    GoFood sekarang juga!</p>
                <div class="py-3">
                    <button type="button" class="btn btn-lg btn-outline-danger rounded-pill">
                        <img style="width: 50px; margin-right: 10px;"
                            src="https://cdn.kibrispdr.org/data/750/logo-gofood-png-18.jpg" alt="">
                        <span
                            style="font-size: 24px;  vertical-align: middle; font-weight: bold; font-family: montserrat;">gofood</span>
                    </button>
                    <button type="button" class="btn btn-lg btn-outline-danger rounded-pill mx-3">
                        <img style="width: 50px; margin-right: 10px;"
                            src="https://cdn.kibrispdr.org/data/750/logo-gofood-png-18.jpg" alt="">
                        <span
                            style="font-size: 24px;  vertical-align: middle; font-weight: bold; font-family: montserrat;">gofood</span>
                    </button>
                </div>
            </div>
        </div>
    </div>



    {{-- ------------------- TOKO ONLINE ------------------- --}}


    {{-- ------------------- ARTIKEL ------------------- --}}


    <div id="artikel" class="container py-4">
        <div class="py-5 mt-5 container">
            <h1 class="Judul text-center">Artikel</h1>
            <p class="lead text-body-secondary text-center">Temukan wawasan baru, informasi terbaru, dan tips berguna dalam setiap artikel kami.</p>
            <p>
            <div class="row g-3 py-5">
                @foreach ($articles as $article)
                    <div class="card border-0 col-md-6 col-lg-4 bg-transparent my-3">
                        <img src="{{ asset('images/content/' . $article->images) }}" alt="">
                        <div class="card-body px-0">
                            <h2>{{ $article->judul }}</h2>
                            <p class="text-secondary">{{ Illuminate\Support\Str::words($article->isi, 20, '...') }}</p>

                            <a href="{{ route('article.show', $article->id) }}" class="btn btn-outline-warning">Read
                                More</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


    {{-- ------------------- ARTIKEL ------------------- --}}


    {{-- ------------------- KONTAK ------------------- --}}


    <div id="kontak" class="container py-5">
        <div>
            <h1 class="Judul text-center">Kontak</h1>
            <p class="lead text-body-secondary text-center">Anda dapat menghubungi kami melalui informasi kontak berikut:

            </p>
        </div>
        <div class="row py-5">
            <div class="col-md-6">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126844.50414694214!2d106.74475327531712!3d-6.535478783439614!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c423da3ccaf3%3A0xc71b76c5ba80d69e!2sKedai%20Mie%20Ayam%20Joko!5e0!3m2!1sid!2sid!4v1689076883138!5m2!1sid!2sid"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <div class="py-3">
                            <h2>
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                    fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z" />
                                </svg> Jam Buka
                            </h2>
                            <div>11.00 AM - 21.00 PM<br>Setiap Hari</div>
                        </div>
                        <div class="py-3">
                            <h2>
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                    fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z" />
                                </svg> Kontak
                            </h2>
                            <div>0821 1235 7848</div>
                        </div>
                        <div class="py-3">
                            <h2>
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                    fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z" />
                                </svg> Alamat
                            </h2>
                            <div>Jl. Pandu Raya No.3, RT.01/RW.13, Tegal Gundil, Kec. Bogor Utara, Kota Bogor, Jawa Barat
                                16152</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- ------------------- KONTAK ------------------- --}}


    {{-- ------------------- ULASAN ------------------- --}}


<div id="about" class="py-5 container">
    <div class="py-5">
        <div class="row py-3 gy-lg-5 align-items-center">
            <div class="col-lg-6 order-lg-0">
                <img src="images/content-01.png" alt="" class="img-fluid">
            </div>
            <div class="col-lg-6 order-lg-1 text-center text-lg-start">
                <div class="carousel slide" data-bs-ride="carousel">
                    <div class="container2">
                        <div class="board">
                            <p class="Judul">Ulasan</p>
                    
                            <!-- Slider main container -->
                            <div class="swiper">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    <!-- Slides -->
                                    @foreach ($reviews as $review)
                                    <div class="swiper-slide">
                                        <div class="flex">
                                            <div class="comments">
                                                {{ $review->review }}
                                            </div>
                                            <div class="profile">
                                                <img src="" alt="">
                                                <a href="#">{{ $ulasan->name }}</a>
                                                <span>lalala</span>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <!-- If we need pagination -->
                                <div class="swiper-pagination"></div>
                            
                                <!-- If we need navigation buttons -->
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>

</style>


