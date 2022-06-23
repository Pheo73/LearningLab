<div>
    @if(Session::get('success'))
    <div class="alert alert-success">
      {{ Session::get('success') }}
    </div>
    @endif


    <form class="card card-md" action="." method="post" wire:submit.prevent='RegisterHandler()'>
          <div class="card-body">
            <h2 class="card-title text-center mb-4">Créer un nouveau compte</h2>
            <div class="mb-3">
              <label class="form-label">Nom</label>
              <input type="text" class="form-control" placeholder="Entrez votre pseudo" wire:model="name">
              @error('name')
              <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
            <div class="mb-3">
              <label class="form-label">Adresse Mail</label>
              <input type="email" class="form-control" placeholder="Entrez votre email" wire:model="email">
              @error('email')
              <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
            <div class="mb-3">
              <label class="form-label">Mot de passe</label>
              <div class="input-group input-group-flat">
                <input id="pass" type="password" class="form-control" placeholder="Mot de passe" autocomplete="off" wire:model="password">
                <span class="input-group-text">
                  <a onclick="action()" class="link-secondary" title="" data-bs-toggle="tooltip" data-bs-original-title="Show password"><!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><desc>Download more icon variants from https://tabler-icons.io/i/eye</desc><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="12" cy="12" r="2"></circle><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7"></path>
                    </svg>
                  </a>
                </span>
              </div>
              @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
              <label class="form-check">
                <input type="checkbox" class="form-check-input">
                <span class="form-check-label">Accepter les <a href="./terms-of-service.html" tabindex="-1">conditions et la politique de confidentialité</a>.</span>
              </label>
            </div>
            <div class="form-footer">
              <button type="submit" class="btn btn-primary w-100">Créer un compte</button>
            </div>
          </div>
        </form>
</div>
