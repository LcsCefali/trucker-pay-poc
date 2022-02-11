@extends('layouts.app')

@section('content')
<style>
.profileImage {
  font-family: Arial, Helvetica, sans-serif;
  width: 2.5rem;
  height: 2.5rem;
  border-radius: 50%;
  background: #011e50;
  font-size: 1rem;
  color: #fff;
  text-align: center;
  line-height: 2.5rem;
  /* margin: 2rem 0; */
}

.name {
  font-weight: bold;
  font-size: 1rem;
  color: #011e50;
}

.icon-new {
  color: red;
  font-size: 18px;
}
</style>
<div class="container-fluid">
  <div class="row">
    <div class="col-12">

      <h1>Transferência entre Contas</h1>
      <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
          <ol class="breadcrumb pt-0">
              <li class="breadcrumb-item active" aria-current="page">Inicio</li>
              <li class="breadcrumb-item active" aria-current="page">Transferencia entre contas</li>
          </ol>
      </nav>
      <div class="separator mb-5"></div>
    </div>
  </div>

  <span>Transferencia entre contas Trucker Pay é isento de taxas.</span>
  <br>
  <span>Transferencia para outros bancos sujeito a tarifação conforme tabela disponível. (R$ 1,50)</span>
  <br>
  <br>

  <div class="row">
      <div class="col-12 col-xs-6">

        <div class="card mb-4">
              <div class="card-body">
                @if (!empty($favoredFinded))
                  @include('transfer.edit')
                @else
                  @include('transfer.create')
                @endif
              </div>
          </div>
    </div>
    <div class="col-xs-6">
      <div class="card mb-4">
        <div class="card-body">

          <div class="mb-1">
            <h2>Lista de favorecidos</h1>
          </div>

          <div class="row app-row ml-1">
            <div class="form-group">
              <div class="search-sm d-inline-block float-md-left mr-1 mb-1 align-top">
                <input placeholder="Search...">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12 survey-app">
                <ul class="nav nav-tabs separator-tabs ml-0 mb-5" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="first-tab" data-toggle="tab" href="#first" role="tab"
                        aria-controls="first" aria-selected="true">Outros Bancos</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" id="third-tab" data-toggle="tab" href="#third" role="tab"
                        aria-controls="third" aria-selected="false">Trucker Pay</a>
                  </li>
                </ul>
                <div class="tab-content mb-4">
                    <div class="tab-pane show active" id="first" role="tabpanel" aria-labelledby="first-tab">
                      @foreach ($otherFavoreds as $favored)
                      <div class="row justify-content-between align-items-md-center">
                        <a href="/transfer/{{$favored->id}}/find">
                          <div class="row ml-3 align-items-md-center">
                            <div class="profileImage">{{
                              substr(@explode(" ", $favored->name)[0], 0, 1) . substr(@explode(" ", $favored->name)[count(@explode(" ", $favored->name))], 1, 1)  
                            }}</div>
                            <span class="name ml-2">{{ $favored->name}}</span>
                          </div>
                        </a>

                        @if (empty($favoredFinded))
                          <form action="transfer/delete/{{$favored->id}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class=" btn align-items-md-center justify-content-between">
                              <i class="simple-icon-trash mr-5 icon-new"></i>
                            </button>
                          </form>
                        @endif

                      </div>
                      <div class="separator mt-2 mb-2"></div>
                      @endforeach
                    </div>
                    
                        
                    <div class="tab-pane fade" id="third" role="tabpanel" aria-labelledby="third-tab">
                      @foreach ($favoredsTruckerPay as $favored)
                      <div class="row justify-content-between align-items-md-center">
                        <a href="/transfer/{{$favored->id}}/find">
                          <div class="row ml-3 align-items-md-center">
                            <div class="profileImage">{{
                              substr(@explode(" ", $favored->name)[0], 0, 1) . substr(@explode(" ", $favored->name)[count(@explode(" ", $favored->name))], 1, 1)  
                            }}</div>
                            <span class="name ml-2">{{ $favored->name}}</span>
                          </div>
                        </a>

                        @if (empty($favoredFinded))
                          <form action="transfer/delete/{{$favored->id}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class=" btn align-items-md-center justify-content-between">
                              <i class="simple-icon-trash mr-5 icon-new"></i>
                            </button>
                          </form>
                        @endif

                        
                      </div>
                      <div class="separator mt-2 mb-2"></div>
                      @endforeach
                    </div>
                </div>
                </div>
          </div>
        </div>
        </div>
      </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
<script src="https://cdn.rawgit.com/plentz/jquery-maskmoney/master/dist/jquery.maskMoney.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
<script>
  $('#date').datepicker({
    autoclose: true,
    keyboardNavigation: false,
    daysOfWeekDisabled: "0,6",
    startDate: '+0d',
    format: 'dd/mm/yyyy',
    language: 'pt-BR',

});
  // $('#date').datepicker({ language: 'pt-br' });

  function validateName(field) {
    document.getElementById(field.id).value = field.value.replace(/[0-9]/g, '');
  }

  function validateNumbers(field) {
    document.getElementById(field.id).value = field.value.match(/\d+/g).join('');
  }

  function formatDocument(field) {
    const value = field.value.replace(/[^\d]/g, "");

    if(value.length > 14) return document.getElementById(field.id).value = cnpj(value);
    return document.getElementById(field.id).value = cpf(value);
  }

  function cnpj(value) {
    if (!value) return value;

    const regexp = /^(\d{0,2})(\d{0,3})(\d{0,3})(\d{0,4})(\d{0,2}).*/;
    const result = '$1.$2.$3/$4-$5';

    return value
      .replace(regexp, result)
      .replace(/[-.\\]$/, '')
      .replace(/[-.\\]$/, '')
      .replace(/[-.\\]$/, '');
  }

  function cpf(value) {
    if (!value) return value;

    const regexp = /^(\d{0,3})(\d{0,3})(\d{0,3})(\d{0,2}).*/;
    const result = '$1.$2.$3-$4';

    return value
      .replace(regexp, result)
      .replace(/[-.\\]$/, '')
      .replace(/[-.\\]$/, '')
      .replace(/[-.\\]$/, '');
  }

  function verifyIsTruckerPay(field) {
    var isTruckerPay = document.getElementById(field.id).checked;

    if (isTruckerPay) {
        document.getElementById("agency").value = '';
        document.getElementById("account").value = '';
        document.getElementById("accountType").value = '';

        document.getElementById("agency").disabled = true;
        document.getElementById("account").disabled = true;
        return document.getElementById("accountType").disabled = true;
    }

    document.getElementById("agency").disabled = false;
    document.getElementById("account").disabled = false;
    return document.getElementById("accountType").disabled = false;
  }

  function formatReal(field) {
    var elemento = document.getElementById(field.id);
    var valor = elemento.value;

    valor = valor + '';
    valor = parseInt(valor.replace(/[\D]+/g, ''));
    valor = valor + '';
    valor = valor.replace(/([0-9]{2})$/g, ",$1");

    if (valor.length > 6) {
        valor = valor.replace(/([0-9]{3}),([0-9]{2}$)/g, ".$1,$2");
    }

    elemento.value = valor;
    if(valor == 'NaN') elemento.value = '';
  }

  verifyIsTruckerPay(document.getElementById('isTruckerPay'));
</script>
@endsection