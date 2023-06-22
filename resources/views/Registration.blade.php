@extends('layout')
@section('title', 'Registration')


@section('content')
<html>
    <head>
      <title>Title of the document</title>
      <style>
        body {
          background-color: #b2be92;
        }
        input[type="text"],
        input[type="password"],
        textarea {
          border: none;
          outline: none;
          background: #b2be92;
          border-bottom: 1px solid #7a7c7d; /* You can adjust the color and thickness of the outline */
          
        }
      </style>
    </head>
    <body>
      <form>
        <p>Ordinary input field with box outline:</p>
        <input type="text" placeholder="Enter Something" />
        <p>Input field without outline:</p>
        <input type="text" class="no-outline" placeholder="Enter Something" />
        <div class="form-group">
            
            <input type="text" class="no-outline" placeholder="Enter Something" />
        </div>
      </form>
    </body>
  </html>
@endsection
