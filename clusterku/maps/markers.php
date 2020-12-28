<?php 

$conn = mysqli_connect('localhost', 'root', '', 'mappingBappeda');
if($conn){
    echo 'succes alhamdulillah';
}else{
    echo ' alhamdulillah belajar lagi biar succes 100%';
}

$sql = "SELECT * FROM `tbl_tps` WHERE id";
$retval = mysqli_query( $sql, $conn );

mysqli_error($koneksi);
?>

<script>


<?php  while($row = mysqli_fetch_array($retval, MYSQL_ASSOC)) {?>
var markers = [{
        "name": <?= $row['nama_tps'] ?>,
        "city": "Kota cisaat sukabumi",
        "iata_faa": "GKA",
        "icao": "Bappeda",
        "lat": <?= $row['latitude'] ?>,
        "lng": <?= $row['longitude'] ?>,
        "alt": 5282,
        "tz": "Pacific/Port_Moresby"
    },
];
<?php } ?>
</script>
