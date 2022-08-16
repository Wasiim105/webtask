<?
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
            
    </head>
        
        <link rel="stylesheet" href="index.css">
         
        <?php
        
            $con=mysqli_connect("localhost","root","","project");
            if(mysqli_connect_errno($con))
            {
                echo "Failed to connect to MySQL" . mysqli_connect_error();
            }

        ?>

        <?
        $nm=$_SESSION['val'];
        ?>


    <body>


        <div style="border-style: solid; border-width: thin; border-color: black; background-color:darkblue; height: 10px;"></div>
        <div style="border-style: solid; border-width: thin; border-color: black; background-color:royalblue; height: 80px;">
            <section>
                <div class="box" style="border-style: solid; border-width: thin; border-color:white; border-width: 3px; height: 600px; width: 900px; " >
                    <div class="navbox" style="border-style: solid; border-width: thin; border-color: black; background-color:royalblue; height: 60px; " >
                        <font color="white" size="4px"><h1 align="center" >Detection of Fraudulent Sellers in Online Marketplaces</h1></font>
                    </div>
                    <ul> 
                        <li><a href="#" class="active" >Home</a></li>
                        <li><a href="http://localhost/projectwork/adminlogin.php">Logout</a></li>
                        <li style="float:right"><a href="#about">Welcome:<?echo $nm;?></a></li>
                    </ul>
                    <div style=" background-color:khaki; height: 410px; padding-left: 30px; padding-top: 20px; " >
                        <div style="background-color: rgb(234, 234, 161); width: 850px; height: 350px; ">
                            <font color="red"><h1 align="center" style="padding-top: 30px;">All Products</h1></font>
                        <?
                            $pro_id;
                            $status="Registered";
                            $sql="SELECT * FROM products";
                            $result=$con->query($sql);
                            if($result->num_rows>0)
                            {
                                echo "<table width='100%' height='80%' >";
                                echo "<tr style='background: lightyellow; height:70px'><th>Product ID</th>";
                                echo "<th>Product Name</th>";
                                echo "<th>Company Name</th>";
                                echo "<th>Status</th>";
                                echo "<th>Product Image</th>";
                                echo "<th>Product details</th></tr>";

                                    while($row=$result->fetch_array())
                                    {
                                        echo "<tr style='background: lightgoldenrodyellow;'>";
                                            $pro_id=$row['product_id'];
                                            echo "<td align='center' >".$pro_id."</td>";
                                            echo "<td align='center' >". $row['product_name']."</td>";
                                            echo "<td align='center' >". $row['company_name']."</td>";
                                            echo "<td align='center' >". $status."</td>";
                                            $im=$row['product_image'];
                                            $fim="./image/".$im;
                                            echo "<td align='center' >"?>.<img src="<?echo $fim;?>" height="30px" width="30px">.<?"</td>";
                                            echo "<td align='center' ><a href='http://localhost/projectwork/product_details.php?id=$pro_id'>View Details</a>.</td>";
                                        echo "</tr>";
                                    }
                                echo "</table>";
                            }
                    
                        ?>


                        </div>
                    </div>
                </div>
            </section>
        </div>

    </body>

</html>