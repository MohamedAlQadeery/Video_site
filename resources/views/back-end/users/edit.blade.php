
@php
    $modelName = 'User';
    $pageTitle ='Update '.$modelName;
    $pageDesc ='Fill all the fields';
@endphp
@extends('back-end.layout.app')

@section('title',$pageTitle)

@section('content')
    @include('back-end.layout.header',['nav_title'=>$pageTitle])

    <h2 class="heading"> {{$modelName}}</h2>

    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">{{$pageTitle}}</h4>
                    <p class="card-category">{{$pageDesc}}</p>
                </div>
                <div class="card-body">
                    <form action="{{route('users.update',$row->id)}}" method="post">
                        @csrf
                        @method('PATCH')
                        @include('back-end.users.form')
                        <button type="submit" class="btn btn-primary pull-right">Update</button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>

    </div>


@endsection




