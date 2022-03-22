<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>United Studio</title>
<meta name="generator" content="WYSIWYG Web Builder 17 Trial Version - https://www.wysiwygwebbuilder.com">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/corporate.css" rel="stylesheet">
<link href="css/United-Animation-Studio.css" rel="stylesheet">
<script src="jquery-1.12.4.min.js"></script>
<script src="jquery.ui.effect.min.js"></script>
<script src="popper.min.js"></script>
<script src="util.min.js"></script>
<script src="collapse.min.js"></script>
<script src="dropdown.min.js"></script>
<script src="wwb17.min.js"></script>
<script>   
   $(document).ready(function()
   {
      $('#wb_service-text').addClass('visibility-hidden');
      $('#wb_about-text').addClass('visibility-hidden');
      $('#wb_portfolio-image1').addClass('visibility-hidden');
      $('#wb_portfolio-image2').addClass('visibility-hidden');
      $('#wb_contact-text').addClass('visibility-hidden');
      $('#wb_Card4').addClass('visibility-hidden');
      $('#wb_Card5').addClass('visibility-hidden');
      $('#wb_Card6').addClass('visibility-hidden');
      $('#wb_JavaScript1').addClass('visibility-hidden');
      $('#wb_location-text').addClass('visibility-hidden');
      $('#wb_location-icon1').addClass('visibility-hidden');
      $('#wb_location-icon2').addClass('visibility-hidden');
      $('#wb_location-icon3').addClass('visibility-hidden');
      $('#wb_location-icon4').addClass('visibility-hidden');
      $('#wb_location-icon5').addClass('visibility-hidden');
      $("a[href*='#header']").click(function(event)
      {
         event.preventDefault();
         $('html, body').stop().animate({ scrollTop: $('#wb_header').offset().top }, 600, 'easeOutCirc');
      });
      $('#ThemeableMenu1 .dropdown-toggle').dropdown({popperConfig:{placement:'bottom-start',modifiers:{computeStyle:{gpuAcceleration:false}}}});
      $(document).on('click','.ThemeableMenu1-navbar-collapse.show',function(e)
      {
         if ($(e.target).is('a') && ($(e.target).attr('class') != 'dropdown-toggle')) 
         {
            $(this).collapse('hide');
         }
      });
      $("a[href*='#home']").click(function(event)
      {
         event.preventDefault();
         $('html, body').stop().animate({ scrollTop: $('#wb_home').offset().top-88 }, 600, 'easeOutCirc');
      });
      $("a[href*='#features']").click(function(event)
      {
         event.preventDefault();
         $('html, body').stop().animate({ scrollTop: $('#wb_features').offset().top-88 }, 600, 'easeOutCirc');
      });
      $("a[href*='#services']").click(function(event)
      {
         event.preventDefault();
         $('html, body').stop().animate({ scrollTop: $('#wb_services').offset().top-88 }, 600, 'easeOutCirc');
      });
      function onScrollservices()
      {
         var $obj = $("#wb_services");
         if (!$obj.hasClass("in-viewport") && $obj.inViewPort(false))
         {
            $obj.addClass("in-viewport");
            AnimateCss('wb_service-text', 'animate-fade-in-up', 0, 1000);
         }
      }
      onScrollservices();
      $(window).scroll(function(event)
      {
         onScrollservices();
      });
      $("a[href*='#services2']").click(function(event)
      {
         event.preventDefault();
         $('html, body').stop().animate({ scrollTop: $('#wb_services2').offset().top-88 }, 600, 'easeOutCirc');
      });
      $("a[href*='#about']").click(function(event)
      {
         event.preventDefault();
         $('html, body').stop().animate({ scrollTop: $('#wb_about').offset().top-88 }, 600, 'easeOutCirc');
      });
      function onScrollabout()
      {
         var $obj = $("#wb_about");
         if (!$obj.hasClass("in-viewport") && $obj.inViewPort(false))
         {
            $obj.addClass("in-viewport");
            AnimateCss('wb_about-text', 'animate-fade-in-up', 0, 1000);
         }
      }
      onScrollabout();
      $(window).scroll(function(event)
      {
         onScrollabout();
      });
      $("a[href*='#portfolio']").click(function(event)
      {
         event.preventDefault();
         $('html, body').stop().animate({ scrollTop: $('#wb_portfolio').offset().top-88 }, 600, 'easeOutCirc');
      });
      function onScrollportfolio()
      {
         var $obj = $("#wb_portfolio");
         if (!$obj.hasClass("in-viewport") && $obj.inViewPort(false))
         {
            $obj.addClass("in-viewport");
            AnimateCss('wb_portfolio-image1', 'animate-fade-in-up', 0, 1000);
            AnimateCss('wb_portfolio-image2', 'animate-fade-in-up', 500, 1000);
         }
      }
      onScrollportfolio();
      $(window).scroll(function(event)
      {
         onScrollportfolio();
      });
      $("a[href*='#contact']").click(function(event)
      {
         event.preventDefault();
         $('html, body').stop().animate({ scrollTop: $('#wb_contact').offset().top }, 600, 'easeOutCirc');
      });
      function onScrollcontact()
      {
         var $obj = $("#wb_contact");
         if (!$obj.hasClass("in-viewport") && $obj.inViewPort(false))
         {
            $obj.addClass("in-viewport");
            AnimateCss('wb_contact-text', 'animate-fade-in-up', 0, 1000);
         }
      }
      onScrollcontact();
      $(window).scroll(function(event)
      {
         onScrollcontact();
      });
      $("a[href*='#location']").click(function(event)
      {
         event.preventDefault();
         $('html, body').stop().animate({ scrollTop: $('#wb_location').offset().top-88 }, 600, 'easeOutCirc');
      });
      function onScrollservices_bookmark2()
      {
         var $obj = $("#wb_services-bookmark2");
         if (!$obj.hasClass("in-viewport") && $obj.inViewPort(false))
         {
            $obj.addClass("in-viewport");
            AnimateCss('wb_Card4', 'animate-fade-in-up', 0, 1000);
            AnimateCss('wb_Card5', 'animate-fade-in-up', 500, 1000);
            AnimateCss('wb_Card6', 'animate-fade-in-up', 1000, 1000);
         }
      }
      onScrollservices_bookmark2();
      $(window).scroll(function(event)
      {
         onScrollservices_bookmark2();
      });
      function onScrolllocation_bookmark()
      {
         var $obj = $("#wb_location-bookmark");
         if (!$obj.hasClass("in-viewport") && $obj.inViewPort(false))
         {
            $obj.addClass("in-viewport");
            AnimateCss('wb_JavaScript1', 'animate-fade-in', 0, 1500);
            AnimateCss('wb_location-text', 'animate-fade-in', 0, 1500);
            AnimateCss('wb_location-icon1', 'animate-fade-in', 0, 1500);
            AnimateCss('wb_location-icon2', 'animate-fade-in', 500, 1500);
            AnimateCss('wb_location-icon3', 'animate-fade-in', 1000, 1500);
            AnimateCss('wb_location-icon4', 'animate-fade-in', 1500, 1500);
            AnimateCss('wb_location-icon5', 'animate-fade-in', 2000, 1500);
         }
      }
      onScrolllocation_bookmark();
      $(window).scroll(function(event)
      {
         onScrolllocation_bookmark();
      });
      var iOS = !!navigator.platform && /iPad|iPhone|iPod/.test(navigator.platform);
      if (iOS)
      {
         $('#wb_home,#wb_services,#wb_about,#wb_contact').css('background-attachment', 'scroll');
      }
   });
