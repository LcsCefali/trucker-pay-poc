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
            'bankName.required' => 'O banco é obrigatório.',
            'document.required' => 'O documento é obrigatório.',
            'name.required' => 'O nome é obrigatório.',
            'agency.required' => 'A agência é obrigatória.',
            'account.required' => 'A conta é obrigatória.',
            'accountType.required' => 'O tipo da conta é obrigatório.',
            'value.required' => 'O valor é obrigatório.',
            'date.required' => 'A data é obrigatória.',
            
            'bankName.unique' => 'Este banco já existe em nossos registros.',
            'document.unique' => 'Este documenrto já existe em nossos registros.',
            'agency.unique' => 'Esta agência já existe em nossos registros.',
            'account.unique' => 'Esta conta já existe em nossos registros.'
        ];
    }
}
