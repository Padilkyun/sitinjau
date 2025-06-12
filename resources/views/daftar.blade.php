<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/styles/daftar.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
</head>

<body>
    <div class="daftar-page">
        <div class="logo">
            <div class="logo-image">
                <img src="assets/img/logo-sitinjau.png" alt="">
            </div>
            <h1>SITINJAU</h1>
        </div>
        <div class="daftar-card">
            <form action="{{ route('daftar') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="input-data">
                    <div class="nama">
                        <label for="nama-lengkap">Nama Lengkap</label>
                        <div class="input-group flex-nowrap">
                            <input type="text" name="nama-lengkap" class="form-control @error('nama-lengkap') is-invalid @enderror" placeholder="Nama Lengkap" aria-label="nama" aria-describedby="addon-wrapping" required>
                            @error('nama-lengkap')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="tempat-lahir">
                        <label for="tempat-lahir">Tempat Lahir</label>
                        <div class="input-group flex-nowrap">
                            <input type="text" name="tempat-lahir" class="form-control @error('tempat-lahir') is-invalid @enderror" placeholder="Tempat Lahir" aria-label="tempat-lahir" aria-describedby="addon-wrapping" required>
                            @error('tempat-lahir')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="daerah">
                        <label for="daerah">Daerah Asal</label>
                        <div class="input-group flex-nowrap">
                            <input type="text" name="daerah" class="form-control @error('daerah') is-invalid @enderror" placeholder="Daerah Asal" aria-label="daerah" aria-describedby="addon-wrapping" required>
                            @error('daerah')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="umur">
                        <label for="umur">Umur</label>
                        <div class="input-group flex-nowrap">
                            <input type="text" name="umur" class="form-control @error('umur') is-invalid @enderror" placeholder="Umur" aria-label="umur" aria-describedby="addon-wrapping" required>
                            @error('umur')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>


                    <!-- New Image Upload Field -->


                    <!-- Updated Partai Selection with Input Group -->
                    <div class="partai">
                        <label for="partai_id">Partai</label>
                        <div class="input-group flex-nowrap">
                            <select name="partai_id" class="form-control @error('partai_id') is-invalid @enderror" required>
                                <option value="" disabled selected>Pilih Partai</option>
                                @foreach($partais as $partai)
                                    <option value="{{ $partai->id }}">{{ $partai->nama_partai }}</option>
                                @endforeach
                            </select>
                            @error('partai_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="password">
                        <label for="password">Password</label>
                        <div class="input-group flex-nowrap">
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" aria-label="password" required>
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="daftar-button">
                        <button class="btn btn-danger w-50 fs 10" type="submit">Daftar Akun</button>
                    </div>
                </div>
            </form>

            <div class="atau">
                <hr>
                <p>Atau</p>
                <hr>
            </div>
            <div class="daftar-lain">
                <div class="google-button">
                    <button class="btn btn-outline-danger fs 10" type="submit"> <img src="assets/img/logo-google.png" style="width: 20px;" class="me-4">Google</button>
                </div>
                <div class="facebook-button">
                    <button class="btn btn-outline-danger fs 10" type="submit"> <img src="assets/img/logo-facebook.png" style="width: 20px;" class="me-4">Facebook</button>
                </div>
                <div class="help">

                </div>
            </div>
        </div>

    </div>
    <script type="text/javascript">
        $(function () {
            $('#datepicker').datepicker();
        });
    </script>

</body>

</html>
