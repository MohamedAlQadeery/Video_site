<form action="{{route($pluralModel.'.destroy',$row->id)}}" method="post">
    @csrf
    @method('delete')
    <button type="submit" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Remove {{$modelName}}">
        <i class="material-icons">delete</i>
    </button>
</form>
