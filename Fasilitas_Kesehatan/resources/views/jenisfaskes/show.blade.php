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
                        <h1>Detail Jenis Faskes</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('jenisfaskes.index') }}">Home</a></li>
                            <li class="breadcrumb-item active">Detail Jenis Faskes</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Detail Jenis Faskes</h3>
                </div>
                <div class="card-body">
                    <p><strong>Nama:</strong> {{ $jenisfaskes->nama }}</p>
                    <p><strong>Deskripsi:</strong> {{ $jenisfaskes->deskripsi }}</p>
                </div>
                <div class="card-footer">
                    <a href="{{ route('jenisfaskes.index') }}" class="btn btn-primary">Back to List</a>
                </div>
            </div>
        </section>
    </div>
</div>

@include('admin.footer')
