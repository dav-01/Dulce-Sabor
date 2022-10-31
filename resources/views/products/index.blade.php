<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <h1>Dulce Sabor</h1>


    <div>

        @foreach($products as $product)

        <tr>
            <td>{{$product->description}}</td>
        </tr>

        @endforeach


    </div>
</body>
</html>