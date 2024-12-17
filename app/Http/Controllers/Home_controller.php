<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use function Laravel\Prompts\table;
use App\Models\Doctor;

class Home_controller extends Controller
{

  
  public function index(){
return view ('home.index');
  }
  
  //about-us page
  public function gallery(){
    $banner=DB::table('banner')->orderBy('id','desc')->limit(3)->get();
    $propertys=DB::table('propertys')->orderBy('id','desc')->get();
    $agents=DB::table('agents')->orderBy('id','desc')->get();
    $gallerys=DB::table('gallerys')->orderBy('id','desc')->get();
    return view('frontend.importants.gallery',compact('banner','propertys','agents','gallerys'));
      }
    
//enquery data
public function enquery_data(){
  $data=DB::table('enquery')->orderBy('id','desc')->get();
  return view('frontend.admin.enquery-data',compact('data'));
  }
//upload banner
public function upload_banner(Request $request){
  if(!session()->has('admin')){
    return redirect('admin');
 }else{
  $path=$request->file('banner_name')->store('public');
  $file_name_array=explode('/',$path);
$banner_name=$file_name_array[1];
$arr=array(
  'banner_name'=>$banner_name
);
  $upload=DB::table('banner')->insert($arr);
  return redirect('banner-data');
  }
}
  //delete banner
  public function delete_banner($id=''){
$ok=DB::table('banner')->where('id',$id)->delete();
return redirect('banner-data');
  }
//delete banner
public function delete_gallery($id=''){
  $ok=DB::table('gallerys')->where('id',$id)->delete();
  return redirect('gallery-data');
    }
  //delete banner
  public function delete_properties($id=''){
    $ok=DB::table('propertys')->where('id',$id)->delete();
    return redirect('property-data');
      }
    //delete banner
  public function delete_agents($id=''){
    $ok=DB::table('agents')->where('id',$id)->delete();
    return redirect('agents-data');
      }
    //banner-data
public function banner_data(){
  $data=DB::table('banner')->orderBy('id','desc')->limit(3)->get();
  return view('frontend.admin.banner-data',compact('data'));
}
//banner-data
public function agents_data(){
  $data=DB::table('agents')->orderBy('id','desc')->limit(20)->get();
  return view('frontend.admin.agents-data',compact('data'));
}   
//property-data
public function property_data(){
  $data=DB::table('propertys')->orderBy('id','desc')->limit(20)->get();
  // $data=DB::table('propertys')->get();
  return view('frontend.admin.property-data',compact('data'));
}
//gallery-data
public function gallery_data(){
  $data=DB::table('gallerys')->orderBy('id','desc')->limit(20)->get();
  return view('frontend.admin.gallery-data',compact('data'));
}
//property-data-upload
public function upload_property(Request $request){
  if(!session()->has('admin')){
    return redirect('admin');
 }else{
$path=$request->file('file_name')->store('public');
$file_name_array=explode('/',$path);
$file_name=$file_name_array[1];

$price=$request->input('price');
$address=$request->input('address');
$types=$request->input('types');
$featured=$request->input('featured');
$about=$request->input('about');
$squr=$request->input('squr');
$input_data=array(
  'file_name'=>$file_name,
  'price'=>$price,
'address'=>$address,
'types'=>$types,
'featured'=>$featured,
'about'=>$about,
'squr'=>$squr
);
$true=DB::table('propertys')->insert($input_data);
$data=DB::table('propertys')->orderBy('id','desc')->limit(20)->get();
 
  return view('frontend.admin.property-data',compact('data'));
}
}
//property-members-upload
public function upload_members(Request $request){
  if(!session()->has('admin')){
    return redirect('admin');
 }else{
$path=$request->file('file_name')->store('public');
$file_name_array=explode('/',$path);
$file_name=$file_name_array[1];

$name=$request->input('name');
$posts=$request->input('post');
$input_data=array(
  'file_name'=>$file_name,
  'name'=>$name,
'posts'=>$posts
);
$true=DB::table('agents')->insert($input_data);
return redirect('agents-data') ;
}
}
//property-members-upload
public function upload_gallery(Request $request){
  if(!session()->has('admin')){
    return redirect('admin');
 }else{
$path=$request->file('file_name')->store('public');
$file_name_array=explode('/',$path);
$file_name=$file_name_array[1];

$message=$request->input('message');
$input_data=array(
  'image_address'=>$file_name,
  'image_name'=>$message
);
$true=DB::table('gallerys')->insert($input_data);
return redirect('gallery-data');
}
}


//property-members-upload
public function enquery(Request $request){
  if(!session()->has('admin')){
    return redirect('admin');
 }else{
  $name=$request->input('name');
  $email=$request->input('email');
  $phone=$request->input('phone');
$message=$request->input('message');
$input_data=array(
  'name'=>$name,
'email'=>$email,
'phone'=>$phone,
'messege'=>$message
);
$true=DB::table('enquery')->insert($input_data);
return redirect('contact-us');
}
}
//bill form
public function bill_form(){
  if(!session()->has('admin')){
    return redirect('admin');
 }else{
  $data=DB::table('bill')->orderBy('id','desc')->get();
  return view('frontend.admin.bill-form',compact('data'));
 }
}

//open bill
public function open_bill($id=''){
 $data=DB::table('bill')->where('id',$id)->get();
 return view('frontend.admin.bill-print',compact('data'));
}


//homepage code start

public function search(Request $request){
  $name=$request->input('name');
  $location=$request->input('location');
  // $doctors = Doctor::with('category:id,name')->where([['status', 1], ['is_filled', 1], ['subscription_status', 1]])
  $doctors = DB::table('doctor')
  ->leftJoin('hospital', 'doctor.hospital_id', '=', 'hospital.id')
  ->leftJoin('expertise', 'doctor.expertise_id', '=', 'expertise.id')
  ->where('doctor.status', 1) // Always apply this condition
  ->where('hospital.address','LIKE','%'.$location.'%')
  ->orWhere('doctor.name','LIKE','%'.$location.'%')
  ->orWhere('hospital.name','LIKE','%'.$location.'%')
  ->select(
      'doctor.*',
      'doctor.id as doctorId',
      'expertise.*',
      'doctor.name as doctorName',
      'doctor.image as doctorImage',
      'hospital.address as hospitalAddress',
      'expertise.name as expertiseName'
  )
  ->get();
  // $doctors=DB::table('hospital')->where('address','LIKE', '%' . $location . '%')->get();

      
    // dd($doctors);
  return view('frontend.home.search',compact('doctors'));
}

public function all_doctors(){
  // $data=DB::table('admit')->where('name',$name)->orderBy('id','desc')->get();
  return view('frontend.all-doctors');
}
public function company_profile(){
  // $data=DB::table('admit')->where('name',$name)->orderBy('id','desc')->get();
  return view('frontend.about.company-profile');
}
//about-us page
public function about_us(){
  return view('frontend.home.about.about-us');
    }
    //mission and vission
    public function mission_vission(){
      
  return view('frontend.about.mission-vission');
    }
     // founder - message
     public function founder_message(){
      
      return view('frontend.about.founder-message');
        }
      //       doctors-profile
        public function doctors_profile(){
         
         return view('frontend.services.doctors-profile');
           }
    //       doctors-profile
    public function profile($id=''){
         
      return view('frontend.services.profile',compact('id'));
        }
            // services
    public function services($id=''){
         
      return view('frontend.home.services.services',compact('id'));
        }
//contact 
public function contact(){
         
  return view('frontend.contact');
    }
//contact 
public function faqs(){
         
  return view('frontend.faqs');
    }
    public function book(){
         
      return view('frontend.home.booking');
        }
    //hospitalData
    public function hospitalData($id=''){
      
 $doctorsData=DB::table('doctor')
 ->where('doctor.hospital_id',$id)
 ->where('doctor.status',1)
 ->leftJoin('expertise','doctor.expertise_id','=','expertise.id')
 ->select('doctor.*','doctor.id as doctorId','expertise.*','doctor.name as doctorName','doctor.image as doctorImage')
 ->get();
// dd($doctorsData);
 return view('frontend.hospital.index',compact('doctorsData'));
    }

