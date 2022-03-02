<h3>Fornecedor</h3>

{{-- Testando Empty --}}

@isset($fornecedores)

    @forelse($fornecedores as $indice => $fornecedor)
        Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? '' }}
        <br>
        Telefone: ({{ $fornecedor['ddd'] ?? '' }}) {{ $fornecedor['telefone'] ?? '' }}
        <br>
        <hr>
    @empty
        Não existe fornecdores cadastrados
    @endforelse

@endisset

<br>

{{-- Testando Isset --}}

{{-- @dd($fornecedores) --}}

{{-- @isset($fornecedores)

    Fornecedor: {{ $fornecedores[1]['nome'] }}
    <br>
    Status: {{ $fornecedores[1]['status'] }}
    <br>
    @isset($fornecedores[1]['cnpj'])
        CNPJ: {{ $fornecedores[1]['cnpj'] }}
    @endisset
    @if (($fornecedores [0]['status'] == 'S') )
        Fornecedor Inativo
    @endif

@endisset

<br> --}}

{{-- Testando Unless --}}

{{--
@unless ($fornecedores [0] ['status'] == 'S')
    Fornecedor Inativo
@endunless --}}

{{-- Testando If --}}

{{--
@if (count($fornecedores) > 0 && count($fornecedores) < 10)

    <h3>Existem alguns fornecedores cadastrados </h3>

@elseif(count($fornecedores) > 10)

    <h3> Existem vários fornecedores cadastrados </h3>

@else

    <h3> Ainda não existe fornecedores cadastrados </h3>

@endif --}}


