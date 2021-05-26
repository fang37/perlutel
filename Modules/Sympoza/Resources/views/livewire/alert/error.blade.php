<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function () {
        @this.on('error', message => {
            Swal.fire({
                //title: 'Are You Sure?',
                text: message,
                type: "error",
                //showCancelButton: true,
                confirmButtonColor: '#3085d6',
                //cancelButtonColor: '#aaa',
                confirmButtonText: 'OK'
            })
        });
    })
</script>
