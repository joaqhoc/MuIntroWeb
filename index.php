<?php 
include ('proteccion.php');
include ('configuracion.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <title><?php echo "$Titulo"; ?></title>
    <meta name="keywords" content="" />
	<meta name="description" content="" />

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/templatemo_style.css" rel="stylesheet">
   	<link rel="stylesheet" href="css/templatemo_misc.css">

    <link rel="stylesheet" href="css/nivo-slider.css">
    <link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" /> 
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,600' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/JavaScript" src="js/slimbox2.js"></script> 

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/ddsmoothmenu.js"></script>





  </head>
  <body>
    <header>
    <div id="templatemo_home">
    	<div class="templatemo_top">
      <div class="container templatemo_container">
        <div class="row">
          <div class="col-sm-3 col-md-3">
            <div class="logo">
              <a href="#"><img src="images/templatemo_logo.png" alt="smoothy html5 template"></a>
            </div>
          </div>
 
          </div>
        </div>
      </div>
    </div>
    </div>
    <div class="clear"></div>

      	<div  id="slider"  class="nivoSlider templatemo_slider">
        	<a href="#"><img src="images/slider/img_1_blank.jpg" alt="slide 1" /></a>           	
			<a href="#"><img src="images/slider/img_2_blank.jpg" alt="slide 2" /></a>  
            <a href="#"><img src="images/slider/img_3_blank.jpg" alt="slide 3" /></a> 	        	
	
    	</div>
             <div class="templatemo_caption">
                    <div class="templatemo_slidetitle">Intro Web</div>
		   <p>Configurado y adaptado por SkarYx</p>
                    <div class="clear"></div>
              </div>  
  </header>
  	<div class="templatemo_lightgrey_about" id="templatemo_about">
	<div class="container">
    	<div class="col-xs-6 col-sm-6 col-md-3 templatemo_col12">
        	<div class="item project-post">
						<div class="templatemo_about_box">
                        	<div class="square_coner">
                     		   <span class="texts-a"><img src="images/logo.png" /></img></span>
                      	 </div>
                     	   <?php echo "$NombreServer1"; ?>
			</div>
						<div class="col-xs-12 col-sm-6 col-md-3 hover-box" >
							<div class="inner-hover-box">								
								<p>
								Ver: <?php echo "$ServerVer1"; ?> <br />
								Exp: <?php echo "$ServerExp1"; ?> <br />
								Drop: <?php echo "$ServerDrop1"; ?><br /> 
								Estado: <?php echo !empty($server1) ? "<b><font color=green>En Linea:</font></b>" : "<b><font color=red>Fuera de Linea</font></b>"; ?><br />
								Bless Bug: <?php echo "$BugBlessServer1"; ?><br />
								Reset Level: <?php echo "$ResetLvlServer1"; ?> <br />
								Admin's: <?php echo "$AdminServer1"; ?><br />  
								</p>
							</div>
						</div>
					</div> 	
        </div>
        <div class="col-xs-6 col-sm-6 col-md-3 templatemo_col12">
        	<div class="item project-post">
						<div class="templatemo_about_box">
                        	<div class="square_coner">
                     		   <span class="texts-a"><img src="images/logo.png" /></img></span>
                      	 </div>
                     	   <?php echo "$NombreServer2"; ?>
			</div>
						<div class="col-xs-6 col-sm-6 col-md-3 hover-box" >
							<div class="inner-hover-box">								
								<p>
								Ver: <?php echo "$ServerVer2"; ?> <br />
								Exp: <?php echo "$ServerExp2"; ?> <br />
								Drop: <?php echo "$ServerDrop2"; ?><br /> 
								Estado: <?php echo !empty($server2) ? "<b><font color=green>En Linea:</font></b>" : "<b><font color=red>Fuera de Linea</font></b>"; ?><br />
								Bless Bug: <?php echo "$BugBlessServer2"; ?><br />
								Reset Level: <?php echo "$ResetLvlServer2"; ?> <br />
								Admin's: <?php echo "$AdminServer2"; ?><br />  
								</p>
							</div>
						</div>
					</div> 	
        </div>
        <div class="col-xs-6 col-sm-6 col-md-3 templatemo_col12 templatemo_margintop10">
        	<div class="item project-post">
						<div class="templatemo_about_box">
                        	<div class="square_coner">
                     		   <span class="texts-a"><img src="images/logo.png" /></img></span>
                      	 </div>
                     	   <?php echo "$NombreServer3"; ?>
			</div>
						<div class="col-xs-6 col-sm-6 col-md-3 hover-box" >
							<div class="inner-hover-box">								
								<p>
								Ver: <?php echo "$ServerVer3"; ?> <br />
								Exp: <?php echo "$ServerExp3"; ?> <br />
								Drop: <?php echo "$ServerDrop3"; ?><br /> 
								Estado: <?php echo !empty($server3) ? "<b><font color=green>En Linea:</font></b>" : "<b><font color=red>Fuera de Linea</font></b>"; ?><br /> 
								Bless Bug: <?php echo "$BugBlessServer3"; ?><br />
								Reset Level: <?php echo "$ResetLvlServer3"; ?> <br />
								Admin's: <?php echo "$AdminServer3"; ?><br />  
								</p>
							</div>
						</div>
					</div> 	
        </div>
        <div class="col-xs-6 col-sm-6 col-md-3 templatemo_col12 templatemo_margintop10">
        	<div class="item project-post">
						<div class="templatemo_about_box">
                        	<div class="square_coner">
                     		   <span class="texts-a"><img src="images/logo.png" /></img></span>
                      	 </div>
                     	   <?php echo "$NombreServer4"; ?>
			</div>
						<div class="col-xs-6 col-sm-6 col-md-3 hover-box" >
							<div class="inner-hover-box">								
								<p>
								Ver: <?php echo "$ServerVer4"; ?> <br />
								Exp: <?php echo "$ServerExp4"; ?> <br />
								Drop: <?php echo "$ServerDrop4"; ?><br /> 
								Estado: <?php echo !empty($server4) ? "<b><font color=green>En Linea:</font></b>" : "<b><font color=red>Fuera de Linea</font></b>"; ?><br />
								Bless Bug: <?php echo "$BugBlessServer4"; ?><br />
								Reset Level: <?php echo "$ResetLvlServer4"; ?> <br />
								Admin's: <?php echo "$AdminServer4"; ?><br />  
								</p>
							</div>
						</div>
					</div> 	
        </div>
    </div>
    </div>

    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- <script src="https://code.jquery.com/jquery.js"></script> -->
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nivo.slider.pack.js"></script>
    <script>$.fn.cycle.defaults.autoSelector = '.slideshow';</script>
    <script type="text/javascript">
      $(function(){
          var default_view = 'grid';
          if($.cookie('view') !== 'undefined'){
              $.cookie('view', default_view, { expires: 7, path: '/' });
          } 
          function get_grid(){
              $('.list').removeClass('list-active');
              $('.grid').addClass('grid-active');
              $('.prod-cnt').animate({opacity:0},function(){
                  $('.prod-cnt').removeClass('dbox-list');
                  $('.prod-cnt').addClass('dbox');
                  $('.prod-cnt').stop().animate({opacity:1});
              });
          }
          function get_list(){
              $('.grid').removeClass('grid-active');
              $('.list').addClass('list-active');
              $('.prod-cnt').animate({opacity:0},function(){
                  $('.prod-cnt').removeClass('dbox');
                  $('.prod-cnt').addClass('dbox-list');
                  $('.prod-cnt').stop().animate({opacity:1});
              });
          }
          if($.cookie('view') == 'list'){ 
              $('.grid').removeClass('grid-active');
              $('.list').addClass('list-active');
              $('.prod-cnt').animate({opacity:0});
              $('.prod-cnt').removeClass('dbox');
              $('.prod-cnt').addClass('dbox-list');
              $('.prod-cnt').stop().animate({opacity:1}); 
          } 

          if($.cookie('view') == 'grid'){ 
              $('.list').removeClass('list-active');
              $('.grid').addClass('grid-active');
              $('.prod-cnt').animate({opacity:0});
                  $('.prod-cnt').removeClass('dboxlist');
                  $('.prod-cnt').addClass('dbox');
                  $('.prod-cnt').stop().animate({opacity:1});
          }

          $('#list').click(function(){   
              $.cookie('view', 'list'); 
              get_list()
          });

          $('#grid').click(function(){ 
              $.cookie('view', 'grid'); 
              get_grid();
          });

          /* filter */
          $('.menuSwitch ul li').click(function(){
              var CategoryID = $(this).attr('category');
              $('.menuSwitch ul li').removeClass('cat-active');
              $(this).addClass('cat-active');
              
              $('.prod-cnt').each(function(){
                  if(($(this).hasClass(CategoryID)) == false){
                     $(this).css({'display':'none'});
                  };
              });
              $('.'+CategoryID).fadeIn(); 
              
          });
      });
    </script>
	<script src="js/jquery.singlePageNav.js"></script>
	
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider({
          prevText: '',
          nextText: '',
          controlNav: false,
        });
    });
    </script>
    <script>
      $(document).ready(function(){

        // hide #back-top first
        $("#back-top").hide();
        
        // fade in #back-top
        $(function () {
          $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
              $('#back-top').fadeIn();
            } else {
              $('#back-top').fadeOut();
            }
          });

          // scroll body to 0px on click
          $('#back-top a').click(function () {
            $('body,html').animate({
              scrollTop: 0
            }, 800);
            return false;
          });
        });

      });
      </script>
      <script type="text/javascript">
      <!--
          function toggle_visibility(id) {
             var e = document.getElementById(id);
             if(e.style.display == 'block'){
                e.style.display = 'none';
                $('#togg').text('show footer');
            }
             else {
                e.style.display = 'block';
                $('#togg').text('hide footer');
            }
          }
      //-->
      </script>
      
      <script type="text/javascript">
      $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
              $('html,body').animate({
                scrollTop: target.offset().top
              }, 1000);
              return false;
            }
          }
        });
      });
      </script>
      <script src="js/stickUp.min.js" type="text/javascript"></script>
      <script type="text/javascript">
        //initiating jQuery
        jQuery(function($) {
          $(document).ready( function() {
            //enabling stickUp on the '.navbar-wrapper' class
            $('.mWrapper').stickUp();
          });
        });
      </script>
      <script>
     $('a.menu').click(function(){
    $('a.menu').removeClass("active");
    $(this).addClass("active");
	});
      </script>
      
      <script> <!-- scroll to specific id when click on menu -->
      	 // Cache selectors
var lastId,
    topMenu = $("#top-menu"),
    topMenuHeight = topMenu.outerHeight()+15,
    // All list items
    menuItems = topMenu.find("a"),
    // Anchors corresponding to menu items
    scrollItems = menuItems.map(function(){
      var item = $($(this).attr("href"));
      if (item.length) { return item; }
    });

// Bind click handler to menu items
// so we can get a fancy scroll animation
menuItems.click(function(e){
  var href = $(this).attr("href"),
      offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+1;
  $('html, body').stop().animate({ 
      scrollTop: offsetTop
  }, 300);
  e.preventDefault();
});

// Bind to scroll
$(window).scroll(function(){
   // Get container scroll position
   var fromTop = $(this).scrollTop()+topMenuHeight;
   
   // Get id of current scroll item
   var cur = scrollItems.map(function(){
     if ($(this).offset().top < fromTop)
       return this;
   });
   // Get the id of the current element
   cur = cur[cur.length-1];
   var id = cur && cur.length ? cur[0].id : "";
   
   if (lastId !== id) {
       lastId = id;
       // Set/remove active class
       menuItems
         .parent().removeClass("active")
         .end().filter("[href=#"+id+"]").parent().addClass("active");
   }                   
});
      </script>
</body>
</html>