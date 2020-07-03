@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'register', 'title' => __('BMS Care')])

<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>


@section('content')
<div class="container" style="height: auto;">
  <div class="row align-items-center">
    <div class="col-lg-8 col-md-12 col-sm-8 ml-auto mr-auto  mt-5">
      <form class="form" method="POST" action="{{ route('register') }}">
        @csrf

        <div class="card card-login card-hidden mb-3">
          <div class="card-header card-header-secondary text-center" style="background-color: #4327c2">
            <h4 class="card-title pt-2 pb-2 "><strong style="font-size: 25px; ">{{ __('Cadastre-se') }}</strong></h4>

          </div>
          <div class="card-body">
            <p class="card-description text-center">{{ __('Já tem uma conta? faça ') }} <a href="{{ route('login') }}" style="color: #4327c2"> {{ __( 'Login')}}</a></p>
            <div class="bmd-form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="material-icons">face</i>
                  </span>
                </div>
                <input type="text" name="name" class="form-control" placeholder="{{ __(' Nome completo') }}" value="{{ old('name') }}">
              </div>
              @if ($errors->has('name'))
                <div id="name-error" class="error text-danger pl-3" for="name" style="display: block;">
                  <strong>{{ $errors->first('name') }}</strong>
                </div>
              @endif
            </div>

            <div class="bmd-form-group mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">article</i>
                  </span>
                </div>
                <input type="text" name="cpf" id="CPF" class="form-control" placeholder="{{ __(' CPF') }}" value="{{ old('cpf') }}">
              </div>
              @if ($errors->has('cpf'))
              <div id="cpf-error" class="error text-danger pl-3" for="cpf" style="display: block;">
                <strong>{{ $errors->first('cpf') }}</strong>
              </div>
            @endif
            </div>

            <div class="bmd-form-group mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">article</i>
                  </span>
                </div>
                <input type="text" name="rg" id="RG" class="form-control cpf-mask" placeholder="{{ __(' RG') }}" value="{{ old('rg') }}">
              </div>
              @if ($errors->has('rg'))
              <div id="rg-error" class="error text-danger pl-3" for="rg" style="display: block;">
                <strong>{{ $errors->first('rg') }}</strong>
              </div>
            @endif
            </div>

            <div class="bmd-form-group mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">insert_invitation</i>
                  </span>
                </div>
                <input type="text" name="nascimento" id="NASCIMENTO" class="form-control" placeholder="{{ __(' Data de nascimento') }}">
              </div>
              @if ($errors->has('nascimento'))
              <div id="nascimento-error" class="error text-danger pl-3" for="nascimento" style="display: block;">
                <strong>{{ $errors->first('nascimento') }}</strong>
              </div>
            @endif
            </div>

            <div class="bmd-form-group mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">location_on</i>
                  </span>
                </div>
                <input type="text" name="cep" id="CEP" class="form-control" placeholder="{{ __(' CEP') }}" value="{{ old('cep') }}">
              </div>

              @if ($errors->has('cep'))
                <div id="cep-error" class="error text-danger pl-3" for="cep" style="display: block;">
                  <strong>{{ $errors->first('cep') }}</strong>
                </div>
              @endif
            </div>

            <div class="bmd-form-group mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">home</i>
                  </span>
                </div>
                    <input type="text" name="rua" id="rua" class="form-control w-50" placeholder="{{ __(' Rua') }}" value="{{ old('rua') }}">
                    <input type="number" name="numero" id="numero" class="form-control" placeholder="{{ __(' Número') }}" value="{{ old('numero') }}">
                  </div>
                  {{-- @if ($errors->has('numero'))
                  <div id="numero-error" class="error text-danger pl-3" for="numero" style="display: block; margin-left: 480px">
                    <strong>{{ $errors->first('numero') }}</strong>
                  </div>
                @endif --}}
            </div>

            <div class="bmd-form-group mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">home</i>
                  </span>
                </div>
                <input type="text" name="bairro" id="bairro" class="form-control w-50" placeholder="{{ __(' Bairro') }}" value="{{ old('bairro') }}">
                <input type="text" name="complemento" id="complemento" class="form-control" placeholder="{{ __(' Complemento') }}" value="{{ old('complemento') }}">
              </div>
              
            </div>

            <div class="bmd-form-group mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">apartment</i>
                  </span>
                </div>
                <input type="text" name="cidade" id="cidade" class="form-control w-50" placeholder="{{ __(' Cidade') }}" value="{{ old('cidade') }}">
                <input type="text" name="estado" id="uf" class="form-control" placeholder="{{ __(' Estado') }}" value="{{ old('estado') }}">
              </div>
            </div>

            <div class="bmd-form-group mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">store</i>
                  </span>
                </div>
                <input type="text" name="referencia" id="referencia" class="form-control w-50" placeholder="{{ __(' Ponto de referência') }}" value="{{ old('referencia') }}">
              </div>
            </div>

            <div class="bmd-form-group mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">contact_phone</i>
                  </span>
                </div>
                <input type="text" name="telefone_fixo" id="TELEFONE" class="form-control w-50" placeholder="{{ __(' Telefone Fixo') }}" value="{{ old('telefone_fixo') }}">
              </div>
              @if ($errors->has('telefone_fixo'))
              <div id="telefone_fixo-error" class="error text-danger pl-3" for="telefone_fixo" style="display: block;">
                <strong>{{ $errors->first('telefone_fixo') }}</strong>
              </div>
            @endif
            </div>

            <div class="bmd-form-group{{ $errors->has('celular') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">call</i>
                  </span>
                </div>
                <input type="text" name="celular" id="CELULAR" class="form-control w-50" placeholder="{{ __(' Celular/WhatsApp') }}" value="{{ old('celular') }}">
              </div>
              @if ($errors->has('celular'))
              <div id="celular-error" class="error text-danger pl-3" for="celular" style="display: block;">
                <strong>{{ $errors->first('celular') }}</strong>
              </div>
            @endif
            </div>

            <div class="bmd-form-group{{ $errors->has('email') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">email</i>
                  </span>
                </div>
                <input type="email" name="email" class="form-control" placeholder="{{ __('Email') }}" value="{{ old('email') }}" >
              </div>
              @if ($errors->has('email'))
                <div id="email-error" class="error text-danger pl-3" for="email" style="display: block;">
                  <strong>{{ $errors->first('email') }}</strong>
                </div>
              @endif
            </div>
            
            <div class="bmd-form-group{{ $errors->has('password') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">lock_outline</i>
                  </span>
                </div>
                <input type="password" name="password" id="password" class="form-control" placeholder="{{ __('Senha') }}">
              </div>
              @if ($errors->has('password'))
                <div id="password-error" class="error text-danger pl-3" for="password" style="display: block;">
                  <strong>{{ $errors->first('password') }}</strong>
                </div>
              @endif
            </div>

            <div class="bmd-form-group{{ $errors->has('password_confirmation') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">lock_outline</i>
                  </span>
                </div>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="{{ __('Confirme sua senha') }}">
              </div>
              @if ($errors->has('password_confirmation'))
                <div id="password_confirmation-error" class="error text-danger pl-3" for="password_confirmation" style="display: block;">
                  <strong>{{ $errors->first('password_confirmation') }}</strong>
                </div>
              @endif
            </div>


            <div class="form-check mr-auto ml-3 mt-3">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" id="policy" name="policy" {{ old('policy', 1) ? 'checked' : '' }} >
                <span class="form-check-sign">
                  <span class="check"></span>
                </span>
                {{ __('Eu concordo com a ') }} <a href="#" style="color: #4327c2">{{ __('Política de Privacidade') }}</a>
              </label>
            </div>
          </div>
          <div class="card-footer justify-content-center">
            <button type="submit" class="btn btn-primary btn-link btn-lg" style="color: #4327c2">{{ __('Cria sua conta') }}</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
      $(document).ready(function ($) { 
        var $CPFmask = $("#CPF");
        $CPFmask.mask('000.000.000-00'), {reverse: true};
    });

    $(document).ready(function ($) { 
        var $RGmask = $("#RG");
        $RGmask.mask('00.000.000-0'), {reverse: true};
    });

    $(document).ready(function ($) { 
        var $TELEFONEmask = $("#TELEFONE");
        $TELEFONEmask.mask('(00) 0000-0000'), {reverse: true};
    });

    $(document).ready(function ($) { 
        var $CELULARmask = $("#CELULAR");
        $CELULARmask.mask('(00) 00000-0000'), {reverse: true};
    });

    $(document).ready(function ($) { 
        var $CEPmask = $("#CEP");
        $CEPmask.mask('00000-000'), {reverse: true};
    });

    $(document).ready(function ($) { 
        var $NASCIMENTOmask = $("#NASCIMENTO");
        $NASCIMENTOmask.mask("99/99/9999"), {reverse: true};
    });




    $(document).ready(function() {

function limpa_formulário_cep() {
    // Limpa valores do formulário de cep.
    $("#rua").val("");
    $("#bairro").val("");
    $("#cidade").val("");
    $("#uf").val("...");
}

//Quando o campo cep perde o foco.
$("#CEP").blur(function() {

    //Nova variável "cep" somente com dígitos.
    var cep = $(this).val().replace(/\D/g, '');

    //Verifica se campo cep possui valor informado.
    if (cep != "") {

        //Expressão regular para validar o CEP.
        var validacep = /^[0-9]{8}$/;

        //Valida o formato do CEP.
        if(validacep.test(cep)) {

            //Preenche os campos com "..." enquanto consulta webservice.
            $("#rua").val("...");
            $("#bairro").val("...");
            $("#cidade").val("...");
            $("#uf").val("...");

            //Consulta o webservice viacep.com.br/
            $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                if (!("erro" in dados)) {
                    //Atualiza os campos com os valores da consulta.
                    $("#rua").val(dados.logradouro);
                    $("#bairro").val(dados.bairro);
                    $("#cidade").val(dados.localidade);
                    $("#uf").val(dados.uf);
                } //end if.
                else {
                    //CEP pesquisado não foi encontrado.
                    limpa_formulário_cep();
                    alert("CEP não encontrado.");
                }
            });
        } //end if.
        else {
            //cep é inválido.
            limpa_formulário_cep();
            alert("Formato de CEP inválido.");
        }
    } //end if.
    else {
        //cep sem valor, limpa formulário.
        limpa_formulário_cep();
    }
});
});

</script>
@endsection
