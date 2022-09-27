<?php

$data = [
array (" Indonesia "," DKI Jakarta ", " +62 "),
array (" Singapura "," Singapura ", " +65 "),
array (" Malaysia "," Kuala Lumpur ", " +60 "),
array (" Brunei "," Bandar Seri Begawan "," +673 "),
array (" Thailand "," Bangkok "," +66 "),
array (" Laos "," Vientiane "," +856 "),
array (" Filipina "," Manila "," +63 "),
array (" Myanmar "," Naypyidaw "," +95 "),
];

echo " <batas tabel='1' ";
gema " <tr>
      <th>Negara</th>
      <th>Ibukota</th>
      <th>Kode Telepon</th>
      </tr> ";

foreach ( $data  sebagai  $baris => $baris )
{
	echo " <tr> ";
	foreach ( $baris  sebagai  $col => $cell )
	{
		gema " <td> " . $sel . " </td> ";
	}	

}	
  echo " </tr></tabel> ";
?>