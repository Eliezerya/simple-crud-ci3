<html>

<head>
    <title></title>
</head>

<body>
    <h1>FORM EDIT DATA</h1>

    <table>
        <form action="<?php echo base_url('Welcome/AksiEdit') ?>" method="post">
            <tr>
                <input type="hidden" name="id" value="<?php echo $data_user->id ?>" name="id">

                <td>nama</td>
                <td>:</td>
                <td>
                    <input type="text" value="<?php echo $data_user->nama ?>" name="nama">
                </td>

            </tr>
            <tr>
                <td>email</td>
                <td>:</td>
                <td><input type="text" name="email" value="<?php echo $data_user->email ?>"></td>
            </tr>

            <tr>
                <td colspan="2"><input type="submit" value="save"></td>
            </tr>
        </form>
    </table>
</body>

</html>