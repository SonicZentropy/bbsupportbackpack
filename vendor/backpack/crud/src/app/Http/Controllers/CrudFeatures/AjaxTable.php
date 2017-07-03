<?php

namespace Backpack\CRUD\app\Http\Controllers\CrudFeatures;

trait AjaxTable
{
    /**
     * Respond with the JSON of one or more rows, depending on the POST parameters.
     * @return JSON Array of cells in HTML form.
     */
    public function search()
    {
        $this->crud->hasAccessOrFail('list');

        /*// create an array with the names of the searchable columns
        $columns = collect($this->crud->columns)
            ->reject(function ($column, $key) {
                // the select_multiple columns are not searchable
                return isset($column['type']) && $column['type'] == 'select_multiple';
            })
            ->pluck('name')
            // add the primary key, otherwise the buttons won't work
            ->merge($this->crud->model->getKeyName())
            ->toArray();

        //identify non text columns
        $columns_type_not_text = collect($this->crud->columns)->filter(function ($column) {
            return isset($column['type']) && $column['type'] != 'text';
        })->pluck('name')->toArray();

        $data = $this->crud->getEntries(); // $this->crud->query->get();

        $datatable_data = collect();
        foreach ($data as $dtrow) {
            $new_dtrow = clone $dtrow;

            foreach($dtrow->toArray() as $k => $v){
                if( !in_array($k, $columns) ){ // remove unrelated column data
                    unset($new_dtrow->$k);
                }
            }

            // append additional data e.g. accesor / relation data for search function
            foreach ($columns as $key => $item) {
                if( in_array($item, $columns_type_not_text) ){  //relation
                    $col_prop = collect($this->crud->columns)->where('name', $item)->first();
                    $entity = isset($col_prop['entity']) ? $col_prop['entity'] : null;
                    $attribute = isset($col_prop['attribute']) ? $col_prop['attribute'] : null;

                    if($entity != null && $attribute != null){
                        $new_dtrow->{'srch_'.$item} = $dtrow->{$entity}[$attribute];
                    }
                }

                if( !array_key_exists($item, $dtrow) ){  //accesor
                    $new_dtrow->$item = $dtrow->{$item};
                }
            }

            $datatable_data->push($new_dtrow);
        }

        $data_columns = collect($datatable_data->first()->toArray())->keys()->all();

        $datatables = \Yajra\Datatables\Datatables::of($datatable_data);
        $datatables = $datatables->setRowId('id'); //set row id

        foreach($data_columns as $column) {
            $datatables = $datatables->removeColumn($column); //remove unwanted data
        }

        $crud = $this->crud;
        // add the details_row buttons as the first column
        if ($this->crud->details_row) {
            $datatables = $datatables->addColumn(0, function($entry) use ($crud) {
                return \View::make('crud::columns.details_row_button')
                    ->with('crud', $crud)
                    ->with('entry', $entry)
                    ->render();
            });
        }

        // get the actual HTML for each row's cell
        foreach ($this->crud->columns as $key => $column) {
            if( isset($column['type']) && $column['type'] != 'text' ){
                $datatables = $datatables->addColumn(0, function($entry) use ($column) {
                    return $this->crud->getCellView($column, $entry);
                });
            } else {
                $datatables = $datatables->addColumn(0, function($entry) use ($column) {
                    return $entry->{$column["name"]};
                });
            }
        }

        // add the buttons as the last column
        if ($this->crud->buttons->where('stack', 'line')->count()) {
            $datatables = $datatables->addColumn(0, function($entry) use ($crud) {
                return \View::make('crud::inc.button_stack', ['stack' => 'line'])
                    ->with('crud', $crud)
                    ->with('entry', $entry)
                    ->render();
            });
        }

        $datatables = $datatables->escapeColumns($columns);

        // Override global search function
        $datatables = $datatables->filter(function ($instance) {
            if ($keyword = $this->request->get('search')['value']) {
                $instance->collection = $instance->collection->filter(function ($row) use ($keyword) {
                    $row = $row->toArray();
                    $col_name = array_keys($row);
                    $results = false;
                    foreach($col_name as $col){
                        if ( !is_array($row[$col]) ){
                            $result = str_contains(strtolower($row[$col]), strtolower($keyword));
                            $results = ($result == true) ? $result : $results;
                        }
                    }
                    return $results;

                });
            }

        });

        return $datatables->make(true);*/

        // create an array with the names of the searchable columns
        $columns = collect($this->crud->columns)
                    ->reject(function ($column, $key) {
                        // the select_multiple, model_function and model_function_attribute columns are not searchable
            return isset($column['type']) && ($column['type'] == 'select_multiple' || $column['type'] == 'model_function' || $column['type'] == 'model_function_attribute');
                    })
                    ->pluck('name')
                    // add the primary key, otherwise the buttons won't work
                    ->merge($this->crud->model->getKeyName())
                    ->toArray();

        // structure the response in a DataTable-friendly way
        $dataTable = new \LiveControl\EloquentDataTable\DataTable($this->crud->query, $columns);

        // make the datatable use the column types instead of just echoing the text
        $dataTable->setFormatRowFunction(function ($entry) {
            // get the actual HTML for each row's cell
            $row_items = $this->crud->getRowViews($entry, $this->crud);

            // add the buttons as the last column
            if ($this->crud->buttons->where('stack', 'line')->count()) {
                $row_items[] = \View::make('crud::inc.button_stack', ['stack' => 'line'])
                                ->with('crud', $this->crud)
                                ->with('entry', $entry)
                                ->render();
            }

            // add the details_row buttons as the first column
            if ($this->crud->details_row) {
                array_unshift($row_items, \View::make('crud::columns.details_row_button')
                                ->with('crud', $this->crud)
                                ->with('entry', $entry)
                                ->render());
            }

            return $row_items;
        });

        return $dataTable->make();
    }
}
