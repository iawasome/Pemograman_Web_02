@include('admin.header')
@include('admin.sidebar')
<div class="container-fluid px-4">
    <!-- Content Wrapper. Contains page content -->
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
            <!-- Statistik Kesehatan -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>150</h3>

                            <p>Rumah Sakit Umum</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-hospital"></i>
                        </div>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>50</h3>

                            <p>Rumah Sakit Khusus</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-medkit"></i>
                        </div>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>200</h3>

                            <p>Puskesmas</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-ios-people"></i>
                        </div>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>300</h3>

                            <p>Klinik Pratama</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-ios-medical"></i>
                        </div>
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- Daftar Fasilitas Kesehatan -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Rumah Sakit Umum</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <p>Rumah sakit umum menyediakan layanan medis lengkap termasuk rawat inap, gawat darurat 24 jam, dan perawatan intensif. Mereka juga menawarkan teknologi medis terkini untuk diagnosis dan perawatan penyakit yang kompleks.</p>
                        </div>
                        <!-- /.card-body -->
                        <!-- Jumlah Fasilitas Kesehatan di Kabupaten/Kota -->
                        <div class="card-footer">
                            <h4>Jumlah Fasilitas Kesehatan di Kabupaten/Kota</h4>
                            <ul>
                                <li>Jakarta: 25</li>
                                <li>Bandung: 15</li>
                                <li>Surabaya: 20</li>
                                <li>Medan: 10</li>
                                <li>Makassar: 12</li>
                            </ul>
                        </div>
                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Rumah Sakit Khusus</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <p>Rumah sakit khusus fokus pada penanganan kondisi spesifik seperti kesehatan mental, kesehatan anak, atau bedah. Mereka menawarkan perawatan yang disesuaikan dengan kebutuhan pasien, dilengkapi dengan fasilitas terkini dan tim medis yang terlatih.</p>
                        </div>
                        <!-- /.card-body -->
                        <!-- Jumlah Fasilitas Kesehatan di Kabupaten/Kota -->
                        <div class="card-footer">
                            <h4>Jumlah Fasilitas Kesehatan di Kabupaten/Kota</h4>
                            <ul>
                                <li>Yogyakarta: 8</li>
                                <li>Surabaya: 10</li>
                                <li>Bali: 6</li>
                                <li>Padang: 7</li>
                                <li>Denpasar: 5</li>
                            </ul>
                        </div>
                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- Card untuk Puskesmas -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Puskesmas</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <p>Puskesmas memberikan pelayanan kesehatan primer seperti imunisasi, pemeriksaan kesehatan ibu dan anak, serta penanggulangan penyakit menular. Mereka juga terlibat dalam program kesehatan masyarakat untuk edukasi dan pencegahan penyakit.</p>
                        </div>
                        <!-- /.card-body -->
                        <!-- Jumlah Fasilitas Kesehatan di Kabupaten/Kota -->
                        <div class="card-footer">
                            <h4>Jumlah Fasilitas Kesehatan di Kabupaten/Kota</h4>
                            <ul>
                                <li>Jakarta: 50</li>
                                <li>Bandung: 30</li>
                                <li>Surabaya: 40</li>
                                <li>Medan: 20</li>
                                <li>Makassar: 25</li>
                            </ul>
                        </div>
                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Laboratorium Kesehatan</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <p>Laboratorium kesehatan menyediakan layanan diagnostik untuk mendukung diagnosis medis. Mereka melakukan tes laboratorium seperti darah, urine, dan tes biokimia untuk membantu dalam penanganan penyakit.</p>
                        </div>
                        <!-- /.card-body -->
                        <!-- Jumlah Fasilitas Kesehatan di Kabupaten/Kota -->
                        <div class="card-footer">
                            <h4>Jumlah Fasilitas Kesehatan di Kabupaten/Kota</h4>
                            <ul>
                                <li>Jakarta: 40</li>
                                <li>Bandung: 25</li>
                                <li>Surabaya: 30</li>
                                <li>Medan: 15</li>
                                <li>Makassar: 18</li>
                            </ul>
                        </div>
                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- Card untuk Klinik Pratama -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Klinik Pratama</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <p>Klinik pratama memberikan pelayanan kesehatan primer seperti pemeriksaan umum, pengobatan ringan, dan konsultasi dokter umum. Mereka biasanya tersebar luas di berbagai daerah untuk memenuhi kebutuhan kesehatan masyarakat.</p>
                        </div>
                        <!-- /.card-body -->
                        <!-- Jumlah Fasilitas Kesehatan di Kabupaten/Kota -->
                        <div class="card-footer">
                            <h4>Jumlah Fasilitas Kesehatan di Kabupaten/Kota</h4>
                            <ul>
                                <li>Jakarta: 60</li>
                                <li>Bandung: 35</li>
                                <li>Surabaya: 45</li>
                                <li>Medan: 22</li>
                                <li>Makassar: 30</li>
                            </ul>
                        </div>
                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Apotek</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <p>Apotek menyediakan obat-obatan resep dan non-resep serta produk kesehatan lainnya seperti vitamin dan suplemen. Mereka juga memberikan layanan konsultasi farmasi untuk memastikan penggunaan obat yang aman dan efektif.</p>
                        </div>
                        <!-- /.card-body -->
                        <!-- Jumlah Fasilitas Kesehatan di Kabupaten/Kota -->
                        <div class="card-footer">
                            <h4>Jumlah Fasilitas Kesehatan di Kabupaten/Kota</h4>
                            <ul>
                                <li>Jakarta: 150</li>
                                <li>Bandung: 100</li>
                                <li>Surabaya: 120</li>
                                <li>Medan: 80</li>
                                <li>Makassar: 90</li>
                            </ul>
                        </div>
                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</div>

@include('admin.footer')