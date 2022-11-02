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
    <div class="hero-section">
        <div class="container flex-grow-1 px-4">
            <div class="row justify-content-start">
                <div class="col-lg-7 hero-section__col">
                    <h1 class="text-white mb-0">We scale quality engineering teams anywhere for early stage businesses.</h1>
                    <p class="text-white my-4 ">High performance engineering teams in the US and Europe to reduce churn, build continuity and increase delivery speed…</p>
                 
                </div>
            
            </div>
            <div class="rayas-animation">
                <img src="{{ asset('assets/images/raya.png') }}"/>
                <img src="{{ asset('assets/images/raya.png') }}"/>
                <img src="{{ asset('assets/images/raya.png') }}"/>
            </div>
        </div>
    </div>
    <div class="container my-7"> 
        <div class="row align-items-center">
            <div class="col-lg-6 text-center">
                <div class="drops-animation">
                    <img src="{{asset('assets/images/drop.png')}}" />
                    <img src="{{asset('assets/images/drop.png')}}" />
                    <img src="{{asset('assets/images/drop.png')}}" />
                    <img src="{{asset('assets/images/drop.png')}}" />
                    <img src="{{asset('assets/images/drop.png')}}" />
                    <img src="{{asset('assets/images/drop.png')}}" />
                    <img src="{{asset('assets/images/drop.png')}}" />
                    <img src="{{asset('assets/images/drop.png')}}" />
                    <img src="{{asset('assets/images/drop.png')}}" />
                    <img src="{{asset('assets/images/drop.png')}}" />
                </div>
                <img class="challege-image" src="{{ asset('assets/images/challence-delivery2.jpg') }}" alt="challenge develivers">
            </div>
            <div class="col-lg-6">
                <div class="challenge-delivery">
                    <div class="row">
                        <div class="col-12 delivery-title">
                            <h2 class="intro__headline">Challenges - Colibri delivers</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 bg-delivery-text"> 
                        <div>
                            <p>Keeping developers happy makes financial sense.</p>
                            <p>Over a 3 year period, reducing churn from an industry average of 30% to 5% saves you $107K* in direct costs per resource per year.</p>
                            <p>More importantly, by holding knowledge within a committed team – we deliver better code, faster.</p>
                            <p>If you are struggling to recruit the talent you need get Colibri involved, we can start small and build as your requirements grow.</p>
                            <p class="white_small_text">*assumes a average salary for a mid level engineer</p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 mb-lg-7 mb-5 intro">
                <h2 class="intro__headline">Happy teams deliver. <br>  Happy teams stick around.</h2>
                <p>Colibri gives clients surety of engineering resource in challenging environments, where there can be high churn and a challenge in hiring quality engineers within an increasingly competitive landscape. <NEW PARA> Our model delivers to clients a high value long term model that reduces costs for quality engineering talent, ensured capacity and continuity across programmes.</p>
                <hr class="my-lg-7 my-5">
                <div class="row gy-5 gx-lg-5">
                    <div class="col-lg-6">
                       <h2 class="intro__headline"> Reduce cost, 
                        <br/>build and 
                        <br/>grow the team
                        </h2>
                    </div>
                    <div class="col-lg-3 text-center">
                        <img src="{{ asset('assets/images/cost-saving-icon.svg') }}" alt="Accountability" height="56">
                        <h3 class="my-4 fw-bold">COST SAVINGS</h3>
                        <p>Colibri take all the costs away for maintaining teams, their welfare, personal development and benefits. Our approach provides inherent savings through streamlined onboarding into client environments, significantly reducing churn and increased continuity of work and teams.</p>
                    </div>
                    <div class="col-lg-3 text-center">
                        <img src="{{ asset('assets/images/scalable-icon.svg') }}" alt="Continuity" height="56">
                        <h3 class="my-4 fw-bold">SCALE</h3>
                        <p>We work with clients to develop predictability  across programmes of work. Working in strategic partnership to support scaling up or down. Plan, prepare and curate bespoke technical teams when needed to deliver.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="what-we-do" class="bg-primary-gradient py-md-7 py-5">
        <div class="container what-we-do">
            <div class="row gy-5 gx-lg-5 gx-0">
                <div class="col-12">
                    <h1 class="text-primary">What we do</h1>
                    <p class="text-primary">We build, operate and develop <strong>highly motivated, engaged and capable integrated engineering teams</strong> for businesses who really value high quality technical expertise. </p>
                    <p class="text-primary"><strong>Our happy developer core value proposition</strong> - removing employee costs to clients, adding value through continual enhanced employee welfare and personal development.  </p>
                    <p class="text-primary">Our approach provides seamless integration, with increased developer capability, productivity and reduce churn. <strong>All reduced expense and value to the client.</strong> </p>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <div class="accordion" id="what-we-do-item1">
                        <div class="accordion-item">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('assets/images/clock-icon.png') }}" alt="Continuity" height="56">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button title text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        TIMEZONE
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#what-we-do-item1">
                            <div class="accordion-body text-primary">
                                With our hubs in Costa Rica and Europe we make sure the key people within your team are working when you are.
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                <div class="accordion" id="what-we-do-item2">
                        <div class="accordion-item">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('assets/images/scalable-icon.svg') }}" alt="Continuity" height="56">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button title text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapsetwo" aria-expanded="true" aria-controls="collapsetwo">
                                        EXPERTISE
                                    </button>
                                </h2>
                            </div>
                            <div id="collapsetwo" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#what-we-do-item2">
                            <div class="accordion-body text-primary">
                                Our teams have experience across a wide variety of industries and technologies, with focus in areas such as Fintech and Healthtec. New and emerging tech in Crypto and Metaverse.
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                <div class="accordion" id="what-we-do-item3">
                        <div class="accordion-item">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('assets/images/scalable-icon.svg') }}" alt="Continuity" height="56">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button title text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapsethree" aria-expanded="true" aria-controls="collapsethree">
                                        LANGUAGE
                                    </button>
                                </h2>
                            </div>
                            <div id="collapsethree" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#what-we-do-item3">
                            <div class="accordion-body text-primary">
                                Language can be a barrier. We ensure each team member has the language skills to operate with clients and the team.
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                <div class="accordion" id="what-we-do-item4">
                        <div class="accordion-item">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('assets/images/scalable-icon.svg') }}" alt="Continuity" height="56">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button title text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="true" aria-controls="collapsefour">
                                        HAPPINESS
                                    </button>
                                </h2>
                            </div>
                            <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#what-we-do-item4">
                            <div class="accordion-body text-primary">
                                We invest in our teams wellbeing, creating  environments that nurtures happy developers. Happy Developers, sits at the core of our values. 
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="team-photo d-flex justify-content-center mt-7">
        <img src="{{ asset('assets/images/intro-pic.png') }}" alt="Team" class="d-md-block d-none img-fluid">
        <img src="{{ asset('assets/images/intro-pic-mobile.png') }}" alt="Team" class="d-md-none d-block w-100">
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h3 class="my-md-8 my-5">
                    We work with you to create the optimum solution that balances business goals, environmental and cultural factors to positively impact delivery.
                </h3>
                <div class="accordion accordion-flush border-top" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                <span>01</span>
                                <span class="ps-5">Assess</span>
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body px-md-7">
                                <p>
                                    <ul class="d-flex flex-column gap-3">
                                        <li>Understand what’s needed and why</li>
                                        <li>Determine a plan and timelines</li>
                                        <li>Define an approach to attracting and delivering the teams into the client partner programme</li>
                                    </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                <span>02</span>
                                <span class="ps-5">Build the team</span>
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body  px-md-7">
                                <p>
                                    <ul class="d-flex flex-column gap-3">
                                        <li>Selection and building the teams</li>
                                        <li>Establishing handshake between team members and the client partner teams</li>
                                        <li>Training, Onboarding and familiarisation</li>
                                    </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                <span>03</span>
                                <span class="ps-5">Mobilize</span>
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body  px-md-7">
                                <p>
                                    <ul class="d-flex flex-column gap-3">
                                        <li>Team welfare plan</li>
                                        <li>Systems and processes</li>
                                        <li>Ways of working. Communications plan</li>
                                        <li>Team governance</li>
                                        <li>Future and growth</li>
                                    </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center  my-md-7 my-5">
            <div class="col-lg-8 text-md-center text-start">
                <h2 class="mb-4">What this means for you</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-center mb-md-7 mt-md-0 py-0">
                    <img src="{{ asset('assets/images/map_v1.1.svg') }}" class="img-fluid" alt="map">
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="card card--primary-gradient mt-md-2 mb-md-7 my-5 d-flex flex-md-row flex-column justify-content-lg-between align-items-lg-center align-items-start  flex-row px-4 py-4 gap-3">
                    <img src="{{ asset('assets/images/marker-icon.svg') }}" alt="Marker">
                    <p class="text-primary mb-0 pe-lg-5">Our network of hubs in South America and Europe give us a global reach and capacity to work with client partners within their timezone and extend if required.</p>
                </div>
            </div>
        </div>
        @livewire('contact-form')
    </div>
@endsection

@section('footer')
    @include('common.components.frontend.footer')
@endsection
