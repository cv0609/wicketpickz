@extends('front_end.layout.main')
@section('title', 'Contact Us')
@section('content')
<!-- banner section -->
<div class="banner banner--contact">
    <div class="container">
        <div class="banner_wrapper">
            <div class="banner_contnet">
                <h2 class="banner-heading text-white">Contact Us
                </h2>
                <p class="banner_desc text-white">
                    At <strong>Wicket Pickz</strong>, we’re here to assist you with any questions, feedback, or
                    concerns. Whether you're a first-time user or a seasoned fantasy cricket player, our support
                    team is ready to help you make the most of your experience.
                </p>
            </div>
        </div>
    </div>
</div>

<section class="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-12 mx-auto">
                <h3 class="info_heading">Reach Out to Us</h3>
                <p class="info_desc">If you need assistance, please feel free to contact us through the following:
                </p>
                <h4 class="info_subHeading">Email Support</h4>
                <p class="info_desc"> <a href="mailto:info@wicketPickz.com"> info@wicketPickz.com</a></p>
                <ul class="info_list">
                    <li class="info_item">
                        Our team typically responds within 24-48 hours.
                    </li>
                    <li class="info_item">
                        For faster assistance, please include as much detail as possible, such as your username,
                        contest name, and the nature of your query.
                    </li>
                </ul>

                <div class="contact_inner">
                    <div class="contact_right">
                        <div class="contact_content">
                            <h3 class="contact_heading">Contact Form
                            </h3>
                            <p class="contact_desc">
                                For your convenience, we also offer a simple contact form. Just fill out the
                                following details, and we’ll get back to you shortly:
                            </p>
                            @if(Session::has('success'))
                                <span class="text-center" style="color: green">{{ Session::get('success') }}</span>
                            @endif
                            <form class="contact_form" action="{{ route('contact.save') }}" method="post" id="contactForm">
                                @csrf
                                <label class="contact_label">
                                    Your Name
                                    <input class="contact_input" name="name" id="name" type="text" value="{{ old('name') }}" placeholder="Your Name">
                                </label>
                                <p class="text-danger d-none" id="nameError"></p>
                                <label class="contact_label">
                                    Email Address
                                    <input class="contact_input" type="email" placeholder="Email Address" name="email" id="email" value="{{ old('email') }}">
                                   
                                </label>
                                <p class="text-danger d-none" id="emailError"></p>
                                <label class="contact_label">
                                    Subject
                                    <input class="contact_input" type="text"
                                        placeholder="Subject" name="subject" id="subject" value="{{ old('subject') }}">
                                    </label>
                                    <p class="text-danger d-none" id="subjectError"></p>
                                <label class="contact_label">
                                    Message
                                    <textarea class="input_textarea" placeholder="Message" name="message" id="message">{{ old('message') }}</textarea>

                                </label>
                                <p class="text-danger d-none" id="messageError"></p>
                                {{-- <div class="g-recaptcha" data-sitekey={{env('RECAPTCHA_SITE_KEY')}}></div>

                                @error('g-recaptcha-response')
                                 <span class="text-danger">{{ $message }}</span>
                                @enderror --}}
                                <button type="button" id="contact-btn" class="custom-btn contact_btn">Submit</button>
                                {{-- <input class="custom-btn contact_btn" type="button" value="Submit"> --}}
                            </form>
                       <p class="mt-3">
                    Simply submit the form on our website, and our support team will reach out as soon as possible.

                          </p>
                        </div>
                    </div>
                    <div class="contact_left">
                        <div class="contact_leftImg">

                        </div>
                    </div>
                </div>

                <h2 class="contact_heading info_heading">How We Handle Your Queries</h2>
                <ul class="contact-list info_list">
                    <li class="contact_item info_item">
                        <strong>General Inquiries:</strong> Questions about how to use the platform, join contests,
                        or view results.
                    </li>
                    <li class="contact_item info_item">
                        <strong>Technical Support:</strong> Assistance with login issues, errors, or technical
                        glitches.
                    </li>
                    <li class="contact_item info_item">
                        <strong> Feedback & Suggestions:</strong> Share your thoughts on how we can improve Wicket
                        Pickz.
                    </li>
                    <li class="contact_item info_item">
                        <strong>Contest Issues:</strong> Any concerns regarding scoring, points, or contests.
                    </li>

                </ul>
                <h4 class="info_subHeading">Your Feedback Matters
                </h4>
                <p class="info_desc">We love hearing from our users! Your insights and suggestions play a vital role in
                    helping us
                    make Wicket Pickz even better.
                </p>
                <p class="info_desc">For regular updates, tips, and community interactions, follow us on social media.
                </p>
            </div>

        </div>
    </div>

</section>

@endsection


@section('custom-script')

<script>
    $(document).ready(function () {
        // var response = 'You have to complete the CAPTCHA.';
        // @if($errors->has('g-recaptcha-response'))
        //     $('#captchaModal').modal('show');
        //     $('#cap-message').text(response);
        // @endif


        $('#contact-btn').on('click', function() {
            var valid = true;

            $('.text-danger').addClass('d-none').css('font-size','15px');

            if ($('#name').val().trim() === '') {
                $('#nameError').removeClass('d-none').text('Full name field is required.');
                valid = false;
            }

            var email = $('#email').val().trim();
            
            if($('#email').val().trim() === ''){
                $('#emailError').removeClass('d-none').text('Email field is required.');
                valid = false;
            }

            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if ($('#email').val().trim() != '' && !emailPattern.test(email)) {
                $('#emailError').removeClass('d-none').text('Please enter a valid email address.');
                valid = false;
            }

            if ($('#subject').val().trim() === '') {
                $('#subjectError').removeClass('d-none').text('Subject field is required.');
                valid = false;
            }

            if ($('#message').val().trim() === '') {
                $('#messageError').removeClass('d-none').text('Message field is required.');
                valid = false;
            }
            //  var recaptchaResponse = grecaptcha.getResponse();
            // if (recaptchaResponse.length === 0) {
            //     $('.g-recaptcha').after('<p class="text-danger">Please complete the reCAPTCHA.</p>');
            //     valid = false;
            // }

            if (valid) {
                $('#contactForm').submit();
            }
        });
    });
</script>


@endsection
