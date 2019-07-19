@extends('layouts.master')
@section('title', 'CV Profile Settings')
@section('settingsactive', 'active')
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
                <li class="active">CV Profile Settings</li>
            </ul>
        </div>
    </div>
    <!-- /page header -->


    <!-- Content area -->
    <div class="content">
        <div class="row">
            <div class="col-md-8">

                <!-- Basic layout-->
                <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h5 class="panel-title">Update Your Data
                        <span class="label label-success position-right" style="font-size: 14px">Message</span>
                            </h5>
                            <div class="heading-elements">
                                <ul class="icons-list">
                                    <li><a data-action="collapse"></a></li>
                                    <li><a data-action="reload"></a></li>
                                    <li><a data-action="close"></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="panel-body">

                            <div class="form-group">
                                <label class="col-lg-3 control-label">Title:</label>
                                <div class="col-lg-9">
                                    <input type="text" name="title" value="" class="form-control" placeholder="Write your title">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-3 control-label">Full Name:</label>
                                <div class="col-lg-9">
                                    <input type="text" name="fullname" value="" class="form-control" placeholder="Write your full name">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-3 control-label">Your Description:</label>
                                <div class="col-lg-9">
                                    <textarea rows="5" cols="5" name="description" class="form-control" placeholder="Enter your message here"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-3 control-label">Address:</label>
                                <div class="col-lg-9">
                                    <input type="text" name="address" value="" class="form-control" placeholder="Write your Address">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-3 control-label">Uploaded Image : </label>
                                <div class="col-lg-9">
                                    <div class="thumbnail">
                                        <div class="thumb">
                                            <img style="width: 40px;height:40px" src="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-3 control-label">Upload Image:</label>
                                <div class="col-lg-9">
                                    <input type="file" name="user_image" accept="image/*">
                                </div>
                            </div>

                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Update<i class="icon-arrow-right14 position-right"></i></button>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="id" value="">
                </form>
                <!-- /basic layout -->
            </div>
            <!-- /main charts -->

        </div>
    </div>
@endsection