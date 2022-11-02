<!-- <nav class="navbar navbar-expand-lg navbar-light fixed-top py-lg-3 navbar-bakground">
    <div class="container-fluid px-4">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" width="100">
        </a>
        <div class="" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto">
            </ul>
            <div class="my-md-0 my-4">
                {{-- <a href="#contact-section" class="btn btn-outline-white rounded-pill w-100 d-none  px-6" id="nav-contact-btn">Contact Us</a> --}}
                @if(request()->path() == '/')
                    <a href="{{ route('join-us') }}" class="btn btn-primary-gradient rounded-pill w-100 px-5">Join us</a>
                @else
                    <a href="{{ route('home') }}" class="btn btn-primary-gradient rounded-pill w-100 px-5">Home</a>
                @endif
            </div>
        </div>
    </div>
</nav>
 -->
 <nav class="navbar navbar-expand-lg navbar-light fixed-top navbar-bakground">
  <div class="container">
    <a class="nav-link active text-white" aria-current="page" href="#">
      <img class="colibri-logo" src="{{ asset('assets/images/colibri-logo.png') }}" alt="Logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active text-white" aria-current="page" href="#"> Home</a>
        <a class="nav-link text-white" href="#what-we-do">What we do</a>
        <a class="nav-link text-white" href="#contact-section">Contact us</a>
      </div>
    </div>
  </div>
</nav>