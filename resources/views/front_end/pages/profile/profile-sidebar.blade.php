<div class="profile-side">
    <div class="profile-sec">
        <div class="user-img">
            <div class="update_img_user">
                <div class="update_img_user_img">
                    <img src="{{(!empty(Auth::user()->image)) ? asset(Auth::user()->image) : asset('assets/img/user.jpg') }}" alt="user_img">

                </div>
                <form action="{{ route('profile.update-pic') }}" method="POST" enctype="multipart/form-data" id="profile-pic-form">
                     @csrf
                    <input type="file" id="profile-pic-input" name="profile_picture" style="display: none;"
                        accept="image/*" onchange="document.getElementById('profile-pic-form').submit()">
                    <span class="edit_pan" onclick="document.getElementById('profile-pic-input').click()"><svg
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path
                                d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z">
                            </path>
                        </svg> </span>
                </form>
            </div>
            <div class="user_name">
                <h3>{{Auth::user()->name}}</h3>
            </div>
        </div>
        <div class="edit_option_bar">
            <div class="content-bar">
                <a href="{{ route('profile.profile') }}" class="tabedit">Edit Profile
                </a>
            </div>
            <div class="content-bar">
                <a href="{{ route('profile.change.password') }}" class="tabedit">Change Password</a>
            </div>
        </div>
    </div>
</div>
