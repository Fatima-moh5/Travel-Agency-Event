<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />

    <!-- Stylesheets
    ============================================= -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('website/css/bootstrap.css')}}" type="text/css" />
    <!-- <link rel="stylesheet" href="css/bootstrap-rtl.css" type="text/css" /> -->
    <link rel="stylesheet" href="{{asset('website/style.css')}}" type="text/css" />
    <!-- <link rel="stylesheet" href="style-rtl.css" type="text/css" /> -->
    <link rel="stylesheet" href="{{asset('website/css/swiper.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('website/css/dark.css')}}" type="text/css" />
    <!-- <link rel="stylesheet" href="{{asset('website/css/dark-rtl.css')}}" type="text/css" /> -->
    <link rel="stylesheet" href="{{asset('website/css/font-icons.css')}}" type="text/css" />
    <!-- <link rel="stylesheet" href="{{asset('website/css/font-icons-rtl.css')}}" type="text/css" /> -->
    <link rel="stylesheet" href="{{asset('website/css/animate.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('website/css/magnific-popup.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('website/css/responsive.css')}}" type="text/css" />
    <!-- <link rel="stylesheet" href="{{asset('website/css/responsive-rtl.css')}}" type="text/css" /> -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- Document Title
    ============================================= -->
    <title>Allour Travel Agency</title>

</head>

<body class="stretched">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

    <!-- Header
    ============================================= -->
    <!-- <header id="header" class="full-header">

        <div id="header-wrap">

            <div class="container clearfix">
              Logo
                ============================================= -->
    <!-- <div id="logo">
         <a href="index.html" class="standard-logo" data-dark-logo="logo.png"><img src="logo.png" alt="Allour Travel Logo"></a>
        <a href="index.html" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="images/logo@2x.png" alt="Canvas Logo"></a>
    </div>
</div>

</div>

