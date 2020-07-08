<script
  src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
  integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g="
  crossorigin="anonymous"></script>

@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'register', 'title' => __('BMS Care')])

<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>


<style>
   input[type="file"] {
      display: none;
   }

   label[for="camera"], label[for="diploma_certificado"] {
    padding: 20px 10px;
    width: 95%;
    position: relative;
    background-color: white;
    opacity: 0.2;
    left: 12px;
    color: #ccc;
    border-radius:10px;
    border: 2px dashed #737373;
    /* border: 2px dashed #949494; */
    text-align: center;
    display: block;
    font-size:30px; 
    font-family:"Helvetica Neue", Helvetica, Arial;
    margin-top: 10px;
    cursor: pointer;
}

select {
  color: gray;
  transition: color 0s 2147483647s;
}

select:focus,
select:focus {
  color: black;
  transition:0s;
}

select option {
   color: #999999;
}

</style>



 @section('content')
<div class="container">
  <div class="row align-items-center">
    <div class="col-lg-8 col-md-12 col-sm-8 ml-auto mr-auto">
      <form class="form" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf

        <div class="card card-login card-hidden mb-3">
          <div class="card-header card-header-secondary text-center" style="background-color: #4327c2">
            <h4 class="card-title pt-2 pb-2 "><strong style="font-size: 25px; ">{{ __('Cadastre-se') }}</strong></h4>

          </div>
          <div class="card-body pl-0 pb-0">
            <p class="card-description text-center ml-3">{{ __('Já tem uma conta? faça ') }} <a href="{{ route('login') }}" style="color: #4327c2"> {{ __( 'Login')}}</a></p>
            
            {{--
            
              -- CAMPO DE REGISTRO 'NOME'
              
            --}}
            <div class="bmd-form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="material-icons">face</i>
                  </span>
                </div>
                <input type="text" name="name" class="form-control" placeholder="{{ __('Nome completo') }}" value="{{ old('name') }}">
              </div>
              @if ($errors->has('name'))
                <div id="name-error" class="error text-danger pl-3" for="name" style="display: block;">
                  <strong>{{ $errors->first('name') }}</strong>
                </div>
              @endif
            </div>

            {{--
            
              -- CAMPO DE REGISTRO 'CPF'
              
            --}}

            <div class="bmd-form-group mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">article</i>
                  </span>
                </div>
                <input type="text" name="cpf" id="CPF" class="form-control" placeholder="{{ __('CPF') }}" value="{{ old('cpf') }}">
              </div>
              @if ($errors->has('cpf'))
              <div id="cpf-error" class="error text-danger pl-3" for="cpf" style="display: block;">
                <strong>{{ $errors->first('cpf') }}</strong>
              </div>
            @endif
            </div>

            {{--
            
              -- CAMPO DE REGISTRO 'RG'
              
            --}}

            <div class="bmd-form-group mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">article</i>
                  </span>
                </div>
                <input type="text" name="rg" id="RG" class="form-control cpf-mask" placeholder="{{ __('RG') }}" value="{{ old('rg') }}">
              </div>
              @if ($errors->has('rg'))
               <div id="rg-error" class="error text-danger pl-3" for="rg" style="display: block;">
                  <strong>{{ $errors->first('rg') }}</strong>
               </div>
              @endif
            </div>

            {{--
            
              -- CAMPO DE REGISTRO 'NASCIMENTO'
              
            --}}


            <div class="bmd-form-group mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">insert_invitation</i>
                  </span>
                </div>
                <input type="text" name="nascimento" id="NASCIMENTO" class="form-control" placeholder="{{ __('Data de nascimento') }}">
              </div>
              @if ($errors->has('nascimento'))
               <div id="nascimento-error" class="error text-danger pl-3" for="nascimento" style="display: block;">
                  <strong>{{ $errors->first('nascimento') }}</strong>
               </div>
               @endif
            </div>

            {{--
            
              -- CAMPO DE REGISTRO 'CEP'
              
            --}}

            <div class="bmd-form-group mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">location_on</i>
                  </span>
                </div>
                <input type="text" name="cep" id="CEP" class="form-control" placeholder="{{ __('CEP') }}" value="{{ old('cep') }}">
              </div>

              @if ($errors->has('cep'))
                <div id="cep-error" class="error text-danger pl-3" for="cep" style="display: block;">
                  <strong>{{ $errors->first('cep') }}</strong>
                </div>
              @endif
            </div>

            {{--
            
              -- CAMPO DE REGISTRO 'RUA'
              
            --}}

            <div class="bmd-form-group mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">home</i>
                  </span>
                </div>
                    <input type="text" name="rua" id="rua" class="form-control w-25" placeholder="{{ __('Rua') }}" value="{{ old('rua') }}">
                    <input type="number" name="numero" id="numero" class="form-control" placeholder="{{ __(' Número') }}" value="{{ old('numero') }}">
               </div>
            </div>

            {{--
            
              -- CAMPO DE REGISTRO 'BAIRRO'
              
            --}}

            <div class="bmd-form-group mt-3">
               <div class="input-group">
                  <div class="input-group-prepend">
                     <span class="input-group-text">
                     <i class="material-icons">home</i>
                     </span>
                  </div>
                  <input type="text" name="bairro" id="bairro" class="form-control w-25" placeholder="{{ __('Bairro') }}" value="{{ old('bairro') }}">
                  <input type="text" name="complemento" id="complemento" class="form-control" placeholder="{{ __(' Complemento') }}" value="{{ old('complemento') }}">
               </div>
            </div>

            {{--
            
              -- CAMPO DE REGISTRO 'CIDADE'
              
            --}}

            <div class="bmd-form-group mt-3">
               <div class="input-group">
                  <div class="input-group-prepend">
                     <span class="input-group-text">
                     <i class="material-icons">apartment</i>
                     </span>
                  </div>
                     <input type="text" name="cidade" id="cidade" class="form-control w-25" placeholder="{{ __('Cidade') }}" value="{{ old('cidade') }}">
                     <input type="text" name="estado" id="uf" class="form-control" placeholder="{{ __(' Estado') }}" value="{{ old('estado') }}">
               </div>
            </div>

            {{--
            
              -- CAMPO DE REGISTRO 'REFERENCIA'
              
            --}}

            <div class="bmd-form-group mt-3">
               <div class="input-group">
                  <div class="input-group-prepend">
                     <span class="input-group-text">
                     <i class="material-icons">store</i>
                     </span>
                  </div>
                     <input type="text" name="referencia" id="referencia" class="form-control w-25" placeholder="{{ __('Ponto de referência (opcional)') }}" value="{{ old('referencia') }}">
               </div>
            </div>

            {{--
            
              -- CAMPO DE REGISTRO 'TELEFONE FIXO'
              
            --}}

            <div class="bmd-form-group mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">contact_phone</i>
                  </span>
                </div>
                  <input type="text" name="telefone_fixo" id="TELEFONE" class="form-control w-50" placeholder="{{ __('Telefone Fixo') }}" value="{{ old('telefone_fixo') }}">
              </div>
               @if ($errors->has('telefone_fixo'))
                  <div id="telefone_fixo-error" class="error text-danger pl-3" for="telefone_fixo" style="display: block;">
                     <strong>{{ $errors->first('telefone_fixo') }}</strong>
                  </div>
               @endif
            </div>

            {{--
            
              -- CAMPO DE REGISTRO 'CELULAR'
              
            --}}

            <div class="bmd-form-group{{ $errors->has('celular') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">call</i>
                  </span>
                </div>
                <input type="text" name="celular" id="CELULAR" class="form-control w-50" placeholder="{{ __('Celular/WhatsApp') }}" value="{{ old('celular') }}">
              </div>
                  @if ($errors->has('celular'))
                     <div id="celular-error" class="error text-danger pl-3" for="celular" style="display: block;">
                        <strong>{{ $errors->first('celular') }}</strong>
                     </div>
                  @endif
            </div>

            {{--
            
              -- CAMPO DE REGISTRO 'EMAIL'
              
            --}}

            <div class="bmd-form-group{{ $errors->has('email') ? ' has-danger' : '' }} mt-3">
               <div class="input-group">
                  <div class="input-group-prepend">
                     <span class="input-group-text" >
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

            {{--
            
              -- FAZENDO UM SELECT, PARA MOSTRAR INPUT'S ESPECIFICADOS PELO TIPO DE USUÁRIO
              
            --}}

            <div class="bmd-form-group mt-3">
               <div class="input-group">
                  <div class="input-group-prepend">
                     <span class="input-group-text">
                        <i class="material-icons">account_box</i>
                     </span>
                  </div>
                  
                  <select id="status" name="tipo_usuario" class="form-control" style="cursor: pointer;">
                     <option disabled selected >{{ __("Tipo de usuário")}}</option>
                     <option value="Profissional">Profissional</option>
                     <option value="Cliente">Cliente</option>
                  </select>
              </div>
            </div>

            {{--
            
              -- INPUT'S PARA O CLIENTE PADRÃO
              
            --}}

            <div id="cliente" style="display: none !important">
   
               {{--
               
                  -- CAMPO DE REGISTRO 'PARA O TIPO DE PAGAMENTO' (OPCIONAL)
                  
               --}}

               <div class="bmd-form-group mt-3">
                  <div class="input-group">
                     <div class="input-group-prepend">
                        <span class="input-group-text">
                           <i class="material-icons">payment</i>
                        </span>
                     </div>
                     <select class="form-control" name="forma_pagamento" id="forma_pagamento" style="cursor: pointer; color: #999999">
                        {{-- <option disabled selected value='null'>{{__(' Forma de pagamento (opcional)')}}</option> --}}
                        <option value="Cartão de Crédito">Cartão de Crédito</option>
                        <option value="PagSeguro">PagSeguro</option>
                        <option value="Cartão de Débito">Cartão de Débito</option>
                        <option value="Boleto">Boleto</option>
                     </select>
                  </div>
               </div>
         </div>

            {{--
            
              -- INPUT'S PARA O PROFISSIONAL DA SAÚDE
              
            --}}


            <div id="profissional" style="display: none !important">
            
               {{--
               
               -- CAMPO DE REGISTRO 'SITE' (OPCIONAL)
               
               --}}


               <div class="bmd-form-group mt-3">
                  <div class="input-group">
                     <div class="input-group-prepend">
                        <span class="input-group-text">
                           <i class="material-icons">link</i>
                        </span>
                     </div>
                     <input type="text" name="site" id="site" class="form-control" placeholder="{{ __('Site (opcional)') }}" value="{{ old('site') }}" >
                  </div>

               </div>

               {{--
               
               -- CAMPO DE REGISTRO 'FACEBOOK (CONTA)'
               
               --}}

               <div class="bmd-form-group mt-3">
                  <div class="input-group">
                     <div class="input-group-prepend">
                        <span class="input-group-text">
                           <img src="https://img.icons8.com/ios/24/000000/facebook-f.png"/>
                        </span>
                     </div>
                     <input type="text" name="facebook" class="form-control" placeholder="{{ __('Facebook (opcional)') }}" value="{{ old('facebook') }}" >
                  </div>
               </div>

               {{--
               
               -- CAMPO DE REGISTRO 'TWITTER (CONTA)' (OPCIONAL)
               
               --}}

               <div class="bmd-form-group mt-3">
                  <div class="input-group">
                     <div class="input-group-prepend">
                        <span class="input-group-text">
                           <img src="https://img.icons8.com/ios/24/000000/twitter.png"/>
                        </span>
                     </div>
                     <input type="text" name="twitter" class="form-control" placeholder="{{ __('Twitter (opcional)') }}" value="{{ old('twitter') }}" >
                  </div>
               </div>

               {{--
               
               -- CAMPO DE REGISTRO 'LINKEDIN (CONTA)' (OPCIONAL)
               
               --}}

               <div class="bmd-form-group mt-3">
                  <div class="input-group">
                     <div class="input-group-prepend">
                        <span class="input-group-text">
                           <img src="https://img.icons8.com/ios/24/000000/linkedin.png"/>
                        </span>
                     </div>
                     <input type="text" name="linkedin" class="form-control" placeholder="{{ __('Linkedin (opcional)') }}" value="{{ old('linkedin') }}" >
                  </div>
               </div>
            
               <div class="bmd-form-group mt-3">
                  <div class="input-group d-flex justify-content-center align-items-center">
                     <label for="camera" ><i class="material-icons-outlined">add_a_photo</i></label>
                     <input type="file" name="foto" accept="image/*" multiple id="camera">
                     <img id="frame">
                  </div>
               </div>




               <div class="bmd-form-group mt-3">
                  <div class="input-group">
                     <div class="input-group-prepend">
                        <span class="input-group-text">
                           <i class="material-icons">account_box</i>
                        </span>
                     </div>
                     <select id="numeros" name="numeros" class="form-control" style="cursor: pointer">
                        <option disabled default selected >{{ __('CRM/COREN/CRF/COFEN')}}</option>
                        <option value="CRM">CRM</option>
                        <option value="COREN">COREN</option>
                        <option value="CRF">CRF</option>
                        <option value="COFEN">COFEN</option>
                        <option value="CRN">CRN</option>
                        <option value="CRI">CRI</option>
                     </select>
                  </div>
               </div>


            {{--
            
              -- CAMPO DE REGISTRO 'CRM'
              
            --}}
 
               <div class="CRM" style="display: none !important">
                  <div class="bmd-form-group{{ $errors->has('crm') ? ' has-danger' : '' }} mt-3">
                     <div class="input-group">
                        <div class="input-group-prepend">
                           <span class="input-group-text">
                              <i class="material-icons">email</i>
                           </span>
                        </div>
                        <input type="number" name="crm" id="CRM" class="form-control" placeholder="{{ __(' CRM') }}" value="{{ old('crm') }}" >
                     </div>
                     @if ($errors->has('crm'))
                        <div id="crm-error" class="error text-danger pl-3" for="crm" style="display: block;">
                        <strong>{{ $errors->first('crm') }}</strong>
                        </div>
                     @endif
                  </div>
               </div>

         
            {{--
            
              -- CAMPO DE REGISTRO 'COREN'
              
            --}}

               <div class="COREN" style="display: none !important">
                  <div class="bmd-form-group{{ $errors->has('coren') ? ' has-danger' : '' }} mt-3">
                     <div class="input-group">
                        <div class="input-group-prepend">
                           <span class="input-group-text">
                              <i class="material-icons">email</i>
                           </span>
                        </div>
                        <input type="text" name="coren" id="COREN" class="form-control" placeholder="{{ __(' Coren ex.: COREN-XX-000.000-XXX') }}" value="{{ old('coren') }}" >
                     </div>
                     @if ($errors->has('coren'))
                        <div id="coren-error" class="error text-danger pl-3" for="coren" style="display: block;">
                        <strong>{{ $errors->first('coren') }}</strong>
                     @endif
                  </div>
               </div>


            {{--
            
              -- CAMPO DE REGISTRO 'CRF'
              
            --}}

               <div class="CRF" style="display: none !important">
                  <div class="bmd-form-group{{ $errors->has('crf') ? ' has-danger' : '' }} mt-3">
                     <div class="input-group">
                        <div class="input-group-prepend">
                           <span class="input-group-text">
                              <i class="material-icons">email</i>
                           </span>
                        </div>
                        <input type="text" name="crf" id="CRF" class="form-control" placeholder="{{ __(' CRF') }}" value="{{ old('crf') }}" >
                     </div>
                     @if ($errors->has('crf'))
                        <div id="crf-error" class="error text-danger pl-3" for="crf" style="display: block;">
                        <strong>{{ $errors->first('crf') }}</strong>
                        </div>
                     @endif
                  </div>
               </div>

            {{--
            
              -- CAMPO DE REGISTRO 'COFEN'
              
            --}}

               <div class="COFEN" style="display: none !important">
                  <div class="bmd-form-group{{ $errors->has('cofen') ? ' has-danger' : '' }} mt-3">
                     <div class="input-group">
                        <div class="input-group-prepend">
                           <span class="input-group-text">
                              <i class="material-icons">email</i>
                           </span>
                        </div>
                        <input type="text" name="cofen" id="COFEN" class="form-control" placeholder="{{ __(' Cofen') }}" value="{{ old('cofen') }}" >
                     </div>
                     @if ($errors->has('cofen'))
                        <div id="cofen-error" class="error text-danger pl-3" for="cofen" style="display: block;">
                        <strong>{{ $errors->first('cofen') }}</strong>
                        </div>
                     @endif
                  </div>
               </div>


            {{--
            
              -- CAMPO DE REGISTRO 'CRN'
              
            --}}

               <div class="CRN" style="display: none !important">
                  <div class="bmd-form-group{{ $errors->has('crn') ? ' has-danger' : '' }} mt-3">
                     <div class="input-group">
                        <div class="input-group-prepend">
                           <span class="input-group-text">
                              <i class="material-icons">email</i>
                           </span>
                        </div>
                        <input type="text" name="crn" id="CRN" class="form-control" placeholder="{{ __(' CRN') }}" value="{{ old('crn') }}" >
                     </div>
                     @if ($errors->has('crn'))
                        <div id="crn-error" class="error text-danger pl-3" for="crn" style="display: block;">
                        <strong>{{ $errors->first('crn') }}</strong>
                        </div>
                     @endif
                  </div>
               </div>

               <div class="cri" style="display: none !important">
                  <div class="bmd-form-group{{ $errors->has('cri') ? ' has-danger' : '' }} mt-3 ">
                     <div class="input-group">
                        <div class="input-group-prepend">
                           <span class="input-group-text">
                              <i class="material-icons">email</i>
                           </span>
                        </div>
                        <input type="text" name="cri" id="CRI" class="form-control" placeholder="{{ __(' CRI') }}" value="{{ old('cri') }}" >
                     </div>
                     @if ($errors->has('cri'))
                        <div id="cri-error" class="error text-danger pl-3" for="cri" style="display: block;">
                        <strong>{{ $errors->first('cri') }}</strong>
                        </div>
                     @endif
                  </div>
               </div>

               <h5 class="mt-3 ml-3">Faça sua assinatura digital</h5>

               <div class="bmd-form-group mt-3 ">
                  <div class="input-group">
                     <canvas id="canvas" class="ml-3" style="border: 1px solid #d2d2d2"  width="350%" height="100px"> 
                     </canvas>
                     <div class="d-flex justify-content-between ml-3">
                        <button type="button" class="btn btn-outline-primary pt-1 pb-1" id="resetCanvas">reset</button>
                        <button type="button" class="btn btn-outline-primary pt-1 pb-1" style="position: relative; left: 160px" id="saveCanvas">save</button>
                     </div>
                  </div>
               </div>


               <input type="text" value="" name="assinatura_digital" accept="image/*" style="display: none !important"  id="imgConverted">

            <h5 class="mt-3 ml-3">Formação (Selecione todos que se aplicam)</h5>

               <div class="bmd-form-group mt-3">
                  <div class="input-group ml-4 pl-3">
                     <label for="tecnico">Técnico</label>
                     <input class="form-check-input" style="position: absolute; bottom: 10px" type="checkbox" id="tecnico" name="tecnico" {{ old('tecnico') ? 'checked' : '' }} >
                  </div>
                  <div class="input-group">
                     <div class="input-group-prepend">
                        <span class="input-group-text">
                           <i class="material-icons">business</i>
                        </span>
                     </div>
                     <input type="text" class="form-control" name="instituicao_tecnico" placeholder="Instituição">
                  </div>
                  <div class="input-group">
                     <div class="input-group-prepend">
                        <span class="input-group-text">
                           <i class="material-icons">insert_invitation</i>
                        </span>
                     </div>
                     <input type="text" class="form-control" name="conclusao_tecnico" placeholder="Data Conclusão" id="CONCLUSAO" >
                  </div>
               </div>

               <div class="bmd-form-group mt-3 ">
                  <div class="input-group ml-4 pl-3">
                     <label for="superior_completo">Superior Completo</label>
                     <input class="form-check-input" type="checkbox" style="position: absolute; bottom: 10px" id="superior_completo" name="superior_completo" {{ old('superior_completo') ? 'checked' : '' }} >
                  </div>
                  <div class="input-group">
                     <div class="input-group-prepend">
                        <span class="input-group-text">
                           <i class="material-icons">business</i>
                        </span>
                     </div>
                     <input type="text" class="form-control" name="instituicao_superior" placeholder="Instituição" id="">
                  </div>
                  <div class="input-group">
                     <div class="input-group-prepend">
                        <span class="input-group-text">
                           <i class="material-icons">insert_invitation</i>
                        </span>
                     </div>
                     <input type="text" class="form-control" name="conclusao_superior" placeholder="Data Conclusão" id="CONCLUSAO"> 
                  </div>
               </div>

               <div class="bmd-form-group mt-3 ">
                  <div class="input-group ml-4 pl-3">
                     <label for="pos_graduacao">Pós-Graduação</label>
                     <input class="form-check-input" type="checkbox" style="position: absolute; bottom: 10px" id="pos_graduacao" name="pos_graduacao" {{ old('pos_graduacao') ? 'checked' : '' }} >
                  </div>
                  <div class="input-group">
                     <div class="input-group-prepend">
                        <span class="input-group-text">
                           <i class="material-icons">business</i>
                        </span>
                     </div>
                     <input type="text" class="form-control" name="instituicao_pos" placeholder="Instituição" >
                  </div>
                  <div class="input-group">
                     <div class="input-group-prepend">
                        <span class="input-group-text">
                           <i class="material-icons">insert_invitation</i>
                        </span>
                     </div>
                     <input type="text" class="form-control" name="conclusao_pos" placeholder="Data Conclusão" id="CONCLUSAO">    
                  </div>
               </div>

               <div class="bmd-form-group mt-3 ">
                  <div class="input-group ml-4 pl-3">
                     <label for="mestrado">Mestrado</label>
                     <input class="form-check-input" type="checkbox" style="position: absolute; bottom: 10px" id="mestrado" name="mestrado" {{ old('mestrado') ? 'checked' : '' }} >
                  </div>
                  <div class="input-group">
                     <div class="input-group-prepend">
                        <span class="input-group-text">
                           <i class="material-icons">business</i>
                        </span>
                     </div>
                     <input type="text" class="form-control" name="instituicao_mestrado" placeholder="Instituição" id="">
                  </div>
                  <div class="input-group">
                     <div class="input-group-prepend">
                        <span class="input-group-text">
                           <i class="material-icons">insert_invitation</i>
                        </span>
                     </div>
                     <input type="text" class="form-control" name="conclusao_mestrado" placeholder="Data Conclusão" id="CONCLUSAO">    
                  </div>
               </div>

               <div class="bmd-form-group mt-3 ">
                  <div class="input-group ml-4 pl-3">
                     <label for="doutorado">Doutorado</label>
                     <input class="form-check-input" type="checkbox" style="position: absolute; bottom: 10px"  id="doutorado" name="doutorado" {{ old('doutorado') ? 'checked' : '' }} >
                  </div>
                  <div class="input-group">
                     <div class="input-group-prepend">
                        <span class="input-group-text">
                           <i class="material-icons">business</i>
                        </span>
                     </div>
                     <input type="text" class="form-control" name="instituicao_doutorado" placeholder="Instituição" id="">
                  </div>
                  <div class="input-group">
                     <div class="input-group-prepend">
                        <span class="input-group-text">
                           <i class="material-icons">insert_invitation</i>
                        </span>
                     </div>
                     <input type="text" class="form-control" name="conclusao_doutorado" placeholder="Data Conclusão" id="CONCLUSAO">     
                  </div>
               </div>

               <div class="bmd-form-group mt-3 ">
                  <div class="input-group ml-4 pl-3">
                     <label for="especializacao">Especialização</label>
                     <input class="form-check-input" type="checkbox" style="position: absolute; bottom: 10px" id="especializacao" name="especializacao" {{ old('especializacao') ? 'checked' : '' }} >
                  </div>
                  <div class="input-group">
                     <div class="input-group-prepend">
                        <span class="input-group-text">
                           <i class="material-icons">business</i>
                        </span>
                     </div>
                     <input type="text" class="form-control" name="instituicao_especializacao" placeholder="Instituição" id="">
                  </div>
                  <div class="input-group">
                     <div class="input-group-prepend">
                        <span class="input-group-text">
                           <i class="material-icons">insert_invitation</i>
                        </span>
                     </div>
                     <input type="text" class="form-control" name="conclusao_especializacao" placeholder="Data Conclusão" id="CONCLUSAO">     
                  </div>
               </div>

               <div class="bmd-form-group mt-3 ">
                  <div class="input-group">
                     <div class="input-group d-flex justify-content-center align-items-center">
                        <label for="diploma_certificado">Diploma/Certificado<i class="material-icons">save_alt</i></label>
                        <input type="file" id="diploma_certificado" class="form-control" name="diploma_certificado" multiple >
                     </div>
                  </div>
               </div>

            
            <h5 class="mt-3 ml-3">Contato de Referência Pessoal</h5>
          

            {{--
            
              -- DADOS DO CONTATO 1
              
            --}}


               {{--
               
                  -- CAMPO DE REGISTRO 'NOME' PARA O CONTATO 1
               
               --}}
               <div class="bmd-form-group mt-3">
                  <div class="input-group">
                     <div class="input-group-prepend">
                        <span class="input-group-text">
                           <i class="material-icons">face</i>
                        </span>
                     </div>
                     <input type="name" name="nomeContato1" class="form-control" placeholder="{{ __(' Nome contato') }}" value="{{ old('nomeContato1') }}">
                  </div>
               </div>

               {{--
               
                  -- CAMPO DE REGISTRO 'EMAIL' PARA O CONTATO 1
               
               --}}
               <div class="bmd-form-group mt-3">
                  <div class="input-group">
                     <div class="input-group-prepend">
                        <span class="input-group-text">
                           <i class="material-icons">email</i>
                        </span>
                     </div>
                     <input type="email" name="emailContato1" class="form-control" placeholder="{{ __(' Email contato') }}" value="{{ old('emailContato1') }}">
                  </div>
               </div>

               {{--
               
                  -- CAMPO DE REGISTRO 'TELEFONE' PARA O CONTATO 1
               
               --}}

               <div class="bmd-form-group mt-3">
                  <div class="input-group">
                     <div class="input-group-prepend">
                        <span class="input-group-text">
                           <i class="material-icons">contact_phone</i>
                        </span>
                     </div>
                     <input type="text" name="celContato1" class="form-control" placeholder="{{ __(' Telefone contato') }}" value="{{ old('celContato1') }}" id="CONTATO">
                  </div>
               </div>

            {{--
            
              -- DADOS DO CONTATO 2
              
            --}}


               {{--
               
                  -- CAMPO DE REGISTRO 'NOME' PARA O CONTATO 2
               
               --}}
              <div class="bmd-form-group mt-3">
                  <div class="input-group">
                     <div class="input-group-prepend">
                        <span class="input-group-text">
                           <i class="material-icons">face</i>
                        </span>
                     </div>
                     <input type="name" name="nomeContato2" class="form-control" placeholder="{{ __(' Nome contato 2') }}" value="{{ old('nomeContato2') }}">
                  </div>
              </div>

               {{--
               
                  -- CAMPO DE REGISTRO 'EMAIL' PARA O CONTATO 2
               
               --}}
              <div class="bmd-form-group mt-3">
                  <div class="input-group">
                     <div class="input-group-prepend">
                        <span class="input-group-text">
                           <i class="material-icons">email</i>
                        </span>
                     </div>
                     <input type="email" name="emailContato2" class="form-control" placeholder="{{ __(' Email contato 2') }}" value="{{ old('emailContato2') }}">
                  </div>
              </div>

               {{--
            
                  -- CAMPO DE REGISTRO 'TELEFONE' PARA O CONTATO 2
               
               --}}

              <div class="bmd-form-group mt-3">
                  <div class="input-group">
                     <div class="input-group-prepend">
                        <span class="input-group-text">
                           <i class="material-icons">contact_phone</i>
                        </span>
                     </div>
                     <input type="text" name="celContato2" class="form-control" placeholder="{{ __(' Telefone contato 2') }}" value="{{ old('celContato2') }}" id="CONTATO2">
                  </div>
              </div>

               {{--
               
                  -- CAMPO DE REGISTRO 'FORMA DE RECEBIMENTO'
               
               --}}

               <div class="bmd-form-group mt-3">
                  <div class="input-group">
                     <div class="input-group-prepend">
                        <span class="input-group-text">
                           <i class="material-icons">payment</i>
                        </span>
                     </div>
                     <select class="form-control" name="forma_recebimento" style="cursor: pointer">
                        <option disabled selected style="#d1d1d1">{{__(' Forma de recebimento')}}</option>
                        <option value="Cartão de Crédito">Banco</option>
                        <option value="PagSeguro">Agência</option>
                        <option value="Cartão de Débito">Conta</option>
                     </select>
                  </div>
              </div>

              <h5 class="mt-3 ml-3">Raio de Atuação</h5>

              <div class="bmd-form-group mt-3">
               <div class="input-group">
                  <div class="input-group-prepend">
                     <span class="input-group-text">
                        <i class="material-icons">location_on</i>
                     </span>
                  </div>
                  <select class="form-control" name="forma_recebimento" style="cursor: pointer">
                     <option disabled selected style="#d1d1d1">{{__(' Endereço cadastrado')}}</option>
                     <option value="5km">5KM</option>
                     <option value="10km">10KM</option>
                     <option value="20km">20KM</option>
                     <option value="30km">30KM</option>
                     <option value="50km">50KM</option>
                     <option value="100km">100KM</option>
                  </select>
               </div>

               <div class="bmd-form-group mt-3">
                  <div class="input-group">
                     <div class="input-group-prepend">
                        <span class="input-group-text">
                           <i class="material-icons">location_on</i>
                        </span>
                     </div>
                     <select class="form-control" name="forma_recebimento" style="cursor: pointer">
                        <option disabled selected style="#d1d1d1">{{__(' Localização Atual')}}</option>
                        <option value="5km">5KM</option>
                        <option value="10km">10KM</option>
                        <option value="20km">20KM</option>
                        <option value="30km">30KM</option>
                        <option value="50km">50KM</option>
                        <option value="100km">100KM</option>
                     </select>
                  </div>
               </div>
            </div>




         </div>
                    
               {{--
               
                  -- CAMPO DE REGISTRO 'SENHA'
                  
               --}}
               
               <div class="bmd-form-group {{ $errors->has('password') ? ' has-danger' : '' }} mt-3">
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
              
               {{--
               
                  -- CAMPO DE REGISTRO 'CONFIRMAÇÃO SENHA'
                  
               --}}

               
               <div class="bmd-form-group {{ $errors->has('password_confirmation') ? ' has-danger' : '' }} mt-3 ">
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

          



        {{--
        
          -- POLITICA DE PRIVACIDADE
          
        --}}


         <div class="form-check mr-auto mt-3 ml-3 pl-1">
            <label class="form-check-label">
               <input class="form-check-input" type="checkbox" id="policy" name="policy" {{ old('policy', 1) ? 'checked' : '' }} >
                  <span class="form-check-sign">
                     <span class="check"></span>
                  </span>
                  {{ __('Eu concordo com a ') }} <a href="#" style="color: #4327c2">{{ __('Política de Privacidade') }}</a>
            </label>
         </div>

          {{--
            
            -- BOTÃO DE SUBMIT
              
          --}}


         <div class="card-footer justify-content-center">
            <button type="submit" class="btn btn-primary btn-link btn-lg" style="color: #4327c2">{{ __('Criar sua conta') }}</button>
         </div>          
      
      </form>
    </div>
  </div>
