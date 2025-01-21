@extends('front_end.layout.main')
@section('content')
  <!--Leagues Pages Banner Section Start -->
  <section class="pages-banner leagues-pages  bg-cover bg-no-repeat">
        <div class="container">
            <div class="banner-content">
                <ul class="leagues-ul">
                    <li class="inline-list home-list">
                        <h3>
                            <a href="{{ route('home') }}">Page D'accueil</a>
                        </h3>
                    </li>
                    <li class="inline-list next-page-list">
                        <h3>
                            Détails des matchs
                        </h3>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--Leagues Pages Banner Section End -->

    <!-- Leagues Content Section Start -->

    <section class="ice-leagues match-details  matches-details">
        <div class="container">
            <div class="ice-leagues-inner">
                <div class="back-btn">
                    <a href="{{ route('leagueMatches',['leagueId'=>$matchDetails->league_id]) }}">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                            fill="#000">
                            <path d="M360-240 120-480l240-240 56 56-144 144h568v80H272l144 144-56 56Z"></path>
                        </svg>
                    </a>
                </div>
                <h2>{{date('Y')}} Season </h2>

                <div class="plyr-headr">
                    <div class="team-logo">
                        <div class="team_inner">
                        <img src="{{$matchDetails->home_team_logo}}" alt="team-logo-4">
                            <!-- <span>LM</span> -->
                        </div>
                        <h6>{{$matchDetails->home_team_name}}</h6>
                    </div>
                    <div class="match-details">
                        <!-- <h6>Accor Arena</h6>
                        <p>France</p> -->
                        <span>{{ date('Y-m-d h:i a',strtotime($matchDetails->fixture_date))}}</span>
                    </div>
                    <div class="team-logo">
                        <div class="team_inner">
                            <!-- <span>NHL</span> -->
                            <img src="{{$matchDetails->away_team_logo}}" alt="team-logo-2">
                        </div>
                        <h6>{{$matchDetails->away_team_name}}</h6>
                    </div>
                </div>

                <div class="tab-content-wrapper">
                    <div class="toggle-target">
                        <a href="#" class="tab active" data-toggle-target=".tab-content-1">Defender</a>
                        <a href="#" class="tab" data-toggle-target=".tab-content-2">Attacker</a>
                        <a href="#" class="tab" data-toggle-target=".tab-content-3">Goalkeeper</a>
                        <a href="#" class="tab" data-toggle-target=".tab-content-4">Midkeeper</a>
                    </div>

                    <div class="tab-content tab-content-1 active">
                        <div class="ice-leagues-inner-content">
                            <div class="matches-table matche-det">
                                <table>
                                    <thead>
                                        <tr>
                                            <th scope="col" class="">Sélectionné par</th>
                                            <th scope="col">Équipe</th>
                                            <th scope="col">Âge </th>
                                            <th scope="col">Blessé </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($organizedPlayers['Defender'] as $def_player)

                                        <tr class="matche-main" data-team-id="{{$def_player->player_team_id}}" data-player-id="{{$def_player->player_id}}" data-player-role="D" data-player-name="{{$def_player->name}}" data-team-logo="{{$def_player->team_logo}}" data-match-id="{{$matchDetails->fixture_id}}" data-team-name="testing" data-home-team="{{ $matchDetails->home_team_id }}" data-away-team="{{ $matchDetails->away_team_id }}" data-slug-matchid="{{ $matchDetails->id }}">
                                        <td>
                                            <h6>{{ $def_player->name }}</h6>
                                            {{-- <span>sel by 0.38%</span> --}}
                                         </td>
                                         <td class="team-logo">
                                             <img src="{{$def_player->team_logo}}" alt="team-logo-2">
                                         </td>
                                         <td>
                                              <p>{{$def_player->age}}</p>
                                           </td>
                                           <!-- <td class="player-dp">
                                              {{-- <img src="assets/images/dp.png" alt="dp"> --}}
                                           </td> -->
                                         
                                           <td class="credits_points">
                                              <span>{{ ($def_player->injured == '1') ?
                                            'Yes' : 'No'}}</span>
                                              <button class="plus player-toggle" data-event="plus">
                                                 <i class="fa-solid fa-plus"></i>
                                              </button>
                                              <button class="minus player-toggle d-none" data-event="minus">                                        
                                           <i class="fa-solid fa-minus"></i>
                                              </button>
                                           </td>
                                        </tr>

                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- <div class="team-btns">
                                <a href="team-view" class="next-btn">Suivant</a>
                            </div> -->
                        </div>
                    </div>

                    <div class="tab-content tab-content-2">
                        <div class="ice-leagues-inner-content">
                            <div class="matches-table matche-det">
                                <table>
                                    <thead>
                                        <tr>
                                            <th scope="col" class="">Sélectionné par</th>
                                            <th scope="col">Équipe</th>
                                            <th scope="col">Âge </th>
                                            <th scope="col">Blessé </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ( $organizedPlayers['Attacker'] as $st_player)

                                        <tr class="matche-main" data-team-id="{{$st_player->player_team_id}}" data-player-id="{{$st_player->player_id}}" data-player-role="F" data-player-name="{{$st_player->name}}" data-team-logo="{{$st_player->team_logo}}" data-match-id="{{$matchDetails->fixture_id}}" data-team-name="testing" data-home-team="{{ $matchDetails->home_team_id }}" data-away-team="{{ $matchDetails->away_team_id }}" data-slug-matchid="{{ $matchDetails->id }}">

                                            <!-- <td class="player-dp">
                                               {{-- <img src="assets/images/dp.png" alt="dp"> --}}
                                            </td> -->
                                            <td>
                                             <h6>{{ $st_player->name }}</h6>
                                             {{-- <span>sel by 0.38%</span> --}}
                                          </td>
                                          <td class="team-logo">
                                              <img src="{{$st_player->team_logo}}" alt="team-logo-2">
                                          </td>
                                            <td>
                                               <p>{{$st_player->age}}</p>
                                            </td>
                                            <td class="credits_points">
                                               <span>{{ ($st_player->injured == '1') ?
                                             'Yes' : 'No'}}</span>
                                               <button class="plus player-toggle" data-event="plus">
                                                <i class="fa-solid fa-plus"></i>
                                               </button>
                                               <button class="minus player-toggle d-none" data-event="minus">
                                               <i class="fa-solid fa-minus"></i>
                                               </button>
                                            </td>
                                         </tr>
                                         @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- <div class="team-btns">
                                <a href="team-view" class="next-btn">next</a>
                            </div> -->
                        </div>
                    </div>

                    <div class="tab-content tab-content-3">
                        <div class="ice-leagues-inner-content">
                            <div class="matches-table matche-det">
                                <table>
                                    <thead>
                                        <tr>
                                            <th scope="col" class="">Sélectionné par</th>
                                            <th scope="col">Équipe</th>
                                            <th scope="col">Âge </th>
                                            <th scope="col">Blessé </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($organizedPlayers['Goalkeeper'] as $gk_player)

                                        <tr class="matche-main" data-team-id="{{$gk_player->player_team_id}}" data-player-id="{{$gk_player->player_id}}" data-player-role="G" data-player-name="{{$gk_player->name}}" data-team-logo="{{$gk_player->team_logo}}" data-match-id="{{$matchDetails->fixture_id}}" data-team-name="testing" data-home-team="{{ $matchDetails->home_team_id }}" data-away-team="{{ $matchDetails->away_team_id }}" data-slug-matchid="{{ $matchDetails->id }}">
                                           <!-- <td class="player-dp">
                                              {{-- <img src="assets/images/dp.png" alt="dp"> --}}
                                           </td> -->
                                           <td>
                                            <h6>{{ $gk_player->name }}</h6>
                                            {{-- <span>sel by 0.38%</span> --}}
                                         </td>
                                         <td class="team-logo">
                                             <img src="{{$gk_player->team_logo}}" alt="team-logo-2">
                                         </td>
                                           <td>
                                              <p>{{$gk_player->age}}</p>
                                           </td>
                                           <td class="credits_points">
                                              <span>{{ ($gk_player->injured == '1') ?
                                            'Yes' : 'No'}}</span>
                                              <button class="plus player-toggle" data-event="plus">                                     
                                                 <i class="fa-solid fa-plus"></i>
                                              </button>
                                              <button class="minus player-toggle d-none" data-event="minus">
                                              <i class="fa-solid fa-minus"></i>
                                              </button>
                                           </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                            <!-- <div class="team-btns">
                                <a href="team-view" class="next-btn">next</a>
                            </div> -->
                        </div>
                    </div>

                    
                    <div class="tab-content tab-content-4">
                        <div class="ice-leagues-inner-content">
                            <div class="matches-table matche-det">
                                <table>
                                    <thead>
                                        <tr>
                                            <th scope="col" class="">Sélectionné par</th>
                                            <th scope="col">Équipe</th>
                                            <th scope="col">Âge </th>
                                            <th scope="col">Blessé </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($organizedPlayers['Midfielder'] as $mid_player)

                                        <tr lass="matche-main" data-team-id="{{$mid_player->player_team_id}}" data-player-id="{{$mid_player->player_id}}" data-player-role="M" data-player-name="{{$mid_player->name}}" data-team-logo="{{$mid_player->team_logo}}" data-match-id="{{$matchDetails->fixture_id}}" data-team-name="testing" data-home-team="{{ $matchDetails->home_team_id }}" data-away-team="{{ $matchDetails->away_team_id }}" data-slug-matchid="{{ $matchDetails->id }}">
                                           <!-- <td class="player-dp">
                                              {{-- <img src="assets/images/dp.png" alt="dp"> --}}
                                           </td> -->
                                           <td>
                                           <h6>{{ $mid_player->name ?? '' }}</h6>
                                            {{-- <span>sel by 0.38%</span> --}}
                                         </td>
                                         <td class="team-logo">
                                         <img src="{{$mid_player->team_logo ?? ''}}" alt="team-logo-2">
                                         </td>
                                           <td>
                                           <p>{{$mid_player->age ?? ''}}</p>
                                           </td>
                                           <td class="credits_points">
                                             <span>{{ ($mid_player->injured  == '1') ?
                                          'Yes' : 'No'}}</span>
                                             <button class="plus player-toggle" data-event="plus">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                             </button>
                                             <button class="minus player-toggle d-none" data-event="minus">
                                                <i class="fa fa-minus" aria-hidden="true"></i>
                                             </button>
                                          </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        
                        </div>
                    </div>
                </div>

                             <div class="team-btns">
                                <a href="{{ route('my-team') }}" class="next-btn">next</a>
                            </div>


            </div>
        </div>

        <!-- alert-msg popup start -->
    <div class="alert-msg">
      <div class="modal fade" id="errorModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
              <div class="modal-header">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
               <span>
                   <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#d30f0f"><path d="M480-280q17 0 28.5-11.5T520-320q0-17-11.5-28.5T480-360q-17 0-28.5 11.5T440-320q0 17 11.5 28.5T480-280Zm-40-160h80v-240h-80v240Zm40 360q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z"/></svg>
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
   <!-- alert-msg popup end -->

  <!-- alert-msg popup start -->
  <div class="alert-msg">
   <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog modal-dialog-centered">
       <div class="modal-content">
           <div class="modal-header">
           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
           </div>
           <div class="modal-body">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#00c900"><path d="M480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q65 0 123 19t107 53l-58 59q-38-24-81-37.5T480-800q-133 0-226.5 93.5T160-480q0 133 93.5 226.5T480-160q133 0 226.5-93.5T800-480q0-18-2-36t-6-35l65-65q11 32 17 66t6 70q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm-56-216L254-466l56-56 114 114 400-401 56 56-456 457Z"/></svg>
            </span>
               <h4 id="success-message"></h4>
           </div>
           <div class="modal-footer">
           <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ok</button>
           </div>
       </div>
       </div>
   </div>
  </div>
