<!DOCTYPE html>
<html>
<head>
    <title>Form terbaru</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Detail terbaru</h2>
        <form method="post" action="">
            @csrf <!-- CSRF Token -->
            <div class="form-group">
                <label for="">Judul:</label>
                <input type="text" class="form-control" id="judul" name="judul" value="{{ $terbaru->judul }}" readonly>
            </div>

            <div class="form-group">
                <label for="">Tahun:</label>
                <input type="text" class="form-control" id="tahun" name="tahun" value="{{ $terbaru->tahun }}" readonly>
            </div>

            <div class="form-group">
                <label for="">Sinopsis:</label>
                <input type="text" class="form-control" id="sinopsis" name="sinopsis" value="{{ $terbaru->sinopsis }}" readonly>
            </div>
            

            <!-- Back Button -->
            <button type="button" class="btn btn-secondary" onclick="history.back()">Back</button>

        </form>
    </div>
</body>
</html>