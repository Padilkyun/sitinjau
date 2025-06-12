<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/styles/profile.css">
</head>

<body>
    @if (session('success'))
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: '{{ session('success') }}',
                    confirmButtonText: 'OK'
                });
            });
        </script>
    @endif
    <header>
        <nav class="navbar navbar-expand-lg navbar-custom">
            <a class="navbar-brand" href="/dashboard">
                <img src="assets/img/logo-sitinjau.png" alt="">
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form class="my-2 form-inline my-lg-0">
                    <input class="form-control mr-sm-2 search-custom" type="search" placeholder="Search"
                        aria-label="Search">
                </form>
                <ul class="mr-auto navbar-nav navlist-custom">
                    <li class="nav-item active">
                        <a href="{{ route('dashboard') }}"class="nav-link">
                            <svg class="home-icon" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M12.827 3.834a1.5 1.5 0 0 0-2.26.054L5 10.58v8.92A1.5 1.5 0 0 0 6.5 21h1.79a1.5 1.5 0 0 0 1.5-1.5v-3.011a1.5 1.5 0 0 1 1.5-1.5h1.42a1.5 1.5 0 0 1 1.5 1.5V19.5a1.5 1.5 0 0 0 1.5 1.5h1.79a1.5 1.5 0 0 0 1.5-1.5v-8.92z" />
                            </svg>Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/caleg"><svg class="caleg-lain-icon"
                                xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 56 56">
                                <path fill="#ffffff"
                                    d="M38.723 28.549c4.417 0 8.217-3.944 8.217-9.08c0-5.074-3.82-8.833-8.217-8.833c-4.396 0-8.217 3.841-8.217 8.874c0 5.095 3.8 9.039 8.217 9.039m-23.645.473c3.821 0 7.15-3.452 7.15-7.91c0-4.416-3.35-7.683-7.15-7.683c-3.82 0-7.19 3.349-7.169 7.725c0 4.416 3.328 7.868 7.17 7.868M3.616 47.572h15.612c-2.136-3.102.473-9.347 4.89-12.757c-2.28-1.52-5.219-2.65-9.06-2.65C5.793 32.164 0 39.004 0 44.695c0 1.85 1.027 2.877 3.616 2.877m22.186 0h25.822c3.225 0 4.376-.925 4.376-2.733c0-5.3-6.636-12.613-17.297-12.613c-10.641 0-17.277 7.313-17.277 12.614c0 1.807 1.15 2.732 4.376 2.732" />
                            </svg>
                            Caleg Lain</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#"><svg class="notifikasi-icon"
                                xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                <g fill="none">
                                    <path
                                        d="m12.594 23.258l-.012.002l-.071.035l-.02.004l-.014-.004l-.071-.036q-.016-.004-.024.006l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.016-.018m.264-.113l-.014.002l-.184.093l-.01.01l-.003.011l.018.43l.005.012l.008.008l.201.092q.019.005.029-.008l.004-.014l-.034-.614q-.005-.019-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.003-.011l.018-.43l-.003-.012l-.01-.01z" />
                                    <path fill="#ffffff"
                                        d="M12 2a7 7 0 0 0-7 7v3.528a1 1 0 0 1-.105.447l-1.717 3.433A1.1 1.1 0 0 0 4.162 18h15.676a1.1 1.1 0 0 0 .984-1.592l-1.716-3.433a1 1 0 0 1-.106-.447V9a7 7 0 0 0-7-7m0 19a3 3 0 0 1-2.83-2h5.66A3 3 0 0 1 12 21" />
                                </g>
                            </svg>
                            Notifikasi</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/help"><svg class="bantuan-icon" xmlns="http://www.w3.org/2000/svg"
                                width="1em" height="1em" viewBox="0 0 24 24">
                                <path fill="#ffffff"
                                    d="M11.95 18q.525 0 .888-.363t.362-.887t-.362-.888t-.888-.362t-.887.363t-.363.887t.363.888t.887.362m-.9-3.85h1.85q0-.825.188-1.3t1.062-1.3q.65-.65 1.025-1.238T15.55 8.9q0-1.4-1.025-2.15T12.1 6q-1.425 0-2.312.75T8.55 8.55l1.65.65q.125-.45.563-.975T12.1 7.7q.8 0 1.2.438t.4.962q0 .5-.3.938t-.75.812q-1.1.975-1.35 1.475t-.25 1.825M12 22q-2.075 0-3.9-.787t-3.175-2.138T2.788 15.9T2 12t.788-3.9t2.137-3.175T8.1 2.788T12 2t3.9.788t3.175 2.137T21.213 8.1T22 12t-.788 3.9t-2.137 3.175t-3.175 2.138T12 22" />
                            </svg>
                            Pusat Bantuan</a>
                    </li>
                    <li class="nav-item">
                        <div class="line"></div>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#"><svg class="untuk-caleg-icon"
                                xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 56 56">
                                <path fill="#ffffff"
                                    d="M28 27.126c3.194 0 5.941-2.852 5.941-6.566c0-3.669-2.762-6.387-5.941-6.387s-5.942 2.778-5.942 6.417c0 3.684 2.748 6.536 5.942 6.536m-17.097.341c2.763 0 5.17-2.495 5.17-5.718c0-3.194-2.422-5.556-5.17-5.556c-2.763 0-5.199 2.421-5.184 5.585c0 3.194 2.406 5.69 5.184 5.69m34.194 0c2.778 0 5.184-2.495 5.184-5.689c0-3.164-2.421-5.585-5.184-5.585c-2.748 0-5.17 2.362-5.17 5.555c0 3.224 2.407 5.72 5.17 5.72M2.614 40.881h11.29c-1.545-2.243.341-6.759 3.535-9.225c-1.65-1.099-3.773-1.916-6.55-1.916C4.188 29.74 0 34.686 0 38.801c0 1.337.743 2.08 2.614 2.08m50.772 0c1.886 0 2.614-.743 2.614-2.08c0-4.115-4.189-9.061-10.888-9.061c-2.778 0-4.902.817-6.55 1.916c3.193 2.466 5.08 6.982 3.535 9.225Zm-34.73 0h18.672c2.332 0 3.164-.669 3.164-1.976c0-3.832-4.798-9.12-12.507-9.12c-7.694 0-12.492 5.288-12.492 9.12c0 1.307.832 1.976 3.164 1.976" />
                            </svg>
                            Untuk Caleg/Masyarakat</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('profile') }}"><svg class="profil-icon"
                                xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                <path fill="#ffffff" fill-rule="evenodd"
                                    d="M8 7a4 4 0 1 1 8 0a4 4 0 0 1-8 0m0 6a5 5 0 0 0-5 5a3 3 0 0 0 3 3h12a3 3 0 0 0 3-3a5 5 0 0 0-5-5z"
                                    clip-rule="evenodd" />
                            </svg>
                            Profil</a>
                    </li>
                </ul>

            </div>
        </nav>
    </header>
    <main class="container">
        <div class="content">
            <div class="profile">
                <!--<div class="banner">
                    <img src="assets/img/banner.png" alt="">
                </div>-->
                <div class="images">
                    <div class="profile-image">
                        <img src="{{ asset('storage/' . $user->poto) }}" id="profile-pic">
                    </div>
                    <div class="connections">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4s-4 1.79-4 4s1.79 4 4 4m0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4" />
                        </svg>
                        <p>{{ $followingCount }} Connections</p>

                    </div>
                    <div class="partai">
                        <img src="{{ asset($partai->gambar_partai) }}" alt="">
                        <p>{{ $partai->nama_partai }}</p>
                    </div>
                </div>
                <div class="profile-info">
                    <h1>{{ $user->username }}</h1>
                    <h2> {{ $user->dapil }} - {{ $user->origin_area }}</h2>
                    <p>{{ $user->birth_place }}</p>
                </div>
                <div class="profile-button">
                    <button type="button" class="btn btn-outline-dark" data-toggle="modal"
                        data-target="#editProfileModal">Enhance profile</button>


                </div>

                <div class="modal fade" id="editProfileModal" tabindex="-1" aria-labelledby="editProfileLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editProfileLabel">Edit Profil</h5>
                                <button type="button" class="btn btn-close" data-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <hr>
                            <div class="modal-body">
                                <!-- Profile Photo Upload
                                -->
                                <form action="{{ route('user.update', $user->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT') <!-- Metode untuk edit -->
                                    <div class="profile-photo position-relative">
                                        <label for="profileUpload"><img id="profileImage"
                                                src="assets/img/profile-picture.webp" alt="Profile"></label>
                                        <input type="file" id="profileUpload" name="poto" class="d-none"
                                            accept="image/jpeg, image/png, image/jpg"
                                            onchange="previewProfileImage(event)">
                                        <h1>Tambahkan Foto Profil</h1>
                                    </div>
                                    <!-- Form -->
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" class="form-control" id="username" name="username"
                                            value="{{ $user->username }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="dapil" class="form-label">Dapil</label>
                                        <input type="text" class="form-control" id="dapil" name="dapil"
                                            value="{{ $user->dapil }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="origin_area" class="form-label">Daerah Asal</label>
                                        <input type="text" class="form-control" id="origin_area"
                                            name="origin_area" value="{{ $user->origin_area }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="partai_id" class="form-label">Partai</label>
                                        <select class="form-select" id="partai_id" name="partai_id" required>
                                            @foreach ($partais as $partai)
                                                <option value="{{ $partai->id }}"
                                                    {{ $user->partai_id == $partai->id ? 'selected' : '' }}>
                                                    {{ $partai->nama_partai }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>


                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">Simpan</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            <div class="experience">
                <div class="experience-header">
                    <div class="experience-title">
                        <h1>Experience</h1>
                        <svg data-toggle="modal" data-target="#addExperienceModal" xmlns="http://www.w3.org/2000/svg"
                            width="16" height="16" viewBox="0 0 16 16">
                            <path fill="currentColor"
                                d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0m1.062 4.312a1 1 0 1 0-2 0v2.75h-2.75a1 1 0 0 0 0 2h2.75v2.75a1 1 0 1 0 2 0v-2.75h2.75a1 1 0 1 0 0-2h-2.75Z" />
                        </svg>

                        <div class="modal fade" id="addExperienceModal" tabindex="-1"
                            aria-labelledby="addExperienceModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="text-white modal-header bg-danger">
                                        <h5 class="modal-title" id="addExperienceModalLabel">Add Experience</h5>
                                        <button type="button" class="btn-close btn-close-white" data-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>

                                    <!-- Modal Body -->
                                    <div class="modal-body">
                                        <form action="{{ route('storeexp') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="title" class="form-label">Judul*</label>
                                                <input type="text" class="form-control" id="title"
                                                    name="title" placeholder="Masukkan Judul" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="company" class="form-label">Perusahaan atau
                                                    Organisasi*</label>
                                                <input type="text" class="form-control" id="company"
                                                    name="company" placeholder="Masukkan Perusahaan atau Organisasi"
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="employmentType" class="form-label">Jabatan</label>
                                                <input type="text" class="form-control" id="employmentType"
                                                    name="employment_type" placeholder="Masukkan Jabatan">
                                            </div>
                                            <div class="mb-3">
                                                <label for="location" class="form-label">Lokasi</label>
                                                <input type="text" class="form-control" id="location"
                                                    name="location" placeholder="Masukkan Lokasi">
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="startYear" class="form-label">Tahun Mulai*</label>
                                                    <select class="form-select" id="startYear" name="start_year"
                                                        required>
                                                        <option selected disabled>Pilih Tahun Mulai</option>
                                                        @for ($year = 2000; $year <= 2045; $year++)
                                                            <option value="{{ $year }}">{{ $year }}
                                                            </option>
                                                        @endfor
                                                    </select>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="expiryYear" class="form-label">Tahun Berakhir*</label>
                                                    <select class="form-select" id="expiryYear" name="expiry_year"
                                                        required>
                                                        <option selected disabled>Pilih Tahun Berakhir</option>
                                                        @for ($year = 2000; $year <= 2045; $year++)
                                                            <option value="{{ $year }}">{{ $year }}
                                                            </option>
                                                        @endfor
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mt-3">
                                                <label for="description" class="form-label">Deskripsi</label>
                                                <textarea class="form-control" id="description" name="description" rows="3" placeholder="Masukkan Deskripsi"></textarea>
                                            </div>



                                            <!-- Input Gambar -->
                                            <div class="mb-3">
                                                <label for="image" class="form-label">Unggah Gambar</label>
                                                <input type="file" class="form-control" id="image"
                                                    name="image" accept="image/*">
                                            </div>
                                    </div>

                                    <!-- Modal Footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal"
                                            aria-label="Close">Close</button>
                                        <button type="submit" class="btn btn-danger">Save</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                    <p>Tambahkan pengalaman kamu yang relevan untuk memperkuat citra sebagai calon legislatif yang
                        kompeten. Ceritakan bagaimana kamu pernah memimpin organisasi, mengelola program masyarakat,
                        atau berkontribusi dalam penyusunan kebijakan.</p>
                </div>
                <hr>
                @foreach ($exp as $exp)
                    <div class="experience-content">

                        <div class="experience-logo">
                            <img src="{{ asset('storage/' . $exp->lembaga) }}" alt="">
                        </div>
                        <div class="experience-main">
                            <div class="experience-head">
                                <div class="experience-name">
                                    <h1>{{ $exp->judul }}<span> |</span></h1>
                                </div>
                                <div class="experience-organization">
                                    <h1>{{ $exp->perushaan }}<span> |</span></h1>
                                </div>
                                <div class="experience-type">
                                    <h1>{{ $exp->jabatan }}<span>,</span></h1>
                                </div>
                                <div class="experience-location">
                                    <h1>{{ $exp->lokasi }}</h1>
                                </div>
                            </div>
                            <div class="tahun">
                                <div class="tahun-masuk">
                                    <p>{{ $exp->tahun_mulai }}</p>
                                </div>
                                <span>-</span>
                                <div class="tahun-keluar">
                                    <p>{{ $exp->tahun_berakhir }}</p>
                                </div>
                            </div>
                            <div class="deskripsi">
                                <ul>
                                    <li>
                                        {{ $exp->deskripsi }}
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
                <hr>



            </div>
            <div class="pendidikan">
                <div class="pendidikan-header">
                    <div class="pendidikan-title">
                        <h1>Pendidikan</h1>
                        <svg data-toggle="modal" data-target="#addEducationModal" xmlns="http://www.w3.org/2000/svg"
                            width="16" height="16" viewBox="0 0 16 16">
                            <path fill="currentColor"
                                d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0m1.062 4.312a1 1 0 1 0-2 0v2.75h-2.75a1 1 0 0 0 0 2h2.75v2.75a1 1 0 1 0 2 0v-2.75h2.75a1 1 0 1 0 0-2h-2.75Z" />
                        </svg>

                        <div class="modal fade" id="addEducationModal" tabindex="-1"
                            aria-labelledby="addEducationLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addEducationLabel">Add pendidikan</h5>
                                        <button type="button" class="btn-close btn-close-white" data-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Form -->
                                        <form action="{{ route('storedu') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="schoolName" class="form-label">Nama*</label>
                                                <input type="text" class="form-control" id="title"
                                                    name="title" required>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="startYear" class="form-label">Tahun Mulai*</label>
                                                    <select class="form-select" id="startYear" name="start_year"
                                                        required>
                                                        <option selected disabled>Pilih Tahun Mulai</option>
                                                        @for ($year = 2000; $year <= 2045; $year++)
                                                            <option value="{{ $year }}">{{ $year }}
                                                            </option>
                                                        @endfor
                                                    </select>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="expiryYear" class="form-label">Tahun Berakhir*</label>
                                                    <select class="form-select" id="expiryYear" name="expiry_year"
                                                        required>
                                                        <option selected disabled>Pilih Tahun Berakhir</option>
                                                        @for ($year = 2000; $year <= 2045; $year++)
                                                            <option value="{{ $year }}">{{ $year }}
                                                            </option>
                                                        @endfor
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="image" class="form-label">Unggah Gambar</label>
                                                <input type="file" class="form-control" id="image"
                                                    name="image" accept="image/*">
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-save"
                                            data-bs-dismiss="modal">Save</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                    <p>Tambahkan pendidikanmu dengan latar belakang yang relevan untuk mendukung peranmu sebagai calon
                        legislatif, seperti gelar dalam Ilmu Politik, Hukum, Administrasi Publik, atau bidang lain yang
                        berkaitan dengan pengelolaan kebijakan publik.</p>
                </div>
                <hr>
                @foreach ($edu as $edu)
                    <div class="pendidikan-content">

                        <div class="pendidikan-logo">
                            <img src="{{ asset('storage/' . $edu->image) }}" alt="">
                        </div>
                        <div class="pendidikan-main">
                            <div class="pendidikan-head">
                                <div class="pendidikan-name">
                                    <h1>{{ $edu->judul }}</h1>
                                </div>
                                <div class="tahun">
                                    <div class="tahun-masuk">
                                        <p>{{ $edu->tahun_mulai }}</p>
                                    </div>
                                    <span>-</span>
                                    <div class="tahun-keluar">
                                        <p>{{ $edu->tahun_berakhir }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                @endforeach
                <hr>
            </div>
            <div class="activity">
                <div class="activity-header">
                    <div class="activity-title">
                        <h1>Activity</h1>






                    </div>
                    <div class="activity-button">
                        <button type="button" class="post-button btn btn-danger">Post</button>

                    </div>
                </div>
                <hr>
                @foreach ($post as $post)
                    <div class="activity-content">
                        <div class="activity-image">
                            <img src="{{ asset('storage/' . $post->content) }}" alt="">
                        </div>
                        <div class="activity-group">
                            <div class="activity-user">
                                <h1>{{ $user->username }}</h1>
                            </div>
                            <div class="activity-date">
                                <p>Di Post Pada {{ $post->created_at->format('d F Y, H:i') }}</p>
                                <!-- Format tanggal -->
                            </div>
                            <div class="activity-caption">
                                <p>{{ $post->aktivitas }}</p>
                            </div>
                            <div class="reaction">
                                <div class="like">
                                    <button class="like-button" onclick="toggleLike(this)">
                                        <svg class="like-outline" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24">
                                            <path fill="currentColor" fill-rule="evenodd"
                                                d="M19.285 12.645a3.8 3.8 0 0 0-5.416-5.332q-.288.288-.732.707l-.823.775l-.823-.775q-.445-.42-.733-.707a3.8 3.8 0 0 0-5.374 0c-1.468 1.469-1.485 3.844-.054 5.32l6.984 6.984l6.97-6.972zm-14.75-6.18a5 5 0 0 1 7.072 0q.273.274.707.682q.432-.408.707-.683a5 5 0 0 1 7.125 7.017l-7.125 7.126a1 1 0 0 1-1.414 0L4.48 13.48a5 5 0 0 1 .055-7.017z" />
                                        </svg>
                                        <svg class="like-fill" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24">
                                            <path fill="currentColor" fill-rule="evenodd"
                                                d="M4.536 5.778a5 5 0 0 1 7.07 0q.275.274.708.682q.432-.408.707-.682a5 5 0 0 1 7.125 7.016L13.02 19.92a1 1 0 0 1-1.414 0L4.48 12.795a5 5 0 0 1 .055-7.017z" />
                                        </svg>
                                    </button>
                                    <div class="like-number">
                                        <p>60</p>
                                    </div>
                                </div>
                                <div class="dislike">
                                    <button class="dislike-button" onclick="toggleLike(this)">
                                        <svg class="dislike-outline" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 512 512">
                                            <path fill="currentColor"
                                                d="M417.84 448a15.94 15.94 0 0 1-11.35-4.72L40.65 75.26a16 16 0 0 1 22.7-22.56l365.83 368a16 16 0 0 1-11.34 27.3M364.92 80c-48.09 0-80 29.55-96.92 51c-16.88-21.48-48.83-51-96.92-51a107.4 107.4 0 0 0-31 4.55L168 112c22.26 0 45.81 9 63.94 26.67a123 123 0 0 1 21.75 28.47a16 16 0 0 0 28.6 0a123 123 0 0 1 21.77-28.51C322.19 121 342.66 112 364.92 112c43.15 0 78.62 36.33 79.07 81c.54 53.69-22.75 99.55-57.38 139.52l22.63 22.77c3-3.44 5.7-6.64 8.14-9.6c40-48.75 59.15-98.8 58.61-153C475.37 130.52 425.54 80 364.92 80M268 432C180.38 372.51 91 297.6 92 193a83.7 83.7 0 0 1 2.24-18.39L69 149.14a115.1 115.1 0 0 0-9 43.49c-.54 54.22 18.63 104.27 58.61 153c18.77 22.87 52.8 59.45 131.39 112.8a31.84 31.84 0 0 0 36 0c20.35-13.81 37.7-26.5 52.58-38.11l-22.66-22.81C300.25 409.6 284.09 421.05 268 432" />
                                        </svg>
                                        <svg class="dislike-fill" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 512 512">
                                            <path fill="currentColor"
                                                d="m32 64.45l389.47 389.94l22.84-22.47L54.85 42zm30.67 128.46c-.56 55.63 19.77 106.94 62.16 156.88c40.25 47.42 94.56 79.67 137.47 108.21l9 6l9-6c18.49-12.3 39.1-25.3 59.79-39.89L71.74 149.28a114.6 114.6 0 0 0-9.07 43.63m355.16 156.88c42.39-49.94 62.72-101.25 62.16-156.88c-.63-62-50.61-112.54-111.43-112.54c-48.26 0-80.35 28-97.23 48.17c-16.88-20.2-49-48.17-97.23-48.17A108.2 108.2 0 0 0 142.84 85l270 270.48c1.71-1.89 3.37-3.78 4.99-5.69" />
                                        </svg>
                                    </button>
                                    <div class="dislike-number">
                                        <p>1</p>
                                    </div>
                                </div>
                                <div class="comment">
                                    <button class="comment-button">
                                        <svg classs="comment-outline" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M21 20.077L17.923 17H4.616q-.691 0-1.154-.462T3 15.385V4.615q0-.69.463-1.153T4.615 3h14.77q.69 0 1.152.462T21 4.615zM4.616 16H18.35L20 17.644V4.616q0-.231-.192-.424T19.385 4H4.615q-.23 0-.423.192T4 4.615v10.77q0 .23.192.423t.423.192M4 16V4z" />
                                        </svg>
                                    </button>
                                    <div class="comment-number">
                                        <p>14</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <hr>
            </div>
        </div>
        </div>
        <aside>

            <div class="people">
                <div class="people-header">
                    <h1>Your Follower</h1>
                    <p>From your political party</p>
                </div>
                @foreach ($follow as $follower)
                    <!-- Change $follow to $follower for clarity -->
                    <hr>
                    <div class="people-list">
                        <img src="{{ asset('storage/' . $follower->follower->poto) }}" alt="">
                        <div class="people-info">
                            <div class="nama">
                                <h2>{{ $follower->follower->username }}</h2> <!-- Use the follower relationship -->
                                <p>{{ $follower->follower->partai->nama_partai }} - {{ $follower->follower->dapil }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <hr>
                @endforeach

            </div>
            <div class="people">
                <div class="people-header">
                    <h1>Caleg You Follow</h1>
                    <p>The People that exicited for your Idea</p>
                </div>
                @foreach ($follows as $follow)
                    <hr>
                    <div class="people-list">
                        <img src="{{ asset('storage/' . $follow->followed->poto) }}" alt="">
                        <div class="people-info">
                            <div class="nama">
                                <h2>{{ $follow->followed->username }}</h2> <!-- Access the followed user -->
                                <p>{{ $follow->followed->partai->nama_partai }} - {{ $follow->followed->dapil }}</p>
                            </div>

                        </div>
                    </div>
                    <hr>
                @endforeach

            </div>
            <div class="p-5 people d-flex justify-content-center align-items-center">
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="btn btn-outline-dark"
                    >Logout</button>
                </form>

            </div>
            </div>
        </aside>
    </main>
    <script src="assets/js/preview.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <script src="assets/js/like.js"></script>
</body>

</html>
