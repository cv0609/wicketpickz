@extends('front_end.layout.main')
@section('content')
<!-- banner section -->
<section class="hero-section d-flex justify-content-center align-items-center" id="section_1">

    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-6 col-12 mx-auto">

                <h1>Wicket Pickz Fantasy
                </h1>

                <a class="btn custom-btn smoothscroll me-2 mb-2" href="{{ route('leagues') }}"><strong>Play</strong></a>
            </div>

        </div>
    </div>

    <div class="hero-slides"></div>

</section>
<!--  -->
@if(!Auth::check())
<div class="bannerLogin">
    <div class="container">
        <div class="bannerLogin_wrapper">
            @if(Session::has('error'))
                <span class="alert alert-danger text-center" style="width: 746px;">{{ Session::get('error') }}</span>
                @endif
            <form action="{{ route('login.post') }}" method="post" class="">
                @csrf
                <label class="input_label">
                    Email
                    <input class="bannerLogin_input"type="Email" name="email" placeholder="Enter Your Email">
                    @error('email')
                            <span class="text-danger">{{ $message }}</span>
                    @enderror  
                </label>
                <label class="input_label">
                    Password
                    <input class="bannerLogin_input" type="password" name="password" placeholder="Enter Your Password">
                    @error('password')
                            <span class="text-danger">{{ $message }}</span>
                    @enderror 
                </label>
                <input type="submit" class="bannerLogin_submit custom-btn" value="Submit">
            </form>
        </div>
    </div>
</div>
@endif

<!-- join leageu section -->
<section class="joinleagues">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-l2 mx-auto text-center">
                <div class="joinleagues_content">
                    <h3 class="text-white">Create and join leagues
                    </h3>
                    <p class="text-white">Play against friends and family, or our community in private and public
                        leagues </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  Squad section -->
<section class="barista-section section-padding section-bg" id="barista-team">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-lg-12 col-12 text-center mb-4 pb-lg-2">
                <h2 class="text-white">Pick Your Squad
                </h2>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <div class="team-block-wrap">
                    <div class="team-block-info d-flex flex-column">
                        <div class="d-flex mt-auto mb-3">

                            <p class="badge ms-4"><em>Bowler</em></p>
                        </div>

                        <p class="text-white mb-0"> Your Bowler Squad.</p>
                    </div>

                    <div class="team-block-image-wrap">
                        <div class="team-block-image"></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <div class="team-block-wrap">
                    <div class="team-block-info d-flex flex-column">
                        <div class="d-flex mt-auto mb-3">


                            <p class="badge ms-4"><em>Batter</em></p>
                        </div>

                        <p class="text-white mb-0"> Your Batter Squad.</p>
                    </div>

                    <div class="team-block-image-wrap">
                        <div class="team-block-image team-block-image--batter"></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <div class="team-block-wrap">
                    <div class="team-block-info d-flex flex-column">
                        <div class="d-flex mt-auto mb-3">


                            <p class="badge ms-4"><em>Wicket</em></p>
                        </div>

                        <p class="text-white mb-0"> Your Wicket Squad.</p>
                    </div>

                    <div class="team-block-image-wrap">
                        <div class="team-block-image team-block-image--wicketkeeper"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Latest section -->
