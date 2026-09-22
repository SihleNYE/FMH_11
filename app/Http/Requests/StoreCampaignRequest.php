<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCampaignRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:120'],
            'category' => ['required', 'string', 'max:50'],
            'goal_amount' => ['required', 'numeric', 'min:100'],
            'story' => ['required', 'string', 'min:40', 'max:4000'],
            'image_url' => ['nullable', 'url', 'max:2048'],
            'ends_at' => ['nullable', 'date', 'after:today'],
        ];
    }
}
