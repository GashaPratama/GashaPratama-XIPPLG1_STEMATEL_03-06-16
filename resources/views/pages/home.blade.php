@extends('layouts.app')

@section('content')
    <div id="carouselExampleCaptions" class="carousel slide ">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('assets/images/Rectangle 24.png') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block bg-overlay">
                    <h5>HUT SMK Telkom Purwokerto </h5>
                    <p>Bertempat di lapangan upacara SMK Telkom Purwokerto telah berlangsung pemotongan tumpeng dalam
                        kegiatan peringatan HUT SMK Telkom Purwokerto ke-27 yang dilakukan oleh Bapak Jumala selaku Kepala
                        SMK Telkom Purwokerto pada Rabu (29/01).</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/images/Rectangle 24.png') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block bg-overlay">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/images/Rectangle 24.png') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block bg-overlay">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-5">
                <img src="{{ asset('assets/images/Remove Background Preview.png') }}" alt="Logo SMK Telkom Purwokerto"
                    class="img-fluid">
            </div>
            <div class="col-md-7">
                <p>
                    <b> PENGEMBANGAN PERANGKAT LUNAK DAN GIM</b> atau yang biasa disebut PPLG merupakan salah satu program
                    studi
                    yang diunggulkan oleh SMK Telkom Purwokerto, terlebih dengan fasilitas-fasilitas yang tentunya
                    memanjakan
                    siswa-siswi nya dalam berkreasi dalam membuat aplikasi bahkan website perangkat lunak yang pada
                    zaman-zaman
                    millenial seperti ini sudah sangat banyak perusahaan-perusahaan besar bahkan startup yang mencari
                    Developer-Developer muda yang tentunya berbakat.

                    <br>
                    <br>
                    SMK TELKOM PURWOKERTO mencetak digital talent berkompeten menjadikanya sekolah kejuruan terbaik di
                    banyumas
                </p>
            </div>
        </div>

        <div class="row py-5" id="teachers">
            <div class="col-12 mb-5">
                <h5 class="fw-bold text-center">PROFIL GURU</h5>
            </div>

            <div class="col-12">
                <div class="row">
                    @foreach ($teachers as $teacher)
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-5 {{ $loop->index >= 3 ? 'hidden-teacher' : '' }}">
                            <div class="card shadow-sm rounded-5">
                                <div class="card-body p-4">
                                    <img src="{{ asset('storage/' . $teacher->image) ?? '' }}" class="avatar mb-3"
                                        alt="...">
                                    <h5 class="card-title">{{ $teacher->name }}</h5>
                                    <p class="card-text">
                                        Instagram : {{ $teacher->instagram }}
                                    </p>
                                    <p class="card-text">
                                        Facebook : {{ $teacher->facebook }}
                                    </p>
                                    <p class="card-text">
                                        Motto : {{ $teacher->motto }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="col-12">
                <div class="text-center">
                    <i class="fa fa-chevron-down" aria-hidden="true" id="toggle-teachers"></i>
                </div>
            </div>
        </div>

        <div class="row py-5" id="kemampuan">
            <div class="col-12 mb-5">
                <h5 class="fw-bold text-center">KEMAMPUAN</h5>
            </div>

            <div class="col-12">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-9 mb-5">
                        <div class="card shadow-sm rounded-5 d-flex align-items-center p-3 py-4">
                            <div class="row align-items-center w-100">
                                <!-- Deskripsi -->
                                <div class="col-9">
                                    <h5 class="fw-bold">Pemrograman Web</h5>
                                    <p class="mb-0">
                                        Belajar dasar pemrograman web mulai dari belajar tentang bagaimana cara membuat
                                        struktur web, mendesain web, serta membuat sebuah web menjadi lebih interaktif
                                        dengan mengimplementasikan animasi di dalamnya.
                                    </p>
                                </div>
                                <!-- Ikon -->
                                <div class="col-3 d-flex justify-content-center">
                                    <img src="{{ asset('assets/images/Group 101.png') }}" alt="Pemrograman Web"
                                        width="100">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-9 mb-5">
                        <div class="card shadow-sm rounded-5 d-flex align-items-center p-3 py-4">
                            <div class="row align-items-center w-100">
                                <!-- Deskripsi -->
                                <div class="col-9">
                                    <h5 class="fw-bold">Pengembangan Gim</h5>
                                    <p class="mb-0">
                                        Belajar dasar pemrograman game mulai dari belajar tentang bagaimana cara
                                        mengimplementasikan program sederhana hingga program kompleks dimana bahasa yang
                                        nantinya akan digunakan adalah javascript.

                                    </p>
                                </div>
                                <!-- Ikon -->
                                <div class="col-3 d-flex justify-content-center">
                                    <img src="{{ asset('assets/images/Group 104.png') }}" alt="Pemrograman Web"
                                        width="100">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-9 mb-5">
                        <div class="card shadow-sm rounded-5 d-flex align-items-center p-3 py-4">
                            <div class="row align-items-center w-100">
                                <!-- Deskripsi -->
                                <div class="col-9">
                                    <h5 class="fw-bold">Desain Aplikasi dan Web</h5>
                                    <p class="mb-0">
                                        Selain belajar untuk membuat program pada web, mendesain sebuah web juga menjadi
                                        salah satu hal yang akan dipelajari, karena dengan ada nya desain antarmuka yang
                                        menarik akan membuat web menjadi lebih lengkap dan mudah untuk digunakan user.
                                    </p>
                                </div>
                                <!-- Ikon -->
                                <div class="col-3 d-flex justify-content-center">
                                    <img src="{{ asset('assets/images/Group 105.png') }}" alt="Pemrograman Web"
                                        width="100">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row py-5" id="peluang">
            <div class="col-12 mb-5">
                <h5 class="fw-bold text-center">PELUANG KERJA</h5>
            </div>
            <!-- Card 1 -->
            <div class="row justify-content-center">
                <div class="col-12 col-md-9 mb-5">
                    <div class="card shadow-sm rounded-5 d-flex flex-row align-items-center">
                        <div class="col-4">
                            <img src="{{ asset('assets/images/Programmer 1 (2).png') }}" alt="Programmer"
                                class="img-fluid rounded-start">
                        </div>
                        <div class="col-8 p-3">
                            <h6 class="fw-bold">1. Programmer: Fullstack, Frontend dan Backend Developer</h6>
                            <p>
                                Front-end developer mengacu pada pembuatan dan pengembangan bagian aplikasi atau website
                                yang
                                berfokus untuk mengembangkan user interface. Backend developer bertugas untuk memaksimalkan
                                operasional internal situs web atau aplikasi. Full-stack developer merupakan kombinasi
                                antara
                                front-end dan backend developer.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-12 col-md-9 mb-5">
                    <div class="card shadow-sm rounded-5 d-flex flex-row align-items-center bg-danger text-white">
                        <div class="col-8 p-3">
                            <h6 class="fw-bold">2. Desainer UI/UX, Web dan Mobile</h6>
                            <p>
                                Bagi teman-teman yang lebih menyukai sisi desain dari pembuatan aplikasi, dapat memilih
                                profesi
                                sebagai desainer UI/UX. Profesi ini lebih fokus pada tampilan antarmuka aplikasi.
                            </p>
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('assets/images/Programmer 1 (2).png') }}" alt="Programmer"
                                class="img-fluid rounded-start">
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-12 col-md-9 mb-5">
                    <div class="card shadow-sm rounded-5 d-flex flex-row align-items-center">
                        <div class="col-4">
                            <img src="{{ asset('assets/images/Programmer 1 (2).png') }}" alt="Programmer"
                                class="img-fluid rounded-start">
                        </div>
                        <div class="col-8 p-3">
                            <h6 class="fw-bold">3. Quality Assurance (QA)</h6>
                            <p>
                                Quality Assurance adalah orang yang bertanggung jawab untuk memastikan kualitas sebuah
                                aplikasi.
                                QA bekerja dengan berbagai kasus untuk menghasilkan aplikasi yang bebas bug.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-12 col-md-9 mb-5">
                    <div class="card shadow-sm rounded-5 d-flex flex-row align-items-center bg-danger text-white">

                        <div class="col-8 p-3">
                            <h6 class="fw-bold">4. IT Support</h6>
                            <p>
                                IT support adalah seorang teknisi di sebuah organisasi atau perusahaan yang bertanggung
                                jawab
                                untuk instalasi, evaluasi, dan pemeliharaan terhadap kebutuhan komputer dan jaringan.
                            </p>
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('assets/images/Programmer 1 (2).png') }}" alt="Programmer"
                                class="img-fluid rounded-start">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-danger">
        <div class="container">
            <div class="row py-5 bg-danger" id="achievements">
                <div class="col-12 mb-5">
                    <h5 class="fw-bold text-center text-white">PRESTASI</h5>
                </div>

                <div class="col-12">
                    <div class="row">
                        @foreach ($achievements as $achievement)
                            <div
                                class="col-lg-6 col-md-12 col-sm-12 mb-5 {{ $loop->index >= 3 ? 'hidden-achievement' : '' }}">
                                <div class="card bg-transparent border-0 rounded-5 d-flex flex-row align-items-center">
                                    <div class="col-4">
                                        <img src="{{ asset('storage/' . $achievement->image) }}"
                                            alt="{{ $achievement->title }}" class="img-fluid rounded-start">
                                    </div>
                                    <div class="col-8 p-3">
                                        <h6 class="fw-bold text-white">
                                            {{ $achievement->title }}
                                        </h6>
                                        <p class="text-white">
                                            {{ $achievement->description }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>


                <div class="col-12">
                    <div class="text-center">
                        <i class="fa fa-chevron-down text-white" aria-hidden="true" id="toggle-achievements"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row py-5" id="tim-kreatif">
            <div class="col-12 mb-5">
                <h5 class="fw-bold text-center">TIM KREATIF</h5>
            </div>

            <div class="col-12">
                <div class="row">
                    @foreach ($teams as $team)
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                            <div class="card shadow-sm rounded-5">
                                <div class="card-body p-4">
                                    <img src="{{ asset('storage/' . $team->image) }}" class="avatar mb-3"
                                        alt="...">
                                    <h5 class="card-title">{{ $team->name }}</h5>
                                    <p class="card-text">
                                        Instagram : {{ $team->instagram }}
                                    </p>
                                    <p class="card-text">
                                        Facebook : {{ $team->facebook }}
                                    </p>
                                    <p class="card-text">
                                        Motto : {{ $team->motto }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="row py-5" id="galeri">
            <div class="col-12 mb-5">
                <h5 class="fw-bold text-center">GALERI</h5>
            </div>

            <div class="col-12">
                <div class="row">
                    @foreach ($galleries as $gallery)
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                            <div class="card shadow-sm rounded-4">
                                <div class="card-body">
                                    <img src="{{ asset('storage/' . $gallery->image) }}"
                                        class="img-fluid w-100 rounded-4 mb-3" alt="{{ $gallery->title }}">
                                    <h5 class="card-title text-center">{{ $gallery->title }}</h5>
                                    <p class="card-text text-center">{{ $gallery->description }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
@endsection
