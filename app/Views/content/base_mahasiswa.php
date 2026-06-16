<section>
    <h1>List Nama Mahasiswa</h1>
    <table>
   <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Alamat</th>
    </tr>
    <?php foreach ($data as $d) : ?>
        <tr>
            <td><?= $d['nim']; ?></td>
            <td><?= $d['nama']; ?></td>
            <td><?= $d['alamat']; ?></td>
        </tr>
    <?php endforeach; ?>
    </table>
</section>