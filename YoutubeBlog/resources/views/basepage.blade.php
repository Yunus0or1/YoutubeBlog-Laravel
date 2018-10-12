<!doctype html>
<html>
<head>



    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>বাংলা সাইন্স ব্লগ</title>
		
		
		<link href="{{asset('css/slick.css')}}" rel="stylesheet">
		<link href="{{asset('css/slick-theme.css')}}" rel="stylesheet">  
		<link rel="stylesheet" type="text/css" href="{{asset('css/homepage.css')}}">




        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
        <link rel="stylesheet" href="{{asset('css/bootsnav.css')}}">
		<link rel="stylesheet" href="{{asset('css/custom.css')}}" />
		<style>
		    
			#title h3 {
	margin : 1px ;
	color :Green ;
	text-align :center ;
	margin-bottom : 20px;
	font-family : 'b',Serif;
	font-size : 50px;
						
	
		}
		
		#topic h2{
			
			margin-left:10px;
			text-decoration:underline ;
		}
		#topic h3 {
			
			font-size: 30px;
			margin: 12px;
			text-decoration:underline ;
		}
		
		#topic h5{
			font-size:20px;
			margin-left:10px;
			padding:3px;
			font-family : 'b',Serif;
			
		}
			
		
		</style>
		
   




</head>


<body>


<div id="background">




		<!-- Header -->
        <header>
            <!-- Top Navbar -->
            

            <!-- Navbar -->
            <nav class="navbar bootsnav">



                <div class="container">
                    
                    <!-- Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <h31 style="padding:20px; color:green;" >বাংলা সাইন্স ব্লগ</h31>
                    </div>
                    <!-- Navigation -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav menu">
						
                            <li><a href="{{url('/')}}">নীড়</a></li> 
							
                            <li><a href="{{url('after/physics')}}">পদার্থ</a></li>
							
							
                            <li><a href="{{url('after/chemestry')}}">রসায়ন</a></li>
							
                            <li><a href="{{url('after/math')}}">গনিত</a></li>
							
							<li><a href="{{url('after/modernphysics')}}">আধুনিক বিজ্ঞান</a></li>
							
							<li><a href="{{url('after/space')}}">মহাকাশ বিজ্ঞান</a>
							
                            <li><a href="{{url('after/biology')}}">জীব বিজ্ঞান</a></li>
							
							<li><a href="{{url('after/modernphysics')}}">বাংলাদেশের রত্ন বিজ্ঞানীরা</a>
							
							<li><a href="{{url('/login')}}">ব্লগ লিখুন</a>
							
							<li><a href="{{url('/profileofwriters')}}">আমাদের লেখকগণ</a></li>
                        </ul>
                    </div>
                </div>   
            </nav><!-- Navbar end -->
        </header><!-- Header end -->


<div id="container">

<div class="content">
		

@if($articles != '[]')		
		
		<div id="title">
		
 
		
		</div>
		

		
	<div id="topic">	
	
		<h2> আরটিকল&nbsp:</h2>
		
		@foreach($articles as $info)
		
		<h5 ><a href="{{ url('after/'.$sub.'/'.$info->title.'/'.$info->writer) }}" >{{$info->title}}</a>

		 &nbsp&nbsp লেখক ->&nbsp{{$info->writer}}</h5> </br>
		
		@endforeach
		
	
	
	</div>
	
	</br>
	</br>
	</br>
	
	<div id="video">
	
	
	<h3 style="font-size: 30px;margin: 12px;text-decoration:underline ;"> ভিডিও&nbsp:</h3>
	
	@foreach($articles as $info)
	
	<iframe style="margin-left:20px;padding:10px"
	width="480" height="300" src="http://www.youtube.com/embed/{{$info->videokey}}" frameborder="0" allowfullscreen></iframe>
		
	@endforeach
	
	</div>
	
	</br>
	</br>
	</br>
	

	
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>

@else 

		<h1><center>এ বিভাগে এখনো লেখা প্রকাশিত হয় নি। আশা করি, আপনিই হবেন এই বিভাগের প্রথম লেখক। </center></h1>
		
@endif		

</div>

</div>



</body>


</html>