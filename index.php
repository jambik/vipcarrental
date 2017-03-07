<?php

$cars = json_decode(file_get_contents('cars.json'));

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Car|Rental</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="css/animate.css" rel="stylesheet">

    <!-- Google Font Lato -->
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700,900,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Plugin Styles -->
    <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">

    <!-- Main Styles -->
    <link href="css/styles.css" rel="stylesheet">

    <link rel="shortcut icon" href="img/favicon.png">
</head>
<body id="top" data-spy="scroll" data-target=".navbar" data-offset="260">

<!-- Header start -->
<header data-spy="affix" data-offset-top="39" data-offset-bottom="0" class="large">

    <div class="row container box">
        <div class="col-md-5">
            <!-- Logo start -->
            <div class="brand">
                <h1><a class="scroll-to" href="#top"><img class="img-responsive" src="img/logo.png" alt="Car|Rental"></a></h1>
            </div>
            <!-- Logo end -->
        </div>

        <div class="col-md-7">
            <div class="pull-right">
                <div class="header-info pull-right">
                    <div class="contact pull-left">&nbsp;</div>
                </div>
            </div>

            <div class="clearfix"></div>

            <!-- start navigation -->
            <nav class="navbar navbar-default" role="navigation">
                <div class="container-fluid">
                    <!-- Toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand scroll-to" href="#top"><img class="img-responsive"  src="img/logo.png" alt="Car|Rental"></a>
                    </div>
                    <!-- Collect the nav links, for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <!-- Nav-Links start -->
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="#top" class="scroll-to">Home</a></li>
                            <li><a href="#vehicles" class="scroll-to">Vehicle Models</a></li>
                            <li><a href="#locations" class="scroll-to">Locations</a></li>
                            <li><a href="#contact" class="scroll-to">Contact</a></li>
                        </ul>
                        <!-- Nav-Links end -->
                    </div>
                </div>
            </nav>
            <!-- end navigation -->
        </div>
    </div>

</header>
<!-- Header end -->



