<form action="{{ url('transfer/create') }}" method="POST">
  @csrf

    <div class="form-group">
      <label>Transferência Trucker Pay?</label>
      <div>
          <div class="custom-switch custom-switch-secondary mb-2 custom-switch-small">
              <input class="custom-switch-input" id="isTruckerPay" name="isTruckerPay" type="checkbox"
                  checked oninput="verifyIsTruckerPay(this)">
              <label class="custom-switch-btn" for="isTruckerPay"></label>
          </div>
      </div>
    </div>

    <div class="form-group">
      <label for="bankName">Nome ou número do banco</label>
        <select id="bankName" name="bankName" class="form-control select2-single" data-width="100%">
          @php
            $allBank = [
              '001 BANCO DO BRASIL',
              '341 ITAÚ',
              '104 CAIXA ECONÔMICA FEDERAL',
              '033 SANTANDER',
              '070 BRB - BANCO DE BRASÍLIA',
              '077 BANCO INTER',
              '237 BRADESCO',
              '745 CITIBANK',
              '422 BANCO SAFRA',
              '399 BANCO HSBC',
              '756  BANCO COOPERATIVO DO BRASIL S.A. (BANCOOB/SICOOB)',
              '212 BANCO ORIGINAL',
              '003 BANCO DA AMAZONIA S.A',
              '004 BANCO DO NORDESTE DO BRASIL S.A',
              '021 BANCO DO ESTADO DO ESPIRITO SANTO S.A',
              '037 BANCO DO ESTADO DO PARA S.A',
              '041 BANCO DO ESTADO DO RIO GRANDE DO SUL S.A',
              '047 BANCO DO ESTADO DE SERGIPE S.A',
              '208 BANCO BTG PACTUAL S.A',
              '218 BS2',
              '290 PAGSEGURO INTERNET S.A',
              '389 BANCO MERCANTIL DO BRASIL S.A',
              '453 BANCO RURAL S.A',
              '623 BANCO PANAMERICANO S.A',
              '637 BANCO SOFISA S.A',
              '655 BANCO VOTORANTIM S.A.',
              '748 SICREDI',
              '260 NUBANK',
              '126 INSTITUICAO BI BR PARTNERS SA',
              '136 BANCO UNICRED DO BRASIL',
              '085 CECRED',
              '121 BANCO AGIPLAN',
              '084 UNIPRIME',
              '197 STONE PAGAMENTOS S.A',
              '336 C6 S.A',
              'Pagarme',
              'Fitbank',
              '633 BANCO RENDIMENTO S.A.',
              '280 LIFTBANK',
              '364 GERENCIANET PAGAMENTOS DO BRASIL',
              '099 UNIPRIME CENTRAL CCC LTDA',
              '323 MERCADO PAGO',
              '380 PIC PAY',
              '403 CORA',
              '413 BV S.A.'
            ];

            $banks = '';
            foreach ($allBank as $bank) {
              $selected = '';
              if ($bank === @$favoredFinded->bankName) $selected = 'selected';
              $banks .= "<option $selected value='$bank'>$bank</option>";
            }

            echo $banks;
          @endphp
        </select>
    </div>

    <div class="form-group">
      <label for="document">CPF/CNPJ <label class='required'>*</label></label>
      <input type="text" class="form-control" id="document" name="document" onchange="formatDocument(this)" value="{{@$favoredFinded->document}}" required>
    </div>

    <div class="form-group">
      <label for="name">Nome Completo <label class='required'>*</label></label>
      <input type="text" class="form-control" id="name" name="name" oninput="validateName(this)" value="{{@$favoredFinded->name}}" required>
    </div>

    <div class="form-group">
      <label for="agency">Agência (sem dígito)<label class='required'>*</label></label>
      <input type="text" class="form-control" id="agency" name="agency" oninput="validateNumbers(this)" value="{{@$favoredFinded->agency}}" required>
    </div>

    <div class="form-group">
      <label for="account">Conta Corrente (com dígito) <label class='required'>*</label></label>
      <input type="text" class="form-control" id="account" name="account" value="{{@$favoredFinded->account}}"  required>
    </div>

    <div class="form-group">
      <label for="accountType">Conta Corrente ou Poupança</label>
      <select id="accountType" name="accountType" class="form-control" >
          <option selected value='Conta Corrente'>Conta Corrente</option>
          <option value='Conta Poupança'>Conta Poupança</option>
      </select>
    </div>
    
    <div class="form-group">
      <label for="value">Valor <label class='required'>*</label></label>
      <input type="text" class="form-control" id="value" name="value" value="{{@$favoredFinded->value}}" oninput="formatReal(this)" required>
    </div>

    <div class="form-group col-12 col-xs-6">
      <div class="form-group row mb-1">
        <label for="date">Data <label class='required'>*</label></label>
        <input class="form-control datepicker date" id="date" name="date" value="{{@$favoredFinded->date}}" placeholder="Selecione uma data">
      </div>

      <div class="form-group row mb-1 mt-4">
        <label>Salvar como contato</label>
        <div>
            <div class="custom-switch custom-switch-secondary mb-2 ml-2 custom-switch-small">
                <input class="custom-switch-input" id="saveContact" name="saveContact" type="checkbox"
                    checked>
                <label class="custom-switch-btn" for="saveContact"></label>
            </div>
        </div>
    </div>
    </div>
  

    <button type="button" class="btn btn-primary mb-0">Voltar</button>
    <button type="submit" class="btn btn-secondary mb-0">Avançar</button>
</form>