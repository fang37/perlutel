<div>
    {{-- livewire view --}}
    @include('sympoza::livewire.user.admin.modal.edit-user-modal')
    @include('sympoza::livewire.alert.success')
    @include('sympoza::livewire.alert.error')

    <script type="text/javascript">
        window.livewire.on('emiterEditUserModal', () => {
            $('#editUserModal').modal('show');
        });
    </script>
</div>
