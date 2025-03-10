<?php

namespace App\Http\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'title' => 'required|string',
            'content' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'tag_ids' => 'nullable|array',
            'tag_ids.*' => 'nullable|integer|exists:tags,id',
            'preview_image' => 'nullable|file',
            'main_image' => 'nullable|file',
        ];
    }

    public function messages(): array
    {
        return [
          'title.required' => 'Title is required',
          'content.required' => 'Content is required',
          'category_id.required' => 'Category is required',
          'tag_ids.array' => 'Tags must be an array',
          'tag_ids.*.integer' => 'Tags must be an integer',
          'preview_image.file' => 'Preview image must be a file',
          'main_image.file' => 'Main image must be a file',
        ];
    }
}
