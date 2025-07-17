<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    
    <link rel="shortcut icon" href="data:image/svg+xml,%3csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2033%2034'%20fill-rule='evenodd'%20stroke-linejoin='round'%20stroke-miterlimit='2'%20xmlns:v='https://vecta.io/nano'%3e%3cpath%20d='M3%2027.472c0%204.409%206.18%205.552%2013.5%205.552%207.281%200%2013.5-1.103%2013.5-5.513s-6.179-5.552-13.5-5.552c-7.281%200-13.5%201.103-13.5%205.513z'%20fill='%23435ebe'%20fill-rule='nonzero'/%3e%3ccircle%20cx='16.5'%20cy='8.8'%20r='8.8'%20fill='%2341bbdd'/%3e%3c/svg%3e" type="image/x-icon">
    <link rel="stylesheet" crossorigin href="{{ asset('assets/compiled/css/app.css')}}">
    <link rel="stylesheet" crossorigin href="{{ asset('assets/compiled/css/app-dark.css')}}">
    <link rel="stylesheet" crossorigin href="{{ asset('assets/compiled/css/iconly.css')}}">
</head>

<body>
    <div id="app">
        @include('components.sidebar')

        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            {{-- <div class="page-heading">
                <h3>Pickitup Statistics</h3>
            </div> --}}

            <div class="page-content">
                <section class="row">
                    @yield('content')
                </section>
            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2025 &copy; Pickitup</p>
                    </div>
                    <div class="float-end">
                        <p>
                            by <a href="https://saugi.me">M.Khairan</a>
                        </p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="{{ asset('assets/static/js/initTheme.js')}}"></script>
    <script src="{{ asset('assets/static/js/components/dark.js')}}"></script>
    <script src="{{ asset('assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{ asset('assets/compiled/js/app.js')}}"></script>
    <script src="{{ asset('assets/extensions/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{ asset('assets/static/js/pages/dashboard.js')}}"></script>
</body>
</html>