<!-- Teaser start -->
<section id="teaser">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-xs-12 pull-right">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Wrapper for slides start -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="car-img">
                                <img src="img/car1.png" class="img-responsive" alt="car1">
                            </div>
                        </div>
                    </div>
                    <!-- Wrapper for slides end -->
                </div>
            </div>
            <div class="col-md-5 col-xs-12 pull-left">
                <div class="reservation-form-shadow">

                    <form action="#" method="post" name="car-select-form" id="car-select-form">

                        <div class="alert alert-danger hidden" id="car-select-form-msg">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <strong>Note:</strong> All fields required!
                        </div>

                        <!-- Car select start -->
                        <div class="styled-select-car">
                            <select name="car-select" id="car-select">
                                <option value="">Select your car type</option>
                                <option value="img/vehicle1.jpg" data-price="3600" data-warranty="9000" data-available="<?=$cars->{1}->date_expired && strtotime($cars->{1}->date_expired) > time() ? $cars->{1}->date_expired : ''?>">BMW X5<?=$cars->{1}->date_expired && strtotime($cars->{1}->date_expired) > time() ? ' (from '.date("m/d/Y", strtotime($cars->{1}->date_expired)).')' : ''?></option>
                                <option value="img/vehicle2.jpg" data-price="3600" data-warranty="9000" data-available="<?=$cars->{2}->date_expired && strtotime($cars->{2}->date_expired) > time() ? $cars->{2}->date_expired : ''?>">Mercedes-Benz S350<?=$cars->{2}->date_expired && strtotime($cars->{2}->date_expired) > time() ? ' (from '.date("m/d/Y", strtotime($cars->{2}->date_expired)).')' : ''?></option>
                                <option value="img/vehicle3.jpg" data-price="7200" data-warranty="18000" data-available="<?=$cars->{3}->date_expired && strtotime($cars->{3}->date_expired) > time() ? $cars->{3}->date_expired : ''?>">AMG G Brabus<?=$cars->{3}->date_expired && strtotime($cars->{3}->date_expired) > time() ? ' (from '.date("m/d/Y", strtotime($cars->{3}->date_expired)).')' : ''?></option>
                                <option value="img/vehicle4.jpg" data-price="7200" data-warranty="18000" data-available="<?=$cars->{4}->date_expired && strtotime($cars->{4}->date_expired) > time() ? $cars->{4}->date_expired : ''?>">Audi R8 v12<?=$cars->{4}->date_expired && strtotime($cars->{4}->date_expired) > time() ? ' (from '.date("m/d/Y", strtotime($cars->{4}->date_expired)).')' : ''?></option>
                                <option value="img/vehicle5.jpg" data-price="7200" data-warranty="18000" data-available="<?=$cars->{5}->date_expired && strtotime($cars->{5}->date_expired) > time() ? $cars->{5}->date_expired : ''?>">Maserati Quattroporte<?=$cars->{5}->date_expired && strtotime($cars->{5}->date_expired) > time() ? ' (from '.date("m/d/Y", strtotime($cars->{5}->date_expired)).')' : ''?></option>
                                <option value="img/vehicle6.jpg" data-price="7200" data-warranty="18000" data-available="<?=$cars->{6}->date_expired && strtotime($cars->{6}->date_expired) > time() ? $cars->{6}->date_expired : ''?>">Maserati GranTurismo<?=$cars->{6}->date_expired && strtotime($cars->{6}->date_expired) > time() ? ' (from '.date("m/d/Y", strtotime($cars->{6}->date_expired)).')' : ''?></option>
                                <option value="img/vehicle7.jpg" data-price="9200" data-warranty="23000" data-available="<?=$cars->{7}->date_expired && strtotime($cars->{7}->date_expired) > time() ? $cars->{7}->date_expired : ''?>">Bentley Continental<?=$cars->{7}->date_expired && strtotime($cars->{7}->date_expired) > time() ? ' (from '.date("m/d/Y", strtotime($cars->{7}->date_expired)).')' : ''?></option>
                                <option value="img/vehicle8.jpg" data-price="9200" data-warranty="23000" data-available="<?=$cars->{8}->date_expired && strtotime($cars->{8}->date_expired) > time() ? $cars->{8}->date_expired : ''?>">Bentley Flying Spur<?=$cars->{8}->date_expired && strtotime($cars->{8}->date_expired) > time() ? ' (from '.date("m/d/Y", strtotime($cars->{8}->date_expired)).')' : ''?></option>
                                <option value="img/vehicle9.jpg" data-price="7200" data-warranty="18000" data-available="<?=$cars->{9}->date_expired && strtotime($cars->{9}->date_expired) > time() ? $cars->{9}->date_expired : ''?>">Lamborghini Gallardo<?=$cars->{9}->date_expired && strtotime($cars->{9}->date_expired) > time() ? ' (from '.date("m/d/Y", strtotime($cars->{9}->date_expired)).')' : ''?></option>
                                <option value="img/vehicle10.jpg" data-price="7200" data-warranty="18000" data-available="<?=$cars->{10}->date_expired && strtotime($cars->{10}->date_expired) > time() ? $cars->{10}->date_expired : ''?>">Lamborghini Gallardo Conv<?=$cars->{10}->date_expired && strtotime($cars->{10}->date_expired) > time() ? ' (from '.date("m/d/Y", strtotime($cars->{10}->date_expired)).')' : ''?></option>
                                <option value="img/vehicle11.jpg" data-price="10000" data-warranty="25000" data-available="<?=$cars->{11}->date_expired && strtotime($cars->{11}->date_expired) > time() ? $cars->{11}->date_expired : ''?>">Rolls Royce Ghost<?=$cars->{11}->date_expired && strtotime($cars->{11}->date_expired) > time() ? ' (from '.date("m/d/Y", strtotime($cars->{11}->date_expired)).')' : ''?></option>
                                <option value="img/vehicle12.jpg" data-price="12000" data-warranty="30000" data-available="<?=$cars->{12}->date_expired && strtotime($cars->{12}->date_expired) > time() ? $cars->{12}->date_expired : ''?>">Rolls Royce Phantom<?=$cars->{12}->date_expired && strtotime($cars->{12}->date_expired) > time() ? ' (from '.date("m/d/Y", strtotime($cars->{12}->date_expired)).')' : ''?></option>
                            </select>
                        </div>
                        <!-- Car select end -->

                        <!-- Pick-up location start -->
                        <div class="location">
                            <div class="input-group pick-up">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-map-marker"></span> Pick-up</span>
                                <input type="text" disabled="disabled" value="UAE, Dubai, Sheikh Zayed Rd, Al Attar Tower" name="pick-up-location" id="pick-up-location" class="form-control autocomplete-location" placeholder="Enter a City">
                            </div>
                            <!-- Pick-up location end -->

                            <!--<a class="different-drop-off" href="#">Need a different drop-off location?</a>-->
                            <div>&nbsp;</div>

                            <!-- Drop-off location start -->
                            <div class="input-group drop-off">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-map-marker"></span> Drop-off</span>
                                <input type="text" name="drop-off-location" id="drop-off-location" class="form-control autocomplete-location" placeholder="Enter a City">
                            </div>
                        </div>
                        <!-- Drop-off location end -->

                        <!-- Pick-up date/time start -->
                        <div class="datetime pick-up">
                            <div class="date pull-left">
                                <div class="input-group">
                                    <span class="input-group-addon pixelfix"><span class="glyphicon glyphicon-calendar"></span> Pick-up</span>
                                    <input type="text" name="pick-up-date" id="pick-up-date" class="form-control datepicker" placeholder="mm/dd/yyyy">
                                </div>
                            </div>
                            <div class="time pull-right">
                                <div class="styled-select-time">
                                    <select name="pick-up-time" id="pick-up-time">
                                        <option value="12:00 AM">12:00 AM</option>
                                        <option value="12:30 AM">12:30 AM</option>
                                        <option value="01:00 AM">01:00 AM</option>
                                        <option value="01:30 AM">01:30 AM</option>
                                        <option value="02:00 AM">02:00 AM</option>
                                        <option value="02:30 AM">02:30 AM</option>
                                        <option value="03:00 AM">03:00 AM</option>
                                        <option value="03:30 AM">03:30 AM</option>
                                        <option value="04:00 AM">04:00 AM</option>
                                        <option value="04:30 AM">04:30 AM</option>
                                        <option value="05:00 AM">05:00 AM</option>
                                        <option value="05:30 AM">05:30 AM</option>
                                        <option value="06:00 AM">06:00 AM</option>
                                        <option value="06:30 AM">06:30 AM</option>
                                        <option value="07:00 AM">07:00 AM</option>
                                        <option value="07:30 AM">07:30 AM</option>
                                        <option value="08:00 AM">08:00 AM</option>
                                        <option value="08:30 AM">08:30 AM</option>
                                        <option value="09:00 AM">09:00 AM</option>
                                        <option value="09:30 AM">09:30 AM</option>
                                        <option value="10:00 AM">10:00 AM</option>
                                        <option value="10:30 AM">10:30 AM</option>
                                        <option value="11:00 AM">11:00 AM</option>
                                        <option value="11:30 AM">11:30 AM</option>
                                        <option value="12:00 PM">12:00 PM</option>
                                        <option value="12:30 PM">12:30 PM</option>
                                        <option value="01:00 PM">01:00 PM</option>
                                        <option value="01:30 PM">01:30 PM</option>
                                        <option value="02:00 PM">02:00 PM</option>
                                        <option value="02:30 PM">02:30 PM</option>
                                        <option value="03:00 PM">03:00 PM</option>
                                        <option value="03:30 PM">03:30 PM</option>
                                        <option value="04:00 PM">04:00 PM</option>
                                        <option value="04:30 PM">04:30 PM</option>
                                        <option value="05:00 PM">05:00 PM</option>
                                        <option value="05:30 PM">05:30 PM</option>
                                        <option value="06:00 PM">06:00 PM</option>
                                        <option value="06:30 PM">06:30 PM</option>
                                        <option value="07:00 PM">07:00 PM</option>
                                        <option value="07:30 PM">07:30 PM</option>
                                        <option value="08:00 PM">08:00 PM</option>
                                        <option value="08:30 PM">08:30 PM</option>
                                        <option value="09:00 PM">09:00 PM</option>
                                        <option value="09:30 PM">09:30 PM</option>
                                        <option value="10:00 PM">10:00 PM</option>
                                        <option value="10:30 PM">10:30 PM</option>
                                        <option value="11:00 PM">11:00 PM</option>
                                        <option value="11:30 PM">11:30 PM</option>
                                    </select>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!-- Pick-up date/time end -->

                        <!-- Drop-off date/time start -->
                        <div class="datetime drop-off">
                            <div class="date pull-left">
                                <div class="input-group">
                                    <span class="input-group-addon pixelfix"><span class="glyphicon glyphicon-calendar"></span> Drop-off</span>
                                    <input type="text" name="drop-off-date" id="drop-off-date" class="form-control datepicker" placeholder="mm/dd/yyyy">
                                </div>
                            </div>
                            <div class="time pull-right">
                                <div class="styled-select-time">
                                    <select name="drop-off-time" id="drop-off-time">
                                        <option value="12:00 AM">12:00 AM</option>
                                        <option value="12:30 AM">12:30 AM</option>
                                        <option value="01:00 AM">01:00 AM</option>
                                        <option value="01:30 AM">01:30 AM</option>
                                        <option value="02:00 AM">02:00 AM</option>
                                        <option value="02:30 AM">02:30 AM</option>
                                        <option value="03:00 AM">03:00 AM</option>
                                        <option value="03:30 AM">03:30 AM</option>
                                        <option value="04:00 AM">04:00 AM</option>
                                        <option value="04:30 AM">04:30 AM</option>
                                        <option value="05:00 AM">05:00 AM</option>
                                        <option value="05:30 AM">05:30 AM</option>
                                        <option value="06:00 AM">06:00 AM</option>
                                        <option value="06:30 AM">06:30 AM</option>
                                        <option value="07:00 AM">07:00 AM</option>
                                        <option value="07:30 AM">07:30 AM</option>
                                        <option value="08:00 AM">08:00 AM</option>
                                        <option value="08:30 AM">08:30 AM</option>
                                        <option value="09:00 AM">09:00 AM</option>
                                        <option value="09:30 AM">09:30 AM</option>
                                        <option value="10:00 AM">10:00 AM</option>
                                        <option value="10:30 AM">10:30 AM</option>
                                        <option value="11:00 AM">11:00 AM</option>
                                        <option value="11:30 AM">11:30 AM</option>
                                        <option value="12:00 PM">12:00 PM</option>
                                        <option value="12:30 PM">12:30 PM</option>
                                        <option value="01:00 PM">01:00 PM</option>
                                        <option value="01:30 PM">01:30 PM</option>
                                        <option value="02:00 PM">02:00 PM</option>
                                        <option value="02:30 PM">02:30 PM</option>
                                        <option value="03:00 PM">03:00 PM</option>
                                        <option value="03:30 PM">03:30 PM</option>
                                        <option value="04:00 PM">04:00 PM</option>
                                        <option value="04:30 PM">04:30 PM</option>
                                        <option value="05:00 PM">05:00 PM</option>
                                        <option value="05:30 PM">05:30 PM</option>
                                        <option value="06:00 PM">06:00 PM</option>
                                        <option value="06:30 PM">06:30 PM</option>
                                        <option value="07:00 PM">07:00 PM</option>
                                        <option value="07:30 PM">07:30 PM</option>
                                        <option value="08:00 PM">08:00 PM</option>
                                        <option value="08:30 PM">08:30 PM</option>
                                        <option value="09:00 PM">09:00 PM</option>
                                        <option value="09:30 PM">09:30 PM</option>
                                        <option value="10:00 PM">10:00 PM</option>
                                        <option value="10:30 PM">10:30 PM</option>
                                        <option value="11:00 PM">11:00 PM</option>
                                        <option value="11:30 PM">11:30 PM</option>
                                    </select>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!-- Drop-off date/time end -->

                        <input type="submit" class="submit" name="submit" value="continue car reservation" id="checkoutModalLabel">
                    </form>

                </div>
            </div>

        </div>
    </div>
