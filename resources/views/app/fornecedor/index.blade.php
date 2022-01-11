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

@isset($fornecedores)
    @php $i = 0; @endphp
    @while(isset($fornecedores[$i]))
        Fornecedor: {{ $fornecedores[$i]['nome']}}
        <br>
        Status: {{ $fornecedores[$i]['status']}}
        <br>
        CNPJ: {{ $fornecedores[$i]['cnpj'] ?? '' }}
        <br>
        Telefone : ({{ $fornecedores[$i]['ddd'] ?? '' }}) {{ $fornecedores[0]['telefone'] ?? '' }}
        @php $i++ @endphp
        <hr>
    @endwhile
@endisset
