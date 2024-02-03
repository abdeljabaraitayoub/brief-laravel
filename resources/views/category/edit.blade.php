<form action="{{ route('category.update', $category->id) }}" method="POST">
    @csrf
    @method('PUT')
    <!-- form fields here -->
    <input type="text" name="title" value="{{$category->title}}">
    <button type="submit">Submit</button>
</form>
