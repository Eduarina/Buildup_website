<?php

namespace App\Http\Controllers;

use App\Repositories\Post;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class frontController extends Controller
{

	protected $posts;

	public function __construct(Post $posts){
		$this->posts = $posts;
	}

    public function index(){
		$properties = collect( $this->posts->all() );
        $locations = $this->posts->getLocations( $properties );
		$properties = $properties->sortByDesc("id")->slice(0,8);
		return dd($locations);
		//return view('home.homeContent', ["properties" => $properties, "locations" => $locations]);
    }

    public function search(Request $request){
    	$properties = $this->posts->all();
        $properties = $this->posts->searchByCat( $properties, $request->input('cat') );
        $properties = $this->posts->searchByCity( $properties, $request->input('ciudad'));

    	$properties = $this->posts->searchByType( $properties, $request->input('tipo') );
        $properties = $this->posts->searchByPrice($properties, $request->input("premin"), $request->input('premax'));
        $properties = $this->posts->searchBySurface($properties, $request->input("supmin"), $request->input('supmax'));
        $locations = $this->posts->getLocations( $properties );
        $itemCollection = collect( $properties );
        $itemCollection = $itemCollection->sortByDesc('id');
 
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $perPage = 12;
        $currentPageItems = $itemCollection->slice(($currentPage * $perPage) - $perPage, $perPage)->all();
        $paginatedItems= new LengthAwarePaginator($currentPageItems , count($itemCollection), $perPage);
        $paginatedItems->setPath($request->url());

        return view('properties.index', ['properties' => $paginatedItems, 'locations' => $locations]);

    }
    
    public function show($id){
    	$property = $this->posts->find($id);
	    return view('properties.show', compact("property"));
    }

    public function fromTokko($id){
        $text = explode("-", $id);
            $property = $this->posts->find($text[0]);
        return view('properties.show', compact("property"));
    }

    public function viewall(Request $request){
    	$itemCollection = collect( $this->posts->all() );
        $locations = $this->posts->getLocations( $itemCollection );
		$itemCollection = $itemCollection->sortByDesc("id");
		
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
 
        $perPage = 12;
 
        $currentPageItems = $itemCollection->slice(($currentPage * $perPage) - $perPage, $perPage)->all();
 
        $paginatedItems= new LengthAwarePaginator($currentPageItems , count($itemCollection), $perPage);
 
        $paginatedItems->setPath($request->url());
 		
 		return view('properties.index', ['properties' => $paginatedItems, 'locations' => $locations]);
    }

    public function joinus(){
        return view('joinus.index');
    }

}
