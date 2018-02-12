<script>
$(document).ready(function(){
  $.get("<?php echo site_url('Pesanan_Pembelian/getNomor')?>", $(this).serialize())
  .done(function(data) {
    ///console.log("k"+data);
    // document.getElementById('kode').value = data;
    $('#kode').val(data);
  });
});
</script>
