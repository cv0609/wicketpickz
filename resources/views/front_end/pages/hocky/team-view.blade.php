@extends('front_end.layout.main')
@section('title', 'Our Team')
@section('content')

<div class="basket_leagues my-team-page cricket_leagues">
    <div class="container">
        <div class="basket_leagues-inner">
            <div class="back-btn">
                <a href="{{ route('matche-detail',['matcheId'=>$myTeam[0]['dbMatchId']]) }}">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#fff">
                        <path d="M360-240 120-480l240-240 56 56-144 144h568v80H272l144 144-56 56Z"></path>
                    </svg>
                </a>
            </div>
            <h2 class="text-center leagues_heading">Season {{ date('Y').'-'.(date('Y') + 1) }}</h2>

            <div class="team-view-sec">
                <div class="team-view-header">
                    <h4>
                        Choose Your Captain and Vice Captain
                    </h4>
                    <ul>
                        <li>
                            <span class="c-logo"> C </span>
                            <div class="c-details">
                                <h6>Captain Gets</h6>
                                <p>2X (Double Points)</p>
                            </div>
                        </li>
                        <li>
                            <span class="c-logo"> VC </span>
                            <div class="c-details">
                                <h6>Vice-Captain Gets</h6>
                                <p>1.5X (Double Points)</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- team view section -->
            <section class="team_view">
                <div class="container">
                    <div class="team_viewWrapp">
                        <div class="team_viewinner">
                            @foreach ($myTeam as $item)
                            <div class="team_viewSelect">
                                <div class="team_viewHead">
                                    <div class="team_viewHeadIcon">
                                        <img src="{{$item['team_logo']}}" alt="logo cricket">
                                    </div>

                                </div>
                                <div class="team_viewbody">
                                    <h3 class="team_viewbody_heading">
                                        {{-- {{$myTeam['player_name']}} --}}
                                    </h3>
                                    {{-- <p>xyz</p> --}}
                                </div>

                                <div class="team_viewTeamFtr">
                                    <div class="team_viewTeam team_viewSec">
                                        <h4>Team</h4>
                                        <div class="team_viewTeamIcon">
                                            <img src="{{$item['team_logo']}}" alt="team logo">
                                        </div>
                                    </div>

                                    <div class="team_viewName team_viewSec">
                                        <h4>Player</h4>
                                        <p>{{$item['player_name']}}</p>
                                    </div>
                                    <div class="team_viewcaptain team_viewSec team_captain" 
                                    data-league_id="{{ $item['league_id'] }}"
                                    data-match_id="{{ $item['match_id'] }}"
                                    data-already_captain="{{ $item['already_captain'] ?? '' }}"
                                    data-player_name="{{ $item['player_name'] ?? '' }}">
                                        <h4>Captain</h4>
                                        {{-- <button class="plus player-toggle">
                                                <i class="fa-solid fa-plus"></i>
                                            </button>
                                            <button class="minus player-toggle d-none">
                                                <i class="fa-solid fa-minus"></i>
                                            </button> --}}

                                        <button class="plus player-toggle captain-plus" data-event="cap_plus">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <button class="minus player-toggle d-none captain-minus" data-event="cap_minus">
                                            <i class="fa-solid fa-minus"></i>
                                        </button>

                                    </div>
                                    <div class="team_viewVCcaptain team_viewSec team_captain" 
                                    data-league_id="{{ $item['league_id'] }}"
                                    data-match_id="{{ $item['match_id'] }}" 
                                    data-already_vice_captain="{{ $item['already_vice_captain'] ?? '' }}"
                                    data-player_name="{{ $item['player_name'] ?? '' }}">
                                        <h4>Voice Captain</h4>
                                        {{-- <button class="plus player-toggle">
                                                <i class="fa-solid fa-plus"></i>
                                            </button>
                                            <button class="minus player-toggle d-none">
                                                <i class="fa-solid fa-minus"></i>
                                            </button> --}}

                                        {{-- <button class="plus player-toggle captain-plus" data-event="cap_plus">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <button class="minus player-toggle d-none captain-minus" data-event="cap_minus">
                                            <i class="fa-solid fa-minus"></i>
                                        </button> --}}

                                        <button class="plus player-toggle vice-cap-plus" data-event="vice_plus">
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                        </button>
                                        <button class="minus player-toggle d-none vice-cap-minus" data-event="vice_minus">
                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                        </button>


                                    </div>
                                </div>

                            </div>
                            @endforeach

                        </div>

                    </div>
                </div>
            </section>
            <div class="team-btns text-center">
                <a href="#" id="save-team-btn" class="next-btn">Save</a>
            </div>
        </div>
    </div>
</div>

