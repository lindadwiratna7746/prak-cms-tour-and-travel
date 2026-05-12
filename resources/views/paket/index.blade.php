<!DOCTYPE html>
<html>
<head>
    <title>Paket Wisata</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h1 class="mb-4">Daftar Paket Wisata</h1>

    <div class="row">

        @foreach($paket as $item)

        <div class="col-md-4">

            <div class="card mb-4">

                <div class="card-body">

                    <h4>{{ $item->nama_paket }}</h4>

                    <p>{{ $item->deskripsi }}</p>

                    <p>
                        <strong>Destinasi:</strong>
                        {{ $item->destinasi }}
                    </p>

                    <p>
                        <strong>Harga:</strong>
                        Rp {{ number_format($item->harga) }}
                    </p>

                </div>

            </div>

        </div>

        @endforeach

    </div>

</div>

</body>
</html>