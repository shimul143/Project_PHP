@extends('layouts.master')
@section('title', 'Add User ')
@section('content')

    <div class="page-header">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-left52 position-left"></i> <span
                            class="text-semibold">Home</span> - Dashboard</h4>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="/Admin"><i class="icon-home2 position-left"></i> Home</a></li>
                <li class="active">Add New User</li>
            </ul>
        </div>
    </div>
    <!-- /page header -->

    <!-- Content area -->
    <div class="content">
        <div class="row">
            <div class="col-md-8">

                <!-- Basic layout-->
                {!! Form::open(['url' => '','method' => 'POST']) !!}
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h2 class="panel-title">Add New
                                <span class="label label-success position-right" style="font-size: 14px">Message</span>
                            </h2>
                            <div class="heading-elements">
                                <span class="label label-primary heading-text"><a href="/" style="color: black;font-size: 14px" >User List</a></span>
                            </div>
                        </div>

                        <div class="panel-body">
                            <div class="form-group">
                                <label class="col-lg-3 control-label">  {!! Form::label('User Name : ') !!}</label>
                                <div class="col-lg-9">
                                   {!! Form::text('username', null,
                                        array('required',
                                              'class'=>'form-control',
                                              'placeholder'=>'Your Username')) !!}
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-3 control-label">Email :</label>
                                <div class="col-lg-9">
                                    <input type="text" name="email"required class="form-control" placeholder="Email">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-3 control-label">Password : </label>
                                <div class="col-lg-9">
                                    <input type="password" name="password"required class="form-control" >

                                </div>
                            </div>

                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">ADD<i class="icon-arrow-right14 position-right"></i></button>
                            </div>
                        </div>
                    </div>
                    {{--<input type="hidden" name="id" value="">--}}
                {!! Form::close() !!}
                <!-- /basic layout -->
            </div>
            <!-- /main charts -->
        </div>
    </div>

@endsection