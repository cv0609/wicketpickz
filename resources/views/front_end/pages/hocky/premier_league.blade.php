@extends('front_end.layout.main')
@section('content')
<!--Leagues Pages Banner Section Start -->
<section class="pages-banner leagues-pages bg-cover bg-no-repeat banner banner_leagues">
    <div class="container">
        <div class="banner-content banner-content">
            <ul class="leagues-ul">
                <li class="inline-list home-list">
                    <h3>
                        <a href="{{ route('home') }}">Home</a>
                    </h3>
                </li>
                <li class="inline-list next-page-list">
                    <h3>league</h3>
                </li>
            </ul>
        </div>
    </div>
</section>

<!-- Leagues Content Section Start -->
<section class="leagues py-5">
    <div class="container">
        <div class="leagues_wrapper">
            <h2 class="leagues_heading pb-5 text-center">
                Season 2025-26
            </h2>
            <ul class="leagues_list">
            @foreach ($leagues as $key => $league)
                <li class="leagues_item">
                    <a href="{{ route('leagueMatches',['leagueId'=>$league->id]) }}" class="leagues_inner">
                        <div class="leagues_head">
                            <div class="leagues_headLogo">
                                <img src="{{ $league->logo }}" alt="">
                            </div>
                        </div>
                        <div class="leagues_body">
                            <h2 class="leagues_bodyheading">
                            {{ $league->name }}
                            </h2>
                            <p>Cricket</p>
                        </div>
                        <div class="leagues_ftr">
                            <div class="leagues_ftrinner">
                                <div class="leagues_ftrInnertype leagues_ftrInnersec">
                                    <h3>Type</h3>
                                    <p>{{ $league->type }}</p>
                                </div>
                                <div class="leagues_ftrInnerstart leagues_ftrInnersec">
                                    <h3>Start Date</h3>
                                    <p>{{ $league->start_date }}</p>
                                </div>
                                <div class="leagues_ftrInnerEnd leagues_ftrInnersec">
                                    <h3>End Date</h3>
                                    <p>{{ $league->end_date }}</p>
                                </div>
                            </div>


                        </div>
                    </a>
                </li>
                @endforeach 
            
            </ul>
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
