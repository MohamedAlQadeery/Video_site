
@extends('back-end.layout.app')

@section('title',$modelDesc)

@section('content')
    @include('back-end.layout.header',['nav_title'=>$modelDesc])

    <h2 class="heading"> {{$modelDesc}}</h2>

    @component('back-end.shared.create',['modelDesc'=>$modelDesc,'formDesc'=>$formDesc])
       @slot('createForm')
           <form action="{{route($modelPluralName.'.store')}}" method="post">
               @csrf
               @include('back-end.'.$modelPluralName.'.form')
               <button type="submit" class="btn btn-primary pull-right">Create {{$modelSingleName}}</button>
               <div class="clearfix"></div>
           </form>

           @endslot

    @endcomponent


@endsection




