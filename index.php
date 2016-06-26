<?php
	//include simple_html_dom
	include_once('simple_html_dom.php');
	
	//target
	$target_url = "http://www.zonasulatende.com.br/";

	//start simple_htmk_dom
	$html = new simple_html_dom();
	

	$html->load_file($target_url);
	
	//getting all the links (tag <a href=''>)
	/*foreach($html->find('a') as $link)
	{
		echo $link->href."<br />";
	}*/

	//getting title and prices
	foreach($html->find("li[class='liItemTemplate']") as $item){
		//echo $item."<br>";
		foreach ($item->find("div[class='prod_info']") as $nome){
			echo $nome;
		}
		foreach ($item->find("p[class='preco']") as $preco){
			echo $preco;
		}
		foreach ($item->find("ins") as $preco_por){
			echo $preco_por;
		}
	}

?>