<html>
<body>
    <center><br><br>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Password</th>
            </tr>
            <?php
            $id = 1;
            foreach ($data as $row) {
            ?>
                <tr>
                    <td><?php echo $id ?></td>
                    <td><?php echo $row->email ?></td>
                    <td><?php echo $row->password ?></td>
                </tr>
            <?php
                $id++;
            }
            ?>
        </table>
    </center>
</body>
</table>
</body>

</html>