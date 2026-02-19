<!DOCTYPE html>
<html>
<head>
    <title>Gadgets Store</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
            color: white;
        }

        h1 {
            text-align: center;
            padding: 30px;
            font-size: 40px;
            letter-spacing: 2px;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
            padding: 40px;
        }

        .card {
            background: #111;
            border-radius: 15px;
            width: 300px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 255, 255, 0.4);
            transition: 0.4s ease-in-out;
            text-align: center;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 0 30px rgba(0, 255, 255, 0.9),
                        0 0 60px rgba(0, 128, 255, 0.6);
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .card h2 {
            margin: 15px 0 5px;
        }

        .card p {
            padding: 0 15px;
            font-size: 14px;
            opacity: 0.8;
        }

        .price {
            font-size: 18px;
            font-weight: bold;
            color: #00e5ff;
            margin: 10px 0;
        }

        .btn {
            display: inline-block;
            margin: 15px;
            padding: 10px 20px;
            background: linear-gradient(45deg, #00c6ff, #0072ff);
            border-radius: 25px;
            color: white;
            text-decoration: none;
            transition: 0.3s;
        }

        .btn:hover {
            background: linear-gradient(45deg, #0072ff, #00c6ff);
            box-shadow: 0 0 15px #00c6ff;
        }
    </style>
</head>
<body>

    <h1>Gadgets Collection</h1>

    <div class="container">
        @foreach($products as $product)
            <div class="card">
                <img src="{{ $product['image'] }}" alt="Product Image">
                <h2>{{ $product['name'] }}</h2>
                <p>{{ $product['description'] }}</p>
                <div class="price">{{ $product['price'] }}</div>
                <a href="#" class="btn">View Details</a>
            </div>
        @endforeach
    </div>

</body>
</html>
