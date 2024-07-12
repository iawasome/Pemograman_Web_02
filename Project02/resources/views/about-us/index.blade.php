@include('admin.header')
@include('admin.sidebar')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Fasilitas Kesehatan di Indonesia</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                        <li class="breadcrumb-item active">Fasilitas Kesehatan</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <h1>Our Team</h1>

            <div class="card-body">
                <div class="container my-5">
                    <div class="row d-flex align-items-stretch">
                        <!-- Profil 1 -->
                        <div class="col-md-3 ">
                            <div class="card">
                                <img src="{{ asset('assets/img/zidan.jpg') }}" class="card-img-top img-fluid" alt="Profil 1">
                                <div class="card-body">
                                    <h5 class="card-title">Muhamad Zidane Al Huda</h5>
                                    <p class="card-text">NIM: 0110223068</p>
                                </div>
                            </div>
                        </div>
                        <!-- Profil 2 -->
                        <div class="col-md-3">
                            <div class="card">
                                <img src="{{ asset('/assets/img/fajar.jpg') }}" class="card-img-top img-fluid" alt="Profil 2">
                                <div class="card-body">
                                    <h5 class="card-title">Fajar Muhamad</h5>
                                    <p class="card-text">NIM: 0110223078</p>
                                </div>
                            </div>
                        </div>
                        <!-- Profil 3 -->
                        <div class="col-md-3">
                            <div class="card">
                                <img src="{{ asset('/assets/img/najwa.jpg') }}" class="card-img-top img-fluid" alt="Profil 3">
                                <div class="card-body">
                                    <h5 class="card-title">Najwa Nur Salimah</h5>
                                    <p class="card-text">NIM: 0110223059</p>
                                </div>
                            </div>
                        </div>
                        <!-- Profil 4 -->
                        <div class="col-md-3">
                            <div class="card">
                                <img src="{{ asset('assets/img/diah.jpg') }}" class="card-img-top img-fluid" alt="Profil 4">
                                <div class="card-body">
                                    <h5 class="card-title">Diah ayu puspasari</h5>
                                    <p class="card-text">NIM: 0110223052</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@include('admin.footer')
