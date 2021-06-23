
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
    hello my name is doan


    making table 



    <table>
        <tr>
            <th> Danh Doan</th>
            <th>
                <form action="" method="$_POST">
                    <input type="text" name="subject" id="subject">
                    <input type="submit">
                    <?php
                    $number= $_POST['subject'];
                    echo dechex($_POST['subject']);
                    ?>
                </form>
            </th>
            <th> convert to</th>
            
        </tr>
        <tr>
            <td><?php
                echo $_POST['subject'];
            ?></td>
            <td>
                <?php
                echo dechex($number);
                ?>    
            </td>
            <td>dec</td>
            <td>oct</td>
            <td>BIN</td>



            <br>
            <form action="" method="post">
                Name:  <input type="text" name="username" /><br />
                Email: <input type="text" name="email" /><br />
                <input type="submit" name="submit" value="Submit me!" />
            </form>
            <?php
                echo $_POST['username'];
                echo $_REQUEST['username'];
                ?>
        </tr>
    </table>
</body>
</html>