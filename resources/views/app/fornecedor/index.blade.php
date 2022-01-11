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
    CNPJ: {{ $fornecedores[0]['cnpj'] ?? '' }}
    <br>
    Telefone : ({{ $fornecedores[0]['ddd'] ?? '' }}) {{ $fornecedores[0]['telefone'] ?? '' }}
    @switch($fornecedores[0]['ddd'])
        @case('11')
            São Paulo - SP
            @break
        @case('85')
            Fortaleza - CE
            @break
        @case('32')
            Juiz de Fora - MG
            @break
        @default
            Estado não identificado
    @endswitch
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
