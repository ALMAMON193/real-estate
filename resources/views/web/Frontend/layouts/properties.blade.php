<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>Full Grid</title>
    <!-- FAVICON -->
  @include("web.Frontend.partials.style")
</head>

<body class="inner-pages homepage-4 agents hp-6 full hd-white">
<!-- Wrapper -->
<div id="wrapper">
    <!-- START SECTION HEADINGS -->
    <!-- Header Container
    ================================================== -->
   @include('web.Frontend.partials.single_property_header')
    <div class="clearfix"></div>
    <!-- Header Container / End -->
    <!-- END SECTION HEADINGS -->

    <!-- START SECTION PROPERTIES LISTING -->
    <section class="properties-list featured portfolio blog">
        <div class="container">
            <section class="headings-2 pt-0 pb-0">
                <div class="pro-wrapper">
                    <div class="detail-wrapper-body">
                        <div class="listing-title-bar">
                            <div class="text-heading text-left">
                                <p><a href="index.html">Home </a> &nbsp;/&nbsp; <span>Listings</span></p>
                            </div>
                            <h3>Grid View</h3>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Search Form -->
            <div class="col-12 px-0 parallax-searchs">
                <div class="banner-search-wrap">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tabs_1">
                            <div class="rld-main-search">
                                <div class="row">
                                    <div class="rld-single-input">
                                        <input type="text" placeholder="Enter Keyword...">
                                    </div>
                                    <div class="rld-single-select ml-22">
                                        <select class="select single-select">
                                            <option value="1">Property Type</option>
                                            <option value="2">Family House</option>
                                            <option value="3">Apartment</option>
                                            <option value="3">Condo</option>
                                        </select>
                                    </div>
                                    <div class="rld-single-select">
                                        <select class="select single-select mr-0">
                                            <option value="1">Location</option>
                                            <option value="2">Los Angeles</option>
                                            <option value="3">Chicago</option>
                                            <option value="3">Philadelphia</option>
                                            <option value="3">San Francisco</option>
                                            <option value="3">Miami</option>
                                            <option value="3">Houston</option>
                                        </select>
                                    </div>
                                    <div class="dropdown-filter"><span>Advanced Search</span></div>
                                    <div class="col-xl-2 col-lg-2 col-md-4 pl-0">
                                        <a class="btn btn-yellow" href="#">Search Now</a>
                                    </div>
                                    <div class="explore__form-checkbox-list full-filter">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0">
                                                <!-- Form Property Status -->
                                                <div class="form-group categories">
                                                    <div class="nice-select form-control wide" tabindex="0"><span
                                                            class="current"><i class="fa fa-home"></i>Property
                                                                Status</span>
                                                        <ul class="list">
                                                            <li data-value="1" class="option selected ">For Sale
                                                            </li>
                                                            <li data-value="2" class="option">For Rent</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!--/ End Form Property Status -->
                                            </div>
                                            <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0 ">
                                                <!-- Form Bedrooms -->
                                                <div class="form-group beds">
                                                    <div class="nice-select form-control wide" tabindex="0"><span
                                                            class="current"><i class="fa fa-bed"
                                                                               aria-hidden="true"></i> Bedrooms</span>
                                                        <ul class="list">
                                                            <li data-value="1" class="option selected">1</li>
                                                            <li data-value="2" class="option">2</li>
                                                            <li data-value="3" class="option">3</li>
                                                            <li data-value="3" class="option">4</li>
                                                            <li data-value="3" class="option">5</li>
                                                            <li data-value="3" class="option">6</li>
                                                            <li data-value="3" class="option">7</li>
                                                            <li data-value="3" class="option">8</li>
                                                            <li data-value="3" class="option">9</li>
                                                            <li data-value="3" class="option">10</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!--/ End Form Bedrooms -->
                                            </div>
                                            <div class="col-lg-4 col-md-6 py-1 pl-0 pr-0">
                                                <!-- Form Bathrooms -->
                                                <div class="form-group bath">
                                                    <div class="nice-select form-control wide" tabindex="0"><span
                                                            class="current"><i class="fa fa-bath"
                                                                               aria-hidden="true"></i> Bathrooms</span>
                                                        <ul class="list">
                                                            <li data-value="1" class="option selected">1</li>
                                                            <li data-value="2" class="option">2</li>
                                                            <li data-value="3" class="option">3</li>
                                                            <li data-value="3" class="option">4</li>
                                                            <li data-value="3" class="option">5</li>
                                                            <li data-value="3" class="option">6</li>
                                                            <li data-value="3" class="option">7</li>
                                                            <li data-value="3" class="option">8</li>
                                                            <li data-value="3" class="option">9</li>
                                                            <li data-value="3" class="option">10</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!--/ End Form Bathrooms -->
                                            </div>
                                            <div class="col-lg-5 col-md-12 col-sm-12 py-1 pr-30 mr-5 sld">
                                                <!-- Price Fields -->
                                                <div class="main-search-field-2">
                                                    <!-- Area Range -->
                                                    <div class="range-slider">
                                                        <label>Area Size</label>
                                                        <div id="area-range" data-min="0" data-max="1300"
                                                             data-unit="sq ft"></div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <br>
                                                    <!-- Price Range -->
                                                    <div class="range-slider">
                                                        <label>Price Range</label>
                                                        <div id="price-range" data-min="0" data-max="600000"
                                                             data-unit="$"></div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-12 py-1 pr-30">
                                                <!-- Checkboxes -->
                                                <div class="checkboxes one-in-row margin-bottom-10 ch-1">
                                                    <input id="check-2" type="checkbox" name="check">
                                                    <label for="check-2">Air Conditioning</label>
                                                    <input id="check-3" type="checkbox" name="check">
                                                    <label for="check-3">Swimming Pool</label>
                                                    <input id="check-4" type="checkbox" name="check">
                                                    <label for="check-4">Central Heating</label>
                                                    <input id="check-5" type="checkbox" name="check">
                                                    <label for="check-5">Laundry Room</label>
                                                    <input id="check-6" type="checkbox" name="check">
                                                    <label for="check-6">Gym</label>
                                                    <input id="check-7" type="checkbox" name="check">
                                                    <label for="check-7">Alarm</label>
                                                    <input id="check-8" type="checkbox" name="check">
                                                    <label for="check-8">Window Covering</label>
                                                </div>
                                                <!-- Checkboxes / End -->
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-12 py-1 pr-30">
                                                <!-- Checkboxes -->
                                                <div class="checkboxes one-in-row margin-bottom-10 ch-2">
                                                    <input id="check-9" type="checkbox" name="check">
                                                    <label for="check-9">WiFi</label>
                                                    <input id="check-10" type="checkbox" name="check">
                                                    <label for="check-10">TV Cable</label>
                                                    <input id="check-11" type="checkbox" name="check">
                                                    <label for="check-11">Dryer</label>
                                                    <input id="check-12" type="checkbox" name="check">
                                                    <label for="check-12">Microwave</label>
                                                    <input id="check-13" type="checkbox" name="check">
                                                    <label for="check-13">Washer</label>
                                                    <input id="check-14" type="checkbox" name="check">
                                                    <label for="check-14">Refrigerator</label>
                                                    <input id="check-15" type="checkbox" name="check">
                                                    <label for="check-15">Outdoor Shower</label>
                                                </div>
                                                <!-- Checkboxes / End -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ End Search Form -->
            <section class="headings-2 pt-0">
                <div class="pro-wrapper">
                    <div class="detail-wrapper-body">
                        <div class="listing-title-bar">
                            <div class="text-heading text-left">
                                <p class="font-weight-bold mb-0 mt-3">9 Search results</p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="cod-pad single detail-wrapper mr-2 mt-0 d-flex justify-content-md-end align-items-center">
                        <div class="input-group border rounded input-group-lg w-auto mr-4">
                            <label
                                class="input-group-text bg-transparent border-0 text-uppercase letter-spacing-093 pr-1 pl-3"
                                for="inputGroupSelect01"><i class="fas fa-align-left fs-16 pr-2"></i>Sortby:</label>
                            <select class="form-control border-0 bg-transparent shadow-none p-0 selectpicker sortby"
                                    data-style="bg-transparent border-0 font-weight-600 btn-lg pl-0 pr-3"
                                    id="inputGroupSelect01" name="sortby">
                                <option selected>Top Selling</option>
                                <option value="1">Most Viewed</option>
                                <option value="2">Price(low to high)</option>
                                <option value="3">Price(high to low)</option>
                            </select>
                        </div>
                        <div class="sorting-options">
                            <a href="properties-full-list-1.html" class="change-view-btn lde"><i
                                    class="fa fa-th-list"></i></a>
                            <a href="#" class="change-view-btn active-view-btn"><i class="fa fa-th-large"></i></a>
                        </div>
                    </div>
                </div>
            </section>
            <div class="row">
                <div class="item col-lg-4 col-md-6 col-xs-12 landscapes sale">
                    <div class="project-single" data-aos="fade-up">
                        <div class="project-inner project-head">
                            <div class="homes">
                                <!-- homes img -->
                                <a href="single-property-3.html" class="homes-img">
                                    <div class="homes-tag button alt featured">Featured</div>
                                    <div class="homes-tag button alt sale">For Sale</div>
                                    <div class="homes-price">$9,000/mo</div>
                                    <img src="images/blog/b-11.jpg" alt="home-1" class="img-responsive">
                                </a>
                            </div>
                            <div class="button-effect">
                                <a href="single-property-3.html" class="btn"><i class="fa fa-link"></i></a>
                                <a href="https://www.youtube.com/watch?v=14semTlwyUY"
                                   class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                <a href="single-property-2.html" class="img-poppu btn"><i
                                        class="fa fa-photo"></i></a>
                            </div>
                        </div>
                        <!-- homes content -->
                        <div class="homes-content">
                            <!-- homes address -->
                            <h3><a href="single-property-3.html">Real House Luxury Villa</a></h3>
                            <p class="homes-address mb-3">
                                <a href="single-property-3.html">
                                    <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South,
                                            NYC</span>
                                </a>
                            </p>
                            <!-- homes List -->
                            <ul class="homes-list clearfix pb-3">
                                <li class="the-icons">
                                    <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                    <span>6 Bedrooms</span>
                                </li>
                                <li class="the-icons">
                                    <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                    <span>3 Bathrooms</span>
                                </li>
                                <li class="the-icons">
                                    <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                    <span>720 sq ft</span>
                                </li>
                                <li class="the-icons">
                                    <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                    <span>2 Garages</span>
                                </li>
                            </ul>
                            <div class="footer">
                                <a href="agent-details.html">
                                    <img src="images/testimonials/ts-1.jpg" alt="" class="mr-2"> Lisa Jhonson
                                </a>
                                <span>2 months ago</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-lg-4 col-md-6 col-xs-12 people rent">
                    <div class="project-single" data-aos="fade-up">
                        <div class="project-inner project-head">
                            <div class="homes">
                                <!-- homes img -->
                                <a href="single-property-3.html" class="homes-img">
                                    <div class="homes-tag button sale rent">For Rent</div>
                                    <div class="homes-price">$3,000/mo</div>
                                    <img src="images/blog/b-12.jpg" alt="home-1" class="img-responsive">
                                </a>
                            </div>
                            <div class="button-effect">
                                <a href="single-property-3.html" class="btn"><i class="fa fa-link"></i></a>
                                <a href="https://www.youtube.com/watch?v=14semTlwyUY"
                                   class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                <a href="single-property-2.html" class="img-poppu btn"><i
                                        class="fa fa-photo"></i></a>
                            </div>
                        </div>
                        <!-- homes content -->
                        <div class="homes-content">
                            <!-- homes address -->
                            <h3><a href="single-property-3.html">Real House Luxury Villa</a></h3>
                            <p class="homes-address mb-3">
                                <a href="single-property-3.html">
                                    <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South,
                                            NYC</span>
                                </a>
                            </p>
                            <!-- homes List -->
                            <ul class="homes-list clearfix pb-3">
                                <li class="the-icons">
                                    <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                    <span>6 Bedrooms</span>
                                </li>
                                <li class="the-icons">
                                    <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                    <span>3 Bathrooms</span>
                                </li>
                                <li class="the-icons">
                                    <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                    <span>720 sq ft</span>
                                </li>
                                <li class="the-icons">
                                    <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                    <span>2 Garages</span>
                                </li>
                            </ul>
                            <div class="footer">
                                <a href="agent-details.html">
                                    <img src="images/testimonials/ts-2.jpg" alt="" class="mr-2"> Karl Smith
                                </a>
                                <span>2 months ago</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-lg-4 col-md-6 col-xs-12 people landscapes sale">
                    <div class="project-single" data-aos="fade-up">
                        <div class="project-inner project-head">
                            <div class="homes">
                                <!-- homes img -->
                                <a href="single-property-3.html" class="homes-img">
                                    <div class="homes-tag button alt sale">For Sale</div>
                                    <div class="homes-price">$9,000/mo</div>
                                    <img src="images/blog/b-1.jpg" alt="home-1" class="img-responsive">
                                </a>
                            </div>
                            <div class="button-effect">
                                <a href="single-property-3.html" class="btn"><i class="fa fa-link"></i></a>
                                <a href="https://www.youtube.com/watch?v=14semTlwyUY"
                                   class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                <a href="single-property-2.html" class="img-poppu btn"><i
                                        class="fa fa-photo"></i></a>
                            </div>
                        </div>
                        <!-- homes content -->
                        <div class="homes-content">
                            <!-- homes address -->
                            <h3><a href="single-property-3.html">Real House Luxury Villa</a></h3>
                            <p class="homes-address mb-3">
                                <a href="single-property-3.html">
                                    <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South,
                                            NYC</span>
                                </a>
                            </p>
                            <!-- homes List -->
                            <ul class="homes-list clearfix pb-3">
                                <li class="the-icons">
                                    <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                    <span>6 Bedrooms</span>
                                </li>
                                <li class="the-icons">
                                    <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                    <span>3 Bathrooms</span>
                                </li>
                                <li class="the-icons">
                                    <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                    <span>720 sq ft</span>
                                </li>
                                <li class="the-icons">
                                    <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                    <span>2 Garages</span>
                                </li>
                            </ul>
                            <div class="footer">
                                <a href="agent-details.html">
                                    <img src="images/testimonials/ts-3.jpg" alt="" class="mr-2"> katy Teddy
                                </a>
                                <span>2 months ago</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-lg-4 col-md-6 col-xs-12 people landscapes rent">
                    <div class="project-single" data-aos="fade-up">
                        <div class="project-inner project-head">
                            <div class="homes">
                                <!-- homes img -->
                                <a href="single-property-3.html" class="homes-img">
                                    <div class="homes-tag button alt featured">Featured</div>
                                    <div class="homes-tag button sale rent">For Rent</div>
                                    <div class="homes-price">$3,000/mo</div>
                                    <img src="images/feature-properties/fp-10.jpg" alt="home-1"
                                         class="img-responsive">
                                </a>
                            </div>
                            <div class="button-effect">
                                <a href="single-property-3.html" class="btn"><i class="fa fa-link"></i></a>
                                <a href="https://www.youtube.com/watch?v=14semTlwyUY"
                                   class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                <a href="single-property-2.html" class="img-poppu btn"><i
                                        class="fa fa-photo"></i></a>
                            </div>
                        </div>
                        <!-- homes content -->
                        <div class="homes-content">
                            <!-- homes address -->
                            <h3><a href="single-property-3.html">Real House Luxury Villa</a></h3>
                            <p class="homes-address mb-3">
                                <a href="properties-details.html">
                                    <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South,
                                            NYC</span>
                                </a>
                            </p>
                            <!-- homes List -->
                            <ul class="homes-list clearfix pb-3">
                                <li class="the-icons">
                                    <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                    <span>6 Bedrooms</span>
                                </li>
                                <li class="the-icons">
                                    <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                    <span>3 Bathrooms</span>
                                </li>
                                <li class="the-icons">
                                    <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                    <span>720 sq ft</span>
                                </li>
                                <li class="the-icons">
                                    <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                    <span>2 Garages</span>
                                </li>
                            </ul>
                            <div class="footer">
                                <a href="agent-details.html">
                                    <img src="images/testimonials/ts-4.jpg" alt="" class="mr-2"> Jhon Malon
                                </a>
                                <span>2 months ago</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-lg-4 col-md-6 col-xs-12 people sale">
                    <div class="project-single" data-aos="fade-up">
                        <div class="project-inner project-head">
                            <div class="homes">
                                <!-- homes img -->
                                <a href="single-property-3.html" class="homes-img">
                                    <div class="homes-tag button alt sale">For Sale</div>
                                    <div class="homes-price">$9,000/mo</div>
                                    <img src="images/feature-properties/fp-11.jpg" alt="home-1"
                                         class="img-responsive">
                                </a>
                            </div>
                            <div class="button-effect">
                                <a href="single-property-3.html" class="btn"><i class="fa fa-link"></i></a>
                                <a href="https://www.youtube.com/watch?v=14semTlwyUY"
                                   class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                <a href="single-property-2.html" class="img-poppu btn"><i
                                        class="fa fa-photo"></i></a>
                            </div>
                        </div>
                        <!-- homes content -->
                        <div class="homes-content">
                            <!-- homes address -->
                            <h3><a href="single-property-3.html">Real House Luxury Villa</a></h3>
                            <p class="homes-address mb-3">
                                <a href="single-property-3.html">
                                    <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South,
                                            NYC</span>
                                </a>
                            </p>
                            <!-- homes List -->
                            <ul class="homes-list clearfix pb-3">
                                <li class="the-icons">
                                    <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                    <span>6 Bedrooms</span>
                                </li>
                                <li class="the-icons">
                                    <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                    <span>3 Bathrooms</span>
                                </li>
                                <li class="the-icons">
                                    <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                    <span>720 sq ft</span>
                                </li>
                                <li class="the-icons">
                                    <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                    <span>2 Garages</span>
                                </li>
                            </ul>
                            <div class="footer">
                                <a href="agent-details.html">
                                    <img src="images/testimonials/ts-5.jpg" alt="" class="mr-2"> Susan Delman
                                </a>
                                <span>2 months ago</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-lg-4 col-md-6 it2 col-xs-12 web rent">
                    <div class="project-single" data-aos="fade-up">
                        <div class="project-inner project-head">
                            <div class="homes">
                                <!-- homes img -->
                                <a href="single-property-3.html" class="homes-img">
                                    <div class="homes-tag button sale rent">For Rent</div>
                                    <div class="homes-price">$3,000/mo</div>
                                    <img src="images/feature-properties/fp-12.jpg" alt="home-1"
                                         class="img-responsive">
                                </a>
                            </div>
                            <div class="button-effect">
                                <a href="single-property-3.html" class="btn"><i class="fa fa-link"></i></a>
                                <a href="https://www.youtube.com/watch?v=14semTlwyUY"
                                   class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                <a href="single-property-2.html" class="img-poppu btn"><i
                                        class="fa fa-photo"></i></a>
                            </div>
                        </div>
                        <!-- homes content -->
                        <div class="homes-content">
                            <!-- homes address -->
                            <h3><a href="single-property-3.html">Real House Luxury Villa</a></h3>
                            <p class="homes-address mb-3">
                                <a href="single-property-3.html">
                                    <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South,
                                            NYC</span>
                                </a>
                            </p>
                            <!-- homes List -->
                            <ul class="homes-list clearfix pb-3">
                                <li class="the-icons">
                                    <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                    <span>6 Bedrooms</span>
                                </li>
                                <li class="the-icons">
                                    <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                    <span>3 Bathrooms</span>
                                </li>
                                <li class="the-icons">
                                    <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                    <span>720 sq ft</span>
                                </li>
                                <li class="the-icons">
                                    <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                    <span>2 Garages</span>
                                </li>
                            </ul>
                            <div class="footer">
                                <a href="agent-details.html">
                                    <img src="images/testimonials/ts-6.jpg" alt="" class="mr-2"> Chan Lee
                                </a>
                                <span>2 months ago</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-lg-4 col-md-6 col-xs-12 landscapes sale">
                    <div class="project-single" data-aos="fade-up">
                        <div class="project-inner project-head">
                            <div class="homes">
                                <!-- homes img -->
                                <a href="single-property-3.html" class="homes-img">
                                    <div class="homes-tag button sale rent">For Rent</div>
                                    <div class="homes-price">$3,000/mo</div>
                                    <img src="images/feature-properties/fp-1.jpg" alt="home-1"
                                         class="img-responsive">
                                </a>
                            </div>
                            <div class="button-effect">
                                <a href="single-property-3.html" class="btn"><i class="fa fa-link"></i></a>
                                <a href="https://www.youtube.com/watch?v=14semTlwyUY"
                                   class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                <a href="single-property-2.html" class="img-poppu btn"><i
                                        class="fa fa-photo"></i></a>
                            </div>
                        </div>
                        <!-- homes content -->
                        <div class="homes-content">
                            <!-- homes address -->
                            <h3><a href="single-property-3.html">Real House Luxury Villa</a></h3>
                            <p class="homes-address mb-3">
                                <a href="single-property-3.html">
                                    <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South,
                                            NYC</span>
                                </a>
                            </p>
                            <!-- homes List -->
                            <ul class="homes-list clearfix pb-3">
                                <li class="the-icons">
                                    <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                    <span>6 Bedrooms</span>
                                </li>
                                <li class="the-icons">
                                    <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                    <span>3 Bathrooms</span>
                                </li>
                                <li class="the-icons">
                                    <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                    <span>720 sq ft</span>
                                </li>
                                <li class="the-icons">
                                    <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                    <span>2 Garages</span>
                                </li>
                            </ul>
                            <div class="footer">
                                <a href="agent-details.html">
                                    <img src="images/testimonials/ts-1.jpg" alt="" class="mr-2"> Chan Lee
                                </a>
                                <span>2 months ago</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-lg-4 col-md-6 col-xs-12 people rent">
                    <div class="project-single" data-aos="fade-up">
                        <div class="project-inner project-head">
                            <div class="homes">
                                <!-- homes img -->
                                <a href="single-property-3.html" class="homes-img">
                                    <div class="homes-tag button sale rent">For Rent</div>
                                    <div class="homes-price">$3,000/mo</div>
                                    <img src="images/feature-properties/fp-2.jpg" alt="home-1"
                                         class="img-responsive">
                                </a>
                            </div>
                            <div class="button-effect">
                                <a href="single-property-3.html" class="btn"><i class="fa fa-link"></i></a>
                                <a href="https://www.youtube.com/watch?v=14semTlwyUY"
                                   class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                <a href="single-property-2.html" class="img-poppu btn"><i
                                        class="fa fa-photo"></i></a>
                            </div>
                        </div>
                        <!-- homes content -->
                        <div class="homes-content">
                            <!-- homes address -->
                            <h3><a href="single-property-3.html">Real House Luxury Villa</a></h3>
                            <p class="homes-address mb-3">
                                <a href="single-property-3.html">
                                    <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South,
                                            NYC</span>
                                </a>
                            </p>
                            <!-- homes List -->
                            <ul class="homes-list clearfix pb-3">
                                <li class="the-icons">
                                    <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                    <span>6 Bedrooms</span>
                                </li>
                                <li class="the-icons">
                                    <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                    <span>3 Bathrooms</span>
                                </li>
                                <li class="the-icons">
                                    <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                    <span>720 sq ft</span>
                                </li>
                                <li class="the-icons">
                                    <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                    <span>2 Garages</span>
                                </li>
                            </ul>
                            <div class="footer">
                                <a href="agent-details.html">
                                    <img src="images/testimonials/ts-2.jpg" alt="" class="mr-2"> Chan Lee
                                </a>
                                <span>2 months ago</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-lg-4 col-md-6 col-xs-12 people landscapes sale">
                    <div class="project-single no-mb" data-aos="fade-up">
                        <div class="project-inner project-head">
                            <div class="homes">
                                <!-- homes img -->
                                <a href="single-property-3.html" class="homes-img">
                                    <div class="homes-tag button sale rent">For Rent</div>
                                    <div class="homes-price">$3,000/mo</div>
                                    <img src="images/feature-properties/fp-3.jpg" alt="home-1"
                                         class="img-responsive">
                                </a>
                            </div>
                            <div class="button-effect">
                                <a href="single-property-3.html" class="btn"><i class="fa fa-link"></i></a>
                                <a href="https://www.youtube.com/watch?v=14semTlwyUY"
                                   class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                <a href="single-property-2.html" class="img-poppu btn"><i
                                        class="fa fa-photo"></i></a>
                            </div>
                        </div>
                        <!-- homes content -->
                        <div class="homes-content">
                            <!-- homes address -->
                            <h3><a href="single-property-3.html">Real House Luxury Villa</a></h3>
                            <p class="homes-address mb-3">
                                <a href="single-property-3.html">
                                    <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South,
                                            NYC</span>
                                </a>
                            </p>
                            <!-- homes List -->
                            <ul class="homes-list clearfix pb-3">
                                <li class="the-icons">
                                    <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                    <span>6 Bedrooms</span>
                                </li>
                                <li class="the-icons">
                                    <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                    <span>3 Bathrooms</span>
                                </li>
                                <li class="the-icons">
                                    <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                    <span>720 sq ft</span>
                                </li>
                                <li class="the-icons">
                                    <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                    <span>2 Garages</span>
                                </li>
                            </ul>
                            <div class="footer">
                                <a href="agent-details.html">
                                    <img src="images/testimonials/ts-3.jpg" alt="" class="mr-2"> Chan Lee
                                </a>
                                <span>2 months ago</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav aria-label="..." class="pt-3">
                <ul class="pagination mt-0">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                    </li>
                    <li class="page-item active">
                        <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>
    <!-- END SECTION PROPERTIES LISTING -->

    <!-- START FOOTER -->
    <footer class="first-footer">
        <div class="top-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="netabout">
                            <a href="index.html" class="logo">
                                <img src="images/logo-footer.svg" alt="netcom">
                            </a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum incidunt architecto
                                soluta laboriosam, perspiciatis, aspernatur officiis esse.</p>
                        </div>
                        <div class="contactus">
                            <ul>
                                <li>
                                    <div class="info">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <p class="in-p">95 South Park Avenue, USA</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="info">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                        <p class="in-p">+456 875 369 208</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="info">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                        <p class="in-p ti">support@findhouses.com</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="navigation">
                            <h3>Navigation</h3>
                            <div class="nav-footer">
                                <ul>
                                    <li><a href="index.html">Home One</a></li>
                                    <li><a href="properties-right-sidebar.html">Properties Right</a></li>
                                    <li><a href="properties-full-list.html">Properties List</a></li>
                                    <li><a href="properties-details.html">Property Details</a></li>
                                    <li class="no-mgb"><a href="agents-listing-grid.html">Agents Listing</a></li>
                                </ul>
                                <ul class="nav-right">
                                    <li><a href="agent-details.html">Agents Details</a></li>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="blog.html">Blog Default</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                    <li class="no-mgb"><a href="contact-us.html">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="widget">
                            <h3>Twitter Feeds</h3>
                            <div class="twitter-widget contuct">
                                <div class="twitter-area">
                                    <div class="single-item">
                                        <div class="icon-holder">
                                            <i class="fa fa-twitter" aria-hidden="true"></i>
                                        </div>
                                        <div class="text">
                                            <h5><a href="#">@findhouses</a> all share them with me baby said inspet.
                                            </h5>
                                            <h4>about 5 days ago</h4>
                                        </div>
                                    </div>
                                    <div class="single-item">
                                        <div class="icon-holder">
                                            <i class="fa fa-twitter" aria-hidden="true"></i>
                                        </div>
                                        <div class="text">
                                            <h5><a href="#">@findhouses</a> all share them with me baby said inspet.
                                            </h5>
                                            <h4>about 5 days ago</h4>
                                        </div>
                                    </div>
                                    <div class="single-item">
                                        <div class="icon-holder">
                                            <i class="fa fa-twitter" aria-hidden="true"></i>
                                        </div>
                                        <div class="text">
                                            <h5><a href="#">@findhouses</a> all share them with me baby said inspet.
                                            </h5>
                                            <h4>about 5 days ago</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="newsletters">
                            <h3>Newsletters</h3>
                            <p>Sign Up for Our Newsletter to get Latest Updates and Offers. Subscribe to receive
                                news in your inbox.</p>
                        </div>
                        <form class="bloq-email mailchimp form-inline" method="post">
                            <label for="subscribeEmail" class="error"></label>
                            <div class="email">
                                <input type="email" id="subscribeEmail" name="EMAIL" placeholder="Enter Your Email">
                                <input type="submit" value="Subscribe">
                                <p class="subscription-success"></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="second-footer">
            <div class="container">
                <p>2021 © Copyright - All Rights Reserved.</p>
                <ul class="netsocials">
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </footer>

    <a data-scroll href="#wrapper" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
    <!-- END FOOTER -->

    <!--register form -->
    <div class="login-and-register-form modal">
        <div class="main-overlay"></div>
        <div class="main-register-holder">
            <div class="main-register fl-wrap">
                <div class="close-reg"><i class="fa fa-times"></i></div>
                <h3>Welcome to <span>Find<strong>Houses</strong></span></h3>
                <div class="soc-log fl-wrap">
                    <p>Login</p>
                    <a href="#" class="facebook-log"><i class="fa fa-facebook-official"></i>Log in with Facebook</a>
                    <a href="#" class="twitter-log"><i class="fa fa-twitter"></i> Log in with Twitter</a>
                </div>
                <div class="log-separator fl-wrap"><span>Or</span></div>
                <div id="tabs-container">
                    <ul class="tabs-menu">
                        <li class="current"><a href="#tab-1">Login</a></li>
                        <li><a href="#tab-2">Register</a></li>
                    </ul>
                    <div class="tab">
                        <div id="tab-1" class="tab-contents">
                            <div class="custom-form">
                                <form method="post" name="registerform">
                                    <label>Username or Email Address * </label>
                                    <input name="email" type="text" onClick="this.select()" value="">
                                    <label>Password * </label>
                                    <input name="password" type="password" onClick="this.select()" value="">
                                    <button type="submit" class="log-submit-btn"><span>Log In</span></button>
                                    <div class="clearfix"></div>
                                    <div class="filter-tags">
                                        <input id="check-a" type="checkbox" name="check">
                                        <label for="check-a">Remember me</label>
                                    </div>
                                </form>
                                <div class="lost_password">
                                    <a href="#">Lost Your Password?</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab">
                            <div id="tab-2" class="tab-contents">
                                <div class="custom-form">
                                    <form method="post" name="registerform" class="main-register-form"
                                          id="main-register-form2">
                                        <label>First Name * </label>
                                        <input name="name" type="text" onClick="this.select()" value="">
                                        <label>Second Name *</label>
                                        <input name="name2" type="text" onClick="this.select()" value="">
                                        <label>Email Address *</label>
                                        <input name="email" type="text" onClick="this.select()" value="">
                                        <label>Password *</label>
                                        <input name="password" type="password" onClick="this.select()" value="">
                                        <button type="submit" class="log-submit-btn"><span>Register</span></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--register form end -->
@include('web.Frontend.partials.script')

</div>
<!-- Wrapper / End -->
</body>

</html>
