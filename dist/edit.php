<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2 style="text-align: center;">Form Student</h2>
        <form action="../dist/proses.php" method="POST">
            <div class="form-group">
                <label>Nama:</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" />
            </div>
            <div class="form-group">
                <label>Alamat:</label>
                <textarea name="alamat" class="form-control" rows="5" placeholder="Masukan Alamat"></textarea>
            </div>
            

            <button type="submit" name="daftar" class="btn btn-outline-primary">Submit</button>

        </form>
    </div>
</body>

</html>