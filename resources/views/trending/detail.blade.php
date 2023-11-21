<!DOCTYPE html>
<html>
<head>
    <title>Form terbaru</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Detail terbaru</h2>

    <form method="post" action=" ">
        <label for="">Judul:</label>
        <input type="text" id="judul" name="judul" value="{{ $trending->judul }}" readonly><br>
    
        <label for="">Tahun:</label>
        <input type="text" id="tahun" name="tahun" value="{{ $trending->tahun }}" readonly><br>

        <label for="">Sinopsis:</label>
        <input type="text" id="sinopsis" name="sinopsis" value="{{ $trending->sinopsis }}" readonly><br>

        <!-- Back Button -->
        <button type="button" class="btn btn-secondary" onclick="history.back()">Back</button>
        
        
</body>
</html>
