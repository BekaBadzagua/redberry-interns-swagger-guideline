<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
{
	/**
	 * Get the validation rules that apply to the request.
	 */
	public function rules()
	{
		return [
			'name'            => 'required|min:2',
			'price'           => 'required|numeric',
			'SQ'              => 'required',
		];
	}
}
