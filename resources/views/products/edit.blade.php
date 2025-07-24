@extends('layout')

@section('content')

   
    <body>

    <div class="form-container">
         <h2>Edit  Product</h2>
        <form action="{{ route('products.update', $product) }}" method="POST">
           @csrf @method('PUT')
                <label for="name">Product Name</label>
                <input type="text" name="name" value="{{ $product->name }}" required>

                <label for="description">Description</label>
                <textarea name="description">{{ $product->description }}</textarea>

                <label for="price">Price</label>
                <input type="number" step="0.01" name="price" value="{{ $product->price }}" required>

                <button  class="submit-btn" type="submit">Update</button>
          </form>
     
    </div>



<style>
    * {
        box-sizing: border-box;
    }

    body {
         background-image: url(../images/Floral.png);
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: #f4f7f8;
        justify-content: center;
        display: flex;
        margin: 0;
    }

    .form-container {
        background-color: #b0beccff;
        padding: 30px 40px;
        border-radius: 12px;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 500px;
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
        h2{
            text-align: center;
        }
        .submit-btn{
            width:50%;
            height: 40px;
              background-color: #42505eff;
              font-size: 15px;
              color:white;
        }
</style>
@endsection