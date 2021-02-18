@extends('user.layouts.main')

@section('content')
<div id="tg-homebannerslider" class="tg-homebannerslider tg-haslayout">
    <div class="tg-homeslider tg-homebanner tg-haslayout">
        <figure class="item" data-vide-bg="poster: images/slider/img-07.jpg" data-vide-options="position: 0% 50%">
            <figcaption>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="tg-slidercontent">
                                <h1>Undiscovered Beauty</h1>
                                <h2>You Choose the Adventure We make it happen</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </figcaption>
        </figure>
    </div>
    <div class="tg-findtour tg-findtourvfour">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <a id="tg-btntoggleform" class="tg-btntoggleform" href="javascript:void(0);">
                        <span>Explore Tour</span>
                        <i class="icon-chevron-up"></i>
                    </a>
                    <form class="tg-formtheme tg-formtrip">
                        <fieldset>
                            <div class="form-group">
                                <div class="tg-select">
                                    <select class="selectpicker" data-live-search="true" data-width="100%">
                                        <option data-tokens="Destinations">Destinations</option>
                                        <option data-tokens="All Areas">All Areas</option>
                                        <option data-tokens="Bayonne">Bayonne</option>
                                        <option data-tokens="Greenville">Greenville</option>
                                        <option data-tokens="Manhattan">Manhattan</option>
                                        <option data-tokens="Queens">Queens</option>
                                        <option data-tokens="The Heights">The Heights</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="tg-select">
                                    <select class="selectpicker" data-live-search="true" data-width="100%">
                                        <option data-tokens="Adventure Type">Adventure Type</option>
                                        <option data-tokens="Ice Adventure Vacations">Ice Adventure Vacations</option>
                                        <option data-tokens="National Park">National Park</option>
                                        <option data-tokens="Adult Vacations">Adult Vacations</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="tg-select">
                                    <select class="selectpicker" data-live-search="true" data-width="100%">
                                        <option data-tokens="Travel Month">Travel Month</option>
                                        <option data-tokens="January">January</option>
                                        <option data-tokens="February">February</option>
                                        <option data-tokens="March">March</option>
                                        <option data-tokens="April">April</option>
                                        <option data-tokens="May">May</option>
                                        <option data-tokens="June">June</option>
                                        <option data-tokens="July">July</option>
                                        <option data-tokens="August">August</option>
                                        <option data-tokens="September">September</option>
                                        <option data-tokens="October">October</option>
                                        <option data-tokens="November">November</option>
                                        <option data-tokens="December">December</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="tg-select">
                                    <select class="selectpicker" data-live-search="true" data-width="100%">
                                        <option data-tokens="Duration">Duration</option>
                                        <option data-tokens="2 weeks">2 weeks</option>
                                        <option data-tokens="3 weeks">3 weeks</option>
                                        <option data-tokens="4 weeks">4 weeks</option>
                                        <option data-tokens="5 weeks">5 weeks</option>
                                        <option data-tokens="6 weeks">6 weeks</option>
                                        <option data-tokens="7 weeks">7 weeks</option>
                                        <option data-tokens="8 weeks">8 weeks</option>
                                        <option data-tokens="9 weeks">9 weeks</option>
                                        <option data-tokens="10 weeks">10 weeks</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="tg-btn" type="submit"><span>find tours</span></button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--************************************
				Home Slider End
		*************************************-->
<!--************************************
				Main Start
		*************************************-->
