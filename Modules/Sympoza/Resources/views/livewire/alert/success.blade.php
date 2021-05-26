<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function () {
        @this.on('success', message => {
            Swal.fire({
                //title: 'Are You Sure?',
                text: message,
                type: "success",
                //showCancelButton: true,
                confirmButtonColor: '#3085d6',
                //cancelButtonColor: '#aaa',
                confirmButtonText: 'OK'
            })
        });
    })
</script>
