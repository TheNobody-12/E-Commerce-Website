<?PHP
include_once "file_storage.php";
$filename = 'myfilename.json';
$data = array("PRODUCT_ID1"=>array("product_id"=>"kids_wear1","product_name"=>"Frock","product_category"=>"Kid's Wear",
                                   "product_description"=>"Yellow Frock","product_price"=>20.99,"product_quantity"=>2),
              "PRODUCT_ID2"=>array("product_id"=>"kids_wear2","product_name"=>"Girls T-shirt","product_category"=>"Kid's Wear",
                                   "product_description"=>"Black T-Shirt","product_price"=>21.99,"product_quantity"=>3),
              "PRODUCT_ID3"=>array("product_id"=>"kids_wear3","product_name"=>"Girls Jumpsuit","product_category"=>"Kid's Wear",
                                   "product_description"=>"Black Jumpsuit","product_price"=>29.99,"product_quantity"=>4),
                "PRODUCT_ID4"=>array("product_id"=>"kids_wear4","product_name"=>"Girls Long Frock","product_category"=>"Kid's Wear",
                                   "product_description"=>"Light Pink one-piece","product_price"=>31.99,"product_quantity"=>0),
                "PRODUCT_ID5"=>array("product_id"=>"kids_wear5","product_name"=>"Boys ShirtPant","product_category"=>"Kid's Wear",
                                   "product_description"=>"boys full pair","product_price"=>17.99,"product_quantity"=>6),
                "PRODUCT_ID6"=>array("product_id"=>"mens_wear1","product_name"=>"hoodie","product_category"=>"Men's Wear",
                                   "product_description"=>"Green hoodie","product_price"=>18.99,"product_quantity"=>12),
                "PRODUCT_ID7"=>array("product_id"=>"mens_wear2","product_name"=>"Mens T-Shirt Pant","product_category"=>"Men's Wear",
                                   "product_description"=>"BLack T-Shirt Blue Pant","product_price"=>25.99,"product_quantity"=>16),    
                "PRODUCT_ID8"=>array("product_id"=>"mens_wear3","product_name"=>"New York Hoddie","product_category"=>"Men's Wear",
                                   "product_description"=>"White Hoodie","product_price"=>20.99,"product_quantity"=>9),
                "PRODUCT_ID9"=>array("product_id"=>"mens_wear4","product_name"=>"Mens Black T-Shirt Pant","product_category"=>"Men's Wear",
                                   "product_description"=>"Black T-Shirt Pant","product_price"=>21.99,"product_quantity"=>13),
                "PRODUCT_ID10"=>array("product_id"=>"mens_wear5","product_name"=>"Pink T-Shirt ","product_category"=>"Men's Wear",
                                   "product_description"=>"Pink T-Shirt Black Pant","product_price"=>14.99,"product_quantity"=>0),
                "PRODUCT_ID11"=>array("product_id"=>"womens_wear1","product_name"=>"Long Skirt Women","product_category"=>"Women's Wear",
                                   "product_description"=>"Red Long Skirt","product_price"=>45.99,"product_quantity"=>1),
                "PRODUCT_ID12"=>array("product_id"=>"womens_wear2","product_name"=>"Women T-Shirt","product_category"=>"Women's Wear",
                                   "product_description"=>"Red T-Shirt","product_price"=>33.99,"product_quantity"=>5),
                "PRODUCT_ID13"=>array("product_id"=>"womens_wear3","product_name"=>"Women One-piece","product_category"=>"Women's Wear",
                                   "product_description"=>"Red One-Piece","product_price"=>28.99,"product_quantity"=>12),
                "PRODUCT_ID14"=>array("product_id"=>"womens_wear4","product_name"=>"Printed T-Shirt Women","product_category"=>"Women's Wear",
                                   "product_description"=>"Printed Green T-Shirt","product_price"=>13.99,"product_quantity"=>20),
                "PRODUCT_ID15"=>array("product_id"=>"womens_wear5","product_name"=>"Long Skirt Women","product_category"=>"Women's Wear",
                                   "product_description"=>"Long Cheetah Skirt","product_price"=>41.99,"product_quantity"=>7),
                "PRODUCT_ID16"=>array("product_id"=>"womens_wear6","product_name"=>"Printed Skirt Women","product_category"=>"Women's Wear",
                                   "product_description"=>"Printed Black Frock","product_price"=>30.99,"product_quantity"=>3),               
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