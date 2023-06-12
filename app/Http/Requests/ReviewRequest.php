<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReviewRequest extends FormRequest
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
            'title' => ['string', 'required'],
            'body' => ['string','required'],
            'band' => ['string','required'],
            'profile' => ['string','required'],
            'website' => ['string','required'],
            'purchase_link' => ['string','required'],
            'release_name' => ['string','required'],
            'review_type' => ['string','required'],
            'reviewer' => ['string','required'],
            'review_date' => ['date','required'],
            'img' => ['image', 'sometimes','mimes:jpg,jpeg,png,bmp,svg,gif'],
            'thumb' => ['image', 'sometimes','mimes:jpg,jpeg,png,bmp,svg,gif'],
        ];

        if ($this->method() == 'PUT') {
            $rules = [
                'title' => ['string', 'required'],
                'body' => ['string','required'],
                'band' => ['string','required'],
                'profile' => ['string','required'],
                'website' => ['string','required'],
                'purchase_link' => ['string','required'],
                'release_name' => ['string','required'],
                'review_type' => ['string','required'],
                'reviewer' => ['string','required'],
                'review_date' => ['date','required'],
                'img' => ['image', 'sometimes','mimes:jpg,jpeg,png,bmp,svg,gif'],
                'thumb' => ['image', 'sometimes','mimes:jpg,jpeg,png,bmp,svg,gif'],
            ];
        }
        return $rules;
    }
}