</div>

<script>

/*
* Utilizando jquery, para puxar os input's especificos, para cada tipo de usuário
*/

//Puxando o select
$("#status").change(function() {

    //Deixando os input's por padrão escondidos
    $('#cliente').hide();

    //Puxando o valor da option, do select
    if(this.value == "Cliente")
      //Quando puxar o valor da option, o grupo de input's aparecera
      $('#cliente').show();

    //Mesma coisa que eu fiz acima, só que com outro grupo de input's
    $('#profissional').hide()
    if (this.value == "Profissional")
      $('#profissional').show()
 });

 $("#numeros").change(function() {

    $('.CRM').hide();

    if(this.value == "CRM")
      $('.CRM').show();

    $('.COREN').hide()
    if (this.value == "COREN")
      $('.COREN').show()

    $('.CRF').hide()
    if (this.value == "CRF")
      $('.CRF').show()

    $('.COFEN').hide()
    if (this.value == "COFEN")
      $('.COFEN').show()

    $('.CRN').hide()
    if (this.value == "CRN")
      $('.CRN').show()

    $('.CRI').hide()
    if (this.value == "CRI")
      $('.CRI').show()
    });

    /*
    * MASCÁRAS COM JQUERY
    */


    //CPF
    $(document).ready(function ($) { 
        var $CPFmask = $("#CPF");
        $CPFmask.mask('000.000.000-00'), {reverse: true};
    });

    $(document).ready(function ($) { 
        var $CONCLUSAOmask = $("#CONCLUSAO");
        $CONCLUSAOmask.mask('99/99/9999'), {reverse: true};
    });

    $(document).ready(function ($) { 
        var $CONTATOmask = $("#CONTATO");
        $CONTATOmask.mask('(00) 00000-0000'), {reverse: true};
    });

    $(document).ready(function ($) { 
        var $CONTATOmask = $("#CONTATO2");
        $CONTATOmask.mask('(00) 00000-0000'), {reverse: true};
    });


    //RG
    $(document).ready(function ($) { 
        var $RGmask = $("#RG");
        $RGmask.mask('00.000.000-0'), {reverse: true};
    });

    //COREN
    $(document).ready(function ($) { 
        var $CORENmask = $("#COREN");
        $CORENmask.mask('COREN-AA-000.000-AAA'), {reverse: true};
    });

    //CRN
    $(document).ready(function ($) { 
        var $CRNmask = $("#CRN");
        $CRNmask.mask('CRN-0 00000/A'), {reverse: true};
    });

    //COFEN
    $(document).ready(function ($) { 
        var $COFENmask = $("#COFEN");
        $COFENmask.mask('N° 000/0000'), {reverse: true};
    });

    //TELEFONE
    $(document).ready(function ($) { 
        var $TELEFONEmask = $("#TELEFONE");
        $TELEFONEmask.mask('(00) 0000-0000'), {reverse: true};
    });

    //CELULAR
    $(document).ready(function ($) { 
        var $CELULARmask = $("#CELULAR");
        $CELULARmask.mask('(00) 00000-0000'), {reverse: true};
    });

    //CEP
    $(document).ready(function ($) { 
        var $CEPmask = $("#CEP");
        $CEPmask.mask('00000-000'), {reverse: true};
    });

    //NASCIMENTO
    $(document).ready(function ($) { 
        var $NASCIMENTOmask = $("#NASCIMENTO");
        $NASCIMENTOmask.mask("99/99/9999"), {reverse: true};
    });

    $(document).ready(function ($) { 
        var $CRFmask = $("#CRF");
        $CRFmask.mask("99999"), {reverse: true};
    });


    /*
    * BUSCA DE ENDEREÇO PELO CEP
    */


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
            $("#complemento").val("...");

            //Consulta o webservice viacep.com.br/
            $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                if (!("erro" in dados)) {
                    //Atualiza os campos com os valores da consulta.
                    $("#rua").val(dados.logradouro);
                    $("#bairro").val(dados.bairro);
                    $("#cidade").val(dados.localidade);
                    $("#uf").val(dados.uf);
                    $("#complemento").val(dados.complemento)
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

<script>
  //Buscando os elementos do html
var canvas = document.getElementById('canvas');
var imgConverted = document.getElementById('imgConverted')

 //representando uma  renderização bidimensional
var context = canvas.getContext('2d'); 
 
 //Lindando com o pincel
 var radius = 4; //Grossura do pincel
 var start = 1; 
 var end = Math.PI * 2; 
 var dragging = false; //Para o pincel não começar já desenhando, e sim pressionado antes
 
 context.lineWidth = radius * 2; 
 
 var putPoint = function(e){
   if(dragging){ //Se estiver pressionando o mouse para desenhar
     context.lineTo(e.offsetX, e.offsetY); //Colocando linhas no desenho
     context.stroke(); //Usado para desenhar todos os caminhos feitos por lineTo e moveTo
     context.beginPath(); //Iniciando um caminho novo
     context.arc(e.offsetX, e.offsetY, radius, start, end); //Colocando todos os elementos para funcionar
     context.fill(); //Preenchendo a matriz context com valores estaticus
     context.beginPath(); //Iniciando um caminho novo
     context.moveTo(e.offsetX, e.offsetY); //Caminhando o lineTo (linha do desenho) até o final da borda
   }
 }
 
 //Quando o pincel estiver funcionando, poder desenhar avontade
 var engage = function(e){
   dragging = true;
   putPoint(e);
 }
 
 //Quando parado de clicar, ele para de desenhar e cria um novo caminho
 var disengage = function(){
   dragging = false;
   context.beginPath();
 }
 
 //Adicionando eventos do mouse para as variaveis
 canvas.addEventListener('mousedown', engage);
 canvas.addEventListener('mousemove', putPoint);
 canvas.addEventListener('mouseup', disengage);



 $("#resetCanvas").click(function(){
  var canvas= document.getElementById('canvas');
  var ctx = canvas.getContext('2d');
    ctx.clearRect(0, 0,  canvas.width, canvas.height);
});

$("#saveCanvas").click(function(){
   const dataURI = canvas.toDataURL();
   imgConverted.value = dataURI;
   
});

</script>
@endsection
