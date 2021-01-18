@extends('crudbooster::admin_template')
@section('content')

<div class="page-header">
<h1>Obrigado  {{crudbooster::myname()}}</h1>

</div>
<div class="bg-primary">
<h3>
   <p> Para concluir o processo de solicitação efetue o pagamento da taxa de solicitação no valor de R$ 99,90.
    Após a confirmação, seu processo de assinatura será concluído com sucesso e você terá
    acesso a contactar as profissionais selecionadas no período de 30 dias.</p>
</h3>
</div>
    <!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
    <form action="https://pagseguro.uol.com.br/checkout/v2/payment.html" method="post">
    <!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
    <input type="hidden" name="code" value="702DB99E1010D4499484BFBD824A7481" />
    <input type="hidden" name="iot" value="button" />
    <input type="image" src="https://stc.pagseguro.uol.com.br/public/img/botoes/pagamentos/209x48-pagar-assina.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
    </form>
    <!-- FINAL FORMULARIO BOTAO PAGSEGURO -->


@endsection
