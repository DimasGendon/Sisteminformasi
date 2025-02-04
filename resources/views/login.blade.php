<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>ADMIN Sistem Informasi BKK SMKS Muhammadiyah 1 Genteng</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('TemplateAdmin/images/FBKK 2.png') }}">
    <link href="{{ asset('TemplateAdmin/css/style.css') }}" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="h-100 bg-light">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-8 col-lg-6">
                    <div class="card shadow-lg">
                        <div class="card-body">
                            <div class="text-center mb-4">
                                <img src="{{ asset('TemplateAdmin/images/FBKK 2.png') }}" alt="Logo" style="width: 80px;">
                                <h4 class="mt-3">Sign in to your account</h4>
                            </div>
                            <form action="{{ route('store.login') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="email" class="form-label"><strong>Email</strong></label>
                                    <input type="email" name="email" id="email" class="form-control"
                                        placeholder="email@gmail.com" value="{{ old('email') }}">
                                    @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label"><strong>Password</strong></label>
                                    <input type="password" name="password" id="password" class="form-control">
                                    @error('password')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Masuk</button>
                                </div>
                            </form>
                            <div class="text-center mt-3">
                                <p class="mb-0">Don't have an account? <a href="./page-register.html" class="text-primary">Sign up</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('TemplateAdmin/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('TemplateAdmin/js/quixnav-init.js') }}"></script>
    <script src="{{ asset('TemplateAdmin/js/custom.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (session('Gagal'))
        <script>
            Swal.fire({
                toast: true,
                icon: 'error',
                title: '{{ session('Gagal') }}',
                animation: true,
                position: 'top-right',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer);
                    toast.addEventListener('mouseleave', Swal.resumeTimer);
                }
            });
        </script>
    @endif
</body>

</html>