</header> -->

    <!-- Page Title
    ============================================= -->
    <!-- <section id="page-title">

        <div class="container clearfix">
            <h1></h1>
            <span></span>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#"></a></li>
                <li class="breadcrumb-item active" aria-current="page"></li>
            </ol>
        </div>

    </section> -->
    <!-- #page-title end -->

    <!-- Content
    ============================================= -->
    <header id="header" class="full-header">
        <div id="header-wrap">
            <div class="container clearfix">
                 <div id="logo">
                 <a href="index.html" class="standard-logo" data-dark-logo="logo.jpg"><img src="logo.jpg" alt="Allour Travel Logo"></a>
                <a href="index.html" class="retina-logo" data-dark-logo="logo.jpg"><img src="logo.jpg" alt="Allour Travel Logo"></a>
                </div>
            </div>
        </div>
    </header>

    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">
                <div class="postcontent">
                    <h3 style="text-align:center">Welcome to kick off meeting APS-FY23 (4 - 6 October 2022 Abu-Dahbi)</h3>
                    <div class= "countdown mb-1" id="countdown" >
                        <ul>
                            <li><span id="days"></span>days</li>
                            <li><span id="hours"></span>Hours</li>
                            <li><span id="minutes"></span>Minutes</li>
                            <li><span id="seconds"></span>Seconds</li>
                        </ul>
                    </div>
                    @if(Session::has('message'))
                        <p class="alert alert-info" style="font-size: larger;font-weight: bolder;background: #409aff;color:#fff">{{ Session::get('message') }}</p>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="post" action="{{url('save-data')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-10"><h4 style="text-align:left">Please fill in the form:</h4></div>
                        <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="from">From</label>
                            <select id="from" name="from" class="form-control" required>
                              <option value="">-- Choose Departure  --</option>
                                @foreach($citiesFrom as $city)
                                    <option value="{{$city->id}}">{{$city->name}}</option>
                                @endforeach

                            </select>
                          </div>
                            <div class="form-group col-md-6">
                            <label for="to">To</label>
                            <select id="to" name="to" class="form-control" required>
                              <option value="0">-- Choose Destintion --</option>
                              @foreach($citiesTo as $city)
                                <option value="{{$city->id}}">{{$city->name}}</option>
                                @endforeach
                            </select>
                            </div>
                        </div>
                        <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputState">Trips</label>
                          <select id="trips" name="trips" class="form-control" required>
                            <option value="trip">Riyadh - Abu Dhabi - Riyadh</option>
                              <option value="trip3">Trip A</option>
                                <option value="trip3">Ey 316 04 OCT RUH-AUH 4:25 7:10 <br></br>Ey 315 06 OCT AUH-RUH 2:20 3:15</option>
                              <option value="trip3">Trip B</option>
                                <option value="trip3">Ey 316 04 OCT RUH-AUH 4:25 7:10 <br></br>Ey 317 06 OCT AUH-RUH 14:45 15:40</option>
                        </select>
                        </div>
                        </div>
                            <fieldset class="form-group" data-role="controlgroup" data-type="horizontal" data-role="fieldcontain" style="width:100%">
{{--                                <legend class="col-form-label col-sm-2 pt-0">Trip</legend>--}}
                                <!-- <label for="trip">Trip</label>
                                <div class="col-md-10 col-lg-10">
                                    <input class="form-check-input" type="radio" name="trip" id="gridRadios1" value="Trip1 10:00AM" checked>
                                    <label class="form-check-label" for="gridRadios1">
                                        Trip1 10:00AM
                                    </label>
                                    <input class="form-check-input" type="radio" name="trip" id="gridRadios2" value="Trip2 12:00AM">
                                    <label class="form-check-label" for="gridRadios2">
                                        Trip2 12:00AM
                                    </label>
                                    <input class="form-check-input" type="radio" name="trip" id="gridRadios3" value="Trip3 14:00PM">
                                    <label class="form-check-label" for="gridRadios3">
                                        Trip3 14:00PM
                                    </label>
                                </div>-->
                            </fieldset>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">First Name</label>
                                <input type="text" class="form-control" id="inputEmail4" name="first_name" placeholder="First Name" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Last Name</label>
                                <input type="text" class="form-control" id="inputEmail4" name="last_name" placeholder="Last Name" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputState">Nationality</label>
                                <select id="nationality" name="nationality" class="form-control" required>
                                    <option value="">-- select one --</option>
                                    <option value="afghan">Afghan</option>
                                    <option value="albanian">Albanian</option>
                                    <option value="algerian">Algerian</option>
                                    <option value="american">American</option>
                                    <option value="andorran">Andorran</option>
                                    <option value="angolan">Angolan</option>
                                    <option value="antiguans">Antiguans</option>
                                    <option value="argentinean">Argentinean</option>
                                    <option value="armenian">Armenian</option>
                                    <option value="australian">Australian</option>
                                    <option value="austrian">Austrian</option>
                                    <option value="azerbaijani">Azerbaijani</option>
                                    <option value="bahamian">Bahamian</option>
                                    <option value="bahraini">Bahraini</option>
                                    <option value="bangladeshi">Bangladeshi</option>
                                    <option value="barbadian">Barbadian</option>
                                    <option value="barbudans">Barbudans</option>
                                    <option value="batswana">Batswana</option>
                                    <option value="belarusian">Belarusian</option>
                                    <option value="belgian">Belgian</option>
                                    <option value="belizean">Belizean</option>
                                    <option value="beninese">Beninese</option>
                                    <option value="bhutanese">Bhutanese</option>
                                    <option value="bolivian">Bolivian</option>
                                    <option value="bosnian">Bosnian</option>
                                    <option value="brazilian">Brazilian</option>
                                    <option value="british">British</option>
                                    <option value="bruneian">Bruneian</option>
                                    <option value="bulgarian">Bulgarian</option>
                                    <option value="burkinabe">Burkinabe</option>
                                    <option value="burmese">Burmese</option>
                                    <option value="burundian">Burundian</option>
                                    <option value="cambodian">Cambodian</option>
                                    <option value="cameroonian">Cameroonian</option>
                                    <option value="canadian">Canadian</option>
                                    <option value="cape verdean">Cape Verdean</option>
                                    <option value="central african">Central African</option>
                                    <option value="chadian">Chadian</option>
                                    <option value="chilean">Chilean</option>
                                    <option value="chinese">Chinese</option>
                                    <option value="colombian">Colombian</option>
                                    <option value="comoran">Comoran</option>
                                    <option value="congolese">Congolese</option>
                                    <option value="costa rican">Costa Rican</option>
                                    <option value="croatian">Croatian</option>
                                    <option value="cuban">Cuban</option>
                                    <option value="cypriot">Cypriot</option>
                                    <option value="czech">Czech</option>
                                    <option value="danish">Danish</option>
                                    <option value="djibouti">Djibouti</option>
                                    <option value="dominican">Dominican</option>
                                    <option value="dutch">Dutch</option>
                                    <option value="east timorese">East Timorese</option>
                                    <option value="ecuadorean">Ecuadorean</option>
                                    <option value="egyptian">Egyptian</option>
                                    <option value="emirian">Emirian</option>
                                    <option value="equatorial guinean">Equatorial Guinean</option>
                                    <option value="eritrean">Eritrean</option>
                                    <option value="estonian">Estonian</option>
                                    <option value="ethiopian">Ethiopian</option>
                                    <option value="fijian">Fijian</option>
                                    <option value="filipino">Filipino</option>
                                    <option value="finnish">Finnish</option>
                                    <option value="french">French</option>
                                    <option value="gabonese">Gabonese</option>
                                    <option value="gambian">Gambian</option>
                                    <option value="georgian">Georgian</option>
                                    <option value="german">German</option>
                                    <option value="ghanaian">Ghanaian</option>
                                    <option value="greek">Greek</option>
                                    <option value="grenadian">Grenadian</option>
                                    <option value="guatemalan">Guatemalan</option>
                                    <option value="guinea-bissauan">Guinea-Bissauan</option>
                                    <option value="guinean">Guinean</option>
                                    <option value="guyanese">Guyanese</option>
                                    <option value="haitian">Haitian</option>
                                    <option value="herzegovinian">Herzegovinian</option>
                                    <option value="honduran">Honduran</option>
                                    <option value="hungarian">Hungarian</option>
                                    <option value="icelander">Icelander</option>
                                    <option value="indian">Indian</option>
                                    <option value="indonesian">Indonesian</option>
                                    <option value="iranian">Iranian</option>
                                    <option value="iraqi">Iraqi</option>
                                    <option value="irish">Irish</option>

                                    <option value="ivorian">Ivorian</option>
                                    <option value="jamaican">Jamaican</option>
                                    <option value="japanese">Japanese</option>
                                    <option value="jordanian">Jordanian</option>
                                    <option value="kazakhstani">Kazakhstani</option>
                                    <option value="kenyan">Kenyan</option>
                                    <option value="kittian and nevisian">Kittian and Nevisian</option>
                                    <option value="kuwaiti">Kuwaiti</option>
                                    <option value="kyrgyz">Kyrgyz</option>
                                    <option value="laotian">Laotian</option>
                                    <option value="latvian">Latvian</option>
                                    <option value="lebanese">Lebanese</option>
                                    <option value="liberian">Liberian</option>
                                    <option value="libyan">Libyan</option>
                                    <option value="liechtensteiner">Liechtensteiner</option>
                                    <option value="lithuanian">Lithuanian</option>
                                    <option value="luxembourger">Luxembourger</option>
                                    <option value="macedonian">Macedonian</option>
                                    <option value="malagasy">Malagasy</option>
                                    <option value="malawian">Malawian</option>
                                    <option value="malaysian">Malaysian</option>
                                    <option value="maldivan">Maldivan</option>
                                    <option value="malian">Malian</option>
                                    <option value="maltese">Maltese</option>
                                    <option value="marshallese">Marshallese</option>
                                    <option value="mauritanian">Mauritanian</option>
                                    <option value="mauritian">Mauritian</option>
                                    <option value="mexican">Mexican</option>
                                    <option value="micronesian">Micronesian</option>
                                    <option value="moldovan">Moldovan</option>
                                    <option value="monacan">Monacan</option>
                                    <option value="mongolian">Mongolian</option>
                                    <option value="moroccan">Moroccan</option>
                                    <option value="mosotho">Mosotho</option>
                                    <option value="motswana">Motswana</option>
                                    <option value="mozambican">Mozambican</option>
                                    <option value="namibian">Namibian</option>
                                    <option value="nauruan">Nauruan</option>
                                    <option value="nepalese">Nepalese</option>
                                    <option value="new zealander">New Zealander</option>
                                    <option value="ni-vanuatu">Ni-Vanuatu</option>
                                    <option value="nicaraguan">Nicaraguan</option>
                                    <option value="nigerien">Nigerien</option>
                                    <option value="north korean">North Korean</option>
                                    <option value="northern irish">Northern Irish</option>
                                    <option value="norwegian">Norwegian</option>
                                    <option value="omani">Omani</option>
                                    <option value="pakistani">Pakistani</option>
                                    <option value="palauan">Palauan</option>
                                    <option value="panamanian">Panamanian</option>
                                    <option value="papua new guinean">Papua New Guinean</option>
                                    <option value="paraguayan">Paraguayan</option>
                                    <option value="peruvian">Peruvian</option>
                                    <option value="polish">Polish</option>
                                    <option value="portuguese">Portuguese</option>
                                    <option value="qatari">Qatari</option>
                                    <option value="romanian">Romanian</option>
                                    <option value="russian">Russian</option>
                                    <option value="rwandan">Rwandan</option>
                                    <option value="saint lucian">Saint Lucian</option>
                                    <option value="salvadoran">Salvadoran</option>
                                    <option value="samoan">Samoan</option>
                                    <option value="san marinese">San Marinese</option>
                                    <option value="sao tomean">Sao Tomean</option>
                                    <option value="saudi">Saudi</option>
                                    <option value="scottish">Scottish</option>
                                    <option value="senegalese">Senegalese</option>
                                    <option value="serbian">Serbian</option>
                                    <option value="seychellois">Seychellois</option>
                                    <option value="sierra leonean">Sierra Leonean</option>
                                    <option value="singaporean">Singaporean</option>
                                    <option value="slovakian">Slovakian</option>
                                    <option value="slovenian">Slovenian</option>
                                    <option value="solomon islander">Solomon Islander</option>
                                    <option value="somali">Somali</option>
                                    <option value="south african">South African</option>
                                    <option value="south korean">South Korean</option>
                                    <option value="spanish">Spanish</option>
                                    <option value="sri lankan">Sri Lankan</option>
                                    <option value="sudanese">Sudanese</option>
                                    <option value="surinamer">Surinamer</option>
                                    <option value="swazi">Swazi</option>
                                    <option value="swedish">Swedish</option>
                                    <option value="swiss">Swiss</option>
                                    <option value="syrian">Syrian</option>
                                    <option value="taiwanese">Taiwanese</option>
                                    <option value="tajik">Tajik</option>
                                    <option value="tanzanian">Tanzanian</option>
                                    <option value="thai">Thai</option>
                                    <option value="togolese">Togolese</option>
                                    <option value="tongan">Tongan</option>
                                    <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
                                    <option value="tunisian">Tunisian</option>
                                    <option value="turkish">Turkish</option>
                                    <option value="tuvaluan">Tuvaluan</option>
                                    <option value="ugandan">Ugandan</option>
                                    <option value="ukrainian">Ukrainian</option>
                                    <option value="uruguayan">Uruguayan</option>
                                    <option value="uzbekistani">Uzbekistani</option>
                                    <option value="venezuelan">Venezuelan</option>
                                    <option value="vietnamese">Vietnamese</option>
                                    <option value="welsh">Welsh</option>
                                    <option value="yemenite">Yemenite</option>
                                    <option value="zambian">Zambian</option>
                                    <option value="zimbabwean">Zimbabwean</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputState">Email</label>
                                <input type="text" class="form-control" id="inputEmail4" name="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputpassport">Passport Number</label>
                                <input type="text" class="form-control" id="inputEmail4" name="passport_num" placeholder="Passport Number" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword5">Passport Expiry Date</label>
                                <input type="date" class="form-control" name="passport_exiration" id="inputPassword5" placeholder="passport expiry date" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-2">
                                <label for="inputEmail4">Area Code</label>
                                <input type="text" class="form-control" name="code" id="inputEmail4" placeholder="Area Code" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword5">Phone Number</label>
                                <input type="text" name="phone" class="form-control" id="inputPassword5" placeholder="Phone Number" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group  col-md-6">
                                <label for="inputPassword5">Passport Copy Attachment</label>
                                <input type="file" class="form-control" id="passport" name="passport" placeholder="Passport Copy Attachment" required>
                            </div>
                        </div>

                        <!-- <input type="submit" name="submit" id="submit"> -->
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>

            </div>

    </section><!-- #content end -->

    <!-- Footer
    ============================================= -->
    <footer id="footer" class="dark">

        <!-- <div class="container"> -->

        <!-- Footer Widgets
        ============================================= -->
        <!-- <div class="footer-widgets-wrap clearfix">


        </div> -->
        <!-- .footer-widgets-wrap end -->

        <!-- </div> -->

        <!-- Copyrights
        ============================================= -->
        <div id="copyrights">

            <div class="container clearfix">

                <div style="text-align:center">
                    Copyrights &copy <a href="https://orchidasoft.com/">OrchidaSof</a>t; 2022 All Rights Reserved <br>

                </div>


            </div>

        </div><!-- #copyrights end -->

    </footer><!-- #footer end -->

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

