<script type="text/javascript">

  function status_peserta(id_peserta,status){
        $.ajax({
            url:'edit_status',
            method: 'post',
            data:'status='+status+'&id_peserta='+id_peserta,                   
            dataType:'html',
            success: function(data){
                $('#tabel_peserta_lomba').html(data);
                // refresh_tabel_peserta();
                toastr.optionsOverride = 'positionclass = "toast-bottom-right"';
                toastr.options.positionClass = 'toast-bottom-right';
                toastr.options.timeOut = 1500; // 1.5s
                toastr.success("Status  Telah Di Rubah!");                  
            }
        });
          //refresh_tabel_peserta();
       return false; 
    }
</script>