
<div class="row">
    <div class="col-md-6">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{isset($row)?$row->name : ''}}" >
            @error('name')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Meta Keywords</label>
            <input type="text" class="form-control  @error('meta_key') is-invalid @enderror " name="meta_key" value=" {{isset($row)?$row->meta_key : ''}} " >
            @error('meta_key')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Meta Description</label>
            <textarea name="meta_desc" id="" cols="30" rows="10" class="form-control  @error('password') is-invalid @enderror ">{{isset($row)?$row->meta_desc : ''}}</textarea>
            @error('meta_desc')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>

    </div>
</div>
