<section>
    <h1>List Mahasiswa</h1>
    <table>
        <tr>
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Total Halaman</th>
            <th>Tahun terbit</th>
        </tr>
        
        <?php foreach($all_data1 as $item) : ?>
            <tr>
                <td><?= $item['judul']; ?></td>
                <td><?= $item['pengarang']; ?> </td>
                <td><?= $item['total_halaman']; ?></td>
                <td><?= $item['tahun_terbit']; ?></td>
            </tr>
        <?php endforeach; ?>
   </table>
</section>