<section class="reviews-section section-padding section-bg" id="section_4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-12 text-center mb-4 pb-lg-2">
                <h2 class="text-white">Latest from our scouts
                </h2>
            </div>
            <div class="timeline">
                <div class="timeline-container timeline-container-left timeline-container--one">
                    <a href="playing-guide.html" class="timeline-content">
                        <div class="reviews-block">
                            <div class="reviews-block-image-wrap d-flex align-items-center">
                                <div class="reviews-block-image-wrap-image">
                                </div>

                            </div>


                        </div>
                    </a>
                </div>
                <div class="timeline-container timeline-container-right timeline-container--two">
                    <a href="playing-guide.html" class="timeline-content">
                        <div class="reviews-block">
                            <div class="reviews-block-image-wrap d-flex align-items-center">
                                <div class="reviews-block-image-wrap-image">

                                </div>

                            </div>


                        </div>
                    </a>
                </div>
                <div class="timeline-container timeline-container-left timeline-container--three">
                    <a href="playing-guide.html" class="timeline-content">
                        <div class="reviews-block">
                            <div class="reviews-block-image-wrap d-flex align-items-center">
                                <div class="reviews-block-image-wrap-image">
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- signup section -->
<section class="SignUp">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 mx-auto SignUp_sec">
                <h6 class="col-12 text-center  text-white">Register To Play Wicket Pickz Fantasy Today
                </h6>
                <p class="text-center text-white">With over 200,000 users weekly Wicket Pickz is the fastest growing
                    fantasy cricket platform
                </p>
                <form class="signup-form">
                    <input class="signup-input" type="email" placeholder="Enter Your Email">
                    <input type="submit" class="SignUp-btn custom-btn" value="Submit">
                </form>
            </div>
        </div>
    </div>
</section>
<!-- why shoose section -->
<section class="WhyChoose mt-4 mb-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-12 text-center mb-4 pb-lg-2">
                <h2 class="">Why Choose Us?
                </h2>
            </div>

            <div class="col-lg-4 col-md-6 col-12 text-center mb-4 pb-lg-2">
                <div class="WhyChoose-sec WhyChoose-sec--one">
                    <div class="WhyChoose-iconWrapp">
                        <div class="WhyChoose-icon"></div>
                    </div>
                    <div class="WhyChoose-content">
                        <h6 class="WhyChoose-title">User Experience</h6>
                        <p>
                            Our intuitive interface ensures that managing your fantasy cricket team is smooth,
                            enjoyable, and hassle-free, whether you're a beginner or a pro.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 text-center mb-4 pb-lg-2">
                <div class="WhyChoose-sec WhyChoose-sec--two">
                    <div class="WhyChoose-iconWrapp">
                        <div class="WhyChoose-icon"></div>
                    </div>
                    <div class="WhyChoose-content">
                        <h6 class="WhyChoose-title">Updates</h6>
                        <p>
                            Stay ahead of the game with live match updates, player performance tracking, and instant
                            leaderboard changes.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 text-center mb-4 pb-lg-2">
                <div class="WhyChoose-sec WhyChoose-sec--three">
                    <div class="WhyChoose-iconWrapp">
                        <div class="WhyChoose-icon"></div>
                    </div>
                    <div class="WhyChoose-content">
                        <h6 class="WhyChoose-title">Leagues</h6>
                        <p>
                            From casual contests to high-stakes leagues, we cater to all kinds of fantasy cricket
                            enthusiasts, offering something for everyone.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 text-center mb-4 pb-lg-2">
                <div class="WhyChoose-sec WhyChoose-sec--four">
                    <div class="WhyChoose-iconWrapp">
                        <div class="WhyChoose-icon"></div>
                    </div>
                    <div class="WhyChoose-content">
                        <h6 class="WhyChoose-title">Fair Play Guarantee</h6>
                        <p>
                            We prioritize transparency and fairness, ensuring all players have an equal chance to
                            compete and win.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 text-center mb-4 pb-lg-2">
                <div class="WhyChoose-sec WhyChoose-sec--five">
                    <div class="WhyChoose-iconWrapp">
                        <div class="WhyChoose-icon"></div>
                    </div>
                    <div class="WhyChoose-content">
                        <h6 class="WhyChoose-title">Player Stats</h6>
                        <p>
                            Access in-depth statistics, performance analytics, and expert tips to make informed
                            decisions for your team.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 text-center mb-4 pb-lg-2">
                <div class="WhyChoose-sec WhyChoose-sec--six">
                    <div class="WhyChoose-iconWrapp">
                        <div class="WhyChoose-icon"></div>
                    </div>
                    <div class="WhyChoose-content">
                        <h6 class="WhyChoose-title">Rewards</h6>
                        <p>
                            Win cash prizes, exclusive merchandise, and bragging rights by competing in our
                            thrilling fantasy leagues.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection()
