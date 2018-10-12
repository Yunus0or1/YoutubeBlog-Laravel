<?php

namespace App\Http\Controllers;

use Redirect;
use DB;
use App\Quotation;
use Input;
use Illuminate\Http\Request;
use App\Filename;
use Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\UploadedFile;


class PageController extends Controller
{
	
   
   
   

    
    public function articlesANDvideos($subject)
    {	
		
		$sub = $subject ;

		
		$articles=DB::table('subject')
			
		  ->where('topic','=',$sub)	
          ->get();
		  
		
		  
		$channel=DB::table('channel')
		  ->where('topic','=',$sub)
          ->get();	
			
        
		
		
        return view('basepage')
		->with('articles',$articles)
		->with('channel',$channel)
		->with('sub',$sub);
		
    }
	
	
	public function details($sub,$title,$writer){
		
		$subject = $sub ;
		$x = 1;
		
		$articleDetails=DB::table('subject')
		  
		  ->where('title','=',$title)	
          ->get();
		
		
		return view('details')->with('articleDetails',$articleDetails);
		
	}
	
	public function blog(){
		
		return view('writeBlog');
		
	}
	
	public function youtubekey($url)
   {
	   
		parse_str( parse_url( $url, PHP_URL_QUERY ), $my_array_of_vars );
		$key = $my_array_of_vars['v'];  
		 
		return $key ;  
   }
   
   
  public  function youtube_id_from_url($url) {
    $pattern = 
        '%^# Match any YouTube URL
        (?:https?://)?  # Optional scheme. Either http or https
        (?:www\.)?      # Optional www subdomain
        (?:             # Group host alternatives
          youtu\.be/    # Either youtu.be,
        |youtube(?:-nocookie)?\.com  # or youtube.com and youtube-nocookie
          (?:           # Group path alternatives
            /embed/     # Either /embed/
          | /v/         # or /v/
          | /watch\?v=  # or /watch\?v=
          )             # End path alternatives.
        )               # End host alternatives.
        ([\w-]{10,12})  # Allow 10-12 for 11 char YouTube id.
        %x'
        ;
    $result = preg_match($pattern, $url, $matches);
    
	if (false !== $result) {
        return $matches[1];
    }
	
    return false;
}


	
	public function blogafter(Request $request){
		
		
		if($request->hasFile('filea'))
        {
			     
			$filepath = $request->filea->getClientOriginalName();
			
			$request->filea->storeAs('public/upload',$filepath);
				
			
        }
		
		else {
			
			$filepath = '';
		}
		
		$sub = Input::get('sub') ;
		$details = Input::get('details') ;
		$videokey =Input::get('videokey') ;
		$email = Input::get('email');
		
		parse_str( parse_url( $videokey, PHP_URL_QUERY ), $my_array_of_vars );
		
		
		$mainkey = $my_array_of_vars;
		
		if ($mainkey == [])
		{
			return \Redirect::back()->withInput(Input::all())->withErrors(['Insert Youtube URL properly.Get URL from top of your browser URL box']);
			
		}
		
		else $mainkey = $my_array_of_vars['v'];
		
		$job = DB::table('users')
		  
		  ->where('email','=',$email)	
          ->get();
		
		
		
		DB::table('subject')->insert(
          [

          'title'=>Input::get('title'),
		  'details'=>Input::get('details'),
		  'videokey'=>$mainkey,
		  'writer'=>Input::get('writer'),
		  'job'=>$job[0]->job,
		  'email'=>Input::get('email'),
		  'topic'=>Input::get('sub'),
		  'filepath'=>$filepath,
          ]
        	);
			
		DB::table('writers')->insert(
          [

          'title'=>Input::get('title'),
		  'email'=>Input::get('email'),
		  'topic'=>Input::get('sub'),
		  
          ]
        	);	
		
  		
		return view('blogafter')->with('sub',$sub);
		
	}
	
	public function profile($email){
		
		$email = $email ;
		
		$sub = DB::table('subject')
				
			   ->where('email','=',$email)
               ->get();	
			   
		$image = DB::table('users')
				
			   ->where('email','=',$email)
               ->get();	   
		
		
		
		return view('profile')->with('sub',$sub)->with('image',$image);
		
	}
	
	public function profilewriting($title){
		
		
		
		$articleDetails=DB::table('subject')
		  
		  ->where('title','=',$title)	
          ->get();
		
		return view('details')->with('articleDetails',$articleDetails);
		
	}
    
    public function profileofwriters(){
		
		$profile=DB::table('users')
		 
		 ->get();
		 
		 
		 
		return view('ProfileofWriters')->with('profile',$profile);
	}
	
	
	
	public function profileofwritersdetails($email){
	
	   	$profile=DB::table('subject')
		 
		 ->where('email','=',$email)
		 ->get();
		
	
	}
	
	public function download(){
	

	   	$filepath = Input::get('path');
		$path = storage_path('app/public/upload/'.$filepath);
		//return $path;
		return response()->download($path);
		
	
	}
	
	
	
	
}























