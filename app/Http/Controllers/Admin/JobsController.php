<?php

namespace App\Http\Controllers\Admin;

use Auth;
use View;
use Lang;
use Request;
use Response;
use Validator;
use App\Models\Job;

class JobsController extends Controller
{
    /**
   * Index page for jobs
   * @return View
   */
    public function index()
    {
      return View::make('admin.job.index')->with('jobs', Job::all());
    }
    /**
     * Page for creating new job
     * @return View
     */
    public function create()
    {
        return View::make('admin.job.create');
    }
    /**
     * Method for handling jobs creation
     * @return  Redirect
     */
    public function postCreate()
    {
        $validator = Validator::make(Request::all(), [
          "title" => "required|min:2",
          "description" => "required",
          "email" => "required|email",
        ]);

        if ($validator->fails()) {
            return redirect("/job/create")->withErrors($validator->errors())
                                                     ->withInput();
        }

        $job = new Job();

        $job->title = Request::get('title');
        $job->description = Request::get('description');
        $job->email = Request::get('email');

        if ($job->save()) {
            return redirect("/job/edit/$job->id")->with('successfulMessages',[Lang::get('errors.successfullyJob')]);
        } else {
            return redirect("/job/create")->withErrors([Lang::get('errors.somethingWrong')]);
        }
    }
    /**
     * [edit description]
     * @param  int $id
     * @return mixed   If job is null, Response is returned else View is returned
     */
    public function edit(int $id)
    {
        $job = Job::find($id);

        if (is_null($job)) {
            return redirect("/job");
        }

        return View::make('admin.job.edit')->with('jobs', $job);
    }
    /**
     * Editing jobs information
     * @param  int $id
     * @return Response edit Users name or get an error
     */
      public function postEdit(int $id)
      {
          $validator = Validator::make(Request::all(), [
              "title" => "required|min:2",
              "description" => "required",
              "email" => "required|email",
        ]);

        if ($validator->fails()) {
            return redirect("/job/edit/$id")->withErrors($validator->errors())
                                                       ->withInput();
        }

          $job = Job::find($id);

          $job->title = Request::get('title');
          $job->description = Request::get('description');
          $job->email = Request::get('email');

          if ($job->save()) {
              return redirect("/job/edit/$job->id")->with('successfulMessages',[Lang::get('errors.successfullyJob')]);
          } else {
              return redirect("/job/edit/$job->id")->withErrors([Lang::get('errors.somethingWrong')]);
          }
      }
    /**
     * Delete job
     * @param  int $id
     * @return Response Remove User or get an error
     */
    public function delete(int $id)
    {
        $job = Job::find($id);

        if ($job->delete()) {
            return redirect("/job");
        } else {
            return redirect("/job")->withErrors([Lang::get('errors.somethingWrong')]);
        }
    }
}
