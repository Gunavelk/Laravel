@extends('layout')

@section('content')
<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <!-- <input type="text" name="name" placeholder="Product Name" required>
    <textarea name="description" placeholder="Description"></textarea>
    <input type="number" step="0.01" name="price" placeholder="Price" required>
    
    <label>Image:</label>
    <input type="file" name="image"><br>
    
    <button type="submit">Save</button> -->

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            /* background-image: url('https://picsum.photos/200/300?grayscale'); */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            /* background: #f4f7f8; */
            justify-content: center;
            display: flex;

            margin: 0;
        }

        .form-container {
            background: #3d9752ff;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }

        .form-container h2 {
            margin-bottom: 20px;
            font-size: 24px;
            text-align: center;
            color: #333;
        }

        label {
            font-weight: 500;
            margin-bottom: 5px;
            display: block;
            color: #555;
        }

        input[type="text"],
        input[type="number"],
        textarea,
        input[type="file"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        input:focus,
        textarea:focus {
            border-color: #007bff;
            outline: none;
        }

        textarea {
            resize: vertical;
            min-height: 80px;
        }

        .submit-btn {
            background-color: #125822ff;
            color: white;
            border: none;
            padding: 12px 20px;
            font-size: 16px;
            border-radius: 8px;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s ease;
        }

        .submit-btn:hover {
            background-color: #0056b3;
        }
    </style>
    </head>

    <body>

        <div class="form-container">

            <h2>Add New Product</h2>
            <form action="#" method="POST" enctype="multipart/form-data">
                <label for="name">Product Name</label>
                <input type="text" name="name" id="name" placeholder="Product Name" required>

                <label for="description">Description</label>
                <textarea name="description" id="description" placeholder="Description"></textarea>

                <label for="price">Price</label>
                <input type="number" step="0.01" name="price" id="price" placeholder="Price" required>

                <label for="image">Product Image</label>
                <input type="file" name="image" id="image">

                <button type="submit" class="submit-btn">Save</button>

            </form>
    </body>
            @endsection