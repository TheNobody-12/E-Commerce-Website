<?PHP
include_once "file_storage.php";
$filename = 'myfilename.json';
$data = array("PRODUCT_ID1"=>array("product_id"=>"PRODUCT_ID1","product_name"=>"PRODUCT_NAME1","product_category"=>"PRODUCT_CATEGORY1",
                                   "product_description"=>"PRODUCT_DESCRIPTION1","product_price"=>10.99,"product_quantity"=>2),
              "PRODUCT_ID2"=>array("product_id"=>"PRODUCT_ID2","product_name"=>"PRODUCT_NAME2","product_category"=>"PRODUCT_CATEGORY1",
                                   "product_description"=>"PRODUCT_DESCRIPTION2","product_price"=>11.99,"product_quantity"=>3),
              "PRODUCT_ID3"=>array("product_id"=>"PRODUCT_ID2","product_name"=>"PRODUCT_NAME3","product_category"=>"PRODUCT_CATEGORY1",
                                   "product_description"=>"PRODUCT_DESCRIPTION3","product_price"=>12.99,"product_quantity"=>4),
                "PRODUCT_ID4"=>array("product_id"=>"PRODUCT_ID2","product_name"=>"PRODUCT_NAME4","product_category"=>"PRODUCT_CATEGORY1",
                                   "product_description"=>"PRODUCT_DESCRIPTION4","product_price"=>13.99,"product_quantity"=>0));
                                   
writeDataFile($filename,$data);
if ( file_exists($filename) ){ print "Data File Created!";}
else { print "Data file not created!";}
?>