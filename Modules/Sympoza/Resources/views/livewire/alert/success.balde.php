<script type="text/javascript"
    document.addEventListener('DOMContentLoaded', function(){
        @this.on{'successMessage', message =>{
            Swal.fire({
                //title: 'Are you sure?',
                text: message,
                icon: "success",
                //showCancelButton: true,
                confirmButtonColor: '#3085d6',
                //cancelButtonColor: '#aaa',
                confirmButtonText: 'OK'
            })
        }}
    })
></script>