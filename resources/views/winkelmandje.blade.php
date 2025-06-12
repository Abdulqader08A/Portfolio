<!DOCTYPE html>
<html>
<head>
    <title>Winkelmandje</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #fff8f0;
            padding: 20px;
        }

        h1 {
            text-align: center;
        }

        ul {
            max-width: 600px;
            margin: 0 auto;
            padding: 0;
            list-style: none;
        }

        li {
            background: #fff;
            border: 1px solid #ddd;
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 8px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .terug-knop {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: #FFFB00;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            text-align: center;
            font-weight: bold;
            width: 200px;
        }

        .terug-knop:hover {
            background-color: #B2A40B;
        }

        .verwijder-knop {
            background: red;
            color: white;
            border: none;
            padding: 6px 12px;
            border-radius: 5px;
            cursor: pointer;
        }

        .verwijder-knop:hover {
            background: darkred;
        }
        @media (max-width: 768px) {
}
        @media (max-width: 480px) {
            

}
    </style>
</head>
<body>
    <h1>🛒 Je Winkelmandje</h1>

    <ul>
        @foreach($producten as $product)
            <li>
                {{ $product->naam }} (x{{ $winkelmandje[$product->id] }})
                <form method="POST" action="{{ route('winkelmandje.verwijder') }}">
                    @csrf
                    <input type="hidden" name="broodje_id" value="{{ $product->id }}">
                    <button type="submit" class="verwijder-knop">Verwijder</button>
                </form>
            </li>
        @endforeach
    </ul>

    <a href="{{ route('broodjes.index') }}" class="terug-knop">← Verder winkelen</a>
</body>
</html>
 