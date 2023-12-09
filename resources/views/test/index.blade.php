<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @foreach ($products as $item)
        <p>Nama Produk: {{ $item->name }}</p>

        <p>Ulasan:</p>
        @foreach ($item->ulasan as $review)
            <li>
                <strong>Customer: {{ $review['pelanggan'] }}</strong><br>
                <p>Comment: {{ $review['komentar'] }}</p>
                <p>Rating: {{ $review['rating'] }}</p>
            </li>
        @endforeach
    @endforeach

</body>

</html>
