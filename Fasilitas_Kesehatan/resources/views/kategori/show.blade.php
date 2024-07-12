@include('admin.header')
@include('admin.sidebar')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Kategori Fasilitas Kesehatan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('kategori.index') }}">Kategori Fasilitas Kesehatan</a></li>
                        <li class="breadcrumb-item active">Detail</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Detail Kategori Fasilitas Kesehatan</h3>
            </div>
            <div class="card-body">
                <p><strong>Nama:</strong> {{ $kategori->nama }}</p>
            </div>
            <div class="card-footer">
                <a href="{{ route('kategori.index') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </section>
</div>

@include('admin.footer')
