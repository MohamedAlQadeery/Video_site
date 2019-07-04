
<div class="row">
    <div class="col-md-4">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Name</label>
            <input type="text" class="form-control" name="name" value="{{isset($row)?$row->name : ''}}" required>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Email</label>
            <input type="text" class="form-control" name="email" value=" {{isset($row)?$row->email : ''}} " required>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Password</label>
            <input type="text" class="form-control" name="password">
        </div>
    </div>
</div>
