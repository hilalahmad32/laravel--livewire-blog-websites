<div>

    <x-slot name="title">Admin</x-slot>

    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <h3>Admin ( 4 ) </h3>
                <button wire:click='showForm' class="btn btn-success">Create</button>
            </div>
        </div>
    </div>
    @if ($showTable == true)
    <div class="card my-3">
        <div class="card-body">
            <h4 class="card-title">Category Table</h4>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Full Name</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Roll</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($admins as $admin)
                        <tr>
                            <td>{{ $admin->id }}</td>
                            <td>{{ $admin->fullname }}</td>
                            <td>{{ $admin->username }}</td>
                            <td>{{ $admin->email }}</td>
                            <td>{{ $admin->roll == 1 ? 'Admin' : 'Normal' }}</td>
                            <td>
                                <button wire:click='edit({{ $admin->id }})' class="btn btn-success">Edit</button>
                                <button wire:click='delete({{ $admin->id }})' class="btn btn-danger">Delete</button>
                            </td>
                        </tr>
                        @empty
                        <h1>Record Not found</h1>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @endif

    @if ($showCreateForm == true)
    <div class="card mx-auto">
        <div class="card-body px-5 py-5">
            <h3 class="card-title text-left mb-3">Register</h3>
            <form wire:submit.prevent='store'>
                <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" wire:model.lazy="fullname" class="form-control p_input">
                    @error('fullname')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" wire:model.lazy="username" class="form-control p_input">
                    @error('username')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" wire:model.lazy="email" class="form-control p_input">
                    @error('email')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Roll</label>
                    <select name="" id="" wire:model.lazy="roll" class="form-control p_input">
                        <option disabled selected>Select Any Roll</option>
                        <option value="1">Admin</option>
                        <option value="0">Normal</option>
                    </select>
                    @error('roll')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" wire:model.lazy="password" class="form-control p_input">
                    @error('password')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
    @endif


    @if ($showUpdateForm == true)
    <div class="card mx-auto">
        <div class="card-body px-5 py-5">
            <h3 class="card-title text-left mb-3">Register</h3>
            <form wire:submit.prevent='update({{ $edit_id }})'>
                <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" wire:model.lazy="edit_fullname" class="form-control p_input">
                    @error('edit_fullname')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" wire:model.lazy="edit_username" class="form-control p_input">
                    @error('edit_username')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" wire:model.lazy="edit_email" class="form-control p_input">
                    @error('edit_email')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Roll</label>
                    <select name="" id="" wire:model.lazy="edit_roll" class="form-control p_input">
                        <option disabled selected>Select Any Roll</option>
                        <option value="1">Admin</option>
                        <option value="0">Normal</option>
                    </select>
                    @error('edit_roll')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
    @endif
</div>
</div>
