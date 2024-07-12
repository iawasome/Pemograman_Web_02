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
                        <h1>Detail Faskes</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('faskes.index') }}">Home</a></li>
                            <li class="breadcrumb-item active">Detail Faskes</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <h3>{{ $faskes->nama }}</h3>
                    </div>
                    <div class="card-body">
                        <p><strong>Nama Pengelola:</strong> {{ $faskes->nama_pengelola }}</p>
                        <p><strong>Alamat:</strong> {{ $faskes->alamat }}</p>
                        <p><strong>Website:</strong> <a href="{{ $faskes->website }}" target="_blank">{{ $faskes->website }}</a></p>
                        <p><strong>Email:</strong> {{ $faskes->email }}</p>
                        <p><strong>Kab/Kota:</strong> {{ $faskes->kabkota->nama }}</p>
                        <p><strong>Rating:</strong> {{ $faskes->rating }}</p>
                        <p><strong>Latitude:</strong> {{ $faskes->latitude }}</p>
                        <p><strong>Longitude:</strong> {{ $faskes->longitude }}</p>
                        <p><strong>Jenis Faskes:</strong> {{ $faskes->jenis_faskes->nama }}</p>
                        <p><strong>Kategori:</strong> {{ $faskes->kategori->nama }}</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('faskes.index') }}" class="btn btn-primary">Back to List</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
</div>

@include('admin.footer')