<!-- alert-msg popup end -->

    </section> 
    <!-- Leagues Content Section End -->
@endsection

@section('custom-script')

  <script>
   $(document).ready(function() {

      var myTeam = @json(Session::get('myTeam', []));

      $('.div-tbl tbody tr').each(function() {
         var row = $(this);
         var leagueId = "{{$matchDetails->league->league_id}}";

         // console.log(leagueId,'league_id');
         // console.log(myTeam,'myjson');

         var teamId = row.data('team-id');
         var playerId = row.data('player-id');
         var playerRole = row.data('player-role');
         var playerName = row.data('player-name');

         var playerExists = myTeam.some(function(player) {
            return player.team_id == teamId && player.player_id == playerId && player.player_role == playerRole && player.player_name == playerName && player.league_id == leagueId;
         });

         if (playerExists) {
            row.find('.plus').addClass('d-none');
            row.find('.minus').removeClass('d-none');
         } else {
            row.find('.plus').removeClass('d-none');
            row.find('.minus').addClass('d-none');
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

       $.ajaxSetup({
           headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           }
       });

       $(document).on('click', '.player-toggle', function() {

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
               event : event,
               team_logo : team_logo,
               match_id:match_id,
               team_name:team_name,
               homeTeamId:homeTeamId,
               awayTeamId:awayTeamId,
               dbMatchId:dbMatchId,
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
            success: function(response) {
                  if(response.success == true){
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
            error: function(xhr, status, error) {
                  console.error('Error:', error);
            }
         });
      });



   });
</script>


  @endsection
