<div>
    {{-- livewire view --}}
    @include('sympoza::livewire.user.admin.modal.add-user-modal')
    @include('sympoza::livewire.alert.success')
    @include('sympoza::livewire.alert.error')

    <script type="text/javascript">
        window.livewire.on('emiterAddUserModal', () => {
            $('#addUserModal').modal('show');
        });
    </script>
</div>
