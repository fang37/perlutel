<div>
    <div class="row">
        <div class="col-sm-12 offset-sm-0">
            <button wire:click="$emit('addUserComponent')" class="btn btn-sm btn-success"><i class="fas fa-plus-circle"></i> Add User</button>
        </div>
        <hr>
    </div>


    @php($number = 0)

        <div class="table-responsive users-table">
            <table class="table table-striped table-sm data-table">
                <thead>
                    <th width="5%">
                        Number
                    </th>
                    <th width="20%">
                        First Name
                    </th>
                    <th width="20%">
                        Last Name
                    </th>
                    <th width="45%">
                    </th>
                    <th width="5%">
                        Action
                    </th>

                </thead>

                <tbody>
                    @foreach($profiles as $profile)

                        <tr>
                            <td>
                                {{++$number}}
                            </td>
                            <td>
                                {{$profile->first_name}}
                            </td>
                            <td>
                                {{$profile->last_name}}
                            </td>
                            <td>
                            </td>
                            <td>
                                <button wire:click="$emit('editUserComponent', {{$profile->id}})" class="btn btn-xs btn-warning"><i class="fa fa-edit fa-xs" style ="color:black" aria-hidden="true"></i> Edit</button>
                            </td>
                        </tr>
                     @endforeach

                </tbody>
            </table>
        </div>
    @livewire('sympoza::user.admin.add')
    @livewire('sympoza::user.admin.edit')
</div>
