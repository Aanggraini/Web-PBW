<html>
<head>
    <title>Admin Page</title>
</head>

<body>
    <p align="left"><a href="<?php echo base_url('login/logout'); ?>">Logout</a></p>
    <h1 align="center">Data Website</h1>
    
    <div align="center">
    <table width='80%' border=1>

    <tr>
        <th>Firstname</th> <th>Lastname</th> <th>Email</th><th>Message</th> <th>Update</th>
    </tr>
    <?php
        foreach($users as $c){
        ?>
        <tr>
          <td><?php echo $c->firstname ?></td>
          <td><?php echo $c->lastname ?></td>
          <td><?php echo $c->email ?></td>
          <td><?php echo $c->message ?></td>
          <td>
                <?php echo anchor('admin/edit/'.$c->id,'Edit'); ?>
                                  <?php echo anchor('admin/hapus/'.$c->id,'Hapus'); ?>
          </td>
        </tr>
        <?php } ?>
    </table>
        </div>
</body>
</html>
