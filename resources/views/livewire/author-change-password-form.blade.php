<div>
  <form method="post" wire:submit.prevent='changePassword()'>
    <div class="row">
      <div class="col-md-4">
        <div class="mb-3">
          <label class="form-label">Votre mot de passe</label>
          <input type="password" class="form-control" name="example-text-input" wire:model='current_password'>
          <span class="text-danger">@error('current_password'){{ $message }}@enderror</span>
        </div>
      </div>
      <div class="col-md-4">
        <div class="mb-3">
          <label class="form-label">Nouveau mot de passe</label>
          <input type="password" class="form-control" name="example-text-input" wire:model='new_password'>
          <span class="text-danger">@error('new_password'){{ $message }}@enderror</span>
        </div>
      </div>
      <div class="col-md-4">
        <div class="mb-3">
          <label class="form-label">Confirmer le mot de passe</label>
          <input type="password" class="form-control" name="example-text-input" wire:model='confirm_new_password'>
          <span class="text-danger">@error('confirm_new_password'){{ $message }}@enderror</span>
        </div>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Sauvegarder</button>
  </form>
</div>
