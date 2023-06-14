@extends('layout')
@section('title', 'Login')


   
@section('content')
    <div class="container">
        <form style='width:500px' class="ms-auto me-auto mt-auto mb-auto ">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
           
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Clients</a>
            <a href="#">Contact</a>
          </div>
          
          <!-- Use any element to open the sidenav -->
          <span onclick="openNav()">	<i style='font-size:24px' class='fas'>&#xf550;</i>
          </span>
          
          <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
          <div id="main">
            ...
          </div>

    </div>
   

@endsection
