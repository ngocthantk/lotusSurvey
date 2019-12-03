<?php
function gen_uuid() {
    $uuid = array(
     'time_low'  => 0,
     'time_mid'  => 0,
     'time_hi'  => 0,
     'clock_seq_hi' => 0,
     'clock_seq_low' => 0,
     'node'   => array()
    );
   
    $uuid['time_low'] = mt_Rand(0, 0xffff) + (mt_Rand(0, 0xffff) << 16);
    $uuid['time_mid'] = mt_Rand(0, 0xffff);
    $uuid['time_hi'] = (4 << 12) | (mt_Rand(0, 0x1000));
    $uuid['clock_seq_hi'] = (1 << 7) | (mt_Rand(0, 128));
    $uuid['clock_seq_low'] = mt_Rand(0, 255);
   
    for ($i = 0; $i < 6; $i++) {
     $uuid['node'][$i] = mt_Rand(0, 255);
    }
   
    $uuid = sprintf('%08x-%04x-%04x-%02x%02x-%02x%02x%02x%02x%02x%02x',
     $uuid['time_low'],
     $uuid['time_mid'],
     $uuid['time_hi'],
     $uuid['clock_seq_hi'],
     $uuid['clock_seq_low'],
     $uuid['node'][0],
     $uuid['node'][1],
     $uuid['node'][2],
     $uuid['node'][3],
     $uuid['node'][4],
     $uuid['node'][5]
    );
   
    return $uuid;
   }
?>
<?php
    $connect = mysqli_connect("localhost", "root", "", "surveyphuong");
    if (!$connect){
        die("Connect failed: ".mysqli_connect_error());
    }
    if (isset($_POST['register'])){
        $id = gen_uuid();
        $username = $_POST['username'];
        $email = $_POST['email'];
        $name = $_POST['name'];
        $password = $_POST['password'];
        $repassword = $_POST['repassword'];
        if ($repassword != $password){
            ?>
                <?php
                    header("Location: register.php");
                ?>
            <?php
        }else{
            $sql = "insert into users values('".$id."', '".$name."', '".$email."','".$password."','".$username."')";
            $result = mysqli_query($connect, $sql);
            if ($result){
                header("Location: login.php");
            }
        }
    }
    mysqli_close($connect);
?>