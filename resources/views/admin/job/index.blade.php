@extends("admin.includes.master")

@section('title', Lang::get('titles.job.title'))

@section('content')

<div class="col-xs-12">
  <div class="x_panel">
    <button style="float: right;" class="btn btn-primary btn-lg" onClick="window.open('{{url("job/create")}}', '_self');">+ {{Lang::get('titles.add')}}</button>
    <div class="x_title">
      <h2>{{Lang::get('titles.job.list')}}</h2>
      </br>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">

      <table class="table">
        <thead>
          <tr>
            <th style="text-align: left; width: 5%;">#</th>
            <th style="text-align: left; width: 20%;">{{Lang::get('titles.job.title')}}</th>
            <th style="text-align: left; width: 20%;">{{Lang::get('titles.job.description')}}</th>
            <th style="text-align: left; width: 20%;">{{Lang::get('titles.job.email')}}</th>
            <th style="text-align: center; width: 5%;">{{Lang::get('titles.edit')}}</th>
            <th style="text-align: center; width: 5%;">{{Lang::get('titles.delete')}}</th>
          </tr>
        </thead>
        <tbody>
          @foreach($jobs as $index => $job)
          <tr>
          <th style="text-align: left; width: 5%;" scope="row">{{$index+1}}</th>
            <td style="text-align: left; width: 30%;">{{$job->title}}</td>
            <td style="text-align: left; width: 30%;">{{$job->description}}</td>
            <td style="text-align: left; width: 50%;">{{$job->email}}</td>
            <td style="text-align: center; width: 5%;"><a href="{{url("job/edit/$job->id")}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
            <td style="text-align: center; width: 5%;"><a onclick="return (confirm('Are you sure?'))" href="{{url("job/delete/$job->id")}}"><i class="fa fa-times" aria-hidden="true"></i></a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
