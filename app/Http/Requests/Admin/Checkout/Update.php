<?php

namespace App\Http\Requests\Admin\Checkout;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class Update extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'              => 'required|string',
            'email'             => 'required|email',
            'no_telp'           => 'required|numeric',
            'address'           => 'required|string',
            'vehicle_brand'     => 'required|string',
            'vehicle_color'     => 'required|string',
            'production_year'   => 'required|numeric|gt:0', // fungsi gt:0 agar nilai tidak boleh kurang dari nol atau minus
            'number_plate'      => 'required|string',
            'order_schedule'    => 'required|',
        ];
    }
}
