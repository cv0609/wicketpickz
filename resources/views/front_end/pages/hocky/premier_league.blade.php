@extends('front_end.layout.main')
@section('title', 'League')
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
                    <h3>League</h3>
                </li>
            </ul>
        </div>
    </div>
</section>

<!-- Leagues Content Section Start -->
<section class="leagues cricket_leagues">
    <div class="container">
        <div class="leagues_wrapper">
            <h2 class="text-center leagues_heading">Season {{ date('Y').'-'.(date('Y') + 1) }}</h2>
            <ul class="leagues_list">
                @foreach ($leagues as $key => $league)
                <li class="leagues_item">
                    <a href="{{ route('leagueMatches',['leagueId'=>$league->league_id]) }}" class="leagues_inner">
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

    <div class="alert-msg">
        <div class="modal fade" id="leagueSuccessModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="48px" height="48px"><path fill="#c8e6c9" d="M44,24c0,11.045-8.955,20-20,20S4,35.045,4,24S12.955,4,24,4S44,12.955,44,24z"></path><path fill="#4caf50" d="M34.586,14.586l-13.57,13.586l-5.602-5.586l-2.828,2.828l8.434,8.414l16.395-16.414L34.586,14.586z"></path></svg>
                        </span>
                        <h4 id="league-success-message"></h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" id="cap-ok" data-bs-dismiss="modal">ok</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- Leagues Content Section End -->
@endsection
@section('custom-script')
<script>

@if(session()->has('success'))
        $(document).ready(function () {
            let modal = new bootstrap.Modal(document.getElementById('leagueSuccessModal'));
            $('#league-success-message').text("Team added successfully.");
            modal.show();
        });
@endif

</script>
@endsection