</section>
<div class="arrow-down"></div>
<!-- Teaser end -->



<!-- Vehicles start -->
<section id="vehicles" class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="title wow fadeInDown" data-wow-offset="200">Vehicle Models</h2>
        </div>

        <!-- Vehicle nav start -->
        <div class="col-md-3 vehicle-nav-row wow fadeInUp" data-wow-offset="100">
            <div id="vehicle-nav-container">
                <ul class="vehicle-nav">
                    <li class="active"><a href="#vehicle-1">BMW X5</a><span class="active">&nbsp;</span></li>
                    <li><a href="#vehicle-2">Mercedes-Benz S350</a><span class="active">&nbsp;</span></li>
                    <li><a href="#vehicle-3">AMG G Brabus</a><span class="active">&nbsp;</span></li>
                    <li><a href="#vehicle-4">Audi R8 v12</a><span class="active">&nbsp;</span></li>
                    <li><a href="#vehicle-5">Maserati Quattroporte</a><span class="active">&nbsp;</span></li>
                    <li><a href="#vehicle-6">Maserati GranTurismo</a><span class="active">&nbsp;</span></li>
                    <li><a href="#vehicle-7">Bentley Continental</a><span class="active">&nbsp;</span></li>
                    <li><a href="#vehicle-8">Bentley Flying Spur</a><span class="active">&nbsp;</span></li>
                    <li><a href="#vehicle-9">Lamborghini Gallardo</a><span class="active">&nbsp;</span></li>
                    <li><a href="#vehicle-10">Lamborghini Gallardo Conv</a><span class="active">&nbsp;</span></li>
                    <li><a href="#vehicle-11">Rolls Royce Ghost</a><span class="active">&nbsp;</span></li>
                    <li><a href="#vehicle-12">Rolls Royce Phantom</a><span class="active">&nbsp;</span></li>
                </ul>
            </div>

            <div class="vehicle-nav-control">
                <a class="vehicle-nav-scroll" data-direction="up" href="#"><i class="fa fa-chevron-up"></i></a>
                <a class="vehicle-nav-scroll" data-direction="down" href="#"><i class="fa fa-chevron-down"></i></a>
            </div>

        </div>
        <!-- Vehicle nav end -->

        <!-- Vehicle 1 data start -->
        <div class="vehicle-data" id="vehicle-1">
            <div class="col-md-6 wow fadeIn" data-wow-offset="100">
                <div class="vehicle-img">
                    <img class="img-responsive" src="img/vehicle1.jpg" alt="Vehicle">
                </div>
            </div>
            <div class="col-md-3 wow fadeInUp" data-wow-offset="200">
                <div class="vehicle-price">€ 3 600 <span class="info">rent per week</span></div>
                <table class="table vehicle-features">
                    <tr class="tr-warranty">
                        <td>Warranty</td>
                        <td>€ 9 000</td>
                    </tr>
                    <tr>
                        <td>Model</td>
                        <td>SUV</td>
                    </tr>
                    <tr>
                        <td>Doors</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>Seats</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>Luggage</td>
                        <td>4 Suitcases / 3 Bags</td>
                    </tr>
                    <tr>
                        <td>Transmission</td>
                        <td>Automatic</td>
                    </tr>
                    <tr>
                        <td>Available</td>
                        <td>
                            <?php
                                $date = $cars->{1}->date_expired ? strtotime($cars->{1}->date_expired) : null;
                                echo $date && $date > time() ? 'from ' . date("jS F, Y", $date) : 'Yes';
                            ?>
                        </td>
                    </tr>
                </table>
                <a href="#teaser" class="reserve-button scroll-to"><span class="glyphicon glyphicon-calendar"></span> Reserve now</a>
            </div>
        </div>
        <!-- Vehicle 1 data end -->

        <!-- Vehicle 2 data start -->
        <div class="vehicle-data" id="vehicle-2">
            <div class="col-md-6" data-wow-offset="200">
                <div class="vehicle-img">
                    <img class="img-responsive" src="img/vehicle2.jpg" alt="Vehicle">
                </div>
            </div>
            <div class="col-md-3" data-wow-offset="200">
                <div class="vehicle-price">€ 3 600 <span class="info">rent per week</span></div>
                <table class="table vehicle-features">
                    <tr class="tr-warranty">
                        <td>Warranty</td>
                        <td>€ 9 000</td>
                    </tr>
                    <tr>
                        <td>Model</td>
                        <td>Sedan</td>
                    </tr>
                    <tr>
                        <td>Doors</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>Seats</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>Luggage</td>
                        <td>2 Suitcases / 2 Bags</td>
                    </tr>
                    <tr>
                        <td>Transmission</td>
                        <td>Automatic</td>
                    </tr>
                    <tr>
                        <td>Available</td>
                        <td>
                            <?php
                            $date = $cars->{2}->date_expired ? strtotime($cars->{2}->date_expired) : null;
                            echo $date && $date > time() ? 'from ' . date("jS F, Y", $date) : 'Yes';
                            ?>
                        </td>
                    </tr>
                </table>
                <a href="#teaser" class="reserve-button scroll-to"><span class="glyphicon glyphicon-calendar"></span> Reserve now</a>
            </div>
        </div>
        <!-- Vehicle 2 data end -->

        <!-- Vehicle 3 data start -->
        <div class="vehicle-data" id="vehicle-3">
            <div class="col-md-6" data-wow-offset="200">
                <div class="vehicle-img">
                    <img class="img-responsive" src="img/vehicle3.jpg" alt="Vehicle">
                </div>
            </div>
            <div class="col-md-3" data-wow-offset="200">
                <div class="vehicle-price">€ 7 200 <span class="info">rent per week</span></div>
                <table class="table vehicle-features">
                    <tr class="tr-warranty">
                        <td>Warranty</td>
                        <td>€ 18000</td>
                    </tr>

                    <tr>
                        <td>Model</td>
                        <td>SUV</td>
                    </tr>
                    <tr>
                        <td>Doors</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>Seats</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>Luggage</td>
                        <td>4 Suitcases / 4 Bags</td>
                    </tr>
                    <tr>
                        <td>Transmission</td>
                        <td>Automatic</td>
                    </tr>
                    <tr>
                        <td>Available</td>
                        <td>
                            <?php
                            $date = $cars->{3}->date_expired ? strtotime($cars->{3}->date_expired) : null;
                            echo $date && $date > time() ? 'from ' . date("jS F, Y", $date) : 'Yes';
                            ?>
                        </td>
                    </tr>
                </table>
                <a href="#teaser" class="reserve-button scroll-to"><span class="glyphicon glyphicon-calendar"></span> Reserve now</a>
            </div>
        </div>
        <!-- Vehicle 3 data end -->

        <!-- Vehicle 4 data start -->
        <div class="vehicle-data" id="vehicle-4">
            <div class="col-md-6" data-wow-offset="200">
                <div class="vehicle-img">
                    <img class="img-responsive" src="img/vehicle4.jpg" alt="Vehicle">
                </div>
            </div>
            <div class="col-md-3" data-wow-offset="200">
                <div class="vehicle-price">€ 7 200 <span class="info">rent per week</span></div>
                <table class="table vehicle-features">
                    <tr class="tr-warranty">
                        <td>Warranty</td>
                        <td>€ 18 000</td>
                    </tr>
                    <tr>
                        <td>Model</td>
                        <td>Sportcar</td>
                    </tr>
                    <tr>
                        <td>Doors</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Seats</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Luggage</td>
                        <td>1 Suitcases / 1 Bags</td>
                    </tr>
                    <tr>
                        <td>Transmission</td>
                        <td>Automatic</td>
                    </tr>
                    <tr>
                        <td>Available</td>
                        <td>
                            <?php
                            $date = $cars->{4}->date_expired ? strtotime($cars->{4}->date_expired) : null;
                            echo $date && $date > time() ? 'from ' . date("jS F, Y", $date) : 'Yes';
                            ?>
                        </td>
                    </tr>
                </table>
                <a href="#teaser" class="reserve-button scroll-to"><span class="glyphicon glyphicon-calendar"></span> Reserve now</a>
            </div>
        </div>
        <!-- Vehicle 4 data end -->

        <!-- Vehicle 5 data start -->
        <div class="vehicle-data" id="vehicle-5">
            <div class="col-md-6" data-wow-offset="200">
                <div class="vehicle-img">
                    <img class="img-responsive" src="img/vehicle5.jpg" alt="Vehicle">
                </div>
            </div>
            <div class="col-md-3" data-wow-offset="200">
                <div class="vehicle-price">€ 7 200 <span class="info">rent per week</span></div>
                <table class="table vehicle-features">
                    <tr class="tr-warranty">
                        <td>Warranty</td>
                        <td>€ 18 000</td>
                    </tr>
                    <tr>
                        <td>Model</td>
                        <td>Sedan</td>
                    </tr>
                    <tr>
                        <td>Doors</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>Seats</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>Luggage</td>
                        <td>2 Suitcases / 2 Bags</td>
                    </tr>
                    <tr>
                        <td>Transmission</td>
                        <td>Automatic</td>
                    </tr>
                    <tr>
                        <td>Available</td>
                        <td>
                            <?php
                            $date = $cars->{5}->date_expired ? strtotime($cars->{5}->date_expired) : null;
                            echo $date && $date > time() ? 'from ' . date("jS F, Y", $date) : 'Yes';
                            ?>
                        </td>
                    </tr>
                </table>
                <a href="#teaser" class="reserve-button scroll-to"><span class="glyphicon glyphicon-calendar"></span> Reserve now</a>
            </div>
        </div>
        <!-- Vehicle 5 data end -->

        <!-- Vehicle 6 data start -->
        <div class="vehicle-data" id="vehicle-6">
            <div class="col-md-6" data-wow-offset="200">
                <div class="vehicle-img">
                    <img class="img-responsive" src="img/vehicle6.jpg" alt="Vehicle">
                </div>
            </div>
            <div class="col-md-3" data-wow-offset="200">
                <div class="vehicle-price">€ 7 200 <span class="info">rent per week</span></div>
                <table class="table vehicle-features">
                    <tr class="tr-warranty">
                        <td>Warranty</td>
                        <td>€ 18 000</td>
                    </tr>
                    <tr>
                        <td>Model</td>
                        <td>Sedan</td>
                    </tr>
                    <tr>
                        <td>Doors</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Seats</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>Luggage</td>
                        <td>2 Suitcases / 2 Bags</td>
                    </tr>
                    <tr>
                        <td>Transmission</td>
                        <td>Automatic</td>
                    </tr>
                    <tr>
                        <td>Available</td>
                        <td>
                            <?php
                            $date = $cars->{6}->date_expired ? strtotime($cars->{6}->date_expired) : null;
                            echo $date && $date > time() ? 'from ' . date("jS F, Y", $date) : 'Yes';
                            ?>
                        </td>
                    </tr>
                </table>
                <a href="#teaser" class="reserve-button scroll-to"><span class="glyphicon glyphicon-calendar"></span> Reserve now</a>
            </div>
        </div>
        <!-- Vehicle 6 data end -->

        <!-- Vehicle 7 data start -->
        <div class="vehicle-data" id="vehicle-7">
            <div class="col-md-6" data-wow-offset="200">
                <div class="vehicle-img">
                    <img class="img-responsive" src="img/vehicle7.jpg" alt="Vehicle">
                </div>
            </div>
            <div class="col-md-3" data-wow-offset="200">
                <div class="vehicle-price">€ 9 200 <span class="info">rent per week</span></div>
                <table class="table vehicle-features">
                    <tr class="tr-warranty">
                        <td>Warranty</td>
                        <td>€ 23 000</td>
                    </tr>
                    <tr>
                        <td>Model</td>
                        <td>Coupe</td>
                    </tr>
                    <tr>
                        <td>Doors</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Seats</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>Luggage</td>
                        <td>1 Suitcases / 1 Bags</td>
                    </tr>
                    <tr>
                        <td>Transmission</td>
                        <td>Automatic</td>
                    </tr>
                    <tr>
                        <td>Available</td>
                        <td>
                            <?php
                            $date = $cars->{7}->date_expired ? strtotime($cars->{7}->date_expired) : null;
                            echo $date && $date > time() ? 'from ' . date("jS F, Y", $date) : 'Yes';
                            ?>
                        </td>
                    </tr>
                </table>
                <a href="#teaser" class="reserve-button scroll-to"><span class="glyphicon glyphicon-calendar"></span> Reserve now</a>
            </div>
        </div>
        <!-- Vehicle 7 data end -->

        <!-- Vehicle 8 data start -->
        <div class="vehicle-data" id="vehicle-8">
            <div class="col-md-6" data-wow-offset="200">
                <div class="vehicle-img">
                    <img class="img-responsive" src="img/vehicle8.jpg" alt="Vehicle">
                </div>
            </div>
            <div class="col-md-3" data-wow-offset="200">
                <div class="vehicle-price">€ 9 200 <span class="info">rent per week</span></div>
                <table class="table vehicle-features">
                    <tr class="tr-warranty">
                        <td>Warranty</td>
                        <td>€ 23 000</td>
                    </tr>
                    <tr>
                        <td>Model</td>
                        <td>Sedan</td>
                    </tr>
                    <tr>
                        <td>Doors</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>Seats</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>Luggage</td>
                        <td>2 Suitcases / 2 Bags</td>
                    </tr>
                    <tr>
                        <td>Transmission</td>
                        <td>Automatic</td>
                    </tr>
                    <tr>
                        <td>Available</td>
                        <td>
                            <?php
                            $date = $cars->{8}->date_expired ? strtotime($cars->{8}->date_expired) : null;
                            echo $date && $date > time() ? 'from ' . date("jS F, Y", $date) : 'Yes';
                            ?>
                        </td>
                    </tr>
                </table>
                <a href="#teaser" class="reserve-button scroll-to"><span class="glyphicon glyphicon-calendar"></span> Reserve now</a>
            </div>
        </div>
        <!-- Vehicle 8 data end -->

        <!-- Vehicle 9 data start -->
        <div class="vehicle-data" id="vehicle-9">
            <div class="col-md-6" data-wow-offset="200">
                <div class="vehicle-img">
                    <img class="img-responsive" src="img/vehicle9.jpg" alt="Vehicle">
                </div>
            </div>
            <div class="col-md-3" data-wow-offset="200">
                <div class="vehicle-price">€ 7 200 <span class="info">rent per week</span></div>
                <table class="table vehicle-features">
                    <tr class="tr-warranty">
                        <td>Warranty</td>
                        <td>€ 18 000</td>
                    </tr>
                    <tr>
                        <td>Model</td>
                        <td>Sportcar</td>
                    </tr>
                    <tr>
                        <td>Doors</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Seats</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Luggage</td>
                        <td>1 Suitcases / 1 Bags</td>
                    </tr>
                    <tr>
                        <td>Transmission</td>
                        <td>Automatic</td>
                    </tr>
                    <tr>
                        <td>Available</td>
                        <td>
                            <?php
                            $date = $cars->{9}->date_expired ? strtotime($cars->{9}->date_expired) : null;
                            echo $date && $date > time() ? 'from ' . date("jS F, Y", $date) : 'Yes';
                            ?>
                        </td>
                    </tr>
                </table>
                <a href="#teaser" class="reserve-button scroll-to"><span class="glyphicon glyphicon-calendar"></span> Reserve now</a>
            </div>
        </div>
        <!-- Vehicle 9 data end -->

        <!-- Vehicle 10 data start -->
        <div class="vehicle-data" id="vehicle-10">
            <div class="col-md-6" data-wow-offset="200">
                <div class="vehicle-img">
                    <img class="img-responsive" src="img/vehicle10.jpg" alt="Vehicle">
                </div>
            </div>
            <div class="col-md-3" data-wow-offset="200">
                <div class="vehicle-price">€ 7 200 <span class="info">rent per week</span></div>
                <table class="table vehicle-features">
                    <tr class="tr-warranty">
                        <td>Warranty</td>
                        <td>€ 18 000</td>
                    </tr>
                    <tr>
                        <td>Model</td>
                        <td>Sportcar</td>
                    </tr>
                    <tr>
                        <td>Doors</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Seats</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Luggage</td>
                        <td>1 Suitcases / 1 Bags</td>
                    </tr>
                    <tr>
                        <td>Transmission</td>
                        <td>Automatic</td>
                    </tr>
                    <tr>
                        <td>Available</td>
                        <td>
                            <?php
                            $date = $cars->{10}->date_expired ? strtotime($cars->{10}->date_expired) : null;
                            echo $date && $date > time() ? 'from ' . date("jS F, Y", $date) : 'Yes';
                            ?>
                        </td>
                    </tr>
                </table>
                <a href="#teaser" class="reserve-button scroll-to"><span class="glyphicon glyphicon-calendar"></span> Reserve now</a>
            </div>
        </div>
        <!-- Vehicle 10 data end -->

        <!-- Vehicle 11 data start -->
        <div class="vehicle-data" id="vehicle-11">
            <div class="col-md-6" data-wow-offset="200">
                <div class="vehicle-img">
                    <img class="img-responsive" src="img/vehicle11.jpg" alt="Vehicle">
                </div>
            </div>
            <div class="col-md-3" data-wow-offset="200">
                <div class="vehicle-price">€ 10 000 <span class="info">rent per week</span></div>
                <table class="table vehicle-features">
                    <tr class="tr-warranty">
                        <td>Warranty</td>
                        <td>€ 25 000</td>
                    </tr>
                    <tr>
                        <td>Model</td>
                        <td>Sedan</td>
                    </tr>
                    <tr>
                        <td>Doors</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>Seats</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>Luggage</td>
                        <td>2 Suitcases / 2 Bags</td>
                    </tr>
                    <tr>
                        <td>Transmission</td>
                        <td>Automatic</td>
                    </tr>
                    <tr>
                        <td>Available</td>
                        <td>
                            <?php
                            $date = $cars->{11}->date_expired ? strtotime($cars->{11}->date_expired) : null;
                            echo $date && $date > time() ? 'from ' . date("jS F, Y", $date) : 'Yes';
                            ?>
                        </td>
                    </tr>
                </table>
                <a href="#teaser" class="reserve-button scroll-to"><span class="glyphicon glyphicon-calendar"></span> Reserve now</a>
            </div>
        </div>
        <!-- Vehicle 11 data end -->

        <!-- Vehicle 12 data start -->
        <div class="vehicle-data" id="vehicle-12">
            <div class="col-md-6" data-wow-offset="200">
                <div class="vehicle-img">
                    <img class="img-responsive" src="img/vehicle12.jpg" alt="Vehicle">
                </div>
            </div>
            <div class="col-md-3" data-wow-offset="200">
                <div class="vehicle-price">€ 12 000 <span class="info">rent per week</span></div>
                <table class="table vehicle-features">
                    <tr class="tr-warranty">
                        <td>Warranty</td>
                        <td>€ 30 000</td>
                    </tr>
                    <tr>
                        <td>Model</td>
                        <td>Convertible</td>
                    </tr>
                    <tr>
                        <td>Doors</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Seats</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>Luggage</td>
                        <td>2 Suitcases / 2 Bags</td>
                    </tr>
                    <tr>
                        <td>Transmission</td>
                        <td>Automatic</td>
                    </tr>
                    <tr>
                        <td>Available</td>
                        <td>
                            <?php
                            $date = $cars->{12}->date_expired ? strtotime($cars->{12}->date_expired) : null;
                            echo $date && $date > time() ? 'from ' . date("jS F, Y", $date) : 'Yes';
                            ?>
                        </td>
                    </tr>
                </table>
                <a href="#teaser" class="reserve-button scroll-to"><span class="glyphicon glyphicon-calendar"></span> Reserve now</a>
            </div>
        </div>
        <!-- Vehicle 12 data end -->

    </div>
