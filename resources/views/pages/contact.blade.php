@extends('layouts.app')

@section('content')

    <!--Breadcrumb Section-->
    <section id="breadcrumb-section" data-bg-img="{{url('storage/breadcrumb.jpg')}}">
        <div class="inner-container container">
            <div class="ravis-title">
                <div class="inner-box">
                    <div class="title">{{__('menu.contact')}}</div>
                    <div class="sub-title">{{__('menu.contact_subtitle')}}</div>
                </div>
            </div>

            <div class="breadcrumb">
                <ul class="list-inline">
                    <li><a href="{{url('/')}}">{{__('menu.home')}}</a></li>
                    <li class="current"><a href="#">{{__('menu.contact')}}</a></li>
                </ul>
            </div>
        </div>
    </section>
<!--End of Breadcrumb Section-->

<!--Contact Section-->
<section id="contact-section">
    <div class="inner-container container">
        <div class="t-sec">
            <div class="ravis-title-t-2">
                <div class="title"><span>Contact Us</span></div>
                <div class="sub-title">Do not hesitate to contact me if you have any further questions</div>
            </div>
            <div class="content">

            </div>

            <div class="contact-info">
                <div class="contact-inf-box">
                    <div class="icon-box">
                        <i class="fa fa-home"></i>
                    </div>
                    <div class="text">
                        {{$setting->address}}
                    </div>
                </div>
                <div class="contact-inf-box">
                    <div class="icon-box">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <div class="text">
                        {{$setting->email}}
                    </div>
                </div>
                <div class="contact-inf-box">
                    <div class="icon-box">
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="text">
                        {{$setting->phone}}
                    </div>
                </div>
            </div>
        </div>

        <div class="b-sec clearfix">
            <div class="contact-form col-md-6">
                <form action="#" id="contact-form-box">
                    <div class="field-row">
                        <input type="text" name="name" id="contact-name" placeholder="Name :" required>
                    </div>
                    <div class="field-row">
                        <input type="text" name="phone" id="contact-phone" placeholder="Phone :">
                    </div>
                    <div class="field-row">
                        <input type="email" name="email" id="contact-email" placeholder="Email :" required>
                    </div>
                    <div class="field-row">
                        <textarea placeholder="Your Message" name="message" id="contact-message" required></textarea>
                    </div>
                    <div class="message-box"></div>
                    <div class="field-row">
                        <input type="submit" value="Submit">
                    </div>
                </form>
            </div>
            <div id="google-map" class="col-md-6" data-marker="" style="padding: 40px">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d26610.54949380796!2d36.29388200000001!3d33.519099!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd76cda90b440d546!2sMithra%20Travel!5e0!3m2!1sen!2sus!4v1655326619682!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>
        </div>
    </div>
</section>
<!--End of Contact Section-->
@endsection
