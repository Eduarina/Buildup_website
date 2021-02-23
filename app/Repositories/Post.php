<?php

namespace App\Repositories;
use GuzzleHttp\Client;


class Post
{

	protected $client;

	public function all(){
		$properties = $this->get("property/?format=json&limit=1000&key=08ca843a8eac05b12eee48d56202947a240520cf");
		return $properties["objects"];
	}

	public function find($id){
		return $this->get("property/{$id}/?format=json&key=08ca843a8eac05b12eee48d56202947a240520cf");	
	}

	public function get($url){
		$this->client = new Client([
            'base_uri' => 'http://www.tokkobroker.com/api/v1/',
        ]);
		$response = $this->client->request("GET", $url );
		return json_decode( $response->getBody()->getContents(), true );
	}

	public function searchByCat( $properties, $category ){
		$newArray = array();
		if($category){
			foreach ($properties as $property) {
				foreach ($property["operations"] as $operation) {
					if($operation["operation_type"] == $category){
						array_push($newArray, $property );
					}
				}
			}
			return $newArray;
		}
		return $properties;
	}

	public function searchByType( $properties, $category ){
		$newArray = array();
		if( $category ){
			foreach ($properties as $property) {
				if($property["type"]["code"] == $category){
					array_push($newArray, $property );
				}	
			}
			return $newArray;
		}
		return $properties;
	}

	public function searchByPrice( $properties, $min, $max ){
		$newArray = array();
		if( $min || $max ){	
			foreach ($properties as $property) {
			 	foreach($property["operations"] as $operation){
			 		foreach($operation["prices"] as $price){
						if( $min && $max ){
			 				if($price["price"] >= $min && $price["price"]<=$max){
						 		array_push($newArray, $property );
				 			}
				 		}else{
				 			if( !$max ){
					 			if($price["price"] >= $min){
							 		array_push($newArray, $property );
					 			}
				 			}else{
				 				if($price["price"] <= $max){
							 		array_push($newArray, $property );
					 			}
				 			}
				 		}
					}
				}
			}
			return $newArray;
		}
		return $properties;
	}

	public function searchBySurface( $properties, $min, $max ){
		if( $min || $max ){
			$min = floatval($min);
			$max = floatval($max);
			$newArray = array();
			foreach ($properties as $property) {
				$surface = floatval($property["surface"]);
				if( $min && $max ){
	 				if($surface >= $min && $surface<=$max){
				 		array_push($newArray, $property );
		 			}
		 		}else{
		 			if( !$max ){
			 			if($surface >= $min){
					 		array_push($newArray, $property );
			 			}
		 			}else{
		 				if($surface <= $max){
					 		array_push($newArray, $property );
			 			}
		 			}
		 		}
			}
			return $newArray;
		}
		return $properties;
	}

	public function searchByCity( $properties, $city ){
		if( $city ){
			$newArray = array();
			foreach ($properties as $property) {
				$currentCity = explode(" | ", $property["location"]["short_location"]);
				if( $currentCity[1] == $city ){
					array_push($newArray, $property);
				}
			}
			return $newArray;

		}
		return $properties;
	}

	public function getLocations( $properties){
		$newArray = array();
		foreach ($properties as $property) {
			$valores = explode(" | " , $property["location"]["short_location"] );
			if( !in_array($valores[1], $newArray) ){
				array_push($newArray, $valores[1]);
			}
		}
		return $newArray;
	}

}

?>