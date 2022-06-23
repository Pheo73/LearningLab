<div>
  <form method="post" wire:submit.prevent='UpdateDetails()'>
    <div class="row">
      <div class="col-md-4">
        <div class="mb-3">
                      <label class="form-label">Nom</label>
                      <input type="text" class="form-control" name="example-text-input" placeholder="nom" wire:model='name'>
                      <span class="text-danger">@error('name'){{ $message }}@enderror</span>
                    </div>
      </div>
      <div class="col-md-4">
        <div class="mb-3">
                      <label class="form-label">Pseudo</label>
                      <input type="text" class="form-control" name="example-text-input" placeholder="pseudo" wire:model='username'>
                      <span class="text-danger">@error('username'){{ $message }}@enderror</span>
                    </div>
      </div>
      <div class="col-md-4">
        <div class="mb-3">
                      <label class="form-label">Email</label>
                      <input type="text" class="form-control" name="example-text-input" placeholder="email" disabled wire:model='email'>
                      <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                    </div>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Sauvegarder</button>
  </form>
</div>
