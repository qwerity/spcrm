<?php

namespace App\Http\Requests;

use App\Client;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreClientRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('client_create');
    }

    public function rules()
    {
        return [
            'cid'        => [
                'string',
                'required',
            ],
            'first_name' => [
                'string',
                'required',
            ],
            'last_name'  => [
                'string',
                'nullable',
            ],
            'email'      => [
                'string',
                'nullable',
            ],
            'phone'      => [
                'string',
                'nullable',
            ],
            'address'    => [
                'string',
                'nullable',
            ],
        ];
    }
}
