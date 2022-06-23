

<div>

    @if(Session::get('fail'))
        <div class="alert alert-danger">
            {{ Session::get('fail') }}
        </div>
    @endif

    @if(Session::get('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif


    <form class="card card-md" wire:submit.prevent="LoginHandler()" method="post" autocomplete="off" style="font-family:Arimo, sans-serif;">
          <div class="card-body">
            <h2 class="card-title text-center mb-4" style="font-weight: 700;">Connexion à votre compte</h2>
            <div class="mb-3">
              <label class="form-label">Email ou Pseudo</label>
              <input type="text" class="form-control" placeholder="Email" wire:model="login_id">
              @error('login_id')
              <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
            <div class="mb-2">
              <label class="form-label">
                Mot de passe
                <span class="form-label-description">
                  <a href="{{ route ('author.forgot-password') }}" class="forgot-pass" style="font-weight:700;">J'ai oublié mon mot de passe</a>
                </span>
              </label>
              <div class="input-group input-group-flat">
                <input  id="pass" type="password" class="form-control" placeholder="Mot de passe" autocomplete="off" wire:model="password">
                <span class="input-group-text">
                  <a onclick="action()" class="link-secondary" title="" data-bs-toggle="tooltip" data-bs-original-title="Show password"><!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="12" cy="12" r="2"></circle><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7"></path></svg>
                  </a>
                </span>
              </div>
              @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-footer" style="margin-bottom:1rem!important">
              <button type="submit" class="btn btn-primary w-100">Connexion</button>
            </div>
            <label class="form-label">
              <span class="form-label-description">
                <a href="{{ route ('author.register') }}" class="forgot-pass" style="font-weight:700;">Créer un compte</a>
              </span>
            </label>
          </div>
        </form>
</div>
