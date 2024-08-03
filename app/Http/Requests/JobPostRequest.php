<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobPostRequest extends FormRequest
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
            'vaccancies' => 'required|integer',
            'qualification' => 'required|string',
            'applicationDeadline' => 'required|date',
            'employmentType' => 'required|in:full_time,part_time,contract,temporary,internship',
            'location' => 'required|string|max:255',
            'salary' => 'nullable|string|max:255',
        ];
    }
}
