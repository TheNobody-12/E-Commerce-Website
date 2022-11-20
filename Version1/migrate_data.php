<?PHP
$datafileName = 'myfilename.json';
include_once "file_storage.php";
$data = readDataFile($datafileName);
$pdn = "mysql:database=mydatabase;host=localhost";
$username = 'root';
$password = '';
try {
	$db = new PDO($pdn,$username,$password);
	$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	$db->exec("USE mydatabase");
	$db->exec("CREATE TABLE catalogue (product_id varchar(40),product_name varchar(100),product_description longtext,product_price float,product_category varchar(25),product_quantity int(11))");
	$db->exec("CREATE TABLE session (session_id varchar(40),product_id varchar(40),product_name varchar(100),product_price float,product_description longtext,product_quantity int(11))");
	$cursor = $db->prepare('INSERT INTO catalogue (product_id,product_name,product_description,product_category,product_price,product_quantity)
VALUES (:product_id,:product_name,:product_description,:product_category,:product_price,:product_quantity);');
	foreach ($data as $item) {
		$cursor->execute($item);
	}
	print "Data Migrated!";
	} catch (Exception $e) {
		print"fail:".$e->getMessage();
}
?>