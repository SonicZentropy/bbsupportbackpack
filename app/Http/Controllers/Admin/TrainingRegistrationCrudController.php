<?php

namespace App\Http\Controllers\Admin;

use App\Models\TrainingSession;
use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\TrainingRegistrationRequest as StoreRequest;
use App\Http\Requests\TrainingRegistrationRequest as UpdateRequest;

class TrainingRegistrationCrudController extends CrudController
{
    public function setup()
    {

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\TrainingRegistration');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/registrations');
        $this->crud->setEntityNameStrings('registration', 'registrations');
        $this->crud->setEditView('admin/editRegistration');

        //Filter for choosing particular sessions
        $this->crud->addFilter([
            'type' => 'dropdown',
            'name' => 'OfSession',
            'label' => 'By Session'
            ],
            function() { //values
                return TrainingSession::all()->pluck('first_session', 'id')->toArray();
            },
            function($value) {
                $this->crud->addClause('where', 'training_session_id', $value);
            }
        );

        //Filter for sessions by date
        $this->crud->addFilter([
            'type' => 'dropdown',
            'name' => 'ByDate',
            'label' => 'By Date'
            ],
            [
                1 => 'Completed',
                2 => 'Current',
                3 => 'Future'
            ],
            function($value) {
                $this->crud->addClause('date', $value);
            }

            );




        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */

        //$this->crud->setFromDb();


        //$this->crud->addColumn([
        //    'name' => 'registered_user_id',
        //    'label' => 'Name',
        //    'type' => 'select',
        //    'entity' => 'user',
        //    'attribute' => "name",
        //    'model' => "App\Models\User",
        //]);
//
        //$this->crud->addColumn([
        //    'name' => 'registered_user_id',
        //    'label' => 'User ID',
        //    'type' => 'select',
        //    'entity' => 'user',
        //    'attribute' => "personal_id",
        //    'model' => "App\Models\User",
        //]);


        $this->crud->addColumn([
            'name' => 'name',
            'label' => 'Name',
        ]);

        $this->crud->addColumn([
            'name' => 'personal_id',
            'label' => 'ID',
        ]);

        $this->crud->addColumn([
            'name' => 'email',
            'label' => 'Email',
        ]);

        $this->crud->addColumn([
            'name' => 'first_session',
            'label' => 'Session 1 Date',
            'type' => 'selectdate',
            'entity' => 'training',
            'attribute' => "first_session",
            'model' => "App\Models\TrainingSession",
        ]);

        $this->crud->addColumn([
            'name' => 'second_session',
            'label' => 'Session 2 Date',
            'type' => 'select',
            'entity' => 'training',
            'attribute' => "second_session",
            'model' => "App\Models\TrainingSession",
        ]);

        $this->crud->addColumn([
            'name' => 'training_session_id',
            'label' => 'Training Type',
            'type' => 'select',
            'entity' => 'training',
            'attribute' => "training_type",
            'model' => "App\Models\TrainingSession",
        ]);

        $this->crud->addColumn([
            'name' => 'accommodations',
            'label' => 'Needs Accommodations',
            'type' => 'check'
        ]);

        $this->crud->addColumn([
            'name' => 'laptop',
            'label' => 'Will Bring Laptop',
            'type' => 'check'
        ]);

        $this->crud->addColumn([
            'name' => 'attended_first',
            'label' => 'Attended 1',
            'type' => 'check'
        ]);

        $this->crud->addColumn([
            'name' => 'attended_second',
            'label' => 'Attended 2',
            'type' => 'check'
        ]);

        $this->crud->addColumn([
            'name' => 'completed_certification',
            'label' => 'Completed',
            'type' => 'check'
        ]);

        // FIELDS
        //$this->crud->addField([
        //    'name' => 'registered_user_id',
        //    'label' => 'Name',
        //    'type' => 'select2',
        //    'entity' => 'user',
        //    'attribute' => "name",
        //    'model' => "App\Models\User",
        //    'attributes' => ['disabled' => 'disabled'],
        //]);

        //$this->crud->addField([
        //    'name' => 'registered_user_id',
        //    'label' => 'User ID',
        //    'type' => 'select2',
        //    'entity' => 'user',
        //    'attribute' => "personal_id",
        //    'model' => "App\Models\User",
        //    'attributes' => ['disabled' => 'disabled', 'name' => 'id'],
        //]);
//
        //$this->crud->addField([
        //    'name' => 'training_session_id',
        //    'label' => 'Session 1 Date',
        //    'type' => 'select',
        //    'entity' => 'training',
        //    'attribute' => "first_session",
        //    'model' => "App\Models\TrainingSession",
        //]);
//
        //$this->crud->addField([
        //    'name' => 'training_session_id',
        //    'label' => 'Session 2 Date',
        //    'type' => 'select',
        //    'entity' => 'training',
        //    'attribute' => "second_session",
        //    'model' => "App\Models\TrainingSession",
        //]);

