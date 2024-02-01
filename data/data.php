<?php

// $ch = curl_init();
 // $url = 'https://api.koreafilm.or.kr/openapi-data2/wisenut/search_api/search_json2.jsp?collection=kmdb_new2&nation=korea'; /*URL*/
 // $queryParams = '?' . urlencode('ServiceKey') . '=RJ0E1Z5AB02165YB3855'; /*Service Key*/
 // $queryParams .= '&' . urlencode('val001') . '=' . urlencode('2018'); /*상영년도*/
 // $queryParams .= '&' . urlencode('val002') . '=' . urlencode('01'); /*상영월*/


 // curl_setopt($ch, CURLOPT_URL, $url . $queryParams);
 // curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
 // curl_setopt($ch, CURLOPT_HEADER, FALSE);
 // curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
 // $response = curl_exec($ch);
 // curl_close($ch);
 // // var_dump($response);
 // echo $response;


 $ch = curl_init();
 $url = 'http://api.koreafilm.or.kr/openapi-data2/wisenut/search_api/search_json2.jsp';
 
 
 $queryParams = [
  'nation' => '대한민국',
  'collection' => 'kmdb_new2',
  'ServiceKey' => 'D2T2M24GUS0MYBTH4IR2',
  'val001' => '2022',
  'val002' => '01',
 ];
 
 
 $url .= '?' . http_build_query($queryParams);
 
 
 curl_setopt($ch, CURLOPT_URL, $url);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
 curl_setopt($ch, CURLOPT_HEADER, FALSE);
 curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
 $response = curl_exec($ch);
 
 
 if ($response === FALSE) {
   echo 'cURL Error: ' . curl_error($ch);
 }
 
 
 curl_close($ch);
 
 
 // var_dump($response);
 echo $response;
 

?>