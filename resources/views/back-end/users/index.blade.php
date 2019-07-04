@php
    $modelName = 'Users';
    $pageTitle =$modelName.' Control';
    $pageDesc ='Users managment';
    @endphp
@extends('back-end.layout.app')

@section('title',$pageTitle)

@section('content')
    @include('back-end.layout.header',['nav_title'=>$pageTitle])

    <h2 class="heading"> {{$modelName}}</h2>


    <div class="row">
        <div class="col-md-12">
            <div class="card">

                <div class="card-header card-header-primary">
                 <div class="row">
                     <div class="col-md-8">
                         <h4 class="card-title ">{{$modelName}}</h4>
                         <p class="card-category">{{$pageDesc}}</p>
                     </div>
                     <div class="col-md-4 text-right">
                         <a href="{{route('users.create')}}" class="btn btn-white btn-round">Create<div class="ripple-container"></div></a>

                     </div>
                 </div>

                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                            <th>
                                ID
                            </th>
                            <th>
                                Name
                            </th>

                            <th>
                                Email
                            </th>

                            <th>
                                Options
                            </th>
                            </thead>
                            <tbody>
                                @foreach($rows as $row)
                                  <tr>
                                      <td>{{$row->id}}</td>
                                      <td>{{$row->name}}</td>
                                      <td>{{$row->email}}</td>
                                      <td class="td-actions">
                                          <a  href="{{route('users.edit',$row->id)}}" type="button" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Edit {{$modelName }}">
                                              <i class="material-icons">edit</i>
                                          </a>
                                          <form action="{{route('users.destroy',$row->id)}}" method="post">
                                              @csrf
                                              @method('delete')
                                              <button type="submit" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Remove {{$modelName}}">
                                                  <i class="material-icons">delete</i>
                                              </button>
                                          </form>

                                      </td>
                                  </tr>

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection


