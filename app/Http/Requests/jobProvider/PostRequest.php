<?php

namespace App\Http\Requests\jobProvider;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'jobTitle' => 'required|string|max:255',
            'companyName' => 'required|string|max:255',
            'companyDetails' => 'required|string',
            'jobDescription' => 'required|string',
            'jobRequirements' => 'required|string',
            'qualification' => 'required|string',
            'vaccancies' => 'required|integer',
            'applicationDeadline' => 'required|date',
            'employmentType' => 'required|string|in:full_time,part_time,contract,temporary,internship',
            'location' => 'required|string|max:255',
            'salary' => 'nullable|string|max:255',
            // Uncomment the following line if you want to add validation for jobImage
            // 'jobImage' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }
}