</section>
<!-- Vehicles end -->



<!-- Locations start -->
<section id="locations">
    <div class="container location-select-container wow bounceInDown" data-wow-offset="200">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="location-select">
                    <div class="row">
                        <div class="col-md-6">
                            <h2>Car Rental Locations</h2>
                        </div>
                        <div class="col-md-6">
                            <div class="styled-select-location">
                                <select id="location-map-select"></select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="arrow-down-location">&nbsp;</div>
    </div>
    <div class="map wow bounceInUp" data-wow-offset="100"><!-- map by gmap3 --></div>
</section>
<!-- Locations end -->



<!-- Information start -->
<section id="information" class="container">

    <!-- Single photo start -->
    <div class="row wow fadeInLeft" data-wow-offset="100">
        <div class="col-md-6 col-xs-12 pull-right">
            <img src="img/info-img.jpg" alt="Info Img" class="img-responsive">
        </div>
        <div class="col-md-6 pull-left">
            <h2 class="title">Quality Guaranteed</h2>
            <h3 class="subtitle">Our company offers 24/7 customer service and roadside assistance to make sure you are never alone.</h3>
            <p>Hire or rental - is a unique opportunity to get acquainted with culture, history, traditions and customs of the modern and ancient cities in one trip, to feel their spirit and rhythm, and not to depend on somebody, you make your own route.</p>
        </div>
    </div>
    <!-- Single photo end -->

