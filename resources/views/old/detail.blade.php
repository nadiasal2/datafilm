<!DOCTYPE html>
<html>
<head>
    <title>Form old</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Detail old</h2>
        <form method="post" action="">
            @csrf <!-- CSRF Token -->
            <div class="form-group">
                <label for="">Judul:</label>
                <input type="text" class="form-control" id="judul" name="judul" value="{{ $old->judul }}" readonly>
            </div>

            <div class="form-group">
                <label for="">Tahun:</label>
                <input type="text" class="form-control" id="tahun" name="tahun" value="{{ $old->tahun }}" readonly>
            </div>

            <div class="form-group">
                <label for="">Genre:</label>
                <input type="text" class="form-control" id="genre" name="genre" value="{{ $old->genre }}" readonly>
            </div>

            <div class="form-group">
                <label for="">Sinopsis:</label>
                <input type="text" class="form-control" id="sinopsis" name="sinopsis" value="{{ $old->sinopsis }}" readonly>
            </div>
            

            <!-- Back Button -->
            <button type="button" class="btn btn-secondary" onclick="history.back()">Back</button>

        </form>
    </div>
</body>
</html>