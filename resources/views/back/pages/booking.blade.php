@extends('back.layouts.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Profile')
@section('content')

<div class="table-responsive">
  <table
		class="table table-vcenter">
    <thead>
      <tr>
        <th>Name</th>
        <th>Projet</th>
        <th>Email</th>
        <th>date</th>
        <th class="w-1"></th>
      </tr>
    </thead>

      <tbody>
        <tr>
          <td >{{ $name }} {{$firstname}}</td>
          <td class="text-muted" >
            {{ $form_message }}
          </td>
          <td class="text-muted" ><a href="#" class="text-reset">{{ $email }}</a></td>
          <td class="text-muted" >
            {{ $date }}
          </td>
          <td>
          </td>
        </tr>
      </tbody>


  </table>
</div>


@endsection
@push('scripts')
  <script>
    $('#changeAuthorPictureFile').ijaboCropTool({
          preview : '',
          setRatio:1,
          allowedExtensions: ['jpg', 'jpeg','png'],
          buttonsText:['CROP','QUIT'],
          buttonsColor:['#30bf7d','#ee5155', -15],
          processUrl:'{{ route("author.change-profile-picture") }}',
          withCSRF:['_token','{{ csrf_token() }}'],
          onSuccess:function(message, element, status){
             //alert(message);
             Livewire.emit('updateAuthorProfileHeader');
             Livewire.emit('updateTopHeader');
          },
          onError:function(message, element, status){
            alert(message);
          }
    });
  </script>
@endpush
