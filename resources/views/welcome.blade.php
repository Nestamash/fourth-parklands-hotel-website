

@extends('main')
@section('header')





    <style>
        body{
            background-color: white;
            font-family: "Times New Roman", Times, serif;
        }
        h1 {
            text-align: center;
            color:#F97300;
            margin: 2em;
        }
        p {
            text-indent: 50px;
            text-align: justify;

            color: black;
        }
        #wangapala {
            text-align: center;


        }
        #box{
            text-align: center;
            text-indent: 50px;
        }
        #cell{
            text-align: center;
            text-indent: 50px;
        }
        #box{
            text-align: center;
            text-indent: 50px;
        }
        #email{
            text-align: center;
            text-indent: 50px;
        }
        #nairobi{
            text-align: center;
            text-indent: 50px;
        }
        #kenya{
            text-align: center;
            text-indent: 50px;
        }


#chat{
    color:#fff;
    background-color: #4f4f4f!important;
}


                              .gallery
                              {
                                  display: inline-block;
                                  margin-top: 20px;
                              }
        .close-icon{
            border-radius: 50%;
            position: absolute;
            right: 5px;
            top: -10px;
            padding: 5px 8px;
        }
        .form-image-upload{
            background: #e8e8e8 none repeat scroll 0 0;
            padding: 15px;
        }


        div.gallery {
            margin: 5px;
            border: 1px solid #ccc;
            float: left;
            height: auto;
            overflow: auto;

        }

        div.gallery:hover {
            border: 1px solid #777;
        }

        div.gallery img {


        }

        div.desc {
            padding: 15px;
            text-align: center;
        }



        *, *:before, *:after {
            box-sizing: border-box;
        }

        html {
            font-size: 18px;
        }

        body {
            font-family: "Roboto", sans-serif;
            font-size: 1em;
            line-height: 1.6;
        }

        .datepicker {
            width: 400px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 0 50px 0 rgba(0,0,0,0.2);
            margin: 50px auto;
            overflow: hidden;
        .datepicker-header {
            height: 250px;
            background-image: url('https://cdn.dribbble.com/users/3178178/screenshots/6346366/lifeguard_on_duty.jpg');
            background-position: center center;
            background-size: 100%;
        }
        .ui-datepicker-inline {
            padding: 30px;
        }

        .ui-datepicker-header {
            text-align: center;
            padding-bottom: 1em;
            text-transform: uppercase;
            letter-spacing: .1em;
        .ui-datepicker-prev,
        .ui-datepicker-next {
            display: inline;
            float: left;
            cursor: pointer;
            font-size: 1.4em;
            padding: 0 10px;
            margin-top: -10px;
            color: #CCC;
        }

        .ui-datepicker-next {
            float: right;
        }
        }

        .ui-datepicker-calendar {
            width: 100%;
            text-align: center;
        thead {
            color: #CCC;
        }

        tr {
        th, td {
            padding-bottom: .5em;
        }
        }
        a {
            color: #444;
            text-decoration: none;
            display: block;
            margin: 0 auto;
            width: 35px;
            height: 35px;
            line-height: 35px;
            border-radius: 50%;
            border: 1px solid transparent;
            cursor: pointer;
        }

        .ui-state-highlight {
            border-color: #D24D57;
            color: #D24D57;
        }
        }
        }
.mySlides{
    margin-top: 100px;

    padding-top: 30px;
    padding-bottom: 26px;
}
        div.datescontainer {

            border: 3px solid #73AD21;
            position: absolute;
            top: 50%;

            margin-top: 0px;

            width: 100%;
            height: 100px;
        }


    </style>
    @endsection
