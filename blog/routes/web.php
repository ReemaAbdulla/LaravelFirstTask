<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('mol', function () {

	$employees=array("hamzeh","Rima","Faten");
    return view('mol',["employees"=>$employees]);
});
Route::get('mol2', function () {
    return view('mol2');
});

Route::get('mol3',function(){

return view('mol3');

});
Route::get('index',function(){
return view('index');

});
/*Route::get('staff1',function(){
	$employees=array(
		             array(
		             	"name"=>"hamzeh","https://flyclipart.com/smily-png-hd-transparent-smily-hd-images-smile-png-319219","30","https://github.com/ReemaAbdulla/Validation"),
					 array("Reema","https://flyclipart.com/smile-png-smile-png-319212","40","https://github.com/ReemaAbdulla/Validation"),
					 array("Faten","https://flyclipart.com/smiley-icon-smile-icon-png-319128","30","https://github.com/ReemaAbdulla/Validation"));
return view('staff1',["employees"=>$employees]);

});

Route::get('staff',function(){
	$employees1=[
		             
		             	"0"=>["name"=>"Hamzeh",
		             	      "image"=>"https://cindybriggs.com/wp-content/uploads/2019/12/7-Unique-Watercolor-Painting-Ideas-for-Beginners-2-1024x717.jpg",
		             	      "age"=>"30",
		             	      "github"=>"https://github.com/Hamzeh/Validation"],

					    "1"=>["name"=>"Reema",
					          "image"=>"https://img.freepik.com/free-vector/watercolor-spring-background-with-colorful-tulips_23-2148434150.jpg?size=626&ext=jpg",
					          "age"=>"40",
					          "github"=>"https://github.com/Reema/Validation"],

					     "2"=>["name"=>"Faten",
					           "image"=>"https://i.pinimg.com/originals/1a/2d/39/1a2d39ed326c12c0845036f09abab628.jpg",
					           "age"=>"30",
					           "github"=>"https://github.com/Faten/Validation"]
			     ];   



return view('staff',["employees1"=>$employees1]);


});*/

Route::get('ourStaff',function(){
	$employees2=[
		             
		             	"0"=>["name"=>"Hamzeh",
		             	      "image"=>"https://cindybriggs.com/wp-content/uploads/2019/12/7-Unique-Watercolor-Painting-Ideas-for-Beginners-2-1024x717.jpg",
		             	      "age"=>"30",
		             	      "github"=>"https://github.com/Hamzeh/Validation"],

					    "1"=>["name"=>"Reema",
					          "image"=>"https://img.freepik.com/free-vector/watercolor-spring-background-with-colorful-tulips_23-2148434150.jpg?size=626&ext=jpg",
					          "age"=>"40",
					          "github"=>"https://github.com/Reema/Validation"],

					     "2"=>["name"=>"Faten",
					           "image"=>"https://i.pinimg.com/originals/1a/2d/39/1a2d39ed326c12c0845036f09abab628.jpg",
					           "age"=>"30",
					           "github"=>"https://github.com/Faten/Validation"]
			     ];   


	return view('ourStaff',["employees2"=>$employees2]);
	});


/*Route::get('contactUs',function(){
	$name="";
	$email="";
	$message="";

	return view('contactUs',compact("name","email","message"));
	});
*/
	Route::get('contactUs1',function(){
		$formElement=[
			"0"=>["name"=>""],
			"1"=>["email"=>""],
			"2"=>["message"=>""]
		];
	

	return view('contactUs1',["formElement"=>$formElement]);
	});


?>
