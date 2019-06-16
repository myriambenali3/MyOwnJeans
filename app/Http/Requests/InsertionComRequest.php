<?php


namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class InsersionComRequest extends FormRequest
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
            'mailCom' => 'required|min:5|max:45|alpha',
            'descriptionCom' => 'required|max:3000'
        ];
    }


}