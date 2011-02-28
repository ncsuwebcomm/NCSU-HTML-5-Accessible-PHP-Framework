<!doctype html>
<html lang="en"> 
   
<head>
<?php include('../core/config.php'); ?>
<!-- TemplateBeginEditable name="doctitle" -->
<title>Page Title -<?php echo $config['siteName']; ?>:: North Carolina State University</title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<!-- TemplateEndEditable -->
<link type="text/plain" rel="author" href="../humans.txt" />
<meta charset="utf-8" />
<meta name="robots" content="index,follow" />
<meta name="revisit-after" content="7 days" />
<!-- Core CSS -->
<link href="../core/css/reset.css" media="screen" rel="stylesheet" type="text/css" />
<link href="http://www.ncsu.edu/brand/utility-bar/iframe/css/utility_bar_iframe.css" rel="stylesheet" media="screen" type="text/css" />
<link href="../core/css/global.css" media="screen" rel="stylesheet" type="text/css" />
<link href="../core/css/print.css" media="print" rel="stylesheet" type="text/css" />
<!-- TemplateBeginIf cond="feature_player" --><link href="core/css/player.css" media="screen" rel="stylesheet" type="text/css"/><!-- TemplateEndIf -->  

<!-- Horiz Nav CSS -->
<link href="../core/css/nav.css" media="screen" rel="stylesheet" type="text/css" />

<!-- Local CSS -->
<link href="../css/styles.css" media="screen" rel="stylesheet" type="text/css" />

<!-- Core JS -->
<script src="../core/js/global.js" type="text/javascript"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<!-- TemplateBeginIf cond="feature_player" --><script src="core/js/ariaTabs3b.js"></script><!-- TemplateEndIf -->  

<!-- Local JS -->
<script src="../js/script.js" type="text/javascript"></script>
<!--[if IE]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- TemplateBeginEditable name="head_open" --><!-- TemplateEndEditable -->

<!-- TemplateParam name="breadcrumbs" type="boolean" value="true" --><!-- TemplateParam name="page_title" type="boolean" value="true" --><!-- TemplateParam name="feature_player" type="boolean" value="false" -->
</head>

<body id="two_col_horiz" class="<?php echo bodyAttributes(); ?>">

<noscript>
<div id="js-alert">
Javascript is disabled. The styling of this page may not render properly in certain browsers. Keyboard navigation of menus may be limited.
</div>
</noscript>

<div class="screen-reader-text hidden-anchors">
    <h6><a href="#content" title="Skip to main content">Skip To Main Content</a></h6>
</div>

<div id="wrapper">

      <?php include('../includes/brand_bar.php'); ?>
        
        <div id="middle">
        
          <?php include('../includes/header.php'); ?>
		  <?php include('../includes/nav-horiz.php'); ?>


                <section id="content" role="main">
                <h6 class="screen-reader-text">Content</h6>

                
                <!-- TemplateBeginIf cond="breadcrumbs" -->  
                <div id="crumbs">
                <h6 class="screen-reader-text">Breadcrumbs</h6>
                
                <ul>
                <li><a href="<?php echo ROOT_URL; ?>">Home</a></li>
