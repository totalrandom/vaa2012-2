<?php
  //generates answers for regions from google files
  //2nd round
  
//path to generate (relative)
$path = '../www/';


//answers
$fanswers = array(
  'senat' => file("https://docs.google.com/spreadsheet/pub?key=0Asva5SIBKjNudDhxeXBRRXhReVRESkxFREt4WHozd3c&output=csv"),
); 

$answers0 = array();
foreach ($fanswers as $key=>$file) {
  foreach ($file as $row) {
    $answers0[$key][] = str_getcsv($row);
  }
}


//clean duplicates, leave the last one
$a_senat = array_reverse($answers0['senat']);
foreach ($a_senat as $rkey=>$r) {
    if (isset($codes[$r[15]])) 
      unset($a_senat[$rkey]);
    else $codes[$r[15]] = true;
}
$answers0['senat'] = array_reverse($a_senat);



//questions complete
$file = file("https://docs.google.com/spreadsheet/pub?key=0ApmBqWaAzMn_dFFsWlBGLS1ZZTVJQUdxX3NkT2JySXc&output=csv");

//read questions
foreach ($file as $row) {
  $row_ar = str_getcsv($row);
  
  $region_code = $row_ar[0];
  $id = $row_ar[1];
  $question = trim($row_ar[2]); //mind it! (different from question generation)
  $description = $row_ar[3];
   
  $questions[$region_code][] = array(
    'id' => $id,
    'name' => '',
    'description' => $description,
    'question' => $question,
  );
  
}


//parties = candidates
$fparties = file("https://docs.google.com/spreadsheet/pub?key=0ApmBqWaAzMn_dDhUY1FDQndyODN1RnBrdmFERXdmTlE&output=csv");

foreach ($fparties as $row) {
  $row_ar = str_getcsv($row);
  if (trim($row_ar[6]) == '2') {
	  $unique_code = $row_ar[3];
	  $constituency_code = $row_ar[0];
	  $name = $row_ar[1];
	  $last_name = $row_ar[4];
	  $first_name = $row_ar[5];
	  $party = $row_ar[2];
	  $parties[$unique_code] = array(
		'unique_code' => $unique_code,
		'constituency_code' => $constituency_code,
		'region_code' => 'senat',
		'name' => $name,
		'party'=>$party,
		'first_name' => $first_name,
		'last_name' => $last_name,
		'short_name' => $last_name,
	  ); 
  }
}



foreach ($answers0 as $key=>$region) {
  $keys = array();
  foreach ($region[0] as $fkey => $first_row) {
    $keys[trim($first_row)] = $fkey;
    //unique code
    if (trim($first_row) == 'Vložte bezpečnostní kód, který jste obdržel/a v kontaktním e-mailu.')
      $unique_code_column[$key] = trim($fkey);
  }
  //print_r($questions[$key]);die();
   //print_r($keys);die();
  $ids = array();
  foreach ($questions[$key] as $q) {
    if (isset($keys[trim($q['question'])])) {
      $ids[$keys[trim($q['question'])]] = $q['id'];
    } else {
      $ids[$keys[trim($q['question'])]] = null;
    }
  }
  $answers_id[$key] = $ids;

}
//print_r($answers0);die();
  
foreach ($answers0 as $key=>$region) {
  array_shift($region);
  $i = 1;
  foreach ($region as $row) {
    $vote = array();
    foreach ($answers_id[$key] as $ikey => $id) {
      $vote[$id] = answer2value($row[$ikey]);
    }
    if (isset($parties[$row[$unique_code_column[$key]]])) {
      $party = $parties[$row[$unique_code_column[$key]]];
      $data[$key][] = array(
        'vote' => $vote,
        'last_name' => $party['last_name'],
        'first_name' => $party['first_name'],
        'short_name' => $party['short_name'],
        'name' => $party['name'],
        'party' => $party['party'],
        'constituency_code' => $party['constituency_code'],
        'friendly_name' => friendly_url($party['party']),
        'id' => $i,
      );
      $i++;
    } else {
      //report wrong unique key
      echo $key . "::" . $row[$unique_code_column[$key]] . "<br/>\n";
    }
  }
  //print_r($data);die();
  
  //if direcotry not existing, create it
   $dir = $path . 'senat' . '-2012/';
   if(!file_exists($dir)) 
     mkdir($dir);
 
 
  $fout = fopen ($dir . 'answers_2.json', "w+");
  $json = json_encode($data[$key]);
  fwrite($fout,$json);
  fclose($fout);
}  
  
  print_r($data);
  



function answer2value($a) {
  if ($a == 'ANO') return 1;
  if ($a == 'NE') return -1;
  else return 0;
}

/**
* creates "friendly url" version of text, translits string (gets rid of diacritics) and substitutes ' ' for '-', etc.
* @return friendly url version of text
* example:
* friendly_url('klub ČSSD')
*     returns 'klub-cssd'
*/
function friendly_url($text,$locale = 'cs_CZ.utf-8') {
    $old_locale = setlocale(LC_ALL, "0");
setlocale(LC_ALL,$locale);
$url = $text;
$url = preg_replace('~[^\\pL0-9_]+~u', '-', $url);
$url = trim($url, "-");
$url = iconv("utf-8", "us-ascii//TRANSLIT", $url);
$url = strtolower($url);
$url = preg_replace('~[^-a-z0-9_]+~', '', $url);
setlocale(LC_ALL,$old_locale);
return $url;
}

  
?>
