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
            
        </head>
        
        <link rel="stylesheet" href="index.css">
        <script language="javascript" type="text/javascript">
            var txtnm,txtcompnm,txtuid,txtpass,txtmob,txtemail,txtweb,txtsigndate;
            function clear()
            {
                txtnm=document.getElementById("nm");
                txtnm.value="";
                txtcompnm=document.getElementById("compnm");
                txtcompnm.value="";
                txtuid=document.getElementById("uid");
                txtuid.value="";
                txtpass=document.getElementById("pass");
                txtpass.value="";
                txtmob=document.getElementById("mob");
                txtmob.value="";
                txtemail=document.getElementById("email");
                txtemail.value="";
                txtweb=document.getElementById("web");
                txtweb.value="";
                txtsigndate=document.getElementById("signdate");
                txtsigndate.value="";
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
            $i=1003;
            if(isset($_POST['save']))
            {
                $sql="insert into  sellersignup(ID,Name,Company_name,User_id,passwrd,Mobile,Email,Website,Date) values($i,'$_POST[nm]','$_POST[compnm]','$_POST[uid]','$_POST[pass]',$_POST[mob],'$_POST[email]','$_POST[web]','$_POST[signdate]')";
                $qsql=mysqli_query($con,$sql);
                if($qsql==1)
                {
                    echo "<script>alert('Seller Registration Successful');</script>";
                    echo "<script>window.location='sellerlogin.php';</script>";
                }
            }
        ?>

    

    <body>


        <div style="border-style: solid; border-width: thin; border-color: black; background-color:darkblue; height: 10px;"></div>
        <div style="border-style: solid; border-width: thin; border-color: black; background-color:royalblue; height: 80px;">
        <section>
           <div class="box" style="border-style: solid; border-width: thin; border-color:white; border-width: 3px; height: 850px; width: 900px; " >
                <div class="navbox" style="border-style: solid; border-width: thin; border-color: black; background-color:royalblue; height: 60px; " >
                    <font color="white" size="4px"><h1 align="center" >Detection of Fraudulent Sellers in Online Marketplaces</h1></font>
                </div>
                <ul> 
                    <li><a href="index.html">Home</a></li>
                </ul>
                <div style=" background-color:rgb(234, 234, 161); height: 683px; " >
                    <table width="100%" height="100%" >
                        <tr>
                            <td width="75%">
                                <div style="padding: 80px;" >
                                 
                                    <table>
                                        <tr><td><font color="green" size="5px"><h1>Sellers Signup</h1></font></td></tr>
                                        <form action="sellersignup.php" method="POST" >

                                            <tr><td width="50%" ><h3> Name</h3> </td><td><input type="text" style="height:30px; width: 200px;" name="nm" id="nm" ></td></tr>
                                            <tr><td><h3>Company Name</h3> </td><td><input type="text" style="height:30px; width: 200px;" name="compnm" id="compnm" ></td></tr>
                                            <tr><td><h3>User ID</h3> </td><td><input type="text" style="height:30px; width: 200px;" name="uid" id="uid" ></td></tr>
                                            <tr><td><h3>Password</h3> </td><td><input type="password" style="height:30px; width: 200px;" name="pass" id="pass" ></td></tr>
                                            <tr><td><h3>Mobile</h3> </td><td><input type="text" style="height:30px; width: 200px;" name="mob" id="mob" ></td></tr>
                                            <tr><td><h3>E-mail</h3> </td><td><input type="text" style="height:30px; width: 200px;" name="email" id="email" ></td></tr>
                                            <tr><td><h3>Website</h3> </td><td><input type="text" style="height:30px; width: 200px;" name="web" id="web" ></td></tr>
                                            <tr><td><h3>Date</h3> </td><td><input type="date" style="height:30px; width: 200px; " name="signdate" id="signdate" ></td></tr>
                                            <tr><td align="center" ><input type="submit" value="Clear" style="height:30px; width: 120px; background-color: rgb(53, 198, 34); " onclick="clear();" ></td>
                                            <td width="50%" align="center" ><input type="submit" value="Sign Up" name="save" style="height:30px; width: 120px; background-color: rgb(53, 198, 34); " ></td></tr></tr>
                                        </form>
                                    </table>
                                </div>
                            </td>
                            <td class="seller" width="20%" style="background-color: rgb(244, 235, 159);" >
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
    </body>

</html>