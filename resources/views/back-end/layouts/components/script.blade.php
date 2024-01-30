<script src="{{ asset('back-end/assets/static/js/components/dark.js') }}"></script>
<script src="{{ asset('back-end/assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('back-end/assets/compiled/js/app.js') }}"></script>
<!-- Need: Apexcharts -->
<script src="{{ asset('back-end/assets/extensions/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('back-end/assets/static/js/pages/dashboard.js') }}"></script>
<script src="{{ asset('back-end/assets/extensions/sweetalert2/sweetalert2.min.js') }}"></script>
<script src="{{ asset('back-end/assets/static/js/pages/sweetalert2.js') }}"></script>
@vite('resources/js/app.js')

<script>
    function preview() {
        frame.src = URL.createObjectURL(event.target.files[0]);
    }
</script>

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
</body>
</html>