@section('content')





    <?php foreach ($galleries as $gallery): ?>
    <img class="mySlides"  src="/photos/fourth/{{ $gallery->cover_image }}" alt="For" width="100%" height="588">
    <?php endforeach; ?>
    <div class="datescontainer">
        <h3>This is a heading in a div element</h3>
        <p>This is some text in a div element.</p>
    </div>

    <a href="#"><i id="left" class="fa fa-chevron-left" style="font-size:30px;color:white"></i></a>
    <a href="#"><i id="right" class="fa fa-chevron-right" style="font-size:30px;color:white"></i></a>


    <a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Book now</a>

    <button type="button" class="btn btn-dark"><span class="cui-contrast"></span> Dark Button</button>
    

    <div class="row" style="width: 100%;">
        <div class="col-sm-1" ></div>
        <div class="col-sm-10" >
            <h1>WELCOME TO FOURTH PARKLANDS HOTEL</h1>
            <P>Fourth parklands hotel is strategically positioned Just 900 metres from Sarit Centre Shopping Mall Westlands Nairobi and a 25-minute drive from Jomo Kenyatta International Airport, Nairobi National Park is 20 minutes away, Fourth Parklands Hotel offers you a comfortable quiet stay, along with luxurious accommodation and conferencing facilities.</P>
        </div>
        <div class="col-sm-1" ></div>
    </div>

    <div style="background-color: white">
        <h1>ACCOMMODATION</h1>
        @if($someKey->count())
            @foreach($someKey as $image)
                <div class="gallery">
                    <a target="_blank" href="#">
                        <img src="/images/{{ $image->image }}" alt="Cinque Terre" width="400px" height="300">
                    </a>
                    <div class="desc"> <small class='text-muted'>{{ $image->title }}</small></div>
                </div>
            @endforeach
        @endif



    </div>


    <div class="row" style="width: 100%;">
        <div class="col-sm-1" ></div>
        <div class="col-sm-10">

            <P>Fourth parklands Hotel is located a short distance from the city, it is ideal for business people working in the area or holiday-makers looking for a quieter alternative to the busy city.

                This 20 rooms Hotel has been carefully designed to offer spacious luxurious environmental friendly option. Each room is comfortable and tastefully furnished.

                Since its establishment it has become one of the leading accommodation providers in Action in Parklands. We ensure that you have a comfortable, pleasant stay. We pride ourselves with providing the highest quality customer service. Our customer service levels are our gauge of how well we are doing.

                Fourth Parklands Hotel offers a choice of Deluxe, Executive and Twin Bed rooms.</P>

        </div>
        <div class="col-sm-1"> </div>
    </div>

    <h1>FACILITIES</h1>

    <div class="row" style="width: 100%;">

        <div class="col-sm-4" >
            <p>free parking</p>
            <p>food available</p>
            <p>restaraunt</p>
            <p>double security</p>
            <p>24 hour front desk services</p>
            <p>wheelchair access</p>
            <p>bed and breakfast</p>
            <p>wake up calls</p>
            <p>credit cards accepted</p></div>
        <div class="col-sm-4" >  <p>WIFI access</p>
            <p>dry cleaning and laundry services</p>
            <p>free WIFI</p>
            <P>BAR</P>
            <p>airport pick ups</p>
            <p>conference and meeting facilities</p></div>
        <div class="col-sm-4" ><p>free parking</p>
            <p>food available</p>
            <p>restaraunt</p>
            <p>double security</p>
            <p>24 hour front desk services</p>
            <p>wheelchair access</p>
            <p>bed and breakfast</p>
            <p>wake up calls</p>
            <p>credit cards accepted</p></div>

    </div>

    <div style="background-color: white">
        <h1>GALLERY</h1>
        @if($hotel->count())
            @foreach($hotel as $image)
                <div class="gallery">
                    <a target="_blank" href="#">
                        <img src="/images/{{ $image->image }}" alt="Cinque Terre" width="400px" height="300">
                    </a>
                    <div class="desc"> <small class='text-muted'>{{ $image->title }}</small></div>
                </div>
            @endforeach
        @endif



    </div>


        <div class="row" style="width: 100%;">
            <div class="col-sm-1" style="background-color:#f1f1f1;"></div>
            <div class="col-sm-10" style="background-color:#f1f1f1;">
                <H1>FOURTH PARKLANDS  HOTEL</H1>
                <p id="wangapala">Located 31 Wangapala Road, Off 4th Avenue Highridge, Parklands </p>
                <p id="box">P.O Box 22011 - 00100</p>
                <p id="nairobi"> Nairobi</p>
                    <p id="kenya">Kenya.</p>
                <P id="cell"> <i class="fas fa-phone faa-pulse animated fa-1x"></i> 0710384641 </P>
                <p id="email"><i class='fa fa-envelope faa-horizontal animated fa-1x'></i></i> info@fourthparklands.com</p>

            </div>
            <div class="col-sm-1" style="background-color:#f1f1f1;"></div>
        </div>




    <div id="chat" class="row" style="width: 100%;">
        <div class="col-sm-1" ></div>
        <div class="col-sm-10" >
            <H1>what people are saying...</H1>
            <i class="fas fa-quote-left fa-2x fa-pull-left"></i>
            Gatsby believed in the green light, the orgastic future that year by year recedes before us.
            It eluded us then, but that’s no matter — tomorrow we will run faster, stretch our arms further...
            And one fine morning — So we beat on, boats against the current, borne back ceaselessly into the past. FOURTH PARKLANDS IS THE BEST HOTEL INPARKLANDS NAIROBI
            <i class="fas fa-quote-right fa-2x fa-pull-right"></i>

        </div>
        <div class="col-sm-1" ></div>
    </div>






    <script type="text/javascript">
        $(document).ready(function(){
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });
        });


    </script>
@endsection




















