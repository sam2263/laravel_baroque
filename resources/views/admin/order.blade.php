@extends('layouts.admin')
@section('content')


    <h1>Orders</h1>
    <table class="table">
        <tr>
            <th>Email</th>
            <th>First Name</th>
            <th>last name</th>
            <th>address</th>
            <th>city</th>
            <th>postal code</th>
            <th>country</th>
            <th>phone</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach($orders as $order)
            <tr>
                <td>{{$order->email}}</td>
                <td>{{$order->fname}}</td>
                <td>{{$order->lname}}</td>
                <td>{{$order->address}}</td>
                <td>{{$order->city}}</td>
                <td>{{$order->postal_code}}</td>
                <td>{{$order->country}}</td>
                <td>{{$order->phone}}</td>
                <td><a href="edit/{{$order->id}}" class="btn btn-primary">Edit</a></td>
                <td><a href="delete/{{$order->id}}" class="btn btn-danger">Delete</a></td>
            </tr>
        @endforeach
    </table>



@endsection
