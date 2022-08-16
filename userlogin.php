<?php
   error_reporting(0);
?>

<?
   session_start();
?>

<html>

<head>
        <style>
            ul {
              list-style-type: none;
              margin: 0;
              padding: 0;
              overflow: hidden;
              background-color: rgb(53, 198, 34);
            }
            
            li {
              float: left;
              border-right:1px solid #bbb;
            }
            
            li:last-child {
              border-right: none;
            }
            
            li a {
              display: block;
              color: white;
              text-align: center;
              padding: 14px 16px;
              text-decoration: none;
            }
            
            li a:hover:not(.active) {
              background-color:rgb(0, 0, 0);
            }
            
            .active {
              background-color: #dfa017;
            }
            </style>
            <link rel="stylesheet" href="index.css">
            
        </head>

        <script language="javascript" type="text/javascript">
            var txtid,txtpass;
            function clear()
            {
                txtid=document.getElementById("uid");
                txtid.value="";
                txtpass=document.getElementById("pass");
                txtpass.value="";
            }
        </script>

    <?php
            
        $con=mysqli_connect("localhost","root","","project");
        if(mysqli_connect_errno($con))
        {
            echo "Failed to connect to MySQL" . mysqli_connect_error();
        }

    ?>

    <?php
    
        $uid1=$_POST['uid'];
        $pass1=$_POST['pass'];
        if(isset($_POST['log_in']))
        {

            $sql="SELECT * FROM usersignup where User_id='$uid1' and passwrd='$pass1' ";
            $qsql=mysqli_query($con,$sql);
            $rec=mysqli_fetch_array($qsql);
            $unm=$rec["Name"];
            $_SESSION['val']=$unm;
            $result=$con->query($sql);
            if($result->num_rows>0)
            {
                echo "<script>alert('Log In successfully');</script>";
                echo "<script>window.location='userloginhome.php?';</script>";
            }
            else
        {
                echo "<script>alert('Invalid ID Password');</script>";
            }

        }
    ?>

    <body>

        <div style="border-style: solid; border-width: thin; border-color: black; background-color:darkblue; height: 10px;"></div>
        <div style="border-style: solid; border-width: thin; border-color: black; background-color:royalblue; height: 80px;">
           <section>
                <div class="box" style="border-style: solid; border-width: thin; border-color:white; border-width: 3px; height: 590px; width: 900px; " >
                    <div class="navbox" style="border-style: solid; border-width: thin; border-color: black; background-color:royalblue; height: 60px; " >
                        <font color="white"><h1 align="center" style="padding: 15px;" >Detection of Fraudulent Sellers in Online Marketplaces</h1></font>
                    </div>
                    <ul> 
                        <li><a href="index.html">Home</a></li>
                    </ul>
                    <div style=" background-color:rgb(234, 234, 161); height: 420px; " >
                        <table width="100%" height="100%" >
                            <tr>
                                <td width="75%">
                                    <div style="padding: 80px;" >
                                        <table class="admin" >
                                            <tr><td><font color="green" size="5px" ><h1 align="right" >User Login</h1></font></td></tr>
                                            <form action="userlogin.php" method="POST" >
                                                
                                                <tr><td><h3> User ID</h3></td><td><input type="text" style="height:25px; width: 200px;" name="uid" id="uid" ></td></tr>
                                                <tr><td width="200px" ><h3>Password</h3></td><td><input type="password" style="height:25px; width: 200px;" name="pass" id="pass"></td></tr>
                                                <tr><td><input type="submit" value="Clear" style="height:30px; width: 120px; background-color: rgb(53, 198, 34); " onclick="clear();" ></td>
                                                <td align="center"><input type="submit" value="Log In" name="log_in" style="height:30px; width: 120px; background-color: rgb(53, 198, 34); " ></td></tr>

                                            </form>
                                        </table>
                                    </div>
                                </td>
                                <td width="20%" style="background-color: rgb(244, 235, 159); "  >
                                    <font color="red"><h2 align="center" >Registration</h2></font>
                                    <font color="blue"><h3 align="center"><a href="http://localhost/projectwork/sellersignup.php">Seller</a></h3>
                                    <h3 align="center" ><a href="http://localhost/projectwork/usersignup.php">User</a></h3></font>
                                    <font color="red"><h2 align="center" >Login</h2></font>
                                    <font color="blue"><h3 align="center" ><a href="http://localhost/projectwork/sellerlogin.php">Seller</a></h3>
                                    <h3 align="center" ><a href="http://localhost/projectwork/userlogin.php">User</a></h3>
                                    <h3 align="center" ><a href="http://localhost/projectwork/adminlogin.php">Admin</a></h3></font>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
           </section>
        </div>

    </body>

</html>