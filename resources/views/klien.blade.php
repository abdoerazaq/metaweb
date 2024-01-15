@extends('layouts.main')
@include('partials.header')

@section('container')
    <section class="page-section bg-white mb-0" id="kolaborasi">
        <div class="container">
            <!-- Partner Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary">Kolaborasi</h2>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line bg-secondary"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line bg-secondary"></div>
            </div>
            <!-- Kolaborasi Section Content-->
            <div class="container">
                {{-- begin --}}
                <div class="row justify-content-center">
                    <h2 class="text-center text-dark mt-5">Klien Kami</h2>
                    <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                        <div class="col">
                            <div class="p-4"><img class="img-fluid" src="/img/pjb.jpg" alt="..." />
                            </div>
                        </div>
                        <div class="col">
                            <div class="p-4"><img class="img-fluid" src="/img/arun.jpg" alt="..." />
                            </div>
                        </div>
                        <div class="col">
                            <div class="p-4"><img class="img-fluid" src="/img/pbass.jpg" alt="..." /></div>
                        </div>
                        <div class="col">
                            <div class="p-4"><img class="img-fluid" src="/img/jasa.jpg" alt="..." />
                            </div>
                        </div>
                        <div class="col">
                            <div class="p-4"><img class="img-fluid mt-4" src="/img/telkom.png" alt="..." /></div>
                        </div>
                    </div>
                    <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                        <div class="col">
                            <div class="p-4"><img class="img-fluid" src="/img/unimal.png" alt="..." /></div>
                        </div>
                        <div class="col">
                            <div class="p-4"><img class="img-fluid" src="/img/HIMAKO.png" alt="..." /></div>
                        </div>
                        <div class="col">
                            <div class="p-4"><img class="img-fluid" src="/img/pnl.png" alt="..." />
                            </div>
                        </div>
                        <div class="col">
                            <div class="p-4"><img class="img-fluid" src="/img/lhokseumawe.png" alt="..." /></div>
                        </div>
                        <div class="col">
                            <div class="p-4"><img class="img-fluid mb-1" src="/img/aceh.jpeg" alt="..." /></div>
                        </div>
                    </div>
                </div>
                {{-- end --}}
            </div>
        </div>
        </div>
        </div>
    </section>

    @include('partials.footer')
@endsection
