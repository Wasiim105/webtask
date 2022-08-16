<?
  error_reporting(0);
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
        $prd_id= $_GET['val'];
        ?>


    <?
        $pnm;$compnm;$war;$prate;$offer;$s='Registered';$im;$fim;
        $sql="SELECT * FROM products where product_id='$prd_id' ";
        $qsql=mysqli_query($con,$sql);
        $rec=mysqli_fetch_array($qsql);
        $pnm=$rec["product_name"];
        $compnm=$rec["company_name"];
        $war=$rec["warranty"];
        $prate=$rec["product_rate"];
        $offer=$rec["offer_rate"];
        $im=$rec["product_image"];
        $fim="./image/".$im;

    ?>

        <?php       
            $pid=$id1+25;$i=1;
            if(isset($_POST['save']))
            { 
                $sql="insert into  purchase(purchase_id,num_of_sold') values($_POST[$pid],$_POST[$i])";
                $qsql=mysqli_query($con,$sql);
                if($qsql==1)
                {
                    echo "<script>alert('Puchase Successful');</script>";
                    echo "<script>window.location='myproducts.php';</script>";
                }
            }
        ?>


    <body>


        <div style="border-style: solid; border-width: thin; border-color: black; background-color:darkblue; height: 10px;"></div>
        <div style="border-style: solid; border-width: thin; border-color: black; background-color:royalblue; height: 80px;">
            <section>
                <div class="box" style="border-style: solid; border-width: thin; border-color:white; border-width: 3px; height: 700px; width: 900px; " >
                    <div class="navbox" style="border-style: solid; border-width: thin; border-color: black; background-color:royalblue; height: 60px; " >
                        <font color="white" size="4px"><h1 align="center" >Detection of Fraudulent Sellers in Online Marketplaces</h1></font>
                    </div>
                    <ul> 
                        <li><a href="http://localhost/projectwork/offers.php">Back</a></li>
                    </ul>
                    <div style=" background-color:rgb(234, 234, 161); height: 530px;border-style: solid; border-width: thin; border-color: white; " >
                    <table width="100%" height="100%" >
                        <tr>
                            <td width="65%" style="vertical-align: top; padding-top: 40px; padding-left: 80px; " >
                                <div >
                                        
                                    <form action="offers.php" method="POST" enctype="multipart/form-data" >
                                        <fieldset>
                                            <legend><font color="red" size="5px"><h1>Offers</h1></font></legend>
                                            <table>
                                            <tr><td width="65%"><h3>Product ID</h3></td><td><h3><?echo $prd_id?></h3></td></tr>
                                            <tr><td><h3>Product Name</h3></td><td><h3><?echo $pnm?></h3></td></tr>
                                            <tr><td><h3>Company Name</h3></td><td><h3><?echo $compnm?></h3></td></tr>
                                            <tr><td><h3>Warranty Days</h3></td><td><h3><?echo $war?></h3></td></tr>
                                            <tr><td><h3>Product Rate</h3></td><td><h3><?echo $prate?></h3></td></tr>
                                            <tr><td><h3>Offer Rate</h3></td><td><h3><?echo $offer?></h3></td></tr>
                                            <tr><td><h3>Status</h3></td><td><h3><?echo $s;?></h3></td></tr>
                                            <tr><td><input type="submit" value="Back" style="height:30px; width: 120px; background-color: rgb(53, 198, 34); " onclick="clear();" ></td>
                                            <td width="50%" align="center" ><input type="submit" value="purchase" name="save" style="height:30px; width: 120px; background-color: rgb(53, 198, 34); " ></td></tr></tr>
                                            </table>
                                        </fieldset>
                                     </form>
                                </div>
                            </td>
                            <td style="padding-left: 30px;" >
                                <img src="<?echo $fim;?>" height="200px" width="200px">
                                <h2 style="padding-left: 30px; padding-top: 30px;">Trustability</h2>
                                <font color="green"><h1 style="padding-left: 40px;" >100%</h1></font>
                            </td>
                        </tr>
                    </table>
                    </div>
                </div>
            </section>
        </div>

    </body>

</html>