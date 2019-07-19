@extends('layouts.master')
@section('title', 'About Section')
@section('aboutactive', 'active')
@section('content')

<!-- Page header -->
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
            <li class="active">About</li>
        </ul>
    </div>
</div>
<!-- /page header -->


<!-- Content area -->
<div class="content">

    <div class="row">
        <div class="col-md-8">

            <!-- Basic layout-->
            <form action="" class="form-horizontal" method="post">
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h2 class="panel-title"> Update Your Data <span class="text-success" >Message</span></h2>
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
                                <input type="text" class="form-control" value="" name="title"required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Phone No:</label>
                            <div class="col-lg-9">
                                <input type="number" class="form-control" value="" name="phone"required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Your Description:</label>
                            <div class="col-lg-9">
                                <textarea rows="5" cols="5" class="form-control" name="bio"required></textarea>
                            </div>
                        </div>
                        <span></span>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Update<i class="icon-arrow-right14 position-right"></i></button>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="id" value="">
                <input type="hidden" name="postid" value="">
            </form>
            <!-- /basic layout -->
        </div>
    </div>

<!-- /content area -->
</div>

@endsection