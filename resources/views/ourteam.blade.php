<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from jituchauhan.com/borrow/borrow/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Dec 2016 09:01:30 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Borrow - is the loan company, Business Website Template.">
    <meta name="keywords" content="Financial Website Template, Bootstrap Template, Loan Product, Personal Loan">
    <title>Borrow - A Loan Company Website Templates</title>
    <!-- Bootstrap -->
    <link href="{!!asset('css/bootstrap.min.css')!!}" rel="stylesheet">
    <link href="{!!asset('css/style.css')!!}" rel="stylesheet">
    <link href="{!!asset('css/font-awesome.min.css')!!}" rel="stylesheet">
    <link href="{!!asset('css/fontello.css')!!}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{!!asset('css/animsition.min.css')!!}">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Merriweather:300,300i,400,400i,700,700i" rel="stylesheet">
    <!-- owl Carousel Css -->
    <link href="{!!asset('css/owl.carousel.css')!!}" rel="stylesheet">
    <link href="{!!asset('css/owl.theme.css')!!}" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="animsition">
    <div class="collapse searchbar" id="searchbar">
        <div class="search-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
            <button class="btn btn-default" type="button">Go!</button>
            </span> </div>
                        <!-- /input-group -->
                    </div>
                    <!-- /.col-lg-6 -->
                </div>
            </div>
        </div>
    </div>
   <div class="top-bar">
        <!-- top-bar -->
        <div class="container">
            <div class="row" >
                <div class="col-md-4 hidden-xs hidden-sm">
                    <p class="mail-text">Welcome To our Certified Translation Agency</p>
                </div>
                <div class="col-md-8 col-sm-12 text-right col-xs-12">
                    <div class="top-nav"> <span class="top-text hidden-xs"><a href="{{url('about/contact-us')}}">View Location</a> </span> <span class="top-text"><a href="{{url('home')}}">English</a></span> <span class="top-text"><a href="{{url('arabic-home')}}">عربي</a></span> </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.top-bar -->
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-12 col-xs-6" style="padding-left: 10px">
                    <!-- logo -->
                    <div class="logo"  >
                        <a href="index.html"><img   src="{!!asset('images/logo2.png')!!}" alt="Borrow - Loan Company Website Template" style="background-color: black" ></a>
                    </div>
                </div>
                <!-- logo -->
                <div class="col-md-9 col-sm-12 col-xs-12" style="width:80%;float: right;margin-top:1px;hight:60px;margin-right: 2px">
                    <div id="navigation" >
                        <!-- navigation start-->
                        <ul >
                            <li class="active"><a href="{{url('home')}}" class="animsition-link">Home</a>
                               <!-- <ul>
                                    <li><a href="index.html" title="Home page 1" class="animsition-link">Home page 1</a></li>
                                    <li><a href="index-1.html" title="Home page 2" class="animsition-link">Home page 2</a></li>
                                    <li><a href="index-2.html" title="Home page 3" class="animsition-link">Home page 3</a></li>
                                </ul>-->
                            </li>
                            <li><a href="" class="animsition-link">About</a>
                                <ul>
                                    <li><a href="{{url('about/who-is-Alboraq')}}" title="Loan Image Listing" class="animsition-link">Who Is Alboraq</a></li>
                                    <li><a href="{{url('about/our-advantages')}}" title="Loan Icon Listing" class="animsition-link">Our Advantages</a></li>
                                    <li><a href="{{url('about/our-team')}}" title="Car Loan" class="animsition-link">Our Team</a></li>
                                   
                                    <li><a href="{{url('about/contact-us')}}" title="Home Loan" class="animsition-link">Contact Us</a></li>
                                    <!-- <li><a href="{{url('about/sit-emap')}}" title="Education Loan" class="animsition-link">Site Map</a></li> -->
                                </ul>
                            </li>
                            <li><a href="" class="animsition-link">Services</a>
                                <ul>
                                    <li><a href="{{url('translation-service/document-proofreading-editing')}}" title="About us" class="animsition-link">Document Proofreading/Editing</a></li>
                                    <li><a href="{{url('translation-service/document-translation')}}" title="Team" class="animsition-link">Document Translation</a></li>

