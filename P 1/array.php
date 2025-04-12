<?php 
$temanSaya = ["Caca", "Salsa", "Bila"];
print_r($temanSaya); //untuk menampilkan seluruh nilai array
echo $temanSaya[1];
echo "<ol>";
foreach ($temanSaya as $key => $value) {
    echo "<li>$key. $value</li>";
}
echo "</ol>";
$temanSaya[1] = "Aca";
unset($temanSaya[0]);
print_r($temanSaya); 

echo "<br><br><br>";
$buah = ["m" => "Rambutan","d" => "Markisa"];
print_r($buah);

echo "<br><br>";
//Fungsi array sort()

    $ar_buah = ["p" =>"Pisang","a" =>"Durian","m" =>"Apel","J" =>"Jeruk"];
    echo '<ol>';
    
    foreach($ar_buah as $k =>$v) {
        echo '<li>'.$k. '-' .$v. '</li>';
    }
    echo '</ol>';
    sort($ar_buah);
    echo '<hr/>';
    echo '<ol>';
    foreach($ar_buah as $k =>$v) {
        echo '<li>'.$k.' - ' . $v .'</li>';
    }
    echo '</ol>';

    //funsgi array_pop()

    $tims = ["Aca", "Aisyah", "Asa", "Caca"];
    array_pop($tims);
    echo '<hr/>';
    foreach($tims as $person){
        echo $person. '<br/>';
    }
    
    //fungsi array_push()

    $tims = ["Aca", "Aisyah", "Asa", "Caca"];
    array_push($tims, "wati");
    echo '<hr/>';
    foreach($tims as $person){
        echo $person. '<br/>';
    }
    
    //fungsi array_shift()

    $tims = ["Aca", "Aisyah", "Asa", "Aca"];
    array_shift($tims,);
    echo '<hr/>';
    foreach($tims as $person){
        echo $person. '<br/>';
    }
    
    //fungsi array_unshift()

    $tims = ["Aca", "Aisyah", "Asa", "Aca"];
    array_unshift($tims, "joko", "wati");
    echo '<hr/>';
    foreach($tims as $person){
        echo $person. '<br/>';
    }
?>