</script>
<script src="United-Animation-Studio.js"></script>
</head>
<body>
   <div id="container">
      <a href="https://www.wysiwygwebbuilder.com" target="_blank"><img src="images/builtwithwwb17.png" alt="WYSIWYG Web Builder" style="position:absolute;left:441px;top:4072px;margin:0;border-width:0;z-index:250" width="16" height="16"></a>
   </div>
   <div id="wb_header">
      <div id="header">
         <div class="row">
            <div class="col-1">
               <div id="wb_Breadcrumb1" style="display:inline-block;width:100%;z-index:0;vertical-align:top;">
                  <ul id="Breadcrumb1">
                     <li><a href="">United Animations</a></li>
                  </ul>
               </div>
            </div>
            <div class="col-2">
               <div id="wb_ThemeableMenu1" style="display:inline-block;width:100%;z-index:1;">
                  <div id="ThemeableMenu1" class="ThemeableMenu1" style="width:100%;height:auto !important;">
                     <div class="container">
                        <div class="navbar-header">
                           <button title="Hamburger Menu" type="button" class="navbar-toggle" data-toggle="collapse" data-target=".ThemeableMenu1-navbar-collapse">
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                           </button>
                        </div>
                        <div class="ThemeableMenu1-navbar-collapse collapse">
                           <ul class="nav navbar-nav">
                              <li class="nav-item">
                                 <a href="./United-Animation-Studio.html#home" class="nav-link">Home</a>
                              </li>
                              <li class="nav-item">
                                 <a href="./United-Animation-Studio.html#portfolio" class="nav-link">Portfolio</a>
                              </li>
                              <li class="nav-item">
                                 <a href="./contact.php" target="_blank" class="nav-link">Contact</a>
                              </li>
                              <li class="nav-item">
                                 <a href="./Donations.html" target="_blank" class="nav-link"><i class="fa fa-gratipay"></i>Donations</a>
                              </li>
                              <li class="nav-item">
                                 <a href="./Videos.html" target="_blank" class="nav-link"><i class="fa fa-youtube-play"></i>Videos</a>
                              </li>
                              <li class="nav-item">
                                 <a href="" class="nav-link"><i class="fa fa-deviantart"></i>Animation Images</a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div id="wb_home">
      <div id="home-overlay"></div>
      <div id="home">
         <div class="col-1">
            <div id="wb_Text1">
               <span style="color:#FFFFFF;font-family:Arial;font-size:32px;line-height:36px;"><strong>Welcome to United Animations Studio</strong></span><span style="color:#FFFFFF;font-family:Arial;font-size:13px;line-height:16px;"><br></span><span style="color:#FFFFFF;font-family:Arial;font-size:15px;line-height:18px;"><br></span><span style="color:#FFFFFF;font-family:Arial;font-size:16px;line-height:18px;">Here you will get all our animation updates also you will recieve new content on our Youtube Channel</span>
            </div>
            <div id="wb_Shape1" style="display:inline-block;width:116px;height:41px;opacity:0.80;z-index:3;position:relative;">
               <a href="https://www.youtube.com/channel/UCVd27QSUaLOB3V4RMrjPQxw"><div id="Shape1"><div id="Shape1_text"><div><span style="color:#FFFFFF;font-family:Arial;font-size:15px;">Our Channel</span></div></div></div></a>
            </div>
         </div>
      </div>
   </div>
   <div id="wb_features">
      <div id="features">
         <div class="row">
            <div class="col-1">
               <div class="col-1-padding">
                  <div id="wb_FontAwesomeIcon4" style="display:inline-block;width:88px;height:73px;text-align:center;z-index:4;">
                     <div id="FontAwesomeIcon4"><i class="fa fa-map-signs"></i></div>
                  </div>
                  <div id="wb_Heading1" style="display:inline-block;width:100%;z-index:5;">
                     <h2 id="Heading1">PROTECT</h2>
                  </div>
                  <div id="wb_Text2">
                     <span style="color:#BABABA;">Stand the ground</span>
                  </div>
               </div>
            </div>
            <div class="col-2">
               <div class="col-2-padding">
                  <div id="wb_FontAwesomeIcon1" style="display:inline-block;width:88px;height:73px;text-align:center;z-index:7;">
                     <div id="FontAwesomeIcon1"><i class="fa fa-gears"></i></div>
                  </div>
                  <div id="wb_Heading2" style="display:inline-block;width:100%;z-index:8;">
                     <h2 id="Heading2">REST</h2>
                  </div>
                  <div id="wb_Text3">
                     <span style="color:#BABABA;">Take things easy</span>
                  </div>
               </div>
            </div>
            <div class="col-3">
               <div class="col-3-padding">
                  <div id="wb_FontAwesomeIcon2" style="display:inline-block;width:88px;height:73px;text-align:center;z-index:10;">
                     <div id="FontAwesomeIcon2"><i class="fa fa-puzzle-piece"></i></div>
                  </div>
                  <div id="wb_Heading3" style="display:inline-block;width:100%;z-index:11;">
                     <h2 id="Heading3">SOLVE</h2>
                  </div>
                  <div id="wb_Text4">
                     <span style="color:#BABABA;">Solve the issues</span>
                  </div>
               </div>
            </div>
            <div class="col-4">
               <div class="col-4-padding">
                  <div id="wb_FontAwesomeIcon3" style="display:inline-block;width:88px;height:73px;text-align:center;z-index:13;">
                     <div id="FontAwesomeIcon3"><i class="fa fa-trophy"></i></div>
                  </div>
                  <div id="wb_Heading4" style="display:inline-block;width:100%;z-index:14;">
                     <h2 id="Heading4">PUSH FORWARD</h2>
                  </div>
                  <div id="wb_Text5">
                     <span style="color:#BABABA;">Push towards the goals</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div id="wb_services">
      <div id="services-overlay"></div>
      <div id="services">
         <div class="row">
            <div class="col-1">
               <div id="wb_service-text">
                  <span style="color:#FFFFFF;font-family:Arial;font-size:32px;line-height:36px;"><strong>What do we do?</strong></span><span style="color:#FFFFFF;font-family:Arial;font-size:13px;line-height:16px;"><br></span><span style="color:#FFFFFF;font-family:Arial;font-size:15px;line-height:18px;"><br></span><span style="color:#FFFFFF;font-family:Arial;font-size:16px;line-height:18px;">We do video editting and we also work our story animations of real life events that occurred.</span>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div id="wb_services2">
      <div id="services2">
         <div class="row">
            <div class="col-1">
               <div class="col-1-padding">
                  <div id="wb_Card4" style="display:flex;width:100%;text-align:center;z-index:17;" class="card">
                     <div id="Card4-card-body">
                        <div id="Card4-card-item0"><i class="fa fa-coffee"></i></div>
                        <div id="Card4-card-item1">Drink coffee</div>
                        <div id="Card4-card-item2">We drink coffee as humans for that zap and boast😂😂</div>
                     </div>
                  </div>
                  <div id="wb_services-bookmark2" style="display:inline-block;width:100%;z-index:18;">
                     <div id="services-bookmark2" style="visibility:hidden;"></div>
                  </div>
               </div>
            </div>
            <div class="col-2">
               <div class="col-2-padding">
                  <div id="wb_Card5" style="display:flex;width:100%;text-align:center;z-index:19;" class="card">
                     <div id="Card5-card-body">
                        <div id="Card5-card-item0"><i class="fa fa-picture-o"></i></div>
                        <div id="Card5-card-item1">Thumbnail Specialist</div>
                        <div id="Card5-card-item2">Let's put a smile on that face</div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-3">
               <div class="col-3-padding">
                  <div id="wb_Card6" style="display:flex;width:100%;text-align:center;z-index:20;" class="card">
                     <div id="Card6-card-body">
                        <div id="Card6-card-item0"><i class="fa fa-handshake-o"></i></div>
                        <div id="Card6-card-item1">Produce great content for our viewers</div>
                        <div id="Card6-card-item2">With great imagination comes great production</div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div id="wb_about">
      <div id="about-overlay"></div>
      <div id="about">
         <div class="row">
            <div class="col-1">
               <div id="wb_about-text">
                  <span style="color:#FFFFFF;font-family:Arial;font-size:32px;line-height:36px;"><strong>About</strong></span><span style="color:#FFFFFF;font-family:Arial;font-size:13px;line-height:16px;"><br></span><span style="color:#FFFFFF;font-family:Arial;font-size:15px;line-height:18px;"><br></span><span style="color:#FFFFFF;font-family:Arial;font-size:16px;line-height:18px;">We are Animators and Youtubers we are United Animations Studio</span>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div id="wb_portfolio">
      <div id="portfolio">
         <div class="row">
            <div class="col-1">
               <div class="col-1-padding">
                  <div id="wb_portfolio-image1" style="display:inline-block;width:100%;height:auto;z-index:22;">
                     <a href="./Donations.html"><img src="images/final edit crop 2.jpg" id="portfolio-image1" alt="" width="485" height="495"></a>
                  </div>
               </div>
            </div>
            <div class="col-2">
               <div class="col-2-padding">
                  <div id="wb_portfolio-image2" style="display:inline-block;width:100%;height:auto;z-index:23;">
                     <img src="images/UNITED (3).png" id="portfolio-image2" alt="" width="485" height="485">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div id="wb_contact">
      <div id="contact-overlay"></div>
      <div id="contact">
         <div class="row">
            <div class="col-1">
               <div id="wb_contact-text">
                  <span style="color:#FFFFFF;font-family:Arial;font-size:32px;line-height:36px;"><strong>Contact Us<br></strong></span><span style="color:#FFFFFF;font-family:Arial;font-size:13px;line-height:18px;"><br></span><span style="color:#FFFFFF;font-family:Arial;font-size:15px;line-height:18px;">Get in touch!</span>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div id="wb_location">
      <div id="location">
         <div class="row">
            <div class="col-1">
               <div class="col-1-padding">
                  <div id="wb_location-icon1" style="display:inline-block;width:38px;height:48px;text-align:center;z-index:25;">
                     <a href="./United-Animation-Studio.html"><div id="location-icon1"><i class="fa fa-facebook"></i></div></a>
                  </div>
                  <div id="wb_location-icon2" style="display:inline-block;width:38px;height:48px;text-align:center;z-index:26;">
                     <a href="./United-Animation-Studio.html"><div id="location-icon2"><i class="fa fa-twitter"></i></div></a>
                  </div>
                  <div id="wb_location-icon3" style="display:inline-block;width:38px;height:48px;text-align:center;z-index:27;">
                     <a href="./United-Animation-Studio.html"><div id="location-icon3"><i class="fa fa-pinterest"></i></div></a>
                  </div>
                  <div id="wb_location-icon4" style="display:inline-block;width:38px;height:48px;text-align:center;z-index:28;">
                     <a href="./United-Animation-Studio.html"><div id="location-icon4"><i class="fa fa-instagram"></i></div></a>
                  </div>
                  <div id="wb_location-icon5" style="display:inline-block;width:38px;height:48px;text-align:center;z-index:29;">
                     <a href="./United-Animation-Studio.html"><div id="location-icon5"><i class="fa fa-youtube"></i></div></a>
                  </div>
                  <div id="wb_location-bookmark" style="display:inline-block;width:100%;z-index:30;">
                     <div id="location-bookmark" style="visibility:hidden;"></div>
                  </div>
                  <div id="wb_location-text">
                     <span style="color:#FFFFFF;"><strong>Email<br></strong>unitedvidsic@gmail.com<br><br><br><strong>Social Media<br></strong><br></span>
                  </div>
               </div>
            </div>
            <div class="col-2">
               <div class="col-2-padding">
                  <div id="wb_JavaScript1" style="display:inline-block;width:100%;height:457px;z-index:32;">
                     <div id="GoogleMaps" style="width:100%;height:100%;"></div>
                     <script src="https://maps.google.com/maps/api/js?key=YOUR_KEY"></script>
                     <script>                     
                     var map;
                     var marker;
                     var geocoder;
                     function GoogleMapInit(id, latitude, longitude, address) 
                     {    
                        var latlng = new google.maps.LatLng(latitude, longitude);
                        var latlngMarker = new google.maps.LatLng(latitude, longitude);
                        var mapOptions = 
                        {        
                           center: latlng,        
                           mapTypeId: google.maps.MapTypeId.ROADMAP,
                           mapTypeControl: false,        
                           scrollwheel: true,
                           streetViewControl: false,        
                           zoom: 8,
                           zoomControl: true,        
                           zoomControlOptions: { style: google.maps.ZoomControlStyle.SMALL }
                        }
                        element = document.getElementById(id);
                        map = new google.maps.Map(element, mapOptions);   
                        marker = new google.maps.Marker({ draggable:true, map: map, position: latlngMarker});   
                        geocoder = new google.maps.Geocoder();
                        geocoder.geocode({'address': address}, function(results, status) 
                        {
                           if (status == google.maps.GeocoderStatus.OK) 
                           {
                              map.setCenter(results[0].geometry.location);
                              var marker = new google.maps.Marker(
                              {
                                 map: map, 
                                 position: results[0].geometry.location
                              });
                           } 
                           else 
                           {
                             //    alert("Geocode was not successful: " + status);
                           }
                        });
                     }
                     GoogleMapInit('GoogleMaps', 40.7127837, -74.00594130000002, 'New+York,NY');
                     </script>

                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div id="wb_footer">
      <div id="footer">
         <div class="row">
            <div class="col-1">
               <div id="wb_Text16">
                  <span style="color:#FFFFFF;">Copyright © 2022 United Animation Studio</span>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div id="StickyLayer" style="position:fixed;text-align:left;left:auto;right:25px;top:auto;bottom:25px;width:50px;height:50px;z-index:36;">
      <div id="wb_up-arrow" style="position:absolute;left:9px;top:8px;width:24px;height:24px;text-align:center;z-index:34;">
         <a href="./United-Animation-Studio.html#home"><div id="up-arrow"><i class="fa fa-angle-up"></i></div></a></div>
   </div>
</body>
</html>
