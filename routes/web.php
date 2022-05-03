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
//1
Route::get("my-name",function (){
    return "Григорьев Павел Сергеевич";
});
//2
Route::get('my-friend',function (){
   return "Белый Семен Андреевич";
});
//3
Route::get('get-friend/{name}',function ($name){
    return $name;
});
//4
Route::get('my-city/{city}',function ($city){
    return $city;
})->where('city','[A-za-z]+');

//5
Route::get('level/{lvl}',function ($lvl){
    if($lvl>=0&&$lvl<=25){
        return "новичок";
    }
    else if ($lvl>=26&&$lvl<=50){
        return "специалист";
    }
    else if ($lvl>=51&&$lvl<=75){
        return "босс";
    }
    else if ($lvl>=76&&$lvl<=98){
        return "старик";
    }
    else if ($lvl==99){
        return "король";
    }
});
//6
Route::get('working/{name}/{date}',function ($name,$date){

    return $name . " " . $date;

})->where(['name'=>'[A-za-z]+','date '=>'[0-9]']);
//7
Route::get('power',function (){
    return route('power');
})->name('power');
//8
Route::prefix('admin')->group(function (){
    Route::get('login',function (){
        return route('login');
    })->name('login');
    Route::get('logout',function (){
        return route('logout');
    })->name('logout');
    Route::get('info',function (){
        return route('info');
    })->name('info');
    Route::get('color',function (){
        return route('color');
    })->name('color');
});
//9
Route::redirect('admin/web','color');
//10
Route::get('color/{hex}',function ($hex){
   return "<div style='background-color: $hex; width:150px ; height:150px;border: solid red 1px'></div> Color-$hex";
})->where('hex','[A-Fa-f0-9]{6}');

Route::get("my-route",[\App\Http\Controllers\TestController::class,'LessonOne']);
Route::get("data",[\App\Http\Controllers\TestController::class,'LessonTwo']);

//1
Route::get('my-one',[\App\Http\Controllers\TestController::class,'ExerciseOne']);
//2
Route::get('my-two/{name}',[\App\Http\Controllers\TestController::class,'ExerciseTwo']);
//3
Route::get('my-three/{name}&{item}',[\App\Http\Controllers\TestController::class,'ExerciseThree']);
//4
Route::get('my-four',[\App\Http\Controllers\TestController::class,'ExerciseFour']);
//5
Route::get('my-five/{a}&{b}',[\App\Http\Controllers\TestController::class,'ExerciseFive']);
//6
Route::get('my-six/{cipher}',[\App\Http\Controllers\TestController::class,'ExerciseSix']);


Route::get('template/{detach}', [\App\Http\Controllers\TestController::class, 'lessonTemplateOne']);

//1
Route::get('template', [\App\Http\Controllers\TestController::class, 'LessonTemplateZadanieOne']);
//2
Route::get('zadanieTwo/{organization}', [\App\Http\Controllers\TestController::class, 'LessonTemplateZadanieTwo']);
//3
Route::get('zadanieThree/{name}', [\App\Http\Controllers\TestController::class, 'LessonTemplateZadanieThree']);
//4,5,6
Route::get('zadanieOK/', [\App\Http\Controllers\TestController::class, 'LessonTemplateZadanieFourFiveSix']);

//03.05.22
Route::view('/', "mainpage")->name("Главная");
Route::view('/News', "NewPost")->name("Новость");
Route::view('/aut', "login")->name("Авторизация");
Route::view('/ls', "Cabinet")->name("Личный кабинет");
