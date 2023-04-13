<html>

<head>
    <title></title>
</head>

<body>
    <h1>FORM INPUT DATA</h1>

    <table>
        <form action="<?php echo base_url('Welcome/AksiInsert') ?>" method="post">
            <tr>
                <td>nama</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>email</td>
                <td>:</td>
                <td><input type="text" name="email"></td>
            </tr>

            <tr>
                <td colspan="2"><input type="submit" value="save"></td>
            </tr>
        </form>
    </table>
</body>

</html>