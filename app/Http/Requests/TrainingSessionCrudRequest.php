<?php

namespace App\Http\Requests;


use Backpack\CRUD\app\Http\Requests\CrudRequest;
//use Illuminate\Foundation\Http\FormRequest;

class TrainingSessionCrudRequest extends CrudRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return \Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //'name' => 'required|min:5|max:255'
        ];
    }
}
