<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TransferRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'bankName' => [
                'required',
                Rule::unique('favoreds')
                    ->where('bankName', $this->bankName)
                    ->where('document', $this->document)
                    ->where('name', $this->name)
                    ->where('agency', $this->agency)
                    ->where('account', $this->account)
            ],
            'document' => [
                'required',
                Rule::unique('favoreds')
                    ->where('bankName', $this->bankName)
                    ->where('document', $this->document)
                    ->where('name', $this->name)
                    ->where('agency', $this->agency)
                    ->where('account', $this->account)
            ],
            'name' => 'required',
            'agency' => [
                'exclude_if:isTruckerPay,on',
                'required', 
                Rule::unique('favoreds')
                    ->where('bankName', $this->bankName)
                    ->where('document', $this->document)
                    ->where('name', $this->name)
                    ->where('agency', $this->agency)
                    ->where('account', $this->account)
            ],
            'account' => [
                'exclude_if:isTruckerPay,on',
                'required', 
                Rule::unique('favoreds')
                    ->where('bankName', $this->bankName)
                    ->where('document', $this->document)
                    ->where('name', $this->name)
                    ->where('agency', $this->agency)
                    ->where('account', $this->account)
            ],
            'accountType' => 'exclude_if:isTruckerPay,on|required',
            'value' => 'required',
            'date' => 'required'
        ];
    }

    public function messages() {
        return [
            'bankName.required' => 'O banco ?? obrigat??rio.',
            'document.required' => 'O documento ?? obrigat??rio.',
            'name.required' => 'O nome ?? obrigat??rio.',
            'agency.required' => 'A ag??ncia ?? obrigat??ria.',
            'account.required' => 'A conta ?? obrigat??ria.',
            'accountType.required' => 'O tipo da conta ?? obrigat??rio.',
            'value.required' => 'O valor ?? obrigat??rio.',
            'date.required' => 'A data ?? obrigat??ria.',
            
            'bankName.unique' => 'Este banco j?? existe em nossos registros.',
            'document.unique' => 'Este documenrto j?? existe em nossos registros.',
            'agency.unique' => 'Esta ag??ncia j?? existe em nossos registros.',
            'account.unique' => 'Esta conta j?? existe em nossos registros.'
        ];
    }
}
