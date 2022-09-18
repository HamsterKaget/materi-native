<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Native</title>
</head>
<body align="center">
    <table width="40%" height="600px" align="center" border="1px">
        <tr height="15%">
            <td>
                <a href="index.php?id=1">Profile</a>
                <a href="index.php?id=2">Absensi</a>
                <a href="index.php?id=3">Nilai</a>
            </td>
        </tr>
        <tr height="85%" align="center">
            <td >
                <?php 
                    if(isset($_GET['id'])) {
                        
                        switch ($_GET['id']) {
                            case 1:
                                include('./profile.php');
                                break;
                            case 2:
                                include('./absensi.php');
                                break;
                            case 3:
                                include('./nilai.php');
                                break;
                            default:
                                # code...
                                break;
                        }
                    } else {
                        echo '';
                    }
                
                
                ?>
            </td>
        </tr>
    </table>
    
</body>
</html>