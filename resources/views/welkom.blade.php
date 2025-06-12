<!DOCTYPE html>
<html>
<head>


    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Jumbo Bakkerij</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f8f8f8;
            padding: 20px;
        }

        h1 {
            text-align: left;
            color: #333;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 200px;
  
        }

        .product {
            background: white;
            width: 200px;
            padding: 15px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .product img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 8px;
        }

        .product p {
            font-weight: bold;
            margin: 10px 0;
        }

        .winkelmandje {
            background-color: #FFFB00;
            color: white;
            padding: 8px 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            display: inline-block;
            margin-top: 10px;
        }

        .winkelmandje:hover {
            background-color: #B2A40B;
        }

        .menu {
            display: flex;
            justify-content: flex-end;
            margin-bottom: 10px;
        }

        .mandje-link {
            background-color: #FFFB00;
            color: white;
            padding: 8px 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            display: absolute;
            margin: 0px; 
            margin-right: 30px;
            margin-top: -30px; 
            text-decoration: none;
            text-align: right;
            
        }

        .mandje-link:hover {
            background-color: #B2A40B;
        }
        @media (max-width: 768px) {

}

        @media (max-width: 480px) {

}
    </style>
</head>
<body>
   
    <h1>Welkom bij Jumbo Bakkerij</h1>
     <div class="menu">
        <a href="{{ route('winkelmandje.index') }}" class="mandje-link">Bekijk Winkelmandje</a>
         <a href="{{ route('broodjes.index') }}" class="mandje-link">Home</a>
         <a href="{{ route('openingstijden') }}" class="mandje-link">Openingstijden</a>
    </div>

    <form method="GET" action="{{ route('broodjes.index') }}" style="text-align: center; margin-bottom: 20px;">
        <input type="text" name="zoekterm" placeholder="Zoek een broodje..." 
               style="padding: 10px; width: 300px; border-radius: 5px; border: 1px solid #ddd;">
        <button type="submit" style="padding: 10px 20px; background-color: #FFFB00; color: white; border: none; border-radius: 5px; font-weight: bold; cursor: pointer;">
            Zoek
        </button>
    </form>

    <div class="container">
    
        @foreach($producten as $product)
        
            <div class="product">
                <img src="{{ asset('images/' . $product->afbeelding) }}" alt="{{ $product->naam }}">
                <p>{{ $product->naam }}</p>
                <form method="POST" action="{{ route('winkelmandje.toevoegen') }}">
                    @csrf
                    <input type="hidden" name="broodje_id" value="{{ $product->id }}">
                    <button type="submit" class="winkelmandje">In winkelmandje</button>
                    
                </form>
                
            </div>
            
        @endforeach
    </div>

    
</body>
</html>
