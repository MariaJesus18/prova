<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo List</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3 text-center pt-4">
                <h1 class="display-1 border-bottom border-success p-2">TodoList App</h1>                
            </div>
        </div>

        <div class="row align-items-center text-center my-5">
            <div class="col rounded-2 m-1 bg-success p-2 text-dark bg-opacity-10">
                <p class="h5 border-bottom border-success p-2">Objetivo</p>
                <p>
                    O TodoList App é um aplicativo voltado para pessoas que querem ser eficientes
                    mantendo uma rotina de atividades equilibrada.
                </p>                
            </div>

            <div class="col rounded-2 m-1 bg-danger p-2 text-dark bg-opacity-10">                
                <p class="h5 border-bottom border-danger p-2">
                    Recursos
                </p>
                <p>
                    Com o TodoList App, você pode criar, remover e editar a atividades do seu dia-dia.
                    Você pode marcar suas atividades como concluídas a qualquer momento e assim ter 
                    mais controle sobre sua produtividade.
                </p>
            </div>

            <div class="col rounded-2 m-1 bg-primary p-2 text-dark bg-opacity-10">
                <p class="h5 border-bottom border-primary p-2">Recursos</p>
                <p>
                    teste
                </p>
            </div>
        </div>

        <div class="row align-items-center my-5">
            <div class="col text-center ">
                <a href="{{url('/login')}}" class="btn btn-sm w-25 border-end border-bottom link-primary text-dark shadow-sm">Registre-se</a> 
                <a href="{{url('/register')}}" class="btn btn-sm w-25 border-end border-bottom link-success text-dark shadow-sm">Login</a>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

</body>
</html>