<?php

namespace App\Http\Controllers\JobSeeker;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\Job;
use App\Models\SeekerDetail;
use App\Models\SelectedCandidate;
use App\Models\ShortList;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class DashboardController extends Controller
{
    public function dashboard(){
        $userId=Auth::user()->id;
        $applications=Application::where('seeker_id',$userId)->where('status','active')->count();
        $shortlisted=Shortlist::where('seeker_id',$userId)->where('status','active')->count();
        $selected=SelectedCandidate::where('seeker_id',$userId)->where('status','active')->count();

        return view('frontend.jobSeeker.jobSeekerDashboard',compact(['applications','shortlisted','selected']));
     }
     public function apply($jobId,$providerId){

        $userId=Auth::user()->id;
        $already=Application::where('seeker_id',$userId)->where('job_id',$jobId)->first();
        if(!empty($already)){
            session()->flash('failMsg','You Already Applied for this Job');
            return redirect()->route('jobList');
        }
        // $profileId=SeekerDetail::where('seeker_id',$userId)->first()->id;
        $profile=SeekerDetail::where('seeker_id',$userId)->first();
if(empty($profile)){
    session()->flash('profileMsg','Please Add Your Career Details');
    return redirect()->route('jobList');
}
     $profileId=$profile->id;
$application=new Application();
         $application->seeker_id=$userId;
         $application->seeker_details=$profileId;
         $application->provider_id=$providerId;
         $application->job_id=$jobId;
        $application->save();
         session()->flash('successMsg','Applied successFully');
         return redirect()->route('jobList');
     }
     public function applied(){
        $user=Auth::user();
        $appliedJobs = Application::with('job')
        ->where('seeker_id',$user->id)
        ->where('status','active')
        ->get();

        $count = Application::with('job')
        ->where('seeker_id',$user->id)
        ->where('status','active')->count();
        return view('frontend.jobSeeker.appliedJobs', ['applications' => $appliedJobs,'user'=>$user,'count'=>$count]);
    }
    public function deleteApplication($appId){
         $application=Application::find($appId);
         $application->status='inactive';
         $application->save();
         session()->flash('successMsg','Application deleted successfully');
         return redirect()->back();
    }
    public function careerProfileForm(){
        return view('frontend.jobSeeker.careerProfile');
    }
    public function careerProfile(Request $request){
        $image=$request->file('cvImage');
         $imageName=time().'.'.$image->extension();
         $image->move(public_path('cv'),$imageName);
       $userId=Auth::user()->id;
       //check this user id already have career profile or not to maintain unique data of each seeker_id
       $data=SeekerDetail::where('seeker_id',$userId)->first();
       if($data){
        return 'You already contains caeer Profile';
       }else{
        $details=new SeekerDetail();
        $details->seeker_id=$userId;
        $details->qualification=$request->qualification;
        $details->skill=$request->skill;
        $details->experience=$request->experience;
        $details->age=$request->age;
        $details->cv='cv/'.$imageName;
        $details->save();
        session()->flash('successMsg','Creer Profile Added successFully');
        return redirect()->route('showCareerProfile');
       }
    }
    public function showCareerProfile(){
        $user=Auth::user();
        $userId=$user->id;
        $userName=$user->name;

        $data=SeekerDetail::where('seeker_id',$userId)->get();
        if($data){
        return view('frontend.jobSeeker.showCareerProfile',compact('data','userId','userName'));

        }else{
            return 'Please add your career profile';
        }
    }
    public function editCareerForm(){
            $userId=Auth::user()->id;
            $profile=SeekerDetail::where('seeker_id',$userId)->first();
            return view('frontend.jobSeeker.editCareerForm',compact('profile'));
    }
    public function editCareerProfile(Request $request){
     $userId=Auth::user()->id;
     $profile=SeekerDetail::where('seeker_id',$userId)->first();
      if($profile){
        if($request->file('cvImage')){
         $image=$request->file('cvImage');
         $imageName=time().'.'.$image->extension();
         $path=public_path('cv/');
       $image->move( $path,$imageName);
       $profile->cv='cv/'.$imageName;
        }
        $profile->qualification=$request->qualification;
        $profile->skill=$request->skill;
        $profile->experience=$request->experience;
        $profile->age=$request->age;
        $profile->save();
        session()->flash('successMsg','Career Profile updated successfully');
       return redirect()->route('showCareerProfile');
      }
    }
    public function deleteCareerProfile(){
        $userId=Auth::user()->id;
        $profile=SeekerDetail::where('seeker_id',$userId)->delete();
        session()->flash('successMsg','Your Career Profile Deleted Successfully');
       return redirect()->route('showCareerProfile');

    }


    public function filterJobs(Request $request){

if ($request->has('category')) {
    $post = $request->input('category');
}
if ($request->has('jobType')) {
    $jobType = $request->input('jobType');
}
if ($request->has('location')) {
    $location = $request->input('location');
}
if(isset($post,$jobType,$location)){
    // return 'three';
    $results=Job::where('jobTitle',$post)->where('employmentType',$jobType)->where('location',$location)->get();
    return view('jobSeeker.filter.all',compact('results'));
}elseif(isset($post,$jobType)){
    return 'post and type';
}elseif(isset($post,$location)){
    return 'post and location';
}elseif(isset($jobType,$location)){
 return 'type and location';
}elseif(isset($post)){
    return 'only pst';
}elseif(isset($jobType)){
    return 'type';
}elseif(isset($location)){
    return 'location only';
}

else{
    return 'please select any option to filter results';
};
    }
    public function filter(Request $request){
        // return $request;
    $post = $request->input('post');
    $jobType = $request->input('job_type');
    $location = $request->input('location');
        $results=Job::where('jobTitle',$post)->where('employmentType',$jobType)->where('location',$location)->get();
        return view('frontend.jobSeeker.filter.all',compact('results'));
    }






    public function shortlistedRecord(){
        $user=Auth::user();
    $shortListed=ShortList::where('seeker_id',$user->id)->where('status','active')->with('job')->get();
    $count=ShortList::where('seeker_id',$user->id)->where('status','active')->count();
    return view('frontend.jobSeeker.shortListed',compact(['shortListed','count','user']));
    }



    public function SelectedRecord(){
        $user=Auth::user();
    $selectedRecord=SelectedCandidate::where('seeker_id',$user->id)->where('status','active')->with('job')->get();
    $count=SelectedCandidate::where('seeker_id',$user->id)->where('status','active')->count();
    return view('frontend.jobSeeker.selected',compact(['selectedRecord','count','user']));
    }
  }
