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
         
        <?php
        
            $con=mysqli_connect("localhost","root","","project");
            if(mysqli_connect_errno($con))
            {
                echo "Failed to connect to MySQL" . mysqli_connect_error();
            }

            ?>

    

    <body>


        <div style="border-style: solid; border-width: thin; border-color: black; background-color:darkblue; height: 10px;"></div>
        <div style="border-style: solid; border-width: thin; border-color: black; background-color:royalblue; height: 80px;">
            <section>
                <div class="box" style="border-style: solid; border-width: thin; border-color:white; border-width: 3px; height: 570px; width: 900px; " >
                    <div class="navbox" style="border-style: solid; border-width: thin; border-color: black; background-color:royalblue; height: 60px; " >
                        <font color="white" size="4px"><h1 align="center" >Detection of Fraudulent Sellers in Online Marketplaces</h1></font>
                    </div>
                    <ul> 
                        <li><a href="http://localhost/projectwork/myproducts.php">Back</a></li>
                    </ul>
                    <div style=" background-color:rgb(234, 234, 161); height: 400px;border-style: solid; border-width: thin; border-color: white; " >
                        <table width="100%" height="100%" >
                            <tr>
                                <td width="65%" style="vertical-align: top; padding-top: 10px; padding-left: 10px; " >
                                    <div>
                                        <form action="complaint.php" method="POST" enctype="multipart/form-data" >
                                            <fieldset>
                                                <legend><font color="red" size="5px"><h1>Complaint</h1></font></legend>
                                                <table>
                                                    <tr>
                                                        <td width="60%" style="padding-left: 40px;">
                                                            <font color="red"><h3>Complaint about</h3></font>
                                                        </td>
                                                        <td>
                                                            <h4><input type="radio" name="a" >Not delivered</h4>
                                                            <h4><input type="radio" name="a">Product Mismatch</h4>
                                                            <h4><input type="radio" name="a">Poor Service</h4>
                                                            <h4><input type="radio" name="a">Product Damaged</h4>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="60%" style="padding-left: 40px;">
                                                            <font color="red"><h3>Enter Complaint</h3></font>
                                                        </td>
                                                        <td>
                                                            <textarea></textarea>
                                                        </td>
                                                    </tr>
                                                <tr><td align="center" ><a href="http://localhost/projectwork/myproducts.php"><input type="submit" value="Back" style="height:30px; width: 120px; background-color: rgb(53, 198, 34);"></a></td>
                                                <td width="50%" align="center" ><input type="submit" value="Submit" name="save" style="height:30px; width: 120px; background-color: rgb(53, 198, 34); " ></td></tr></tr>
                                                </table>
                                            </fieldset>
                                        </form>
                                    </div>
                                </td>
                                <td width="30%" style="background-color: rgb(234, 234, 161);; padding-top: 20px; padding-left: 25px; " >
                                    <img src="complaint_pic.jpg" width="200px">
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </section>
        </div>

    </body>

</html>