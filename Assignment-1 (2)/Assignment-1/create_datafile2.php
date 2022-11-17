<?PHP
include_once "file_storage.php";
$filename = 'myfilename2.json';
$data = array("PRODUCT_ID1"=>array("product_id"=>"kids_wear1","product_name"=>"Frock","product_category"=>"Kid's Wear",
                                   "product_description"=>"PRODUCT_DESCRIPTION1","product_price"=>20.99,"product_quantity"=>2),
              "PRODUCT_ID2"=>array("product_id"=>"kids_wear2","product_name"=>"Girls T-shirt","product_category"=>"Kid's Wear",
                                   "product_description"=>"PRODUCT_DESCRIPTION2","product_price"=>21.99,"product_quantity"=>3),
              "PRODUCT_ID3"=>array("product_id"=>"kids_wear3","product_name"=>"Girls Jumpsuit","product_category"=>"Kid's Wear",
                                   "product_description"=>"PRODUCT_DESCRIPTION3","product_price"=>29.99,"product_quantity"=>4),
                "PRODUCT_ID4"=>array("product_id"=>"kids_wear4","product_name"=>"Girls Long Frock","product_category"=>"Kid's Wear",
                                   "product_description"=>"PRODUCT_DESCRIPTION4","product_price"=>31.99,"product_quantity"=>0),
                "PRODUCT_ID5"=>array("product_id"=>"kids_wear5","product_name"=>"Boys ShirtPant","product_category"=>"Kid's Wear",
                                   "product_description"=>"PRODUCT_DESCRIPTION5","product_price"=>17.99,"product_quantity"=>6),
                            
                                );       
writeDataFile($filename,$data);
if ( file_exists($filename) ){ print "Data File Created!";}
else { print "Data file not created!";}
?>

<!-- THE PICTURES ARE TAKEN FROM ONLINE SITE NAMED AS SHEIN.CA
HERE ARE THE LINKS
https://ca.shein.com/men?lang=ca
https://ca.shein.com/kids?lang=ca
https://ca.shein.com/?url_from=cagooglebrandshein_sheinShein02_srsa_20210124&cid=1453018513&setid=58136791378&adid=494361827201&pf=GOOGLE&gclid=Cj0KCQjwkt6aBhDKARIsAAyeLJ2X_JKmB4eY0Pmk7qrF9-4DZl8Qm1RUDAxBETyN-Yb3v0wjwVzcVTgaAjhmEALw_wcB

 -->