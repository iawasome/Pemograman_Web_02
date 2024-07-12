@include('admin.header')
@include('admin.sidebar')

<div class="container-fluid px-4">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Kabkota</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('kabkota.index') }}">Home</a></li>
                            <li class="breadcrumb-item active">Edit Kabkota</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Kabkota</h3>
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
                    <form action="{{ route('kabkota.update', $kabkota->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nama">Nama:</label>
                            <input type="text" name="nama" value="{{ $kabkota->nama }}" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="latitude">Latitude:</label>
                            <input type="number" name="latitude" value="{{ $kabkota->latitude }}" step="0.000001" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="longitude">Longitude:</label>
                            <input type="number" name="longitude" value="{{ $kabkota->longitude }}" step="0.000001" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="provinsi_id">Provinsi:</label>
                            <select class="form-control" id="provinsi_id" name="provinsi_id" required>
                                @foreach($provinsis as $provinsi)
                                    <option value="{{ $provinsi->id }}" {{ $kabkota->provinsi_id == $provinsi->id ? 'selected' : '' }}>{{ $provinsi->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
                <div class="card-footer">
                    Footer
                </div>
            </div>
        </section>
    </div>
</div>

@include('admin.footer')
