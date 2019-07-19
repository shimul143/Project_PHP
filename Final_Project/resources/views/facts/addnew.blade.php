@extends('layouts.master')
@section('title', 'Add New Facts ')
@section('factsaddactive', 'active')
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
                <li class="active">Facts</li>
            </ul>
        </div>
    </div>
    <!-- /page header -->

    <!-- Content area -->
    <div class="content">
        <div class="row">
            <div class="col-md-8">

                <!-- Basic layout-->
                <form action="" enctype="multipart/form-data" method="post" class="form-horizontal">
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h2 class="panel-title">Add New
                                    <span class="label label-success position-right" style="font-size: 14px">Message</span>
                            </h2>
                            <div class="heading-elements">
                                <span class="label label-primary heading-text"><a href="/facts" style="color: black;font-size: 14px" >My Facts</a></span>
                            </div>
                        </div>

                        <div class="panel-body">
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Title:</label>
                                <div class="col-lg-9">
                                    <input type="text" name="title" class="form-control" placeholder="Write your title"required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-3 control-label">Item:</label>
                                <div class="col-lg-9">
                                    <input type="text" name="no_of_items"required class="form-control" placeholder="no of item">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-3 control-label">Upload Image:</label>
                                <div class="col-lg-9">
                                    <input type="file" name="user_image" accept="image/*">
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
            <!-- /main charts -->
        </div>
    </div>

@endsection