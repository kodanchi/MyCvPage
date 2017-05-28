@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @include('errors.errors')
            <div class="panel panel-default">

                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    {!! Form::open(['url' => '/mycvs', 'method' => 'post']) !!}


                        <div class="row">

                            <div class="col-md-12">
                                <!--- Cv Name Field --->
                                <div class="form-group">
                                    {!! Form::label('cv_name', 'Cv Name:') !!}
                                    {!! Form::text('cv_name', null, ['class' => 'form-control']) !!}
                                </div>

                                <div class="col-md-4">
                                    <!--- theme Field --->
                                    <div class="form-group">
                                        {!! Form::label('theme_id', 'theme:') !!}
                                        {!! Form::select('theme_id', $themes , null , ['class' => 'form-control']) !!}

                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="row">

                            <div class="col-md-12">
                                <!--- Bio Field --->
                                <div class="form-group">
                                    {!! Form::label('bio', 'Bio:') !!}
                                    {!! Form::textarea('bio', null, ['class' => 'form-control']) !!}
                                </div>
                            </div>

                        </div>



                    <hr>
                    <div class="row">

                        <div class="col-md-6">
                            {!! Form::submit('Register', ['class' => 'form-control btn btn-success']) !!}
                        </div>
                        <div class="col-md-6">
                            <a href="{{url('/')}}" class="form-control btn btn-default">Cancel</a>
                        </div>
                    </div>

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
