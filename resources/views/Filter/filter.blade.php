<link rel="stylesheet" href="{{ asset('css/filter.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>


<div class="ngdialog search-dialog ngdialog-disabled-animation ng-scope" role="alertdialog">
    <div class="overlay"></div>
    <div class="ngdialog-content" role="document">

        <div class="container-fluid filter">
            <div class="margin-container">
                <div class="header-filter">
                    <h1>Filter</h1>
                    <span class="icon-close">&#x2716;</span>
                </div>
                <div class="clear"></div>
                <div class="row">
                    <hr>
                </div>
                <div class="ng-pristine ng-untouched ng-valid _md ng-not-empty" style="">
                    <ul class="radiolinks">
                        <li>

                            <div checked="checked">
                                <label class="md-container">
                                    <input type="radio" name="radio">
                                    <span class="checkcircle"></span>
                                </label>
                                <div ng-transclude="" class="md-label">
                                    <span class="ng-scope">Veg</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div aria-label="Non Veg">
                                <label class="md-container">
                                    <input type="radio" name="radio">
                                    <span class="checkcircle"></span>
                                </label>
                                <div ng-transclude="" class="md-label"><span class="ng-scope">Non Veg</span></div>
                            </div>
                        </li>
                        <li class="md-checked">
                            <div class="md-checked">
                                <label class="md-container">
                                    <input type="radio" name="radio" value="Both">
                                    <span class="checkcircle"></span>
                                </label>
                                <div ng-transclude="" class="md-label">
                                    <span class="ng-scope">Both</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <h3 role="button" tabindex="0">
                    <span>
                        <label class="contain">
                            <input type="checkbox"  id="select-all-checkbox">
                            <span class="checkmark"></span>
                        </label>

                    </span>
                    <div ng-transclude="" class="md-label">
                        <span class="ng-scope">Select all</span>
                    </div>

                </h3>

                <div class="row">
                    <hr>
                </div>
                <div>
                    <div class="row recipe-filter-option">
                        <div class="col-md-6 col-sm-6 col filter-genre-option">
                            <div class="checkbox">
                            <label class="contain">
                                <input type="checkbox" class="filter-checkbox" name="filter-option" value="Traditional">
                                <span class="checkmark"></span>
                            </label>
                            <div ng-transclude="" class="md-label">
                                <h5 >Traditional</h5>
                                <h6 > Videos</h6>
                            </div>
                        </div>
                            <div class="row">
                                <hr>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col filter-genre-option">
                            <div class="checkbox">
                                <label class="contain">
                                    <input type="checkbox" class="filter-checkbox" name="filter-option" value="Breakfast">
                                    <span class="checkmark"></span>
                                </label>
                                <div class="md-label">
                                    <h5>Breakfast</h5>
                                    <h6 class="ng-binding ng-scope">
                                         Videos</h6>
                                </div>
                            </div>
                            <div class="row">
                                <hr>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col filter-genre-option">
                            <div class="checkbox">
                                <label class="contain">
                                    <input type="checkbox"  class="filter-checkbox" name="filter-option">
                                    <span class="checkmark"></span>
                                </label>
                                <div class="md-label">
                                    <h5>Confectionery
                                        </h5>
                                    <h6 class="ng-binding ng-scope">
                                         Videos</h6>
                                </div>
                            </div>
                            <div class="row">
                                <hr>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col filter-genre-option">
                            <div role="checkbox">
                                <label class="contain">
                                    <input type="checkbox" class="filter-checkbox" name="filter-option">
                                    <span class="checkmark"></span>
                                </label>
                                <div class="md-label">
                                    <h5>Pickles</h5>
                                    <h6 class="ng-binding ng-scope">
                                         Videos</h6>
                                </div>
                            </div>
                            <div class="row">
                                <hr>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col filter-genre-option">
                            <div role="checkbox">
                                <label class="contain">
                                    <input type="checkbox"  class="filter-checkbox" name="filter-option">
                                    <span class="checkmark"></span>
                                </label>
                                <div class="md-label">
                                    <h5> International Cuisines</h5>
                                    <h6 class="ng-binding ng-scope">
                                         Videos</h6>
                                </div>
                            </div>
                            <div class="row">
                                <hr>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col filter-genre-option">
                            <div role="checkbox">
                                <label class="contain">
                                    <input type="checkbox" class="filter-checkbox" name="filter-option">
                                    <span class="checkmark"></span>
                                </label>
                                <div class="md-label">
                                    <h5>Soups</h5>
                                    <h6 class="ng-binding ng-scope">
                                         Videos</h6>
                                </div>
                            </div>
                            <div class="row">
                                <hr>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col filter-genre-option">
                            <div role="checkbox">
                                <label class="contain">
                                    <input type="checkbox"  class="filter-checkbox" name="filter-option">
                                    <span class="checkmark"></span>
                                </label>
                                <div class="md-label">
                                    <h5>Drinks/Juices</h5>
                                    <h6 class="ng-binding ng-scope">
                                         Videos</h6>
                                </div>
                            </div>
                            <div class="row">
                                <hr>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col filter-genre-option">
                            <div role="checkbox">
                                <label class="contain">
                                    <input type="checkbox"  class="filter-checkbox" name="filter-option">
                                    <span class="checkmark"></span>
                                </label>
                                <div class="md-label">
                                    <h5>Condiment</h5>
                                    <h6 class="ng-binding ng-scope">
                                         Videos</h6>
                                </div>
                            </div>
                            <div class="row">
                                <hr>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col filter-genre-option">
                            <div role="checkbox">
                                <label class="contain">
                                    <input type="checkbox"  class="filter-checkbox" name="filter-option">
                                    <span class="checkmark"></span>
                                </label>
                                <div class="md-label">
                                    <h5>Quick Recipes</h5>
                                    <h6 class="ng-binding ng-scope">
                                         Videos</h6>
                                </div>
                            </div>
                            <div class="row">
                                <hr>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col filter-genre-option">
                            <div role="checkbox">
                                <label class="contain">
                                    <input type="checkbox"  class="filter-checkbox" name="filter-option">
                                    <span class="checkmark"></span>
                                </label>
                                <div class="md-label">
                                    <h5>Chef Special</h5>
                                    <h6 class="ng-binding ng-scope">
                                         Videos</h6>
                                </div>
                            </div>
                            <div class="row">
                                <hr>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col filter-genre-option">
                            <div role="checkbox">
                                <label class="contain">
                                    <input type="checkbox"  class="filter-checkbox" name="filter-option">
                                    <span class="checkmark"></span>
                                </label>
                                <div class="md-label">
                                    <h5>Snacks Starters</h5>
                                    <h6 class="ng-binding ng-scope">
                                         Videos</h6>
                                </div>
                            </div>
                            <div class="row">
                                <hr>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col filter-genre-option">
                            <div role="checkbox">
                                <label class="contain">
                                    <input type="checkbox"  class="filter-checkbox" name="filter-option">
                                    <span class="checkmark"></span>
                                </label>
                                <div class="md-label">
                                    <h5>Sweets Desserts</h5>
                                    <h6 class="ng-binding ng-scope">
                                         Videos</h6>
                                </div>
                            </div>
                            <div class="row">
                                <hr>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col filter-genre-option">
                            <div role="checkbox">
                                <label class="contain">
                                    <input type="checkbox" class="filter-checkbox" name="filter-option">
                                    <span class="checkmark"></span>
                                </label>
                                <div class="md-label">
                                    <h5>Indian Cuisine</h5>
                                    <h6 class="ng-binding ng-scope">
                                         Videos</h6>
                                </div>
                            </div>
                            <div class="row">
                                <hr>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col filter-genre-option">
                            <div role="checkbox">
                                <label class="contain">
                                    <input type="checkbox"  class="filter-checkbox" name="filter-option">
                                    <span class="checkmark"></span>
                                </label>
                                <div class="md-label">
                                    <h5>Healthy Food</h5>
                                    <h6 class="ng-binding ng-scope">
                                         Videos</h6>
                                </div>
                            </div>
                            <div class="row">
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
            <div class="dialog-button-area filter-button-area">
                <button class="form-button">CANCEL</button>
                <button
                    class="form-button blue-button filter-button-margin" 
                    disabled="disabled">APPLY</button>
            </div>
        </div>
    </div>
</div>

<script src="{{asset('js/filter.js')}}"></script>
