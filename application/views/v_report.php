<html>
<head>
    <title>Laporan</title>
</head>
    <a href="<?php echo site_url('welcome'); ?>">Kembali ke Halaman Utama</a>
    <br>
    <br>
    <a href="<?php echo site_url('report/download'); ?>">
      <input class="more_btn" type="submit" name="tombol" value="Unduh Laporan"></a>
<body>
    <h1 align="center">Laporan</h1>
    
    <div align="center">
    <table width='80%' border=1>

    <tr>
        <th>Firstname</th> <th>Lastname</th> <th>Email</th>  <th>Message</th>
    </tr>
    <?php
        foreach($users as $c){
        ?>
        <tr>
          <td><?php echo $c->firstname ?></td>
          <td><?php echo $c->lastname ?></td>
          <td><?php echo $c->email ?></td>
          <td><?php echo $c->message ?></td>
        </tr>
        <?php } ?>
    </table>
        </div>
    
</body>
</html>