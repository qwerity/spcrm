<?php

namespace App\Http\Requests;

use App\Payment;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdatePaymentRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('payment_edit');
    }

    public function rules()
    {
        return [
            'service_id'        => [
                'required',
                'integer',
            ],
            'amount'            => [
                'required',
            ],
            'payment_for_month' => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'client_id'         => [
                'required',
                'integer',
            ],
        ];
    }
}
