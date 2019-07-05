

@extends('back-end.layout.app')

@section('title',$modelDesc)

@section('content')
    @include('back-end.layout.header',['nav_title'=>$modelDesc])

    <h2 class="heading"> {{$modelDesc}}</h2>

    @component('back-end.shared.edit',['modelDesc'=>$modelDesc,'formDesc'=>$formDesc])
       @slot('editForm')
           <form action="{{route($modelPluralName.'.update',$row->id)}}" method="post">
               @csrf
               @method('PATCH')
               @include('back-end.'.$modelPluralName.'.form')
               <button type="submit" class="btn btn-primary pull-right">Update {{$modelSingleName}}</button>

           @endslot

    @endcomponent

@endsection




