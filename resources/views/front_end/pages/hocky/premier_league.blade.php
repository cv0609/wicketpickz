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
                            Ligues
                        </h3>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--Leagues Pages Banner Section End -->

    <!-- Leagues Content Section Start -->
    <section class="ice-leagues league-page">
        <div class="container">
            <div class="ice-leagues-inner">
               
                <h2>{{date('Y')}} Saison </h2>
                @if(Session::has('success'))
            <span class="alert alert-success text-center" style="width:100%;">{{ Session::get('success') }}</span>
            @elseif(Session::has('error'))
            <span class="alert alert-danger text-center" style="width:100%;">{{ Session::get('error') }}</span>
         
            @endif
                <div class="team-view-sec">

                </div>
                <div class="ice-leagues-inner-content">
                    <div class="leagues-table">
                        <table cellpadding="0" cellspacing="0" id="myTable">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">League</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Date de début</th>
                                    <th scope="col">Date de fin</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($leagues as $key => $league)
                                <tr>
                                    <td class="league-logo">
                                    <img src="{{ $league->logo }}" alt="league-logo">
                                    <a href="{{ route('leagueMatches',['leagueId'=>$league->id]) }}"></a>
                                    </td>
                                    <td>
                                     <h6>{{ $league->name }}</h6>
                                    <a href="{{ route('leagueMatches',['leagueId'=>$league->id]) }}"></a>
                                    </td>
                                    <td>
                                    <p>{{ $league->type }}</p>
                                    <a href="{{ route('leagueMatches',['leagueId'=>$league->id]) }}"></a>
                                    </td>
                                    <td>
                                    <p>{{ $league->start_date }}</p>
                                    <a href="{{ route('leagueMatches',['leagueId'=>$league->id]) }}"></a>
                                    </td>
                                    <td>
                                    <p>{{ $league->end_date }}</p>
                                    <a href="{{ route('leagueMatches',['leagueId'=>$league->id]) }}"></a>
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
