@extends('front_end.layout.main')
@section('title', 'My Profile')
@section('content')

<!--Leagues Pages Banner Section Start -->
<section class="pages-banner leagues-pages  bg-cover bg-no-repeat banner_myProfile">
    <div class="container">
        <div class="banner-content">
            <ul class="leagues-ul">
                <li class="inline-list home-list">
                    <h3>
                        <a href="{{ route('home') }}">Home</a>
                    </h3>
                </li>
                <li class="inline-list next-page-list">
                    <h3>
                        My Profile
                    </h3>
                </li>
            </ul>
        </div>
    </div>
</section>
<!--Leagues Pages Banner Section End -->

<!-- Leagues Content Section Start -->
<section class="my-profile">
    <div class="container">
        <div class="mmy-profile-inner">
            @include('front_end.pages.profile.profile-sidebar')
            <div class="col-sec">
                <div class="user-content-update">
                    <div class="">
                        <div class="tab-content tab-content-1 active">
                            <div class="user-content-box">

                                <form action="{{ route('profile.update') }}" method="POST" class="mt-60 ">
                                    @csrf
                                    <div class="row">
                                        <div class="mb-3 col-sm-12">
                                            <input type="text" placeholder="Name" class="form-control para" id="name"
                                            name="name" value="{{Auth::user()->name}}">
                                            @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="mb-3 col-sm-12">
                                            <input type="text" placeholder="Username" class="form-control para"
                                                id="last-name" name="username" autocomplete="off" value="{{Auth::user()->username}}">
                                            @error('username')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="mb-3 col-sm-12">
                                            <input type="email" placeholder="E-mail" class="form-control para"
                                                id="email" name="email" value="{{Auth::user()->email}}">
                                            @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <!-- <div class="mb-3 col-sm-6">
                                            <input type="text" placeholder="Telephone" class="form-control para"
                                                id="Phone" required="required">
                                        </div> -->
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Leagues Content Section End -->
@endsection
