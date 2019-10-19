<html>
    <head>
        <title>Blood Group</title>
    </head>
    <body>
        <form method="POST">
            <fieldset >
                <legend>
                <b>BLOOD GROUP</b>
                </legend>
                <table border="0">
                    <tr>
                        <td>
                            <select  name="bloodgroup">
                                
                                <option></option>
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                            <?php
                            if(isset($_REQUEST['submit']))
                            {
                            ?>
                                <?php if($_REQUEST['bloodgroup']=="A+") {?>
                                <option>A+</option><?php } ?>

                            <?php
                            }
                            ?>
                            </select>

                            
                            
                        </td>
                        
                        
                    </tr>
                   

                </table> 
                <hr>
                <table border="0">
                    <tr>
                        <td><input type="submit" name="submit" ></td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </body>
</html>