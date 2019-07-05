<?php

namespace App\Http\Controllers\BackEnd;


use App\Http\Requests\BackEnd\Categories\StoreRequest;
use App\Models\Category;

class CategoriesController extends BackEndController
{
    //

    public function __construct(Category $model)
    {
        parent::__construct($model);

    }


    public function store(StoreRequest $request){
        $this->model->create($request->all());


        return redirect()->route('categories.index');
    }


    public function update($id,StoreRequest $request){
        $row = $this->model->findOrFail($id);

        $row->update($request->all());
        return redirect()->route('categories.index');
    }


}
