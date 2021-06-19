<?php
$album = new App\Album();
$rows = $album->tampil();
?>

<h2>Data Album</h2>

<a href="index.php?page=album_input">Tambah</a>
<table>

    <tr>
        <th>NO</th>
        <th>NAMA</th>
        <th>TEXT</th>
        <th>EDIT</th>
    </tr>

    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['album_id']; ?></td>
        <td><?php echo $row['album_nama']; ?></td>
        <td><?php echo $row['album_text']; ?></td>
        <td><a href="dashboard.php?page=edit_album&id=<?php echo $row['album_id']; ?>">Edit</a></td>
    </tr>
   <?php  } ?>
</table>