<div class="alert-msg">
    <div class="modal fade" id="capModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <h4 id="cap-message"></h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="cap-ok" data-bs-dismiss="modal">ok</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- alert- login msg popup start -->
<div class="alert-msg">
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <h4 id="login-message"></h4>
                </div>
                <div class="modal-footer">
                    <button type="button" id="login-click" class="btn btn-secondary" data-bs-dismiss="modal">Login</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('custom-script')
<script>
    $(document).ready(function() {
        var myTeam = @json($myTeam);

        $('.team_viewSelect').each(function() {
            var row = $(this);
            var isCaptain = row.find('.team_viewcaptain').data('already_captain');
            var isViceCaptain = row.find('.team_viewVCcaptain').data('already_vice_captain');

            // Toggle captain buttons
            if (isCaptain) {
                row.find('.captain-plus').addClass('d-none');
                row.find('.captain-minus').removeClass('d-none');
            } else {
                row.find('.captain-plus').removeClass('d-none');
                row.find('.captain-minus').addClass('d-none');
            }

            // Toggle vice-captain buttons
            if (isViceCaptain) {
                row.find('.vice-cap-plus').addClass('d-none');
                row.find('.vice-cap-minus').removeClass('d-none');
            } else {
                row.find('.vice-cap-plus').removeClass('d-none');
                row.find('.vice-cap-minus').addClass('d-none');
            }
       });

        // Set CSRF token globally
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).on('click', '.player-toggle', function() {
            var button = $(this);

            var league_id = button.closest('.team_viewSec').data('league_id');
            var match_id = button.closest('.team_viewSec').data('match_id');
            // var team_id = button.closest('.team_viewSec').data('team_id');
            // var player_id = button.closest('.team_viewSec').data('player_id');

            // Prevent more than one captain or vice-captain being selected
            if (button.hasClass('captain-plus')) {
                var visibleMinusCount = $('.captain-minus').not('.d-none').length;
                console.log(visibleMinusCount, 'visibleMinusCount');
                if (visibleMinusCount >= 1) {
                    $("#cap-message").html("Captain already selected.");
                    $("#capModal").modal('show');
                    return false;
                }
            }

            if (button.hasClass('vice-cap-plus')) {
                var vicevisibleMinusCount = $('.vice-cap-minus').not('.d-none').length;
                console.log(vicevisibleMinusCount, 'vicevisibleMinusCount');
                if (vicevisibleMinusCount >= 1) {
                    $("#cap-message").html("Vice Captain already selected.");
                    $("#capModal").modal('show');
                    return false;
                }
            }

            var event = $(this).data('event');
            var formData = {
                event: event
                , league_id: league_id
                , match_id: match_id
                    // , team_id: team_id
                    // , player_id: player_id
            , };

            // Send request to make captain or vice-captain
            $.ajax({
                url: "{{ route('make.captain') }}"
                , type: 'POST'
                , data: formData
                , success: function(response) {
                    // Toggle plus and minus buttons based on event
                    if (event === 'cap_plus') {
                        button.addClass('d-none');
                        button.closest('.team_viewSec').find('.captain-minus').removeClass('d-none');
                    } else if (event === 'cap_minus') {
                        button.addClass('d-none');
                        button.closest('.team_viewSec').find('.captain-plus').removeClass('d-none');
                    }

                    if (event === 'vice_plus') {
                        button.addClass('d-none');
                        button.closest('.team_viewSec').find('.vice-cap-minus').removeClass('d-none');
                    } else if (event === 'vice_minus') {
                        button.addClass('d-none');
                        button.closest('.team_viewSec').find('.vice-cap-plus').removeClass('d-none');
                    }
                }
                , error: function(xhr, status, error) {
                    console.error('Error:', error);
                }
            });
        });

        // Handle the Save button click
        $('#save-team-btn').on('click', function(e) {
            e.preventDefault();

            $.ajax({
                url: "{{ route('auth.check') }}"
                , method: 'GET'
                , headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
                , success: function(data) {

                    if (data.captain != true) {
                        var flashMessage = "Please select a captain.";
                        $("#cap-message").html(flashMessage);
                        $("#capModal").modal('show');
                        return false;
                    } else if (data.vice_captain != true) {
                        var flashMessage = "Please select a vice captain.";
                        $("#cap-message").html(flashMessage);
                        $("#capModal").modal('show');
                        return false;
                    } else if (data.error == false) {
                        var flashMessage = "You need to log in before making a team.";
                        $("#login-message").html(flashMessage)
                        $("#loginModal").modal('show');
                    } else {
                        window.location.href = "{{ route('save-team') }}";
                    }
                }
            });
        });

        $('#login-click').on('click', function() {
            window.location.href = "{{ route('login') }}";
        })

    });

</script>

@endsection
