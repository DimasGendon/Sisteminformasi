<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="defaultModalLabel">Tambah Foto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('store.slide') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-row">
                        <!-- Judul input field with validation error display -->
                        <div class="form-group col-md-12">
                            <label>Judul : <span class="font-opsional">(Opsional)</span></label>
                            <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" placeholder="Boleh kosong" value="{{ old('judul') }}">
                            @error('judul')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <!-- Foto input field with validation error display -->
                        <div class="form-group col-md-12">
                            <label>Foto :</label>
                            <input type="file" name="photo" class="form-control @error('photo') is-invalid @enderror">
                            @error('photo')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <!-- CSS untuk font berbeda dan memperbaiki tampilan kotak input -->
                        <style>
                            .font-opsional {
                                font-weight: normal;
                                color: #6c757d; /* Warna teks untuk "Opsional" */
                            }
                        
                            /* Gaya untuk input Judul */
                            .form-group input[name="judul"] {
                                border: 2px solid #ced4da; /* Memberikan border lebih jelas pada input Judul */
                                padding: 10px; /* Menambahkan padding agar lebih lebar */
                                border-radius: 4px; /* Memberikan sudut rounded pada kotak input */
                                font-size: 16px; /* Menambah ukuran font untuk kenyamanan */
                                transition: border-color 0.3s ease; /* Efek transisi saat border berubah */
                            }
                        
                            /* Gaya saat fokus di input Judul */
                            .form-group input[name="judul"]:focus {
                                border-color: #80bdff; /* Warna border ketika input difokuskan */
                                box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.25); /* Menambahkan efek shadow saat fokus */
                            }
                        
                            /* Gaya untuk input Foto */
                            .form-group input[type="file"] {
                                border: none; /* Menyembunyikan border pada input Foto */
                                padding: 6px 12px; /* Memberikan padding lebih kecil pada input file */
                                font-size: 14px; /* Ukuran font lebih kecil pada input file */
                            }
                        
                            /* Gaya saat input Foto dalam keadaan error */
                            .is-invalid {
                                border-color: #dc3545; /* Warna border saat ada error */
                            }
                        
                            /* Gaya feedback error */
                            .invalid-feedback {
                                font-size: 0.875em; /* Ukuran font feedback error */
                                color: #dc3545; /* Warna merah untuk error */
                            }
                        </style>
                        
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
