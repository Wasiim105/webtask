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
            var txtpid,txtpnm,txtcompnm,txtwarranty,txtprate,txtoffrate;
            function clear()
            {
                txtpid=document.getElementById("pid");
                txtpid.value="";
                txtpnm=document.getElementById("pnm");
                txtpnm.value="";
                txtcompnm=document.getElementById("compnm");
                txtpnm.value="";
                txtwarranty=document.getElementById("warranty");
                txtwarranty.value="";
                txtprate=document.getElementById("prate");
                txtprate.value="";
                txtoffrate=document.getElementById("off_rate");
                txtoffrate.value="";
            }
        </script>
         
        <?php
        
            $con=mysqli_connect("localhost","root","","project");
            if(mysqli_connect_errno($con))
            {
                echo "Failed to connect to MySQL" . mysqli_connect_error();
            }

        ?>

        <?
            $sqlmax="SELECT MAX( product_id ) AS max FROM products";
            $rowSQL = mysqli_query($con,$sqlmax);
            $row = mysqli_fetch_array( $rowSQL );
            $pro_id = $row['max'];
            if($pro_id==null)
            {
                $pro_id=0001;
            }
            else
            {
                $pro_id=$pro_id+1;
            }
        ?>

        <?php
            
            if(isset($_POST['save']))
            {
                $filename = $_FILES["choosefile"]["name"];

                $tempname = $_FILES["choosefile"]["tmp_name"];  
    
                $folder = "image/".$filename;  
                $sql="insert into  products(product_id,product_name,company_name,warranty,product_rate,product_image,offer_rate) values($pro_id,'$_POST[pnm]','$_POST[compnm]','$_POST[warranty]',$_POST[prate],'$filename','$_POST[off_rate]')";
                $qsql=mysqli_query($con,$sql);
                if (move_uploaded_file($tempname, $folder))
                {
                    echo "<script>alert('Products uploaded successfully');</script>";
                }
            }
        ?>

    <body>


        <div style="border-style: solid; border-width: thin; border-color: black; background-color:darkblue; height: 10px;"></div>
        <div style="border-style: solid; border-width: thin; border-color: black; background-color:royalblue; height: 80px;">
            <section>
                <div class="box" style="border-style: solid; border-width: thin; border-color:white; border-width: 3px; height: 650px; width: 900px; " >
                    <div class="navbox" style="border-style: solid; border-width: thin; border-color: black; background-color:royalblue; height: 60px; " >
                        <font color="white" size="4px"><h1 align="center" >Detection of Fraudulent Sellers in Online Marketplaces</h1></font>
                    </div>
                    <ul> 
                        <li><a href="http://localhost/projectwork/sellerloginhome.php">Back</a></li>
                    </ul>
                    <div style=" background-color:rgb(234, 234, 161); height: 480px;border-style: solid; border-width: thin; border-color: white; " >
                        <table width="100%" height="100%" >
                            <tr>
                                <td width="75%" style="vertical-align: top; padding-left: 80px; " >
                                    <div >
                                        
                                            <form action="newproducts.php" method="POST" enctype="multipart/form-data" >
                                                <fieldset>
                                                    <legend><font color="red" size="5px"><h1>New Products</h1></font></legend>
                                                    <table>
                                                    
                                                    <tr><td><h3>Product Name</h3> </td><td><input type="text" style="height:30px; width: 200px;" name="pnm" id="pnm" ></td></tr>
                                                    <tr><td><h3>Company Name</h3> </td><td><input type="text" style="height:30px; width: 200px;" name="compnm" id="compnm" ></td></tr>
                                                    <tr><td><h3>Warranty Days</h3> </td><td><input type="text" style="height:30px; width: 200px; " name="warranty" id="warranty" ></td></tr>
                                                    <tr><td><h3>Product Rate</h3> </td><td><input type="text" style="height:30px; width: 200px;" name="prate" id="prate" ></td></tr>
                                                    <tr><td><h3>Offer Rate</h3> </td><td><input type="text" style="height:30px; width: 200px;" name="off_rate" id="off_rate" ></td></tr>
                                                    <tr><td><h3>Product Image</h3> </td><td><input type="file" style="height:30px; width: 200px;" name="choosefile" id="choosefile" ></td></tr>
                                                    <tr><td align="center" ><input type="submit" value="Clear" style="height:30px; width: 120px; background-color: rgb(53, 198, 34); " onclick="clear();" ></td>
                                                    <td width="50%" align="center" ><input type="submit" value="Submit" name="save" style="height:30px; width: 120px; background-color: rgb(53, 198, 34); " ></td></tr></tr>
                                                    </table>
                                                </fieldset>
                                            </form>
                                    </div>
                                </td>
                                <td width="20%" style="background-color: rgb(244, 235, 159); " >
                                    <font color="red"><h2 align="center" >Registration</h2></font>
                                    <font color="blue"><h3 align="center"><a href="http://localhost/projectwork/sellersignup.php">Seller</a></h3>
                                    <h3 align="center" ><a href="http://localhost/projectwork/usersignup.php">User</a></h3></font>
                                    <font color="red"><h2 align="center" >Login</h2></font>
                                    <font color="blue"><h3 align="center" ><a href="http://localhost/projectwork/sellerlogin.php">Seller</a></h3>
                                    <h3 align="center" ><a href="http://localhost/projectwork/sellerlogin.php">User</a></h3>
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