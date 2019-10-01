<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@if($idade)
    <h1>Boa tarde, {{ $nome}}! Já tem {{ $idade }} anos?? Putz</h1>
@else
    <h1>Boa tarde, {{ $nome }}! Idade é apenas um número...</h1>
@endif

@json($tabela)

<table >
    <tr>
        <th>Nome</th>
        <th>Idade</th>
    </tr>
    @foreach ($tabela as $linha)
        <tr>
            <td>{{ $linha['nome'] }}</td>
            <td>{{ $linha['idade'] ?? 'Idade é apenas um número...' }}</td>
        </tr>
    @endforeach
</table>


</body>
</html>