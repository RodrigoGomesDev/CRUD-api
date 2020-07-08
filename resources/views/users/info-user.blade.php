{{-- @extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'register', 'title' => __('BMS Care')]) --}}
@extends('layouts.app', ['activePage' => 'info-user', 'titlePage' => __('Informações de usuário')])

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Extra details for Live View on GitHub Pages -->
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://www.creative-tim.com/product/material-dashboard-laravel" />


    <!--  Social tags      -->
    <meta name="keywords" content="creative tim, html dashboard, laravel, html css dashboard laravel, web dashboard, bootstrap 4 dashboard laravel, bootstrap 4, css3 dashboard, bootstrap 4 admin laravel, material ui dashboard bootstrap 4 laravel, frontend, responsive bootstrap 4 dashboard, material design, material laravel bootstrap 4 dashboard">
    <meta name="description" content="BMS Care Laravel is a Free Material Bootstrap Admin Preset for Laravel with a fresh, new design inspired by Google's Material Design.">


    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="BMS Care Laravel by Creative Tim">
    <meta itemprop="description" content="BMS Care Laravel is a Free Material Bootstrap Admin Preset for Laravel with a fresh, new design inspired by Google's Material Design.">

    <meta itemprop="image" content="https://s3.amazonaws.com/creativetim_bucket/products/154/opt_md_laravel_thumbnail.jpg">


    <!-- Twitter Card data -->
    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@creativetim">
    <meta name="twitter:title" content="BMS Care Laravel by Creative Tim">

    <meta name="twitter:description" content="BMS Care Laravel is a Free Material Bootstrap Admin Preset for Laravel with a fresh, new design inspired by Google's Material Design.">
    <meta name="twitter:creator" content="@creativetim">
    <meta name="twitter:image" content="https://s3.amazonaws.com/creativetim_bucket/products/154/opt_md_laravel_thumbnail.jpg">


    <!-- Open Graph data -->
    <meta property="fb:app_id" content="655968622437471">
    <meta property="og:title" content="BMS Care Laravel by Creative Tim" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://material-dashboard-laravel.creative-tim.com/" />
    <meta property="og:image" content="https://s3.amazonaws.com/creativetim_bucket/products/154/opt_md_laravel_thumbnail.jpg"/>
    <meta property="og:description" content="BMS Care Laravel is a Free Material Bootstrap Admin Preset for Laravel with a fresh, new design inspired by Google's Material Design." />
    <meta property="og:site_name" content="Creative Tim" />
    
    <title>{{ __('BMS Care') }}</title>
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('material') }}/img/apple-icon.png">
    <link rel="icon" type="image/png" href="{{ asset('material') }}/img/favicon.png">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="{{ asset('material') }}/css/material-dashboard.css?v=2.1.3" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('material') }}/demo/demo.css" rel="stylesheet" />
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-NKDMSK6');</script>
      <!-- End Google Tag Manager -->

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


      <style>
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
  .form-control:read-only {
    background-color: white;
    border: 0;
  }

      </style>
</head>
<body>

