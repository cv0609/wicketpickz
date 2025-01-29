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
                                    {{-- <img src="{{'assets/images/vs.png'}}" alt="" class="versace-icon"> --}}
                                    <img src="{{ asset('assets/images/vs.png') }}" alt="" class="versace-icon">
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

                            @foreach($matchPlayers as $player)

                            <li class="leagues_item" data-player-id="{{$player['player_id']}}" data-player-role="{{$player['position']}}" data-player-name="{{$player['name']}}" data-team-logo="{{$player['team_logo']}}" data-match-id="{{$matchDetails->id}}" data-team-name="testing" data-home-team="{{ $matchDetails->home_team_id }}" data-away-team="{{ $matchDetails->away_team_id }}" data-slug-matchid="{{ $matchDetails->id }}">
                                <div class="leagues_inner">
                                    <div class="leagues_head">
                                        <div class="leagues_headLogo">
                                            <img src="{{$player['team_logo']}}" alt="">
                                        </div>
                                    </div>
                                    <div class="leagues_body">
                                        <h2 class="leagues_bodyheading">
                                            {{$player['name']}}
                                        </h2>
                                        {{-- <p>xyz</p> --}}
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
                                                    <img src="{{$player['team_logo']}}">
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

                                            <button class="custom-btn plus player-toggle" data-event="plus">
                                                Add
                                            </button>
                                            <button class="custom-btn minus player-toggle d-none" data-event="minus">
                                                Remove
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="team-btns">
                    <a href="{{ route('my-team') }}" class="next-btn">Next</a>
                </div>
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

<script>
    $(document).ready(function() {

        var myTeam = @json(Session::get('myTeam', []));
        // Iterate over each player list item and check if the player exists in the session data
        $('.leagues_item').each(function() {
            var $li = $(this);
            var leagueId = "{{$matchDetails->league->league_id}}"; // Assuming you have the leagueId available

            var teamId = $li.data('team-id');
            var playerId = $li.data('player-id');
            var playerRole = $li.data('player-role');
            var playerName = $li.data('player-name');

            // Check if the player exists in the session data
            var playerExists = myTeam.some(function(player) {
                return player.player_role == playerRole && player.player_name == playerName && player.league_id == leagueId;
            });

            // Toggle the Add/Remove buttons based on player existence
            if (playerExists) {
                $li.find('.plus').addClass('d-none'); // Hide the Add button
                $li.find('.minus').removeClass('d-none'); // Show the Remove button
            } else {
                $li.find('.plus').removeClass('d-none'); // Show the Add button
                $li.find('.minus').addClass('d-none'); // Hide the Remove button
            }
        });


        $('.next-btn').click(function(e) {
            e.preventDefault();

            var nextBtn = $(this);

            $.get("{{ route('current-team-count') }}", function(data, status) {
                if (data.success == true && data.count != 11) {
                    $("#error-message").html('Your team must have exactly 11 players.');
                    $("#errorModal2").modal('show');
                } else {
                    window.location.href = nextBtn.attr('href');
                }
            });
        });


        // Set CSRF token globally
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).on('click', '.player-toggle', function() {
            var $li = $(this).closest('li'); // Cache the closest li
            var button = $(this);
            var isPlus = button.hasClass('plus');

            var formData = {
                team_id: $li.data('team-id')
                , player_id: $li.data('player-id')
                , player_role: $li.data('player-role')
                , leagueId: "{{$matchDetails->league->league_id}}"
                , player_name: $li.data('player-name')
                , event: button.data('event')
                , team_logo: $li.data('team-logo')
                , match_id: $li.data('match-id')
                , team_name: $li.data('team-name')
                , homeTeamId: $li.data('home-team')
                , awayTeamId: $li.data('away-team')
                , dbMatchId: $li.data('slug-matchid')
            , };

            $.ajax({
                url: "{{ route('create-team') }}"
                , type: 'POST'
                , data: formData
                , success: function(response) {
                    if (response.success) {
                        button.addClass('d-none');
                        $li.find(isPlus ? '.minus' : '.plus').removeClass('d-none');
                        $li.toggleClass('select-player', isPlus);
                    } else {
                        $("#error-message").html(response.message);
                        $("#errorModal2").modal('show');
                    }
                }
                , error: function(xhr, status, error) {
                    console.error('Error:', error);
                }
            });
        });
    });

</script>


@endsection
