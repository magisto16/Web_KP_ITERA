<table class="table table-bordered">
     <tr>  
          <td width="30%"><label>Nama</label></td>  
          <td width="70%">{{$user->name}}</td>  
     </tr>  
     <tr>  
          <td width="30%"><label>NIM</label></td>  
          <td width="70%">{{$user->mahasiswa['nim']}}</td>  
     </tr>
     <tr>  
          <td width="30%"><label>Alamat</label></td>  
          <td width="70%">{{$user->mahasiswa['alamat']}}</td>  
     </tr>    
     <tr>  
          <td width="30%"><label>Kontak Person</label></td>  
          <td width="70%">{{$user->mahasiswa['Kontak_Person']}}</td>  
     </tr>  
     <tr>  
          <td width="30%"><label>Email</label></td>  
          <td width="70%">{{$user->email}}</td>  
     </tr> 
</table>