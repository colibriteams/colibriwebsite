@extends('common.layouts.frontend')

@section('title', 'Colibri')

@section('nav')
    @include('common.components.frontend.nav')
@endsection

@section('seo')
    @include('common.components.frontend.seo', [
        'title' => 'Colibri. Where our teams are yours',
        'des' => 'Nearshore software development in Costa Rica. Providing highly skilled and motivated augmented teams to our client partners.',
        'keywords' => 'Nearshore, Software Development, Costa Rica, Augmented teams, Developer happiness, Technical Agency, Software Development agency',
        'url' => url()->current()
    ])
@endsection

@section('content')
    <div class="hero-section hero-section--join-us">
        <div class="container flex-grow-1">
            <div class="row justify-content-md-end justify-content-center align-items-center">
                <div class="col-lg-6 hero-section__col justify-content-center align-items-md-end align-items-center text-md-end text-center">
                    <h1 class="text-white mb-0 mt-5">
                        Join us. <br>
                        Work happy.
                    </h1>
                    <p class="text-white my-4 py-2 text-md-end text-center ms-auto">Colibri is built on the welfare and happiness of our teams. If you are successful, we all are!</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 my-lg-7 my-5 intro">
                <h2 class="intro__headline">What you get</h2>
                <hr class="my-lg-7 my-5">
                <div class="row gy-5 gx-lg-5">
                    <div class="col-lg-4">
                        <img src="{{ asset('assets/images/briefcase_icon.svg') }}" alt="The basics" height="56">
                        <h3 class="my-4 fw-bold">The basics</h3>
                        <p>Competitive salary, private medical insurance, time off when you need it, working from home, employee assistance, varied and interesting work</p>
                    </div>
                    <div class="col-lg-4">
                        <img src="{{ asset('assets/images/handshake_icon.svg') }}" alt="The fun stuff" height="56">
                        <h3 class="my-4 fw-bold">The fun stuff</h3>
                        <p>Drinks and food in the office, company offsites - summer parties, all sorts of team events</p>
                    </div>
                    <div class="col-lg-4">
                        <img src="{{ asset('assets/images/chart_icon.svg') }}" alt="Growth and Development" height="56">
                        <h3 class="my-4 fw-bold">Growth and Development</h3>
                        <p>Flat structure - no barriers to personal growth, Tech and business training, career development plans, language lessons if you need it.</p>
                    </div>
                </div>
                <div class="card card--primary-gradient my-lg-7 my-5 d-flex justify-content-between align-items-center flex-lg-row flex-column gap-lg-0 gap-4 px-5 py-lg-5 py-4">
                    <h3 class="text-primary mb-0 text-center">Check out our current job openings</h3>
                    <a href="#job-openings" class="btn btn-primary rounded-pill px-5">View more</a>
                </div>
            </div>
        </div>
    </div>
    <div class="who-are-we">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-6 my-lg-5">
                    <h2>We Are Colibri</h2>
                    <p class="mt-4">
                        Hummingbirds or "Colibri" in Spanish is the name of our company.<br>
                        These little birds have 5 amazing traits that we have adopted into our culture.
                    </p>
                    <img src="{{ asset('assets/images/logo_bg_mobile.svg') }}" alt="Logo" class="img-fluid d-lg-none d-block mt-5">
                    <div class="who-are-we-list">
                        <div class="who-are-we-list__item">
                            <div class="who-are-we-list__number">
                                <div class="counter">01</div>
                                <div class="who-are-we-list__line"></div>
                            </div>
                            <div class="who-are-we-list__content">
                                <h3 class="my-4 fw-bold">Fast</h3>
                                <p>Colibris move their wings 60 times per second. We move fast and adapt to the ever changing technology environment.</p>
                            </div>
                        </div>
                        <div class="who-are-we-list__item">
                            <div class="who-are-we-list__number">
                                <div class="counter">02</div>
                                <div class="who-are-we-list__line"></div>
                            </div>
                            <div class="who-are-we-list__content">
                                <h3 class="my-4 fw-bold">Hungry</h3>
                                <p>Colibris eat 3 times their body weight each single day. We are always hungry to learn more, grow professionally, spiritually and personally.</p>
                            </div>
                        </div>
                        <div class="who-are-we-list__item">
                            <div class="who-are-we-list__number">
                                <div class="counter">03</div>
                                <div class="who-are-we-list__line"></div>
                            </div>
                            <div class="who-are-we-list__content">
                                <h3 class="my-4 fw-bold">Smart</h3>
                                <p>Colibris have the biggest brain of all birds by volume. We think, then act. We analyze the best solution for a problem.</p>
                            </div>
                        </div>
                        <div class="who-are-we-list__item">
                            <div class="who-are-we-list__number">
                                <div class="counter">04</div>
                                <div class="who-are-we-list__line"></div>
                            </div>
                            <div class="who-are-we-list__content">
                                <h3 class="my-4 fw-bold">Caring</h3>
                                <p>Colibris hearts beat 1200 per minute and weigh 2.5% of their body. We care and look out for each other.</p>
                            </div>
                        </div>
                        <div class="who-are-we-list__item">
                            <div class="who-are-we-list__number">
                                <div class="counter">05</div>
                                <div class="who-are-we-list__line"></div>
                            </div>
                            <div class="who-are-we-list__content">
                                <h3 class="my-4 fw-bold">Accountable</h3>
                                <p>Colibris are the only birds that can fly backwards. We all make mistakes and that's ok! Ask for help and work to move forward!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="team-photo d-flex justify-content-center mt-7">
        <img src="{{ asset('assets/images/intro-pic_join-us.png') }}" alt="Team" class="d-md-block d-none img-fluid">
        <img src="{{ asset('assets/images/intro-pic_join-us_mobile.png') }}" alt="Team" class="d-md-none d-block w-100">
    </div>
    <div class="job-opening my-7 mb-md-7 mb-2" id="job-openings">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h2 class="text-md-center mb-md-7 mb-5">Job openings</h2>
                    @foreach ($jobs as $job)
                        <a href="{{ $job->link }}" class="job-opening__item border-top @if($loop->last) border-bottom  @endif d-flex justify-content-between py-md-5 py-4" target="_blank">
                            <h3 class="text-white">{{ $job->title  }}</h2>
                            <img src="{{ asset('assets/images/arrow-right-s-line.svg')  }}" alt="Visit">
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        @livewire('contact-form', ['type' => 'job-updates'])
    </div>
@endsection

@section('footer')
    @include('common.components.frontend.footer')
@endsection
