<!-- resources/views/kabkota/index.blade.php -->

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
                        <h1>Daftar Kabupaten/Kota</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('kabkota.index') }}">Home</a></li>
                            <li class="breadcrumb-item active">Daftar Kabupaten/Kota</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Kabkota</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <h1 class="my-4">Daftar kabkota</h1>
                    <a href="{{ route('kabkota.create') }}" class="btn btn-primary">Tambah kabkota</a>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Latitude</th>
                                <th>Longitude</th>
                                <th>Provinsi</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_kabkota as $kabkota)
                                <tr>
                                    <td>{{ $kabkota->id }}</td>
                                    <td>{{ $kabkota->nama }}</td>
                                    <td>{{ $kabkota->latitude }}</td>
                                    <td>{{ $kabkota->longitude }}</td>
                                    <td>{{ $kabkota->provinsi->nama }}</td>
                                    <td>
                                        <a href="{{ route('kabkota.show',$kabkota->id) }}" class="btn btn-info btn-sm">Read</a>
                                        <a href="{{ route('kabkota.edit', $kabkota->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('kabkota.destroy', $kabkota->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this kabkota?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    Footer
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</div>

@include('admin.footer')
