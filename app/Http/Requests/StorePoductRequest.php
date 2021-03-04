<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePoductRequest extends FormRequest
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
            'group' => 'required',
            'producer' => 'required',
            'name' => 'required | min:3',
            'pcs' => 'required',
            'description' => 'required | min:20',
            'short_description' => 'required | min:10',
            'size' => 'required',
            'ingredients' => 'required',
            'price_1' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'A név megadása kötelező!',
            'name.min' => 'A név nem lehet kevesebb 3 betünél!',
            'pcs.required' => 'Meg kell adni a kezdő raktárkészletet!',
            'description.required' => 'A termék leírása kötelező!',
            'description.min' => 'A termék leírása nem lehet kevesebb 20 betünél!',
            'short_description.required' => 'A termék rövid leírása kötelező!!',
            'short_description.min' => 'A termék rövid leírása nem lehet kevesebb 10 betünél!',
            'size.required' => 'A kiszerelés méretének megadása kötelező!',
            'ingredients.required' => 'Az összetevők megadása kötelező!',
            'price_1.required' => 'Az ár megadása kötelező!',

        ];
    }}
