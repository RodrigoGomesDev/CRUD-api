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
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
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
        .dropdown-menu {
          animation-duration: 0.3s;
          -webkit-animation-duration: 0.3s;
          animation-fill-mode: both;
          -webkit-animation-fill-mode: both;
        }

        @keyframes slideIn {
  0% {
    transform: translateX(1rem);
    opacity: 0;
  }
  100% {
    transform:translateX(0rem);
    opacity: 1;
  }
  0% {
    transform: translateX(1rem);
    opacity: 0;
  }
}

@-webkit-keyframes slideIn {
  0% {
    -webkit-transform: transform;
    -webkit-opacity: 0;
  }
  100% {
    -webkit-transform: translateX(0);
    -webkit-opacity: 1;
  }
  0% {
    -webkit-transform: translateX(1rem);
    -webkit-opacity: 0;
  }
}

.slideIn {
  -webkit-animation-name: slideIn;
  animation-name: slideIn;
}

.caret {
  margin-top: 8px;
  width: 0; 
  height: 0; 
  border-left: 6px solid transparent;
  border-right: 5px solid transparent;
  
  border-top: 6px solid #b3b3b3 ;
}

  .form-control:read-only {
    background-color: white;
    border: 0;
  }

      </style>
</head>
<body>

<div class="mt-5" style="height: auto;">
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
                  {{-- <select name="sexo">
                    <option value="Masculino">Masculino</option>
                    <option value="Feminino">Feminino</option>
                  </select> --}}
                  <div class="dropdown m-0 p-0" style=" width: 622px ">
                      <button class="btn btn-primary dropdown-toggle p-0 m-0 mb-1 d-flex" id="dropdown1" style="background-color: white; box-shadow: none; height: 30px; width: 100%" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <input type="text" name="sexo" style="cursor: pointer; width: 100%" id="sexo" class="form-control " placeholder="{{ __(' Sexo') }}" value="{{ old('sexo') }}" readonly  >
                        <span class="caret"></span>
                      </button>
                        <div class="dropdown-menu slideIn" id="teste1" style="width: 622px " aria-labelledby="dropdownMenuButton">
                          <li class="dropdown-item" style="cursor: pointer;">Masculino</li>
                          <li class="dropdown-item" style="cursor: pointer;">Feminino</li>
                        </div>
                    </div>
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
                  {{-- <select name="cor" id="">
                    <option value="Branco">Branco</option>
                    <option value="Pardo">Pardo</option>
                    <option value="Amarelo">Amarelo</option>
                    <option value="Indigena">Indigena</option>
                    <option value="Negro">Negro</option>
                    <option value="Outro">Outro</option>
                  </select> --}}
                  <div class="dropdown m-0 p-0" style="height: 30px; width: 622px ">
                    <button class="btn btn-primary dropdown-toggle p-0 m-0 mb-1 d-flex" style="background-color: white; box-shadow: none; height: 30px; width: 100%" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      <input type="text" name="cor" style="cursor: pointer; width: 100%" id="cor" class="form-control " placeholder="{{ __(' Cor') }}" value="{{ old('cor') }}" readonly >
                      <span class="caret"></span>
                    </button>
                      <div class="dropdown-menu slideIn" style="width: 622px " aria-labelledby="dropdownMenuButton">
                        <li class="dropdown-item" style="cursor: pointer;">Branco</li>
                        <li class="dropdown-item" style="cursor: pointer;">Pardo</li>
                        <li class="dropdown-item" style="cursor: pointer;">Amarelo</li>
                        <li class="dropdown-item" style="cursor: pointer;">Indigena</li>
                        <li class="dropdown-item" style="cursor: pointer;">Negro</li>
                        <li class="dropdown-item" style="cursor: pointer;">Outro</li>
                      </div>
                  </div>
                </div>
              </div>
  
              <div class="bmd-form-group mt-3">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">home</i>
                    </span>
                  </div>
                  {{-- <select name="estado_civil" id="">
                    <option value="Casado">Casado</option>
                    <option value="Solteiro">Solteiro</option>
                    <option value="Divorciado">Divorciado</option>
                    <option value="Outros">Outros</option>
                  </select> --}}
                  <div class="dropdown m-0 p-0" style="height: 30px; width: 622px ">
                    <button class="btn btn-primary dropdown-toggle p-0 m-0 mb-1 d-flex" style="background-color: white; box-shadow: none; height: 30px; width: 100%" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      <input type="text" name="estado_civil" style="cursor: pointer; width: 100%" id="estado_civil" class="form-control " placeholder="{{ __(' Estado Civil') }}" value="{{ old('estado_civil') }}" readonly >
                      <span class="caret"></span>
                    </button>
                      <div class="dropdown-menu slideIn" style="width: 622px " aria-labelledby="dropdownMenuButton">
                        <li class="dropdown-item" style="cursor: pointer;">Casado</li>
                        <li class="dropdown-item" style="cursor: pointer;">Solteiro</li>
                        <li class="dropdown-item" style="cursor: pointer;">Divorciado</li>
                        <li class="dropdown-item" style="cursor: pointer;">Outros</li>
                      </div>
                  </div>
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
                  {{-- <select name="credo_religiao" id="">
                    <option value="Cristão">Cristão</option>
                    <option value="Muçulmano">Muçulmano</option>
                    <option value="Judeu">Judeu</option>
                    <option value="Budista">Budista</option>
                    <option value="Outros">Outros</option>
                  </select> --}}
                  <div class="dropdown m-0 p-0" style="height: 30px; width: 622px ">
                    <button class="btn btn-primary dropdown-toggle p-0 m-0 mb-1 d-flex" style="background-color: white; box-shadow: none; height: 30px; width: 100%" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      <input type="text" name="credo_religiao" style="cursor: pointer; width: 100%" id="credo_religiao" class="form-control " placeholder="{{ __(' Credo/Religião') }}" value="{{ old('credo_religiao') }}" readonly >
                      <span class="caret"></span>
                    </button>
                      <div class="dropdown-menu slideIn" style="width: 622px " aria-labelledby="dropdownMenuButton">
                        <li class="dropdown-item" style="cursor: pointer;">Cristão</li>
                        <li class="dropdown-item" style="cursor: pointer;">Muçulmano</li>
                        <li class="dropdown-item" style="cursor: pointer;">Judeu</li>
                        <li class="dropdown-item" style="cursor: pointer;">Budista</li>
                        <li class="dropdown-item" style="cursor: pointer;">Outros</li>
                      </div>
                  </div>
                </div>
              </div>
  
              <div class="bmd-form-group mt-3">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">call</i>
                    </span>
                  </div>
                  {{-- <select name="escolaridade" id="">
                    <option value="1º grau incompleto">1º grau incompleto</option>
                    <option value="1ª grau completo">1ª grau completo</option>
                    <option value="2ª grau incompleto">2ª grau incompleto</option>
                    <option value="2ª grau completo">2ª grau completo</option>
                    <option value="Superior incompleto">Superior incompleto</option>
                    <option value="Superior completo">Superior completo</option>
                  </select> --}}
                  <div class="dropdown m-0 p-0" style="height: 30px; width: 622px ">
                    <button class="btn btn-primary dropdown-toggle p-0 m-0 mb-1 d-flex" style="background-color: white; box-shadow: none; height: 30px; width: 100%" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      <input type="text" name="escolaridade" style="cursor: pointer; width: 100%" id="escolaridade" class="form-control " placeholder="{{ __(' Escolaridade') }}" value="{{ old('escolaridade') }}" readonly  >
                      <span class="caret"></span>
                    </button>
                      <div class="dropdown-menu slideIn" style="width: 622px " aria-labelledby="dropdownMenuButton">
                        <li class="dropdown-item" style="cursor: pointer;">1º grau incompleto</li>
                        <li class="dropdown-item" style="cursor: pointer;">1ª grau completo</li>
                        <li class="dropdown-item" style="cursor: pointer;">2ª grau incompleto</li>
                        <li class="dropdown-item" style="cursor: pointer;">2ª grau completo</li>
                        <li class="dropdown-item" style="cursor: pointer;">Superior incompleto</li>
                        <li class="dropdown-item" style="cursor: pointer;">Superior completo</li>
                      </div>
                  </div>
                </div>
              </div>
  
              <div class="bmd-form-group mt-3">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">email</i>
                    </span>
                  </div>
                  {{-- <select name="profissao" id="">
                    <option value="Funcionário Empresa Privada">Funcionário Empresa Privada</option>
                    <option value="Funcionário Público">Funcionário Público</option>
                    <option value="Profissional Liberal">Profissional Liberal</option>
                    <option value="Desempregado">Desempregado</option>
                    <option value="Empresário">Empresário</option>
                    <option value="Outros">Outros</option>
                  </select> --}}
                  <div class="dropdown m-0 p-0" style="height: 30px; width: 622px ">
                    <button class="btn btn-primary dropdown-toggle p-0 m-0 mb-1 d-flex" style="background-color: white; box-shadow: none; height: 30px; width: 100%" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      <input type="text" name="profissao" style="cursor: pointer; width: 100%" id="profissao" class="form-control " placeholder="{{ __(' Profissão') }}" value="{{ old('profissao') }}" readonly >
                      <span class="caret"></span>
                    </button>
                      <div class="dropdown-menu slideIn" style="width: 622px " aria-labelledby="dropdownMenuButton">
                        <li class="dropdown-item" style="cursor: pointer;">Funcionário Empresa Privada</li>
                        <li class="dropdown-item" style="cursor: pointer;">Funcionário Público</li>
                        <li class="dropdown-item" style="cursor: pointer;">Profissional Liberal</li>
                        <li class="dropdown-item" style="cursor: pointer;">Desempregado</li>
                        <li class="dropdown-item" style="cursor: pointer;">Empresário</li>
                        <li class="dropdown-item" style="cursor: pointer;">Outros</li>
                      </div>
                  </div>
                </div>
              </div>
              
              <div class="bmd-form-group mt-3">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">lock_outline</i>
                    </span>
                  </div>
                  {{-- <select name="situacao_previdenciaria" id="">
                    <option value="Sem aposentadoria">Sem aposentadoria</option>
                    <option value="Aposentadoria por idade">Aposentadoria por idade</option>
                    <option value="Aposentadoria por tempo de contribuição">Aposentadoria por tempo de contribuição</option>
                    <option value="Aposentadoria por invalidez">Aposentadoria por invalidez</option>
                    <option value="Aposentadoria especial por tempo de contribuição">Aposentadoria especial por tempo de contribuição</option>
                  </select> --}}
                  <div class="dropdown m-0 p-0" style="height: 30px; width: 622px ">
                    <button class="btn btn-primary dropdown-toggle p-0 m-0 mb-1 d-flex" style="background-color: white; box-shadow: none; height: 30px; width: 100%" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      <input type="text" name="situacao_previdenciaria" style="cursor: pointer; width: 100%" id="situacao_previdenciaria" class="form-control " placeholder="{{ __(' Situação previdenciária') }}" value="{{ old('situacao_previdenciaria') }}" readonly >
                      <span class="caret"></span>
                    </button>
                      <div class="dropdown-menu slideIn" style="width: 622px " aria-labelledby="dropdownMenuButton">
                        <li class="dropdown-item" style="cursor: pointer;">Sem aposentadoria</li>
                        <li class="dropdown-item" style="cursor: pointer;">Aposentadoria por idade</li>
                        <li class="dropdown-item" style="cursor: pointer;">Aposentadoria por tempo de contribuição</li>
                        <li class="dropdown-item" style="cursor: pointer;">Aposentadoria por invalidez</li>
                        <li class="dropdown-item" style="cursor: pointer;">Aposentadoria especial por tempo de contribuição</li>
                      </div>
                  </div>
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
                  {{-- <select id="slct" name="cirurgia">
                      <option value="Sim">Sim</option>
                      <option value="Não">Não</option>
                  </select>
                  <textarea name="textarea" class="form-control w-100" id="txtarea" rows="3" placeholder="{{ __(' Descrever') }}"></textarea>  --}}
                  
                  <div class="dropdown m-0 p-0" style="width: 622px ">
                    <button class="btn btn-primary dropdown-toggle p-0 m-0 mb-1 d-flex" style="background-color: white; box-shadow: none; height: 30px; width: 100%" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      <input type="text" name="cirurgia" style="cursor: pointer; width: 603px" id="cirurgia" class="form-control " placeholder="{{ __(' Passou por alguma cirurgia recentemente') }}" value="{{ old('cirurgia') }}" readonly >
                      <span class="caret"></span>
                    </button>
                      <div class="dropdown-menu slideIn"style="width: 622px " aria-labelledby="dropdownMenuButton">
                        <li class="dropdown-item" style="cursor: pointer;">Sim</li>
                        <li class="dropdown-item" style="cursor: pointer;">Não</li>
                      </div>
                  </div>
                  </div>
              </div>

              <div class="bmd-form-groups mt-3">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">lock_outline</i>
                    </span>
                  </div>
                  {{-- <select name="doenca_cronica" id="">
                    <option value="Diabetes">Diabetes</option>
                    <option value="Pressão Alta">Pressão Alta</option>
                    <option value="Enfisema">Enfisema</option>
                    <option value="DPOC">DPOC</option>
                    <option value="Cardiopatias">Cardiopatias</option>
                    <option value="Dialítico">Dialítico</option>
                    <option value="Outros">Outros</option>
                  </select>  --}}
                  <div class="dropdown m-0 p-0" style="height: 30px; width: 622px ">
                      <button class="btn btn-primary dropdown-toggle p-0 m-0 mb-1 d-flex" id="teste1" style="background-color: white; box-shadow: none; height: 30px; width: 100%" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <input type="text" name="doenca_cronica" style="cursor: pointer; width: 603px" id="doenca_cronica" class="form-control " placeholder="{{ __(' Portador de doença crônica?') }}" value="{{ old('doenca_cronica') }}" readonly >
                        <span class="caret"></span>
                      </button>
                        <div class="dropdown-menu slideIn" id="teste2" style="width: 622px " aria-labelledby="dropdownMenuButton">
                          <li class="dropdown-item" style="cursor: pointer;">Diabetes</li>
                          <li class="dropdown-item" style="cursor: pointer;">Pressão Alta</li>
                          <li class="dropdown-item" style="cursor: pointer;">Enfisema</li>
                          <li class="dropdown-item" style="cursor: pointer;">DPOC</li>
                          <li class="dropdown-item" style="cursor: pointer;">Cardiopatias</li>
                          <li class="dropdown-item" style="cursor: pointer;">Dialítico</li>
                          <li class="dropdown-item" style="cursor: pointer;">Outros</li>
                        </div>
                    </div>
                  </div>
              </div>
              <div class="bmd-form-groups mt-3">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">lock_outline</i>
                    </span>
                  </div>
                  {{-- <select name="doenca_cronica" id="">
                    <option value="Tabagismo">Tabagismo</option>
                    <option value="Etilista">Etilista</option>
                    <option value="Outros">Outros</option>
                  </select>  --}}
                    <div class="dropdown m-0 p-0" style="height: 30px; width: 620px ">
                      <button class="btn btn-primary dropdown-toggle p-0 m-0 mb-1 d-flex" id="teste1" style="background-color: white; box-shadow: none; height: 30px; width: 100%" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <input type="text" name="vicio" style="cursor: pointer; width: 603px" id="vicio" class="form-control " placeholder="{{ __(' Vicios') }}" value="{{ old('vicio') }}" readonly >
                        <span class="caret"></span>
                      </button>
                        <div class="dropdown-menu slideIn" id="teste2" style="width: 622px " aria-labelledby="dropdownMenuButton">
                          <li class="dropdown-item" style="cursor: pointer;" value="1">Tabagismo</li>
                          <li class="dropdown-item" style="cursor: pointer;" value="2">Etilista</li>
                          <li class="dropdown-item" style="cursor: pointer;" value="3">Outros</li>
                        </div>
                    </div>
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
