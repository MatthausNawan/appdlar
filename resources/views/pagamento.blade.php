@extends('layouts.front')
@section('content')
<div class="container">
<div class="row">
  <div class="col-md-8">
    {{$nome}}
    <p>
      Estamos felizes em receber seu cadastro, para ativar em nosso sistema, é necessário realizar a assinatura em nosso site, você terá acesso por 30 dias em nosso sistema para procurar
      as domésticas. Ativaremos seu cadastro em até 24hs.

    </p>

      Atendimento ao cliente: 3217-3030
      <br>
    <p>
      Valor da assinatura: R$ 99,90
    </p>
    <!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
    <form action="https://pagseguro.uol.com.br/checkout/v2/payment.html" method="post">
    <!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
    <input type="hidden" name="code" value="702DB99E1010D4499484BFBD824A7481" />
    <input type="hidden" name="iot" value="button" />
    <input type="image" src="https://stc.pagseguro.uol.com.br/public/img/botoes/pagamentos/209x48-pagar-assina.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
    </form>
    <!-- FINAL FORMULARIO BOTAO PAGSEGURO -->
  </div>

  <div class="col-md-4">
  <img src="{{asset('vendor/front/img/dlaronline.png')}}"  alt="Responsive image" height="300px">
  </div>
</div>

</div>



@endsection