<li><a href="{{url('translation-service/website-translation')}}" title="Team" class="animsition-link">Website Translation</a></li>
                      
                                    <li><a href="{{url('translation-service/simultaneous-interpretation')}}" title="Team" class="animsition-link">Simultaneous Translation</a></li>
                                    <li><a href="{{url('translation-service/document-transcription')}}" title="Team" class="animsition-link">Transcription</a></li>
                                    <li><a href="{{url('translation-service/video-audio-interpretation')}}" title="Team" class="animsition-link">Audio/Video Interpreting</a></li>
                                    <li><a href="{{url('translation-service/localization')}}" title="Team" class="animsition-link">Localization</a></li>
                                    <li><a href="{{url('translation-service/content-development')}}" title="Team" class="animsition-link">Content Development</a></li>
                                </ul>
                            </li>
                            <li><a href="{{url('document-type-we-translate')}}" class="animsition-link">Document  </a>
                               <!-- <ul>
                                    <li><a href="blog-listing.html" title="Blog Listing" class="animsition-link">Blog Listing</a></li>
                                    <li><a href="blog-single.html" title="Blog Single" class="animsition-link">Blog Single</a></li>
                                    <li><a href="blog-two-column.html" title="Blog Two Column" class="animsition-link">Blog Two Column</a></li>
                                    <li><a href="blog-three-column.html" title="Blog Three Column" class="animsition-link">Blog Three Column</a></li>
                                </ul>-->
                            </li>
                            <li><a href="{{url('languages')}}" class="animsition-link">Languages</a>
                               <!-- <ul>
                                    <li><a href="compare-loan.html" title="Compare Loan" class="animsition-link">Compare Loan</a></li>
                                    <li><a href="loan-calculator.html" title="Loan Calculator" class="animsition-link">Loan Calculator</a></li>
                                    <li><a href="landing-page-car-loan.html" title="Loan Calculator" class="animsition-link">Car Loan 
                                     <small class="highlight">Landing Page</small>

                                     </a></li>
                                    <li><a href="landing-page-home-loan.html" title="Loan Calculator" class="animsition-link">Home Loan 
                                     <small class="highlight">Landing Page</small>

                                     </a></li>
                                    <li><a href="loan-calculator.html" title="Loan Calculator" class="animsition-link">Loan Calculator</a></li>
                                    <li><a href="faq.html" title="Faq" class="animsition-link">Faq page</a></li>
                                    <li><a href="testimonial.html" title="Testimonial" class="animsition-link">Testimonial</a></li>
                                    <li><a href="error.html" title="404 Error" class="animsition-link">404 Error</a></li>
                                    <li><a href="gallery-filter-2.html" class="animsition-link">Gallery</a>
                                        <ul>
                                            <li><a href="gallery-filter-2.html" title="Filterable Gallery 2 column" class="animsition-link">Filterable Gallery 2 column</a></li>
                                            <li><a href="gallery-filter-3.html" title="Filterable Gallery 3 column" class="animsition-link">Filterable Gallery 3 column</a></li>
                                            <li><a href="gallery-masonry.html" title="Masonry Gallery" class="animsition-link">Masonry Gallery</a></li>
                                            <li><a href="gallery-zoom.html" title="Zoom Gallery" class="animsition-link">Zoom Gallery</a></li>
                                        </ul>-->
                                    </li>
                                    <li><a href="{{url('online-translation')}}" class="animsition-link">Online Translation</a>
                                        <!--<ul>
                                            <li><a href="shortcodes-tables.html" title="Table" class="animsition-link">Table</a></li>
                                            <li><a href="shortcodes-tabs.html" title="Tab" class="animsition-link">Tab</a></li>
                                            <li><a href="shortcodes-accordion.html" title="Accordion" class="animsition-link">Accordion</a></li>
                                            <li><a href="shortcodes-alert.html" title="Alert" class="animsition-link">Alert</a></li>
                                            <li><a href="shortcodes-button.html" title="Button" class="animsition-link">Button</a></li>
                                            <li><a href="shortcodes-column.html" title="Column" class="animsition-link">Column</a></li>
                                        </ul>-->
                                   
                            </li>
                            <li><a href="{{url('certifications')}}" title="Contact us" class="animsition-link">Certifications</a></li>
                         <li>   <a href="{{url('translator-jobs')}}" title="Personal Loan" class="animsition-link">Join us</a></li>


                             <li><a href="{{url('our-customers')}}" title="Contact us" class="animsition-link">Customers</a></li>
                             





                        </ul>
                    </div>
                    <!-- /.navigation start-->
                </div>
                <!--
                <div class="col-md-1 hidden-sm">
          
                    <div class="search-nav"> <a class="search-btn" role="button" data-toggle="collapse" href="#searchbar" aria-expanded="false"><i class="fa fa-search"></i></a> </div>
                </div>-->
                <!-- /.search start-->
            </div>
        </div>
    </div>
























 <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="{{url('home')}}">Home</a></li>
                            <li class="active">Professional Translator Teams</li>
                        </ol>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="bg-white pinside30">
                        <div class="row">
                            <div class="col-md-4 col-sm-5 col-xs-12">
                                <h1 class="page-title">Professional Translator Teams</h1>
                            </div>
                            <div class="col-md-8 col-sm-7 ol-xs-12">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="btn-action"> <a href="{{url('online-translation')}}" class="btn btn-default">Send Online Translation</a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   <div class="sub-nav" id="sub-nav">
                        <ul class="nav nav-justified">
                            <li><a href="{{url('about\who-is-Alboraq')}}">Who Is Alboraq</a></li>
                            <li><a href="{{url('about\our-team')}}">Our Expert Translators</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class=" ">
        <!-- content start -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wrapper-content bg-white ">
                           <div class="bg-default pinside60 testimonial-section section-space120">
                            <div class=" ">
                                <div class="row">
                                    <div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
                                        <div class="mb60 text-center section-title title-white">
                                            <!-- section title start-->
                                            <h1 class="title-white">Alboraq Supervised By Expert Executive Director </h1>
                                            <p></p> <p></p>
                                            <p>Our executive director has more than 10 years experience in multinational firms and was awarded</p>
                                            <ul style="padding-bottom: 2px">
                                                

                                                <li>Our executive director was awarded the Professional Certificate in Written Translation from the American University in Cairo</li>
                                                <li>Nebosh International General Certificate in Occupational Safety & Health with Distinction from CHSS</li>
                                            </ul>
                                        </div>
                                        <!-- /.section title start-->
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    <div class="section-space120 pinside60 bg-white">
                            <div class="">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="section-title text-center mb60">
                                            <h1>Who Is The Responsible For Your Translation ?</h1>
                                            <h3>our translation team is highly qualified and very experienced</h3>
                                        </div>
                                    </div>
                                </div>
                                    <div class="bg-white section-space80">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8 col-xs-12">
                    <div class="mb100 text-center section-title" style="padding-right: 70px">
                        <!-- section title start-->
                        <h1>our translators have the following academic and professional backgrounds:</h1>
                        <p></p>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
            <div class="row" style="width: 1000px">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="bg-white pinside40 number-block outline mb60 bg-boxshadow">
                        <div class="circle"><span class="number">1</span></div>
                        <h3 class="number-title"></h3>
                        <p>our translators graduate with a university degree in foreign languages</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="bg-white pinside40 number-block outline mb60 bg-boxshadow">
                        <div class="circle"><span class="number">2</span></div>
                        <h3 class="number-title"></h3>
                        <p>Linguists with BA or higher academic degrees in one or more foreign languages</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12" >
                    <div class="bg-white pinside40 number-block outline mb60 bg-boxshadow">
                        <div class="circle"><span class="number">3</span></div>
                        <h3 class="number-title"></h3>
                        <p>Government-accredited translators</p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
                            
                        </div>
                        <div class="about-section pinside40">
                            
                                         <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <h2 class="mb30">You Want To Know who Translate Your Documents !!</h2>
                                    <p class="lead mb30">Our professional translators are native speakers and qualified linguists who make sure that your translations are accurately translated.</p>
                                    <p> </p>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="mb60">
                                        <h2 class="mb30">Specialization Is The Reason of Our Professionalism </h2>
                                        <p class="lead mb30">Each of our professional translators specializes in a chosen language translation service field.  alboraq has teams to handle translations of any type and style.</p>
                                        <p></p>
                                    </div>
                                </div>
                           
                            </div>
                        </div>
                        <div class="section-space120 pinside60 bg-primary">
                            <div class="row" style="padding-left: 220px">
                                <div class="col-md-4 col-sm-4">
                                    <div class="text-center">
                                        <div class="icon"> <i class="icon-4x icon-users icon-default"></i>
                                            <h1 class="big-title">40,000+</h1>
                                            <div class="small-title">Customers Choose Alboraq</div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-4 col-sm-4">
                                    <div class="text-center">
                                        <div class="icon"> <i class="icon-4x icon-dialog icon-default"></i>
                                            <div class="icon icon-1x icon-primary"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                                            <div class="small-title">Customer Rating</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                 
                    <div class="section-space80 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8" style="padding-right:  150px">
                    <div class="mb60 text-center section-title">
                        <!-- section title-->
                        <h1>Quick Services </h1>
                        <p>choose your quick service </p>
                    </div>
                    <!-- /.section title-->
                </div>
            </div>
            <div class="row" style="width: 1000px">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="bg-white bg-boxshadow pinside40 outline text-center mb30">
                        <div class="mb40"><i class="icon-calendar-3 icon-2x icon-default"></i></div>
                        <h2 class="capital-title">Send Online Translation</h2>
                        <p>despite visiting our agency you can send your translation online ,we provide you professional online translation service</p>
                        <a href="{{url('home')}}" class="btn-link">Send Your Translation</a> </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="bg-white bg-boxshadow pinside40 outline text-center mb30">
                        <div class="mb40"><i class="icon-phone-call icon-2x icon-default"></i></div>
                        <h2 class="capital-title">Call Us To Get More Information </h2>
                        <h1 class="text-big">202 22685650 </h1>

                        <p>alboraq@alboraq.com.eg</p>
                        <a href="{{url('about\contact-us')}}" class="btn-link">Contact us</a> </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="bg-white bg-boxshadow pinside40 outline text-center mb30">
                        <div class="mb40"> <i class="icon-users icon-2x icon-default"></i></div>
                        <h2 class="capital-title">Apply Online For Translator Jobs</h2>
                        <p>you need a job from home or full time in Alboraq you can fill our form and be our translator</p>
                        <a href="{{url('translator-jobs')}}" class="btn-link">Apply For Job Online</a> </div>
                </div>
            </div>
        </div>
    </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
  



 <div class="footer section-space80">
        <!-- footer -->
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="footer-logo">
                        <!-- Footer Logo -->
                        <img src="{!!asset('images/logo2.png')!!}" alt="Borrow - Loan Company Website Templates" style="width: 300px;height: 130px"> </div>
                    <!-- /.Footer Logo -->
                </div>
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="col-md-5">
                        <h3 class="newsletter-title"></h3>
                    </div>
                    <div class="col-md-7">
                       
                        <!-- /.Newsletter Form -->
                    </div>
                    <!-- /.col-lg-6 -->
                </div>
            </div>
            <hr class="dark-line">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="widget-text mt40">
                        <!-- widget text -->
                        <p> our translation agency provide highly  document translation that’s both efficient and accurate , we have competitive pricing for all customers ,that will save your money.</p>
                        <div class="row">
                            <div class="col-md-6 col-xs-6">
                                <p class="address-text"><span><i class="icon-placeholder-3 icon-1x"></i> </span>22 khaled abn elwled - sheraton - Apartment 22 -cairo- Egypt</p>
                            </div>
                            <div class="col-md-6 col-xs-6">
                                <p class="call-text"><span><i class="icon-phone-call icon-1x"></i></span>+202 22685650</p>


                                <p class="call-text"><span><i class="icon-phone-call icon-1x"></i></span>+2 010 69977924</p>

                                  <p class="call-text"><span><i class=""></i></span>alboraq@alboraq.com.eg</p>
                            </div>
                        </div>
                    </div>
                    <!-- /.widget text -->
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="widget-footer mt40">
                        <!-- widget footer -->
                        <ul class="listnone">
                           
                        </ul>
                    </div>
                    <!-- /.widget footer -->
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="widget-footer mt40">
                        <!-- widget footer -->
                        <ul class="listnone">
                            
                        </ul>
                    </div>
                    <!-- /.widget footer -->
                </div>
                <div class="col-md-2 col-sm-4 col-xs-12">
                    <div class="widget-social mt40">
                        <!-- widget footer -->
                        <ul class="listnone">
                            <li><a href="https://www.facebook.com/al.boraq.5?ref=br_rs"><i class="fa fa-facebook"></i>Facebook</a></li>
                            <li><a href="https://plus.google.com/u/0/111389319385238976171"><i class="fa fa-google-plus"></i>Google Plus</a></li>
                            <li><a href="https://twitter.com/AlBoraq_ABTS"><i class="fa fa-twitter"></i>Twitter</a></li>
                            <li><a href="https://www.linkedin.com/in/al-boraq-translation-services-1a235658"><i class="fa fa-linkedin"></i>Linked In</a></li>
                        </ul>
                    </div>
                    <!-- /.widget footer -->
                </div>
            </div>
        </div>
    </div>
    <!-- /.footer -->
    <div class="tiny-footer">
        <!-- tiny footer -->
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <p>© Copyright 2016 | Alboraq for translation</p>
                </div>
                <div class="col-md-6 col-sm-6 text-right col-xs-6">
                    <p></p>
                </div>
            </div>
        </div>
    </div>
    <!-- /.tiny footer -->
    <!-- back to top icon -->
    <a href="#0" class="cd-top" title="Go to top">Top</a>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{!!asset('js/jquery.min.js')!!}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{!!asset('js/bootstrap.min.js')!!}"></script>
    <script type="text/javascript" src="{!!asset('js/menumaker.js')!!}"></script>
    <!-- animsition -->
    <script type="text/javascript" src="{!!asset('js/animsition.js')!!}"></script>
    <script type="text/javascript" src="{!!asset('js/animsition-script.js')!!}"></script>
    <!-- sticky header -->
    <script type="text/javascript" src="{!!asset('js/jquery.sticky.js')!!}"></script>
    <script type="text/javascript" src="{!!asset('js/sticky-header.js')!!}"></script>
    <!-- slider script -->
    <script type="text/javascript" src="{!!asset('js/owl.carousel.min.js')!!}"></script>
    <script type="text/javascript" src="{!!asset('js/slider-carousel.js')!!}"></script>
    <script type="text/javascript" src="{!!asset('js/service-carousel.js')!!}"></script>
    <!-- Back to top script -->
    <script src="{!!asset('js/back-to-top.js')!!}" type="text/javascript"></script>



    
</body>


<!-- Mirrored from jituchauhan.com/borrow/borrow/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Dec 2016 09:03:30 GMT -->
</html>
