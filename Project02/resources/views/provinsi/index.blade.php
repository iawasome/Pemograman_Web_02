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
                        <h1>Website Fasilitas Kesehatan</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('provinsis.index') }}">Home</a></li>
                            <li class="breadcrumb-item active">Daftar Provinsi</li>
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
                    <h1 class="my-4">Daftar Provinsi</h1>
                    <a href="{{ route('provinsis.create') }}" class="btn btn-primary">Tambah kabkota</a>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Ibu Kota</th>
                            <th>Latitude</th>
                            <th>Longitude</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($list_provinsi as $provinsi)
                            <tr>
                                <td>{{ $provinsi->id }}</td>
                                <td>{{ $provinsi->nama }}</td>
                                <td>{{ $provinsi->ibukota }}</td>
                                <td>{{ $provinsi->latitude }}</td>
                                <td>{{ $provinsi->longitude }}</td>
                                <td>
                                    <a href="{{ route('provinsis.show', $provinsi->id) }}"
                                        class="btn btn-info btn-sm">Read</a>
                                    <a href="{{ route('provinsis.edit', $provinsi->id) }}"
                                        class="btn btn-warning btn-sm">Update</a>
                                    <form action="{{ route('provinsis.destroy', $provinsi->id) }}" method="POST"
                                        style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Anda yakin ingin menghapus data provinsi ini?')">Delete</button>
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
