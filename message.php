<?php
    include_once 'conn.php';
    session_start();
?>
<?php
        if(isset($_POST['submit']))
        {
            $user= $_POST['mail'];
            $pass= $_POST['pass'];
            $query = "select * from users where Email = '$user'";
            $result = mysqli_query($conn, $query);
            if($result)
            {
                while ($row = mysqli_fetch_assoc($result)) {
                    # code...
                    if($row['Password']==$pass)
                    {
                        // echo "
                        //     <script>
                        //         alert('login success');
                        //     </script>
                        // ";
                        $_SESSION['user'] = $row['Name'];
                        header("Location:home.php?Login_success");
                    }
                    else {
                        echo "
                            <script>
                                alert('You have entered wrong password');
                            </script>
                        ";
                    }
                }
            } else {
                echo "
                            <script>
                                alert('No Username found.');
                            </script>
                        ";
            }
        }
    ?>
        <?php
    if(isset($_POST['message'])&&$_POST['message']!="")
    {
        $name = $_POST['name'];
        $mail = $_POST['email'];
        $sub = $_POST['subject'];
        $msg = $_POST['message'];
        $query = "insert into `messages` (Name,Email,Subject,Message)values('$name','$mail','$sub','$msg')";
        $result = mysqli_query($conn,$query);
        if($result)
        {
        echo true;
        }
        else {
            echo "query excecustion problem";
        }
    }
    else
    {
        echo "<script>alert('OOPS.... Incorrect.');
            window.location.href = 'index.php';
        </script>";
    }
?>  