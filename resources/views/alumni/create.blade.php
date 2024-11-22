<div class="modal fade" id="createModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <form action="{{ route('alumni.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="foto" class="form-label">Foto</label>
                        <input type="file" class="form-control @error('foto') is-invalid @enderror" id="foto"
                            name="foto" accept="image/*" required>
                        @error('foto')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
                            name="nama" value="{{ old('nama') }}" required>
                        @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="jurusan" class="form-label">Jurusan</label>
                        <select class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" name="jurusan" required>
                            <option value="">Pilih Jurusan</option>
                            <option value="Teknik Komputer Jaringan" {{ old('jurusan') == 'Teknik Komputer Jaringan' ? 'selected' : '' }}>TKJ</option>
                            <option value="Pengembangan Perangkat Lunak dan Gim" {{ old('jurusan') == 'Pengembangan Perangkat Lunak dan Gim' ? 'selected' : '' }}>PPLG</option>
                            <option value="Desain Komunikasi Visual" {{ old('jurusan') == 'Desain Komunikasi Visual' ? 'selected' : '' }}>DKV</option>
                            <option value="Akuntansi" {{ old('jurusan') == 'Akuntansi' ? 'selected' : '' }}>AK</option>
                            <option value="Manajemen Perkantoran" {{ old('jurusan') == 'Manajemen Perkantoran' ? 'selected' : '' }}>MP</option>
                            <option value="Perhotelan" {{ old('jurusan') == 'Perhotelan' ? 'selected' : '' }}>PH</option>
                            <option value="Bisnis Digital" {{ old('jurusan') == 'Bisnis Digital' ? 'selected' : '' }}>BD</option>
                        </select>
                        @error('jurusan')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                
                    <div class="mb-3">
                        <label for="bekerja" class="form-label">Bekerja</label>
                        <input type="text" class="form-control @error('bekerja') is-invalid @enderror" id="bekerja"
                        name="bekerja" value="{{ old('bekerja') }}" required>
                        @error('bekerja')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
