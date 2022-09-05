<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cálculo IMC</h1>
    <p> IMC é a sigla para Índice de Massa Corpórea, parâmetro adotado pela Organização Mundial de Saúde para calcular o peso ideal de cada pessoa.
    O índice é calculado da seguinte maneira: divide-se o peso do paciente pela sua altura elevada ao quadrado. Diz-se que o indivíduo tem peso normal quando o resultado do IMC está entre 18,5 e 24,9.
    Quer descobrir seu IMC? Insira seu peso e sua altura nos campos abaixo e compare com os índices da tabela. Importante: siga os exemplos e use pontos como separadores.
    </p>
    <form action="{{url('/resultadoimc')}}" method="GET">
        <label for="altura">Altura (ex: 1.70)</label>
        <input id="altura" name="altura" type="text">
        <label for="peso">Peso (ex: 69.2)</label>
        <input id="peso" name="peso" type="text">
        <button type="submit">Calcular</button>
        <button type="reset">Limpar</button>
    </form>
</body>
</html>