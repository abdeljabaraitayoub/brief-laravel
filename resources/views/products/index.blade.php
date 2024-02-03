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
  <a href="{{route('product.create')}}" class="btn btn-primary">Create</a>
    <div class="w-75 table-responsive d-flex">
      <table class="table">
      <caption>list of products</caption>
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">title</th>
          <th scope="col">description</th>
          <th scope="col">price</th>
          <th scope="col">image</th>
          <th>actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($products as $product )
            
        <tr>
            <th scope="row">{{$product->id}}</th>
            <td>{{$product->title}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->price}}</td>
            <td>
            <img src="{{$product->image}}" alt="" width="100px">
            </td>
            <td><a href="product/edit/{{$product->id}}" class="btn btn-primary">modify</a>
              <form action="/product/{{$product->id}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">delete</button>
              </form>
            </td>
            </tr>
        @endforeach
      </tbody>
    </table>
  </div>
    
</body>
</html>