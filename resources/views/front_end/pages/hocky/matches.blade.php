@extends('front_end.layout.main')
@section('content')
<!--Leagues Pages Banner Section Start -->
<section class="pages-banner leagues-pages bg-cover bg-no-repeat banner banner_matches">
    <div class="container">
        <div class="banner-content banner-content">
            <ul class="leagues-ul">
                <li class="inline-list home-list">
                    <h3>
                        <a href="{{ route('home')}}">Home</a>
                    </h3>
                </li>
                <li class="inline-list next-page-list">
                    <h3>Matches</h3>
                </li>
            </ul>
        </div>
    </div>
</section>

<!-- matches section -->
<section class="basket_leagues matches">
    <div class="container">
        <div class="basket_leagues-inner">
            <div class="back-btn">
                <a href="{{ route('leagues') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                        fill="#fff">
                        <path d="M360-240 120-480l240-240 56 56-144 144h568v80H272l144 144-56 56Z"></path>
                    </svg>
                </a>
            </div>
            <h2 class="text-center">{{ date('Y').'-'.(date('Y') - 1) }} Season</h2>

        </div>
    </div>
</section>

<!-- Mactes section -->
<section class="matches">
    <div class="container">
        <div class="matches_wrapper">
            <div class="matches_inner">  
            <h2 class="leagues_heading pb-5 text-center">
                Season 2025-26
            </h2>
                <ul class="matches_list">
                @foreach ($matches as $key => $matche)
                @php
                $startSoonMatch = getMatchStatus($matche->fixture_date);
                @endphp
                    <li class="matches_item matche-main"  data-fixture-id="{{ $matche->id}}"  data-home-team="{{ $matche->home_team_id }}" data-away-team="{{ $matche->away_team_id }}">
                        <a href="{{ route('matche-detail',['matcheId'=>$matche->id]) }}" class="matches_link">
                            <div class="matches_head">
                                <span class="tournament-name">{{$matche->venue_name}}</span>
                                <span class="stadium-name">{{$matche->venue_city}}</span>
                            </div>
                            <div class="Matches_body">
                                <div class="schedule-stats">
                                    <div class="single-team">
                                        <div class="team-icon">
                                            <img src="{{$matche->home_team_logo}}" alt="">
                                        </div>
                                        <span class="team-name">{{ $matche->home_team_name }}</span>
                                    </div>
                                    <div class="date-times-vs">
                                        <span class="time"><i class="fa-regular fa-clock"></i> {{ date('A h:i a',strtotime($matche->fixture_date))}}</span>
                                        <span class="date">{{ date('Y-m-d',strtotime($matche->fixture_date))}}</span>
                                        <img src="{{ asset('assets/images/vs.png') }}" alt="" class="versace-icon">
                                    </div>
                                    <div class="single-team">
                                        <div class="team-icon">
                                            <img src="{{$matche->away_team_logo}}" alt="">
                                        </div>
                                        <span class="team-name">{{ $matche->away_team_name }}</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
               @endforeach
                 
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection
@section('custom-script')
<script>
    let table = new DataTable('#myTable');

</script>
@endsection
