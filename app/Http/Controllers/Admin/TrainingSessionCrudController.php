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

        $this->crud->setCreateView('admin/createSession');

        //$this->crud->addButtonFromView('line', 'session_registrations', 'session_registrations', 'beginning');

        $this->crud->addColumn([
            'name' => 'first_session',
            'label' => 'First Session',
            'type' => 'datetext'
        ]);

        $this->crud->addColumn([
            'name' => 'second_session',
            'label' => 'Second Session',
            'type' => 'datetext'
        ]);

        $this->crud->addColumn([
            'name' => 'training_type',
            'label' => 'Training Type'
        ]);

        $this->crud->addColumn([
            'name' => 'number_enrolled',
            'label' => 'Enrolled Count'
        ]);

        $this->crud->addColumn([
            'name' => 'title',
            'label' => 'Training Title'
        ]);

        //$this->crud->setFromDb();

        $this->crud->addField([
            'name' => 'title',
            'label' => 'Training Title'
        ]);

        $this->crud->addField([
            'name' => 'training_type',
            'label' => 'Training Type',
            'type' => 'enum'
        ]);

        $this->crud->addField([
            //'first_session' => 'first_session',
            'name' => "first_session",
            'label' => "First Session",
            'type' => 'datetime_picker',
            'datetime_picker_options' => [
                'format' => 'MM/DD/YYYY HH:mm',
            ]
        ], 'both');

        $this->crud->addField([
            //'first_session' => 'first_session',
            'name' => "second_session",
            'label' => "Second Session",
            'type' => 'datetime_picker',
            'datetime_picker_options' => [
                'format' => 'MM/DD/YYYY HH:mm',
                'language' => 'en'
            ]
        ], 'both');


    }

    public function store(StoreRequest $request) {
        return parent::storeCrud();
    }

    public function update(UpdateRequest $request) {
        return parent::updateCrud();
    }
}