<div class="mt-5">
    <div class="row align-items-center">
      <div class="col-lg-8 col-md-12 col-sm-8 ml-auto mr-auto  mt-5">
        <form method="POST" action="{{ route('profile.newUpdate') }}"  autocomplete="off" class="form-horizontal">
          @csrf
          @method('PUT')


          
          <div class="card card-login card-hidden mb-3">
     
            <div class="card-header card-header-primary text-center" style="background-color: #4327c2">
              <h4 class="card-title pt-2 pb-2 "><strong style="font-size: 25px; ">{{ __('Informações pessoais') }}</strong></h4>
            </div>  


            <div class="card-body">
              <p class="card-description text-center">{{ __('Para agilizar seu atendimento, favor preencher os campos abaixo ') }}</p>
            @if (session('statusNew'))
              <div class="row">
                <div class="col-sm-12">
                  <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <i class="material-icons">close</i>
                    </button>
                    <span>{{ session('statusNew') }}</span>
                  </div>
                </div>
              </div>
            @endif

            <div class="row" style="display: none !important">
              <label class="col-sm-2 col-form-label">{{ __('Name') }}</label>
              <div class="col-sm-7">
                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                  <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="input-name" type="text" placeholder="{{ __('Name') }}" value="{{ old('name', auth()->user()->name) }}" required="true" aria-required="true"/>
                  @if ($errors->has('name'))
                    <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                  @endif
                </div>
              </div>
            </div>
            <div class="row" style="display: none !important">
              <label class="col-sm-2 col-form-label">{{ __('Cartão sus') }}</label>
              <div class="col-sm-7">
                <div class="form-group">
                  <input class="form-control" name="email" id="input-email" type="text" placeholder="{{ __('Email') }}" value="{{ old('email', auth()->user()->email) }}" required />
                </div>
              </div>
            </div>
              <div class="bmd-form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="material-icons">face</i>
                    </span>
                  </div>
                  <input type="text" name="cartao_sus" id="input-sus" class="form-control" placeholder="{{ __(' Cartão do SUS') }}" value="{{ old('cartao_sus', auth()->user()->cartao_sus)  }}">
                </div>
              </div>
  
              <div class="bmd-form-group mt-3">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">article</i>
                    </span>
                  </div>
                  <input type="" name="nome_mae" id="nome_mae" class="form-control" placeholder="{{ __(' Nome da mãe') }}" value="{{ old('nome_mae', auth()->user()->nome_mae)  }}">
                </div>
              </div>
  
              <div class="bmd-form-group mt-3">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">article</i>
                    </span>
                  </div>
                    <select name="sexo"  style="cursor: pointer">
                      <option disabled selected style="#d1d1d1">{{__(' Sexo')}}</option>
                      <option value="Masculino">Masculino</option>
                      <option value="Feminino">Feminino</option>
                    </select>
                  </div>
              </div>

              <div class="bmd-form-group mt-3">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">insert_invitation</i>
                    </span>
                  </div>
                  <input type="text" name="naturalidade" id="naturalidade" class="form-control" placeholder="{{ __(' Naturalidade') }}">
                </div>
              </div>
  
              <div class="bmd-form-group mt-3">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">location_on</i>
                    </span>
                  </div>
                  <input type="text" name="nacionalidade" id="nacionalidade" class="form-control" placeholder="{{ __(' Nacionalidade') }}" value="{{ old('nacionalidade') }}">
                </div>
              </div>
  
              <div class="bmd-form-group mt-3">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">home</i>
                    </span>
                  </div>
                  <select name="cor" style="cursor: pointer">
                      <option disabled selected style="#d1d1d1">{{__(' Cor')}}</option>
                      <option value="Branco">Branco</option>
                    <option value="Pardo">Pardo</option>
                    <option value="Amarelo">Amarelo</option>
                    <option value="Indigena">Indigena</option>
                    <option value="Negro">Negro</option>
                    <option value="Outro">Outro</option>
                  </select>
                </div>
              </div>
  
              <div class="bmd-form-group mt-3">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">home</i>
                    </span>
                  </div>
                  <select name="estado_civil" style="cursor: pointer">
                    <option disabled selected style="#d1d1d1">{{__(' Estado civil')}}</option>
                    <option value="Casado">Casado</option>
                    <option value="Solteiro">Solteiro</option>
                    <option value="Divorciado">Divorciado</option>
                    <option value="Outros">Outros</option>
                  </select>
                </div>
                
              </div>
  
              <div class="bmd-form-group mt-3">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">apartment</i>
                    </span>
                  </div>
                  <input type="text" name="nome_conjuge" id="nome_conjuge" class="form-control w-50" placeholder="{{ __(' Nome do cônjuge') }}" value="{{ old('nome_conjuge') }}">
                </div>
              </div>
  
              <div class="bmd-form-group mt-3">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">store</i>
                    </span>
                  </div>
                  <input type="text" name="num_filhos" id="num_filhos" class="form-control w-50" placeholder="{{ __(' Número de filhos') }}" value="{{ old('num_filhos') }}">
                </div>
              </div>
  
              <div class="bmd-form-group mt-3">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">contact_phone</i>
                    </span>
                  </div>
                  <select name="credo_religiao" style="cursor: pointer">
                    <option disabled selected style="#d1d1d1">{{__(' Credo/Religião')}}</option>
                    <option value="Cristão">Cristão</option>
                    <option value="Muçulmano">Muçulmano</option>
                    <option value="Judeu">Judeu</option>
                    <option value="Budista">Budista</option>
                    <option value="Outros">Outros</option>
                  </select>
                </div>
              </div>
  
              <div class="bmd-form-group mt-3">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">call</i>
                    </span>
                  </div>
                  <select name="escolaridade" style="cursor: pointer">
                    <option disabled selected style="#d1d1d1">{{__(' Escolaridade')}}</option>
                    <option value="1º grau incompleto">1º grau incompleto</option>
                    <option value="1ª grau completo">1ª grau completo</option>
                    <option value="2ª grau incompleto">2ª grau incompleto</option>
                    <option value="2ª grau completo">2ª grau completo</option>
                    <option value="Superior incompleto">Superior incompleto</option>
                    <option value="Superior completo">Superior completo</option>
                  </select>
                </div>
              </div>
  
              <div class="bmd-form-group mt-3">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">email</i>
                    </span>
                  </div>
                  <select name="profissao" style="cursor: pointer">
                    <option disabled selected style="#d1d1d1">{{__(' Profissão')}}</option>
                    <option value="Funcionário Empresa Privada">Funcionário Empresa Privada</option>
                    <option value="Funcionário Público">Funcionário Público</option>
                    <option value="Profissional Liberal">Profissional Liberal</option>
                    <option value="Desempregado">Desempregado</option>
                    <option value="Empresário">Empresário</option>
                    <option value="Outros">Outros</option>
                  </select>
                </div>
              </div>
              
              <div class="bmd-form-group mt-3">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">lock_outline</i>
                    </span>
                  </div>
                  <select name="situacao_previdenciaria" style="cursor: pointer">
                    <option disabled selected style="#d1d1d1">{{__(' Situação previdenciaria')}}</option>
                    <option value="Sem aposentadoria">Sem aposentadoria</option>
                    <option value="Aposentadoria por idade">Aposentadoria por idade</option>
                    <option value="Aposentadoria por tempo de contribuição">Aposentadoria por tempo de contribuição</option>
                    <option value="Aposentadoria por invalidez">Aposentadoria por invalidez</option>
                    <option value="Aposentadoria especial por tempo de contribuição">Aposentadoria especial por tempo de contribuição</option>
                  </select>
                  
                </div>
              </div>
  
              <div class="bmd-form-groups mt-3">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">lock_outline</i>
                    </span>
                  </div>
                  <input type="text" name="telefone_emergencial" id="telefone_emergencial" class="form-control w-50" placeholder="{{ __(' Telefone emergêncial') }}" value="{{ old('telefone_emergencial') }}">
                  </div>
              </div>

              <div class="bmd-form-groups mt-3">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">lock_outline</i>
                    </span>
                  </div>
                      <input type="text" name="alergia_medicamentos" id="alergia_medicamentos" class="form-control w-25" placeholder="{{ __(' Alergia a medicamentos?') }}" value="{{ old('alergia_medicamentos') }}">
                      <input type="text" name="quais" id="quais" class="form-control w-50" placeholder="{{ __(' Quais?') }}" value="{{ old('quais') }}">
                  </div>
              </div>
  
              <div class="bmd-form-groups mt-3">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">lock_outline</i>
                    </span>
                  </div>
                  <select id="slct" name="cirurgia" style="cursor: pointer">
                    <option disabled selected style="#d1d1d1">{{__(' Cirurgia')}}</option>
                    <option value="Sim">Sim</option>
                      <option value="Não">Não</option>
                  </select>
                  <textarea name="textarea" class="form-control w-100" id="txtarea" rows="3" placeholder="{{ __(' Descrever') }}"></textarea> 
                  
                  </div>
              </div>

              <div class="bmd-form-groups mt-3">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">lock_outline</i>
                    </span>
                  </div>
                  <select name="doenca_cronica" style="cursor: pointer">
                    <option disabled selected style="#d1d1d1">{{__(' Doença Cronica')}}</option>
                    <option value="Diabetes">Diabetes</option>
                    <option value="Pressão Alta">Pressão Alta</option>
                    <option value="Enfisema">Enfisema</option>
                    <option value="DPOC">DPOC</option>
                    <option value="Cardiopatias">Cardiopatias</option>
                    <option value="Dialítico">Dialítico</option>
                    <option value="Outros">Outros</option>
                  </select> 
                </div>
              </div>
              <div class="bmd-form-groups mt-3">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">lock_outline</i>
                    </span>
                  </div>
                  <select name="vicio" style="cursor: pointer">
                    <option disabled selected style="#d1d1d1">{{__(' Vicios')}}</option>
                    <option value="Tabagismo">Tabagismo</option>
                    <option value="Etilista">Etilista</option>
                    <option value="Outros">Outros</option>
                  </select> 
                  </div>
              </div>
              <div class="bmd-form-groups mt-3">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">lock_outline</i>
                    </span>
                  </div>
                <textarea name="queixas" id="" rows="3" class="form-control" placeholder="{{__(' Qual a queixa principal. Descreva')}}"></textarea>
                  </div>
              </div>

              <div class="bmd-form-groups mt-3">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">lock_outline</i>
                    </span>
                  </div>
                  <input type="text" name="medicacao" id="medicacao" class="form-control w-50" placeholder="{{ __(' Medicação em uso') }}" value="{{ old('medicacao') }}">
                </div>
              </div>
            </div>
            <div class="card-footer justify-content-center">
              {{-- <button type="button" class="btn btn-danger btn-link btn-lg">{{ __('Não desejo preencher agora') }}</button> --}}

              <button type="submit" class="btn btn-primary btn-link btn-lg" style="color: #4327c2">{{ __('Salvar') }}</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  @endsection
</body>
</html>
<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>



<script>
      $(document).ready(function ($) { 
        var $SUSmask = $("#input-sus");
        $SUSmask.mask('000 0000 0000 0000'), {reverse: true};
    });

    $(document).ready(function ($) { 
        var $Telefonemask = $("#telefone_emergencial");
        $Telefonemask.mask('(00) 0000-0000'), {reverse: true};
    });

    $("#txtarea").hide();
$( "#slct" ).change(function() {
  var val = $("#slct").val();
    if(val=="sim"){
        $("#txtarea").show();
    } else {
                $("#txtarea").hide();
    }
});
</script>
