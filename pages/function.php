<h3> 1. membuat fungsi masing masing pattern</h3>
<h4>a. Triangel upside Left</h4>
<?php
$baris = 5; // Jumlah baris yang ingin ditampilkan
for($i=1; $i<=$baris; $i++) {
    for($j=1; $j<=$i; $j++) {
        echo "* ";
    }
    echo "<br>";
}
?>

<!-- triangel downside right -->
<h4>b. Triangel downside right</h4>
<?php
$baris = 5; // Jumlah baris yang ingin ditampilkan
for($i=$baris; $i>=1; $i--) {
    for($j=1; $j<=$i-1; $j++) {
        echo "&nbsp;&nbsp;&nbsp;";
    }
    for($j=$baris; $j>=$i; $j--) {
        echo "* ";
    }
    echo "<br>";
}
?>


<!-- triangel downside right -->
<h4>c. Triangel downside right</h4>
<?php
$baris = 5; // Jumlah baris yang ingin ditampilkan
for($i=$baris; $i>=1; $i--) {
    for($j=1; $j<=$i; $j++) {
        echo "* ";
    }
    echo "<br>";
}
?>



<h4>d. Triangel downside Left</h4>
        
 <?php
$baris = 5; // Jumlah baris yang ingin ditampilkan
for($i=1; $i<=$baris; $i++) {
    for($j=1; $j<$i; $j++) {
        echo "&nbsp;&nbsp;&nbsp;";
    }
    for($j=$baris; $j>=$i; $j--) {
        echo "* ";
    }
    echo "<br>";
}
?>

<h3> 2.  menerapkan conditional statement meimilih pattern yang diinginkan</h3>
    <h4>berikut adalah tampilan dari yang kita pilih berdarkan aegumen</h4>
<?php
function printPattern($patternName, $baris) {
    switch ($patternName) {
        case 'upright':
            for($i=1; $i<=$baris; $i++) {
                for($j=1; $j<=$i; $j++) {
                    echo "* ";
                }
                echo "<br>";
            }
            break;
        case 'downright':
            for($i=1; $i<=$baris; $i++) {
                for($j=$baris; $j>=$i; $j--) {
                    echo "* ";
                }
                echo "<br>";
            }
            break;
        case 'upleft':
            for($i=$baris; $i>=1; $i--) {
                for($j=1; $j<=$i; $j++) {
                    echo "* ";
                }
                echo "<br>";
            }
            break;
        case 'downleft':
            for($i=1; $i<=$baris; $i++) {
                for($j=1; $j<$i; $j++) {
                    echo "&nbsp;&nbsp;&nbsp;";
                }
                for($j=$baris; $j>=$i; $j--) {
                    echo "* ";
                }
                echo "<br>";
            }
            break;
        default:
            echo "Pattern tidak dikenali";
    }
}

// Contoh penggunaan
printPattern('upright', 5); // mencetak segitiga siku-siku dengan arah ke kanan atas
echo "<br>";
printPattern('downright', 5); // mencetak segitiga siku-siku dengan arah ke kanan bawah
echo "<br>";
printPattern('upleft', 5); // mencetak segitiga siku-siku dengan arah ke kiri atas
echo "<br>";
printPattern('downleft', 5); // mencetak segitiga siku-siku dengan arah ke kiri bawah
echo "<br>";
printPattern('tidakada', 5); // mencetak pesan "Pattern tidak dikenali"
?>

<h3> 3.menguabah pattern melalui argumen</h3>
<h4>a. Triangel upside Left</h4>
<?php
$baris = 6; // Jumlah baris yang ingin ditampilkan
for($i=1; $i<=$baris; $i++) {
    for($j=1; $j<=$i; $j++) {
        echo "$ ";
    }
    echo "<br>";
}
?>

<!-- triangel downside right -->
<h4>b. Triangel downside right</h4>
<?php
$baris = 9; // Jumlah baris yang ingin ditampilkan
for($i=$baris; $i>=1; $i--) {
    for($j=1; $j<=$i-1; $j++) {
        echo "&nbsp;&nbsp;&nbsp;";
    }
    for($j=$baris; $j>=$i; $j--) {
        echo "#";
    }
    echo "<br>";
}
?>


<!-- triangel downside right -->
<h4>c. Triangel downside right</h4>
<?php
$baris = 10; // Jumlah baris yang ingin ditampilkan
for($i=$baris; $i>=1; $i--) {
    for($j=1; $j<=$i; $j++) {
        echo "@";
    }
    echo "<br>";
}
?>



<h4>d. Triangel downside Left</h4>
        
 <?php
$baris = 6; // Jumlah baris yang ingin ditampilkan
for($i=1; $i<=$baris; $i++) {
    for($j=1; $j<$i; $j++) {
        echo "&nbsp;&nbsp;&nbsp;";
    }
    for($j=$baris; $j>=$i; $j--) {
        echo "* ";
    }
    echo "<br>";
}
?>



