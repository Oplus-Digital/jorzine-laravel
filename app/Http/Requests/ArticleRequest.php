<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $rules = [
            'title' => ['string', 'required','max:255'],
            'body' => ['string', 'required'],
            'profile' => ['string','nullable'],
            'website' => ['string','nullable'],
            'band' => ['string','required'],
            'author' => ['string','required'],
            'article_date' => ['date','required'],
            'thumb' => ['image', 'sometimes','mimes:jpg,jpeg,png,bmp,svg,gif'],

        ];

        if ($this->method() == 'PUT') {
            $rules = [
                'title' => ['string', 'required','max:255'],
                'body' => ['string', 'required'],
                'profile' => ['string','nullable'],
                'website' => ['string','nullable'],
                'band' => ['string','required'],
                'author' => ['string','required'],
                'article_date' => ['date','required'],
                'thumb' => ['image', 'sometimes','mimes:jpg,jpeg,png,bmp,svg,gif'],
            ];
        }
        return $rules;
    }
}
