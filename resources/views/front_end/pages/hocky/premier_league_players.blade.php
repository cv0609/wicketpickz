@extends('front_end.layout.main')
@section('content')
<!--Leagues Pages Banner Section Start -->
<section class="pages-banner leagues-pages  bg-cover bg-no-repeat banner_matchesDtls">
    <div class="container">
        <div class="banner-content">
            <ul class="leagues-ul">
                <li class="inline-list home-list">
                    <h3>
                        <a href="{{ route('home') }}">Homepage</a>
                    </h3>
                </li>
                <li class="inline-list next-page-list">
                    <h3>
                        Matches details
                    </h3>
                </li>
            </ul>
        </div>
    </div>
</section>
<!--Leagues Pages Banner Section End -->
<!-- Leagues Content Section Start -->
<div class="basket_leagues matches-detail">
    <div class="container">
        <div class="basket_leagues-inner">
            <div class="back-btn">
                <a href="matches">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                        fill="#fff">
                        <path d="M360-240 120-480l240-240 56 56-144 144h568v80H272l144 144-56 56Z"></path>
                    </svg>
                </a>
            </div>
            <h2 class="text-center heading-center">{{ date('Y').'0'.(date('Y') + 1) }} Season</h2>

            <ul>
                <li class="matches_item">
                    <div class="matches_link">
                        <div class="matches_head">
                            <span class="tournament-name">Cricket World Cup</span>
                            <span class="stadium-name">Tottenham Hotspur Stadium, london</span>
                        </div>
                        <div class="Matches_body">
                            <div class="schedule-stats">
                                <div class="single-team">
                                    <div class="team-icon">
                                        <img src="assets/images/logo-cricket.jpg" alt="">
                                    </div>
                                    <span class="team-name">India</span>
                                </div>
                                <div class="date-times-vs">
                                    <span class="time"><i class="fa-regular fa-clock"></i> 09:00 AM</span>
                                    <span class="date">24 Nov SAT, 2025</span>
                                    <img src="assets/images/vs.png" alt="" class="versace-icon">
                                </div>
                                <div class="single-team">
                                    <div class="team-icon">
                                        <img src="assets/images/logo-cricket.jpg" alt="">
                                    </div>
                                    <span class="team-name">England</span>
                                </div>
                            </div>
                        </div>
                    </div>
            </ul>
        </div>

        <div class="matches-list matches_details pb-5">
            <ul class="match-details-items">
                @foreach($players as $player)
                <li class="leagues_item">
                    <div class="leagues_inner">
                        <div class="leagues_head">
                            <div class="leagues_headLogo">
                                <img src="assets/images/logo-cricket.jpg" alt="">
                            </div>
                        </div>
                        <div class="leagues_body">
                            <h2 class="leagues_bodyheading">
                                {{ $player->name }}
                            </h2>
                            <p>xyz</p>
                        </div>
                        <div class="leagues_ftr">
                            <div class="leagues_ftrinner">
                                <div class="leagues_ftrInnertype leagues_ftrInnersec">
                                    <h3>Selected By</h3>
                                    <p>League</p>
                                </div>
                                <div class="leagues_ftrInnerstart leagues_ftrInnersec">
                                    <h3>Team</h3>
                                    <div class="leagues_ftrInnersecIcon">
                                        <img src="assets/images/logo-cricket.jpg">
                                    </div>
                                </div>
                                <div class="leagues_ftrInnerEnd leagues_ftrInnersec">
                                    <h3>Age</h3>
                                    <p>12</p>
                                </div>
                                <div class="leagues_ftrInnerEnd leagues_ftrInnersec">
                                    <h3>Injured</h3>
                                    <p>No</p>

                                </div>
                                <button class="custom-btn">
                                    Add
                                </button>
                                <button class="custom-btn d-none">
                                    Remove
                                </button>
                            </div>

                        </div>
                    </div>
                </li>
                @endforeach
            </ul>

            <div class="team-btns text-center">
                <a href="team-view.html" class="next-btn">Next</a>
            </div>
        </div>



    </div>
</div>
</div>
@endsection

@section('custom-script')




@endsection
