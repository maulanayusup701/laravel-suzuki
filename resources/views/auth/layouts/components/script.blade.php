@vite('resources/js/app.js')
<script src="{{ asset ('auth/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset ('auth/js/popper.min.js') }}"></script>
<script src="{{ asset ('auth/js/bootstrap.min.js') }}"></script>
<script src="{{ asset ('auth/js/main.js') }}"></script>
<script src="{{ asset('back-end/assets/extensions/sweetalert2/sweetalert2.min.js') }}"></script>
<script src="{{ asset('back-end/assets/static/js/pages/sweetalert2.js') }}"></script>
</body>

@if (session('toastr-success'))
    <script>
        Swal.fire({
            toast: true,
            icon: 'success',
            title: '{{ session('toastr-success') }}',
            position: 'bottom-end',
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

@if (session('toastr-error'))
    <script>
        Swal.fire({
            toast: true,
            icon: 'error',
            title: '{{ session('toastr-error') }}',
            position: 'bottom-end',
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

@if (session('success'))
    <script>
        Swal2.fire({
            icon: "success",
            title: "success ",
            text: "{{ session('success') }}",
        })
    </script>
@endif


</html>