<!-- External JavaScripts
============================================= -->
<script src="{{asset('website/js/jquery.js')}}"></script>
<script src="{{asset('website/js/plugins.js')}}"></script>

<!-- Footer Scripts
============================================= -->
<script src="{{asset('website/js/functions.js')}}"></script>
<script>
    function disableSubmit() {
        document.getElementById("submit").disabled = true;
    }

    function activateButton(element) {

        if(element.checked) {
            document.getElementById("submit").disabled = false;
        }
        else  {
            document.getElementById("submit").disabled = true;
        }

    }
</script>
<script>
    $.ajaxSetup({

        headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        }

    });
    $(document).on('change', '#to',function(){
        var to = $(this).val();
        var from = $('#from').val();
        //console.log(testId);
        $.ajax({
            type:'POST',
            url:"{{ route('get_data_by_id') }}",
            data:{'to':to , 'from':from},
            success:function(data){
                //console.log(data);
                $("#trips").empty();
                //$("#trips").append('<option value=1>My option</option>');
                $("#trips").append('<option selected="selected">---</option>');
                $.each(data, function(value, text){
                    $("#trips").append('<option value="' + text.id + '">'+'<p>' + text.TripDesc +text.TripNum+'</p>'+'<p>'+text.Departure+text.Destinition+ '</p>'+'</option>');
                });
            }
        });
    });
</script>

<ANY data-toggle="modal" data-target="TARGET">...</ANY>

<div class="modal fade" id="SELECTOR" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="text-align: center">
                <h4>You will be staying in a DOUBLE room at The Ritz-Carlton Abu Dhabi, Grand Canal!</h4>
            </div>
            <div class="modal-body">
            <form action="{{url('email-partner')}}" method="post">
                @csrf
                <label for="name">I would like to share a room with</label>
                <input id="name" class="form-control mt-1" name="name" type="text" placeholder="Type the email">
                <span class="col-lg-12 col-md-12">(insert Full Name of desired roommate)</span>
                <input type="hidden" name="profile_id" value="{{ Session::get('message_with_partner') }}">
                <button type="submit" class="col-lg-12 col-md-12 btn btn-primary mt-2">Submit</button>
            </form>
            </div>
            <div class="modal-footer">           <!-- ↓ -->  <!--      ↓      -->

            </div>
        </div>
    </div>
</div>
@if(Session::has('message_with_partner'))
    <script type="text/javascript">
        $(window).on('load', function() {
            $('#SELECTOR').modal('show');
        });
    </script>
@endif

</body>
</html>
