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
                            <li class="breadcrumb-item"><a href="{{ route('faskes.index') }}">Home</a></li>
                            <li class="breadcrumb-item active">Fasilitas Kesehatan</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>


    <section class="content">
        <div class="card">
            <div class="card-header">
                <h1 class="my-4">Daftar Fasilitas Kesehatan</h1>
                    <a href="{{ route('faskes.create') }}" class="btn btn-primary">Tambah Fasilitas Kesehatan</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Website</th>
                            <th>Email</th>
                            <th>Kab/Kota</th>
                            <th>Rating</th>
                            <th>Jenis Faskes</th>
                            <th>Kategori</th>
                            <th>Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($list_faskes as $faskes)
                            <tr>
                                <td>{{ $faskes->id }}</td>
                                <td>{{ $faskes->nama }}</td>
                                <td>{{ $faskes->alamat }}</td>
                                <td><a href="{{ $faskes->website }}" target="_blank">{{ $faskes->website }}</a></td>
                                <td>{{ $faskes->email }}</td>
                                <td>{{ $faskes->kabkota->nama }}</td>
                                <td>{{ $faskes->rating }}</td>
                                <td>{{ $faskes->jenis_faskes->nama }}</td>
                                <td>{{ $faskes->kategori->nama }}</td>
                                <td>
                                    <a href="{{ route('faskes.show', $faskes->id) }}" class="btn btn-info btn-sm">Read</a>
                                    <a href="{{ route('faskes.edit', $faskes->id) }}" class="btn btn-warning btn-sm">Update</a>
                                    <form action="{{ route('faskes.destroy', $faskes->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this faskes?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
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