<?php

namespace App\Http\Controllers\BackEnd;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BackEndController extends Controller
{
    //
    protected $model;

    public function __construct(Model$model)
    {
     $this->model = $model;
    }


    public function index(){
        $rows = $this->model->paginate(10);

        return view('back-end.'.$this->getModelName().'.index',['rows'=>$rows]);
    }


    public function create(){
        return view('back-end.'.$this->getModelName().'.create');
    }

    public function getModelName(){

      return str_plural(strtolower(class_basename($this->model)));
    }

    public function edit($id){
        $row = $this->model->findOrFail($id);

        return view('back-end.'.$this->getModelName().'.edit',['row'=>$row]);
    }

    public function show($id){
        $row = $this->model->findOrFail($id);

        return view('back-end.'.$this->getModelName().'.show',['row'=>$row]);
    }

    public function destroy($id){
        $row = $this->model->findOrFail($id)->delete();
        return redirect()->route('users.index');
    }
}
