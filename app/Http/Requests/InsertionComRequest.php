<?php


namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class InsertionComRequest extends FormRequest
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
            //
            'nomCom' => 'required|min:3|max:45|alpha',
            'prenomCom' => 'required|min:3|max:45|alpha',
            'mailCom' => 'required|min:3|max:45|email',
            'numCom' => 'min:6|max:45|numeric',
            'descriptionCom' => 'required|max:3000'
        ];
    }


}