<main id="tg-main" class="tg-main tg-haslayout">
    <!--************************************
					Popular Tours Start
			*************************************-->
    <section class="tg-sectionspace tg-haslayout">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="tg-sectionhead tg-sectionheadvtwo">
                        <div class="tg-sectiontitle">
                            <h2>Popular Tours</h2>
                        </div>
                        <div class="tg-description">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam consectetuer</p>
                        </div>
                    </div>
                    <div id="tg-populartoursslider" class="tg-populartoursslider tg-populartours owl-carousel">
                        <div class="item tg-populartour">
                            <figure>
                                <a href="javascript:void(0);"><img src="images/tours/img-01.jpg"
                                        alt="image destinations"></a>
                                <span class="tg-descount">25% Off</span>
                            </figure>
                            <div class="tg-populartourcontent">
                                <div class="tg-populartourtitle">
                                    <h3><a href="javascript:void(0);">City Tours in Europe, Paris</a></h3>
                                </div>
                                <div class="tg-description">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                        nibh...</p>
                                </div>
                                <div class="tg-populartourfoot">
                                    <div class="tg-durationrating">
                                        <span class="tg-tourduration">7 Days</span>
                                        <span class="tg-stars"><span></span></span>
                                        <em>(3 Review)</em>
                                    </div>
                                    <div class="tg-pricearea">
                                        <del>$2,800</del>
                                        <h4>$2,500</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item tg-populartour">
                            <figure><a href="javascript:void(0);"><img src="images/tours/img-02.jpg"
                                        alt="image destinations"></a></figure>
                            <div class="tg-populartourcontent">
                                <div class="tg-populartourtitle">
                                    <h3><a href="javascript:void(0);">Best of Canada Tours and Travel</a></h3>
                                </div>
                                <div class="tg-description">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                        nibh...</p>
                                </div>
                                <div class="tg-populartourfoot">
                                    <div class="tg-durationrating">
                                        <span class="tg-tourduration">7 Days</span>
                                        <span class="tg-stars"><span></span></span>
                                        <em>(3 Review)</em>
                                    </div>
                                    <div class="tg-pricearea">
                                        <span>from</span>
                                        <h4>$600</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item tg-populartour">
                            <figure><a href="javascript:void(0);"><img src="images/tours/img-03.jpg"
                                        alt="image destinations"></a></figure>
                            <div class="tg-populartourcontent">
                                <div class="tg-populartourtitle">
                                    <h3><a href="javascript:void(0);">Italy – 3 Days in Rome, Golden Gate</a></h3>
                                </div>
                                <div class="tg-description">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                        nibh...</p>
                                </div>
                                <div class="tg-populartourfoot">
                                    <div class="tg-durationrating">
                                        <span class="tg-tourduration">7 Days</span>
                                        <span class="tg-stars"><span></span></span>
                                        <em>(3 Review)</em>
                                    </div>
                                    <div class="tg-pricearea">
                                        <span>from</span>
                                        <h4>$1,430</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item tg-populartour">
                            <figure><a href="javascript:void(0);"><img src="images/tours/img-04.jpg"
                                        alt="image destinations"></a></figure>
                            <div class="tg-populartourcontent">
                                <div class="tg-populartourtitle">
                                    <h3><a href="javascript:void(0);">Best of Canada Tours and Travel</a></h3>
                                </div>
                                <div class="tg-description">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                        nibh...</p>
                                </div>
                                <div class="tg-populartourfoot">
                                    <div class="tg-durationrating">
                                        <span class="tg-tourduration">7 Days</span>
                                        <span class="tg-stars"><span></span></span>
                                        <em>(3 Review)</em>
                                    </div>
                                    <div class="tg-pricearea">
                                        <span>from</span>
                                        <h4>$600</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--************************************
					Popular Tours End
			*************************************-->
    <!--************************************
					Call To Action Start
			*************************************-->
    <section class="tg-parallax" data-appear-top-offset="600" data-parallax="scroll"
        data-image-src="images/parallax/bgparallax-04.jpg">
        <div class="tg-sectionspace tg-zerobottompadding tg-haslayout">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="tg-sectionhead tg-sectionheadvtwo">
                            <div class="tg-sectiontitle">
                                <h2>What makes these trips different?</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-lg-push-2">
                        <figure class="tg-videobox">
                            <img src="images/img-01.jpg" alt="image description">
                            <a class="tg-btnplay" href="javascript:void(0);"><i class="icon-play3"></i></a>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--************************************
					Call To Action End
			*************************************-->
    <!--************************************
					Top Destination Start
			*************************************-->
    <section class="tg-sectionspace tg-haslayout">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="tg-sectionhead tg-sectionheadvtwo">
                        <div class="tg-sectiontitle">
                            <h2>Top Destinations</h2>
                        </div>
                        <div class="tg-description">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam consectetuer.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="tg-themetabs">
                        <ul class="tg-themetabnav">
                            <li>
                                <a href="javascript:void(0);">
                                    <img src="images/countrysign/img-01.png" alt="image description">
                                    <strong>America</strong>
                                    <span>Statue of Liberty</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <img src="images/countrysign/img-02.png" alt="image description">
                                    <strong>Australia</strong>
                                    <span>Sydney Opera House</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <img src="images/countrysign/img-03.png" alt="image description">
                                    <strong>Italy</strong>
                                    <span>Colosseum</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <img src="images/countrysign/img-04.png" alt="image description">
                                    <strong>London</strong>
                                    <span>Gib Ben</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <img src="images/countrysign/img-05.png" alt="image description">
                                    <strong>India</strong>
                                    <span>Great Taj Mahal</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <img src="images/countrysign/img-06.png" alt="image description">
                                    <strong>Russia</strong>
                                    <span>Saint Basil's Cathedral</span>
                                </a>
                            </li>
                        </ul>
                        <div class="tg-themetabcontent">
                            <div class="tg-topdestinations">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                        <div class="tg-topdestination">
                                            <figure>
                                                <a href="javascript:void(0);" class="tg-btnviewall">View All Tours</a>
                                                <a href="javascript:void(0);"><img src="images/tours/img-15.jpg"
                                                        alt="image description"></a>
                                                <figcaption>
                                                    <h2><a href="javascript:void(0);">North America</a></h2>
                                                    <span class="tg-totaltours">7 Tours</span>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                        <div class="tg-topdestination">
                                            <figure>
                                                <a href="javascript:void(0);" class="tg-btnviewall">View All Tours</a>
                                                <a href="javascript:void(0);"><img src="images/tours/img-16.jpg"
                                                        alt="image description"></a>
                                                <figcaption>
                                                    <h2><a href="javascript:void(0);">Europe</a></h2>
                                                    <span class="tg-totaltours">11 Tours</span>
                                                </figcaption>
                                            </figure>
                                        </div>
                                        <div class="tg-topdestination">
                                            <figure>
                                                <a href="javascript:void(0);" class="tg-btnviewall">View All Tours</a>
                                                <a href="javascript:void(0);"><img src="images/tours/img-17.jpg"
                                                        alt="image description"></a>
                                                <figcaption>
                                                    <h2><a href="javascript:void(0);">Africa</a></h2>
                                                    <span class="tg-totaltours">3 Tours</span>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                        <div class="tg-topdestination">
                                            <figure>
                                                <a href="javascript:void(0);" class="tg-btnviewall">View All Tours</a>
                                                <a href="javascript:void(0);"><img src="images/tours/img-18.jpg"
                                                        alt="image description"></a>
                                                <figcaption>
                                                    <h2><a href="javascript:void(0);">Istanbul</a></h2>
                                                    <span class="tg-totaltours">30 Tours</span>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--************************************
					Top Destination End
			*************************************-->
    <!--************************************
					Features Start
			*************************************-->
    <section class="tg-parallax" data-appear-top-offset="600" data-parallax="scroll"
        data-image-src="images/parallax/bgparallax-02.jpg">
        <div class="tg-sectionspace tg-haslayout">
            <div class="container">
                <div class="row">
                    <div class="tg-features">
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <div class="tg-feature">
                                <div class="tg-featuretitle">
                                    <h2><span>01</span><a href="javascript:void(0);">Luxury Hotels</a></h2>
                                </div>
                                <div class="tg-description">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                        tempor cum soluta nobis consectetuer nihil imperdiet doming...</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <div class="tg-feature">
                                <div class="tg-featuretitle">
                                    <h2><span>02</span><a href="javascript:void(0);">Tourist Guide</a></h2>
                                </div>
                                <div class="tg-description">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                        tempor cum soluta nobis consectetuer nihil imperdiet doming...</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <div class="tg-feature">
                                <div class="tg-featuretitle">
                                    <h2><span>03</span><a href="javascript:void(0);">Flights Tickets</a></h2>
                                </div>
                                <div class="tg-description">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                        tempor cum soluta nobis consectetuer nihil imperdiet doming...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--************************************
					Features End
			*************************************-->
    <!--************************************
					Our Partners Start
			*************************************-->
    <section class="tg-sectionspace tg-haslayout">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="tg-sectionhead tg-sectionheadvtwo">
                        <div class="tg-sectiontitle">
                            <h2>Our Partners</h2>
                        </div>
                        <div class="tg-description">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam consectetuer.</p>
                        </div>
                    </div>
                    <div class="tg-ourpartners tg-ourpartnersvtwo">
                        <ul class="tg-partners">
                            <li>
                                <figure><a href="javascript:void(0);"><img src="images/partners/img-06.png"
                                            alt="image destinations"></a></figure>
                            </li>
                            <li>
                                <figure><a href="javascript:void(0);"><img src="images/partners/img-07.png"
                                            alt="image destinations"></a></figure>
                            </li>
                            <li>
                                <figure><a href="javascript:void(0);"><img src="images/partners/img-07.png"
                                            alt="image destinations"></a></figure>
                            </li>
                            <li>
                                <figure><a href="javascript:void(0);"><img src="images/partners/img-09.png"
                                            alt="image destinations"></a></figure>
                            </li>
                            <li>
                                <figure><a href="javascript:void(0);"><img src="images/partners/img-10.png"
                                            alt="image destinations"></a></figure>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
