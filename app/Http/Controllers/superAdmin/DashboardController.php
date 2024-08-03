<?php
//find
//
namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Http\Requests\jobProvider\PostRequest;
use App\Http\Requests\SuperAdmin\EditPasswordProviderRequest;
use App\Http\Requests\SuperAdmin\EditProviderRequest;
use App\Models\Application;
use App\Models\Job;
use App\Models\SelectedCandidate;
use App\Models\ShortList;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    public function dashboard()
    {
        $seekers=User::where('user_type','jobSeeker')->count();
        $providers=User::where('user_type','jobProvider')->count();
        $jobs=Job::count();
        $applications=Application::count();
        $shortListed=ShortList::count();
          $selected=SelectedCandidate::count();
                  return view('frontend.superAdmin.superAdminDashboard',compact('seekers','providers','jobs','applications','shortListed','selected'));
    }
    public function jobProviders()
    {
        $jobProviders = User::where('user_type', 'jobProvider')
            ->where('status', 'active')->get();
        // $count=User::where('user_type','jobSeeker')->where('status', 'active')->count();

        return view('frontend.superAdmin.jobProvider', ['jobProviders' => $jobProviders]);
    }



    public function providerEditForm($id)
    {
        $jobProvider = User::where('id', $id)->first();
        return view('frontend.superAdmin.editJobProvider', ['jobProvider' => $jobProvider, 'id' => $id]);
    }

    public function updateProvider(Request $request, $id)
    {
        $provider = User::where('id', $id)->first();
        $provider->name = $request->name;
        $provider->email = $request->email;
        $provider->password = $request->password;
        $provider->update();
        session()->flash('successMessage', 'Record Updated Successfully');
        return redirect()->route('jobProviders');
    }

    public function providerPasswordEditForm($id)
    {
        return view('frontend.superAdmin.editPasswordJobProvider', ['id' => $id]);
    }

    public function updatePasswordProvider(EditPasswordProviderRequest $request, $id)
    {
        $user = User::find($id);
        $user->password = $request->password;
        $user->save();
        session()->flash('successMessage', 'Password Changed Successfully of ID = ' . $id);
        return redirect()->route('jobProviders');
    }


    public function deleteProvider($id)
    {
        $provider = User::where('id', $id)->first();
        $provider->status = 'inactive';
        $provider->save();
        session()->flash('successMessage', 'User Deleted Successfully');
        return redirect()->route('jobProviders');
    }
    public function jobseekersList(){
        $jobSeekersList=User::where('user_type','jobSeeker')->where('status', 'active')->get();
        $count=User::where('user_type','jobSeeker')->count();
// return $count;
        return view('frontend.superAdmin.jobSeekersList',compact(['jobSeekersList','count']));
    }

    public function currentJobs(){
        $currentJobs=Job::where('status','active')->get();
// dd($currentJobs);
        return view('frontend.superAdmin.currentJobs',compact('currentJobs'));
    }




    public function editJobForm($id)
    {
        $post = Job::find($id);
        return view('frontend.superAdmin.editJobForm', compact('post', 'id'));
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
        return redirect()->route('currentJobs');
    }
    public function deleteJob($id)
    {
        $post = Job::find($id);
        $post->status = 'inactive';
        $post->save();
        session()->flash('successMessage', 'Job Deleted Successfully');
        return redirect()->route('currentJobs');
    }

}