</section>
<!-- Information end -->



<!-- Contact start -->
<section id="contact" class="container wow bounceInUp" data-wow-offset="50">
    <div class="row">
        <div class="col-md-12">
            <h2>Contact Us</h2>
        </div>
        <div class="col-md-4 col-xs-12 pull-right">
            <h4 class="contact-box-title">Customer Center</h4>
            <div class="contact-box">
                <img src="img/contact-box-img1.png" alt="contact-img">
                <!--<div class="contact-box-name">Sarah Connor</div>-->
                <div class="contact-box-phon"><span class="highlight"></span> &nbsp;</div>
                <div class="contact-box-email"><span class="highlight">Email:</span> vipcarrentalbiz@gmail.com</div>
                <div class="clearfix"></div>
            </div>
            <div class="contact-box-border">&nbsp;</div>
        </div>
        <div class="col-md-8 col-xs-12 pull-left">
            <p class="contact-info">
                You have any questions or need additional information? <br>
                <span class="address"><span class="highlight">Address:</span> Vip Car|Rental / UAE / Dubai / Sheikh Zayed Rd / Al Attar Tower</span>
            </p>
            <form action="#" method="post" id="contact-form" name="contact-form">
                <input type="hidden" name="action" value="send_contact_form"/>

                <div class="alert hidden" id="contact-form-msg"></div>

                <div class="form-group">
                    <input type="text" class="form-control first-name text-field" name="first-name" placeholder="First Name:">
                    <input type="text" class="form-control last-name text-field" name="last-name" placeholder="Last Name:">
                    <div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <input type="tel" class="form-control telephone text-field" name="telephone" placeholder="Telephone:">
                </div>

                <div class="form-group">
                    <input type="email" class="form-control email text-field" name="email" placeholder="Email:">
                </div>

                <div class="form-group">
                    <textarea class="form-control message" name="message" placeholder="Message:"></textarea>
                </div>

                <input type="hidden" name="form" value="contactus">
                <input type="submit" class="btn submit-message" name="submit-message" value="Submit Message">
            </form>
        </div>

    </div>
