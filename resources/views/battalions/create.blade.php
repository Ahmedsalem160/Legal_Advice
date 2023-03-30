<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{URL::asset('assets/manually.css')}}">
    
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center"><i class="fa fa-plus"></i> Create New Battalion </h1>

        <form class="form-horizontal" action="{{route('admin.create')}}" enctype="multipart/form-data" method="post">
            @csrf
            <div class="form-group">
                <label class="control-label col-md-2 col-sm-2" for="name">Name:</label>
                <div class="col-sm-10 col-md-10">
                <input type="text" class="form-control" name="name" placeholder="Enter Name">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-2 col-sm-2" for="address">Address:</label>
                <div class="col-sm-10 col-md-10">
                <input type="text" class="form-control" name="address" placeholder="Enter address">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-2 col-sm-2" for="ID_Army">ID_Army:</label>
                <div class="col-sm-10 col-md-10">
                <input type="text" class="form-control" name="army_id" placeholder="Enter the id of battalion">
                </div>
            </div><br/>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary sub-form">Submit</button>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>