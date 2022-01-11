<h3>Fornecedor</h3>


@php 
/* 
    if() {

    } elseif (condition) {
        # code...
    }
    else {
        # code...
    }
 */
@endphp

{{-- @if(count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Existem alguns fornecedores cadastrados</h3>
@elseif(count($fornecedores) > 10)
    <h3>Existem vários fornecedores cadastrados</h3>
@else
    <h3>Ainda não existem fornecedores cadastrados</h3>
@endif --}}

@isset($fornecedores)
    Fornecedor: {{ $fornecedores[0]['nome']}}
    <br>
    Status: {{ $fornecedores[0]['status']}}
    <br>
    CNPJ: {{ $fornecedores[0]['cnpj'] ?? 'Dado não foi preenchido' }}
@endisset

{{-- uso do do unless em comparaçao com if 
@if(!($fornecedores[0]['status'] == 'S'))
    Fornecedor Inativo
@endif
<br>
@unless($fornecedores[0]['status'] == 'S')
    Fornecedor Inativo
@endunless
<br> --}}
