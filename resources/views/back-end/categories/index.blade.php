
@extends('back-end.layout.app')

@section('title',$modelDesc)

@section('content')
    @include('back-end.layout.header',['nav_title'=>$modelDesc])

    <h2 class="heading"></h2>


    @component('back-end.shared.table',['modelName'=>$modelName,'modelDesc'=>$modelDesc])
    @slot('addButton')
        @include('back-end.shared.buttons.create',['modelPluralName'=>$modelPluralName,'modelSingleName'=>$modelName])
        @endslot
        @slot('table')

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
                            Options
                        </th>
                        </thead>
                        <tbody>
                        @foreach($rows as $row)
                            <tr>
                                <td>{{$row->id}}</td>
                                <td>{{$row->name}}</td>
                                <td class="td-actions">
                                        @include('back-end.shared.buttons.edit',['pluralModel'=>$modelPluralName,'row'=>$row])
                                        @include('back-end.shared.buttons.delete',['pluralModel'=>$modelPluralName,'row'=>$row])

                                </td>
                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>


        @endslot



    @endcomponent
@endsection


