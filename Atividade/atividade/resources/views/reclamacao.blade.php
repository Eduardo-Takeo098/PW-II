<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reclamacao</title>    
</head>
<body>

    <form action="/reclamacao" method="post">        
        {{csrf_field()}}        
        <input type="text" name="txPc" placeholder="PC"/>
        <input type="text" name="txTitulo" placeholder="Título" />
        <input type="text" name="txDescricao" placeholder="Descrição" />
        <input type="text" name="txDtCriacao" placeholder="Data" />
        <input type="submit" value="Salvar" />
    </form>

    <table>

    @foreach($reclamacoes as $r)     
    
    <tr>
        <p>
       <td> {{$r->idRec}} </td>
       <td>  {{$r->pc}} </td>
       <td>   {{$r->titulo}} </td>
       <td>   {{$r->descricao}} </td>
       <td>  {{$r->dtCriacao}} </td>
        <a href="/reclamacao/excluir/{{$r->idRec}}"> Excluir </a>
        </p>
    </tr>   

    
    @endforeach

    </table>
  
    
</body>
</html>