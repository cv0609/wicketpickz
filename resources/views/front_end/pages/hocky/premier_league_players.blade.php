@extends('front_end.layout.main')
@section('content')

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
