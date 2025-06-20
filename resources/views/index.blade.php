<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/styles/style.css">
</head>

<body>

    @if (session('success'))
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: '{{ session('success') }}',
                confirmButtonText: 'OK'
            });
        });
    </script>
@endif

    <!-- Navbar -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-custom">
            <a class="navbar-brand" href="/dashboard">
                <img src="assets/img/logo-sitinjau.png" alt="">
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2 search-custom" type="search" placeholder="Search"
                        aria-label="Search">
                </form>
                <ul class="navbar-nav mr-auto navlist-custom">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('dashboard') }}">
                            <svg class="home-icon" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M12.827 3.834a1.5 1.5 0 0 0-2.26.054L5 10.58v8.92A1.5 1.5 0 0 0 6.5 21h1.79a1.5 1.5 0 0 0 1.5-1.5v-3.011a1.5 1.5 0 0 1 1.5-1.5h1.42a1.5 1.5 0 0 1 1.5 1.5V19.5a1.5 1.5 0 0 0 1.5 1.5h1.79a1.5 1.5 0 0 0 1.5-1.5v-8.92z" />
                            </svg>Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('caleg') }}"><svg class="caleg-lain-icon" xmlns="http://www.w3.org/2000/svg"
                                width="1em" height="1em" viewBox="0 0 56 56">
                                <path fill="#ffffff"
                                    d="M38.723 28.549c4.417 0 8.217-3.944 8.217-9.08c0-5.074-3.82-8.833-8.217-8.833c-4.396 0-8.217 3.841-8.217 8.874c0 5.095 3.8 9.039 8.217 9.039m-23.645.473c3.821 0 7.15-3.452 7.15-7.91c0-4.416-3.35-7.683-7.15-7.683c-3.82 0-7.19 3.349-7.169 7.725c0 4.416 3.328 7.868 7.17 7.868M3.616 47.572h15.612c-2.136-3.102.473-9.347 4.89-12.757c-2.28-1.52-5.219-2.65-9.06-2.65C5.793 32.164 0 39.004 0 44.695c0 1.85 1.027 2.877 3.616 2.877m22.186 0h25.822c3.225 0 4.376-.925 4.376-2.733c0-5.3-6.636-12.613-17.297-12.613c-10.641 0-17.277 7.313-17.277 12.614c0 1.807 1.15 2.732 4.376 2.732" />
                            </svg>
                            Caleg Lain</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link dropdown-toggle notification-icon" href="#" id="notificationDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" aria-expanded="false"><svg class="notifikasi-icon" xmlns="http://www.w3.org/2000/svg"
                                width="1em" height="1em" viewBox="0 0 24 24">
                                <g fill="none">
                                    <path
                                        d="m12.594 23.258l-.012.002l-.071.035l-.02.004l-.014-.004l-.071-.036q-.016-.004-.024.006l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.016-.018m.264-.113l-.014.002l-.184.093l-.01.01l-.003.011l.018.43l.005.012l.008.008l.201.092q.019.005.029-.008l.004-.014l-.034-.614q-.005-.019-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.003-.011l.018-.43l-.003-.012l-.01-.01z" />
                                    <path fill="#ffffff"
                                        d="M12 2a7 7 0 0 0-7 7v3.528a1 1 0 0 1-.105.447l-1.717 3.433A1.1 1.1 0 0 0 4.162 18h15.676a1.1 1.1 0 0 0 .984-1.592l-1.716-3.433a1 1 0 0 1-.106-.447V9a7 7 0 0 0-7-7m0 19a3 3 0 0 1-2.83-2h5.66A3 3 0 0 1 12 21" />
                                </g>
                            </svg>
                            Notifikasi</a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="notificationDropdown" style="width: 400px;">
                                <!-- Header notifikasi -->
                                <li class="notification-header">
                                  <span>All Notifications</span>
                                  <span class="mark-read">Mark all as read</span>
                                </li>

                                <!-- Item notifikasi pertama -->
                                <li class="notification-item">
                                  <img src="https://via.placeholder.com/40" alt="User Image"> <!-- Gambar pengguna -->
                                  <div class="notification-text">
                                    <strong>Basuki Cahya Putra</strong> <br>
                                    Replied: <em>Semangat terus kerja</em>, <em>Juli</em> <br>
                                    <small>1hr ago</small> <!-- Waktu notifikasi -->
                                  </div>
                                  <span class="text-danger">&#x25cf;</span> <!-- Indikator belum dibaca -->
                                </li>

                                <!-- Item notifikasi kedua -->
                                <li class="notification-item">
                                  <img src="https://via.placeholder.com/40" alt="User Image">
                                  <div class="notification-text">
                                    <strong>Basuki Cahya Putra</strong> <br>
                                    Commented: <em>Semangat terus</em>, <em>Juli</em> <br>
                                    <small>1hr ago</small>
                                  </div>
                                  <span class="text-danger">&#x25cf;</span>
                                </li>

                                <!-- Item notifikasi ketiga -->
                                <li class="notification-item">
                                  <img src="https://via.placeholder.com/40" alt="User Image">
                                  <div class="notification-text">
                                    <strong>Basuki Cahya Putra</strong> <br>
                                    Following: <em>You</em> <br>
                                    <small>1hr ago</small>
                                  </div>
                                </li>

                                <!-- Tombol aksi di bagian bawah -->
                                <li class="notification-actions">
                                  <button class="btn btn-outline-danger w-100 btn-sm">Deny</button>
                                  <button class="btn btn-primary w-100 btn-sm">Allow</button>
                                </li>
                              </ul>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('help')}}"><svg class="bantuan-icon" xmlns="http://www.w3.org/2000/svg"
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
                        <a class="nav-link" href="#"><svg class="untuk-caleg-icon" xmlns="http://www.w3.org/2000/svg"
                                width="1em" height="1em" viewBox="0 0 56 56">
                                <path fill="#ffffff"
                                    d="M28 27.126c3.194 0 5.941-2.852 5.941-6.566c0-3.669-2.762-6.387-5.941-6.387s-5.942 2.778-5.942 6.417c0 3.684 2.748 6.536 5.942 6.536m-17.097.341c2.763 0 5.17-2.495 5.17-5.718c0-3.194-2.422-5.556-5.17-5.556c-2.763 0-5.199 2.421-5.184 5.585c0 3.194 2.406 5.69 5.184 5.69m34.194 0c2.778 0 5.184-2.495 5.184-5.689c0-3.164-2.421-5.585-5.184-5.585c-2.748 0-5.17 2.362-5.17 5.555c0 3.224 2.407 5.72 5.17 5.72M2.614 40.881h11.29c-1.545-2.243.341-6.759 3.535-9.225c-1.65-1.099-3.773-1.916-6.55-1.916C4.188 29.74 0 34.686 0 38.801c0 1.337.743 2.08 2.614 2.08m50.772 0c1.886 0 2.614-.743 2.614-2.08c0-4.115-4.189-9.061-10.888-9.061c-2.778 0-4.902.817-6.55 1.916c3.193 2.466 5.08 6.982 3.535 9.225Zm-34.73 0h18.672c2.332 0 3.164-.669 3.164-1.976c0-3.832-4.798-9.12-12.507-9.12c-7.694 0-12.492 5.288-12.492 9.12c0 1.307.832 1.976 3.164 1.976" />
                            </svg>
                            Untuk Caleg/Masyarakat</a>
                    </li>

                    <li class="nav-item active">
                        <a href="{{ route('profile') }}" class="nav-link"><svg class="profil-icon" xmlns="http://www.w3.org/2000/svg"
                                width="1em" height="1em" viewBox="0 0 24 24">
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

    <!--Main Content-->
    <main class="container">
        <div class="content">

            <!--Konten Sebelah Kiri-->
            <div class="left-content">
                <div class="profile-card">
                    <div class="profile-image">
                        <img src="{{ asset('storage/' . $user->poto) }}" alt="">
                    </div>
                    <div class="profile-info">
                        <h1>{{$user->username}}</h1>
                        <h2>{{$user->dapil}} - {{$user->origin_area}}</h2>
                        <p>{{$user->birth_place}}</p>
                        <div class="partai">
                            @if($partai)
                    <img src="{{ asset($partai->gambar_partai) }}" alt="">
                    <p>{{ $partai->nama_partai }}</p>
                @else
                    <p>Belum ada partai terdaftar.</p>
                @endif
                        </div>
                    </div>
                </div>
                <div class="connection-card">

                </div>
            </div>

            <!--Konten Sebelah Kanan-->
            <div class="middle-content">
                <!--Start Post-->

                    <div class="start-post">
                        <div class="post-input">
                            <img src="{{ asset('storage/' . $user->poto) }}" alt="">
                            <button type="button" class="btn btn-light" data-toggle="modal"
                            data-target="#postModal">Start a Post</button>
                        </div>

                        <div class="modal fade" id="postModal" tabindex="-1" aria-labelledby="postModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <img src="{{ asset('storage/' . $user->poto) }}" alt="Profile" class="profile-picture me-3">
                                        <h5 class="modal-title" id="postModalLabel">{{$user->username}}</h5>
                                        <button type="submit" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="/store" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-body">
                                            <!-- Profile Section -->
                                            <div class="d-flex align-items-center mb-3">
                                                <div>
                                                    <p class="mb-0">Deskripsi</p>

                                                </div>
                                            </div>

                                            <!-- Text Input -->
                                            <textarea
                                                name="aktivitas"
                                                id="aktivitas"
                                                class="form-control mb-3"
                                                rows="4"
                                                placeholder="Ceritakan aktivitasmu!"
                                                style="resize: none;"
                                                required>
                                            </textarea>

                                            <!-- Divider -->
                                            <div class="divider"></div>

                                            <!-- Media Upload Buttons -->
                                            <div class="d-flex justify-content-start">
                                                <label class="btn-file">
                                                    <input name="content" type="file" id="content" required>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                        <path fill="currentColor" d="M19 4H5a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V7a3 3 0 0 0-3-3M5 18a1 1 0 0 1-1-1v-2.42l3.3-3.29a1 1 0 0 1 1.4 0L15.41 18Zm15-1a1 1 0 0 1-1 1h-.77l-3.81-3.83l.88-.88a1 1 0 0 1 1.4 0l3.3 3.29Zm0-3.24l-1.88-1.87a3.06 3.06 0 0 0-4.24 0l-.88.88l-2.88-2.88a3.06 3.06 0 0 0-4.24 0L4 11.76V7a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1Z" />
                                                    </svg>
                                                </label>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Batal</button>
                                                <button type="submit" class="btn btn-post">Posting</button>
                                            </div>
                                        </div>
                                    </form>


                                </div>
                            </div>
                        </div>

                        <div class="post-button">
                            <div class="media">

                                <a href="#"><svg class="media-icon" xmlns="http://www.w3.org/2000/svg" width="1em"
                                        height="1em" viewBox="0 0 24 24">
                                        <path fill="#535353"
                                            d="m7 15l4.5-6l3.5 4.5l2.5-3L21 15m1-11h-8l-2-2H6a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2M2 6H0v14a2 2 0 0 0 2 2h18v-2H2z" />
                                    </svg>Media</a>
                            </div>
                            <div class="event">
                                <a href="#"><svg class="event-icon" xmlns="http://www.w3.org/2000/svg" width="1em"
                                        height="1em" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M7 14v-2h10v2zm0 4v-2h7v2zm-4 4V4h3V2h2v2h8V2h2v2h3v18zm2-2h14V10H5z" />
                                    </svg>Event</a>
                            </div>
                            <div class="write">
                                <a href="#"><svg class="write-icon" xmlns="http://www.w3.org/2000/svg" width="1em"
                                        height="1em" viewBox="-0.5 -0.5 24 24">
                                        <path fill="currentColor"
                                            d="m21.289.98l.59.59c.813.814.69 2.257-.277 3.223L9.435 16.96l-3.942 1.442c-.495.182-.977-.054-1.075-.525a.93.93 0 0 1 .045-.51l1.47-3.976L18.066 1.257c.967-.966 2.41-1.09 3.223-.276zM8.904 2.19a1 1 0 1 1 0 2h-4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-4a1 1 0 0 1 2 0v4a4 4 0 0 1-4 4h-12a4 4 0 0 1-4-4v-12a4 4 0 0 1 4-4z" />
                                    </svg>Write</a>
                            </div>
                        </div>


                </div>
                <div class="recommended-card">
                    <div class="recommended-content">
                        <p>Direkomendasikan untuk Anda</p>
                        <div class="recommended-list">
                            <div class="list">
                                <a href="#"><img src="assets/img/profile-picture.webp" alt="">
                                    <div class="info-list">
                                        <div class="nama">
                                            <h2>Nevi Miranda</h2>
                                            <p>Caleg dapil 2 - Kepulauan Riau</p>
                                        </div>
                                    </div>
                                </a>


                            </div>
                            <hr>
                            <div class="lihat-selengkapnya">
                                <a href="#">Lihat selengkapnya<svg class="arrow" xmlns="http://www.w3.org/2000/svg"
                                        width="1em" height="1em" viewBox="0 0 1024 1024">
                                        <path fill="currentColor"
                                            d="M831.872 340.864L512 652.672L192.128 340.864a30.59 30.59 0 0 0-42.752 0a29.12 29.12 0 0 0 0 41.6L489.664 714.24a32 32 0 0 0 44.672 0l340.288-331.712a29.12 29.12 0 0 0 0-41.728a30.59 30.59 0 0 0-42.752 0z" />
                                    </svg></a>
                            </div>
                        </div>
                    </div>

                </div>

                @foreach ( $post as $index)
                <div class="feed-card">
                    <div class="feed">
                        <div class="profile">
                            <div class="informasi-profile">
                                <img src="{{ asset('storage/' . $index->user->poto) }}" alt="">
                                <div class="nama-profile">
                                    <a href="">{{ $index->user->username }}</a>
                                    <p>120 pengikut</p>
                                    <h2>{{ $index->user->partai->nama_partai}}</h2>
                                </div>
                            </div>
                            
                        </div>
                        <div class="teks">
                            <p>{{$index -> aktivitas}}</p>
                        </div>
                        <div class="postingan">
                            <img src="{{ asset('storage/' . $index->content) }}" alt="Image Description">

                        </div>
                        <div class="reaction">
                            <div class="left-icon">
                                <div class="like">
                                    <button class="like-button" onclick="toggleLike(this)">
                                        <svg class="like-outline" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24">
                                            <path fill="currentColor" fill-rule="evenodd"
                                                d="M19.285 12.645a3.8 3.8 0 0 0-5.416-5.332q-.288.288-.732.707l-.823.775l-.823-.775q-.445-.42-.733-.707a3.8 3.8 0 0 0-5.374 0c-1.468 1.469-1.485 3.844-.054 5.32l6.984 6.984l6.97-6.972zm-14.75-6.18a5 5 0 0 1 7.072 0q.273.274.707.682q.432-.408.707-.683a5 5 0 0 1 7.125 7.017l-7.125 7.126a1 1 0 0 1-1.414 0L4.48 13.48a5 5 0 0 1 .055-7.017z" />
                                        </svg>
                                        <svg class="like-fill" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path fill="currentColor" fill-rule="evenodd"
                                                d="M4.536 5.778a5 5 0 0 1 7.07 0q.275.274.708.682q.432-.408.707-.682a5 5 0 0 1 7.125 7.016L13.02 19.92a1 1 0 0 1-1.414 0L4.48 12.795a5 5 0 0 1 .055-7.017z" />
                                        </svg>
                                    </button>
                                    <div class="like-number">
                                        <p>90</p>
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
                                        <p>7</p>
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
                                        <p>57 komentar</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tanggal">
                                <p>November 12</p>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <aside>
            <div class="berita-card">
                <div class="judul">
                    <h1>Berita Terbaru</h1>
                    <hr>
                </div>
                <div class="list-berita">
                    @if (!empty($news))
@foreach ($news as $article) 
    <div class="judul-berita">
        <a href="{{ $article['url'] }}" target="_blank">{{ $article['title'] }}</a>
    </div>
@endforeach

@else
    <p>{{ $error ?? 'No news available at the moment.' }}</p>
@endif

                </div>

            </div>
        </aside>
    </main>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/like.js"></script>
</body>

</html>
