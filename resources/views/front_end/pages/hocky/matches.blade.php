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
                            Matchs
                        </h3>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--Leagues Pages Banner Section End -->

    <!-- Leagues Content Section Start -->
    <section class="ice-leagues matches-page">
        <div class="container">
            <div class="ice-leagues-inner">
                <div class="back-btn">
                    <a href="{{ route('leagues') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                            fill="#000">
                            <path d="M360-240 120-480l240-240 56 56-144 144h568v80H272l144 144-56 56Z"></path>
                        </svg>
                    </a>
                </div>
                <h2>{{date('Y')}} Saison </h2>

                <div class="team-view-sec">

                </div>
                <div class="ice-leagues-inner-content">
                    <div class="matches-table">
                        <table cellpadding="0" cellspacing="0" id="myTable">
                            <thead>
                                <tr>
                                    <th scope="col">Équipe</th>
                                    <th scope="col">Détails du match</th>
                                    <th scope="col">Équipe</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($matches as $key => $matche)
                            @php
                            $startSoonMatch = getMatchStatus($matche->fixture_date);
                            @endphp
                                <tr class="matche-main" data-fixture-id="{{ $matche->id}}"  data-home-team="{{ $matche->home_team_id }}" data-away-team="{{ $matche->away_team_id }}">
                                    <td class="match-team-logo">
                                        <div class="match-team-inner">
                                        <img src="{{$matche->home_team_logo}}" alt="team-logo-3">
                                            <!-- <span>LM</span> -->
                                        </div>
                                        <h6>{{ $matche->home_team_name }}</h6>
                                        @if($matche->short_status == 'LIVE' || $matche->short_status == '1H' || $matche->short_status == 'HT' || $matche->short_status == '2H' || $matche->short_status == 'ET' || $matche->short_status == 'BT' || $matche->short_status == 'P' || $matche->short_status == 'SUSP' || $matche->short_status == 'INT' || $matche->short_status == 'INT')

                                            <div id="Head-Banner">
                                                <span id="Head-Banner-Text">LIVE ({{ $matche->long_status }})</span>
                                            </div>

                                            @elseif((isset($startSoonMatch) && !empty($startSoonMatch) && $startSoonMatch <= 40) || ( $startSoonMatch == '0'))

                                            <div id="Head-Banner">
                                                <span id="Head-Banner-Text">Start In {{ $startSoonMatch.' mints' }}</span>
                                            </div>

                                            @endif
                                        <a href="{{ route('matche-detail',['matcheId'=>$matche->id]) }}"></a>

                                    </td>
                                    <td>
                                    <h6>{{$matche->venue_name}}</h6>
                                    <p>{{$matche->venue_city}}</p>
                                    <span>{{ date('Y-m-d h:i a',strtotime($matche->fixture_date))}}</span>

                                    </td>
                                    <td class="match-team-logo">
                                        <div class="match-team-inner">
                                            <!-- <span>NHL</span> -->
                                            <img src="{{$matche->away_team_logo}}" alt="team-logo-3">
                                        </div>

                                         <h6>{{ $matche->away_team_name }}</h6>
                                    </td>

                                </tr>
                            @endforeach
                         </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Leagues Content Section End -->

@endsection
@section('custom-script')
<script>
  let table = new DataTable('#myTable');
</script>
@endsection
