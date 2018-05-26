<?php
require("index4.php");

$link = mysqli_connect ("localhost", "joandelrosario", "jbbdr", "test");

$name = $_POST['name'];
$query=("SELECT * FROM users WHERE name = \"$name\"");

$result = mysqli_query($link, $query);

$num_rows = mysqli_num_rows ( $result );

print "<br> There are $num_rows record/s.";

print"<table border=\"1\">\n";
while ( $a_row = mysqli_fetch_row( $result ) ) {
print "<tr>\n";
foreach ( $a_row as $field ) {
print "\t<td>".$field."</td>\n";
}

print "</tr>\n";
}
print "</table>\n";

?>