<h2>USER</h2>

<a href="<?php echo URL; ?>/user/input" class="btn">Tambah User</a>

<table>
      <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>EMAIL</th>
            <th>PASSWORD</th>
            <th>ALAMAT</th>
            <th>NO HP</th>
            <th>POS</th>
            <th>KETERANGAN</th>
      </tr>

      <?php $no=1;
      foreach ($data['rows'] as $row) 
      { ?>
            <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $row['user_nama']; ?></td>
                  <td><?php echo $row['user_email']; ?></td>
                  <td><?php echo $row['user_password']; ?></td>
                  <td><?php echo $row['user_alamat']; ?></td>
                  <td><?php echo $row['user_hp']; ?></td>
                  <td><?php echo $row['user_pos']; ?></td>
                  <td>
                        <a href="<?php echo URL; ?>/user/edit/<?php echo $row['user_id']; ?>" class="btn">Edit</a>
                        <a href="<?php echo URL; ?>/user/delete/<?php echo $row['user_id']; ?>" class="btn">Delete</a>
                  </td>
            </tr>
      <?php } ?>

</table>