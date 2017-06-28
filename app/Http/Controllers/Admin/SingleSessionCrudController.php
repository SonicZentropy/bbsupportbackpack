<?php
namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\TrainingRegistrationRequest as StoreRequest;
use App\Http\Requests\TrainingRegistrationRequest as UpdateRequest;

class SingleSessionCrudController extends TrainingRegistrationCrudController
{
    public function setup()
    {
        parent::setup();

        $training_session_id = \Route::current()->parameter('training_session_id');

        $this->crud->setEditView('admin/editSingleRegistration');

        $this->crud->setRoute("admin/session/".$training_session_id."/registrations");

        $this->crud->addClause('where', 'training_session_id', '=', $training_session_id);
    }

    public function store(StoreRequest $request) {
        return parent::storeCrud();
    }

    public function update(UpdateRequest $request) {
        return parent::updateCrud();
    }
}
//
//namespace App\Http\Controllers\Admin;
//
//use Backpack\CRUD\app\Http\Controllers\CrudController;
////use Illuminate\Http\Request;
//use App\Http\Requests\TrainingSessionCrudRequest as StoreRequest;
//use App\Http\Requests\TrainingSessionCrudRequest as UpdateRequest;
////use App\Http\Controllers\Controller;
//
//class SingleSessionCrudController extends CrudController
//{
//    public function setup() {
//        $this->crud->setModel("App\Models\TrainingSession");
//        $this->crud->setRoute("admin/session");
//        $this->crud->setEntityNameStrings('session', 'sessions');
//
//        $this->crud->setCreateView('admin/createSession');
//
//        $this->crud->addColumn([
//            'name' => 'first_session',
//            'label' => 'First Session',
//        ]);
//
//        $this->crud->addColumn([
//            'name' => 'second_session',
//            'label' => 'Second Session'
//        ]);
//
//        $this->crud->addColumn([
//            'name' => 'training_type',
//            'label' => 'Training Type'
//        ]);
//
//        $this->crud->addColumn([
//            'name' => 'number_enrolled',
//            'label' => 'Enrolled Count'
//        ]);
//
//        $this->crud->addColumn([
//            'name' => 'title',
//            'label' => 'Training Title'
//        ]);
//
//        //$this->crud->setFromDb();
//
//        $this->crud->addField([
//            //'first_session' => 'first_session',
//            'name' => "first_session",
//            'label' => "First Session",
//            'type' => 'datetime_picker',
//            'datetime_picker_options' => [
//                'format' => 'DD/MM/YYYY HH:mm',
//            ]
//        ], 'both');
//
//        $this->crud->addField([
//            //'first_session' => 'first_session',
//            'name' => "second_session",
//            'label' => "Second Session",
//            'type' => 'datetime_picker',
//            'datetime_picker_options' => [
//                'format' => 'DD/MM/YYYY HH:mm',
//                'language' => 'en'
//            ]
//        ], 'both');
//    }
//
//    public function store(StoreRequest $request) {
//        return parent::storeCrud();
//    }
//
//    public function update(UpdateRequest $request) {
//        return parent::updateCrud();
//    }
//}
