<?php

/**
 * EvilDead Ipsum Api Class
 * 
 * Based on GGA_Bacon_Ipsum_API class
 * @see https://github.com/petenelson/bacon-ipsum
 *
 * @author Davi Marcondes Moreira <davi.marcondes.moreira@gmail.com>
 */
class Api
{    
    /**
     * 
     */
	function api()
    {
		if (isset($_REQUEST['submit'])) { 
		
			require_once __DIR__ . '/Generator.php';
			
			$generator = new Generator();
			$numberOfSentences  = 0;
			$numberOfParagraphs = 5;
	
			if (isset($_REQUEST["paras"])){
				$numberOfParagraphs = intval($_REQUEST["paras"]);                
            }
	
			if (isset($_REQUEST["sentences"])){
				$numberOfSentences  = intval($_REQUEST["sentences"]);                
            }
	
			$output = '';
						
			if ($numberOfParagraphs < 1){
				$numberOfParagraphs = 1;                
            }
	
			if ($numberOfParagraphs > 100){
				$numberOfParagraphs = 100;                
            }
	
			if ($numberOfSentences > 100){
				$numberOfSentences = 100;                
            }
	
			$startWithLorem = isset($_REQUEST["start-with-lorem"]) && $_REQUEST["start-with-lorem"] == "1";
	
			$paras = $generator->makeSomeEvilFiller(
				'evil-filler', 
				$numberOfParagraphs, 
				$startWithLorem, 
				$numberOfSentences);
	
            /*
			header('Access-Control-Allow-Origin: *');
	
			if (isset($_REQUEST["callback"])) {
				header("Content-Type: application/javascript");
				echo $_GET['callback'] . '(' . json_encode($paras) . ')';
			}
			else {
				header("Content-Type: application/json; charset=utf-8");
				echo json_encode($paras);
			}		
	
			exit;	
             * 
             */
            return $paras;
		}	
	}
}
