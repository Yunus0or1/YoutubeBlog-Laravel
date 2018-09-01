<!doctype html>
<html>
<head>



        <title>বাংলা সাইন্স ব্লগ</title>
		
		
		<link href="{{asset('css/slick.css')}}" rel="stylesheet">
		<link href="{{asset('css/slick-theme.css')}}" rel="stylesheet">  
		<link rel="stylesheet" type="text/css" href="{{asset('css/article.css')}}">




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
		

		
		
		<div id="title">
		
		<h1 style="font-size:40px"><I>{{$articleDetails[0]->title}}</I></h1>
		
		<p>{{$articleDetails[0]->details}} </p>
		
		<h33 style="font-size:20px;margin-left:10px"><B> লেখক   : {{$articleDetails[0]->writer}}</B></h33></br>
		<h33 style="font-size:20px;margin-left:10px"><B>{{$articleDetails[0]->job}}</B></h33></br>
		
		<h2>সম্পূর্ণ ভিডিওটি দেখুন এইখানে::</h2>
		
		<iframe id="youtube" width="560" height="315" src="https://www.youtube.com/embed/{{$articleDetails[0]->videokey}}" frameborder="0" allowfullscreen></iframe>
		</br>
		</br>
		
		@if($articleDetails[0]->filepath != null)
			
		<h style="font-size:20px;"><B><I>  এ সম্পর্কিত একটি ডকুমেন্ট   </B></I></h>
		
		<div class="input-field col m6">
		{{ Form::open(array('url' => '/download')) }}

		{{ Form::hidden('path',$articleDetails[0]->filepath)}}
				
			
		
		{{ Form::submit('এখানে ক্লিক করুন', ['class'=>'btn btn-primary right'])}}
		
		{{ Form::close() }}
			</div>
        @endif	
		
		
		
		</div>
		
		

		
	<div id="topic">	
	
	
	
	
	</div>

</div>

</div>



</body>


</html>