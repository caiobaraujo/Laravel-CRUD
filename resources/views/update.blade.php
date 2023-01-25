<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projeto</title>
</head>
<body>
    <h1>Pagina de update</h1>
    
    <form action="/projects/update/{{$project->id}}" method="POST">
        @csrf
        @method("PUT")
        <label for="">Title</label>
        <input type="text" name="title" value="{{ $project->title}}">
        <br/><br/>
        <label for="">Code</label>
        <input type="number"  name="code" value="{{ $project->code}}">
        <br/><br/>
        
        <label for="">Start_date</label>
        <input type="date" name="start_date" value="{{ $project->start_date}}">
        <br/><br/>
        <label for="">End_date</label>
        <input type="date"  name="end_date" value="{{ $project->end_date}}">
        <br/><br/>
        <button>Enviar Cadastro</button>
    </form>   
</body>
</html>