@extends("admin.includes.master")

@section('title', Lang::get('titles.job.edit'))

@section('content')

<form class="form-horizontal" method="POST" action="{{url("/job/edit/$jobs->id")}}">
  {{csrf_field()}}

 <div class="x_content">
     <h2>{{Lang::get('titles.job.edit')}}</h2>
 </br>
  <div class="form-group">
    <label class="col-md-1">{{Lang::get('titles.job.title')}}<span class="required"> *</span>
    </label>
   <div class="col-md-4">
      <input name="title" class="form-control col-md-4 form-group" required="required" type="text" value="{{$jobs->title}}">
    </div>
  </div>
  <div class="form-group">
    <label class="col-md-1">{{Lang::get('titles.job.description')}}<span class="required"> *</span>
    </label>
    <div class="col-md-4">
      <input name="description" class="form-control form-group" required="required" type="text" value="{{$jobs->description}}"/>
    </div>
  </div>
  <div class="form-group">
    <label class="col-md-1">{{Lang::get('titles.job.email')}}<span class="required"> *</span>
    </label>
    <div class="col-md-4">
      <input name="email" class="form-control form-group" required="required" type="text" value="{{$jobs->email}}"/>
    </div>
  </div>

  <div class="col-md-2">
      <button type="submit" class="btn btn-primary btn-md col-md-6">{{Lang::get('titles.submit')}}</button>
  </div>
 </div>
</form>

@endsection
