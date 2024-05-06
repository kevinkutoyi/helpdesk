<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreTicketRequest extends FormRequest
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
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'subject' => 'required|string|max:255',
            'description' => 'required|string',
            'priority' => 'required|in:low,medium,high',
            'school_id' => 'nullable|integer|exists:schools,id',
            'submitter_email' => 'nullable|email|max:255',
            'submitter_phone' => 'nullable|string|max:255',
            'user_id' => 'nullable|integer|exists:users,id',
            'category_id' => 'nullable|integer|exists:categories,id',
            'admission_number' => 'nullable|string|max:255',
        ];
    }
}
