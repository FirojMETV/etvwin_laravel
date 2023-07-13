{{-- @extends('layout')

<link rel="stylesheet" href="{{asset('css/verification.css')}}">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

@section('content')
    

<div class="center" style="">    
<div class="popup" style="">
    <img src="{{ asset('image/img_verification_success.png') }}" alt="">
    <h2>Verified Successfully!</h2>
    <p>
        Your email address has been verified successfully!
    </p>
    <a href="#">Add Profile Info</a>
</div>
</div>
@endsection
<script type="text/javascript">
    window.addEventListener("load", function() {
        setTimeout(
            function open(event) {
                document.querySelector(".popup").style.display = "block";
            },
            1000
        )
    });
</script> --}}

<!DOCTYPE html>
<html lang="en">
<head>
  
  <!--====== Design by foolishdeveloper.com =====-->
  
  
    <title>Automatic Popup</title>
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!--Stylesheets-->
    <style media="screen">
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-color: #00021C;
}
.popup{
    background-color: #191d4f;
    width: 420px;
    padding: 30px 40px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
    border-radius: 8px;
    font-family: "Poppins",sans-serif;
    display: none; 
    text-align: center;
}
/* .popup {
    display: block;
    margin:  0 0 20px auto;
    background-color: transparent;
    font-size: 30px;
    color: #ffffff;
    background: #03549a;
    border-radius: 100%;
    width: 40px;
    height: 40px;
    border: none;
    outline: none;
    cursor: pointer;
} */
.popup h2{
  margin-top: 0px;
  color: #fff;

}
.popup p{
    font-size: 12px;
   color: #fff;
}
.popup a{
    display: block;
    width: 150px;
    position: relative;
    margin: 10px auto;
    text-align: center;
    background-color: #7249bf;
    border-radius: 20px;
    color: #ffffff;
    text-decoration: none;
    padding: 8px 0;
}
    </style>
</head>
<body>
    <div class="popup" style="">
        <img src="{{ asset('image/img_verification_success.png') }}" alt="">
        <h2>Verified Successfully!</h2>
        <p>
            Your email address has been verified successfully!
        </p>
        <a href="#">Add Profile Info</a>
    </div>
    </div>
    <!--Script-->
    <script type="text/javascript">
window.addEventListener("load", function(){
    setTimeout(
        function open(event){
            document.querySelector(".popup").style.display = "block";
        },
        2000 
    )
});


document.querySelector("#close").addEventListener("click", function(){
    document.querySelector(".popup").style.display = "none";
});
    </script>
</body>
</html>




