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
                                <th>Status Action</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Jacob</td>
                                <td>53275531</td>
                                <td>12 May 2017</td>
                                <td><label class="badge badge-danger">Pending</label></td>
                            </tr>
                            <tr>
                                <td>Messsy</td>
                                <td>53275532</td>
                                <td>15 May 2017</td>
                                <td><label class="badge badge-warning">In progress</label></td>
                            </tr>
                            <tr>
                                <td>John</td>
                                <td>53275533</td>
                                <td>14 May 2017</td>
                                <td><label class="badge badge-info">Fixed</label></td>
                            </tr>
                            <tr>
                                <td>Peter</td>
                                <td>53275534</td>
                                <td>16 May 2017</td>
                                <td><label class="badge badge-success">Completed</label></td>
                            </tr>
                            <tr>
                                <td>Dave</td>
                                <td>53275535</td>
                                <td>20 May 2017</td>
                                <td><label class="badge badge-warning">In progress</label></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @endif


        @if($showCreateForm == true)
        {{-- create category form --}}
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-8 col-sm-12 offset-xl-3 offset-lg-3 offset-md-2 offset-sm-0">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Add Category Form</h4>
                        <form>
                            <label for="category" class="form-label">Category</label>
                            <div class="">
                                <input type="text" class="form-control" placeholder="Category">
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
                        <form>
                            <label for="category" class="form-label">Category</label>
                            <div class="">
                                <input type="text" class="form-control" placeholder="Category">
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
