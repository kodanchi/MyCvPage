@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @include('errors.errors')
            <div class="panel panel-default">

                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    {!! Form::open(['route' => 'register', 'method' => 'post']) !!}


                        <div class="row">
                            <div class="col-md-4">
                                <!--- First Name Field --->
                                <div class="form-group">
                                    {!! Form::label('fname', 'First Name:') !!}
                                    {!! Form::text('fname', null, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                            <div class="col-md-4">
                                <!--- Middle Name Field --->
                                <div class="form-group">
                                    {!! Form::label('mname', 'Middle Name:') !!}
                                    {!! Form::text('mname', null, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                            <div class="col-md-4">
                                <!--- Last Name Field --->
                                <div class="form-group">
                                    {!! Form::label('lname', 'Last Name:') !!}
                                    {!! Form::text('lname', null, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <!--- username Field --->
                                <div class="form-group">
                                    {!! Form::label('username', 'username:') !!}
                                    {!! Form::text('username', null, ['class' => 'form-control']) !!}
                                </div>

                            </div>

                            <div class="col-md-6">
                                <!--- Birth Date Field --->
                                <div class="form-group">
                                    {!! Form::label('birth_date', 'Birth Date:') !!}
                                    {!! Form::date('birth_date', null, ['class' => 'form-control']) !!}
                                </div>
                            </div>

                        </div>


                    <div class="row">
                        <div class="col-md-6">
                            <!--- Email Field --->
                            <div class="form-group">
                                {!! Form::label('email', 'Email:') !!}
                                {!! Form::email('email', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="col-md-6">

                            <!--- Phone Field --->
                            <div class="form-group">
                                {!! Form::label('phone', 'Phone:') !!}
                                {!! Form::text('phone', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <!--- Webpage Field --->
                            <div class="form-group">
                                {!! Form::label('web_page', 'Webpage:') !!}
                                {!! Form::text('web_page', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="col-md-6">
                            <!--- LinkedIn Field --->
                            <div class="form-group">
                                {!! Form::label('linkedin', 'LinkedIn:') !!}
                                {!! Form::text('linkedin', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>


                    <div class="row">

                        <div class="col-md-6">
                            <!--- Twittr Field --->
                            <div class="form-group">
                                {!! Form::label('twittr', 'Twittr:') !!}
                                {!! Form::text('twittr', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!--- Facebook Field --->
                            <div class="form-group">
                                {!! Form::label('facebook', 'Facebook:') !!}
                                {!! Form::text('facebook', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <!--- Password Field --->
                            <div class="form-group">
                                {!! Form::label('password', 'Password:') !!}
                                {!! Form::password('password', ['class' => 'form-control']) !!}
                            </div>

                        </div>
                        <div class="col-md-6">
                            <!--- Confirm Password Field --->
                            <div class="form-group">
                                {!! Form::label('password_confirmation', 'Confirm Password:') !!}
                                {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
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
