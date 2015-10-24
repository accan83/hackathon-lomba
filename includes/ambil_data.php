<html>
  <body>
    <input type="text" id='nik'>
    <button jAction="ambil-data">Ambil Data</button>
    <br>
    <input type="text" id="nama">
    <select id="jk">
      <option value=""></option>
      <option value="L">Laki-Laki</option>
      <option value="P">Perempuan</option>
    </select>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>
      $('button[jAction=ambil-data]').click(
        function(){
          var nik=$('#nik').val();
          $.post("http://repo.stikom.edu/gioo/penduduk/nik/",{'nik':nik})
            .done(function( data ) {
              var jData=jQuery.parseJSON(data);
              var nama=jData[0].nama_lgkp;
              var jk=jData[0].jenis_kelamin;

              $('#nama').val(nama);

              if(jk=='LAKI LAKI'){
                $('#jk').val('L');
              }else {
                $('#jk').val('P');
              }
            });
        }
      );
    </script>
  </body>
</html>
