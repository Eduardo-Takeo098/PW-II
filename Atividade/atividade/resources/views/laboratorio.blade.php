<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio</title>    
    <style>
        /* Estilos para o formulário */
        form {
            display: flex;
            flex-direction: column;
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input[type="text"] {
            padding: 10px;
            margin-bottom: 20px;
            border: none;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        input[type="submit"] {
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #3e8e41;
        }

        /* Estilos para a tabela */
        table {
            max-width: 800px;
            margin: 20px auto;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ccc;
        }

        th {
            background-color: #4CAF50;
            color: #fff;
        }

        td {
            text-align: center;
        }

        /* Estilos para o link "Excluir" */
        a {
            color: #dc3545;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        a:hover {
            color: #c82333;
        }
    </style>
</head>
<body>

    <form action="/laboratorio" method="post">        
        {{csrf_field()}} 
               
        <input type="text" name="txLab" placeholder="Laboratorio" />

        <input type="submit" value="Salvar"/>
    </form>

    @foreach($laboratorios as $l)   
    
    <table>
        <tr>
            <th>ID</th>
            <th>Laboratório</th>
            <th>Excluir</th>
        </tr>
        <tr>
            <td>{{$l->idLab}}</td>
            <td>{{$l->Lab}}</td>
            <td><a href="/laboratorio/excluir/{{$l->idLab}}">Excluir</a></td>
        </tr>
    </table>
    
    @endforeach
    
</body>
</html>
