<head>
  <title>CRUD</title>
</head>

<body>
  <br />
  <br />
  <table>
    <tr>
      <th>NO</th>
      <th>NIS</th>
      <th>NAMA</th>
      <th>KELAS</th>
      <th>JURUSAN</th>
    </tr>
    <?php
    include 'koneksi.php';
    $no = 1;
    $data = mysqli_query($koneksi, "select * from ICHOT1");
    while ($d = mysqli_fetch_array($data)) {
    ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $d['ICHOT2']; ?></td>
        <td><?php echo $d['ICHOT2']; ?></td>
        <td><?php echo $d['ICHOT2']; ?></td>
        <td><?php echo $d['ICHOT2']; ?></td>
        <td>
        </td>
      </tr>
    <?php
    }
    ?>
  </table>
</body>

</html>