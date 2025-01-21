@extends('front_end.layout.main')
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
                            <form class="contact_form">
                                <label class="contact_label">
                                    Your Name
                                    <input class="contact_input" type="text" placeholder="Let us know who you are.">
                                </label>
                                <label class="contact_label">
                                    Email Address
                                    <input class="contact_input" type="email" placeholder="Provide a valid email">
                                </label>
                                <label class="contact_label">
                                    Subject
                                    <input class="contact_input" type="text"
                                        placeholder=" brief summary of your query or feedback">
                                </label>
                                <label class="contact_label">
                                    Message
                                    <textarea class="input_textarea" placeholder="all the relevant details"></textarea>
                                </label>
                                <input class="custom-btn contact_btn" type="submit" value="Submit">
                            </form>

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
