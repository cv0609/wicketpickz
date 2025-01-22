@extends('front_end.layout.main')
@section('content')
<!--Leagues Pages Banner Section Start -->
<section class="pages-banner leagues-pages  bg-cover bg-no-repeat banner_matchesDtls">
    <div class="container">
        <div class="banner-content">
            <ul class="leagues-ul">
                <li class="inline-list home-list">
                    <h3>
                        <a href="./">Homepage</a>
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
            <h2 class="text-center heading-center">2025-26 Season</h2>

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

        <div class="tab-content-wrapper">
            <div class="toggle-target">
                <a href="#" class="tab active" data-toggle-target=".tab-content-1">Guard</a>
                <a href="#" class="tab" data-toggle-target=".tab-content-2">Forward</a>
                <a href="#" class="tab" data-toggle-target=".tab-content-3">Center</a>
            </div>

            <div class="tab-content tab-content-1 active">
                <div class="basket_leagues-inner-content basketball-header-main">
                    <div class="matches-list matches_details">

                        <ul class="match-details-items">
                            <li class="leagues_item">
                                <div class="leagues_inner">
                                    <div class="leagues_head">
                                        <div class="leagues_headLogo">
                                            <img src="assets/images/logo-cricket.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="leagues_body">
                                        <h2 class="leagues_bodyheading">
                                            Player Name
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
                            <li class="leagues_item">
                                <div class="leagues_inner">
                                    <div class="leagues_head">
                                        <div class="leagues_headLogo">
                                            <img src="assets/images/logo-cricket.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="leagues_body">
                                        <h2 class="leagues_bodyheading">
                                            Player Name
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
                            <li class="leagues_item">
                                <div class="leagues_inner">
                                    <div class="leagues_head">
                                        <div class="leagues_headLogo">
                                            <img src="assets/images/logo-cricket.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="leagues_body">
                                        <h2 class="leagues_bodyheading">
                                            Player Name
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
                        </ul>

                    </div>
                </div>
            </div>
            <div class="tab-content tab-content-2">
                <div class="basket_leagues-inner-content basketball-header-main">
                    <div class="matches-list matches_details">

                        <ul class="match-details-items">
                            <li class="leagues_item">
                                <div class="leagues_inner">
                                    <div class="leagues_head">
                                        <div class="leagues_headLogo">
                                            <img src="assets/images/logo-cricket.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="leagues_body">
                                        <h2 class="leagues_bodyheading">
                                            Player Name
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
                            <li class="leagues_item">
                                <div class="leagues_inner">
                                    <div class="leagues_head">
                                        <div class="leagues_headLogo">
                                            <img src="assets/images/logo-cricket.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="leagues_body">
                                        <h2 class="leagues_bodyheading">
                                            Player Name
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
                            <li class="leagues_item">
                                <div class="leagues_inner">
                                    <div class="leagues_head">
                                        <div class="leagues_headLogo">
                                            <img src="assets/images/logo-cricket.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="leagues_body">
                                        <h2 class="leagues_bodyheading">
                                            Player Name
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
                        </ul>

                    </div>
                </div>
            </div>
            <div class="tab-content tab-content-3">
                <div class="basket_leagues-inner-content basketball-header-main">
                    <div class="matches-list matches_details">
                        <ul class="match-details-items">
                            <li class="leagues_item">
                                <div class="leagues_inner">
                                    <div class="leagues_head">
                                        <div class="leagues_headLogo">
                                            <img src="assets/images/logo-cricket.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="leagues_body">
                                        <h2 class="leagues_bodyheading">
                                            Player Name
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
                            <li class="leagues_item">
                                <div class="leagues_inner">
                                    <div class="leagues_head">
                                        <div class="leagues_headLogo">
                                            <img src="assets/images/logo-cricket.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="leagues_body">
                                        <h2 class="leagues_bodyheading">
                                            Player Name
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
                        </ul>
                    </div>
                </div>
            </div>

        </div>

        <div class="team-btns text-center">
            <a href="team-view.html" class="next-btn">Next</a>
        </div>

    </div>
</div>
</div>
@endsection

@section('custom-script')

<script>
    $(document).ready(function () {

        var myTeam = @json(Session::get('myTeam', []));

        $('.div-tbl tbody tr').each(function () {
            var row = $(this);
            var leagueId = "{{$matchDetails->league->league_id}}";

            // console.log(leagueId,'league_id');
            // console.log(myTeam,'myjson');

            var teamId = row.data('team-id');
            var playerId = row.data('player-id');
            var playerRole = row.data('player-role');
            var playerName = row.data('player-name');

            var playerExists = myTeam.some(function (player) {
                return player.team_id == teamId && player.player_id == playerId && player
                    .player_role == playerRole && player.player_name == playerName && player
                    .league_id == leagueId;
            });

            if (playerExists) {
                row.find('.plus').addClass('d-none');
                row.find('.minus').removeClass('d-none');
            } else {
                row.find('.plus').removeClass('d-none');
                row.find('.minus').addClass('d-none');
            }
        });

        $('.next-btn').click(function (e) {
            e.preventDefault();

            var nextBtn = $(this);

            $.get("{{ route('current-team-count') }}", function (data, status) {
                if (data.success == true && data.count != 11) {
                    $("#error-message").html('Your team must have exactly 11 players.');
                    $("#errorModal2").modal('show');
                } else {
                    window.location.href = nextBtn.attr('href');
                }
            });
        });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).on('click', '.player-toggle', function () {

            var team_id = $(this).closest('tr').data('team-id');
            var player_id = $(this).closest('tr').data('player-id');
            var player_role = $(this).closest('tr').data('player-role');
            var leagueId = "{{$matchDetails->league->league_id}}";
            var player_name = $(this).closest('tr').data('player-name');
            var team_logo = $(this).closest('tr').data('team-logo');
            var match_id = $(this).closest('tr').data('match-id');
            var team_name = $(this).closest('tr').data('team-name');
            var homeTeamId = $(this).closest('tr').data('home-team');
            var awayTeamId = $(this).closest('tr').data('away-team');
            var dbMatchId = $(this).closest('tr').data('slug-matchid');

            var button = $(this); // Store reference to the clicked button
            var isPlus = button.hasClass('plus'); // Check if the clicked button is a "plus" button
            var event = $(this).data('event');
            var formData = {
                team_id: team_id,
                player_id: player_id,
                player_role: player_role,
                leagueId: leagueId,
                player_name: player_name,
                event: event,
                team_logo: team_logo,
                match_id: match_id,
                team_name: team_name,
                homeTeamId: homeTeamId,
                awayTeamId: awayTeamId,
                dbMatchId: dbMatchId,
            };

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: "{{ route('create-team') }}",
                type: 'POST',
                data: formData,
                success: function (response) {
                    if (response.success == true) {
                        if (isPlus) {
                            button.addClass('d-none');
                            button.closest('td').find('.minus').removeClass('d-none');
                            button.parent('td').parent('tr').addClass('select-player');
                        } else {
                            button.addClass('d-none');
                            button.closest('td').find('.plus').removeClass('d-none');
                            button.parent('td').parent('tr').removeClass('select-player');

                        }
                    } else {
                        $("#error-message").html(response.message);
                        $("#errorModal2").modal('show');

                    }
                },
                error: function (xhr, status, error) {
                    console.error('Error:', error);
                }
            });
        });



    });

</script>


@endsection
