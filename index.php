
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
                <form action="" method="get">
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
        </tr>
    </table>
</body>
</html>