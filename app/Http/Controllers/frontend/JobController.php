<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Models\ProviderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class JobController extends Controller
{
  public function jobList(){
    $currentDate=Date::now()->format('Y-m-d');
    $expiredJobs=Job::where('applicationDeadline','<=',$currentDate)->where('status','active')->get();
foreach($expiredJobs as $expired){
    $expired->status='inactive';
    $expired->save();
}
    $totalJobs=Job::where('status','active')->count();
    $jobs=Job::select('id','provider_id','jobTitle','companyName','location','salary','vaccancies')->where('status','active')->get();
    return view('frontend.job-list',compact('jobs','totalJobs'));
  }
  public function jobDetails($id){
    $job=Job::find($id);
    $companyDetails=ProviderDetail::where('provider_id',$job->provider_id)->get();
    return view('frontend.job-detail',compact('job','companyDetails'));
  }
  public function jobCategory(){
    return view('frontend.category');
  }
}
