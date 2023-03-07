<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Page</title>
    
</head>
<body class="bg-info">
    <div class="container w-25 mt-5">
        <div class="card shadow-sm">
            <div class= "card-body">
                <h3> To-do List Edit page </h3>
                    @csrf
                    <div class="input-group">
                        <input type="text" name="content" class="form-control" placeholder="Edit your todo">
                        <button type="submit" class="btn btn-red btn-sm px-4"> <i class="fas fa-plus"> </i> </button> 
        <p> Please enter new edit <p>
</body>
</html>