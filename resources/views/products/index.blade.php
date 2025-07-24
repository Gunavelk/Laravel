@extends('layout')

@section('content')
<a href="{{ route('products.create') }}">Create Product</a>

@if(session('success'))
<p>{{ session('success') }}</p>
@endif

<table>
    <tr>
        <th>Name</th>
        <th>Price</th>
        <th>Description</th>
        <th>Image</th>
        <th>Action</th>
    </tr>
    @foreach($products as $product)
    <tr>
        <td>{{ $product->name }}</td>
        <td>{{ $product->price }}</td>
        <td>{{ $product->description }}</td>
        <td>
            @if($product->image)
            <img src="{{ asset('images/' . $product->image) }}" width="100" height="100" style="object-fit: cover;">
            @else
            No Image
            @endif
        </td>
        <td>
            <a href="{{ route('products.edit', $product) }}">Edit</a>
            <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline;">
                @csrf @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

<style>
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        font-family: Arial, sans-serif;
    }

    th,
    td {
        border: 1px solid #ddd;
        padding: 12px;
        text-align: center;
    }

    th {
        background-color: #a6ee89ff;
        color: #333;
    }

    tr:hover {
        background-color: #23d826ff;
    }

    img {
        width: 80px;
        height: 80px;
        object-fit: cover;
        border-radius: 8px;
    }

    a,
    button {
        text-decoration: none;
        color: white;
        background-color: #0fba31ff;
        border: none;
        padding: 6px 12px;
        border-radius: 4px;
        cursor: pointer;
        margin-right: 5px;
    }

    button {
        background-color: #e3342f;
    }

    a:hover,
    button:hover {
        opacity: 0.9;
    }

    .success-message {
        background-color: #d4edda;
        color: #155724;
        padding: 10px;
        border-radius: 4px;
        margin: 15px 0;
    }

    .create-btn {
        display: inline-block;
        margin-top: 15px;
        margin-bottom: 10px;
        background-color: #38c172;
    }
</style>
@endsection