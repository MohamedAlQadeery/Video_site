<?php

namespace App\Http\Controllers\BackEnd;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BackEndController extends Controller
{
    //
    protected $model;

    protected $modelName;

    protected $modelPluralName;

    protected $modelDesc;


    public function __construct(Model $model)
    {
        $this->model = $model;

    }


    public function index()
    {
        $rows = $this->model->paginate(10);
        $modelName = $this->getSingleModelName();
        $modelPluralName = $this->getPluralModelName();
        $modelDesc = ucfirst($modelPluralName) . ' Control Page';

        return view('back-end.' . $this->getPluralModelName() . '.index',
            [
                'rows' => $rows,
                'modelName' => $modelName,
                'modelPluralName' => $modelPluralName,
                'modelDesc' => $modelDesc

            ]);
    }


    public function create()
    {

        $formDesc = 'fill all the fields ';
        $modelDesc = $this->getSingleModelName() . " Create Page";

        return view('back-end.' . $this->getPluralModelName() . '.create', [
            'modelSingleName' => $this->getSingleModelName(),
            'modelPluralName' => $this->getPluralModelName(),
            'formDesc' => $formDesc,
            'modelDesc' => $modelDesc
        ]);
    }


    public function edit($id)
    {
        $row = $this->model->findOrFail($id);
        $formDesc = 'fill all the fields ';
        $modelDesc = $this->getSingleModelName() . " Edit Page";
        return view('back-end.' . $this->getPluralModelName() . '.edit',
            [
                'row' => $row,
                'modelSingleName' => $this->getSingleModelName(),
                'modelPluralName'=>$this->getPluralModelName(),
                'modelDesc' => $modelDesc,
                'formDesc' => $formDesc
            ]);
    }

    public function show($id)
    {
        $row = $this->model->findOrFail($id);

        return view('back-end.' . $this->getPluralModelName() . '.show', ['row' => $row]);
    }

    public function destroy($id)
    {
        $row = $this->model->findOrFail($id)->delete();
        return redirect()->route($this->getPluralModelName() . '.index');
    }

    /*
     *
     * gets the pluarl of the model name and make it lower case
     */

    public function getPluralModelName()
    {

        return str_plural(strtolower($this->getSingleModelName()));
    }

    public function getSingleModelName()
    {
        return class_basename($this->model);
    }


}
