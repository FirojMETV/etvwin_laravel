@extends('layout');
@section('content')
    <link rel="stylesheet" href="{{ asset('css/UserTabs.css') }}">
    <div class="ekta-view ng-scope top-small" id="view_begin" ng-class="{'top-large':heightst, 'top-small':!heightst}"
        ng-view="" style="">

        <div class="container ng-scope" ng-if="profileCtrl.isLogged">
            <div class="margin-container">
                <div class="profile-header">
                    <h1>My Profile</h1>
                </div>
                <div class="mob-photo-container">
                    <div class="blur-bg" style="background-image:url('{{ asset('image/usericon.png') }}');">
                    </div>
                    <div class="image-section profile-image-section">
                        <img alt="image" class="img-circle" id="rounded-image-mob"
                            src="{{ asset('image/usericon.png') }}">
                        <input type="file" name="imageselect" class="inputfile" id="imageselect"
                            onchange="angular.element(this).scope().profileCtrl.imageChanged(this)">

                        <div class="cropArea cropAreaMobile ng-scope" ng-if="!profileCtrl.removeCroppingDiv">
                            <img-crop image="image.originalImage" result-image="profileCtrl.userdata.profile_pic"
                                class="ng-isolate-scope">
                                <canvas width="0" height="0" style="margin-top: 0px;">
                                </canvas>
                            </img-crop>
                        </div>
                    </div>
                </div>
                <div class="my-profile-nav">
                    <ul class="nav nav-pills">
                        <li class="active">
                            <a data-toggle="tab" class="profile-tab" ng-click="profileCtrl.selectTab('info')">INFO</a>
                        </li>

                        <li class="ng-scope" style="">
                            <a data-toggle="tab" class="profile-tab">CHANGE PASSWORD</a>
                        </li>

                        <li>
                            <a data-toggle="tab" class="profile-tab">SUBSCRIPTION</a>
                        </li>
                        <li>
                            <a data-toggle="tab" class="profile-tab">TRANSACTIONS</a>
                        </li>
                    </ul>
                </div>

                <div class="row profile-content">
                    <div class="row my-profile-div">
                        <div id="info" class="ng-scope">
                            <div id="editprofile" class="profile-edit-section ng-hide" aria-hidden="true">
                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 blur-container">
                                    <div class="blur-bg" style="background-image:url('{{ asset('image/usericon.png') }}">
                                    </div>
                                    <div class="image-section profile-image-section"> <img alt="image" class="img-circle"
                                            id="rounded-image" src="{{ asset('image/usericon.png') }}"
                                            lazy-img="{{ asset('image/usericon.png') }}"> <input type="file"
                                            name="imageselect" class="inputfile" id="imageselect"
                                            onchange="angular.element(this).scope().profileCtrl.imageChanged(this)"><label
                                            for="imageselect" class="upload-label"><span
                                                class="glyphicon glyphicon-pencil edit-button"
                                                style="left: 5px;top: 3px;"></span></label> <button
                                            ng-disabled="profileCtrl.isRemoveDisabled" ng-click="profileCtrl.removeImage()"
                                            class="form-button remove-btn-web" disabled="disabled">REMOVE</button>
                                        <div class="cropArea">
                                            <img-crop image="image.originalImage"
                                                result-image="profileCtrl.userdata.profile_pic" class="ng-isolate-scope">
                                                <canvas width="0" height="0" style="margin-top: 0px;"></canvas>
                                            </img-crop>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 form-section">
                                    <form method="POST">
                                        @csrf
                                        <div class="login__field">
                                            <label for="name">Name</label>
                                            <input type="text" id="name" name="name" class="login__input"
                                                required>
                                        </div>
                                        <div class="login__field">
                                            <label for="dob">DOB</label>
                                            <input type="date" id="dob" name="dob" class="login__input "
                                                required>
                                        </div>
                                        <div class="login__field">
                                            <label for="location">Location *</label>
                                            <input type="text" id="location" name="location" class="login__input"
                                                required>
                                        </div>
                                        <div class="login__field">
                                            <label for="gender-select">GENDER</label>
                                            <select name="title" id="gender-select" class="select">
                                                <option value=""> Please choose an option </option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>

                                            </select>
                                        </div>
                                        <div>
                                            <ul class="profile-update-btn profile-update-btn-phone">
                                                <li>
                                                    <button class="form-button">CANCEL
                                                    </button>
                                                </li>
                                                <li>
                                                    <button id="sub-btn" class="form-button blue-button"
                                                        type="submit">DONE
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </form>

                                </div> --}}
                            </div>
                            {{-- <div  class="profile-section ng-scope">
                                <div class="row edit-area">
                                    <button id="savebutton" class="form-button profile-edit-button">
                                        EDIT
                                    </button>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 blur-container">
                                        <div class="blur-bg"
                                            style="background-image:url('{{ asset('image/usericon.png') }}'')">
                                        </div>
                                        <div class="image-section profile-image-section">

                                            <img alt="image" class="img-circle ng-scope" 
                                                src="{{ asset('image/usericon.png') }}"
                                                lazy-img="{{ asset('image/usericon.png') }}">

                                            <input type="file" name="imageselect" class="inputfile" id="imageselect">
                                            <label for="imageselect" class="upload-label">
                                                <span class="glyphicon glyphicon-pencil edit-button"
                                                    style="left: 5px;top: 3px;">
                                                </span>
                                            </label>
                                            <div class="cropArea">
                                                <img-crop image="image.originalImage"
                                                    result-image="profileCtrl.userdata.profile_pic"
                                                    class="ng-isolate-scope">
                                                    <canvas width="0" height="0"
                                                     style="margin-top: 0px;">
                                                    </canvas>
                                                </img-crop>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 form-section">
                                       
                                        <div  class="label-section ng-scope"
                                            style="">
                                            <label>Name</label>
                                            <h3  class="ng-binding">
                                                Firoj
                                            </h3>
                                        </div>
                                        <div 
                                            class="label-section ng-scope">
                                            <label>Email</label>
                                            <h3 
                                                class="ng-binding">
                                                firoz.m@etv.co.in</h3>
                                        </div>

                                        <div ng-if="subsub" class="label-section ng-scope"> 
                                            <label>Subscription
                                                Status</label>
                                            <h3>FREE</h3>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="{{ asset('js/footer.js') }}"></script>

    <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }
    </script>
@endsection
