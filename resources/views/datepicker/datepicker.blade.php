<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<link rel="stylesheet" href="{{ asset('css/datepicker.css') }}">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

<div id="openCalender" class="open-calender ng-scope" style="">
    <div class="container date-container">
        <div class="preference-float">
            <div class="title-filter"> Filter by date</div>
            <div class="fa fa-close close-dialog" role="button" tabindex="0">&#10006;
            </div>
        </div>
        <div class="clear"></div>
        <hr class="hr-gray">
        <div class="input-date">
            <div class="calender-form" style="display: flex">
                <input type="text" id="from_Date" class="datepicker" placeholder='FROM' style="border-bottom: 1px  solid #fff5;">
              
                 <input type="text" id="Today_date" class="datepicker" placeholder='TO'   style="border-bottom: 1px  solid #fff5;">
            </div>
            <div ng-if="landCtrl.isMsgOpen" class="select-date-msg ng-scope">
              <img
                    class=" icon-pick-date" src="{{asset('image/datepicker.png')}}" height="100px" width="100px"> 
                    <span class="select-msg">Select dates to filter
                    episodes</span></div>
        </div>
        <p id="error_message" class="error-message"></p>
        <hr class="hr-gray">
        <div class="submit-question">
            <button class="form-button blue-button">CANCEL</button>
            <button class="form-button blue-button" type="submit" disabled="disabled">APPLY</button>
        </div>
    </div>
</div>

<script src="{{asset('js/datepicker.js')}}"></script>
