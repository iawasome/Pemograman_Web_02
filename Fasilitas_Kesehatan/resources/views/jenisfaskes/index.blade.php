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
                        <h1>Jenis Fasilitas Kesehatan</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('jenisfaskes.index') }}">Home</a></li>
                            <li class="breadcrumb-item active">Jenis Fasilitas Kesehatan</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h1 class="my-4">Daftar Jenis Fasilitas Kesehatan</h1>
                    <a href="{{ route('jenisfaskes.create') }}" class="btn btn-primary">Tambah Jenis Fasilitas Kesehatan</a>
                </div>
                <div class="card-body">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Deskripsi</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_jenisfaskes as $jenisfaskes)
                                <tr>
                                    <td>{{ $jenisfaskes->id }}</td>
                                    <td>{{ $jenisfaskes->nama }}</td>
                                    <td>{{ $jenisfaskes->deskripsi }}</td>
                                    <td>
                                        <a href="{{ route('jenisfaskes.show', $jenisfaskes->id) }}" class="btn btn-info btn-sm">Read</a>
                                        <a href="{{ route('jenisfaskes.edit', $jenisfaskes->id) }}" class="btn btn-warning btn-sm">Update</a>
                                        <form action="{{ route('jenisfaskes.destroy', $jenisfaskes->id) }}" method="POST" style="display: inline;">
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
            </div>
        </section>
    </div>
</div>

@include('admin.footer')
