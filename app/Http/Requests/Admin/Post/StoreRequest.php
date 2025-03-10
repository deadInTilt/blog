<?php

namespace App\Http\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'preview_image' => 'required|file',
            'main_image' => 'required|file',
        ];
    }

    public function messages(): array
    {
        return [
          'title.required' => 'Title is required',
          'title.string' => 'Title must be string',
          'content.required' => 'Content is required',
          'content.string' => 'Content must be string',
          'category_id.required' => 'Category is required',
          'category_id.integer' => 'Category must be integer',
          'tag_ids.array' => 'Tag must be array',
          'preview_image.required' => 'Main image is required',
          'preview_image.file' => 'Main image must be a file',
          'main_image.required' => 'Main image is required',
          'main_image.file' => 'Main image must be a file',
        ];
    }
}
