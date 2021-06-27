<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', 
    function deleteData(link) {
        swal({
            icon: 'warning',
            title: 'Benar Ingin Hapus data?',
            text: 'data tidak dapat dikembalikan',
            buttons: ["No", "Yes"],
            dangerMode: true,
        })
            .then(isClose => {
                if (isClose) {
                    window.location = $(link).attr('action');
                } else {
                    swal("Delete data canceled");
                }
            });
    })
</script>
