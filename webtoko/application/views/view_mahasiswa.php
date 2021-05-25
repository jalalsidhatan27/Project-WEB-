<!DOCTYPE html>
<html lang="">

<head>
    <style>
    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    }

    td {
        padding: 10px;
    }
    </style>
</head>

<body>
    Daftar Mahasiswa
    <br>
    </br>
    <table border="1 solid black collapse">
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Prodi</td>
        </tr>
        <?php
        $no = 1;
        foreach ($Mahasiswa as $row) {
            echo "
                <tr>
                    <td>" . $no++ . "</td>
                    <td>" . $row['nama'] . "</td>
                    <td>" . $row['prodi'] . "</td>
                </tr>";
        }
        ?>
    </table>
</body>

</html>