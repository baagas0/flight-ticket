@extends('user.layouts.main')
@section('content')
<!--************************************
				Inner Banner Start
		*************************************-->
<div class="tg-parallax tg-innerbanner" data-appear-top-offset="600" data-parallax="scroll"
    data-image-src="images/parallax/bgparallax-06.jpg">
    <div class="tg-sectionspace tg-haslayout">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"></div>
            </div>
        </div>
    </div>
</div>
<!--************************************
				Inner Banner End
		*************************************-->
<!--************************************
				Main Start
		*************************************-->
<main id="tg-main" class="tg-main tg-haslayout">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div id="tg-content" class="tg-content">
                    <div class="tg-tourbookingdetail">
                        <div class="tg-bookinginfo">
                            <h2>{{ $schedule->destination_code }}</h2>
                            <div class="tg-pricearea">
                                <span>From</span>
                                <h4>Rp{{ number_format($schedule->transportation->economy_chair, 2) }}<sub>/ per person</sub></h4>
                            </div>
                            <div class="tg-description">
                                <p>There’s only 5 spot left. Join 19 others at Travelu’s experience this Saturday.</p>
                            </div>
                            <form class="tg-formtheme tg-formbookingdetail float-right">
                                <fieldset>
                                    <div class="form-group">
                                        <div class="tg-formicon"><i class="icon-users"></i></div>
                                        <span class="tg-select">
                                            <select class="selectpicker" data-live-search="true" data-width="100%">
                                                <option data-tokens="type">Type</option>
                                                <option data-tokens="Economy">Economy</option>
                                                <option data-tokens="Bussiness">Bussiness</option>
                                                <option data-tokens="Bussiness">First</option>
                                            </select>
                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <div class="tg-formicon"><i class="icon-users"></i></div>
                                        <span class="tg-select">
                                            <select class="selectpicker" data-live-search="true" data-width="100%">
                                                <option data-tokens="Persons">Number of Person</option>
                                                <option data-tokens="1">1</option>
                                                <option data-tokens="2">2</option>
                                                <option data-tokens="4">4</option>
                                                <option data-tokens="5">5</option>
                                                <option data-tokens="6">6</option>
                                                <option data-tokens="10">10</option>
                                            </select>
                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="tg-btn tg-btn-lg"><span>proceed
                                                boking</span></button>
                                    </div>
                                </fieldset>
                            </form>
                            <ul class="tg-tripinfo">
                                <li><span class="tg-tourduration">{{ $schedule->date }}</span></li>
                                <li><span class="tg-tourduration tg-availabilty">Economy: Rp{{ number_format($schedule->transportation->economy_chair, 2) }}</span></li>
                                <li><span class="tg-tourduration tg-location">Bussiness: Rp{{ number_format($schedule->transportation->bussiness_chair, 2) }}</span></span></li>
                                <li><span class="tg-tourduration tg-peoples">First: Rp{{ number_format($schedule->transportation->first_chair, 2) }}</span></span></li>
                            </ul>
                            <div class="tg-refundshare">
                                <div class="tg-refund">
                                    <figure><img src="/images/img-03.jpg" alt="image description"></figure>
                                    <div class="tg-refundinfo">
                                        <h3>100% refundable</h3>
                                        <div class="tg-description">
                                            <p>Cancel up to 12 days before your trip and get a full refund, including
                                                service fees.</p>
                                        </div>
                                    </div>
                                </div>
                                <ul class="tg-likeshare">
                                    <li class="tg-shareicon">
                                        <a href="javascript:void(0);"><i class="icon-share-button-outline"></i>share</a>
                                        <ul class="tg-share">
                                            <li><a href="javascript:void(0);"><i class="icon-twitter"></i></a></li>
                                            <li><a href="javascript:void(0);"><i class="icon-facebook"></i></a></li>
                                            <li><a href="javascript:void(0);"><i class="icon-pinterest"></i></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!--************************************
				Main End
		*************************************-->
@endsection
