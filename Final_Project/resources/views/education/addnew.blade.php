@extends('layouts.master')
@section('title', 'Academic Qualification View ')
@section('eduactive', 'active')
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
                <li class="active">Academic Qualification</li>
            </ul>
        </div>
    </div>
    <!-- /page header -->

    <!-- Content area -->
    <div class="content">
        <div class="row">
            <div class="col-md-8">

                <!-- Basic layout-->
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h2 class="panel-title">Academic Qualification
                                    <span class="label label-success position-right" style="font-size: 14px">
                                        Message
                                    </span>
                        </h2>
                        <div class="heading-elements">
                            <span class="label label-primary heading-text"><a href="/education" style="color: black;font-size: 14px" >Academic Qualification</a></span>
                        </div>
                    </div>
                    <form action="" class="form-horizontal" method="post">
                        <div class="panel-body">
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Course Name :</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" placeholder="Your Course name" name="title"required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-3 control-label">Institute Name :</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" placeholder="Your institute name" name="institute"required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-3 control-label">Result :</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="result" placeholder="Your result"required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-3 control-label">Passing Year :</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="passing_year" placeholder="Passing Year"required/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-3 control-label">Subject :</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="main_subject" placeholder="Your subject"required/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-3 control-label">Board :</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="education_board" placeholder="Your Board name"required/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-3 control-label">Course Duration :</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="course_duration" placeholder="Your course duration"required/>
                                </div>
                            </div>

                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">ADD<i class="icon-arrow-right14 position-right"></i></button>
                            </div>
                        </div>
                </div>
                <input type="hidden" name="id" value="">
                </form>
                <!-- /basic layout -->
            </div>
        </div>
    </div>
    <!-- /main charts -->

@endsection



