@extends('layouts.SMS-APP')
@section('content')
<div class="container-fluid">
    <div class="row clearfix">
        <div class="col-md-12">
            <div class="card">
                 <div class="header">
                    <div class="row">
                        <div class="col-lg-6" style="float: left;">
                            <h2>Add {{ $title }}</h2>
                        </div>
                        <div class="col-lg-6" style="float: right;">
                            <a href="{{ route('grade') }}" class="btn btn-primary  pull-right"> <i class="fa fa fa-list-alt"></i> {{ $title }} List</a>
                        </div>
                    </div>
                </div>
                <div class="body">
                    @include('includes.messages')
                     <form  method="post" action="{{ route('submitGradeFrom') }}" validate enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                               <div class="col-md-2">
                                    <p>Grade Name * </p>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="grade_name" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-12">
                               <div class="col-md-2">
                                    <p>Grade Point * </p>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="grade_point" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-12">
                               <div class="col-md-2">
                                    <p>Mark From </p>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="mark" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-12">
                               <div class="col-md-2">
                                    <p>Mark Upto </p>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="min_mark" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-12">
                               <div class="col-md-2">
                                    <p>Note </p>
                                </div>
                                <div class="col-md-6">
                                    <textarea type="text" name="grade_note" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="col-md-12">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-default">Add Grade</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection