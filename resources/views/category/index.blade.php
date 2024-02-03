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
      <table class="table">
      <caption>List of users</caption>
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">title</th>
          <th scope="col">action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($Categories as $Category )
            
        <tr>
            <th scope="row">{{$Category->id}}</th>
            <td>{{$Category->title}}</td>
            <td><a href="category/edit/{{$Category->id}}" class="btn btn-primary">modify</a></td>
            <td>
            <form action="/category/{{$Category->id}}" method="POST">
                @csrf
                @method('DELETE')
                <input type="hidden" name="id" value="{{$Category->id}}">
                <button type="submit" class="btn btn-danger">delete</button>
            </form>
            </tr>
        @endforeach
      </tbody>
    </table>
    <a href="{{route('category.create')}}" class="btn btn-primary">Create</a>
    </div>
    
</body>
</html>