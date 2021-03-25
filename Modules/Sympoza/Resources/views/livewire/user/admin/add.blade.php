<div>
    {{-- livewire view --}}
    @include('sympoza::livewire.user.admin.modal.add-user-modal')

    <script type="text/javascript">
        window.livewire.on('emiterAddUserModal', () => {
            $('#addUserModal').modal('show');
        });
    </script>
</div>
