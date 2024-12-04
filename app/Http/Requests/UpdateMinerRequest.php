<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMinerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|unique:categories,name,' . $this->id,
            'image' => 'nullable',
            'video' => 'nullable|string',
            'description' => 'nullable|string',
            'hash' => 'nullable|string',
            'power' => 'nullable|string',
            'weight' => 'nullable|string',
            'cooling' => 'nullable|string',
            'temp' => 'nullable|string',
            'price' => 'nullable|string',
            'revenue' => 'nullable|string',
            'url' => 'nullable|url',
        ];
    }
}
