<?php
header("Content-type:text/xml");
header("Access-Control-Allow-Origin: *");

$dbconn = mysqli_connect("localhost", "root", "");
mysqli_select_db($dbconn, "beautycup");
$query = mysqli_query($dbconn, "select * from product_details");

// Create SimpleXMLElement instance.
$xml = new SimpleXMLElement('<list/>');
while ($row = mysqli_fetch_assoc($query)) {
     $product = $xml->addChild("product");
     $product->addChild("ID", $row["id"]);
     $product->addChild("pImgPath", htmlspecialchars($row["path"]));
     $product->addChild("name", htmlspecialchars($row["name"]));
     $product->addChild("desc", htmlspecialchars($row["description"]));
     $product->addChild("discaunt", $row["discaunt"]);
     $product->addChild("price", $row["price"]);
}

mysqli_close($dbconn);
echo $xml->asXML();
?>