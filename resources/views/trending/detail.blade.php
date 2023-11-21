<!DOCTYPE html>
<html>
<head>
    <title>Form trending</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Detail trending</h2>
        <form method="post" action="">
            @csrf <!-- CSRF Token -->
            <div class="form-group">
                <label for="">Judul:</label>
                <input type="text" class="form-control" id="judul" name="judul" value="{{ $trending->judul }}" readonly>
            </div>

            <div class="form-group">
                <label for="">Tahun:</label>
                <input type="text" class="form-control" id="tahun" name="tahun" value="{{ $trending->tahun }}" readonly>
            </div>

            <div class="form-group">
                <label for="">Genre:</label>
                <input type="text" class="form-control" id="genre" name="genre" value="{{ $trending->genre }}" readonly>
            </div>

            <div class="form-group">
                <label for="">Sinopsis:</label>
                <input type="text" class="form-control" id="sinopsis" name="sinopsis" value="{{ $trending->sinopsis }}" readonly>
            </div>
            

            <!-- Back Button -->
            <button type="button" class="btn btn-secondary" onclick="history.back()">Back</button>

        </form>
    </div>
</body>
</html>