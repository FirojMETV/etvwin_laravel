
<link rel='stylesheet' href="{{ asset('css/login.css') }}">

<div class="overlay"></div>
    <div class="container-fluid ">
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
               
                
                  <div class="group">
                    <input type="text" class="input" placeholder="">
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Email / Mobile*</label>
                    <p class="text-warning" style="margin:-15px 1px 0px 0px; color:#ffc908">@error('Email'){{ $message }}@enderror</p>
                </div>
                 
                <div class="group">
                    <input type="password" class="input" placeholder="">
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Password*</label>
                    <p class="text-warning" style="margin: -20px 0px 25px 1px; color:#ffc908">@error('password'){{ $message }}@enderror</p>
                </div>
                 
                <div class="pass">
                    Forget Password?
                </div>

                <div>
                    <input type="submit" value="SIGN IN">
                    <h3 class="hr-lines"><span>OR</span></h3>

                    <div class="socials" style="display: inline-flex">
                        <div class="fb">
                            <img src="{{ asset('image/facebook-new.png') }}" width="35px" height="35px"
                                style="margin-top: -2px" />
                        </div>
                        <div class="go">
                            <img src="{{ asset('image/google.png') }}" width="30px" height="30px" />
                        </div>
                    </div>
                    <a href="{{ asset('registration') }}" style="padding-top: 10px">
                        <input type="sign-up" value="SIGN UP">
                    </a>
            </form>
        </div>
    </div>
    <script src="{{ asset('js/navbar.js') }}"></script>
