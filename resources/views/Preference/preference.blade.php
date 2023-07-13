
@extends('layout')

<link rel="stylesheet" href="{{asset('css/Preference.css')}}">
@section('content')
    

<div class="ekta-view top-large" id="view_begin" style="">

    <div class="container preference-col preference-page ng-scope">
        <div class="margin-container">
            <div class="title-filter"> My Preferences</div>
            <div class="clear"></div>
            <hr class="hr-gray">
            <div class="ng-scope">
                <div class="emptyPreference">You haven’t followed anything yet</div>
                <hr class="hr-gray">
            </div>
            <div class="ng-scope">

                <div class="ng-scope">
                    <div class="title-preference">
                        <h1 class="ng-binding">Genres</h1>
                    </div>
                    <div class="row">

                        <div class="ng-scope">
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div>
                                    <input type="checkbox" ng-model="value.checked"
                                        class="read-more-state "
                                        aria-invalid="false">
                                    <div class="genres ng-binding" role="button" tabindex="0">
                                        Comedy</div>
                                </div>
                            </div>
                        </div>
                        <div class="ng-scope">
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div>
                                    <input type="checkbox" ng-model="value.checked"
                                        class="read-more-state "
                                        aria-invalid="false">
                                    <div class="genres ng-binding" role="button" tabindex="0">
                                        Drama</div>
                                </div>
                            </div>
                        </div>
                        <div class="ng-scope">
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div>
                                    <input type="checkbox" ng-model="value.checked"
                                        class="read-more-state "
                                        aria-invalid="false">
                                    <div class="genres ng-binding" role="button" tabindex="0">
                                        Event</div>
                                </div>
                            </div>
                        </div>
                        <div class="ng-scope">
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div>
                                    <input type="checkbox" ng-model="value.checked"
                                        class="read-more-state "
                                        aria-invalid="false">
                                    <div class="genres ng-binding" role="button" tabindex="0">
                                        Food</div>
                                </div>
                            </div>
                        </div>
                        <div class="ng-scope">
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div>
                                    <input type="checkbox" ng-model="value.checked"
                                        class="read-more-state "
                                        aria-invalid="false">
                                    <div class="genres ng-binding" role="button" tabindex="0">Health</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ng-scope">

                <div class="ng-scope">
                    <div class="title-preference">
                        <h1 class="ng-binding">Popular Shows</h1>
                    </div>
                    <div class="row">
                        <div class="ng-scope">
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div>
                                    <input type="checkbox" ng-model="value.checked"
                                        class="read-more-state "
                                        aria-invalid="false">
                                    <div class="genres ng-binding" role="button" tabindex="0">
                                        Extra
                                        Jabardasth</div>
                                </div>
                            </div>
                        </div>
                        <div class="ng-scope">
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div>
                                    <input type="checkbox" ng-model="value.checked"
                                        class="read-more-state "
                                        aria-invalid="false">
                                    <div class="genres ng-binding" role="button" tabindex="0">
                                        Dhee</div>
                                </div>
                            </div>
                        </div>
                        <div class="ng-scope">
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div>
                                    <input type="checkbox" ng-model="value.checked"
                                        class="read-more-state "
                                        aria-invalid="false">
                                    <div class="genres ng-binding" role="button" tabindex="0">
                                        Jabardasth
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ng-scope">
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div> <input type="checkbox" ng-model="value.checked"
                                        class="read-more-state "
                                        aria-invalid="false">
                                    <div class="genres ng-binding" role="button" tabindex="0">
                                        Sridevi
                                        Drama Company</div>
                                </div>
                            </div>
                        </div>
                        <div class="ng-scope">
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div> <input type="checkbox" ng-model="value.checked"
                                        class="read-more-state "
                                        aria-invalid="false">
                                    <div class="genres ng-binding" role="button" tabindex="0">Suma Adda
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ng-scope">
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div> <input type="checkbox" ng-model="value.checked"
                                        class="read-more-state "
                                        aria-invalid="false">
                                    <div class="genres ng-binding" role="button" tabindex="0">Padutha
                                        Theeyaga</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ng-scope">
                <div class="ng-scope">
                    <div class="title-preference">
                        <h1 class="ng-binding">Popular Serials</h1>
                    </div>
                    <div class="row">
                        <div class="ng-scope">
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div> <input type="checkbox" ng-model="value.checked"
                                        class="read-more-state "
                                        aria-invalid="false">
                                    <div class="genres ng-binding" ng-bind="value.title"
                                        ng-click="value.isgray =!value.isgray;value.checked =!value.checked;preCtrl.IfChecked(value)"
                                        ng-class="{followed : value.isgray}" role="button" tabindex="0">Rangula
                                        Ratnam</div>
                                </div>
                            </div>
                        </div>
                        <div ng-repeat="(key,value) in item.catalog_list_items" class="ng-scope">
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div> <input type="checkbox" ng-model="value.checked"
                                        class="read-more-state"
                                        aria-invalid="false">
                                    <div class="genres ng-binding" ng-bind="value.title"
                                        ng-click="value.isgray =!value.isgray;value.checked =!value.checked;preCtrl.IfChecked(value)"
                                        ng-class="{followed : value.isgray}" role="button" tabindex="0">Manasantha
                                        Nuvve</div>
                                </div>
                            </div>
                        </div>
                        <div ng-repeat="(key,value) in item.catalog_list_items" class="ng-scope">
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div> <input type="checkbox" ng-model="value.checked"
                                        class="read-more-state ng-pristine ng-untouched ng-valid ng-empty"
                                        aria-invalid="false">
                                    <div class="genres ng-binding" ng-bind="value.title"
                                        ng-click="value.isgray =!value.isgray;value.checked =!value.checked;preCtrl.IfChecked(value)"
                                        ng-class="{followed : value.isgray}" role="button" tabindex="0">
                                        Shatamanambhavati</div>
                                </div>
                            </div>
                        </div>
                        <div ng-repeat="(key,value) in item.catalog_list_items" class="ng-scope">
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div> <input type="checkbox" ng-model="value.checked"
                                        class="read-more-state ng-pristine ng-untouched ng-valid ng-empty"
                                        aria-invalid="false">
                                    <div class="genres ng-binding" ng-bind="value.title"
                                        ng-click="value.isgray =!value.isgray;value.checked =!value.checked;preCtrl.IfChecked(value)"
                                        ng-class="{followed : value.isgray}" role="button" tabindex="0">Geetha
                                        Govindam</div>
                                </div>
                            </div>
                        </div>
                        <div ng-repeat="(key,value) in item.catalog_list_items" class="ng-scope">
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div> <input type="checkbox" ng-model="value.checked"
                                        class="read-more-state ng-pristine ng-untouched ng-valid ng-empty"
                                        aria-invalid="false">
                                    <div class="genres ng-binding" ng-bind="value.title"
                                        ng-click="value.isgray =!value.isgray;value.checked =!value.checked;preCtrl.IfChecked(value)"
                                        ng-class="{followed : value.isgray}" role="button" tabindex="0">Ravoyi
                                        Chandamama</div>
                                </div>
                            </div>
                        </div>
                        <div ng-repeat="(key,value) in item.catalog_list_items" class="ng-scope">
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div> <input type="checkbox" ng-model="value.checked"
                                        class="read-more-state ng-pristine ng-untouched ng-valid ng-empty"
                                        aria-invalid="false">
                                    <div class="genres ng-binding" ng-bind="value.title"
                                        ng-click="value.isgray =!value.isgray;value.checked =!value.checked;preCtrl.IfChecked(value)"
                                        ng-class="{followed : value.isgray}" role="button" tabindex="0">Guvva
                                        Gorinka</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="hr-gray hr-gray-bottom">
            <ul class="submitlinks">
                <li> <button  class="form-button">CANCEL</button></li>
                <li> <button 
                        class="form-button blue-button" disabled="disabled">DONE</button></li>
            </ul>
        </div>
    </div>
</div>

@endsection