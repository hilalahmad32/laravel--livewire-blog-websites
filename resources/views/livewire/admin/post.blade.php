<div>
    <x-slot name="title"> Posts </x-slot>

    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <h3>Posts ( 4 ) </h3>
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
                            <th>Title</th>
                            <th>Category</th>
                            <th>Admin</th>
                            <th>Image</th>
                            <th>Thumb</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($posts as $post)
                        <tr>
                            <th>{{ $post->id }}</th>
                            <th>{{ $post->title }}</th>
                            <th>{{ $post->categorys->category_name }}</th>
                            <th>{{ $post->admins->username }}</th>
                            <th><img src="{{ asset('storage/'.$post->image) }}" alt=""></th>
                            <th><img src="{{ asset('storage/'.$post->thumb) }}" alt=""></th>
                            <th>
                                <button wire:click="edit({{ $post->id }})" class="btn btn-success">Edit</button>
                                <button wire:click="delete({{ $post->id }})" class="btn btn-danger">Delete</button>
                            </th>
                        </tr>
                        @empty

                        @endforelse

                        <td></td>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endif

    @if ($showCreateForm == true)
    <div class="card mx-auto">
        <div class="card-body px-5 py-5">
            <h3 class="card-title text-left mb-3">Add Post</h3>
            <form wire:submit.prevent='store'>
                <div class="form-group">
                    <label>Enter Title</label>
                    <input type="text" wire:model.lazy="title" class="form-control p_input">
                    @error('title')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Category</label>
                    <select wire:model='category' class='form-control p_input'>
                        <option > Select Category</option>
                        @forelse($categorys as $category)
                        <option value="{{ $category->id }}"> {{ $category->category_name }}</option>
                        @empty
                        <option disabled selected> Category Not Found</option>
                        @endforelse
                    </select>
                    @error('category')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea wire:model='content' col="4" row="10" class="form-control p_input"></textarea>
                    @error('content')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Enter Main Image</label>
                    <input type="file" wire:model='main_image' class='form-control p_input' />
                    @if($main_image)
                    <img src="{{ $main_image->temporaryUrl() }}" style="width:70px;height:70px;">
                    @endif
                    @error('main_image')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Enter thumb</label>
                    <input type="file" wire:model='thumb' class='form-control p_input' />
                    @if($thumb)
                    <img src="{{ $thumb->temporaryUrl() }}" style="width:70px;height:70px;">
                    @endif
                    @error('thumb')
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
            <h3 class="card-title text-left mb-3">Update Post</h3>
            <form wire:submit.prevent='update({{ $edit_id }})'>
                <div class="form-group">
                    <label>Enter Title</label>
                    <input type="text" wire:model.lazy="edit_title" class="form-control p_input">
                    @error('edit_title')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Category</label>
                    <select wire:model='edit_category' class='form-control p_input'>
                        <option> Select Category</option>
                        @forelse($categorys as $category)
                        <option value="{{ $category->id }}"> {{ $category->category_name }}</option>
                        @empty
                        <option disabled selected> Category Not Found</option>
                        @endforelse
                    </select>
                    @error('edit_category')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea wire:model='edit_content' col="4" row="10" class="form-control p_input"></textarea>
                    @error('edit_content')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Enter Main Image</label>
                    <input type="file" wire:model='new_main_image' class='form-control p_input' />
                    @if($new_main_image)
                    <img src="{{ $new_main_image->temporaryUrl() }}" style="width:70px;height:70px;">
                    @else
                    <img src="{{asset('storage/'.$old_main_image)}}" style="width:70px;height:70px;">
                    @endif
                    <input type="text" wire:model="old_main_image">

                    @error('new_main_image')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Enter thumb</label>
                    <input type="file" wire:model='new_thumb' class='form-control p_input' />
                    @if($new_thumb)
                    <img src="{{ $new_thumb->temporaryUrl() }}" style="width:70px;height:70px;">
                    @else
                    <img src="{{asset('storage/'.$old_thumb)}}" style="width:70px;height:70px;">
                    @endif
                    <input type="text" wire:model="old_thumb">
                    @error('new_thumb')
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
</div>