        $this->crud->addField([
            'name' => 'attended_first',
            'label' => 'Attended 1',
            'type' => 'checkbox',
        ]);

        $this->crud->addField([
            'name' => 'attended_second',
            'label' => 'Attended 2',
            'type' => 'checkbox'
        ]);

        $this->crud->addField([
            'name' => 'completed_certification',
            'label' => 'Completed',
            'type' => 'checkbox'
        ]);


        // ------ CRUD FIELDS
        // $this->crud->addField($options, 'update/create/both');
        // $this->crud->addFields($array_of_arrays, 'update/create/both');
        // $this->crud->removeField('name', 'update/create/both');
        // $this->crud->removeFields($array_of_names, 'update/create/both');

        // ------ CRUD COLUMNS
        // $this->crud->addColumn(); // add a single column, at the end of the stack
        // $this->crud->addColumns(); // add multiple columns, at the end of the stack
        // $this->crud->removeColumn('column_name'); // remove a column from the stack
        // $this->crud->removeColumns(['column_name_1', 'column_name_2']); // remove an array of columns from the stack
        // $this->crud->setColumnDetails('column_name', ['attribute' => 'value']); // adjusts the properties of the passed in column (by name)
        // $this->crud->setColumnsDetails(['column_1', 'column_2'], ['attribute' => 'value']);

        // ------ CRUD BUTTONS
        // possible positions: 'beginning' and 'end'; defaults to 'beginning' for the 'line' stack, 'end' for the others;
        // $this->crud->addButton($stack, $name, $type, $content, $position); // add a button; possible types are: view, model_function
        // $this->crud->addButtonFromModelFunction($stack, $name, $model_function_name, $position); // add a button whose HTML is returned by a method in the CRUD model
        // $this->crud->addButtonFromView($stack, $name, $view, $position); // add a button whose HTML is in a view placed at resources\views\vendor\backpack\crud\buttons
        // $this->crud->removeButton($name);
        // $this->crud->removeButtonFromStack($name, $stack);
        // $this->crud->removeAllButtons();
        // $this->crud->removeAllButtonsFromStack('line');

        // ------ CRUD ACCESS
        // $this->crud->allowAccess(['list', 'create', 'update', 'reorder', 'delete']);
        // $this->crud->denyAccess(['list', 'create', 'update', 'reorder', 'delete']);

        // ------ CRUD REORDER
        // $this->crud->enableReorder('label_name', MAX_TREE_LEVEL);
        // NOTE: you also need to do allow access to the right users: $this->crud->allowAccess('reorder');

        // ------ CRUD DETAILS ROW
        // $this->crud->enableDetailsRow();
        // NOTE: you also need to do allow access to the right users: $this->crud->allowAccess('details_row');
        // NOTE: you also need to do overwrite the showDetailsRow($id) method in your EntityCrudController to show whatever you'd like in the details row OR overwrite the views/backpack/crud/details_row.blade.php

        // ------ REVISIONS
        // You also need to use \Venturecraft\Revisionable\RevisionableTrait;
        // Please check out: https://laravel-backpack.readme.io/docs/crud#revisions
        // $this->crud->allowAccess('revisions');

        // ------ AJAX TABLE VIEW
        // Please note the drawbacks of this though:
        // - 1-n and n-n columns are not searchable
        // - date and datetime columns won't be sortable anymore
        // $this->crud->enableAjaxTable();

        // ------ DATATABLE EXPORT BUTTONS
        // Show export to PDF, CSV, XLS and Print buttons on the table view.
        // Does not work well with AJAX datatables.
        // $this->crud->enableExportButtons();

        // ------ ADVANCED QUERIES
        // $this->crud->addClause('active');
        // $this->crud->addClause('type', 'car');
        // $this->crud->addClause('where', 'name', '==', 'car');
        // $this->crud->addClause('whereName', 'car');
        // $this->crud->addClause('whereHas', 'posts', function($query) {
        //     $query->activePosts();
        // });
        // $this->crud->addClause('withoutGlobalScopes');
        // $this->crud->addClause('withoutGlobalScope', VisibleScope::class);
        // $this->crud->with(); // eager load relationships
        // $this->crud->orderBy();
        // $this->crud->groupBy();
        // $this->crud->limit();
    }

    public function store(StoreRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::storeCrud();
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::updateCrud();
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
}
