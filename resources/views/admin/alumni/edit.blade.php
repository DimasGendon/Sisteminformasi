<div class="modal fade" id="editModal{{ $alumni->id }}">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Alumni</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <form action="{{ route('alumni.update', $alumni->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="foto" class="form-label">Foto :</label>
                        @if ($alumni->foto)
                            <div class="mb-2">
                                <img src="{{ asset('storage/' . $alumni->foto) }}" alt="Foto Alumni"
                                    style="width: 100px; height: 100px; object-fit: cover;">
                            </div>
                        @endif
                        <input type="file" class="form-control @error('foto') is-invalid @enderror" id="foto"
                            name="foto" accept="image/*">
                        @error('foto')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama :</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
                            name="nama" value="{{ old('nama', $alumni->nama) }}">
                        @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="jurusan" class="form-label">Jurusan :</label>
                        <select class="form-control @error('jurusan') is-invalid @enderror" id="jurusan"
                            name="jurusan">
                            <option value="">Pilih Jurusan</option>
                            <option value="Teknik Komputer Jaringan"
                                {{ old('jurusan', $alumni->jurusan) == 'Teknik Komputer Jaringan' ? 'selected' : '' }}>
                                TKJ</option>
                            <option value="Pengembangan Perangkat Lunak dan Gim"
                                {{ old('jurusan', $alumni->jurusan) == 'Pengembangan Perangkat Lunak dan Gim' ? 'selected' : '' }}>
                                PPLG</option>
                            <option value="Desain Komunikasi Visual"
                                {{ old('jurusan', $alumni->jurusan) == 'Desain Komunikasi Visual' ? 'selected' : '' }}>
                                DKV</option>
                            <option value="Akuntansi"
                                {{ old('jurusan', $alumni->jurusan) == 'Akuntansi' ? 'selected' : '' }}>AK</option>
                            <option value="Manajemen Perkantoran"
                                {{ old('jurusan', $alumni->jurusan) == 'Manajemen Perkantoran' ? 'selected' : '' }}>MP
                            </option>
                            <option value="Perhotelan"
                                {{ old('jurusan', $alumni->jurusan) == 'Perhotelan' ? 'selected' : '' }}>PH</option>
                            <option value="Bisnis Digital"
                                {{ old('jurusan', $alumni->jurusan) == 'Bisnis Digital' ? 'selected' : '' }}>BD
                            </option>
                        </select>
                        @error('jurusan')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="bekerja" class="form-label">Bekerja :</label>
                        <input type="text" class="form-control @error('bekerja') is-invalid @enderror" id="bekerja"
                            name="bekerja" value="{{ old('bekerja', $alumni->bekerja) }}">
                        @error('bekerja')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
