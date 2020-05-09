<div class="table-responsive">  
     <table class="table table-bordered">
     <tr>  
               <td width="30%"><label>Nama</label></td>  
               <td width="70%">: {{$model['name']}}</td>  
          </tr>  
          <tr>  
               <td width="30%"><label>NRK/NIP</label></td>  
               <td width="70%">: {{$model->dosen['NIP_NRK']}}</td>  
          </tr>  
          <tr>  
               <td width="30%"><label>Kontak Person</label></td>  
               <td width="70%">: {{$model->dosen['Kontak_Person']}}</td>  
          </tr>  
          <tr>  
               <td width="30%"><label>Email</label></td>  
               <td width="70%">: {{$model['email']}}</td>  
          </tr> 
     </table>
</div>