@extends('layouts.master')
@section('title', 'Add New Skills')
@section('skilladdactive', 'active')
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
                <li class="active">My Skills</li>
            </ul>
        </div>
    </div>
    <!-- /page header -->


    <!-- Content area -->
    <div class="content">
        <div class="row">
            <div class="col-md-8">

                <!-- Basic layout-->
                <form action="skill_store.php" method="post" class="form-horizontal">
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h2 class="panel-title">Add New
                                    <span class="label label-success position-right" style="font-size: 14px">
                                        Message
                                    </span>
                            </h2>
                            <div class="heading-elements">
                                <span class="label label-primary heading-text"><a href="/skills" style="color: black;font-size: 14px" >My Skills</a></span>
                            </div>
                        </div>

                        <div class="panel-body">
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Title:</label>
                                <div class="col-lg-9">
                                    <input type="text" name="title" class="form-control" placeholder="Write your title ">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-3 control-label"> Description:</label>
                                <div class="col-lg-9">
                                    <textarea rows="5" cols="5" name="description" class="form-control" placeholder="Enter your description here"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-3 control-label"> Level:</label>
                                <div class="col-lg-9">
                                    <input type="number" class="form-control" name="level" placeholder="Level"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-3 control-label">Experience:</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="experience" placeholder="Experience"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-3 control-label">Experience Area:</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="experience_area" placeholder="Experience Area"/>
                                </div>
                            </div>


                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">ADD<i class="icon-arrow-right14 position-right"></i></button>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="id" value=""/>
                </form>
                <!-- /basic layout -->
            </div>
            <!-- /main charts -->
        </div>
    </div>
@endsection