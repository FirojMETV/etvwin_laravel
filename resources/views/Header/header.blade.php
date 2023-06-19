<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">

<script src="{{ asset('js/navbar.js') }}"></script>

<div class="container-fluid ">
    <div class="row">
        <div class="col-4 offset-md-1 pl-5   ">
            <img src="{{ asset('image/et.jpg') }}"
             class="navbar-brand ml-5" alt="etv win" width="50px" heigth='50px' />
        </div>
       
          <ul class="navbar nav-pills nav  text-item">
            <li class="nav-item active">
                <a class="nav-link active " href="{{ url('/home') }}">HOME</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{ url('/tv-shows') }}">TV SHOWS</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{ url('/movies') }}">MOVIES</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{ url('/live-tv') }}">LIVE TV</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{ url('/news') }}">NEWS</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{ url('/food') }}">FOOD</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{ url('/health') }}">HEALTH</a>
            </li>
          </ul>

    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
