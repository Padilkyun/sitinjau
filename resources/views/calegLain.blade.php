<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caleg Lain</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/styles/calegLain.css">
</head>

<body>
    <header>
        <meta name="csrf-token" content="{{ csrf_token() }}">

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
                        <a class="nav-link" href="/dashboard">
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
                        <a class="nav-link" href="/help"><svg class="bantuan-icon"
                                xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
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
                        <a class="nav-link" href="/profile"><svg class="profil-icon"
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
        <div class="jumbotron">
            <div class="jumbotron-title">
                <h1>Calon Legislatif</h1>
                <h2>Semua calon legislatif yang terdaftar
                    pada periode saat ini</h2>
            </div>
            <div class="search-bar">
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2 search-custom" type="search" placeholder="Search"
                        aria-label="Search">
                </form>
                <div class="search-button">
                    <button class="btn btn-danger w-100 fs 10" type="submit">Search</button>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="daftar-partai">
            <div class="partai">
                <img src="assets/img/gerindra.png" alt="Partai Gerindra">
                <img src="assets/img/pks.png" alt="Partai Keadilan Sejahtera (PKS)">
                <img src="assets/img/pdi.png" alt="Partai Demokrasi Indonesia Perjuangan (PDIP)">
                <img src="assets/img/pkb.png" alt="Partai Kebangkitan Bangsa (PKB)">
                <img src="assets/img/golkar.png" alt="Partai Golkar">
                <img src="assets/img/nasdem.png" alt="Partai NasDem">
                <img src="assets/img/buruh.png" alt="Partai Buruh">
                <img src="assets/img/gelora.png" alt="Partai Gelora">
                <img src="assets/img/pan.png" alt="Partai Amanat Nasional (PAN)">
            </div>
        </div>
        <div class="daftar-caleg">
            @foreach ($user as $fadhil)
                <div class="card">
                    <img src="{{ asset('storage/' . $fadhil->poto) }}" alt="{{ $fadhil->username }}'s Profile"
                        class="profile-img">
                    <div class="info">
                        <h3>{{ $fadhil->username }}</h3>
                        <p>{{ $fadhil->partai->nama_partai }}</p>
                    </div>
                    <button class="follow-button" data-id="{{ $fadhil->id }}">+ Ikuti</button>
                </div>
            @endforeach
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end', // Ubah posisi sesuai kebutuhan
                    showConfirmButton: false,
                    timer: 3000, // Durasi dalam milidetik
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer);
                        toast.addEventListener('mouseleave', Swal.resumeTimer);
                    }
                });

                // Fungsi untuk memperbarui tampilan tombol berdasarkan pengguna yang diikuti
                function updateFollowButtons(followedUsers) {
                    document.querySelectorAll('.follow-button').forEach(button => {
                        const id = button.getAttribute('data-id');
                        const isFollowing = followedUsers.includes(parseInt(id));

                        if (isFollowing) {
                            button.innerText = 'Diikuti';
                            button.setAttribute('data-following', 'true');
                            localStorage.setItem(`following_${id}`, 'true');
                        } else {
                            button.innerText = '+ Ikuti';
                            button.setAttribute('data-following', 'false');
                            localStorage.removeItem(`following_${id}`);
                        }
                    });
                }

                // Fungsi untuk mengambil daftar pengguna yang diikuti dari server
                function getFollowedUsers() {
                    fetch('/api/followed-users')
                        .then(response => response.json())
                        .then(followedUsers => {
                            updateFollowButtons(followedUsers);
                        })
                        .catch(error => console.error('Error fetching followed users:', error));
                }

                // Menangani klik pada tombol follow/unfollow
                document.querySelectorAll('.follow-button').forEach(button => {
                    button.addEventListener('click', function() {
                        const id = button.getAttribute('data-id');
                        const isFollowing = button.getAttribute('data-following') === 'true';
                        const method = isFollowing ? 'unfollow' : 'follow'; // Tentukan metode
                        const url = isFollowing ? `/caleg/${id}/unfollow` :
                        `/caleg/${id}`; // Ubah URL berdasarkan status
                        const requestMethod = 'POST'; // Selalu POST

                        fetch(url, {
                                method: requestMethod,
                                headers: {
                                    'X-CSRF-TOKEN': document.querySelector(
                                        'meta[name="csrf-token"]').content,
                                    'Content-Type': 'application/json',
                                },
                                body: JSON.stringify({})
                            })
                            .then(response => {
                                if (!response.ok) {
                                    throw new Error('Network response was not ok');
                                }
                                return response.json();
                            })
                            .then(data => {
                                // Tampilkan toast
                                Toast.fire({
                                    icon: isFollowing ? 'error' : 'success',
                                    title: isFollowing ? 'Anda telah unfollow Caleg ini.' :
                                        'Anda telah mengikuti Caleg ini.'
                                });

                                // Update local storage dan tampilan tombol
                                if (isFollowing) {
                                    // Unfollow
                                    localStorage.removeItem(
                                    `following_${id}`); // Hapus status follow
                                    button.innerText = '+ Ikuti';
                                    button.setAttribute('data-following', 'false');
                                } else {
                                    // Follow
                                    localStorage.setItem(`following_${id}`,
                                    'true'); // Simpan status follow
                                    button.innerText = 'Diikuti';
                                    button.setAttribute('data-following', 'true');
                                }
                            })
                            .catch(error => {
                                console.error('There was a problem with the fetch operation:',
                                    error);
                            });
                    });
                });

                // Panggil fungsi untuk memuat daftar pengguna yang diikuti saat halaman dimuat
                getFollowedUsers();
            });
        </script>


        </script>


    </main>



</body>

</html>
