@extends('frontend.layouts.app')
@yield('title')
@section('content')
    <main>
        <article>
            <!-- #HERO-->
            <section class="hero" id="home" aria-label="hero"
                style="background-image: url('{{ asset('frontend/assets/images/hero-bg.jpg') }}')">
                <div class="container">

                    <div class="hero-content">

                        <p class="section-subtitle">Belajar Bersama Kami</p>

                        <h2 class="h1 hero-title">Selamat datang di HTMLPedia!</h2>

                        <p class="hero-text">
                            HTMLPedia adalah platform edukasi digital yang berkomitmen untuk menyediakan pembelajaran
                            terbaik bagi semua kalangan. Dengan materi yang mudah di pahami dan dipandu oleh para ahli
                            industri,
                            kami hadir untuk mendukung perkembangan karir terbaik dalam pengembangan web.
                        </p>

                        <a href="#" class="btn btn-primary">
                            <span class="span">Ayo Mulai Disini</span>

                            <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                        </a>

                    </div>


                    <figure class="hero-banner">

                        <img src="{{ asset('frontend/assets/images/logo4.png') }}" width="500" height="500" loading="lazy"
                            alt="hero image" class="w-100">

                        <img src="{{ asset('frontend/assets/images/css.png') }}" width="318" height="352" loading="lazy"
                            aria-hidden="true" class="abs-img abs-img-1">

                        <img src="{{ asset('frontend/assets/images/js.png') }}" width="160" height="160" loading="lazy"
                            aria-hidden="true" class="abs-img abs-img-2">

                    </figure>

                </div>
            </section>

            <!-- #CATEGORY-->
            <section class="section category" aria-label="category">
                <div class="container">

                    <p class="section-subtitle">Kategori Kursus</p>

                    <h2 class="h2 section-title">Topik terbaik </h2>

                    <ul class="grid-list">

                        <li>
                            <div class="category-card">

                                <div class="card-icon">
                                    <ion-icon name="laptop-outline"></ion-icon>
                                </div>

                                <div>
                                    <h3 class="h3 card-title">
                                        <a href="#">HEADING</a>
                                    </h3>

                                    <span class="card-meta">Basic</span>
                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="category-card">

                                <div class="card-icon">
                                    <ion-icon name="ribbon-outline"></ion-icon>
                                </div>

                                <div>
                                    <h3 class="h3 card-title">
                                        <a href="#">TEKS FORMATTING</a>
                                    </h3>

                                    <span class="card-meta">Intermediate</span>
                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="category-card">

                                <div class="card-icon">
                                    <ion-icon name="bar-chart-outline"></ion-icon>
                                </div>

                                <div>
                                    <h3 class="h3 card-title">
                                        <a href="#">Table</a>
                                    </h3>

                                    <span class="card-meta">Advanced</span>
                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="category-card">

                                <div class="card-icon">
                                    <ion-icon name="laptop-outline"></ion-icon>
                                </div>

                                <div>
                                    <h3 class="h3 card-title">
                                        <a href="#">IMAGES</a>
                                    </h3>

                                    <span class="card-meta">Basic</span>
                                </div>

                            </div>
                        </li>


                        <li>
                            <div class="category-card">

                                <div class="card-icon">
                                    <ion-icon name="ribbon-outline"></ion-icon>
                                </div>

                                <div>
                                    <h3 class="h3 card-title">
                                        <a href="#">LINKS</a>
                                    </h3>

                                    <span class="card-meta">Intermediate</span>
                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="category-card">

                                <div class="card-icon">
                                    <ion-icon name="bar-chart-outline"></ion-icon>
                                </div>

                                <div>
                                    <h3 class="h3 card-title">
                                        <a href="#">Comments</a>
                                    </h3>

                                    <span class="card-meta">Advanced</span>
                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="category-card">

                                <div class="card-icon">
                                    <ion-icon name="laptop-outline"></ion-icon>
                                </div>

                                <div>
                                    <h3 class="h3 card-title">
                                        <a href="#">PARAGRAPH</a>
                                    </h3>

                                    <span class="card-meta">Basic</span>
                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="category-card">

                                <div class="card-icon">
                                    <ion-icon name="ribbon-outline"></ion-icon>
                                </div>

                                <div>
                                    <h3 class="h3 card-title">
                                        <a href="#">LISTS</a>
                                    </h3>

                                    <span class="card-meta">Intermediate</span>
                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="category-card">

                                <div class="card-icon">
                                    <ion-icon name="bar-chart-outline"></ion-icon>
                                </div>

                                <div>
                                    <h3 class="h3 card-title">
                                        <a href="#">Inline & blocks</a>
                                    </h3>

                                    <span class="card-meta">Advanced</span>
                                </div>

                            </div>
                        </li>

                    </ul>

                </div>
            </section>

            <!-- #ABOUT-->
            <section class="section about" id="about" aria-label="about">
                <div class="container">

                    <figure class="about-banner">

                        <img src="{{ asset('frontend/assets/images/about-banner.jpg') }}" width="450" height="590"
                            loading="lazy" alt="about banner" class="w-100 about-img">

                        <img src="{{ asset('frontend/assets/images/about-abs-1.jpg') }}" width="188" height="242"
                            loading="lazy" aria-hidden="true" class="abs-img abs-img-1">

                        <img src="{{ asset('frontend/assets/images/about-abs-2.jpg') }}" width="150" height="200"
                            loading="lazy" aria-hidden="true" class="abs-img abs-img-2">

                    </figure>

                    <div class="about-content">


                        <h2 class="h2 section-title">SIAPA KAMI?</h2>

                        <ul class="about-list">

                            <li class="about-item">



                                <div>
                                    <h3 class="h3 item-title">HTMLPedia</h3>

                                    <p class="item-text">
                                        HTMLPedia adalah platform edukasi digital yang berkomitmen untuk menyediakan
                                        pembelajaran terbaik bagi semua kalangan. Dengan materi yang mudah di pahami dan
                                        dipandu oleh para ahli industri,
                                        kami hadir untuk mendukung perkembangan karir terbaik dalam pengembangan web.
                                    </p>
                                </div>

                            </li>

                        </ul>

                        <a href="http://localhost/laravel-elearning-main/public/about" class="btn btn-primary">
                            <span class="span">Selengkapnya Tentang Kami</span>

                            <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                        </a>

                    </div>

                </div>
            </section>

            <!--- #COURSE-->
            <section class="section course" id="courses" aria-label="course"
                style="background-image: url('{{ asset('frontend/assets/images/course-bg.jpg') }}')">
                <div class="container">

                    <p class="section-subtitle">Kursus Populer</p>

                    <h2 class="h2 section-title">Kursus Populer Kami</h2>

                    <ul class="grid-list">

                        <li>
                            <div class="course-card">

                                <figure class="card-banner">
                                    <img src="{{ asset('frontend/assets/images/heading.jpg') }}" width="370" height="270"
                                        loading="lazy" alt="Competitive Strategy law for all students" class="img-cover">
                                </figure>

                                <div class="card-actions">

                                    <span class="badge">Basic</span>

                                    <button class="whishlist-btn" aria-label="Add to whishlist" data-whish-btn>
                                        <ion-icon name="heart"></ion-icon>
                                    </button>

                                </div>

                                <div class="card-content">

                                    <ul class="card-meta-list">

                                        <li class="card-meta-item">
                                            <ion-icon name="reader-outline" aria-hidden="true"></ion-icon>

                                            <span class="card-meta-text">1 Pembelajaran</span>
                                        </li>

                                        <li class="card-meta-item">
                                            <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                                            <time datetime="PT18H15M44S" class="card-meta-text">30 Menit</time>
                                        </li>

                                    </ul>

                                    <h3 class="h3">
                                        <a href="https://youtu.be/GS9lkbkkOhg" class="card-title">Pembelajaran Heading Pada
                                            HTML</a>
                                    </h3>

                                    <div class="rating-wrapper">

                                        <div class="rating">
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                        </div>



                                    </div>

                                    <div class="card-footer">

                                        <div class="card-price">
                                            <span class="span">Free</span>

                                            <del class="del"></del>
                                        </div>

                                        <div class="card-meta-item">
                                            <ion-icon name="people-outline" aria-hidden="true"></ion-icon>


                                        </div>

                                    </div>

                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="course-card">

                                <figure class="card-banner">
                                    <img src="{{ asset('frontend/assets/images/course2.jpg') }}" width="370" height="270"
                                        loading="lazy" alt="Machine Learning A-Z: Hands-On Python and java"
                                        class="img-cover">
                                </figure>

                                <div class="card-actions">

                                    <span class="badge">Intermediate</span>

                                    <button class="whishlist-btn" aria-label="Add to whishlist" data-whish-btn>
                                        <ion-icon name="heart"></ion-icon>
                                    </button>

                                </div>

                                <div class="card-content">

                                    <ul class="card-meta-list">

                                        <li class="card-meta-item">
                                            <ion-icon name="reader-outline" aria-hidden="true"></ion-icon>

                                            <span class="card-meta-text">1 Pembelajaran</span>
                                        </li>

                                        <li class="card-meta-item">
                                            <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                                            <time datetime="PT18H15M44S" class="card-meta-text">30 Menit</time>
                                        </li>

                                    </ul>

                                    <h3 class="h3">
                                        <a href="https://youtu.be/r3vixSLXY1w" class="card-title">Cara Untuk Menggunakan
                                            LINKS pada HTML</a>
                                    </h3>

                                    <div class="rating-wrapper">

                                        <div class="rating">
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                        </div>



                                    </div>

                                    <div class="card-footer">

                                        <div class="card-price">
                                            <span class="span">Free</span>
                                        </div>

                                        <div class="card-meta-item">
                                            <ion-icon name="people-outline" aria-hidden="true"></ion-icon>

                                        </div>

                                    </div>

                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="course-card">

                                <figure class="card-banner">
                                    <img src="{{ asset('frontend/assets/images/course3.jpg') }}" width="370" height="270"
                                        loading="lazy" alt="Achieving Advanced in Insights with Big" class="img-cover">
                                </figure>

                                <div class="card-actions">

                                    <span class="badge">Advanced</span>

                                    <button class="whishlist-btn" aria-label="Add to whishlist" data-whish-btn>
                                        <ion-icon name="heart"></ion-icon>
                                    </button>

                                </div>

                                <div class="card-content">

                                    <ul class="card-meta-list">

                                        <li class="card-meta-item">
                                            <ion-icon name="reader-outline" aria-hidden="true"></ion-icon>

                                            <span class="card-meta-text">1 Pembelajaran</span>
                                        </li>

                                        <li class="card-meta-item">
                                            <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                                            <time datetime="PT18H15M44S" class="card-meta-text">30 Menit</time>
                                        </li>

                                    </ul>

                                    <h3 class="h3">
                                        <a href="https://youtu.be/GcCvV3B3gFA" class="card-title">Belajar Mengenal INLINE &
                                            BLOCK pada HTML</a>
                                    </h3>

                                    <div class="rating-wrapper">

                                        <div class="rating">
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                        </div>


                                    </div>

                                    <div class="card-footer">

                                        <div class="card-price">
                                            <span class="span">Free</span>


                                        </div>

                                        <div class="card-meta-item">
                                            <ion-icon name="people-outline" aria-hidden="true"></ion-icon>

                                        </div>

                                    </div>

                                </div>

                            </div>
                        </li>






                    </ul>

                    <a href="http://localhost/laravel-elearning-main/public/course" class="btn btn-primary">
                        <span class="span">Lihat Semua Kursus</span>

                        <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                    </a>

                </div>
            </section>

            <!-- #CTA-->


            <!-- #EVENT-->


        </article>
    </main>

    <!--- #BACK TO TOP-->
    <a href="#top" class="back-top-btn" aria-label="Back to top" data-back-top-btn>
        <ion-icon name="arrow-up"></ion-icon>
    </a>
@endsection