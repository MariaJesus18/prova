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

        <div class="row my-5">
            <div class="col-6 offset-3 align-items-center">
                <form action="{{url('/login')}}" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <label for="email" class="label">Email</label>
                        <div class="col">
                            <input type="email" class="form-control" placeholder="Digite seu email" id="email" name="email">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="password" class="label">Senha</label>
                        <div class="col">
                            <input type="password" class="form-control" placeholder="Digite seu email" id="password" name="password">
                        </div>
                    </div>                    
                    <div class="row mb-3">
                        <div class="d-grid justify-content-end">
                            <button type="submit" class="btn btn-success btn-sm btn-block">Entrar</button>
                        </div>
                    </div>
                </form>
            </div>
            

        </div>



    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

</body>
</html>