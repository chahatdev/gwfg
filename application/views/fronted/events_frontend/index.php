<?php 
    if(!empty($data)){?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta name="description" content="Evento -Event Html Template">
    <meta name="keywords" content="Evento , Event , Html, Template">
    <meta name="author" content="ColorLib">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- ========== Title ========== -->
    <title> GWFG - <?php echo $data['event_name']; ?></title>
    <!-- ========== Favicon Ico ========== -->
    <!--<link rel="icon" href="fav.ico">-->
    <!-- ========== STYLESHEETS ========== -->
    <!-- Bootstrap CSS -->
    <link href="<?php echo base_url(); ?>assets/front/assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Fonts Icon CSS -->
    <link href="<?php echo base_url(); ?>assets/front/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/front/assets/css/et-line.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/front/assets/css/ionicons.min.css" rel="stylesheet">
    <!-- Carousel CSS -->
    <link href="<?php echo base_url(); ?>assets/front/assets/css/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/front/assets/css/owl.theme.default.min.css" rel="stylesheet">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front/assets/css/animate.min.css">
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assets/front/assets/css/main.css" rel="stylesheet">
</head>
<body>
<div class="loader">
    <div class="loader-outter"></div>
    <div class="loader-inner"></div>
</div>

<!--header start here -->
<header class="header navbar fixed-top navbar-expand-md">
    <div class="container">
        <!-- <a class="navbar-brand logo" href="#">
            <img src="assets/img/logo.png" alt="Evento"/>
        </a> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#headernav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="lnr lnr-text-align-right"></span>
        </button>
        <div class="collapse navbar-collapse flex-sm-row-reverse" id="headernav">
            <ul class=" nav navbar-nav menu">
                <li class="nav-item">
                    <a class="nav-link active" href="events.html">Events</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link " href="#">Speakers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">Contact</a>
                </li> -->
                <li class="search_btn">
                    <a  href="#">
                       <i class="ion-ios-search"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</header>
<!--header end here-->

<!--cover section slider -->
<section id="home" class="home-cover">
    <div class="cover_slider owl-carousel owl-theme">
        <?php foreach (json_decode($data['bannres'], true) as $value) {?>
            
        <div class="cover_item" style="background: url('<?php echo base_url(); ?>assets/dist/img/events/<?php echo $value['banner_image'];?>');">
             <div class="slider_content">
                <div class="slider-content-inner">
                    <div class="container">
                        <div class="slider-content-center">
                            <h2 class="cover-title">
                                <?php echo $value['heading'];?>
                            </h2>
                            <strong class="cover-xl-text"><?php echo $value['subHeading'];?></strong>
                            <p class="cover-date">
                                <?php echo $value['dateLocation'];?>
                            </p>
                            <a href="#b1" class=" btn btn-primary btn-rounded" >
                                Buy Tickets Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
    <div class="cover_nav">
        <ul class="cover_dots">
            <?php $i=0; foreach (json_decode($data['bannres'], true) as $value) {?>
            <li class="<?php if($i==0){?>active<?php }?>" data="<?=$i;?>"><span><?=$i+1;?></span></li>
            <?php $i++;}?>
        </ul>
    </div>
</section>
<!--cover section slider end -->
<!--event countdown -->
<!-- <section class="bg-img pt70 pb70" style="background-image: url('assets/img/bg/bg-img.png');"> -->
    <div class="overlay_dark"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10">
                <h4 class="mb30 text-center color-light">Counter until the big event</h4>
                <div class="countdown"></div>
            </div>
        </div>
    </div>

<!--about the event -->
<section class="pt100">
    <div class="container">
        <div class="section_title">
            <h3 class="title">
                About the event
            </h3>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-12">
                <?php echo $data['aboutText']; ?>
            </div>
        </div>
    </div>
</section>
<!--about the event end -->
<!--Venue section -->

<section class="pt100 pb100" style="padding-top: 0px !important;">
    <div class="container">
<div class="section_title" style="margin-top:100px; !important;" >
    <h3 class="title">Venue</h3>
</div>

        <div class="row justify-content-center mt50">

            <div class="col-md-6 col-12">

                <div class="contact_info">
                    <ul class="icon_list pt50" style="padding-top: 0px !important;">
                        <li>
                            <i class="ion-location"></i>
                            <span><?php echo $data['vLocation'];?>
                            </span>
                        </li>
                        <li>
                            <i class="ion-ios-telephone"></i>
                            <span><?php echo $data['vPhone'];?></span>
                        </li>
                        <li>
                            <i class="ion-email-unread"></i>
                            <span><?php echo $data['vEmail'];?></span>
                        </li>

                        <li>
                            <i class="ion-planet"></i>
                            <span><?php echo $data['vWeb'];?></span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-12">
                 <!--map --><?php $map = explode(',', $data['vMap']);?>
                <div id="map" data-lon="<?php echo $map[0]?>" data-lat="<?php echo $map[1]?>" class="map"></div>
                <!--map end-->
            </div>
            
        </div>

    </div>
</section>
<!--Venue section end -->

<!--speaker section-->
<section class="pb100" >
    <div class="container">
         <div class="section_title mb50">
            <h3 class="title">
               Our Guest speakers
            </h3>
        </div> 
    </div>
    <div class="row justify-content-center no-gutters speaker_carousel owl-carousel">
        <?php foreach (json_decode($data['speakers'], true) as $value) {?>
        <div>
            <div>
                <div>
                    <img src="<?php echo base_url(); ?>assets/dist/img/events/<?php echo $value['gImage'];?>" alt="speaker name">
                    <div>
                        <h5 class="name"><?php echo $value['gName'];?></h5>
                        <p class="name" style="color:black"><?php echo $value['designation'];?></p>
                        
                    </div>
                </div>
            </div>
        </div>
    <?php }?>
    </div>
</section>
<!--speaker section end -->
<!--event calender-->
<section id="b1"  class="pb100" style="padding-bottom: 0px !important";>
    <!-- <div class="container"> -->
        <div class="table-responsive">
            <table class="event_calender table">
                <tbody>
                <tr>
                    <td colspan="5" align="center">
                        <!-- <i class="ion-ios-calendar-outline"></i> -->
                        <div class="section_title mb50">
                            <h3 class="title">Buy Tickets</h3>
                        </div>
                    </td>
                </tr>
                <?php foreach (json_decode($data['ticket'], true) as $value) {?>
                <tr>
                    <td>
                        <span style="color: black"><?php echo $value['ticketType'];?></span>
                    </td>
                    <td class="event_date">
                        14
                        <span>February</span>
                    </td>
                    <td>
                        <div class="event_place">
                            <?php echo $value['description'];?>
                        </div>
                    </td>
                    <td>
                        <a href="#" class="btn btn-primary btn-rounded">$<?php echo $value['price'];?></a>
                    </td>
                    <td class="buy_link">
                        <a href="#">buy now</a>
                    </td>
                </tr>
               <?php }?>
                </tbody>
            </table>
        </div>
    <!-- </div> -->
</section>

<div class="copyright_footer">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-xm-6">
                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | 
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
            <div class="col-12 col-md-6 ">
                <ul class="footer_menu">
                    <li>
                        <a href="#">Events</a>
                    </li>
                   <!--  <li>
                        <a href="#">Speakers</a>
                    </li>
                    <li>
                        <a href="#">Events</a>
                    </li>
                    <li>
                        <a href="#">News</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li> -->
                </ul>
            </div>
        </div>
    </div>
</div>
<!--footer end -->

<!-- jquery -->
<script src="<?php echo base_url(); ?>assets/front/assets/js/jquery.min.js"></script>
<!-- bootstrap -->
<script src="<?php echo base_url(); ?>assets/front/assets/js/popper.js"></script>
<script src="<?php echo base_url(); ?>assets/front/assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/front/assets/js/waypoints.min.js"></script>
<!--slick carousel -->
<script src="<?php echo base_url(); ?>assets/front/assets/js/owl.carousel.min.js"></script>
<!--parallax -->
<script src="<?php echo base_url(); ?>assets/front/assets/js/parallax.min.js"></script>
<!--Counter up -->
<script src="<?php echo base_url(); ?>assets/front/assets/js/jquery.counterup.min.js"></script>
<!--Counter down -->
<script src="<?php echo base_url(); ?>assets/front/assets/js/jquery.countdown.min.js"></script>
<!-- WOW JS -->
<script src="<?php echo base_url(); ?>assets/front/assets/js/wow.min.js"></script>
<!--map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAuahgsm_qfH1F3iywCKzZNMdgsCfnjuUA"></script>
<!-- Custom js -->
<script src="<?php echo base_url(); ?>assets/front/assets/js/main.js"></script>
<script type="text/javascript">
    <?php $countdownDate = date_format(date_create($data['date']), "Y/m/d")?>
    $(".countdown").countdown("", function(event) {
        $(this).html(
            event.strftime('<div>%-w <span>Weeks</span></div>  <div>%-D <span>Days</span></div>  <div>%-H<span>Hours</span></div> <div>%M<span>Minutes</span></div> <div>%S<span>Seconds</span></div>')
        );
    });
</script>
</body>
</html>
<?php  }?>