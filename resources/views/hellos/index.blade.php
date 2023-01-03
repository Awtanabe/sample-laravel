@if ($msg != '')
  <p>{{$msg}}</p>
@else
  <p>何かかいてください</p>
@endif


<form action="/hellos" method="POST">
  @csrf
  <input type="text" name="msg">
  <input type="submit">
</form>