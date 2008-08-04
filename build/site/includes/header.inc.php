<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">

<html lang="en">
<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<title>Grand Calabash - <?php echo $page_title; ?></title>
	
	<style type="text/css" media="all">
        @import "/media/css/reset.css";
	    @import "/media/css/screen.css";
	    @import "/media/css/lightbox.css";
	    @import "/media/css/sifr-screen.css";
	</style>
	
	<style type="text/css" media="print">
	    @import "/media/css/print.css";
	    @import "/media/css/sifr-print.css";
	</style>
	
	<!--[if lte IE 6]>
	    <style type="text/css" media="all">
	        @import "/media/css/ie.css";
	    </style>
	<![endif]-->
	
	<script type="text/javascript" src="/media/js/jquery.js"></script>
	<script type="text/javascript" src="/media/js/jquery.lightbox.js"></script>
	<script type="text/javascript" src="/media/js/swfobject.js"></script>
	<script type="text/javascript" src="/media/js/sifr.js"></script>
	<script type="text/javascript" src="/media/js/calabash.js"></script>
	
</head>
<body>

    <div id="Container">
        
        <div id="Header">
            <a href="/"><img src="/media/images/logo.png" alt="Grand Calabash" id="Logo" /></a>
            <p>At the Regent Grand Resort Grace Bay, Providenciales, Turks &amp; Caicos Islands, BWI</p>
            <a href="mailto:rentals@grandcalabash.com" id="ContactLink">Contact Us</a>
        </div>
        
        <div id="Columns">
            
            <div id="Navigation">
                <ul>
                    <li><a href="/reservation/"<?php if ($_SERVER["REQUEST_URI"] == "/reservation/") echo ' class="active"'; ?>>Reservation &amp; Rates</a></li>
                    <li><a href="/gallery/"<?php if ($_SERVER["REQUEST_URI"] == "/gallery/") echo ' class="active"'; ?>>Photo Gallery</a></li>
                    <li><a href="/dining/"<?php if ($_SERVER["REQUEST_URI"] == "/dining/") echo ' class="active"'; ?>>Dining In or Out</a></li>
                    <li><a href="/fact-sheet/"<?php if ($_SERVER["REQUEST_URI"] == "/fact-sheet/") echo ' class="active"'; ?>>Fact Sheet</a></li>
                    <li><a href="/resort/"<?php if ($_SERVER["REQUEST_URI"] == "/resort/") echo ' class="active"'; ?>>The Resort</a></li>
                    <li><a href="/things-to-do/"<?php if ($_SERVER["REQUEST_URI"] == "/things-to-do/") echo ' class="active"'; ?>>Things To Do</a></li>
                    <li><a href="/testimonials/"<?php if ($_SERVER["REQUEST_URI"] == "/testimonials/") echo ' class="active"'; ?>>Testimonials</a></li>
                    <li><a href="/turks-and-caicos/"<?php if ($_SERVER["REQUEST_URI"] == "/turks-and-caicos/") echo ' class="active"'; ?>>About Turks &amp; Caicos</a></li>
                    <li><a href="/getting-there/"<?php if ($_SERVER["REQUEST_URI"] == "/getting-there/") echo ' class="active"'; ?>>Getting There</a></li>
                </ul>
            </div>
            
            <div id="Content">