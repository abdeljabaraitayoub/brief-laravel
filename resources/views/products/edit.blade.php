<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class=" w-50 table-responsive">
        
        <form action="{{route('product.update', $products->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <input type="text" class="form-control mb-2" id="title" name="title" placeholder="Enter title" value="{{$products->title}}">
                <input type="text" class="form-control mb-2" id="title" name="description" placeholder="Enter description" value="{{$products->description}}">
                <input type="text" class="form-control mb-2" id="title" name="price" placeholder="Enter price" value="{{$products->price}}">
                <input type="file" class="form-control mb-2" id="title" name="image" placeholder="Enter image">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
    
</body>
</html>