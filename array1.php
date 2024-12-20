#Aqui array
$list = array(
 "0" => "Sakuke",
 "1" => "Naruto",
 "2" => "Itachi"
);

#Esse tipo são meio de impressão iguais mais com variações.
#for tipo 1
for ( $i = 0; $i < count($list); $i++ ) {
 echo "[$i] => $list[$i]<br/>";
}

#for tipo 2
for ( $i = 0; $i < count($list); $i++ ) {
 echo "$i <br/>";
}

#for tipo 3
for ( $i = 0; $i < count($list); $i++ ) {
 echo "$list[$i] <br/>";
}

#for padrão
for ( $i = 0; $i < count($list); $i++ ) {
 echo "$i $list[$i]<br/>";
}
