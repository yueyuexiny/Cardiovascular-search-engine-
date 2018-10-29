<?php
error_reporting(0);
//error_reporting(E_ALL);
//ini_set('display_errors', TRUE);
//ini_set('display_startup_errors', TRUE);

//for cookie security issue
/*ini_set("session.use_cookies", 0);
ini_set("session.use_only_cookies", 0);
ini_set("session.use_trans_sid", 1);
ini_set("session.cache_limiter", "");
*/
/*start session*/
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}
date_default_timezone_set('America/chicago');

//Es endpoint
$es_end_point = '129.106.31.138:9200';
//$es_end_point = '129.106.31.121:9200';
//$es_end_point = '13.58.37.65:9200'; AWS
//$es_end_point = '172.31.36.162:9200';

//terminology server
//$scigraph_url = "http://datamedbeta.biocaddie.org:9000/scigraph/graph/neighbors/";
//$scigraph = "http://datamedbeta.biocaddie.org:9000/scigraph/";
$scigraph_url = "129.106.31.138:9000/scigraph/graph/neighbors/";
$scigraph = "129.106.31.138:9000/scigraph/";

/*//similarity config
$similarity_url = "http://localhost:8085/dataset%23";


//Mysql database config
$user = "biocaddie";
$password = "biocaddie";
$database = "biocaddie";
$dbconf =array(
	'ip' => "129.106.31.121",  // "192.168.224.106",
	'user'=>"biocaddie",
	'password'=> 'biocaddie',
	'database'=>'biocaddie',
);
*/
//nlp server
$nlp_server = '129.106.31.138:8080/nlp-process-webapp/cdr';
//$nlp_server = 'http://clamp.uth.edu/nlp-process-webapp/cdr';

$metamap_server = '129.106.31.138:8080/nlp-process-webapp/cdr';
//$metamap_server = '129.106.31.138:8080/nlp-process-webapp/cdr';
//$metamap_server = '129.106.31.138:8080/nlp-process-webapp-mm/cdr';

/*//IseeDelve
$IseeDelve = 'https://datamed.org/iseedelve/pdb_v2/';

//metamap server
//$metamap_server = 'http://clamp.uth.edu/nlp-process-webapp-mm/cdr';

//IseeDelve
//$IseeDelve = 'http://datamedbeta.biocaddie.org/iseedelve/pdb_v2/';

//Tracking system
$logstash_url = "http://127.0.0.1:5042";*/
?>
