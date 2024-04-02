<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Nilai Ujian</title>
</head>

<body>
<div class="mb-5 mt-3">
    <h1 align="center">Form Nilai Ujian</h1>
    </div>
    <form action="outputmahasiswa.php" method="POST">
        <div class="container">
            <div class="form-group row mb-3">
                <label for="text1" class="col-4 col-form-label">NIM</label>
                <div class="col-8">
                    <input id="nim" name="nim" type="text" class="form-control" required>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="text" class="col-4 col-form-label">Nama</label>
                <div class="col-8">
                    <input id="nama" name="nama" type="text" class="form-control" required>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="select1" class="col-4 col-form-label">Kuliah</label>
                <div class="col-8">
                    <select id="kuliah" name="kuliah" class="form-select">
                        <option value="">--- Tempat Kuliah ---</option>
                        <option value="universitas harmoni ilmu">Universitas Harmoni Ilmu</option>
                        <option value="universitas teknologi quantum">Institut Teknologi Quantum</option>
                        <option value="universitas aether">Universitas Aether</option>
                        <option value="universitas kreativitas lumina">Akademi Kreativitas Lumina</option>
                        <option value="universitas nebula">Universitas Nebula</option>
                    </select>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="select" class="col-4 col-form-label">Mata Kuliah</label>
                <div class="col-8">
                    <select id="matakuliah" name="matakuliah" class="form-select">
                        <option value="">---- Pilih Mata Kuliah ----</option>
                        <option value="php">PHP</option>
                        <option value="css">CSS</option>
                        <option value="javascript">JavaScript</option>
                        <option value="html">HTML</option>
                    </select>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="text2" class="col-4 col-form-label">Nilai</label>
                <div class="col-8">
                    <input id="nilai" name="nilai" type="text" class="form-control" required>
                </div>
            </div>
            <div class="form-group row mb-3">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </form>
</body>
</html>
