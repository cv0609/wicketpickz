@extends('front_end.layout.main')
@section('content')

@php
    $players = [];
    if(isset($teams) && !empty($teams)){

        $players = $teams[0]->teamDetails;
    }
@endphp


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


<!-- Leagues Content Section Start -->
<section class="basket_leagues match-details-page  match-details">
    <div class="container">
        <div class="basket_leagues-inner">
            <div class="back-btn">
                <a href="my-matches" class="back-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#fff">
                        <path d="M360-240 120-480l240-240 56 56-144 144h568v80H272l144 144-56 56Z" />
                    </svg>
                </a>
            </div>
            <!-- Component Start -->
            <h1 class="text-center heading-center">
                My Players
            </h1>

            <ul>
                <li class="matches_item">
                    <a href="match-details.html" class="matches_link">
                        <div class="matches_head">
                            <span class="tournament-name">{{$leagues->name ?? ''}}</span>
                            <span class="stadium-name">{{$leagues->country_name ?? ''}}</span>
                        </div>
                        <div class="Matches_body">
                            <div class="schedule-stats">
                                <div class="single-team">
                                    <div class="team-icon">
                                        <img src="{{$matchDetails->home_team_logo ?? ''}}" alt="">
                                    </div>
                                    <span class="team-name">{{$matchDetails->home_team_name ?? ''}}</span>
                                </div>
                                <div class="date-times-vs">
                                    {{-- <span class="time"><i class="fa-regular fa-clock"></i> 09:00 AM</span>
                                    <span class="date">24 Nov SAT, 2025</span> --}}
                                    <span class="date">{{ date('Y-m-d h:i a',strtotime($matchDetails->fixture_date ?? ''))}}</span>
                                    <img src="assets/images/vs.png" alt="" class="versace-icon">
                                </div>
                                <div class="single-team">
                                    <div class="team-icon">
                                        <img src="{{$matchDetails->away_team_logo ?? ''}}" alt="">
                                    </div>
                                    <span class="team-name">{{$matchDetails->away_team_name ?? ''}}</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>

            <section class="match_details">
                <div class="container">
                    <div class="match_details-wrapper">
                        <ul class="match_detailsInner">

                            @foreach($players as $player)

                            <li class="leagues_item">
                                <div class="leagues_inner">
                                    <div class="leagues_head">
                                        <div class="leagues_headLogo">
                                            <img src="{{$player['player_team_logo']}}" alt="">
                                        </div>
                                    </div>
                                    <div class="leagues_body">
                                        <h2 class="leagues_bodyheading">
                                            {{$player['player_name']}}
                                        </h2>
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
                                                    <img src="{{$player['player_team_logo']}}">
                                                </div>
                                            </div>
                                            <div class="leagues_ftrInnerEnd leagues_ftrInnersec">
                                                <h3>Age</h3>
                                                <p>-</p>
                                            </div>
                                            <div class="leagues_ftrInnerEnd leagues_ftrInnersec">
                                                <h3>Injured</h3>
                                                <p>No</p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                {{-- <div class="team-btns">
                    <a href="{{ route('my-team') }}" class="next-btn">Next</a>
                </div> --}}
            </section>


            <!-- Component End  -->
        </div>
    </div>

    <div class="alert-msg">
        <div class="modal fade" id="errorModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#d30f0f">
                                <path d="M480-280q17 0 28.5-11.5T520-320q0-17-11.5-28.5T480-360q-17 0-28.5 11.5T440-320q0 17 11.5 28.5T480-280Zm-40-160h80v-240h-80v240Zm40 360q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" /></svg>
                        </span>
                        <h4 id="error-message"></h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ok</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('custom-script')




@endsection
