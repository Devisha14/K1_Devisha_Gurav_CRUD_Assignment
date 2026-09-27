<?php
include 'db.php';
header("Content-type:text/csv");
header("Content-disposition:attachment;filename=product.csv");
$output=fopen("php://output","w");
fputcsv($output,array("Product ID","Product Name","Category","Price","Quantity","Brand","Description"));
$result=$conn->query("select *from products");
while ($row=$result->fetch_assoc()) {
   fputcsv($output,$row);
}
?>