<!doctype html>
<html>
<head>



        <title>বাংলা সাইন্স ব্লগ</title>
		
		
		<link href="{{asset('css/slick.css')}}" rel="stylesheet">
		<link href="{{asset('css/slick-theme.css')}}" rel="stylesheet">  
		<link rel="stylesheet" type="text/css" href="{{asset('css/blog.css')}}">




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
		
		
		<h34 style="font-size:20px;float:right; margin-right:20px;margin-top:125px;"> 
		<a href="{{url('/logout')}}">Logout</a></h34>
		
		<h33 style="font-size:20px;float:right; margin-right:20px;margin-top:100px;">  স্বাগতম   {{$user->name}}</br>

			<a href="{{ url('profile/'.$user->email.'/'.$user->name) }}">আপনার প্রোফাইল দেখুন</a>	</h33>
		
		
		
		
		<h1 style="margin-left:80px;">এখানে ব্লগ লিখুন </h1>
		
		{{ Form::open(['route' => 'gpa.science', 'files' => true]) }}
		
		<div id="form" >
		
		<div id="select" style="font-size:20px;">
		

		{{ Form::label('sub', 'বিষয়:') }}
				{{ Form::select('sub', [
					'modernphysics' => 'আধুনিক বিজ্ঞান',
					'physics' => 'পদার্থ',
					'chemestry' => 'রসায়ন',
					'math' => 'গনিত',
					'space' => 'মহাকাশ বিজ্ঞান',
					'biology' => 'জীব বিজ্ঞান'
				], null, array('class' => ''))}}
			
		</div>		
				</br>
				
		
		<div id="youtubelink" style="font-size:20px;">
		<p>শিরোনাম :</p>
		<h22 >	{{ Form::textarea('title', null, ['size' => '70x1']) }} </h22>	
		</div>
		
		</br>
		
		<div id="youtubelink" style="font-size:20px;">
		<p>ইউটিউব ভিডিও লিঙ্ক :</p>
		<h22 >	{{ Form::textarea('videokey', null, ['size' => '70x1']) }} </h22>	
		</div>	
		
			</br>
			
			
		<div id="blogwrite" style="font-size:20px;">
		<p>ব্লগ লিখুন(অবশ্যই বাংলায়) :</p>
		<h22 >	{{ Form::textarea('details', null, ['size' => '70x10']) }} </h22>
		</div>
		
		</br>
		
		
		<div>
	
        <input type="file" name="filea" enctype="multipart/form-data" >
		<input type="hidden" value="{{ csrf_token() }}" name="_token">
        </div>
		
        
  
		
		
		
		<div class="input-field col m6">
				{{ Form::hidden('email',$user->email)}}
			</div>
			
		</br>
		
		<div class="input-field col m6">
				{{ Form::hidden('writer',$user->name)}}
			</div>
		
		<div class="input-filed">
				{{ Form::submit('Submit', ['class'=>'btn btn-primary right'])}}
			</div>
			
     {{ Form::close()}}
	 
</div>

</div>

</div>



</body>


</html>