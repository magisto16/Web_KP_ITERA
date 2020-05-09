<table class="table table-bordered">
    <tr>
        <td width="30%"><label>Nama</label></td>  
        <td width="70%">{{$user->name}}</td>  
    </tr>
    <tr>
        <td width="30%"><label>Dosen Pembimbing</label></td>  
        <td width="70%">
            @if($user->mahasiswa->dosen_id != NULL)
                {{$pembimbing->name}}
            @else
                Belum ada
            @endif
        </td>
    </tr>  
    <tr>
        <td width="30%"><label>Ubah Dosen Pembimbing</label></td>  
        <td width="70%">
            <form action= "{{route('koor.assign.update',$user->mahasiswa['id'])}}" method="POST">
            @csrf    
            {{method_field('PUT')}}
                <select id="dosen_id" name="dosen_id" placeholder="Assign Dosen Pembimbing">
                    @foreach($dopem as $p)
                            <option value="{{$p->dosen['id']}}" @if($p->id == $pembimbing->id) selected @endif>{{$p->name}}</option>
                    @endforeach
                </select>
            </form>
        </td>
    </tr>  
</table>