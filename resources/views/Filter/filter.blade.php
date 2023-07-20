<link rel="stylesheet" href="{{asset('css/filter.css')}}">

<div  class="ngdialog search-dialog ngdialog-disabled-animation ng-scope" role="alertdialog">
    <div class="overlay"></div>
    <div class="ngdialog-content" role="document">
        
        <div class="container-fluid filter">
            <div class="margin-container">
                <div class="header-filter">
                    <h1 >Filter</h1>
                    <span class="icon-close"></span>
                </div>
                <div class="clear">&#x2716;</div>
                <div class="row">
                    <hr>
                </div>
                <div class="ng-pristine ng-untouched ng-valid _md ng-not-empty" style="">
                    <ul class="radiolinks">
                        <li>
                           
                            <div  checked="checked">
                                <label class="md-container">
                                    <input type="radio" name="radio">
                                    <span class="checkmark"></span>
                                  </label>
                                <div ng-transclude="" class="md-label">
                                     <span class="ng-scope">Veg</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div  aria-label="Non Veg">
                                <label class="md-container">
                                    <input type="radio" name="radio">
                                    <span class="checkmark"></span>
                                  </label>
                                <div ng-transclude="" class="md-label"><span class="ng-scope">Non Veg</span></div>
                            </div>
                        </li>
                        <li class="md-checked">
                            <div  class="md-checked">
                                <label class="md-container">
                                    <input type="radio" name="radio">
                                    <span class="checkmark"></span>
                                  </label>
                                <div ng-transclude="" class="md-label"> <span class="ng-scope">Both</span></div>
                            </div>
                        </li>
                    </ul>
                </div>
                <h3  role="button" tabindex="0">
                    <span>
                        <label class="md-container">
                            <input type="radio" name="radio">
                            <span class="checkbox"></span>
                          </label>
                        <div  aria-checked="false">
                            <div class="md-container md-ink-ripple">
                                <div class="md-icon"></div>
                            </div>
                            <div ng-transclude="" class="md-label"></div>
                        </div>
                    </span>Select all</h3>

                <div class="row">
                    <hr>
                </div>
                <div>
                    <div class="row recipe-filter-option">
                   
                        <div class="col-md-6 col-sm-6 col-xs-6 filter-genre-option ng-scope" style="">
                            <div >
                                <div class="md-container md-ink-ripple" md-ink-ripple="" md-ink-ripple-checkbox="">
                                    <div class="md-icon"></div>
                                </div>
                                <div ng-transclude="" class="md-label">
                                    <h5 ng-bind="item.display_title" class="ng-binding ng-scope">Traditional</h5>
                                    <h6 ng-if="fltrCtrl.selectedTag === 'both'" ng-bind="item.count +' Videos'"
                                        class="ng-binding ng-scope">6259 Videos</h6>
                                </div>
                            </div>
                            <div class="row">
                                <hr>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6 filter-genre-option ng-scope"
                            ng-repeat="item in fltrCtrl.genreList">
                            <div aria-label="test" ng-checked="item.isChecked" id="recipe-filter-chkbox"
                                ng-click="fltrCtrl.checkedItem(item)" tabindex="0" type="checkbox" role="checkbox"
                                aria-checked="false">
                                <div class="md-container md-ink-ripple" md-ink-ripple="" md-ink-ripple-checkbox="">
                                    <div class="md-icon"></div>
                                </div>
                                <div ng-transclude="" class="md-label">
                                    <h5 ng-bind="item.display_title" class="ng-binding ng-scope">Breakfast</h5>
                                    <h6 ng-if="fltrCtrl.selectedTag === 'both'" ng-bind="item.count +' Videos'"
                                        class="ng-binding ng-scope">2201 Videos</h6>
                                </div>
                            </div>
                            <div class="row">
                                <hr>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6 filter-genre-option ng-scope"
                            ng-repeat="item in fltrCtrl.genreList">
                            <div aria-label="test" ng-checked="item.isChecked" id="recipe-filter-chkbox"
                                ng-click="fltrCtrl.checkedItem(item)" tabindex="0" type="checkbox" role="checkbox"
                                aria-checked="false">
                                <div class="md-container md-ink-ripple" md-ink-ripple="" md-ink-ripple-checkbox="">
                                    <div class="md-icon"></div>
                                </div>
                                <div ng-transclude="" class="md-label">
                                    <h5 ng-bind="item.display_title" class="ng-binding ng-scope">Confectionery</h5>
                                    <h6 ng-if="fltrCtrl.selectedTag === 'both'" ng-bind="item.count +' Videos'"
                                        class="ng-binding ng-scope">452 Videos</h6>
                                </div>
                            </div>
                            <div class="row">
                                <hr>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6 filter-genre-option ng-scope"
                            ng-repeat="item in fltrCtrl.genreList">
                            <div aria-label="test" ng-checked="item.isChecked" id="recipe-filter-chkbox"
                                ng-click="fltrCtrl.checkedItem(item)" tabindex="0" type="checkbox" role="checkbox"
                                aria-checked="false">
                                <div class="md-container md-ink-ripple" md-ink-ripple="" md-ink-ripple-checkbox="">
                                    <div class="md-icon"></div>
                                </div>
                                <div ng-transclude="" class="md-label">
                                    <h5 ng-bind="item.display_title" class="ng-binding ng-scope">Pickles</h5>
                                    <h6 ng-if="fltrCtrl.selectedTag === 'both'" ng-bind="item.count +' Videos'"
                                        class="ng-binding ng-scope">216 Videos</h6>
                                </div>
                            </div>
                            <div class="row">
                                <hr>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6 filter-genre-option ng-scope"
                            ng-repeat="item in fltrCtrl.genreList">
                            <div aria-label="test" ng-checked="item.isChecked" id="recipe-filter-chkbox"
                                ng-click="fltrCtrl.checkedItem(item)" tabindex="0" type="checkbox" role="checkbox"
                                aria-checked="false">
                                <div class="md-container md-ink-ripple" md-ink-ripple="" md-ink-ripple-checkbox="">
                                    <div class="md-icon"></div>
                                </div>
                                <div ng-transclude="" class="md-label">
                                    <h5 ng-bind="item.display_title" class="ng-binding ng-scope">Salads</h5>
                                 
                                    <h6 ng-if="fltrCtrl.selectedTag === 'both'" ng-bind="item.count +' Videos'"
                                        class="ng-binding ng-scope"> Videos</h6>
                                </div>
                            </div>
                            <div class="row">
                                <hr>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6 filter-genre-option ng-scope"
                            ng-repeat="item in fltrCtrl.genreList">
                            <div aria-label="test" ng-checked="item.isChecked" id="recipe-filter-chkbox"
                                ng-click="fltrCtrl.checkedItem(item)" tabindex="0" type="checkbox" role="checkbox"
                                aria-checked="false">
                                <div class="md-container md-ink-ripple" md-ink-ripple="" md-ink-ripple-checkbox="">
                                    <div class="md-icon"></div>
                                </div>
                                <div ng-transclude="" class="md-label">
                                    <h5  class="ng-binding ng-scope">
                                        International
                                        Cuisines</h5>
                                    <h6   class="ng-binding ng-scope">1827 Videos</h6>
                                </div>
                            </div>
                            <div class="row">
                                <hr>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6 filter-genre-option ng-scope"
                            ng-repeat="item in fltrCtrl.genreList">
                            <div aria-label="test" ng-checked="item.isChecked" id="recipe-filter-chkbox"
                                ng-click="fltrCtrl.checkedItem(item)" tabindex="0" type="checkbox" role="checkbox"
                                aria-checked="false">
                                <div class="md-container md-ink-ripple" md-ink-ripple="" md-ink-ripple-checkbox="">
                                    <div class="md-icon"></div>
                                </div>
                                <div ng-transclude="" class="md-label">
                                    <h5 ng-bind="item.display_title" class="ng-binding ng-scope">Soups</h5>
                                    <h6 ng-if="fltrCtrl.selectedTag === 'both'" ng-bind="item.count +' Videos'"
                                        class="ng-binding ng-scope">526 Videos</h6>
                                </div>
                            </div>
                            <div class="row">
                                <hr>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6 filter-genre-option ng-scope"
                            ng-repeat="item in fltrCtrl.genreList">
                            <div aria-label="test" ng-checked="item.isChecked" id="recipe-filter-chkbox"
                                ng-click="fltrCtrl.checkedItem(item)" tabindex="0" type="checkbox" role="checkbox"
                                aria-checked="false">
                                <div class="md-container md-ink-ripple" md-ink-ripple="" md-ink-ripple-checkbox="">
                                    <div class="md-icon"></div>
                                </div>
                                <div ng-transclude="" class="md-label">
                                    <h5 ng-bind="item.display_title" class="ng-binding ng-scope">Drinks/Juices</h5>
                                    <h6 ng-if="fltrCtrl.selectedTag === 'both'" ng-bind="item.count +' Videos'"
                                        class="ng-binding ng-scope">908 Videos</h6>
                                </div>
                            </div>
                            <div class="row">
                                <hr>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6 filter-genre-option ng-scope"
                            ng-repeat="item in fltrCtrl.genreList">
                            <div aria-label="test" ng-checked="item.isChecked" id="recipe-filter-chkbox"
                                ng-click="fltrCtrl.checkedItem(item)" tabindex="0" type="checkbox" role="checkbox"
                                aria-checked="false">
                                <div class="md-container md-ink-ripple" md-ink-ripple="" md-ink-ripple-checkbox="">
                                    <div class="md-icon"></div>
                                </div>
                                <div ng-transclude="" class="md-label">
                                    <h5 ng-bind="item.display_title" class="ng-binding ng-scope">Condiment</h5>
                                    <h6 ng-if="fltrCtrl.selectedTag === 'both'" ng-bind="item.count +' Videos'"
                                        class="ng-binding ng-scope">113 Videos</h6>
                                </div>
                            </div>
                            <div class="row">
                                <hr>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6 filter-genre-option ng-scope"
                            ng-repeat="item in fltrCtrl.genreList">
                            <div aria-label="test" ng-checked="item.isChecked" id="recipe-filter-chkbox"
                                ng-click="fltrCtrl.checkedItem(item)" tabindex="0" type="checkbox" role="checkbox"
                                aria-checked="false">
                                <div class="md-container md-ink-ripple" md-ink-ripple="" md-ink-ripple-checkbox="">
                                    <div class="md-icon"></div>
                                </div>
                                <div ng-transclude="" class="md-label">
                                    <h5 ng-bind="item.display_title" class="ng-binding ng-scope">Quick Recipes</h5>
                                  
                                    <h6 ng-if="fltrCtrl.selectedTag === 'both'" ng-bind="item.count +' Videos'"
                                        class="ng-binding ng-scope">3256 Videos</h6>
                                   
                                </div>
                            </div>
                            <div class="row">
                                <hr>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6 filter-genre-option ng-scope">
                            <div aria-label="test" tabindex="0" type="checkbox" role="checkbox"
                                aria-checked="false">
                                <div class="md-container md-ink-ripple" md-ink-ripple="" md-ink-ripple-checkbox="">
                                    <div class="md-icon"></div>
                                </div>
                                <div ng-transclude="" class="md-label">
                                    <h5 ng-bind="item.display_title" class="ng-binding ng-scope">Chef Special</h5>
                                  
                                    <h6 class="ng-binding ng-scope">30 Videos</h6>
                                   
                                </div>
                            </div>
                            <div class="row">
                                <hr>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6 filter-genre-option ng-scope"
                            ng-repeat="item in fltrCtrl.genreList">
                            <div aria-label="test">
                                <div class="md-container md-ink-ripple" md-ink-ripple="" md-ink-ripple-checkbox="">
                                    <div class="md-icon"></div>
                                </div>
                                <div ng-transclude="" class="md-label">
                                    <h5 class="ng-binding ng-scope">Snacks Starters</h5>
                                  
                                    <h6 class="ng-binding ng-scope"> Videos</h6>
                                 
                                </div>
                            </div>
                            <div class="row">
                                <hr>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6 filter-genre-option ng-scope">
                            <div aria-label="test" ng-checked="item.isChecked" id="recipe-filter-chkbox"
                                ng-click="fltrCtrl.checkedItem(item)" tabindex="0" type="checkbox" role="checkbox"
                                aria-checked="false">
                                <div class="md-container md-ink-ripple" md-ink-ripple="" md-ink-ripple-checkbox="">
                                    <div class="md-icon"></div>
                                </div>
                                <div ng-transclude="" class="md-label">
                                    <h5 ng-bind="item.display_title" class="ng-binding ng-scope">Sweets Desserts</h5>
                                  
                                    <h6 ng-if="fltrCtrl.selectedTag === 'both'" ng-bind="item.count +' Videos'"
                                        class="ng-binding ng-scope">1812 Videos</h6>
                                   
                                </div>
                            </div>
                            <div class="row">
                                <hr>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6 filter-genre-option ng-scope"
                            ng-repeat="item in fltrCtrl.genreList">
                            <div aria-label="test" ng-checked="item.isChecked" id="recipe-filter-chkbox"
                                ng-click="fltrCtrl.checkedItem(item)" tabindex="0" type="checkbox" role="checkbox"
                                aria-checked="false">
                                <div class="md-container md-ink-ripple" md-ink-ripple="" md-ink-ripple-checkbox="">
                                    <div class="md-icon"></div>
                                </div>
                                <div ng-transclude="" class="md-label">
                                    <h5 ng-bind="item.display_title" class="ng-binding ng-scope">Indian Cuisine</h5>
                                
                                    <h6 ng-if="fltrCtrl.selectedTag === 'both'" ng-bind="item.count +' Videos'"
                                        class="ng-binding ng-scope">2806 Videos</h6>
                                    
                                </div>
                            </div>
                            <div class="row">
                                <hr>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6 filter-genre-option ng-scope"
                            ng-repeat="item in fltrCtrl.genreList">
                            <div  type="checkbox" role="checkbox"
                                aria-checked="false">
                                <div class="md-container md-ink-ripple" md-ink-ripple="" md-ink-ripple-checkbox="">
                                    <div class="md-icon"></div>
                                </div>
                                <div class="md-label">
                                    <h5  class="ng-binding ng-scope">Healthy Food</h5>
                                   
                                    <h6 ng-if="fltrCtrl.selectedTag === 'both'" ng-bind="item.count +' Videos'"
                                        class="ng-binding ng-scope"> Videos</h6>
                                    
                                </div>
                            </div>
                            <div class="row">
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="dialog-button-area filter-button-area">
                     <button ng-click="closeThisDialog(0)"
                        class="form-button">CANCEL</button> 
                        <button ng-disabled="!fltrCtrl.checkedItems.length!=0"
                        class="form-button blue-button filter-button-margin" ng-click="fltrCtrl.submit()"
                        disabled="disabled">APPLY</button>
                    </div>
            </div>
        </div>
        <div class="ngdialog-close"></div>
    </div>
</div>
