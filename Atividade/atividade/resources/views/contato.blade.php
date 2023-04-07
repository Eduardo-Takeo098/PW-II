<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        form {
            display: flex;
            flex-direction: column;
            width: 80%;
            margin: 0 auto;
        }

        input[type="text"],
        input[type="submit"] {
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
        }

        input[type="submit"]:hover {
            background-color: #3e8e41;
        }

        p {
            margin: 10px 0;
        }

        a {
            color: #4CAF50;
            text-decoration: none;
            margin-left: 10px;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>    
</head>
<body>

    <form action="/contato" method="post">        
        {{csrf_field()}}        
        <input type="text" name="txNome" placeholder="Nome"/>
        <input type="text" name="txEmail" placeholder="E-mail" />
        <input type="text" name="txAssunto" placeholder="Assunto" />
        <input type="text" name="txMensagem" placeholder="Mensagem" />
        <input type="submit" value="Salvar" />
    </form>

    @foreach($contatos as $c)        
        <p style=   "display: flex; justify-content: space-between; 
                    align-items: center; 
                    background-color: #f9f9f9; 
                    padding: 10px; 
                    margin-bottom: 10px; 
                    border-radius: 5px; 
                    border: 1px solid #ccc;">
        {{$c->idContato}}
        {{$c->nome}}
        <br>
        {{$c->email}}
        <br>
        {{$c->assunto}}
        <br>
        {{$c->mensagem}}
        <a  style="color: #4CAF50;
                   padding: 10px"
            href="/contato/excluir/{{$c->idContato}}"> 
            Excluir
        </a>
        </p>
    @endforeach
    
</body>
</html>