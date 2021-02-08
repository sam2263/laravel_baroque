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
<h1 class="bg-primary text-center text-white">Add Products</h1>
<form action="{{route('product.store')}}" method="post" enctype="multipart/form-data" class="w-75 mx-auto">
    @csrf
    <div class="form-group">
        <label>Product Categories:</label>
        <select name="categories" id="categories" class="form-control">
            <option>Select Categories</option>
            @foreach($allCategories as $category)
                <option value="{{$category->id}}">{{$category->title}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="formgroupexampleinput">Title</label>
        <input type="text" name="title" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="formgroupexampleinput">Regular Price</label>
        <input type="text" name="rprice" class="form-control" value="0" required>
    </div>
    <div class="form-group">
        <label for="formgroupexampleinput">Sale Price</label>
        <input type="text" name="sprice" class="form-control" value="0" required>
    </div>
    <div class="form-group">
        <label for="formgroupexampleinput">Purchase Price</label>
        <input type="text" name="pprice" class="form-control" value="0" required>
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
<h1>Product Data</h1>
<table class="table">
    <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Regular price</th>
        <th>sale price</th>
        <th>purchase price</th>
        <th>image</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    @foreach($product as $pro)
        <tr>
            <td>{{$pro->title}}</td>
            <td>{{$pro->description}}</td>
            <td>{{$pro->regular_price}}</td>
            <td>{{$pro->sale_price}}</td>
            <td>{{$pro->purchase_price}}</td>
            <td><img src="/uploads/products/{{$pro->image_url}}" class="img-fluid"></td>
            <td><a href="edit/{{$pro->id}}">Edit</a></td>
            <td><a href="delete/{{$pro->id}}">Delete</a></td>
        </tr>
    @endforeach
</table>
</body>
</html>


@endsection
