<!DOCTYPE html>
<html>
<head>
    <title>Openingstijden - Jumbo Bakkerij</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f8f8f8;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .openingstijden {
            max-width: 600px;
            margin: 50px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .openingstijden table {
            width: 100%;
            border-collapse: collapse;
        }

        .openingstijden th, .openingstijden td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .back-link {
            display: block;
            text-align: center;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #FFFB00;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
        }

        .back-link:hover {
            background-color: #BEC412;
            color:white;
        }

        @media (max-width: 768px) {

}

        @media (max-width: 480px) {

}
    </style>
</head>
<body>
    <h1>Openingstijden</h1>
    <div class="openingstijden">
        <table>
            <tr>
                <th>Dag</th>
                <th>Tijd</th>
            </tr>
            <tr>
                <td>Maandag</td>
                <td>08:00 - 18:00</td>
            </tr>
            <tr>
                <td>Dinsdag</td>
                <td>08:00 - 18:00</td>
            </tr>
            <tr>
                <td>Woensdag</td>
                <td>08:00 - 18:00</td>
            </tr>
            <tr>
                <td>Donderdag</td>
                <td>08:00 - 18:00</td>
            </tr>
            <tr>
                <td>Vrijdag</td>
                <td>08:00 - 20:00</td>
            </tr>
            <tr>
                <td>Zaterdag</td>
                <td>08:00 - 17:00</td>
            </tr>
            <tr>
                <td>Zondag</td>
                <td>Gesloten</td>
            </tr>
        </table>
        <a href="{{ route('broodjes.index') }}" class="back-link">Terug naar Home</a>
    </div>
</body>
</html>
