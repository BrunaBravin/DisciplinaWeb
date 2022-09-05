<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .result{
            background-color: greenyellow;
        }
    </style>
    <title>Document</title>
</head>
<body>
<table>
  <tr>
    <th>IMC</th>
    <th>CLASSIFICAÇÃO</th>
    <th>OBESIDADE (GRAU)</th>
  </tr>
  <tr id="1">
    <td>MENOR QUE 18,5</td>
    <td>MAGREZA</td>
    <td>0</td>
  </tr>
  <tr id="2">
    <td>ENTRE 18,5 E 24,9</td>
    <td>NORMAL</td>
    <td>0</td>
  </tr>
  <tr id="3">
    <td>ENTRE 25,0 E 29,9</td>
    <td>SOBREPESO</td>
    <td>I</td>
  </tr>
  <tr id="4">
    <td>ENTRE 30,0 E 39,9</td>
    <td>OBESIDADE</td>
    <td>II</td>
  </tr>
  <tr id="5">
    <td>MAIOR QUE 40,0</td>
    <td>OBESIDADE GRAVE</td>
    <td>III</td>
  </tr>
</table>
    <input id="resultado" type="text" value="{{$ValorImc}}">
    <a class="botao" href="{{URL('/')}}" title="voltar">Voltar</a>
    <script>
        //resultado.toFixed(2);
        let resultado = document.getElementById("resultado")
        if(resultado.value < 18.5)
            document.getElementById("1").setAttribute("class", "result");
        if((resultado.value >= 18.5) && (resultado.value <= 24.9))
            document.getElementById("2").setAttribute("class", "result");    
        if((resultado.value >= 25.0) && (resultado.value <= 29.9))
            document.getElementById("3").setAttribute("class", "result");
        if((resultado.value >= 30.0) && (resultado.value <= 39.9))
            document.getElementById("4").setAttribute("class", "result");
        if(resultado.value >= 40.0)
            document.getElementById("5").setAttribute("class", "result");
    </script>
</body>
</html>