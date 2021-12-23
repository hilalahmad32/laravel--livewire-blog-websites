<div>
    <x-slot name="title">Login</x-slot>
    <div class="row mt-5">

    <div class="col-md-8 col-xl-6 col-lg-6 col-sm-12 offset-lg-3 offset-xl-3 offset-md-2 offset-sm-0 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Admin Login</h4>
            <form class="forms-sample" wire:submit.prevent='login'>
              <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-9">
                  <input type="text" wire:model="email" name="email"class="form-control" id="" placeholder="Email">
                </div>
              </div>
              <div class="form-group row">
                <label for=""  class="col-sm-3 col-form-label">Password</label>
                <div class="col-sm-9">
                  <input type="password" wire:model="password" class="form-control" id="" placeholder="Password">
                </div>
              </div>
              <div class="form-check form-check-flat form-check-primary">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input"> Remember me </label>
              </div>
              <button type="submit" class="btn btn-primary mr-2">Submit</button>
            </form>
          </div>
        </div>
      </div>

    </div>
</div>
