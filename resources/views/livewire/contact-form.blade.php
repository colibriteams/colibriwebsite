<div class="row justify-content-center" id="contact-section">
    <div class="col-lg-9">
        @if($type == 'job-updates')
            <h2 class="mb-5 mt-3 text-md-center">Get the latest job updates</h2>
        @else
            <h1 class="mb-5 mt-3">Contact Us</h1>
        @endif
        @if ($success)
            <div class="alert alert-success rounded-4 px-4 d-flex gap-3 align-items-center">
                <img src="{{ asset('assets/images/success_icon.svg')  }}" width="30">
                {{ $success  }}
            </div>
        @endif
        <form wire:submit.prevent="contactFormSubmit" action="/contact" method="POST">
            @csrf
            <div class="row g-4">
                <div class="col-lg-6">
                    <input wire:model="name" name="name" value="{{ old('name') }}" type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name">
                    @error('name')
                        <div class="invalid-feedback"> {{ $message  }} </div>
                    @enderror
                </div>
                <div class="col-lg-6">
                    <input wire:model="email" name="email" value="{{ old('email') }}" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email">
                    @error('email')
                        <div class="invalid-feedback"> {{ $message  }} </div>
                    @enderror
                </div>
                {{-- Hidden on job updates form --}}
                <div class="col-lg-12 @if($type == 'job-updates') d-none  @endif">
                    <input wire:model="organization" name="organization" value="{{ old('organization') }}" type="text" class="form-control @error('organization') is-invalid @enderror" placeholder="Organization">
                    @error('organization')
                        <div class="invalid-feedback"> {{ $message  }} </div>
                    @enderror
                </div>
                {{-- Hidden on job updates form --}}
                <div class="col-lg-12 @if($type == 'job-updates') d-none  @endif">
                    <textarea wire:model="message" name="message" value="{{ old('message') }}" rows="4" placeholder="Message" class="form-control @error('message') is-invalid @enderror"></textarea>
                    @error('message')
                        <div class="invalid-feedback"> {{ $message  }} </div>
                    @enderror
                </div>
                <x-honey />
                <x-honey recaptcha/>
                 @if ($danger)
                    <div class="col-12">
                        <div class="alert alert-danger rounded-4 px-4 d-flex gap-3 align-items-center">
                            {{ $danger  }}
                        </div>
                    </div>
                @endif
                <div class="col-lg-12 @if($type == 'job-updates') text-center  @endif">
                    <button class="btn btn-primary-gradient btn-mobile-block rounded-pill px-6 fw-bold mt-md-0 mt-3 " type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
