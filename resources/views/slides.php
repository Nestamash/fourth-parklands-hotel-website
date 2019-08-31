

@extends('main')
@section('header')
<style>
    .class-name {
        white-space: pre-wrap;
    }

    .arrow-left {
        width: 0;
        height: 0;
        border-top: 50px solid transparent;
        border-bottom: 50px solid transparent;

        border-right:50px solid #09c;
    }
    .arrow-right {
        width: 0;
        height: 0;
        border-top: 60px solid transparent;
        border-bottom: 60px solid transparent;

        border-left: 60px solid green;
    }
    <style>
     * {
         box-sizing: border-box;
     }
    .header {
        border: 1px solid red;
        padding: 15px;
    }

</style>
@endsection

@section('content')
<!--
<div class="row">
    <div class="col-md-2" style="background-color:firebrick; ">
        <p>fg\ygfgshgfggfgff  ty sdfg </p>
    </div>

<div class="col-md-8" style="background-color:lavenderblush; ">
        <div class="image-container">
            <?php foreach ($galleries as $gallery): ?>


                <img class="mySlides" src="/photos/fourth/{{ $gallery->cover_image }}" alt="For" width="802" height="608">

                <a class="w3-btn-floating" href="#" style="position:absolute;top:45%;left:0" onclick="plusDivs(-1)"><div class="arrow-left"></div></a>
                <a class="w3-btn-floating" href="#" style="position:absolute;top:45%;right:0" onclick="plusDivs(1)"><div class="arrow-right"></div></a>
            <?php endforeach; ?>
        </div>
    </div>

</div>
<div class="col-md-2" style="background-color:firebrick; ">
    <p>fg\ygfgshgfggfgff  ty sdfg </p>
</div>

<h1>WELCOME TO FOURTH PARKLANDS HOTEL</h1>
<P>Fourth parklands hotel is strategically positioned Just 900 metres from Sarit Centre Shopping Mall Westlands Nairobi and a 25-minute drive from Jomo Kenyatta International Airport, Nairobi National Park is 20 minutes away, Fourth Parklands Hotel offers you a comfortable quiet stay, along with luxurious accommodation and conferencing facilities.</P>


<div class="class-name">
<h2>ACCOMMODATION</h2>
<P><B>PLEASE INSERT ROOM PHOTOS HERE</B></P>
<P>Fourth parklands Hotel is located a short distance from the city, it is ideal for business people working in the area or holiday-makers looking for a quieter alternative to the busy city.

    This 20 rooms Hotel has been carefully designed to offer spacious luxurious environmental friendly option. Each room is comfortable and tastefully furnished.

    Since its establishment it has become one of the leading accommodation providers in Action in Parklands. We ensure that you have a comfortable, pleasant stay. We pride ourselves with providing the highest quality customer service. Our customer service levels are our gauge of how well we are doing.

    Fourth Parklands Hotel offers a choice of Deluxe, Executive and Twin Bed rooms.</P>

</div>


<h3>FACILITIES</h3>
<p>free parking</p>
<p>food available</p>
<p>restaraunt</p>
<p>double security</p>
<p>24 hour front desk services</p>
<p>wheelchair access</p>
<p>bed and breakfast</p>
<p>wake up calls</p>
<p>credit cards accepted</p>
<p>WIFI access</p>
<p>dry cleaning and laundry services</p>
<p>free WIFI</p>
<P>BAR</P>
<p>airport pick ups</p>
<p>conference and meeting facilities</p>





<h4>GALLERY</h4>
<P>INSERT PHOTOS HERE I.E ROOM BED CONFERENCE BAR AND RESTAURANT</P>



<H5>FOURTH PARKLANDS  HOTEL</H5>
<p>located 31 Wangapala Road, Parklands, P.O Box 22011 - 00100
    Nairobi
    Kenya.</p>
<P>cell: 0710384641 </P>
<p>Email us at: info@fourthparklands.com</p>





<script>
    var slideIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > x.length) {slideIndex = 1}
        x[slideIndex-1].style.display = "block";
        setTimeout(carousel, 2000);
    }
</script>-->







<?php foreach ($galleries as $gallery): ?>


    <img class="mySlides" src="/photos/fourth/{{ $gallery->cover_image }}" alt="For" width="802" height="608">

<?php endforeach; ?>



<div class="header">
    <h1>Chaniat2437ddddhj</h1>
</div>
@endsection