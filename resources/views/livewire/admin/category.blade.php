<div>
    <x-slot name="title">Category</x-slot>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <h3>Category ( 4 ) </h3>
                    <button wire:click='showForm' class="btn btn-success">Create</button>
                </div>
            </div>
        </div>
        @if($showTable == true)
        <div class="card my-3">
            <div class="card-body">
                <h4 class="card-title">Category Table</h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Category</th>
                                <th>Posts</th>
                                <th>Status</th>
                                <th>Image</th>
                                <th>Status Action</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($categorys as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->category_name }}</td>
                                <td>{{ $category->posts }}</td>
                                <td>{{ $category->status }}</td>
                                <td><img src="{{ asset('storage/'.$category->image) }}" alt=""></td>
                                <td>
                                    <button wire:click='show({{ $category->id }})' class="btn btn-success">Edit</button>
                                    <button wire:click='delete({{ $category->id }})'
                                        class="btn btn-danger">Delete</button>
                                </td>

                            </tr>
                            @empty

                            @endforelse


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @endif


        @if($showCreateForm == true)
        {{-- create category form --}}
        <div class="row my-5">
            <div class="col-xl-6 col-lg-6 col-md-8 col-sm-12 offset-xl-3 offset-lg-3 offset-md-2 offset-sm-0">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Add Category Form</h4>
                        <form wire:submit.prevent='store'>
                            <label for="category" class="form-label">Category</label>
                            <div class="">
                                <input type="text" class="form-control" wire:model.lazy="category_name"
                                    placeholder="Category">
                                @error('category_name')
                                <span class="text-danger">{{$message }}</span>
                                @enderror
                            </div>
                            <div class="">
                                <input type="file" class="form-control form-control-lg" wire:model.lazy="file">
                                @if ($file)
                                <img src="{{ $file->temporaryUrl() }}" style="width:70px;height:70px;" alt="">

                                @endif
                            </div>
                            <button type="submit" class="btn btn-primary mr-2 my-2">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        @endif

        @if ($showUpdateForm == true)
        {{-- Update category form --}}
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-8 col-sm-12 offset-xl-3 offset-lg-3 offset-md-2 offset-sm-0">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Update Category Form</h4>
                        <form wire:submit.prevent='update({{ $edit_id }})'>
                            <label for="category" class="form-label">Category</label>
                            <div class="">
                                <input type="text" wire:model='edit_category_name' class="form-control"
                                    placeholder="Category">
                            </div>
                            <div class=" my-4">
                                <input type="file" wire:model='new_image' class="form-control">
                                @if ($new_image)
                                <img src="{{ $new_image->temporaryUrl() }}" style="width:70px;height:70px;" alt="">
                                @else
                                <img src="{{ asset('storage/'.$old_image) }}" style="width:70px;height:70px;" alt="">

                                @endif
                            </div>
                            <button type="submit" class="btn btn-primary mr-2 my-2">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endif

    </div>

</div>
