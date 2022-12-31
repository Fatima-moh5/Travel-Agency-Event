@extends('layouts.app')
@php //$locale = session()->get('locale');
$locale = app()->getLocale();
@endphp
@section('content')
		<!--Breadcrumb Section-->
        <section id="breadcrumb-section" data-bg-img="{{url('storage/breadcrumb.jpg')}}">
            <div class="inner-container container">
                <div class="ravis-title">
                    <div class="inner-box">
                        <div class="title">{{__('menu.program_details')}}</div>
                        <div class="sub-title">{{($locale=='en')?$trip->title:$trip->title_fr}}</div>
                    </div>
                </div>
                <div class="breadcrumb">
                    <ul class="list-inline">
                        <li><a href="{{url('/')}}">{{__('menu.home')}}</a></li>
                        <li class="current"><a href="#">{{__('menu.program_details')}}</a></li>
                    </ul>
                </div>
            </div>
        </section>
		<!--End of Breadcrumb Section-->

		<div id="slide-show-section" class="container">
			<div id="slide-show">
				<div id="main-image-slider">
                    @forelse($images as $image)
					<div class="items">
						<img src="{{url('storage/trips/'.$image->path)}}" alt="">
						<div class="slide-caption">
							<div class="title"><span>Classic</span> Lobby</div>
						</div>
					</div>
                    @empty
                    <div class="items">
                        <img src="{{url('storage/trips/1.jpg')}}" alt="">
                        <div class="slide-caption">
                            <div class="title"><span>Classic</span></div>
                        </div>
                    </div>
                    @endforelse
				</div>
				<div id="thumbnail-slider">
                    @forelse($images as $image)
					<div class="items">
						<img src="{{url('storage/trips/'.$image->path)}}" alt="">
					</div>
                    @empty

                    @endforelse
				</div>
			</div>
			<div class="desc">
				{{($locale=='en')?$trip->details:$trip->details_fr}}
			</div>

		</div>
@endsection

@push('trip-details-scripts')
    <script type="text/javascript">
        jQuery(document).ready(function () {

            var main_image_slider = jQuery("#main-image-slider");
            var thumbnail_slider  = jQuery("#thumbnail-slider");

            main_image_slider.owlCarousel({
                singleItem:            true,
                slideSpeed:            1000,
                navigation:            true,
                pagination:            false,
                autoPlay:              true,
                afterAction:           syncPosition,
                navigationText: ['<span>Prev</span>', '<span>Next</span>'],
                responsiveRefreshRate: 200,
                afterInit:             function (el) {
                    el.find(".owl-item").eq(0).addClass("active");
                }
            });

            thumbnail_slider.owlCarousel({
                items:                 5,
                itemsDesktop:          [1199, 6],
                itemsDesktopSmall:     [979, 4],
                itemsTablet:           [768, 3],
                itemsMobile:           [479, 2],
                pagination:            false,
                responsiveRefreshRate: 100,
                afterInit:             function (el) {
                    el.find(".owl-item").eq(0).addClass("synced");
                }
            });

            function syncPosition(el) {
                var current = this.currentItem;
                thumbnail_slider.find(".owl-item").removeClass("synced").eq(current).addClass("synced");
                main_image_slider.find(".owl-item").removeClass("active").eq(current).addClass("active");
                if (thumbnail_slider.data("owlCarousel") !== undefined) {
                    center(current)
                }
            }

            thumbnail_slider.on("click", ".owl-item", function (e) {
                e.preventDefault();
                var number = jQuery(this).data("owlItem");
                main_image_slider.trigger("owl.goTo", number);
            });

            function center(number) {
                var thumbnail_slidervisible = thumbnail_slider.data("owlCarousel").owl.visibleItems;
                var num                     = number;
                var found                   = false;
                for (var i in thumbnail_slidervisible) {
                    if (num === thumbnail_slidervisible[i]) {
                        var found = true;
                    }
                }

                if (found === false) {
                    if (num > thumbnail_slidervisible[thumbnail_slidervisible.length - 1]) {
                        thumbnail_slider.trigger("owl.goTo", num - thumbnail_slidervisible.length + 2)
                    } else {
                        if (num - 1 === -1) {
                            num = 0;
                        }
                        thumbnail_slider.trigger("owl.goTo", num);
                    }
                } else if (num === thumbnail_slidervisible[thumbnail_slidervisible.length - 1]) {
                    thumbnail_slider.trigger("owl.goTo", thumbnail_slidervisible[1])
                } else if (num === thumbnail_slidervisible[0]) {
                    thumbnail_slider.trigger("owl.goTo", num - 1)
                }

            }

        });
    </script>
@endpush
