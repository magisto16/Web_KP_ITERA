<form action="{{route('koor.validasi.update',$user->id)}}" method="POST">
@csrf
{{method_field('PUT')}}
    <input id="verified" type="datetime-local"  user="{{$user->id}}"name="verified" value={{now()}} hidden/>
    <p>Apakah anda yakin ingin melakukan validasi? Proses ini tidak bisa dibatalkan.</p>
</form>