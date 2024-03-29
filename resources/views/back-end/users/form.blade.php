
<div class="row">
    <div class="col-md-4">
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
    <div class="col-md-4">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Email</label>
            <input type="text" class="form-control  @error('email') is-invalid @enderror " name="email" value=" {{isset($row)?$row->email : ''}} " >
            @error('email')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Password</label>
            <input type="text" class="form-control  @error('password') is-invalid @enderror " name="password">
            @error('password')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>

    </div>
</div>
