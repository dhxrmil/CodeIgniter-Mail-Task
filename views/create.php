<html>
<body>
    <center><br>
        <h1> Please Fill Out The Form: </h1> 
        <form method="POST" action="<?php echo base_url('/Welcome/send_mail'); ?>">
                    <b> Enter Email: </b><input type="email" name="email" id="email" required><br>
                    <br><b> Enter Password: </b><input type="password" name="password" id="password" required><br>
                        <br><center><input type="submit" value="SEND EMAIL"></center>
                    
    </center>
    </table>
    </form>
</body>
</html>