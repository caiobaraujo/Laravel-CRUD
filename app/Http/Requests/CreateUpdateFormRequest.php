<?php

namespace App\Http\Requests;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class CreateUpdateFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        
        return [
            'title' => 'required',
            'start_date' => 'required|date|after_or_equal:today',
            'end_date' => 'required|date|before_or_equal:' . 
            Carbon::parse(request()->input('start_date'))->addYear()->format('Y-m-d')
  

        ];
    }
}
