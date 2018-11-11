@extends('layouts.app')

@section('content')


    <header class="masthead text-center text-white d-flex">
        <div class="container my-auto">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h1 class="text-uppercase">
                        <strong>
                            Sveicināts!
                        </strong>
                    </h1>
                    <hr>
                </div>
                <div class="col-lg-8 mx-auto">
                    <p class="text-faded mb-5">Mēs esam modernākais autoserviss Latvijā! Tikai pie mums jūs varat sekot līdzi tam, kas un kad tiek darīts ar jūsu auto jebkurā laikā! </p>
                    <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Uzzināt vairāk</a>
                </div>
            </div>
        </div>
    </header>

    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Kādēļ izvēlēties mūsu servisu?</h2>
                    <hr class="my-4">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box mt-5 mx-auto">
                        <i class="fas fa-4x fa-gem text-primary mb-3 sr-icon-1"></i>
                        <h3 class="mb-3">Caurskatāms remonta process</h3>
                        <p class="text-muted mb-0">Mēs no klientiem neko neslēpjam. Jūs varat sekot līdzi visam remonta procesam mūsu mājaslapā.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box mt-5 mx-auto">
                        <i class="fas fa-4x fa-paper-plane text-primary mb-3 sr-icon-2"></i>
                        <h3 class="mb-3">Pieredze</h3>
                        <p class="text-muted mb-0">Mūsu komanda sastāv no pieredzējušiem mehāniķiem un inženieriem!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box mt-5 mx-auto">
                        <i class="fas fa-4x fa-code text-primary mb-3 sr-icon-3"></i>
                        <h3 class="mb-3">Attieksme</h3>
                        <p class="text-muted mb-0">Mēs respektējam mūsu klientus. Risinām problēmas ātri un efektīvi, uzklausot klientu vēlmes.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box mt-5 mx-auto">
                        <i class="fas fa-4x fa-heart text-primary mb-3 sr-icon-4"></i>
                        <h3 class="mb-3">Kvalitāte</h3>
                        <p class="text-muted mb-0">Mēs garantējam kvalitatīvu servisu! Nodrošinām garantiju visam, ko darām ar jūsu auto.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-dark text-white">
        <div class="container text-center">
            <h2 class="mb-4">Kā pieteikt savu auto servisam? Tas ir ātri un vienkārši!</h2>
            <a class="btn btn-light btn-xl sr-button" href="http://startbootstrap.com/template-overviews/creative/">Spied šeit!</a>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="section-heading">Sazinaties ar mums!</h2>
                    <hr class="my-4">
                    <p class="mb-5">Mēs esam gatavi atbildēt uz jebkuru jūsu jautājumu!</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 ml-auto text-center">
                    <i class="fas fa-phone fa-3x mb-3 sr-contact-1"></i>
                    <p>+37125736339</p>
                </div>
                <div class="col-lg-4 mr-auto text-center">
                    <i class="fas fa-envelope fa-3x mb-3 sr-contact-2"></i>
                    <p>
                        <a href="mailto:your-email@your-domain.com">info@autocare.lv</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

@endsection
