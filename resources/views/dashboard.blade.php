@extends('layout.admin')

@push('script')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (session('Berhasil'))
        <script>
            Swal.fire({
                toast: true,
                icon: 'success',
                title: '{{ session('Berhasil') }}',
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
        </script>
    @endif
@endpush

@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- Dashboard Item 1: Slide -->
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="card text-center">
                    <a href="{{ route('admin.slide.index') }}" style="color: black;">
                        <div class="card-body">
                            <i class="fa fa-image" style="font-size: 3em;"></i>
                            <h5 class="card-title mt-2">Slide</h5>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Dashboard Item 2: Tentang Kami -->
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="card text-center">
                    <a href="{{ route('tentang_kami.create') }}" style="color: black;">
                        <div class="card-body">
                            <i class="fa fa-info-circle" style="font-size: 3em;"></i>
                            <h5 class="card-title mt-2">Tentang Kami</h5>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Dashboard Item 3: Informasi -->
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="card text-center">
                    <a href="{{ route('informasi') }}" style="color: black;">
                        <div class="card-body">
                            <i class="fa fa-bullhorn" style="font-size: 3em;"></i>
                            <h5 class="card-title mt-2">Informasi</h5>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Dashboard Item 4: Visi Misi -->
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="card text-center">
                    <a href="{{ route('vimi.create') }}" style="color: black;">
                        <div class="card-body">
                            <i class="fa fa-bullseye" style="font-size: 3em;"></i>
                            <h5 class="card-title mt-2">Visi Misi</h5>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Dashboard Item 5: Mitra -->
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="card text-center">
                    <a href="{{ route('mitra.show') }}" style="color: black;">
                        <div class="card-body">
                            <i class="fa fa-handshake" style="font-size: 3em;"></i>
                            <h5 class="card-title mt-2">Mitra</h5>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Dashboard Item 6: Loker -->
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="card text-center">
                    <a href="{{ route('loker.show') }}" style="color: black;">
                        <div class="card-body">
                            <i class="fa fa-briefcase" style="font-size: 3em;"></i>
                            <h5 class="card-title mt-2">Loker</h5>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Dashboard Item 7: Alumni -->
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="card text-center">
                    <a href="{{ route('alumni.show') }}" style="color: black;">
                        <div class="card-body">
                            <i class="fa fa-graduation-cap" style="font-size: 3em;"></i>
                            <h5 class="card-title mt-2">Alumni</h5>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Dashboard Item 8: Kontak -->
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="card text-center">
                    <a href="#kontak" style="color: black;">
                        <div class="card-body">
                            <i class="fa fa-envelope" style="font-size: 3em;"></i>
                            <h5 class="card-title mt-2">Kontak</h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
