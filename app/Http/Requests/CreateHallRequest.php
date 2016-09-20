<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateHallRequest extends Request
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'       => 'required',
            'faculty_id' => 'required',
            'capacity'   => 'required',
            'type'       => 'required',
        ];
    }

}