<!-- TemplateBeginRepeat name="breadcrumb-repeat" -->		  
				  <li>&gt; 
				  <!-- TemplateBeginEditable name="breadcrumb" -->  
                  <a href="#" title="">Breadcrumb</a>				  <!-- TemplateEndEditable -->				  <!-- TemplateEndRepeat -->	
                  </li>                 
                  </ul>
                  </div><!-- div#crumbs -->	
	  			   <!-- TemplateEndIf -->  
                    
                    
                    
                    
                    <!-- TemplateBeginIf cond="feature_player" -->
					<!-- TemplateBeginEditable name="feature_player" -->
                    
                                    	<div id="player">
                    
                        <div id="tabs">
                                                     
                            <div id="tabs-1">
                            	<div class="copy">
                                    <h3 id="first">First Tab's Main Heading</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ultrices blandit leo eu congue. Nulla facilisi. Nunc non purus metus, non mattis sem. Aliquam erat volutpat. Maecenas eget commodo erat. Nam nec lectus diam. </p>
                                    <p class="read_more"><a href="#">&raquo; Learn More</a></p>
                                </div>
                                <div class="media">
                                    <img class="feature_image" src="http://www.ncsu.edu/features/wp/wp-content/uploads/2010/09/wsj420236.jpg" width="420" height="236" />   
                                </div>                                
                            </div>
                            
                            <div id="tabs-2">
                            	<div class="copy">                                
                                    <h3 id="second">Second Tab's Main Heading</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non purus metus, non mattis sem. Aliquam erat volutpat. Maecenas eget commodo erat. Nam nec lectus diam. Mauris ultrices blandit leo eu congue. Nulla facilisi.</p>
                                    <p class="read_more"><a href="#">&raquo; Learn More</a></p>
								</div>     
                                <div class="media">
                                	<img class="feature_image" src="http://www.ncsu.edu/features/wp/wp-content/uploads/2010/10/flower.jpg" width="420" height="236" />   
                            	</div>                               
                            </div>
                            
                            <div id="tabs-3">
                            	<div class="copy">                                                            
                                    <h3 id="third">Third Tab's Main Heading</h3>
                                    <p>Saturday's Live it Up! festivities celebrated improvements to Hillsborough Street, an overhaul that has made it easier than ever for students, faculty and staff to become more active in the local community. </p>
                                    <p class="read_more"><a href="#">&raquo; Learn More</a></p>
                                </div>    
                                <div class="media">
                                    <img class="feature_image" src="http://www.ncsu.edu/features/wp/wp-content/uploads/2010/09/memory420.jpg" width="420" height="236" />   
                                </div>                                
                            </div>
                            
                            <div class="clear"></div>

                            <ul>
                                <li class="tab"><a href="#tabs-1">1</a></li>
                                <li class="tab"><a href="#tabs-2">2</a></li>
                                <li class="tab"><a href="#tabs-3">3</a></li>
                                <li class="notab"><a href="two_col_horiz-example.php">more stories</a></li>
                            </ul>

                        </div> <!-- end #tabs -->
                        
                        
                        
                    </div> <!-- end player -->
					
					<!-- TemplateEndEditable -->
					<!-- TemplateEndIf -->                  
					
					
					<!-- TemplateBeginIf cond="page_title" --><h1>
					<!-- TemplateBeginEditable name="page_title-editable" -->             
                    Heading 1					<!-- TemplateEndEditable --></h1>
					<!-- TemplateEndIf -->




                    <!-- TemplateBeginEditable name="content" -->
                   
      				<p>Buscipit et bibendum ac, pharetra in purus. Nunc nec neque et turpis adipiscing auctor. Vestibulum ullamcorper, mauris sodales tempus vehicula, tellus libero aliquam massa, in ornare nibh leo non est. Sed tortor ipsum, aliquam eu aliquam eu, facilisis ut erat. Sed malesuada enim ac sem condimentum sit amet iaculis magna posuere. Aliquam varius justo sit amet turpis ultricies pretium. Curabitur porttitor lobortis molestie. Nunc nec egestas diam.                    </p>
                    <h2>Heading 2</h2>
                    <figure class="width265 alignright"><a href="#"><img src="../images/245photo.jpg" alt="Lorem ipsum" height="311" width="245" /></a><figcaption>Benny and Kellie Suggs, with their son, Nicholas.</figcaption></figure>
             <p>
                        Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.                    </p>
                    <h3>Heading 3</h3>
                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.                    </p>
                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.                    </p>
                    <h4>Heading 4</h4>
                    <ul>
                    	<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam feugiat tortor nec lectus pretium quis convallis magna congue. Suspendisse hendrerit consequat felis, sed malesuada leo venenatis id. Nulla sagittis erat ac mi tincidunt porta ut adipiscing odio. Donec id eros eget neque ullamcorper blandit vitae in est.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam feugiat tortor nec lectus pretium quis convallis magna congue. Suspendisse hendrerit consequat felis, sed malesuada leo venenatis id. Nulla sagittis erat ac mi tincidunt porta ut adipiscing odio. Donec id eros eget neque ullamcorper blandit vitae in est.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam feugiat tortor nec lectus pretium quis convallis magna congue. Suspendisse hendrerit consequat felis, sed malesuada leo venenatis id. Nulla sagittis erat ac mi tincidunt porta ut adipiscing odio. Donec id eros eget neque ullamcorper blandit vitae in est.</li>
                    </ul>
                    <h5>Heading 5</h5>
                    <blockquote>
                      <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p></blockquote>
					<!-- TemplateEndEditable -->                </section>
                <!-- end #content -->
          
      <aside id="sidebar" role="complementary">
                <?php include('../includes/sidebar.php'); ?>
                
                <h6 class="screen-reader-text">Sidebar</h6>
                
               		<!-- TemplateBeginEditable name="sidebar" -->
               		<div class="brite">
           				<h3>Facebook</h3>
                        <p><a href="#" src=""><img class="thumb_copy" src="../images/facebook.jpg" alt="" height="50" width="50" /></a>Check out Bioprocessing Science on Facebook. Get the latest updates from Bioprocessing Science by becoming their friend on Facebook.</p>    
   				  	  <p class="read_more"><a href="#">Read more</a></p>
            		</div>
                    
                    <div class="brite">
           				<h3>Twitter</h3>
                        <p><a href="#"><img class="thumb_copy" src="../images/twitter.jpg" alt="" height="50" width="50" /></a>Check out Bioprocessing Science on Twitter. Get the latest updates from Bioprocessing Science by following them on Twitter.</p>    
       				  	<p class="read_more"><a href="#">Read more</a></p>
            		</div>
                    <!-- TemplateEndEditable -->                </aside> 
                            
          <div class="clear"></div>
			
		  <?php include('../includes/footer.php'); ?>
        </div> <!-- end #middle -->
    </div> 
<!-- end #wrapper -->

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <script type="text/javascript" src="../core/js/superfish.js"></script>
   
    <script type="text/javascript">
       jQuery(function(){
        jQuery('ul.sf-menu').superfish();
       });
	 </script>


</body>
</html>
