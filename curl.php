<?php
class curl{
	function get($url){
		$c = curl_init();
		curl_setopt($c,CURLOPT_URL,$url);
        curl_setopt($c,CURLOPT_RETURNTRANSFER,true);
		$o=curl_exec($c);
		curl_close($c);
        return $o;
		
	}
	function post($url, $p){
		$post = '';
		foreach($p as $k => $v){
            $post .= $k . '='.$v.'&'; 
	}
			$post = rtrim($post, '&');
		    $c = curl_init();  
 
    		curl_setopt($c,CURLOPT_URL,$url);
    		curl_setopt($c,CURLOPT_RETURNTRANSFER,true);
    		curl_setopt($c,CURLOPT_HEADER, false); 
    		curl_setopt($c, CURLOPT_POST, count($post));
        	curl_setopt($c, CURLOPT_POSTFIELDS, $post);    
 
    		$output=curl_exec($c);
 
    		curl_close($c);
    		return $output;
		
 
}
}
$curl = new curl();
echo $curl->get("http://hayageek.com");
$p = array(
   "name" => "Gia Esposito",
   "age" => "21",
   "location" => "United States"
);

echo $curl->post("http://hayageek.com/examples/php/curl-examples/post.php",$p);
?>