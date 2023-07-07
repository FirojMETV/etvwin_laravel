

<link rel='stylesheet' href="{{ asset('css/login.css') }}">

    


    <div class="container-fluid">
        <div class="center">
            <h2> Sign in</h2>
            <form method="post" action="{{ route('login-user') }}">
                @if (Session::has('success'))
                    <div class="alert alert-success">{{ Session::get('success') }}</div>
                @endif
                @if (Session::has('fail'))
                    <div class="alert alert-danger ">{{ Session::get('failed') }}</div>
                @endif
                @csrf
                <div class="txt_field">
                    <input type="text" name="Email" value="{{ old('Email') }}">
                    <span></span>
                    <label for="Email">Email / Mobile*</label>
                </div>
                <p class="text-warning" style="margin:-15px 1px 0px 0px; color:#ff5">@error('Email'){{ $message }}@enderror</p>
                <div class="txt_field">
                    <input type="password" name="password" value="">
                    <span></span>
                    <label>Password*</label>
                </div>
                <p class="text-warning" style="margin: -20px 0px 25px 1px; color:#ff5">@error('password'){{ $message }}@enderror</p>
                <div class="pass">
                    Forget Password?
                </div>

                <div>
                    <input type="submit" value="SIGN IN">
                    <h3 class="hr-lines"><span>OR</span></h3>

                    <div class="social" style="display: inline-flex">
                        <div class="fb"><img src="{{ asset('image/facebook-new.png') }}" width="27px" height="27px"
                                style="margin-top: -2px" />
                        </div>
                        <div class="go"><img src="{{ asset('image/google.png') }}" width="20px" height="20px" />
                        </div>
                    </div>
                    <a href="{{ asset('registration') }}" style="padding-top: 10px">
                        <input type="sign-up" value="SIGN UP">
                    </a>
            </form>
        </div>
    </div>
    <script src="{{ asset('js/navbar.js') }}"></script>

   