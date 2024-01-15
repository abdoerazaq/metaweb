@extends('layouts.main')
@include('partials.header')

@section('container')
    <div class="page-header d-flex align-items-center">
        <div class="container position-relative">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 text-center">
                    <h2>Tentang Kami</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="row gy-4 justify-content-center">
                <div class="col-lg-4">
                    <img src="img/logometa.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-5 content">
                    <div class="row">
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <strong>Kami Hadir:</strong> <span>1 Januari
                                        2021</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong>
                                    <span>www.metaforika.id</span>
                                </li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+123 456
                                        7890</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Lhokseumawe,
                                        Aceh</span></li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>30</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong>
                                    <span>metaforikacompany@gmail.com</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <p class="py-3">
                    <mark>Metaforika</mark> terinspirasi dari kata "Metafora" yaitu suatu gaya bahasa atau figur retorika
                        yang digunakan untuk menyampaikan suatu ide
                        atau konsep dengan menggambarkan atau membandingkannya dengan sesuatu yang berbeda, namun memiliki
                        kesamaan atau kemiripan tertentu. Dalam metafora, suatu kata atau frasa digunakan untuk menggantikan
                        kata atau frasa lain tanpa menggunakan kata pembanding langsung seperti "seperti" atau "bagai".
                        Metafora memberikan pemahaman yang lebih mendalam atau gambaran yang lebih hidup terhadap suatu
                        konsep atau situasi.
                    </p>
                </div>
            </div>
        </div>
    </section><!-- End About Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
        <div class="container">

            <div class="section-header">
                <h2>Testimonials</h2>
                <p>What they are saying</p>
            </div>

            <div class="slides-3 swiper">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit
                                rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam,
                                risus at semper.
                            </p>
                            <div class="profile mt-auto">
                                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Saul Goodman</h3>
                                <h4>Ceo &amp; Founder</h4>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid
                                cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet
                                legam anim culpa.
                            </p>
                            <div class="profile mt-auto">
                                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Sara Wilsson</h3>
                                <h4>Designer</h4>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam
                                duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                            </p>
                            <div class="profile mt-auto">
                                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Jena Karlis</h3>
                                <h4>Store Owner</h4>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat
                                minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore
                                labore illum veniam.
                            </p>
                            <div class="profile mt-auto">
                                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Matt Brandon</h3>
                                <h4>Freelancer</h4>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster
                                veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam
                                culpa fore nisi cillum quid.
                            </p>
                            <div class="profile mt-auto">
                                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img"
                                    alt="">
                                <h3>John Larson</h3>
                                <h4>Entrepreneur</h4>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Testimonials Section -->

    <!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('partials.footer')
    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader">
        <div class="line"></div>
    </div>
@endsection
