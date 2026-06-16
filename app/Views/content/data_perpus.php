<section>
    <h1>List Buku</h1>
    <table>
        <tr>
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Total Halaman</th>
            <th>Tahun Terbit</th>
    </tr>
    <?php foreach ($data as $d) : ?>
        <tr>
            <td><?= $d['judul']; ?></td>
            <td><?= $d['pengarang']; ?></td>
            <td><?= $d['total_halaman']; ?></td>
            <td><?= $d['tahun_terbit']; ?></td>
            <td style="display:flex;">
                <form action="<?= base_url('proses_delete_data') . '/' . $d['id'] ?>" method="post">
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit">
                        <a>Delete</a>
                     </button>  
                </form>
                <button>
                    <a href="/Edit_data/<?= $d['id']; ?>">Edit</a>
                </button>
            </td>   
        </tr>
    <?php endforeach; ?>
    </table>

    <button style="margin-top: 8px;">
        <a href="/Tambah_data">Tambah data</a>
    </button>
</section>

