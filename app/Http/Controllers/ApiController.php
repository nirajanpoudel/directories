<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Category;
use App\Location;
use App\Directory;
class ApiController extends Controller
{
	public function __construct(Category $category,Location $location)
	{
		  $this->category = $category;
		  $this->location = $location;
	}
    public function categories(){
    	$data = $this->category->all();
    	foreach($data as $category){
    		$new_data[] = [
    		'name'=>$category['name'],
    		'id'=>$category['id']
    		];
    	}
    	return $new_data;
    }
    public function locations(){
    	$data = $this->location->all();
    	foreach($data as $location){
    		$new_data[] = [
    		'name'=>$location['name'],
    		'id'=>$location['id']
    		];
    	}
    	return $new_data;
    }
    public function directories(Directory $directory)
    {
    	$data = $directory->all();
    	foreach($data as $location){
    		$new_data[] = [
    		'name'=>$location['name'],
    		'id'=>$location['id'],
    		'lat'=>$location['lat'],
    		'lon'=>$location['lon'],
    		'logo'=>asset('uploads/'.$location['logo']),
    		'category_id'=>$location['category_id'],
    		'location_id'=>$location['location_id'],
    		'phones'=>$location['phone'],
    		'email'=>$location['email'],
    		'website'=>$location['website'],
    		];
    	}
    	return $new_data;
    }
}
