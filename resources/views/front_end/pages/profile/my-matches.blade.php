@extends('front_end.layout.main')
@section('title', 'My Matches')
@section('content')

<div class="basket_leagues my-matches">
    <div class="container">
        <div class="basket_leagues-inner">
            <h2 class="text-center">My Matches</h2>
            <div class="my-matchesInner">
                <ul class="my-matchesList">

                    @foreach ($matches as $match)
                        <li class="matches_item">
                            <a href="javascript:void(0)" class="matches_link matche-main" data-fixture-id="{{ $match['id'] ?? ''}}" data-league-id="{{ $match['league_id'] ?? ''}}">
                                <div class="matches_head">
                                    <span class="tournament-name">{{$match['venue_name']}}</span>
                                    <span class="stadium-name">{{$match['venue_city']}}</span>
                                    {{-- <span class="tournament-name">{{$match['']}}</span>
                                    <span class="stadium-name">Tottenham Hotspur Stadium, london</span> --}}
                                </div>
                                <div class="Matches_body">
                                    <div class="schedule-stats">
                                        <div class="single-team">
                                            <div class="team-icon">
                                                {{-- <img src="assets/images/logo-cricket.jpg" alt=""> --}}
                                                <img src="{{$match['home_team_logo']}}" alt="">
                                            </div>
                                            {{-- <span class="team-name">India</span> --}}
                                            <span class="team-name">{{ $match['home_team_name'] }}</span>
                                        </div>
                                        <div class="date-times-vs">
                                            {{-- <span class="time"><i class="fa-regular fa-clock"></i> 09:00 AM</span>
                                            <span class="date">24 Nov SAT, 2025</span> --}}

                                            <span class="time"><i class="fa-regular fa-clock"></i> {{ date('A h:i a', strtotime($match['fixture_date'])) }}</span>
                                            <span class="date">{{ date('Y-m-d',strtotime($match['fixture_date']))}}</span>

                                            <img src="{{asset('assets/images/vs.png')}}" alt="" class="versace-icon">
                                        </div>
                                        <div class="single-team">
                                            <div class="team-icon">
                                                {{-- <img src="assets/images/logo-cricket.jpg" alt=""> --}}
                                                <img src="{{$match['away_team_logo']}}" alt="">
                                            </div>
                                            {{-- <span class="team-name">England</span> --}}
                                            <span class="team-name">{{ $match['away_team_name'] }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="matches_ftr">
                                    <div class="matches_ftrScores matches_ftrSec">
                                        <h4>Score</h4>
                                        <p>0</p>
                                    </div>
                                    <div class="matches_ftrStatus matches_ftrSec">
                                        <h4>Status </h4>
                                        <p>--</p>
                                    </div>
                                </div>

                            </a>
                        </li>
                    @endforeach
                    
                </ul>
            </div>

        </div>
    </div>
</div>

@section('custom-script')

<script>
   $(document).on('click', '.matche-main', function() {
        var matchId = $(this).data('fixture-id');
        var leagueId = $(this).data('league-id');
        var url = "{{ route('profile.match-detail', ['matchId' => ':matchId', 'leagueId' => ':leagueId']) }}";
        url = url.replace(':matchId', matchId).replace(':leagueId', leagueId);
        window.location.href = url;
    });
 </script>
 

@endsection
