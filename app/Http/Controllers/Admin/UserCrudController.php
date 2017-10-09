<?php

namespace App\Http\Controllers\Admin;

use App\Mail\CompletionNoticeToIT;
use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\UserRequest as StoreRequest;
use App\Http\Requests\UserRequest as UpdateRequest;
use \Log;
use Illuminate\Support\Facades\Mail;

class UserCrudController extends CrudController
{
    public function setup()
    {

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\User');
        //$this->crud->setRoute(config('backpack.base.route_prefix') . '/user');
        $this->crud->setRoute("admin/user");
        $this->crud->setEntityNameStrings('user', 'users');

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */

        //$this->crud->setFromDb();
        $this->crud->addColumn([
            'name' => 'name',
            'label' => 'Name'
        ]);

        $this->crud->addColumn([
            'name' => 'personal_id',
            'label' => 'ID'
        ]);

        $this->crud->addColumn([
            'name' => 'email',
            'label' => 'Email'
        ]);

        $this->crud->addColumn([
            'name' => 'certified',
            'label' => 'Certified',
            'type' => 'check'
        ]);

        $this->crud->addField([
            'name' => 'name',
            'label' => 'Name'
        ]);

        $this->crud->addField([
            'name' => 'personal_id',
            'label' => 'ID'
        ]);

        $this->crud->addField([
            'name' => 'email',
            'label' => 'Email'
        ]);

        $this->crud->addField([
            'name' => 'certified',
            'label' => 'Certified',
            'type' => 'checkbox'
        ]);

        $this->crud->enableAjaxTable();

    }

    public function store(StoreRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::storeCrud();
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $update_request)
    {
        // your additional operations before save here
        //Send email to wayne if certified is added
        // Save >  $request->request.parameters["certified"] == 1
        $thisid = $update_request->request->get("id");
        $thisentry = $this->crud->getEntry($thisid);
        $wascert = $thisentry->getOriginal("certified");
        $changeto = $update_request->request->get("certified");
        if ($wascert == 0 && $changeto == 1) {
            Mail::to("jcwilliams@pulaskitech.edu")->send(new CompletionNoticeToIT($thisentry->getOriginal("name"), $thisentry->getOriginal("personal_id")));
            Log::debug("Send Cert Email");
        }
        $redirect_location = parent::updateCrud();
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
}
