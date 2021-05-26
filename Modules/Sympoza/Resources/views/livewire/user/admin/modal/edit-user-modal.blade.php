<!-- Modal -->
<div wire:ignore.self class="modal fade" id="editUserModal" tabindex="-1" role="dialog" aria-labelledby="editUserModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editUserModalLabel">Edit User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">

                <div>
                    <div class="row">
                        <div class="col-md-4 offset-md-0">
                            <label for="user_id">NIM</label>
                        </div>
                        <div class="col-md-8 offset-md-0">
                            <div class="form-group">
                                <input type="text" class="form-control" wire:model="user_id" id="user_id" readonly>
                                @error('first_name') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 offset-md-0">
                            <label for="first_name">First Name</label>
                        </div>
                        <div class="col-md-8 offset-md-0">
                            <div class="form-group">
                                <input type="text" class="form-control" wire:model="first_name" id="first_name" placeholder="Enter first name">
                                @error('first_name') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 offset-md-0">
                            <label for="last_name">Last Name</label>
                        </div>
                        <div class="col-md-8 offset-md-0">
                            <div class="form-group">
                                <input type="text" class="form-control" wire:model="last_name" id="last_name" placeholder="Enter last name">
                                @error('last_name') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click.prevent="updateUser({{$userId}})" class="btn btn-primary btn-sm" ><i class="fas fa-paper-plane"></i> Update</button>
            </div>

       </div>
    </div>
</div>