    //contactUs
    public function contactUs(Request $request){

      $data=array(
'fullName'=>$request->input('fullName'),
'email'=>$request->input('email'),
'messages'=>$request->input('messages')
      );

      // dd($request);
      $check=DB::table('contact')->insert($data);


      return redirect()->back()->with('success', 'Message sent successfully!');
    }



    //allHospital
    public function allHospital(){
      $hospitalData=DB::table('hospital')->where('status',1)->orderBy('id','desc')->get();
      // dd($hospitalData);
      return view('frontend.allHospital' ,compact('hospitalData'));
    }
    //termscondition
    public function termscondition(){
      return view('frontend.termscondition');
    }
    // refundpolicy
    public function refundpolicy(){



      return view('frontend.importance.refundpolicy');
    }
    public function career(){
      return view('frontend.career.career');
    }

    // careerpost
    public function careerpost(Request $request){


      $path=$request->file('cvfile')->store('public');
      $file_name_array=explode('/',$path);
      $cvfile=$file_name_array[1];

$data=array(
  'fullname'=>$request->input('fullname'),
  'email'=>$request->input('email'),
  'message'=>$request->input('message'),
  'cvfile'=>$cvfile,
);

$check=DB::table('career')->insert($data);
if($check){
  session()->push('success',true);
  return redirect()->back();
}else{
  session()->push('failld',true);
  return redirect()->back();
}
    }
}


