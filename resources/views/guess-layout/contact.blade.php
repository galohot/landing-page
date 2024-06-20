<section class="page-section" id="6">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="text-center col-lg-8 col-xl-6">
                <h2 class="mt-0">Get in touch with us</h2>
                <hr class="divider" />
                <p class="mb-5 text-muted">Tell us us what you need to know about IAF and MSP, we will get back to you as soon as possbile!</p>
            </div>
        </div>
        <div class="mb-5 row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-6">
                <form action="{{ route('contact.store') }}" method="POST" id="contactForm">
                    @csrf
                    <!-- Name input-->
                    <div class="mb-3 form-floating">
                        <input class="form-control" name="fullname" id="name" type="text"
                            placeholder="Enter your name..." data-sb-validations="required" />
                        <label for="name">Full name</label>
                        <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                    </div>
                    <!-- Email address input-->
                    <div class="mb-3 form-floating">
                        <input class="form-control" name="email" id="email" type="email"
                            placeholder="name@example.com" data-sb-validations="required,email" />
                        <label for="email">Email address</label>
                        <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                        <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                    </div>
                    <!-- Phone number input-->
                    <div class="mb-3 form-floating">
                        <input class="form-control" name="phone" id="phone" type="tel"
                            placeholder="(123) 456-7890" data-sb-validations="required" />
                        <label for="phone">Phone number</label>
                        <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.
                        </div>
                    </div>
                    <!-- Message input-->
                    <div class="mb-3 form-floating">
                        <textarea class="form-control" name="message" id="message" type="text" placeholder="Enter your message here..."
                            style="height: 10rem" data-sb-validations="required"></textarea>
                        <label for="message">Message</label>
                        <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                    </div>
                    <!-- Validation Errors -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Success Message -->
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- Submit Button-->
                    <div class="d-grid"><button class="btn btn-primary btn-xl" type="submit">Submit</button></div>
                </form>

            </div>
        </div>
        {{-- <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="mb-5 text-center col-lg-4 mb-lg-0">
                <i class="mb-3 bi-phone fs-2 text-muted"></i>
                <div>+1 (555) 123-4567</div>
            </div>
        </div> --}}
    </div>
</section>
