<html>

<head>
    <title></title>
</head>

<body>
    <h1>CRUD SEDERHANA</h1>

    <button onclick="document.location.href='<?php echo base_url('Welcome/formInput') ?>'">Tambah</button>
    <table>
        <tr>
            <td><b>No</b></td>
            <td>nama</td>
            <td>email</td>
            <td>Action</td>
        </tr>
        <?php
        $count = 0;
        foreach ($user as $row) {
            $count = $count + 1;
            ?>

            <tr>
                <td><b>
                        <?php echo $row->id ?>
                    </b></td>
                <td>
                    <?php echo $row->nama ?>
                </td>
                <td>
                    <?php echo $row->email ?>
                </td>
                <td>
                    <a href="<?php echo base_url('Welcome/AksiDelete/') . $row->id ?>">delete</a>
                    <a href="<?php echo base_url('Welcome/formEdit/') . $row->id ?>">update</a>
                </td>
            </tr>

        <?php } ?>
    </table>
</body>

</html>