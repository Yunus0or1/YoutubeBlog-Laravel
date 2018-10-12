<!doctype html>
<html>
<head>



        <title>বাংলা সাইন্স ব্লগ</title>
		
		
		<link href="{{asset('css/slick.css')}}" rel="stylesheet">
		<link href="{{asset('css/slick-theme.css')}}" rel="stylesheet">  
		<link rel="stylesheet" type="text/css" href="{{asset('css/homepage.css')}}">




        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
        <link rel="stylesheet" href="{{asset('css/bootsnav.css')}}">
		<link rel="stylesheet" href="{{asset('css/custom.css')}}" />
		<style>
		    
		
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
		

@if($sub != '[]')	
	</br>
	<h12 style="font-size:30px;padding:20px">নাম  : {{$sub[0]->writer}}</h12>
	</br>
	</br>
	<h12 style="font-size:30px;padding:20px">পেশা  : {{$sub[0]->job}}</h12>
	</br>
	</br>
	<h12 style="font-size:30px;padding:20px">ইমেইল : {{$sub[0]->email}}</h12>
	</br>
	</br>
	<h12 style="font-size:30px;padding:20px;text-decoration:underline">আপনার প্রকাশিত লেখাসমুহ : </h12>
	
	
	</br>
	</br>
	
	@foreach($sub as $info)
	<h12 style="font-size:30px;padding:20px">
	<a href="{{ url('profilewriting/'.$info->title) }}">{{$info->title}}</a> </h12>	
	</br>
	</br>
	@endforeach
	


@else 
<h1><center>আপনার প্রকাশিত লেখা এখনো নেই । </center></h1>



@endif
	
</div>

</div>

</div>



</body>


</html>