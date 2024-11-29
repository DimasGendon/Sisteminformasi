@extends('layout.admin')

@push('script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    // Check if there are validation errors, if so trigger the SweetAlert on form submit
    @if ($errors->any())
        document.addEventListener('DOMContentLoaded', function () {
            Swal.fire({
                toast: true,
                icon: 'error',
                title: 'Kontak harus diisi terlebih dahulu.',
                animation: true,
                position: 'top-right',
                showConfirmButton: false,
                timer: 1500,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer);
                    toast.addEventListener('mouseleave', Swal.resumeTimer);
                }
            });
        });
    @endif
</script>
@endpush

@section('content')
    <div class="container">
        <form action="{{ route('kontak.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="whatsapp" class="form-label">WhatsApp</label>
                <input type="text" name="whatsapp" id="whatsapp" class="form-control" value="{{ old('whatsapp') }}" placeholder="Masukkan Nomor">
                @error('whatsapp')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="facebook" class="form-label">Facebook</label>
                <input type="text" name="facebook" id="facebook" class="form-control" value="{{ old('facebook') }}" placeholder="Masukkan Email">
                @error('facebook')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="instagram" class="form-label">Instagram</label>
                <input type="text" name="instagram" id="instagram" class="form-control" value="{{ old('instagram') }}" placeholder="Masukkan Username">
                @error('instagram')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
@endsection
