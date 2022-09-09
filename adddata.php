
<?php

$data= [
    'Game of Thrones'=>['Jaime Lannister','Catelyn Stark','Cercei Lannister'],
    'Black Mirror'=> ['Nanette Cole','Selma Telse','karin Parke']
];
/*echo"<pre>";
print_r($data);
echo"</pre>";*/

echo'<h1>Famous Tv Series and Actors';
foreach ($data as $series => $actors){
    echo "<h2>$series</h2>";
    foreach ($actors as $actor){
        echo "<div>$actor</div>";
    }
}
?>