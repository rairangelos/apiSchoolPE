<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateSchoolFormRequest extends FormRequest
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
            'schoolCode'                    => 'required|numeric|unique:schools,schoolCode',
            'name'                          => 'required|string',
            'city'                          => 'required|string',
            'regionalEducationManagement'   => 'required|string',
            'dailyJourney'                  => 'required|string',
            'elementarySchool'              => 'required|string',
            'highSchool'                    => 'required|string',
            'fundationYear'                 => 'required|numeric',
            'transitionYear'                => 'required|numeric'
        ];
    }
}
