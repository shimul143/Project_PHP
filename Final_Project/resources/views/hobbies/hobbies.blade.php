@extends('layouts.master')

@section('title', 'Hobbies Section')
@section('hobbieactive', 'active')

@section('content')

<!-- Main content -->
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
                <li class="active"> My Hobbies</li>
            </ul>
        </div>
    </div>
    <!-- /page header -->


    <!-- Content area -->
    <div class="content">
        <div class="row">
            <div class="col-md-12">

                <!-- Basic layout-->

                <h2>Hobbies Table</h2>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>EDIT/DELETE</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Sports</td>
                            <td> Cricket, Football </td>
                            <td><img style="width: 40px;height:40px" src="/assets/upload_image/"
                                     alt="" class="img-responsive"/></td>
                            <td>
                                <a href="" class="btn btn-success">Edit</a>
                                <a href="" class="btn btn-danger">DELETE</a>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
        <!-- /main charts -->

 @endsection