</section>
<!-- Contact end -->


<a href="#" class="scrollup">ScrollUp</a>


<!-- Footer start -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <ul class="footer-nav">
                    <li><a class="scroll-to" href="#top">Home</a></li>
                    <li><a class="scroll-to" href="#vehicles">Vehicle Models</a></li>
                    <li><a class="scroll-to" href="#locations">Locations</a></li>
                    <li><a class="scroll-to" href="#contact">Contact</a></li>
                </ul>
                <div class="clearfix"></div>
                <p class="copyright">©2016 Car|Rental, All Rights Reserved</p>
            </div>
        </div>
    </div>
</footer>
<!-- Footer end -->



<!-- Checkout Modal Start -->
<div class="modal fade" id="checkoutModal" tabindex="-1" role="dialog" aria-labelledby="checkoutModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="#" method="post" id="checkout-form" name="checkout-form">
                <input type="hidden" name="action" value="send_inquiry_form"/>

                <!-- Modal header start -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Complete reservation</h4>
                </div>
                <!-- Modal header end -->

                <!-- Modal body start -->
                <div class="modal-body">

                    <!-- Checkout Info start -->
                    <div class="checkout-info-box">
                        <h3><i class="fa fa-info-circle"></i> Upon completing this reservation enquiry, you will receive::</h3>
                        <p>Your rental voucher to produce on arrival at the rental desk and a toll-free customer support number.</p>
                    </div>
                    <!-- Checkout Info end -->

                    <!-- Checkout Rental Info start -->
                    <div class="checkout-vehicle-info">
                        <div class="location-date-info">
                            <h3>Location & Date</h3>
                            <div class="info-box">
                                <span class="glyphicon glyphicon-calendar"></span>
                                <h4 class="info-box-title">Pick-Up Time</h4>
                                <p class="info-box-description"><span id="pick-up-date-ph"></span> at <span id="pick-up-time-ph"></span></p>
                                <input type="hidden" name="pick-up" id="pick-up" value="">
                            </div>
                            <div class="info-box">
                                <span class="glyphicon glyphicon-calendar"></span>
                                <h4 class="info-box-title">Drop-Off Time</h4>
                                <p class="info-box-description"><span id="drop-off-date-ph"></span> at <span id="drop-off-time-ph"></span></p>
                                <input type="hidden" name="drop-off" id="drop-off" value="">
                            </div>
                            <div class="info-box">
                                <span class="glyphicon glyphicon-map-marker"></span>
                                <h4 class="info-box-title">Pick-Up Location</h4>
                                <p class="info-box-description" id="pickup-location-ph"></p>
                                <input type="hidden" name="pickup-location" id="pickup-location" value="">
                            </div>
                            <div class="info-box">
                                <span class="glyphicon glyphicon-map-marker"></span>
                                <h4 class="info-box-title">Drop-Off Location</h4>
                                <p class="info-box-description" id="dropoff-location-ph"></p>
                                <input type="hidden" name="dropoff-location" id="dropoff-location" value="">
                            </div>
                        </div>

                        <div class="vehicle-info">
                            <h3>CAR: <span id="selected-car-ph"></span></h3> <a href="#vehicles" class="scroll-to">[ Vehicle Models ]</a>
                            <input type="hidden" name="selected-car" id="selected-car" value="">
                            <div class="clearfix"></div>
                            <div class="vehicle-image">
                                <img class="img-responsive" id="selected-vehicle-image" src="img/vehicle1.jpg" alt="Vehicle">
                            </div>
                            <div class="clearfix"></div>
                            <div id="rent-price">Rent price for 1 week: € <span>3 600</span></div>
                            <div id="warranty-price">Warranty: € <span>9000</span></div>
                        </div>

                        <div class="clearfix"></div>

                    </div>
                    <!-- Checkout Rental Info end -->

                    <hr>

                    <!-- Checkout Personal Info start -->
                    <div class="checkout-personal-info">
                        <div class="alert hidden" id="checkout-form-msg">
                            test
                        </div>
                        <h3>PERSONAL INFORMATION</h3>
                        <div class="form-group left">
                            <label for="first-name">First Name:</label>
                            <input type="text" class="form-control" name="first-name" id="first-name" placeholder="Enter your first name">
                        </div>
                        <div class="form-group right">
                            <label for="last-name">Last Name:</label>
                            <input type="text" class="form-control" name="last-name" id="last-name" placeholder="Enter your last name">
                        </div>
                        <div class="form-group left">
                            <label for="phone-number">Phone Number:</label>
                            <input type="text" class="form-control" name="phone-number" id="phone-number" placeholder="Enter your phone number">
                        </div>
                        <div class="form-group right age">
                            <label for="age">Age:</label>
                            <div class="styled-select-age">
                                <select name="age" id="age">
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                    <option value="32">32</option>
                                    <option value="33">33</option>
                                    <option value="34">34</option>
                                    <option value="35">35</option>
                                    <option value="36">36</option>
                                    <option value="37">37</option>
                                    <option value="38">38</option>
                                    <option value="39">39</option>
                                    <option value="40">40</option>
                                    <option value="41">41</option>
                                    <option value="42">42</option>
                                    <option value="43">43</option>
                                    <option value="44">44</option>
                                    <option value="45">45</option>
                                    <option value="46">46</option>
                                    <option value="47">47</option>
                                    <option value="48">48</option>
                                    <option value="49">49</option>
                                    <option value="50">50</option>
                                    <option value="51">51</option>
                                    <option value="52">52</option>
                                    <option value="53">53</option>
                                    <option value="54">54</option>
                                    <option value="55">55</option>
                                    <option value="56">56</option>
                                    <option value="57">57</option>
                                    <option value="58">58</option>
                                    <option value="59">59</option>
                                    <option value="50">50</option>
                                    <option value="61">61</option>
                                    <option value="62">62</option>
                                    <option value="63">63</option>
                                    <option value="64">64</option>
                                    <option value="65">65</option>
                                    <option value="66">66</option>
                                    <option value="67">67</option>
                                    <option value="68">68</option>
                                    <option value="69">69</option>
                                    <option value="70">70</option>
                                    <option value="71">71</option>
                                    <option value="72">72</option>
                                    <option value="73">73</option>
                                    <option value="74">74</option>
                                    <option value="75">75</option>
                                    <option value="76">76</option>
                                    <option value="77">77</option>
                                    <option value="78">78</option>
                                    <option value="79">79</option>
                                    <option value="80">80</option>
                                    <option value="81">81</option>
                                    <option value="82">82</option>
                                    <option value="83">83</option>
                                    <option value="84">84</option>
                                    <option value="85">85</option>
                                    <option value="86">86</option>
                                    <option value="87">87</option>
                                    <option value="88">88</option>
                                    <option value="89">89</option>
                                    <option value="90">90</option>
                                    <option value="91">91</option>
                                    <option value="92">92</option>
                                    <option value="93">93</option>
                                    <option value="94">94</option>
                                    <option value="95">95</option>
                                    <option value="96">96</option>
                                    <option value="97">97</option>
                                    <option value="98">98</option>
                                    <option value="99">99</option>
                                    <option value="100">100</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group left">
                            <label for="email-address">Email Address:</label>
                            <input type="email" class="form-control" name="email-address" id="email-address" placeholder="Enter your email address">
                        </div>
                        <div class="form-group right">
                            <label for="email-address-confirm">Confirm Email Address:</label>
                            <input type="email" class="form-control" name="email-address-confirm" id="email-address-confirm" placeholder="Confirm your email address">
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!-- Checkout Personal Info end -->

                    <!-- Checkout Address Info start -->
                    <div class="checkout-address-info">
                        <div class="form-group country">
                            <label for="country">Country</label>
                            <div class="styled-select-age">
                                <select name="country" id="country" class="form-control">
                                    <option value="">- Select Country -</option>
                                    <option value="AF">Afghanistan</option>
                                    <option value="AX">Åland Islands</option>
                                    <option value="AL">Albania</option>
                                    <option value="DZ">Algeria</option>
                                    <option value="AS">American Samoa</option>
                                    <option value="AD">Andorra</option>
                                    <option value="AO">Angola</option>
                                    <option value="AI">Anguilla</option>
                                    <option value="AQ">Antarctica</option>
                                    <option value="AG">Antigua and Barbuda</option>
                                    <option value="AR">Argentina</option>
                                    <option value="AM">Armenia</option>
                                    <option value="AW">Aruba</option>
                                    <option value="AU">Australia</option>
                                    <option value="AT">Austria</option>
                                    <option value="AZ">Azerbaijan</option>
                                    <option value="BS">Bahamas</option>
                                    <option value="BH">Bahrain</option>
                                    <option value="BD">Bangladesh</option>
                                    <option value="BB">Barbados</option>
                                    <option value="BY">Belarus</option>
                                    <option value="BE">Belgium</option>
                                    <option value="BZ">Belize</option>
                                    <option value="BJ">Benin</option>
                                    <option value="BM">Bermuda</option>
                                    <option value="BT">Bhutan</option>
                                    <option value="BO">Bolivia, Plurinational State of</option>
                                    <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                    <option value="BA">Bosnia and Herzegovina</option>
                                    <option value="BW">Botswana</option>
                                    <option value="BV">Bouvet Island</option>
                                    <option value="BR">Brazil</option>
                                    <option value="IO">British Indian Ocean Territory</option>
                                    <option value="BN">Brunei Darussalam</option>
                                    <option value="BG">Bulgaria</option>
                                    <option value="BF">Burkina Faso</option>
                                    <option value="BI">Burundi</option>
                                    <option value="KH">Cambodia</option>
                                    <option value="CM">Cameroon</option>
                                    <option value="CA">Canada</option>
                                    <option value="CV">Cape Verde</option>
                                    <option value="KY">Cayman Islands</option>
                                    <option value="CF">Central African Republic</option>
                                    <option value="TD">Chad</option>
                                    <option value="CL">Chile</option>
                                    <option value="CN">China</option>
                                    <option value="CX">Christmas Island</option>
                                    <option value="CC">Cocos (Keeling) Islands</option>
                                    <option value="CO">Colombia</option>
                                    <option value="KM">Comoros</option>
                                    <option value="CG">Congo</option>
                                    <option value="CD">Congo, the Democratic Republic of the</option>
                                    <option value="CK">Cook Islands</option>
                                    <option value="CR">Costa Rica</option>
                                    <option value="CI">Côte d'Ivoire</option>
                                    <option value="HR">Croatia</option>
                                    <option value="CU">Cuba</option>
                                    <option value="CW">Curaçao</option>
                                    <option value="CY">Cyprus</option>
                                    <option value="CZ">Czech Republic</option>
                                    <option value="DK">Denmark</option>
                                    <option value="DJ">Djibouti</option>
                                    <option value="DM">Dominica</option>
                                    <option value="DO">Dominican Republic</option>
                                    <option value="EC">Ecuador</option>
                                    <option value="EG">Egypt</option>
                                    <option value="SV">El Salvador</option>
                                    <option value="GQ">Equatorial Guinea</option>
                                    <option value="ER">Eritrea</option>
                                    <option value="EE">Estonia</option>
                                    <option value="ET">Ethiopia</option>
                                    <option value="FK">Falkland Islands (Malvinas)</option>
                                    <option value="FO">Faroe Islands</option>
                                    <option value="FJ">Fiji</option>
                                    <option value="FI">Finland</option>
                                    <option value="FR">France</option>
                                    <option value="GF">French Guiana</option>
                                    <option value="PF">French Polynesia</option>
                                    <option value="TF">French Southern Territories</option>
                                    <option value="GA">Gabon</option>
                                    <option value="GM">Gambia</option>
                                    <option value="GE">Georgia</option>
                                    <option value="DE">Germany</option>
                                    <option value="GH">Ghana</option>
                                    <option value="GI">Gibraltar</option>
                                    <option value="GR">Greece</option>
                                    <option value="GL">Greenland</option>
                                    <option value="GD">Grenada</option>
                                    <option value="GP">Guadeloupe</option>
                                    <option value="GU">Guam</option>
                                    <option value="GT">Guatemala</option>
                                    <option value="GG">Guernsey</option>
                                    <option value="GN">Guinea</option>
                                    <option value="GW">Guinea-Bissau</option>
                                    <option value="GY">Guyana</option>
                                    <option value="HT">Haiti</option>
                                    <option value="HM">Heard Island and McDonald Islands</option>
                                    <option value="VA">Holy See (Vatican City State)</option>
                                    <option value="HN">Honduras</option>
                                    <option value="HK">Hong Kong</option>
                                    <option value="HU">Hungary</option>
                                    <option value="IS">Iceland</option>
                                    <option value="IN">India</option>
                                    <option value="ID">Indonesia</option>
                                    <option value="IR">Iran, Islamic Republic of</option>
                                    <option value="IQ">Iraq</option>
                                    <option value="IE">Ireland</option>
                                    <option value="IM">Isle of Man</option>
                                    <option value="IL">Israel</option>
                                    <option value="IT">Italy</option>
                                    <option value="JM">Jamaica</option>
                                    <option value="JP">Japan</option>
                                    <option value="JE">Jersey</option>
                                    <option value="JO">Jordan</option>
                                    <option value="KZ">Kazakhstan</option>
                                    <option value="KE">Kenya</option>
                                    <option value="KI">Kiribati</option>
                                    <option value="KP">Korea, Democratic People's Republic of</option>
                                    <option value="KR">Korea, Republic of</option>
                                    <option value="KW">Kuwait</option>
                                    <option value="KG">Kyrgyzstan</option>
                                    <option value="LA">Lao People's Democratic Republic</option>
                                    <option value="LV">Latvia</option>
                                    <option value="LB">Lebanon</option>
                                    <option value="LS">Lesotho</option>
                                    <option value="LR">Liberia</option>
                                    <option value="LY">Libya</option>
                                    <option value="LI">Liechtenstein</option>
                                    <option value="LT">Lithuania</option>
                                    <option value="LU">Luxembourg</option>
                                    <option value="MO">Macao</option>
                                    <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                                    <option value="MG">Madagascar</option>
                                    <option value="MW">Malawi</option>
                                    <option value="MY">Malaysia</option>
                                    <option value="MV">Maldives</option>
                                    <option value="ML">Mali</option>
                                    <option value="MT">Malta</option>
                                    <option value="MH">Marshall Islands</option>
                                    <option value="MQ">Martinique</option>
                                    <option value="MR">Mauritania</option>
                                    <option value="MU">Mauritius</option>
                                    <option value="YT">Mayotte</option>
                                    <option value="MX">Mexico</option>
                                    <option value="FM">Micronesia, Federated States of</option>
                                    <option value="MD">Moldova, Republic of</option>
                                    <option value="MC">Monaco</option>
                                    <option value="MN">Mongolia</option>
                                    <option value="ME">Montenegro</option>
                                    <option value="MS">Montserrat</option>
                                    <option value="MA">Morocco</option>
                                    <option value="MZ">Mozambique</option>
                                    <option value="MM">Myanmar</option>
                                    <option value="NA">Namibia</option>
                                    <option value="NR">Nauru</option>
                                    <option value="NP">Nepal</option>
                                    <option value="NL">Netherlands</option>
                                    <option value="NC">New Caledonia</option>
                                    <option value="NZ">New Zealand</option>
                                    <option value="NI">Nicaragua</option>
                                    <option value="NE">Niger</option>
                                    <option value="NG">Nigeria</option>
                                    <option value="NU">Niue</option>
                                    <option value="NF">Norfolk Island</option>
                                    <option value="MP">Northern Mariana Islands</option>
                                    <option value="NO">Norway</option>
                                    <option value="OM">Oman</option>
                                    <option value="PK">Pakistan</option>
                                    <option value="PW">Palau</option>
                                    <option value="PS">Palestinian Territory, Occupied</option>
                                    <option value="PA">Panama</option>
                                    <option value="PG">Papua New Guinea</option>
                                    <option value="PY">Paraguay</option>
                                    <option value="PE">Peru</option>
                                    <option value="PH">Philippines</option>
                                    <option value="PN">Pitcairn</option>
                                    <option value="PL">Poland</option>
                                    <option value="PT">Portugal</option>
                                    <option value="PR">Puerto Rico</option>
                                    <option value="QA">Qatar</option>
                                    <option value="RE">Réunion</option>
                                    <option value="RO">Romania</option>
                                    <option value="RU">Russian Federation</option>
                                    <option value="RW">Rwanda</option>
                                    <option value="BL">Saint Barthélemy</option>
                                    <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                    <option value="KN">Saint Kitts and Nevis</option>
                                    <option value="LC">Saint Lucia</option>
                                    <option value="MF">Saint Martin (French part)</option>
                                    <option value="PM">Saint Pierre and Miquelon</option>
                                    <option value="VC">Saint Vincent and the Grenadines</option>
                                    <option value="WS">Samoa</option>
                                    <option value="SM">San Marino</option>
                                    <option value="ST">Sao Tome and Principe</option>
                                    <option value="SA">Saudi Arabia</option>
                                    <option value="SN">Senegal</option>
                                    <option value="RS">Serbia</option>
                                    <option value="SC">Seychelles</option>
                                    <option value="SL">Sierra Leone</option>
                                    <option value="SG">Singapore</option>
                                    <option value="SX">Sint Maarten (Dutch part)</option>
                                    <option value="SK">Slovakia</option>
                                    <option value="SI">Slovenia</option>
                                    <option value="SB">Solomon Islands</option>
                                    <option value="SO">Somalia</option>
                                    <option value="ZA">South Africa</option>
                                    <option value="GS">South Georgia and the South Sandwich Islands</option>
                                    <option value="SS">South Sudan</option>
                                    <option value="ES">Spain</option>
                                    <option value="LK">Sri Lanka</option>
                                    <option value="SD">Sudan</option>
                                    <option value="SR">Suriname</option>
                                    <option value="SJ">Svalbard and Jan Mayen</option>
                                    <option value="SZ">Swaziland</option>
                                    <option value="SE">Sweden</option>
                                    <option value="CH">Switzerland</option>
                                    <option value="SY">Syrian Arab Republic</option>
                                    <option value="TW">Taiwan, Province of China</option>
                                    <option value="TJ">Tajikistan</option>
                                    <option value="TZ">Tanzania, United Republic of</option>
                                    <option value="TH">Thailand</option>
                                    <option value="TL">Timor-Leste</option>
                                    <option value="TG">Togo</option>
                                    <option value="TK">Tokelau</option>
                                    <option value="TO">Tonga</option>
                                    <option value="TT">Trinidad and Tobago</option>
                                    <option value="TN">Tunisia</option>
                                    <option value="TR">Turkey</option>
                                    <option value="TM">Turkmenistan</option>
                                    <option value="TC">Turks and Caicos Islands</option>
                                    <option value="TV">Tuvalu</option>
                                    <option value="UG">Uganda</option>
                                    <option value="UA">Ukraine</option>
                                    <option value="AE">United Arab Emirates</option>
                                    <option value="GB">United Kingdom</option>
                                    <option value="US">United States</option>
                                    <option value="UM">United States Minor Outlying Islands</option>
                                    <option value="UY">Uruguay</option>
                                    <option value="UZ">Uzbekistan</option>
                                    <option value="VU">Vanuatu</option>
                                    <option value="VE">Venezuela, Bolivarian Republic of</option>
                                    <option value="VN">Viet Nam</option>
                                    <option value="VG">Virgin Islands, British</option>
                                    <option value="VI">Virgin Islands, U.S.</option>
                                    <option value="WF">Wallis and Futuna</option>
                                    <option value="EH">Western Sahara</option>
                                    <option value="YE">Yemen</option>
                                    <option value="ZM">Zambia</option>
                                    <option value="ZW">Zimbabwe</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group address">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" name="address" id="address" placeholder="Enter your Street an No.">
                        </div>
                        <div class="form-group city">
                            <label for="city">City</label>
                            <input type="text" class="form-control" name="city" id="city" placeholder="Enter your City">
                        </div>
                        <div class="form-group zip-code">
                            <label for="zip-code">Zip Code</label>
                            <input type="text" class="form-control" name="zip-code" id="zip-code" placeholder="Enter your Zip Code">
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!-- Checkout Address Info end -->

                </div>
                <!-- Modal body end -->

                <!-- Modal footer start -->
                <div class="modal-footer">
                    <div class="total-price" id="total-price">Total: € <span>3 600</span></div>
                    <span class="btn-border btn-gray">
                    <button type="button" class="btn btn-default btn-gray" data-dismiss="modal">Cancel</button>
                  </span>
                    <span class="btn-border btn-yellow">
                    <button type="submit" class="btn btn-primary">Pay and Reserve now</button>
                  </span>
                </div>
                <!-- Modal footer end -->

                <input type="hidden" name="orderid">
                <input type="hidden" name="form" value="checkout">
            </form>

            <!-- Payment -->
            <form method="post" action="https://secure.paypage.be/ncol/prod/orderstandard_utf8.asp" id="form_payment" name="form_payment">
                <!-- general parameters: see Form parameters -->
                <input type="hidden" name="PSPID" value="VHTRANS">
                <input type="hidden" name="ORDERID" value="">
                <input type="hidden" name="AMOUNT" value="">
                <input type="hidden" name="CURRENCY" value="EUR">
                <input type="hidden" name="LANGUAGE" value="en_US">

                <!-- check before the payment: see Security: Check before the payment -->
                <input type="hidden" name="SHASIGN" value="">

                <!-- post payment redirection: see Transaction feedback to the customer -->
                <!--<input type="hidden" name="ACCEPTURL" value="http://vipcarrental.biz/?transaction=accept">
                <input type="hidden" name="DECLINEURL" value="http://vipcarrental.biz/?transaction=decline">
                <input type="hidden" name="EXCEPTIONURL" value="http://vipcarrental.biz/?transaction=exception">
                <input type="hidden" name="CANCELURL" value="http://vipcarrental.biz/?transaction=cancel">-->

                <!--<input type="submit" value="Pay" name="submit">-->
            </form>
        </div>
    </div>
</div>
<!-- Checkout Modal end -->


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.0.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->

<script src="js/moment.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-datetimepicker.min.js"></script>
<script src="js/jquery.autocomplete.min.js"></script>
<script src="js/jquery.placeholder.js"></script>
<script src="js/locations-autocomplete.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en&amp;key=AIzaSyAau6IrQRAo4i8uT8aPexzKrVWzJgkwUJk"></script>
<script src="js/gmap3.min.js"></script>
<script src="js/sha1.js"></script>


<!--[if !(gte IE 8)]><!-->
<script src="js/wow.min.js"></script>
<script>
    // Initialize WOW
    //-------------------------------------------------------------
    new WOW({mobile: false}).init();
</script>
<!--<![endif]-->

<script src="js/custom.js"></script>



</body>
</html>