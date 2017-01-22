<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateDineRequest extends FormRequest
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
            'mealTitle' => 'required|min:8|max:25',
            'mealDescription' => 'required|min:8|max:125',
            'file' => 'file|image',
            'time' => 'required|Min:0',
            'address' => 'required|min:4|max:30',
            'price' => 'required',
            'date' => 'required|date',
            'seatMax' => 'required|min:1|max:5'
        ];
    }
}
