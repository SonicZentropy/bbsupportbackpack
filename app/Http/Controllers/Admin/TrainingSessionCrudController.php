<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
//use Illuminate\Http\Request;
use App\Http\Requests\TrainingSessionCrudRequest as StoreRequest;
use App\Http\Requests\TrainingSessionCrudRequest as UpdateRequest;
//use App\Http\Controllers\Controller;

class TrainingSessionCrudController extends CrudController
{
    public function setup() {
        $this->crud->setModel("App\Models\TrainingSession");
        $this->crud->setRoute("admin/session");
        $this->crud->setEntityNameStrings('session', 'sessions');


        //$this->crud->addColumn([
        //    'name' => 'first_session',
        //    'label' => 'First Session',
        //]);
//
        //$this->crud->addColumn([
        //    'name' => 'second_session',
        //    'label' => 'Second Session'
        //]);

        $this->crud->setFromDb();

        //$this->crud->addField([
        //    //'first_session' => 'first_session',
        //    'name' => "first_session",
        //    'label' => "First Session"
        //], 'both');
    }

    public function store(StoreRequest $request) {
        return parent::storeCrud();
    }

    public function update(UpdateRequest $request) {
        return parent::updateCrud();
    }
}
