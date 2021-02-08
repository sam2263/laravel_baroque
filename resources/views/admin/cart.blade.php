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
<h1 class="bg-primary text-center text-white">Add Image Table</h1>
<form action="{{route('cart.store')}}" method="post" enctype="multipart/form-data" class="w-75 mx-auto">
    @csrf
    <div class="form-group">
        <label>Product Categories:</label>
        <select name="products" id="products" class="form-control">
            <option>Select Categories</option>
            @foreach($allproducts as $product)
                <option value="{{$product->id}}">{{$product->title}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="formgroupexampleinput">Title</label>
        <input type="text" name="title" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="formgroupexampleinput">Image</label>
        <input type="file" name="file" id="file" accept="images/*" multiple>
    </div>



    <div class="form-group">
        <label for="formgroupexampleinput">Image2</label>
        <input type="file" name="file2" required >
    </div>
    <div class="form-group">
        <label for="formgroupexampleinput">Image3</label>
        <input type="file" name="file3" required >
    </div>
    <div class="form-group">
        <label for="formgroupexampleinput">Image4</label>
        <input type="file" name="file4" required >
    </div>

    <div class="form-group">
        <label for="formgroupexampleinput">price</label>
        <input type="text" name="price" class="form-control" required >
    </div>
    <div class="form-group">
        <label for="formgroupexampleinput">qty</label>
        <input type="text" name="qty" class="form-control" required >
    </div>
    <div class="form-group">
        <label for="formgroupexampleinput">size</label>
        <input type="text" name="size" class="form-control" required >
    </div>
    <div class="form-group">
        <label for="formgroupexampleinput">Status</label>
        <input type="text" name="status" class="form-control" required >
    </div>
    <input type="submit" class="form-control btn-primary w-25" name="submit" id="submit" value="Submit">
</form>
<h1>Categoreis Data</h1>
<table class="table">
    <tr>
        <th>Title</th>
        <th>Price</th>
        <th>Qty</th>
        <th>Size</th>
        <th>status</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    @foreach($allimages as $image)
        <tr>
            <td>{{$image->title}}</td>
            <td>{{$image->price}}</td>
            <td>{{$image->qty}}</td>
            <td>{{$image->size}}</td>
            <td>{{$image->status}}</td>
            <td><a href="edit/{{$image->id}}">Edit</a></td>
            <td><a href="delete/{{$image->id}}">Delete</a></td>
        </tr>
    @endforeach
</table>
</body>
</html>

@endsection
