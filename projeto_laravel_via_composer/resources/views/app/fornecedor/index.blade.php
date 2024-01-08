<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
{{-- testes --}}
@php

    @endphp
@isset($fornecedores)
    @forelse($fornecedores as $indices => $fornecedor)
        Fornecedores: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{ $fornecedor['nome'] ?? 'Dado não preenchido' }}
        <br>
        Telefone: ({{ $fornecedor['ddd'] ?? '' }} {{ $fornecedor['telefone'] ?? 'Sem número'}})
        <br>
        <hr>
    @empty
        Não existe
    @endforelse

@endisset
</body>
</html>
