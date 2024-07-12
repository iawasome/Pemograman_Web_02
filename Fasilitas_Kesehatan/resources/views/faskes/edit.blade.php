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
                        <h1>Edit Faskes</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('faskes.index') }}">Home</a></li>
                            <li class="breadcrumb-item active">Edit Faskes</li>
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
                    <h3 class="card-title">Edit Fasilitas Kesehatan</h3>

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
                    <form action="{{ route('faskes.update', $faskes->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nama">Nama:</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="{{ $faskes->nama }}" required>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat:</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $faskes->alamat }}" required>
                        </div>
                        <div class="form-group">
                            <label for="website">Website:</label>
                            <input type="url" class="form-control" id="website" name="website" value="{{ $faskes->website }}">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ $faskes->email }}">
                        </div>
                        <div class="form-group">
                            <label for="kabkota_id">Jenis Faskes:</label>
                            <select class="form-control" id="kabkota_id" name="kabkota_id" required>
                                @foreach($list_kabkota as $kabkota)
                                    <option value="{{ $kabkota->id }}" {{ $faskes->kabkota_id == $kabkota->id ? 'selected' : '' }}>{{ $kabkota->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="rating">Rating:</label>
                            <input type="number" class="form-control" id="rating" name="rating" value="{{ $faskes->rating }}" min="1" max="5">
                        </div>
                        <div class="form-group">
                            <label for="jenis_faskes_id">Jenis Faskes:</label>
                            <select class="form-control" id="jenis_faskes_id" name="jenis_faskes_id" required>
                                @foreach($list_jenisfaskes as $jenis)
                                    <option value="{{ $jenis->id }}" {{ $faskes->jenis_faskes_id == $jenis->id ? 'selected' : '' }}>{{ $jenis->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="kategori_id">Kategori:</label>
                            <select class="form-control" id="kategori_id" name="kategori_id" required>
                                @foreach($list_kategori as $kat)
                                    <option value="{{ $kat->id }}" {{ $faskes->kategori_id == $kat->id ? 'selected' : '' }}>{{ $kat->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
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
