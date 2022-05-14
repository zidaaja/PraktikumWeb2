<?php
    require 'Koneksi.php';

    //Menampilkan tabel buku, member, dan peminjaman
    function tampilkan($table){
        $connection = connect() -> prepare("SELECT * FROM $table");
        $connection -> execute();
        $result = $connection -> fetchAll();

        if (!empty($result)) {
            if ($table == "buku") {
                foreach ($result as $data) {
                    echo "<tr>";
                    echo "<td>" . $data['judul_buku'] . "</td>";
                    echo "<td>" . $data['penulis'] . "</td>";
                    echo "<td>" . $data['penerbit'] . "</td>";
                    echo "<td>" . $data["tahun_terbit"] . "</td>";
                    echo "<td>";
                        echo "<a href='FormBuku.php?id_buku=" . $data['id_buku'] . "'>Edit</a>";
                        echo " | ";
                        echo "<a href='Buku.php?id_buku=" . $data['id_buku'] . "' onclick=\"return confirm('Apakah anda yakin ingin menghapus?')\">
                                Hapus</a>";
                    echo "</td>";
                    echo "</tr>";
                }   echo "<br/>"; 
                    echo "Jumlah data: ".count($result);
            } elseif ($table == "member") {
                foreach ($result as $data) {
                    echo "<tr>";
                    echo "<td>" . $data['nama_member'] . "</td>";
                    echo "<td>" . $data['nomor_member'] . "</td>";
                    echo "<td>" . $data['alamat'] . "</td>";
                    echo "<td>" . $data["tgl_mendaftar"] . "</td>";
                    echo "<td>" . $data["tgl_terakhir_bayar"] . "</td>";
                    echo "<td>";
                        echo "<a href='FormMember.php?id_member=" . $data['id_member'] . "'>Edit</a>";
                        echo " | ";
                        echo "<a href='Member.php?id_member=" . $data['id_member'] . "' onclick=\"return confirm('Apakah anda yakin ingin menghapus?')\">
                                Hapus</a>";
                    echo "</td>";
                    echo "</tr>";
                }   echo "<br/>"; 
                    echo "Jumlah data: ".count($result);
            } elseif ($table == "peminjaman") {
                foreach ($result as $data) {
                    echo "<tr>";
                    echo "<td>" . $data["tgl_pinjam"] . "</td>";
                    echo "<td>" . $data["tgl_kembali"] . "</td>";
                    echo "<td>";
                    echo "<a href='FormPeminjaman.php?id_peminjaman=" . $data['id_peminjaman'] . "'>Edit</a>";
                    echo " | ";
                    echo "<a href='Peminjaman.php?id_peminjaman=" . $data['id_peminjaman'] . "' onclick=\"return confirm(Apakah anda yakin ingin menghapus?)\">
                            Hapus</a>";
                    echo "</td>";
                    echo "</tr>";
                }   echo "<br/>";
                    echo "Jumlah data: ".count($result);
            }
        }
    }

    // Member
    function insertMember($nama, $nomor, $alamat, $tgl_mendaftar, $tgl_terakhir_bayar){
        $sql = "INSERT INTO `member` ( `nama_member`, `nomor_member`, `alamat`, `tgl_mendaftar`, `tgl_terakhir_bayar`) VALUES (:nama,:nomor,:alamat,:tgl_mendaftar,:tgl_terakhir_bayar)";
        $connection = connect() -> prepare($sql);
        $result = $connection -> execute(array(':nama' => $nama, ':nomor' => $nomor, ':alamat' => $alamat, ':tgl_mendaftar' => $tgl_mendaftar, ':tgl_terakhir_bayar' => $tgl_terakhir_bayar));
        if (!empty($result)) {
            header('location:Member.php');
        }
    }
    function editMember(){
        $connection = connect() -> prepare("SELECT * FROM member where id_member=" . $_GET["id_member"]);
        $connection -> execute();
        $GLOBALS['result'] = $connection -> fetchAll();
    }
    function updateMember($id, $nama, $nomor, $alamat, $tgl_daftar, $tgl_terakhir_bayar){
        $pdo_statement = connect() -> prepare(
            "update member set nama_member='" . $nama . "', nomor_member='" . $nomor . "', alamat='" . $alamat . "', tgl_mendaftar='" . $tgl_daftar . "', tgl_terakhir_bayar='" . $tgl_terakhir_bayar . "' where id_member=" . $id);
        $result = $pdo_statement -> execute();
        if ($result) {
            header('location:Member.php');
        }
    }
    function deleteMember($id_member){
        $connection = connect() -> prepare("DELETE FROM member where id_member=" . $id_member);
        $result = $connection -> execute();
        if ($result) {
            header('location:Member.php');
        }
    }

    // Buku
    function insertBuku($judul,$penulis,$penerbit,$thn_terbit){
        $sql = "INSERT INTO `buku` ( `judul_buku`, `penulis`, `penerbit`, `tahun_terbit`) VALUES (:judul,:penulis,:penerbit,:thn_terbit)";
        $connection = connect() -> prepare($sql);
        $result = $connection -> execute(array(':judul' => $judul, ':penulis' => $penulis, ':penerbit' => $penerbit, ':thn_terbit' => $thn_terbit));
        if (!empty($result)) {
            header('location:Buku.php');
        }
    }
    function editBuku(){
        $connection = connect() -> prepare("SELECT * FROM buku where id_buku=" . $_GET["id_buku"]);
        $connection -> execute();
        $GLOBALS['result'] = $connection -> fetchAll();
    }
    function updateBuku($id, $judul, $penulis, $penerbit, $thn_terbit){
        $pdo_statement = connect() -> prepare(
            "update buku set judul_buku='" . $judul . "', penulis='" . $penulis . "', penerbit='" . $penerbit . "', tahun_terbit='" . $thn_terbit . "' where id_buku=" . $id
        );
        $result = $pdo_statement -> execute();
        if ($result) {
            header('location:Buku.php');
        }
    }
    function deleteBuku($id_buku){
        $connection = connect() -> prepare("DELETE FROM buku where id_buku=" . $id_buku);
        $result = $connection -> execute();
        if ($result) {
            header('location:Buku.php');
        }
    }

    // Peminjaman
    function insertPeminjaman($tgl_pinjam, $tgl_kembali){
        $sql = "INSERT INTO `peminjaman` (`tgl_pinjam`, `tgl_kembali`) VALUES (:tgl_pinjam,:tgl_kembali)";
        $connection = connect() -> prepare($sql);
        $result = $connection -> execute(array(':tgl_pinjam' => $tgl_pinjam, ':tgl_kembali'=> $tgl_kembali));

        if (!empty($result)) {
            header('location:Peminjaman.php');
        }
    }
    function editPeminjaman(){
        $connection = connect() -> prepare("SELECT * FROM peminjaman WHERE id_peminjaman =". $_GET['id_peminjaman']);
        $connection -> execute();
        $GLOBALS['result'] = $connection -> fetchAll();
    }
    function updatePeminjaman($id, $tgl_pinjam, $tgl_kembali) {
        $pdo_statement = connect() -> prepare(
            "UPDATE peminjaman SET tgl_pinjam='" . $tgl_pinjam ."', tgl_kembali='" . $tgl_kembali . "' WHERE id_peminjaman = ". $id
        );
        $res = $pdo_statement->execute();
        if (!empty($res)) {
            header('location:Peminjaman.php');
        }
    }
    function deletePeminjaman($id_peminjaman){
        $connection = connect() -> prepare("DELETE FROM peminjaman WHERE id_peminjaman=" . $id_peminjaman);
        $result = $connection -> execute();
        if ($result) {
            header('location:Peminjaman.php');
        }
    }
?>