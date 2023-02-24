<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container px-5">
            <a class="navbar-brand" href="index.php">Beasiswa</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="daftar.php">Daftar</a></li>
                    <li class="nav-item"><a class="nav-link" href="database.php">List Pelamar</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        Registrasi Beasiswa <!-- Header -->
                    </div>
                    <div class="card-body">
                        <form action="input.php" method="POST"> <!-- Form Action -->

                            <div class="form-group">
                                <label>Masukkan Nama</label>
                                <input type="text" name="nama" class="form-control"> <!-- Nama -->
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" placeholder="contoh@gmail.com" class="form-control">
                                <!-- Email -->
                            </div>

                            <div class="form-group">
                                <label>Nomor Handphone</label>
                                <input type="text" name="telp" class="form-control"> <!-- Telp -->
                            </div>

                            <div class="form-group">
                                <label>Semester Saat Ini</label>
                                <select class="form-select" name="smtr"> <!-- Semester -->
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>IPK Terakhir</label>
                                <div class="input-group mb-3">
                                    <input type="text" name="ipk" class="form-control" id="ipk"> <!-- IPK -->
                                    <button class="btn btn-outline-secondary" type="button" onclick="myFunction()">Cek
                                        IPK</button>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Pilihan Beasiswa</label>
                                <select class="form-select" name="pilihan" id="beasiswa" disabled> <!-- Beasiswa -->
                                    <option value="Beasiswa Akademik">Beasiswa Akademik</option>
                                    <option value="Beasiswa Non-Akademik">Beasiswa Non-Akademik</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Upload Berkas Syarat</label>
                                <div class="mb-3">
                                    <input class="form-control" type="file" name="berkas" id="berkas" disabled> <!-- Berkas -->
                                </div>
                            </div>

                            <button type="submit" class="btn btn-dark" id="submit" disabled>Simpan</button>
                            <button type="reset" class="btn btn-danger">Reset</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function randomFloat(min, max, dec){
            const str = (Math.random() * (max - min) + min).toFixed(dec);
            return parseFloat(str);
        }
        function myFunction(){
            var nilai = randomFloat(1, 4, 2)
            document.getElementById("ipk").value = nilai;

            if (nilai<3) {
                document.getElementById("beasiswa").disabled = true;
                document.getElementById("berkas").disabled = true;
                document.getElementById("submit").disabled = true;
            }
            else{
                document.getElementById("beasiswa").disabled = false;
                document.getElementById("beasiswa").focus();
                document.getElementById("berkas").disabled = false;
                document.getElementById("submit").disabled = false;
            }
        }
    </script>
</body>

</html>