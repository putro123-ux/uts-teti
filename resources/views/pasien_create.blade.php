@extends('layout.app', ['title' => 'Data Pasien'])
@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-lg border-0 rounded-lg">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0"><i class="ti ti-user-plus me-2"></i>Tambah Data Pasien</h4>
                </div>
                <div class="card-body p-4">
                    <form action="/pasien" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label fw-bold mb-2" for="foto">Foto Pasien</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="ti ti-photo"></i></span>
                                        <input type="file" class="form-control form-control-lg @error('foto') is-invalid @enderror" name="foto">
                                    </div>
                                    <small class="text-muted">Format: JPG, JPEG, PNG</small>
                                    @error('foto')
                                        <div class="text-danger small">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label fw-bold mb-2" for="no_pasien">Nomor Pasien</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="ti ti-id"></i></span>
                                        <input type="text" class="form-control form-control-lg @error('no_pasien') is-invalid @enderror" id="no_pasien" name="no_pasien" value="{{ old('no_pasien') }}" placeholder="Masukkan nomor pasien">
                                    </div>
                                    @error('no_pasien')
                                        <div class="text-danger small">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label fw-bold mb-2" for="nama">Nama Pasien</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="ti ti-user"></i></span>
                                        <input type="text" class="form-control form-control-lg @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}" placeholder="Masukkan nama lengkap">
                                    </div>
                                    @error('nama')
                                        <div class="text-danger small">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label fw-bold mb-2" for="umur">Umur</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="ti ti-calendar"></i></span>
                                        <input type="number" class="form-control form-control-lg @error('umur') is-invalid @enderror" id="umur" name="umur" value="{{ old('umur') }}" placeholder="Masukkan umur">
                                    </div>
                                    @error('umur')
                                        <div class="text-danger small">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label fw-bold mb-2">Jenis Kelamin</label>
                                    <div class="d-flex gap-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki_laki" value="laki-laki" {{ old('jenis_kelamin') === 'laki-laki' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="laki_laki">Laki-laki</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="perempuan" {{ old('jenis_kelamin') === 'perempuan' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="perempuan">Perempuan</label>
                                        </div>
                                    </div>
                                    @error('jenis_kelamin')
                                        <div class="text-danger small">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label fw-bold mb-2" for="alamat">Alamat</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="ti ti-map-pin"></i></span>
                                        <input type="text" class="form-control form-control-lg @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{ old('alamat') }}" placeholder="Masukkan alamat lengkap">
                                    </div>
                                    @error('alamat')
                                        <div class="text-danger small">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="text-end mt-4">
                            <a href="/pasien" class="btn btn-secondary btn-lg me-2">
                                <i class="ti ti-arrow-left me-2"></i>Kembali
                            </a>
                            <button type="submit" class="btn btn-primary btn-lg px-5">
                                <i class="ti ti-device-floppy me-2"></i>Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection