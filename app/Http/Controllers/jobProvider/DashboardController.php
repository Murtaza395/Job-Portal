<?php

namespace App\Http\Controllers\JobProvider;

use App\Http\Controllers\Controller;
use App\Http\Requests\JobPostRequest;
use App\Http\Requests\jobProvider\PostRequest;
use App\Mail\InterviewMail;
use App\Mail\SelectionMail;
use App\Mail\ShortlistedMail;
use App\Models\Application;
use App\Models\Interview;
use App\Models\Job;
use App\Models\ProviderDetail;
use App\Models\SeekerDetail;
use App\Models\SelectedCandidate;
use App\Models\ShortList;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Js;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $id=Auth::user()->id;
        $jobs=Job::where('provider_id',$id)->count();



    $applications = Application::where('provider_id',$id)->where('status','active')->count();



        $shortList = Job::select('jobs.provider_id', DB::raw('COUNT(short_lists.id) AS short_lists'))
        ->leftJoin('short_lists', 'jobs.id', '=', 'short_lists.job_id')
        ->where('jobs.provider_id', $id)
        ->where('short_lists.status','active')
        ->groupBy('jobs.provider_id')
        ->count();


        $selectedCandidatesCount = Job::select('jobs.provider_id', DB::raw('COUNT(selected_candidates.id) AS selected_candidates'))
    ->leftJoin('selected_candidates', 'jobs.id', '=', 'selected_candidates.job_id')
    ->where('jobs.provider_id', $id)
    ->where('selected_candidates.status','active')
    ->groupBy('jobs.provider_id')
    ->count();

    // return $shortList;
        return view('frontend.jobProvider.jobProviderDashboard',compact('applications','shortList','selectedCandidatesCount'));
    }
    public function jobPostForm()
    {
        return view('frontend.jobprovider.jobPostForm',);
    }
    public function jobPost(JobPostRequest $request)
    {

        $job = new Job();
        $user_id = Auth::user()->id;
        $job->provider_id = $user_id;
        $job->jobTitle = $request->jobTitle;
        $job->companyName = $request->companyName;
        $job->companyDetails = $request->companyDetails;
        $job->jobDescription = $request->jobDescription;
        $job->jobRequirements = $request->jobRequirements;
        $job->qualification = $request->qualification;
        $job->vaccancies = $request->vaccancies;
        $job->applicationDeadline = $request->applicationDeadline;
        $job->employmentType = $request->employmentType;
        $job->location = $request->location;
        $job->salary = $request->salary;
        $job->save();
        session()->flash('successMessage', 'Job Posted Successfully');
        return redirect()->back();
    }


    public function myJobs()
    {
        $id = Auth::user()->id;
        $jobs = Job::where('provider_id', $id)
            ->where('status', 'active')->get();
        return view('frontend.jobProvider.showJobs', compact('jobs'));
    }
    public function editJobForm($id)
    {
        $post = Job::find($id);
        return view('frontend.jobProvider.editJobForm', compact('post', 'id'));
    }
    public function editJob(PostRequest $request, $id)
    {
        $job = Job::find($id);
        $job->jobTitle = $request->jobTitle;
        $job->companyName = $request->companyName;
        $job->companyDetails = $request->companyDetails;
        $job->jobDescription = $request->jobDescription;
        $job->jobRequirements = $request->jobRequirements;
        $job->vaccancies = $request->vaccancies;
        $job->applicationDeadline = $request->applicationDeadline;
        $job->qualification = $request->qualification;
        $job->employmentType = $request->employmentType;
        $job->location = $request->location;
        $job->salary = $request->salary;
        $job->update();
        session()->flash('successMessage', 'Job Updated Successfully');
        return redirect()->route('myJobs');
    }
    public function deleteJob($id)
    {
        $post = Job::find($id);
        $post->status = 'inactive';
        $post->save();
        session()->flash('successMessage', 'Job Deleted Successfully');
        return redirect()->route('myJobs');
    }

    public function applicationList()
    {
        $id = Auth::user()->id;
        $jobs = Job::where('provider_id', $id)->get();
        return view('frontend.jobProvider.applicationList', ['jobs' => $jobs]);
    }

    public function appliedCandidate($jobId)
    {
        $applications = Application::with(['job', 'user', 'seekerDetails'])
        ->where('job_id', $jobId)
        ->where('status', 'active')
        ->get();
        return view('frontend.jobProvider.applications', ['applications' => $applications]);
    }
    public function shortListed($jobId)
    {
        $shortListed_candidates = ShortList::with('user', 'seekerDetails', 'job')
            ->where('job_id', $jobId)
            ->where('status', 'active')
            ->get();

        return view('frontend.jobProvider.shortListed', compact('shortListed_candidates'));
    }
    public function deleteShortListed($shortListId)
    {
        $candidate = ShortList::where('id', $shortListId)->first();
        $candidate->status = 'delete';
        $candidate->save();
        session()->flash('successMsg', 'The candidate has been successfully deleted from the shortlist.');
        return redirect()->back();
    }
    public function viewCV($detailsId)
    {
        $cv = SeekerDetail::find($detailsId)->cv;
        return view('frontend.jobProvider.viewCV', compact('cv'));
    }
    public function shortList($appId)
    {
        $application = Application::find($appId);
        $application->status='inactive';

        $seeker=User::find($application->seeker_id);
        $seekerName=$seeker->name;
        $job=Job::find($application->job_id);
        $mailData=[
            'seekerName'=>$seeker->name,
            'job' => $job->jobTitle,
            'company' =>$job->companyName
        ];

        //if candidate is in recycle bin
        $delete = ShortList::where('seeker_id', $application->seeker_id)
            ->where('job_id', $application->job_id)
            ->where('status', 'delete')
            ->first();
        if ($delete) {
            session()->flash('errorMsg', 'Select this candidate from your trash because You recently deleted this user ');
            return redirect()->back();
        }
      //if already selected for final interview
        $inactive = ShortList::where('seeker_id', $application->seeker_id)
        ->where('job_id', $application->job_id)
        ->where('status', 'inactive')
        ->first();
    if ($inactive) {
        session()->flash('errorMsg', 'This candidate already selected for Final Interview ');
        return redirect()->back();
    }
        else {
            $existingShortList = ShortList::where('job_id', $application->job_id)
                ->where('seeker_id', $application->seeker_id)
                ->where('status','active')
                ->first();
            if ($existingShortList) {
                // Seeker_id already exists in ShortList, show an error message or handle it as needed
                session()->flash('errorMsg', 'This Candidate is already shortlisted');
                return redirect()->back();
            } else {
                //if new candidate not exist in shortlist table
                $shortList = new ShortList();
                $shortList->job_id = $application->job_id;
                $shortList->seeker_id = $application->seeker_id;
                $shortList->seeker_details = $application->seeker_details;
                //Delete candidate's application bcz it is shortlisted
                $candidate=Application::where('job_id', $application->job_id)
                ->where('seeker_id', $application->seeker_id)->first();
                $candidate->status='inactive';
                $candidate->save();
                $shortList->save();
               $application->save();

                session()->flash('successMsg', 'User short listed successfully');
                Mail::to($seeker->email)->send(new ShortlistedMail($mailData));
                return redirect()->back();
            }
        }
    }

    public function interview($shortListId)
    {
        $data = ShortList::find($shortListId);
        $job=Job::find($data->job_id);
        $seeker=User::find($data->seeker_id);
        $mailData=[
            'seekerName' => $seeker->name,
            'job'     => $job->jobTitle,
            'company' => $job->companyName
        ];

        $alreadyExists = Interview::where('job_id', $data->job_id)
            ->where('seeker_id', $data->seeker_id)
            ->where('status', 'active')
            ->first();
        if ($alreadyExists) {
            session()->flash('errorMsg', 'User Already Selected For Interview');
            return redirect()->back();
        } else {
            //if candidate was deleted by provider
            $delete = Interview::where('job_id', $data->job_id)
                ->where('seeker_id', $data->seeker_id)
                ->where('status', 'delete')
                ->first();

            if ($delete) {
                //to save repetition errors
                session()->flash('errorMsg', 'Select This candidate from your trash because You recently deleted this user ');
                return redirect()->back();
            }
            //if already selected for job (cleared interview)
            $inactive = Interview::where('job_id', $data->job_id)
                ->where('seeker_id', $data->seeker_id)
                ->where('status', 'inactive')
                ->first();
            if ($inactive) {
                //to save repetition errors
                session()->flash('errorMsg', 'This candidate Already for this job');
                return redirect()->back();
            } else {
                //if candidate not exist in interviews table
                $interview = new Interview();
                $interview->job_id = $data->job_id;
                $interview->seeker_id = $data->seeker_id;
                $interview->seeker_details = $data->seeker_details;
                //delete this candidate from shortlist
                $candidate=ShortList::where('job_id', $data->job_id)
                ->where('seeker_id', $data->seeker_id)->first();
                $candidate->status='inactive';
                $candidate->save();
                $interview->save();
                session()->flash('successMsg', 'User Successfully Selected for interview');
                Mail::to($seeker->email)->send(new InterviewMail($mailData));
                return redirect()->back();
            }
        }
    }





    public function finalInterviewList($jobId)
    {
        $interviewList = Interview::with(['user', 'seekerDetails', 'job'])
            ->where('job_id', $jobId)
            ->where('status', 'active')
            ->get();
        return view('frontend.jobProvider.interviewList', compact('interviewList'));
    }



    public function deleteInterview($interviewId)
    {
        $interview = Interview::find($interviewId);
        $interview->status = 'delete';
        $interview->save();
        session()->flash('successMsg', 'Candidate Deleted successfully');
        return redirect()->back();
    }


    public function finalSelection($interviewId){

        $selected=new SelectedCandidate();
        $interview = Interview::find($interviewId);
        $job=Job::find($interview->job_id);
        $seeker=User::find($interview->seeker_id);
        $mailData=[
            'seekerName' => $seeker->name,
            'job'     => $job->jobTitle,
            'company' => $job->companyName
        ];

        $selected->job_id=$interview->job_id;
        $selected->seeker_id=$interview->seeker_id;
        $selected->seeker_details=$interview->seeker_details;
        $interview->status = 'inactive';
        $selected->save();
        $interview->save();
        session()->flash('successMsg', 'Candidate Successfully Selected for Job');
        Mail::to($seeker->email)->send(new SelectionMail($mailData));
        return redirect()->back();
    }

    public function selected($jobId){
        $selectedList=SelectedCandidate::with(['user','seekerDetails','job'])
        ->where('job_id',$jobId)
        ->get();
        return view('frontend.jobProvider.final-selected-list', compact('selectedList'));

    }
    public function detailsForm(){
        return view('frontend.jobProvider.detailsForm');
    }
    public function storeCompanyDetails(Request $request){
        $provider_id=Auth::user()->id;
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'about_us' => 'required|string',
            'industry' => 'required|string',
            'sector' => 'required|string',
            'location' => 'required|string',
            'contact_email' => 'required|email',
            'contact_phone' => 'required|string',
            'website' => 'nullable|url',
            'employee_count' => 'required|integer',
            'company_type' => 'required|in:startup,small_business,medium_enterprise,large_corporation',
            'founded_year' => 'required|integer',
            // 'social_media_links' => 'required|string',
            'current_job_openings' => 'required|integer',
            'selected_employers' => 'required|integer',
            'reviews' => 'nullable|string',
            'benefits' => 'nullable|string',
        ]);

        // Create an object of CompanyDetail model and set the properties
        $companyDetail = new ProviderDetail();
        $companyDetail->provider_id=$provider_id;
        $companyDetail->name = $validatedData['name'];
        $companyDetail->about_us = $validatedData['about_us'];
        $companyDetail->industry = $validatedData['industry'];
        $companyDetail->sector = $validatedData['sector'];
        $companyDetail->location = $validatedData['location'];
        $companyDetail->contact_email = $validatedData['contact_email'];
        $companyDetail->contact_phone = $validatedData['contact_phone'];
        $companyDetail->website = $validatedData['website'];
        $companyDetail->employee_count = $validatedData['employee_count'];
        $companyDetail->company_type = $validatedData['company_type'];
        $companyDetail->founded_year = $validatedData['founded_year'];
        // $companyDetail->social_media_links = $validatedData['social_media_links'];
        $companyDetail->current_job_openings = $validatedData['current_job_openings'];
        $companyDetail->selected_employers = $validatedData['selected_employers'];
        $companyDetail->reviews = $validatedData['reviews'];
        $companyDetail->benefits = $validatedData['benefits'];
        $companyDetail->save();
 return redirect()->back();
    }
}
