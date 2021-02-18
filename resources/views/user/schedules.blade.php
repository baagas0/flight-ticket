@extends('user.layouts.main')
@section('content')
<!--************************************
				Inner Banner Start
		*************************************-->
<section class="tg-parallax tg-innerbanner" data-appear-top-offset="600" data-parallax="scroll"
    data-image-src="images/parallax/bgparallax-05.jpg">
    <div class="tg-sectionspace tg-haslayout">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h1>Schedule List</h1>
                    <ol class="tg-breadcrumb">
                        <li><a href="javascript:void(0);">Home</a></li>
                        <li class="tg-active">Schedule</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<!--************************************
				Inner Banner End
		*************************************-->
<!--************************************
				Main Start
		*************************************-->
<main id="tg-main" class="tg-main tg-sectionspace tg-haslayout">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div id="tg-content" class="tg-content">
                    <div class="tg-listing tg-listingvtwo">
                        <div class="tg-sectiontitle">
                            <h2>Schedule</h2>
                        </div>
                        <div class="clearfix"></div>
                        <div class="row">
                            @foreach ($schedules as $schedule)
                            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                                <div class="tg-trendingtrip">
                                    <figure>
                                        <a href="{{ route('schedule', $schedule->id) }}">
                                            <img src="images/tours/img-19.jpg" alt="image destinations">
                                            <div class="tg-hover">
                                                <span class="tg-tourduration"> {{ $schedule->date }} </span>
                                                <span class="tg-locationname">{{ $schedule->transportation->name }}</span>
                                                <div class="tg-pricearea">
                                                    <span>from</span>
                                                    <h4>{{ $schedule->price }}</h4>
                                                </div>
                                            </div>
                                        </a>
                                    </figure>
                                    <div class="tg-populartourcontent">
                                        <div class="tg-populartourtitle">
                                            <h3><a href="{{ route('schedule', $schedule->id) }}">{{ $schedule->destination_code }}</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="clearfix"></div>
                        <nav class="tg-pagination">
                            <ul>
                                <li class="tg-active"><a href="javascript:void(0);">1</a></li>
                                <li><a href="javascript:void(0);">2</a></li>
                                <li><a href="javascript:void(0);">3</a></li>
                                <li><a href="javascript:void(0);">4</a></li>
                                <li class="tg-nextpage"><a href="javascript:void(0);"><i
                                            class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </nav>
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
