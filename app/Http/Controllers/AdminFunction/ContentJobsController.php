<?php

namespace App\Http\Controllers\AdminFunction;


use App\Models\ContentJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ContentJobsController extends Controller
{
    public function index(){

        $job1 = ContentJobs::where('id', '=', 1)->get();
        $job2 = ContentJobs::where('id', '=', 2)->get();
        $job3 = ContentJobs::where('id', '=', 3)->get();
        $job4 = ContentJobs::where('id', '=', 4)->get();
        $job5 = ContentJobs::where('id', '=', 5)->get();
        $job6 = ContentJobs::where('id', '=', 6)->get();
        $job7 = ContentJobs::where('id', '=', 7)->get();
        $job8 = ContentJobs::where('id', '=', 8)->get();
        $job9 = ContentJobs::where('id', '=', 9)->get();
        $job10 = ContentJobs::where('id', '=', 10)->get();



        return view('admin.contentjobs.contentjobs',compact(
            'job1', 'job2', 'job3', 'job4', 'job5', 'job6', 'job7', 'job8', 'job9', 'job10'));
    }

    public function update(Request $request){

        $header = $request->header;

        if($header){
           $post = ContentJobs::where('id', '=', 1)->update([
                'title' => $header
            ]);
        }else{
            $post = ContentJobs::where('id', '=', 1)->update([
                'title' => " "
            ]);
        }

        if($post){
            return redirect()->route('contentjobs')->with('ok', 'ok');
        }else{
            return redirect()->route('contentjobs')->with('error');
        }
    }


    public function update1(Request $request){

        
        $job = $request->job1;
        $jobfunction = $request->jobfunction1;
        if($job){
            ContentJobs::where('id', '=', 1)->update([
               'job' => $job
            ]);
        }else{
            ContentJobs::where('id', '=', 1)->update([
                'job' => " "
            ]);
        }
        if($jobfunction){
          $posts = ContentJobs::where('id', '=', 1)->update([
                'jobfunction' => $jobfunction
            ]);
        }else{
            $posts =  ContentJobs::where('id', '=', 1)->update([
                'jobfunction' => " "
            ]);
        }
        if($posts){
            return redirect()->route('contentjobs')->with('ok', 'ok');
        }else{
            return redirect()->route('contentjobs')->with('error');
        }

    }

    public function update2(Request $request){

        $job = $request->job2;
        $jobfunction = $request->jobfunction2;
        if($job){
            ContentJobs::where('id', '=', 2)->update([
                'job' => $job
            ]);
        }else{
            ContentJobs::where('id', '=', 2)->update([
                'job' => " "
            ]);
        }
        if($jobfunction){
            $posts = ContentJobs::where('id', '=', 2)->update([
                'jobfunction' => $jobfunction
            ]);
        }else{
            $posts =  ContentJobs::where('id', '=', 2)->update([
                'jobfunction' => " "
            ]);
        }
        if($posts){
            return redirect()->route('contentjobs')->with('ok', 'ok');
        }else{
            return redirect()->route('contentjobs')->with('error');
        }

    }

    public function update3(Request $request){

        $job = $request->job3;
        $jobfunction = $request->jobfunction3;
        if($job){
            ContentJobs::where('id', '=', 3)->update([
                'job' => $job
            ]);
        }else{
            ContentJobs::where('id', '=', 3)->update([
                'job' => " "
            ]);
        }
        if($jobfunction){
            $posts = ContentJobs::where('id', '=', 3)->update([
                'jobfunction' => $jobfunction
            ]);
        }else{
            $posts =  ContentJobs::where('id', '=', 3)->update([
                'jobfunction' => " "
            ]);
        }
        if($posts){
            return redirect()->route('contentjobs')->with('ok', 'ok');
        }else{
            return redirect()->route('contentjobs')->with('error');
        }

    }

    public function update4(Request $request){

        $job = $request->job4;
        $jobfunction = $request->jobfunction4;
        if($job){
            ContentJobs::where('id', '=', 4)->update([
                'job' => $job
            ]);
        }else{
            ContentJobs::where('id', '=', 4)->update([
                'job' => " "
            ]);
        }
        if($jobfunction){
            $posts = ContentJobs::where('id', '=', 4)->update([
                'jobfunction' => $jobfunction
            ]);
        }else{
            $posts =  ContentJobs::where('id', '=', 4)->update([
                'jobfunction' => " "
            ]);
        }
        if($posts){
            return redirect()->route('contentjobs')->with('ok', 'ok');
        }else{
            return redirect()->route('contentjobs')->with('error');
        }

    }


    public function update5(Request $request){

        $job = $request->job5;
        $jobfunction = $request->jobfunction5;
        if($job){
            ContentJobs::where('id', '=', 5)->update([
                'job' => $job
            ]);
        }else{
            ContentJobs::where('id', '=', 5)->update([
                'job' => " "
            ]);
        }
        if($jobfunction){
            $posts = ContentJobs::where('id', '=', 5)->update([
                'jobfunction' => $jobfunction
            ]);
        }else{
            $posts =  ContentJobs::where('id', '=', 5)->update([
                'jobfunction' => " "
            ]);
        }
        if($posts){
            return redirect()->route('contentjobs')->with('ok', 'ok');
        }else{
            return redirect()->route('contentjobs')->with('error');
        }
    }

    public function update6(Request $request){

        $job = $request->job6;
        $jobfunction = $request->jobfunction6;
        if($job){
            ContentJobs::where('id', '=', 6)->update([
                'job' => $job
            ]);
        }else{
            ContentJobs::where('id', '=', 6)->update([
                'job' => " "
            ]);
        }
        if($jobfunction){
            $posts = ContentJobs::where('id', '=', 6)->update([
                'jobfunction' => $jobfunction
            ]);
        }else{
            $posts =  ContentJobs::where('id', '=', 6)->update([
                'jobfunction' => " "
            ]);
        }
        if($posts){
            return redirect()->route('contentjobs')->with('ok', 'ok');
        }else{
            return redirect()->route('contentjobs')->with('error');
        }
    }


    public function update7(Request $request){

        $job = $request->job7;
        $jobfunction = $request->jobfunction7;
        if($job){
            ContentJobs::where('id', '=', 7)->update([
                'job' => $job
            ]);
        }else{
            ContentJobs::where('id', '=', 7)->update([
                'job' => " "
            ]);
        }
        if($jobfunction){
            $posts = ContentJobs::where('id', '=', 7)->update([
                'jobfunction' => $jobfunction
            ]);
        }else{
            $posts =  ContentJobs::where('id', '=', 7)->update([
                'jobfunction' => " "
            ]);
        }
        if($posts){
            return redirect()->route('contentjobs')->with('ok', 'ok');
        }else{
            return redirect()->route('contentjobs')->with('error');
        }
    }
}
