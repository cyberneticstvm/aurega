@extends("base")
@section("content")
<!-- Google Maps -->
<div class="container-fluid p-0">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14441.857782445455!2d55.2611684!3d25.1875552!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f693560ad9fe9%3A0xdb3b467956c16a9a!2sAurega%20Group!5e0!3m2!1sen!2sin!4v1676375849520!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>		
</div>
<!-- end Google Maps -->
<!-- Contact section -->
<div class="section">
    <div class="container">
        <div class="row g-4">
            <div class="col-12 col-md-4">
                <div class="mb-4">
                    <h6 class="fw-medium m-0">Phone:</h6>
                    <p>+(971) 52 868 6158</p>
                    <p>+(971) 50 693 9558</p>
                </div>
                <div class="mb-4">
                    <h6 class="fw-medium m-0">Email:</h6>
                    <p>acs@auregagroup.com</p>
                </div>
                <div>
                    <h6 class="fw-medium m-0">Address:</h6>
                    <p>#1403, The Prism Tower, Business Bay, Dubai</p>
                </div>
            </div>
            <div class="col-12 col-md-8">
                <div class="contact-form text-md-end">
                    <!-- Submit result -->
                    <div class="submit-result mb-3">
                        @if(session()->has('success'))
                            <div class="text-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif
                        @if(session()->has('error'))
                            <div class="text-danger">
                                {{ session()->get('error') }}
                            </div>
                        @endif
                    </div>
                    <form method="post" action="{{ route('contact.email') }}">
                        @csrf
                        <div class="row gx-3 gy-0">
                            <div class="col-12 col-sm-6">
                                <input type="text" id="name" name="name" placeholder="Name" value="{{ old('name') }}">
                                @error('name')
                                <small class="text-danger">{{ $errors->first('name') }}</small>
                                @enderror
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="E-Mail">
                                @error('email')
                                <small class="text-danger">{{ $errors->first('email') }}</small>
                                @enderror
                            </div>
                        </div>
                        <input type="text" id="contact" name="contact" value="{{ old('contact') }}" placeholder="Contact Number">
                        @error('contact')
						<small class="text-danger">{{ $errors->first('contact') }}</small>
						@enderror
                        <input type="text" id="subject" name="subject" value="{{ old('subject') }}" placeholder="Subject">
                        @error('subject')
						<small class="text-danger">{{ $errors->first('subject') }}</small>
						@enderror
                        <textarea name="message" id="message" placeholder="Message">{{ old('message') }}</textarea>
                        @error('message')
						<small class="text-danger">{{ $errors->first('message') }}</small>
						@enderror
                        <button type="submit" class="button button-sm btn-submit btn-warnig mt-3" href="#">SUBMIT</button>
                    </form>                    
                </div>
            </div>
        </div><!-- end row -->
    </div><!-- end container -->
</div>
<!-- end Contact section -->
@endsection