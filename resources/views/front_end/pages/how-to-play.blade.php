@extends('front_end.layout.main')
@section('content')
<!-- banner section -->
<div class="banner banner--playing">
    <div class="container">
        <div class="banner_wrapper">
            <div class="banner_contnet">
                <h2 class="banner-heading text-white">Playing Guide
                </h2>

            </div>
        </div>
    </div>
</div>

<!-- playing guide section -->
<section class="playingGuide">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-12 mx-auto">
                <div class="playingGuide_inner playingGuide_inner--one">
                    <div class="playingGuide_right">
                        <div class="playingGuide_content">
                            <h3 class="playingGuide_title">
                                Step 1: Register and Login
                            </h3>
                            <ul class="playingGuide_list">
                                <li class="playingGuide_item">
                                    <strong> Sign Up: </strong>Create an account by providing your email, username,
                                    and password.
                                </li>
                                <li class="playingGuide_item">
                                    <strong>Log In:</strong> Use your credentials to access the platform.
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="playingGuide_left">
                        <div class="playingGuide_img"></div>
                    </div>
                </div>
                <!--section 2 -->
                <div class="playingGuide_inner row-reverse playingGuide_inner--two">
                    <div class="playingGuide_right">
                        <div class="playingGuide_content">
                            <h3 class="playingGuide_title">
                                Step 2: Select a Match
                            </h3>
                            <ul class="playingGuide_list">
                                <li class="playingGuide_item">
                                    Browse the list of ongoing or upcoming cricket matches.
                                </li>
                                <li class="playingGuide_item">
                                    Choose a match you’re interested in to start building your fantasy team.
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="playingGuide_left">
                        <div class="playingGuide_img"></div>
                    </div>
                </div>
                <!--section 3 -->
                <div class="playingGuide_inner playingGuide_inner--three">
                    <div class="playingGuide_right">
                        <div class="playingGuide_content">
                            <h3 class="playingGuide_title">
                                Step 3: Create Your Team
                            </h3>
                            <ul class="playingGuide_list">
                                <li class="playingGuide_item">
                                    <strong>Budget:</strong> Each player has a value, and you have a budget to build
                                    your team.

                                </li>
                                <li class="playingGuide_item">
                                    <strong>Team Composition: </strong> 11 players, adhering to the following
                                    guidelines:
                                </li>
                            </ul>
                            <ul class="playingGuide_subList">
                                <li class="playingGuide_subItem">
                                    <strong> Batsmen (BAT):</strong> Minimum 3, maximum 5.
                                </li>
                                <li class="playingGuide_subItem">
                                    <strong>Bowlers (BOWL):</strong> Minimum 3, maximum 5.
                                </li>
                                <li class="playingGuide_subItem">
                                    <strong>All-rounders (AR):</strong> Minimum 1, maximum 3.
                                </li>
                                <li class="playingGuide_subItem">
                                    <strong>Wicketkeeper (WK):</strong> Exactly 1.
                                </li>
                            </ul>
                            <ul class="playingGuide_list">
                                <li class="playingGuide_item"><strong>Captain and Vice-Captain:
                                    </strong></li>
                            </ul>
                            <ul class="playingGuide_subList">
                                <li class="playingGuide_subItem">Choose a Captain (earns 2x points).
                                </li>
                                <li class="playingGuide_subItem">
                                    Choose a Vice-Captain (earns 1.5x points).
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="playingGuide_left">
                        <div class="playingGuide_img"></div>
                    </div>
                </div>
                <!--section 4 -->
                <div class="playingGuide_inner row-reverse playingGuide_inner--four">
                    <div class="playingGuide_right">
                        <div class="playingGuide_content">
                            <h3 class="playingGuide_title">
                                Step 4: Join a Contest
                            </h3>
                            <ul class="playingGuide_list">
                                <li class="playingGuide_item">
                                    Explore various contests based on entry fees and prize pools.

                                </li>
                                <li class="playingGuide_item">
                                    Options may include:
                                </li>
                            </ul>
                            <ul class="playingGuide_subList">
                                <li class="playingGuide_subItem">
                                    <strong>Free Contests:</strong> Perfect for beginners.

                                </li>
                                <li class="playingGuide_subItem">
                                    <strong>Paid Contests:</strong> Compete for cash prizes or rewards.
                                </li>


                            </ul>
                            <ul class="playingGuide_list">
                                <li class="playingGuide_item">
                                    Confirm your team and join the contest.
                                </li>
                            </ul>

                        </div>
                    </div>
                    <div class="playingGuide_left">
                        <div class="playingGuide_img"></div>
                    </div>
                </div>
                <!--section 5 -->
                <div class="playingGuide_inner playingGuide_inner--five">
                    <div class="playingGuide_right">
                        <div class="playingGuide_content">
                            <h3 class="playingGuide_title">
                                Step 5: Monitor Player Performance
                            </h3>
                            <ul class="playingGuide_list">
                                <li class="playingGuide_item">
                                    Points are awarded based on real-time performance in the match:
                                </li>

                            </ul>
                            <ul class="playingGuide_subList">
                                <li class="playingGuide_subItem">
                                    Runs scored, wickets taken, catches, and more.


                                </li>
                                <li class="playingGuide_subItem">
                                    Captain and Vice-Captain boost points.

                                </li>


                            </ul>
                            <ul class="playingGuide_list">
                                <li class="playingGuide_item">
                                    Track the live leaderboard to see how your team is performing.

                                </li>
                            </ul>

                        </div>
                    </div>
                    <div class="playingGuide_left">
                        <div class="playingGuide_img"></div>
                    </div>
                </div>
                <!--section 6 -->
                <div class="playingGuide_inner row-reverse playingGuide_inner--six">
                    <div class="playingGuide_right">
                        <div class="playingGuide_content">
                            <h3 class="playingGuide_title">
                                Step 6: Scoring System
                            </h3>
                            <ul class="playingGuide_list">
                                <li class="playingGuide_item">
                                    The scoring system includes a detailed breakdown, such as:
                                </li>

                            </ul>
                            <ul class="playingGuide_subList">
                                <li class="playingGuide_subItem">
                                    <strong>Batting:</strong> Runs scored, strike rate bonuses, and milestones.
                                </li>
                                <li class="playingGuide_subItem">
                                    <strong>Bowling:</strong> Wickets, economy rate bonuses, and maidens.
                                </li>
                                <li class="playingGuide_subItem">
                                    <strong>Fielding:</strong> Catches, stumpings, and run-outs.
                                </li>
                                <li class="playingGuide_subItem">
                                    Negative points for poor performances (e.g., ducks or high economy rates).
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="playingGuide_left">
                        <div class="playingGuide_img"></div>
                    </div>
                </div>
                <!--section 7 -->
                <div class="playingGuide_inner playingGuide_inner--seven">
                    <div class="playingGuide_right">
                        <div class="playingGuide_content">
                            <h3 class="playingGuide_title">
                                Step 7: Claim Your Rewards
                            </h3>
                            <ul class="playingGuide_list">
                                <li class="playingGuide_item">
                                    At the end of the match, points are tallied, and winners are announced.

                                </li>
                                <li class="playingGuide_item">
                                    Prizes or winnings are credited to your account.

                                </li>

                                <li class="playingGuide_item">
                                    Withdraw your earnings securely or use them to join more contests.

                                </li>

                            </ul>

                        </div>
                    </div>
                    <div class="playingGuide_left">
                        <div class="playingGuide_img"></div>
                    </div>
                </div>
                <!--section 8 -->
                <div class="playingGuide_inner row-reverse playingGuide_inner--eight">
                    <div class="playingGuide_right">
                        <div class="playingGuide_content">
                            <h3 class="playingGuide_title">
                                Step 8: Tips and Tricks
                            </h3>
                            <ul class="playingGuide_list">
                                <li class="playingGuide_item">
                                    Stay updated with player form, pitch conditions, and match previews.


                                </li>
                                <li class="playingGuide_item">
                                    Diversify your team with a mix of consistent performers and high-potential
                                    players.

                                </li>

                                <li class="playingGuide_item">
                                    Use free contests to practice and hone your skills.

                                </li>

                            </ul>

                        </div>
                    </div>
                    <div class="playingGuide_left">
                        <div class="playingGuide_img"></div>
                    </div>
                </div>
                <!--section 9 -->
                <div class="playingGuide_inner playingGuide_inner--nine">
                    <div class="playingGuide_right">
                        <div class="playingGuide_content">
                            <h3 class="playingGuide_title">
                                Step 9: Terms and Conditions

                            </h3>
                            <ul class="playingGuide_list">
                                <li class="playingGuide_item">
                                    Ensure you comply with our fair play policies.

                                </li>
                                <li class="playingGuide_item">
                                    Understand the rules of the game and prize distribution.

                                </li>
                            </ul>

                        </div>
                    </div>
                    <div class="playingGuide_left">
                        <div class="playingGuide_img"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection
