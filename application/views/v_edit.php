<html>
<head>
  <title>Edit User Data</title>
</head>

<body>
  <a href="admin.php">Home</a>
  <br/><br/>

  <?php foreach($users as $c){ ?>
    <form action="<?php echo base_url(). 'admin/update'; ?>" method="post">
      <table border="0">
        <tr>
        <input type="hidden" name="id" value="<?php echo $c->id ?>">  
        </tr>
        <tr>
          <td>Name</td>
          <td><input type="text" name="firstname" value=<?php echo $c->firstname;?>></td>
        </tr>
        <tr>
          <td>Email</td>
          <td><input type="text" name="lastname" value=<?php echo $c->lastname;?>></td>
        </tr>
          <tr>
          <td>Telepon</td>
          <td><input type="text" name="email" value=<?php echo $c->email;?>></td>
        </tr>
        <tr>
          <td>Message</td>
          <td><input type="text" name="message" value=<?php echo $c->message;?>></td>
        </tr>
        <tr>
          <td><input type="submit" name="update" value="Update"></td>
        </tr>
      </table>
    <?php } ?>
    </form>
  </body>
  </html>
