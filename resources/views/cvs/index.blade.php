@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            @include('errors.errors')
            <div class="panel panel-default">

                <div class="panel-heading">My Cvs</div>
                <div class="panel-body">
                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Theme</th>
                                <th>Last Update</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($myCvs as $myCv)
                            <tr>
                                <td>
                                    <div class="row">
                                        <div class="col-md-12">{{$myCv->cv_name}}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3"><a href="{{url('')}}">Edit</a></div>
                                        <div class="col-md-3"><a href="{{url('/mycvs/'.$myCv->cv_id.'/preview')}}">Preview</a></div>
                                    </div>
                                </td>
                                <td>{{$myCv->theme_id}}</td>
                                <td>{{$myCv->updated_at}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
