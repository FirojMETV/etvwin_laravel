<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Datepicker - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <style>
    .overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 1;
    display: none;
  }
  
    .datepicker {
      border: none;
      background: none;
      outline: none;
      color: red; /* Change text color */
      font-size: 16px; /* Change font size */
    }
    .error-message {
      color: red;
    }
     .ui-datepicker {
      background-color: #f2f2f2; /* Change the background color */
      font-size: 20px; /* Change the font size */
      color: #333; /* Change the text color */
    }
    .ui-datepicker-header {
      background-color: #ccc; /* Change the header background color */
      color: #fff; /* Change the header text color */
    }
    .ui-datepicker-prev,
    .ui-datepicker-next {
      background-color: #999; /* Change the previous/next button background color */
      color: #fff; /* Change the previous/next button text color */
    }
    .ui-datepicker-calendar td a {
      color: #333; /* Change the date link color */
    }
  </style>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <script>
    $(function() {
      const today = new Date();
      const lastYear = new Date(today.getFullYear() - 1, today.getMonth(), today.getDate());
      const fromField = $("#from_Date");
      const toField = $("#Today_date");
      const errorMessage = $("#error_message");

      fromField.datepicker({
        maxDate: today,
        dateFormat: "yy-mm-dd",
        onSelect: function(selectedDate) {
          validateDateRange();
        }
      });

      toField.datepicker({
        maxDate: today,
        dateFormat: "yy-mm-dd",
        onSelect: function(selectedDate) {
          validateDateRange();
        }
      });

      function validateDateRange() {
        const fromDate = fromField.datepicker("getDate");
        const toDate = toField.datepicker("getDate");
        if (fromDate && toDate && fromDate > toDate) {
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'To date should be greater than From date Only!',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'OK'
          });
        } else {
          errorMessage.text("");
        }
      }
    });
    $(document).ready(function() {
    $('#openFormButton').click(function() {
        $('.form').toggleClass('show'); // Toggle the "show" class to display/hide the feedback form
        $('.overlay').toggleClass('show'); // Toggle the "show" class to display/hide the overlay
    });
});
  </script>
</head>
<body>
    <div class="overlay"></div>
    <button  onclick="openFormButton" >datepicker</button>
  <div style="display: flex">
    <p>From Date: <input type="text" id="from_Date" class="datepicker" placeholder='yyyy/mm/dd'></p>
    <p>To Date: <input type="text" id="Today_date" class="datepicker" placeholder='yyyy/mm/dd'></p>
  </div>
   <p id="error_message" class="error-message"></p>
</body>
</html>
