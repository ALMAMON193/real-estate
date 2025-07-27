<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>Property Details</title>
    @include('web.Frontend.partials.style')
</head>
<body class="inner-pages sin-1 homepage-4 hd-white">
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
    <section class="single-proper blog details">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 blog-pots">
                    <div class="row">
                        <div class="col-md-12">
                            <section class="headings-2 pt-0">
                                <div class="pro-wrapper">
                                    <div class="detail-wrapper-body">
                                        <div class="listing-title-bar">
                                            <h5>{{$property->title}} <span
                                                    class="mrg-l-3 category-tag">For {{$property->status}}</span></h5>
                                            <div class="mt-0">
                                                <a href="#listing-location" class="listing-address">
                                                    <i class="fa fa-map-marker pr-2 ti-location-pin mrg-r-5"></i>77 -
                                                    Central Park South, NYC
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single detail-wrapper mr-2">
                                        <div class="detail-wrapper-body">
                                            <div class="listing-title-bar">
                                                <h4>$ 230,000</h4>
                                                <div class="mt-0">
                                                    <a href="#listing-location" class="listing-address">
                                                        <p>$ 1,200 / sq ft</p>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- main slider carousel items -->
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                </ol>
                                <div class="carousel-inner carus" role="listbox">
                                    <div class="carousel-item active">
                                        <img class="d-block img-fluid"
                                             src="{{asset('Frontend/images/slider/slider-1.jpg')}}" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block img-fluid"
                                             src="{{asset('Frontend/images/slider/slider-1.jpg')}}" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block img-fluid"
                                             src="{{asset('Frontend/images/slider/bg-h-1.jpeg')}}" alt="Third slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block img-fluid"
                                             src="{{asset('Frontend/images/slider/b-1.jpeg')}}" alt="Second slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                   data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                   data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <!-- cars content -->
                            <div class="homes-content details-2 mb-4">
                                <!-- cars List -->
                                <ul class="homes-list clearfix">
                                    @if($property->extraInformation->bedroom)
                                        <li>
                                            <i class="fa fa-bed" aria-hidden="true"></i>
                                            <span>Beds  {{ $property->extraInformation->bedroom }}</span>
                                        </li>
                                    @endif

                                    @if($property->extraInformation->bathroom)
                                        <li>
                                            <i class="fa fa-bath" aria-hidden="true"></i>
                                            <span>Baths  {{ $property->extraInformation->bathroom }}</span>
                                        </li>
                                    @endif

                                    @if($property->extraInformation->garage)
                                        <li>
                                            <i class="fa fa-car" aria-hidden="true"></i>
                                            <span>Garages  {{ $property->extraInformation->garage }}</span>
                                        </li>
                                    @endif

                                    @if($property->extraInformation->kitchen)
                                        <li>
                                            <i class="fa fa-columns" aria-hidden="true"></i>
                                            <span>Kitchen  {{ $property->extraInformation->kitchen }}</span>
                                        </li>
                                    @endif

                                    @if($property->extraInformation->balcony)
                                        <li>
                                            <i class="fa fa-clone" aria-hidden="true"></i>
                                            <span>Balcony  {{ $property->extraInformation->balcony }}</span>
                                        </li>
                                    @endif

                                    @if($property->extraInformation->window)
                                        <li>
                                            <i class="fa fa-window-restore" aria-hidden="true"></i>
                                            <span>Window  {{ $property->extraInformation->window }}</span>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                            <div class="blog-info details mb-30">
                                <h5 class="mb-4">Description</h5>
                                <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum rerum
                                    beatae consequatur, totam fugit, alias fuga aliquam quod tempora a nisi esse magnam
                                    nulla quas! Error praesentium, vero dolorum laborum. Lorem ipsum dolor sit amet,
                                    consectetur adipisicing elit. Cum rerum beatae consequatur, totam fugit.</p>
                                <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum rerum
                                    beatae consequatur, totam fugit, alias fuga aliquam quod tempora a nisi esse magnam
                                    nulla quas! Error praesentium, vero dolorum laborum. Lorem ipsum dolor sit amet,
                                    consectetur adipisicing elit. Cum rerum beatae consequatur, totam fugit.</p>
                                <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum rerum
                                    beatae consequatur, totam fugit, alias fuga aliquam quod tempora a nisi esse magnam
                                    nulla quas! Error praesentium, vero dolorum laborum. Lorem ipsum dolor sit amet,
                                    consectetur adipisicing elit. Cum rerum beatae consequatur, totam fugit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="single homes-content details mb-30">
                        <!-- title -->
                        <h5 class="mb-4">Property Details</h5>
                        <ul class="homes-list clearfix">
                            <li><span class="font-weight-bold mr-1">Property ID:</span> <span
                                    class="det">{{ $property->property_id }}</span></li>
                            <li><span class="font-weight-bold mr-1">Property Type:</span> <span
                                    class="det">{{ $property->type }}</span></li>
                            <li><span class="font-weight-bold mr-1">Property Status:</span> <span
                                    class="det">{{ $property->status }}</span></li>
                            <li><span class="font-weight-bold mr-1">Property Price:</span> <span
                                    class="det">${{ number_format($property->price) }}</span></li>

                            <li><span class="font-weight-bold mr-1">Bedrooms:</span> <span
                                    class="det">{{ $property->extraInformation->bedroom ?? 'N/A' }}</span></li>
                            <li><span class="font-weight-bold mr-1">Bathrooms:</span> <span
                                    class="det">{{ $property->extraInformation->bathroom ?? 'N/A' }}</span></li>
                            <li><span class="font-weight-bold mr-1">Kitchen:</span> <span
                                    class="det">{{ $property->extraInformation->kitchen ?? 'N/A' }}</span></li>
                            <li><span class="font-weight-bold mr-1">Windows:</span> <span
                                    class="det">{{ $property->extraInformation->window ?? 'N/A' }}</span></li>
                            <li><span class="font-weight-bold mr-1">Balconies:</span> <span
                                    class="det">{{ $property->extraInformation->balcony ?? 'N/A' }}</span></li>
                            <li><span class="font-weight-bold mr-1">Living Rooms:</span> <span
                                    class="det">{{ $property->extraInformation->living_room ?? 'N/A' }}</span></li>
                            <li><span class="font-weight-bold mr-1">Dining Rooms:</span> <span
                                    class="det">{{ $property->extraInformation->dining_room ?? 'N/A' }}</span></li>
                            <li><span class="font-weight-bold mr-1">Garages:</span> <span
                                    class="det">{{ $property->extraInformation->garage ?? 'N/A' }}</span></li>
                            <li><span class="font-weight-bold mr-1">Garden:</span> <span
                                    class="det">{{ $property->extraInformation->has_garden ? 'Yes' : 'No' }}</span></li>
                            <li><span class="font-weight-bold mr-1">Rooftop:</span> <span
                                    class="det">{{ $property->extraInformation->has_rooftop ? 'Yes' : 'No' }}</span>
                            </li>
                            <li><span class="font-weight-bold mr-1">Year Built:</span> <span
                                    class="det">{{ $property->extraInformation->build_year ?? 'N/A' }}</span></li>
                        </ul>

                        <!-- title -->
                        <h5 class="mt-5">Amenities</h5>
                        <!-- cars List -->
                        <ul class="homes-list clearfix">
                            @foreach($property->features as $item)
                                <li>
                                    <i class="fa fa-check-square" aria-hidden="true"></i>
                                    <span>{{$item->name}}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="floor-plan property wprt-image-video w50 pro">
                        <h5>Floor Plans</h5>
                        <img alt="image" src="Frontend/images/bg/floor-plan-1.png">
                    </div>
                    <div class="floor-plan property wprt-image-video w50 pro">
                        <h5>What's Nearby</h5>
                        <div class="property-nearby">
                            <div class="row">
                                <div class="col-lg-12">
                                    @php
                                        $grouped = $property->nearbyPlaces->groupBy('category');
                                    @endphp
                                    @foreach($grouped as $category => $places)
                                        <div class="nearby-info mb-4">
                                        <span class="nearby-title mb-3 d-block">
                                            <i class="{{ $icons[$category] ?? 'fas fa-map-marker-alt text-secondary' }} mr-2"></i>
                                            <b class="title">{{ $category }}</b>
                                        </span>
                                            <div class="nearby-list">
                                                <ul class="property-list list-unstyled mb-0">
                                                    @foreach($places as $place)
                                                        <li class="d-flex">
                                                            <h6 class="mb-3 mr-2">{{ $place->name }}</h6>
                                                            <span>({{ number_format($place->distance, 2) }} miles)</span>
                                                            <ul class="list-unstyled list-inline ml-auto">
                                                                @for($i = 1; $i <= 5; $i++)
                                                                    <li class="list-inline-item m-0 text-warning">
                                                                        @if($place->rating >= $i)
                                                                            <i class="fas fa-star fa-xs"></i>
                                                                        @elseif($place->rating >= ($i - 0.5))
                                                                            <i class="fas fa-star-half fa-xs"></i>
                                                                        @else
                                                                            <i class="far fa-star fa-xs"></i>
                                                                        @endif
                                                                    </li>
                                                                @endfor
                                                            </ul>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="property wprt-image-video w50 pro vid-si3">
                        <h5>Property Video</h5>
                        <img alt="image" src="Frontend/images/slider/slider-1.jpg">
                        <a class="icon-wrap popup-video popup-youtube"
                           href="https://www.youtube.com/watch?v=14semTlwyUY">
                            <i class="fa fa-play"></i>
                        </a>
                        <div class="iq-waves">
                            <div class="waves wave-1"></div>
                            <div class="waves wave-2"></div>
                            <div class="waves wave-3"></div>
                        </div>
                    </div>
                    <div class="property-location map">
                        <h5>Location</h5>
                        <div class="divider-fade"></div>
                        <div id="map-contact" class="contact-map"></div>
                    </div>
                    <!-- Star Reviews -->
                    <section class="reviews comments">
                        <h3 class="mb-5">3 Reviews</h3>
                        <div class="row mb-5">
                            <ul class="col-12 commented pl-0">
                                <li class="comm-inf">
                                    <div class="col-md-2">
                                        <img src="Frontend/images/testimonials/ts-5.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-md-10 comments-info">
                                        <div class="conra">
                                            <h5 class="mb-2">Mary Smith</h5>
                                            <div class="rating-box">
                                                <div class="detail-list-rating mr-0">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="mb-4">May 30 2020</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras aliquam, quam
                                            congue dictum luctus, lacus magna congue ante, in finibus dui sapien eu
                                            dolor. Integer tincidunt suscipit erat, nec laoreet ipsum vestibulum
                                            sed.</p>
                                        <div class="rest"><img src="Frontend/images/single-property/s-1.jpg"
                                                               class="img-fluid" alt=""></div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                        <div class="row">
                            <ul class="col-12 commented pl-0">
                                <li class="comm-inf">
                                    <div class="col-md-2">
                                        <img src="Frontend/images/testimonials/ts-4.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-md-10 comments-info">
                                        <div class="conra">
                                            <h5 class="mb-2">Abraham Tyron</h5>
                                            <div class="rating-box">
                                                <div class="detail-list-rating mr-0">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="mb-4">june 1 2020</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras aliquam, quam
                                            congue dictum luctus, lacus magna congue ante, in finibus dui sapien eu
                                            dolor. Integer tincidunt suscipit erat, nec laoreet ipsum vestibulum
                                            sed.</p>
                                    </div>
                                </li>

                            </ul>
                        </div>
                        <div class="row mt-5">
                            <ul class="col-12 commented mb-0 pl-0">
                                <li class="comm-inf">
                                    <div class="col-md-2">
                                        <img src="Frontend/images/testimonials/ts-3.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-md-10 comments-info">
                                        <div class="conra">
                                            <h5 class="mb-2">Lisa Williams</h5>
                                            <div class="rating-box">
                                                <div class="detail-list-rating mr-0">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="mb-4">jul 12 2020</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras aliquam, quam
                                            congue dictum luctus, lacus magna congue ante, in finibus dui sapien eu
                                            dolor. Integer tincidunt suscipit erat, nec laoreet ipsum vestibulum
                                            sed.</p>
                                        <div class="resti">
                                            <div class="rest"><img src="Frontend/images/single-property/s-2.jpg"
                                                                   class="img-fluid" alt=""></div>
                                            <div class="rest"><img src="Frontend/images/single-property/s-3.jpg"
                                                                   class="img-fluid" alt=""></div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </section>
                    <!-- End Reviews -->
                    <!-- Star Add Review -->
                    <section class="single reviews leve-comments details">
                        <div id="add-review" class="add-review-box">
                            <!-- Add Review -->
                            <h3 class="listing-desc-headline margin-bottom-20 mb-4">Add Review</h3>
                            <span class="leave-rating-title">Your rating for this listing</span>
                            <!-- Rating / Upload Button -->
                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <!-- Leave Rating -->
                                    <div class="clearfix"></div>
                                    <div class="leave-rating margin-bottom-30">
                                        <input type="radio" name="rating" id="rating-1" value="1"/>
                                        <label for="rating-1" class="fa fa-star"></label>
                                        <input type="radio" name="rating" id="rating-2" value="2"/>
                                        <label for="rating-2" class="fa fa-star"></label>
                                        <input type="radio" name="rating" id="rating-3" value="3"/>
                                        <label for="rating-3" class="fa fa-star"></label>
                                        <input type="radio" name="rating" id="rating-4" value="4"/>
                                        <label for="rating-4" class="fa fa-star"></label>
                                        <input type="radio" name="rating" id="rating-5" value="5"/>
                                        <label for="rating-5" class="fa fa-star"></label>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="col-md-6">
                                    <!-- Uplaod Photos -->
                                    <div class="add-review-photos margin-bottom-30">
                                        <div class="photoUpload">
                                            <span><i class="sl sl-icon-arrow-up-circle"></i> Upload Photos</span>
                                            <input type="file" class="upload"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 data">
                                    <form action="#">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="name" class="form-control"
                                                       placeholder="First Name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="name" class="form-control"
                                                       placeholder="Last Name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control"
                                                       placeholder="Email" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12 form-group">
                                            <textarea class="form-control" id="exampleTextarea" rows="8"
                                                      placeholder="Review" required></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-lg mt-2">Submit Review</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End Add Review -->
                </div>
                <aside class="col-lg-4 col-md-12 car">
                    <div class="single widget">
                        <!-- Start: Schedule a Tour -->
                        <div class="schedule widget-boxed mt-30">
                            <div class="widget-boxed-header">
                                <h4><i class="fa fa-calendar pr-3 padd-r-10"></i>Schedule a Tour</h4>
                            </div>
                            <div class="widget-boxed-body">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 book">
                                        <input type="text" id="reservation-date" data-lang="en" data-large-mode="true"
                                               data-min-year="2017" data-max-year="2020"
                                               data-disabled-days="08/17/2017,08/18/2017" data-id="datedropper-0"
                                               data-theme="my-style" class="form-control" readonly>
                                    </div>

                                    <div class="col-lg-6 col-md-12 book2">
                                        <input type="text" id="reservation-time" class="form-control" readonly="">
                                    </div>
                                </div>
                                <div class="row mrg-top-15 mb-3">
                                    <div class="col-lg-6 col-md-12 mt-4">
                                        <label class="mb-4">Adult</label>
                                        <div class="input-group">
                                                <span class="input-group-btn">
										 <button type="button" class="btn counter-btn theme-cl btn-number"
                                                 disabled="disabled" data-type="minus" data-field="quant[1]">
											 <i class="fa fa-minus"></i>
										 </button>
									        </span>
                                            <input type="text" name="quant[1]"
                                                   class="border-0 text-center form-control input-number" data-min="0"
                                                   data-max="10" value="0">
                                            <span class="input-group-btn">
											 <button type="button" class="btn counter-btn theme-cl btn-number"
                                                     data-type="plus" data-field="quant[1]">
											  <i class="fa fa-plus"></i>
											 </button>
									        </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 mt-4">
                                        <label class="mb-4">Children</label>
                                        <div class="input-group">
                                                <span class="input-group-btn">
										 <button type="button" class="btn counter-btn theme-cl btn-number"
                                                 disabled="disabled" data-type="minus" data-field="quant[2]">
											 <i class="fa fa-minus"></i>
										 </button>
									        </span>
                                            <input type="text" name="quant[2]"
                                                   class="border-0 text-center form-control input-number" data-min="0"
                                                   data-max="10" value="0">
                                            <span class="input-group-btn">
											 <button type="button" class="btn counter-btn theme-cl btn-number"
                                                     data-type="plus" data-field="quant[2]">
											  <i class="fa fa-plus"></i>
											 </button>
									        </span>
                                        </div>
                                    </div>
                                </div>
                                <a href="payment-method.html"
                                   class="btn reservation btn-radius theme-btn full-width mrg-top-10">Submit Request</a>
                            </div>
                        </div>
                        <!-- End: Schedule a Tour -->
                        <!-- end author-verified-badge -->
                        <div class="sidebar">
                            <div class="widget-boxed mt-33 mt-5">
                                <div class="widget-boxed-header">
                                    <h4>Agent Information</h4>
                                </div>
                                <div class="widget-boxed-body">
                                    <div class="sidebar-widget author-widget2">
                                        <div class="author-box clearfix">
                                            <img src="{{asset('Frontend/images/testimonials/ts-1.jpg')}}"
                                                 alt="author-image" class="author__img">
                                            <h4 class="author__title">Lisa Clark</h4>
                                            <p class="author__meta">Agent of Property</p>
                                        </div>
                                        <ul class="author__contact">
                                            <li><span class="la la-map-marker"><i class="fa fa-map-marker"></i></span>302
                                                Av Park, New York
                                            </li>
                                            <li><span class="la la-phone"><i class="fa fa-phone" aria-hidden="true"></i></span><a
                                                    href="#">(234) 0200 17813</a></li>
                                            <li><span class="la la-envelope-o"><i class="fa fa-envelope"
                                                                                  aria-hidden="true"></i></span><a
                                                    href="#">lisa@gmail.com</a></li>
                                        </ul>
                                        <div class="agent-contact-form-sidebar">
                                            <h4>Request Inquiry</h4>
                                            <form name="contact_form" method="post" action="functions.php">
                                                <input type="text" id="fname" name="full_name" placeholder="Full Name"
                                                       required/>
                                                <input type="number" id="pnumber" name="phone_number"
                                                       placeholder="Phone Number" required/>
                                                <input type="email" id="emailid" name="email_address"
                                                       placeholder="Email Address" required/>
                                                <textarea placeholder="Message" name="message" required></textarea>
                                                <input type="submit" name="sendmessage" class="multiple-send-message"
                                                       value="Submit Request"/>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-search-field-2">
                                <div class="widget-boxed mt-5">
                                    <div class="widget-boxed-header">
                                        <h4>Recent Properties</h4>
                                    </div>
                                    <div class="widget-boxed-body">
                                        <div class="recent-post">
                                            <div class="recent-main">
                                                <div class="recent-img">
                                                    <a href="blog-details.html"><img
                                                            src="{{asset('Frontend/images/feature-properties/fp-1.jpg')}}"
                                                            alt=""></a>
                                                </div>
                                                <div class="info-img">
                                                    <a href="blog-details.html"><h6>Family Home</h6></a>
                                                    <p>$230,000</p>
                                                </div>
                                            </div>
                                            <div class="recent-main my-4">
                                                <div class="recent-img">
                                                    <a href="blog-details.html"><img
                                                            src="{{asset('Frontend/images/feature-properties/fp-2.jpg')}}"
                                                            alt=""></a>
                                                </div>
                                                <div class="info-img">
                                                    <a href="blog-details.html"><h6>Family Home</h6></a>
                                                    <p>$230,000</p>
                                                </div>
                                            </div>
                                            <div class="recent-main">
                                                <div class="recent-img">
                                                    <a href="blog-details.html"><img
                                                            src="{{asset('Frontend/images/feature-properties/fp-3.jpg')}}"
                                                            alt=""></a>
                                                </div>
                                                <div class="info-img">
                                                    <a href="blog-details.html"><h6>Family Home</h6></a>
                                                    <p>$230,000</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-boxed mt-5">
                                    <div class="widget-boxed-header mb-5">
                                        <h4>Feature Properties</h4>
                                    </div>
                                    <div class="widget-boxed-body">
                                        <div class="slick-lancers">
                                            <div class="agents-grid mr-0">
                                                <div class="listing-item compact">
                                                    <a href="properties-details.html" class="listing-img-container">
                                                        <div class="listing-badges">
                                                            <span class="featured">$ 230,000</span>
                                                            <span>For Sale</span>
                                                        </div>
                                                        <div class="listing-img-content">
                                                            <span
                                                                class="listing-compact-title">House Luxury <i>New York</i></span>
                                                            <ul class="listing-hidden-content">
                                                                <li>Area <span>720 sq ft</span></li>
                                                                <li>Rooms <span>6</span></li>
                                                                <li>Beds <span>2</span></li>
                                                                <li>Baths <span>3</span></li>
                                                            </ul>
                                                        </div>
                                                        <img src="Frontend/images/feature-properties/fp-1.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="agents-grid mr-0">
                                                <div class="listing-item compact">
                                                    <a href="properties-details.html" class="listing-img-container">
                                                        <div class="listing-badges">
                                                            <span class="featured">$ 6,500</span>
                                                            <span class="rent">For Rent</span>
                                                        </div>
                                                        <div class="listing-img-content">
                                                            <span class="listing-compact-title">House Luxury <i>Los Angles</i></span>
                                                            <ul class="listing-hidden-content">
                                                                <li>Area <span>720 sq ft</span></li>
                                                                <li>Rooms <span>6</span></li>
                                                                <li>Beds <span>2</span></li>
                                                                <li>Baths <span>3</span></li>
                                                            </ul>
                                                        </div>
                                                        <img src="Frontend/images/feature-properties/fp-2.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="agents-grid mr-0">
                                                <div class="listing-item compact">
                                                    <a href="properties-details.html" class="listing-img-container">
                                                        <div class="listing-badges">
                                                            <span class="featured">$ 230,000</span>
                                                            <span>For Sale</span>
                                                        </div>
                                                        <div class="listing-img-content">
                                                            <span class="listing-compact-title">House Luxury <i>San Francisco</i></span>
                                                            <ul class="listing-hidden-content">
                                                                <li>Area <span>720 sq ft</span></li>
                                                                <li>Rooms <span>6</span></li>
                                                                <li>Beds <span>2</span></li>
                                                                <li>Baths <span>3</span></li>
                                                            </ul>
                                                        </div>
                                                        <img src="Frontend/images/feature-properties/fp-3.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="agents-grid mr-0">
                                                <div class="listing-item compact">
                                                    <a href="properties-details.html" class="listing-img-container">
                                                        <div class="listing-badges">
                                                            <span class="featured">$ 6,500</span>
                                                            <span class="rent">For Rent</span>
                                                        </div>
                                                        <div class="listing-img-content">
                                                            <span
                                                                class="listing-compact-title">House Luxury <i>Miami FL</i></span>
                                                            <ul class="listing-hidden-content">
                                                                <li>Area <span>720 sq ft</span></li>
                                                                <li>Rooms <span>6</span></li>
                                                                <li>Beds <span>2</span></li>
                                                                <li>Baths <span>3</span></li>
                                                            </ul>
                                                        </div>
                                                        <img src="Frontend/images/feature-properties/fp-4.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="agents-grid mr-0">
                                                <div class="listing-item compact">
                                                    <a href="properties-details.html" class="listing-img-container">
                                                        <div class="listing-badges">
                                                            <span class="featured">$ 230,000</span>
                                                            <span>For Sale</span>
                                                        </div>
                                                        <div class="listing-img-content">
                                                            <span class="listing-compact-title">House Luxury <i>Chicago IL</i></span>
                                                            <ul class="listing-hidden-content">
                                                                <li>Area <span>720 sq ft</span></li>
                                                                <li>Rooms <span>6</span></li>
                                                                <li>Beds <span>2</span></li>
                                                                <li>Baths <span>3</span></li>
                                                            </ul>
                                                        </div>
                                                        <img src="Frontend/images/feature-properties/fp-5.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="agents-grid mr-0">
                                                <div class="listing-item compact">
                                                    <a href="properties-details.html" class="listing-img-container">
                                                        <div class="listing-badges">
                                                            <span class="featured">$ 6,500</span>
                                                            <span class="rent">For Rent</span>
                                                        </div>
                                                        <div class="listing-img-content">
                                                            <span class="listing-compact-title">House Luxury <i>Toronto CA</i></span>
                                                            <ul class="listing-hidden-content">
                                                                <li>Area <span>720 sq ft</span></li>
                                                                <li>Rooms <span>6</span></li>
                                                                <li>Beds <span>2</span></li>
                                                                <li>Baths <span>3</span></li>
                                                            </ul>
                                                        </div>
                                                        <img src="Frontend/images/feature-properties/fp-6.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start: Specials offer -->
                                <div class="widget-boxed popular mt-5">
                                    <div class="widget-boxed-header">
                                        <h4>Specials of the day</h4>
                                    </div>
                                    <div class="widget-boxed-body">
                                        <div class="banner"><img src="Frontend/images/single-property/banner.jpg"
                                                                 alt=""></div>
                                    </div>
                                </div>
                                <!-- End: Specials offer -->
                                <div class="widget-boxed popular mt-5">
                                    <div class="widget-boxed-header">
                                        <h4>Popular Tags</h4>
                                    </div>
                                    <div class="widget-boxed-body">
                                        <div class="recent-post">
                                            <div class="tags">
                                                <span><a href="#" class="btn btn-outline-primary">Houses</a></span>
                                                <span><a href="#" class="btn btn-outline-primary">Real Home</a></span>
                                            </div>
                                            <div class="tags">
                                                <span><a href="#" class="btn btn-outline-primary">Baths</a></span>
                                                <span><a href="#" class="btn btn-outline-primary">Beds</a></span>
                                            </div>
                                            <div class="tags">
                                                <span><a href="#" class="btn btn-outline-primary">Garages</a></span>
                                                <span><a href="#" class="btn btn-outline-primary">Family</a></span>
                                            </div>
                                            <div class="tags">
                                                <span><a href="#"
                                                         class="btn btn-outline-primary">Real Estates</a></span>
                                                <span><a href="#" class="btn btn-outline-primary">Properties</a></span>
                                            </div>
                                            <div class="tags no-mb">
                                                <span><a href="#" class="btn btn-outline-primary">Location</a></span>
                                                <span><a href="#" class="btn btn-outline-primary">Price</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
            <!-- START SIMILAR PROPERTIES -->
            <section class="similar-property featured portfolio p-0 bg-white-inner">
                <div class="container">
                    <h5>Similar Properties</h5>
                    <div class="row portfolio-items">
                        <div class="item col-lg-4 col-md-6 col-xs-12 landscapes">
                            <div class="project-single">
                                <div class="project-inner project-head">
                                    <div class="homes">
                                        <!-- homes img -->
                                        <a href="single-property-1.html" class="homes-img">
                                            <div class="homes-tag button alt featured">Featured</div>
                                            <div class="homes-tag button alt sale">For Sale</div>
                                            <div class="homes-price">$9,000/mo</div>
                                            <img src="Frontend/images/blog/b-11.jpg" alt="home-1"
                                                 class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="button-effect">
                                        <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                        <a href="https://www.youtube.com/watch?v=14semTlwyUY"
                                           class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                        <a href="single-property-2.html" class="img-poppu btn"><i
                                                class="fa fa-photo"></i></a>
                                    </div>
                                </div>
                                <!-- homes content -->
                                <div class="homes-content">
                                    <!-- homes address -->
                                    <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                    <p class="homes-address mb-3">
                                        <a href="single-property-1.html">
                                            <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
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
                                            <img src="Frontend/images/testimonials/ts-1.jpg" alt="" class="mr-2"> Lisa
                                            Jhonson
                                        </a>
                                        <span>2 months ago</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item col-lg-4 col-md-6 col-xs-12 people">
                            <div class="project-single">
                                <div class="project-inner project-head">
                                    <div class="homes">
                                        <!-- homes img -->
                                        <a href="single-property-1.html" class="homes-img">
                                            <div class="homes-tag button sale rent">For Rent</div>
                                            <div class="homes-price">$3,000/mo</div>
                                            <img src="Frontend/images/blog/b-12.jpg" alt="home-1"
                                                 class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="button-effect">
                                        <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                        <a href="https://www.youtube.com/watch?v=14semTlwyUY"
                                           class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                        <a href="single-property-2.html" class="img-poppu btn"><i
                                                class="fa fa-photo"></i></a>
                                    </div>
                                </div>
                                <!-- homes content -->
                                <div class="homes-content">
                                    <!-- homes address -->
                                    <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                    <p class="homes-address mb-3">
                                        <a href="single-property-1.html">
                                            <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
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
                                            <img src="Frontend/images/testimonials/ts-2.jpg" alt="" class="mr-2"> Karl
                                            Smith
                                        </a>
                                        <span>2 months ago</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item col-lg-4 col-md-6 col-xs-12 people landscapes no-pb pbp-3">
                            <div class="project-single no-mb mbp-3">
                                <div class="project-inner project-head">
                                    <div class="homes">
                                        <!-- homes img -->
                                        <a href="single-property-1.html" class="homes-img">
                                            <div class="homes-tag button alt sale">For Sale</div>
                                            <div class="homes-price">$9,000/mo</div>
                                            <img src="Frontend/images/blog/b-1.jpg" alt="home-1" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="button-effect">
                                        <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                        <a href="https://www.youtube.com/watch?v=14semTlwyUY"
                                           class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                        <a href="single-property-2.html" class="img-poppu btn"><i
                                                class="fa fa-photo"></i></a>
                                    </div>
                                </div>
                                <!-- homes content -->
                                <div class="homes-content">
                                    <!-- homes address -->
                                    <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                    <p class="homes-address mb-3">
                                        <a href="single-property-1.html">
                                            <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
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
                                            <img src="Frontend/images/testimonials/ts-3.jpg" alt="" class="mr-2"> katy
                                            Teddy
                                        </a>
                                        <span>2 months ago</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END SIMILAR PROPERTIES -->
        </div>
    </section>
    <!-- END SECTION PROPERTIES LISTING -->
    <!-- START FOOTER -->
    @include('web.Frontend.partials.footer')
    <a data-scroll href="#wrapper" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
    <!-- END FOOTER -->
    <!-- ARCHIVES JS -->
    @include('web.Frontend.partials.script')
</div>
<!-- Wrapper / End -->
</body>
</html>

