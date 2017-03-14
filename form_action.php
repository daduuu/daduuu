$wc = isset($_GET['white']);
$wb = isset($_GET['black']);
if ($wc == "White"){
	echo "You chose the white cake. The white cake is one of the sweetest and most beautiful cakes you will see in the world.<br>";
echo '<img src="pic1.jpg" width=200px height=300px border=0>'; 
}
if ($wb == "Black"){
	echo "You chose the black cake. The black cake is one of the richest and smoothest cakes in the world";
echo '<img src="pic2.jpg" width=200px height=280px border=0>'; 
}
