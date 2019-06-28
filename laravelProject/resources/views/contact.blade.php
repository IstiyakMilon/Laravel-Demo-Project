<!--Email Validation-->

@if($errors->any())
  @foreach($errors->all() as $error)
    <li>{{ $error}}</li>
  @endforeach
@endif

<form action="{{ route('contactstore') }}" method="post">
<!--Cross Site Reqiest forgery Checking-->
{{ @csrf_field()}}
<label for="email">Email: </label>
<input type="text" name="email">
<input type="submit" value="Submit">
</form>