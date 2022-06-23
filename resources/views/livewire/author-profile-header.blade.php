<div>
  <div class="page-header">
    <div class="row align-items-center">
      <div class="col-auto">
        <span class="avatar avatar-md" style="background-image: url({{ $author->picture }})"></span>
      </div>
      <div class="col-md-6">
        <h2 class="page-title">{{ $author->name }}</h2>
        <div class="page-subtitle">
          <div class="row">
            <div class="col-auto">
              <!-- Download SVG icon from http://tabler-icons.io/i/building-skyscraper -->
              <!-- SVG icon code -->
              <a href="#" class="text-reset">@ {{ $author->username }}</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-auto d-md-flex">
        <input type="file" name="file" id="changeAuthorPictureFile" class="d-one" onchange="this.dispatchEvent(new InputEvent('input'))" style="display:none;">
        <a href="#" class="btn btn-primary" onclick="event.preventDefault();document.getElementById('changeAuthorPictureFile').click();" >
          <!-- Download SVG icon from http://tabler-icons.io/i/message -->
          <!-- SVG icon code -->
          Change Picture
        </a>
      </div>
    </div>
  </div>
</div>
