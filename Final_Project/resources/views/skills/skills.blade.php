@extends('layouts.master')
@section('title', 'Skills View ')
@section('skillactive', 'active')
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
            <div class="col-md-12">

                <!-- Basic layout-->
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h2 class="panel-title">Skills Table
                <span class="label label-success position-right" style="font-size: 14px">
                    Message
                </span>
                        </h2>
                        <div class="heading-elements">
     <span class="label label-primary heading-text"><a href="/skills/addnew" style="color: black;font-size: 14px" >Add New Skill</a></span>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Level</th>
                                <th>Experience</th>
                                <th>Experience Area</th>
                                <th>EDIT/DELETE</th>
                            </tr>
                            </thead>
                            <tbody>

                            <tr>
                                <td>Title</td>
                                <td>Description</td>
                                <td>10%</td>
                                <td>Experience</td>
                                <td>Experience Area</td>
                                <td>
                                    <a href="" class="btn btn-success">Edit</a>
                                    <a href="" onclick="return confirm('Do You Want To Delete?')" class="btn btn-danger">DELETE</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /basic layout -->
                </div>
                <!-- /main charts -->

            </div>
        </div>
    </div>
@endsection