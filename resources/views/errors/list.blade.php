@if($errors->any())
<div class="alert alert-danger">
  <p>The following errors have occurred:</p>
  <ul>
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif