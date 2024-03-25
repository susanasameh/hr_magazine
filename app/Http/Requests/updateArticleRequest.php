<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updateArticleRequest extends FormRequest
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
            'title' => 'required|string|max:255|unique:articles,title', // Adjust max length as needed
            'slug' => 'required|string|max:255|unique:articles,slug',  // Adjust max length as needed
            'image' => 'sometimes|string', // Adjust validation for image based on your requirements (e.g., mimes, size)
            'content' => 'required|string',
            'category_id' => 'required|exists:article_categories,id', // Ensures category exists
            'user_id' => 'required|exists:users,id', // Ensures user exists
            'approved' => 'sometimes|boolean', // Allow optional update for approved field
        ];
    }
}
