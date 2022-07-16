<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>News</title>
	<meta name="description" content="">  
	<meta name="author" content="">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="{{asset('css/base.css')}}">
   <link rel="stylesheet" href="{{asset('css/vendor.css')}}">  
   <link rel="stylesheet" href="{{asset('css/main.css')}}">
        

   <!-- script
   ================================================== -->
	<script src="{{asset('js/modernizr.js')}}"></script>
	<script src="{{asset('js/pace.min.js')}}"></script>

   <!-- favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">

</head>

<body id="top">

	<!-- header 
   ================================================== -->
   <header class="short-header">   

   	<div class="gradient-block"></div>	

   	<div class="row header-content">

   		<div class="logo">
            <a href="index.html">Logo nè</a>
        </div>

	   	<nav id="main-nav-wrap">
				<ul class="main-navigation sf-menu">
					<li class="current"><a href="{{route('index')}}" title="">Home</a></li>									
				</ul>
			</nav> <!-- end main-nav-wrap -->
   	</div>     		
   	
   </header> <!-- end header -->
   <!-- masonry
   ================================================== -->
   <section id="bricks">

   	<div class="row masonry">

   		<!-- brick-wrapper -->
         <div class="bricks-wrapper">

         	<div class="grid-sizer"></div>
            @if ($posts->isEmpty())
                <div class="alert alert-success text-center">
                    Hiện chưa có tin tức nào được publish, xin liên hệ quản trị viên..
                </div>
            @endif

            @foreach ($posts as $key => $value)
                    <article class="brick entry format-standard animate-this">

                    <div class="entry-thumb">
                        <a href="{{route('site.show', $value->id)}}" class="thumb-link">
                            <img src="{{$value->image}}" alt="building">             
                        </a>
                    </div>

                    <div class="entry-text">
                        <div class="entry-header">
                            <h1 class="entry-title"><a href="{{route('site.show', $value->id)}}">{{$value->title}}</a></h1>
                        </div>
                            <div class="entry-excerpt">
                                {{$value->summary}}
                            </div>
                    </div>

                </article> 
            @endforeach


   <!-- end article -->

         </div> <!-- end brick-wrapper --> 

   	</div> <!-- end row -->

   	<div class="row">
        <div class="card-footer clearfix">
            <div class="pagination pagination-sm m-0 float-right">
              {{ $posts->links() }}
            </div>
        </div>
   	</div>

   </section> <!-- end bricks -->

   
   <!-- footer
   ================================================== -->
   <footer>

   	<div class="footer-main">

   		<div class="row">  

	      	<div class="col-four tab-full mob-full footer-info">            

	            <h4>About Our Site</h4>

	               <p>
		          	Lorem ipsum Ut velit dolor Ut labore id fugiat in ut fugiat nostrud qui in dolore commodo eu magna Duis cillum dolor officia esse mollit proident Excepteur exercitation nulla. Lorem ipsum In reprehenderit commodo aliqua irure labore.
		          	</p>

		      </div> <!-- end footer-info -->

	      	<div class="col-two tab-1-3 mob-1-2 site-links">

	      		<h4>Site Links</h4>

	      		<ul>
	      			<li><a href="#">About Us</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">FAQ</a></li>
						<li><a href="#">Terms</a></li>
						<li><a href="#">Privacy Policy</a></li>
					</ul>

	      	</div> <!-- end site-links -->  

	      	<div class="col-two tab-1-3 mob-1-2 social-links">

	      		<h4>Social</h4>

	      		<ul>
	      			<li><a href="#">Twitter</a></li>
						<li><a href="#">Facebook</a></li>
						<li><a href="#">Dribbble</a></li>
						<li><a href="#">Google+</a></li>
						<li><a href="#">Instagram</a></li>
					</ul>
	      	           	
	      	</div> <!-- end social links --> 

	      	<div class="col-four tab-1-3 mob-full footer-subscribe">

	      		<h4>Subscribe</h4>

	      		<p>Keep yourself updated. Subscribe to our newsletter.</p>

	      		<div class="subscribe-form">
	      	
	      			<form id="mc-form" class="group" novalidate="true">

							<input type="email" value="" name="dEmail" class="email" id="mc-email" placeholder="Type &amp; press enter" required=""> 
	   		
			   			<input type="submit" name="subscribe" >
		   	
		   				<label for="mc-email" class="subscribe-message"></label>
			
						</form>

	      		</div>	      		
	      	           	
	      	</div> <!-- end subscribe -->         

	      </div> <!-- end row -->

   	</div> <!-- end footer-main -->

      <div class="footer-bottom">
      	<div class="row">

      		<div class="col-twelve">
	      		<div class="copyright">
		         	<span>© Copyright Abstract 2016</span> 
		         	<span>Design by <a href="http://www.styleshout.com/">styleshout</a></span>		         	
		         </div>

		         <div id="go-top">
		            <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon icon-arrow-up"></i></a>
		         </div>         
	      	</div>

      	</div> 
      </div> <!-- end footer-bottom -->  

   </footer>  

   <div id="preloader"> 
    	<div id="loader"></div>
   </div> 

   <!-- Java Script
   ================================================== --> 
   <script src="{{asset('js/jquery-2.1.3.min.js')}}"></script>
   <script src="{{asset('js/plugins.js')}}"></script>
   <script src="{{asset('js/jquery.appear.js')}}"></script>
   <script src="{{asset('js/main.js')}}"></script>

</body>

</html>