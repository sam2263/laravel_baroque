@extends ('layouts.admin')
@section('content')

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
<h1 class="bg-primary text-center text-white">Add category</h1>
<form action="{{route('categories.store')}}" method="post" enctype="multipart/form-data" class="w-75 mx-auto">
    @csrf
    @method('put')
    <div class="form-group">
        <label for="formgroupexampleinput">Title</label>
        <input type="text" name="title" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="formgroupexampleinput">Image</label>
        <input type="file" name="file" required >
    </div>
    <div class="form-group">
        <label for="formgroupexampleinput">Description</label>
        <input type="text" name="description" class="form-control" required >
    </div>
    <input type="submit" class="form-control btn-primary w-25" value="Submit">
</form>
<h1>Categoreis Data</h1>
<table class="table">
    <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    @foreach($categories as $cat)
        <tr>
            <td>{{$cat->title}}</td>
            <td>{{$cat->description}}</td>
            <td><a href="edit/{{$cat->id}}">Edit</a></td>
            <td><a href="delete/{{$cat->id}}">Delete</a></td>
        </tr>
    @endforeach
</table>
</body>
</html>

@endsection
