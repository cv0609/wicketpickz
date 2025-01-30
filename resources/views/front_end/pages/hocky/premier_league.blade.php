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
            <h2 class="text-center leagues_heading">{{ date('Y').'-'.(date('Y') + 1) }} Season</h2>
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
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#d30f0f">
                                <path d="M480-280q17 0 28.5-11.5T520-320q0-17-11.5-28.5T480-360q-17 0-28.5 11.5T440-320q0 17 11.5 28.5T480-280Zm-40-160h80v-240h-80v240Zm40 360q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" /></svg>
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
