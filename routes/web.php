<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
// 
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::redirect('/', '/home');

Route::get('/about','AboutController@about');

Route::get('/contact','ContactController@contact');
Route::get('/test','HomeController@test');
Route::get('/testresource','HomeController@testresource');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Courses Routes


// Route::prefix('courses')->name('courses.')->group(function(){
//     Route::get('/', 'CourseController@index')->name('index');
//     Route::get('/{courseId}', 'CourseController@show')->name('show');
//     Route::post('/{courseId}', 'CourseController@create')->name('show');
// });
Route::resource('/courses','CourseController')->except(['edit','update', 'destroy']);
Route::post('/upload', 'UserController@uploadAvatar');

//Admin Routes
Route::prefix('admin')->name('admin.')->middleware('admin')->group(function(){
    Route::get('/', 'AdminController@index')->name('admin');
    // Route::get('/users', 'AdminController@getUsers')->name('users');
    Route::resource('/users', 'UserController');
    // Route::get('/users/{user}', 'UserController@show');
    Route::resource('/courses','CourseController');
    Route::get('/students', 'AdminController@getStudents')->name('students');   
});


// Student Routes
Route::prefix('classroom')->name('classroom.')->group(function(){
    Route::get('/home', 'StudentController@index')->name('index');
    Route::get('/', 'StudentController@index')->name('index');
});    	

// Profle Routes
Route::get('/profile','ProfileController');

// Routes for tests

// Route::resource('api/users','TestResourceController');
Route::apiResource('api/tests','TestApiController'); // except the [create, edit] methods

Route::get('invoke', 'MyInvokeController');// for test the invoke parameter make:controller --invokable

Route::get('/first', function () {
    return App\User::first();
});
Route::get('gen', function(){

    $faker = Faker\Factory::create();
    // $faker = new Faker\Generator();
    // $array = [];
    // for ($i=0; $i < 10; $i++) { 
    //     $array[] = $faker->name;
    // }
    // dd($array) ;
    echo $faker->boolean  ;echo '<br />';
    echo $faker->firstname;echo '<br />';
    echo $faker->locale;echo '<br />';
    echo $faker->currencyCode;echo '<br />';
    echo $faker->toUpper($faker->firstname);
    echo '<br />';
    // dd($faker);
    // echo $faker->randomDigitNot(5);
});

Route::get('factory',function(){
    // dd(new Faker\Generator());
    echo "<br>";
    $faker = Faker\Factory::create();
    $faker->name;
    $faker->lastName;
    $faker->firstNameFemale;
    $faker->firstNameMale;
    $faker->address;



    dd($faker);
});

// Route::get('api/users/{id}',function($id){
//         return App\User::findOrFail($id);
// });
Route::get('api/users/max',function(){
    return App\User::max('email');
});

Route::get('locale',function(){
  App::setLocale('ar');  

  return  App::getLocale('ar');  
});
// test for the One-To-One Relation
Route::get('/phone', function() {
    $phones = App\Phone::all();

    // $user = factory(App\User::class)->create();
    $user = App\User::find(14);

    $phone = new App\Phone([
        'phone' => 6699558855,
    ]);

    $phone->user()->associate($user);
    $phone->save();

    $phones[] = $phone;    

    foreach ($phones as $phone) {
        echo "Phone : " . $phone->phone . " ====> ";
        echo "Owner : " . $phone->user->name . "<br />";
    }
});

Route::get('json',function(){
    $json_words = '[
        {
            "term": "ABI",
            "wAR": "واجهة التطبيق الثنائية",
            "wEN": "Application Binary Interface"
        },
        {
            "term": "ACCESS_POINT",
            "wAR": "نقطة دخول",
            "wEN": "access point"
        },
        {
            "term": "ADDRESS",
            "wAR": "عنوان",
            "wEN": "address"
        },
        {
            "term": "ADDRESS_ALLOCATION_PROTOCOL",
            "wAR": "بروتوكول تخصيص العنوان",
            "wEN": [
                "AAP",
                "Address Allocation Protocol"
            ]
        },
    ]';
    $l = new App\Language();
    $l->term = 'Protocol';
    $l->wAR = 'بروتوكول';
    $l->wEN = 'protocol';

    // $l->save();

    // App\Language::insert($lan);
    // App\Language::insert($json_words);
    // App\Language::insert(json_decode($json_words, true));
    // return App\Language::all()->toJson();

    // dd($l);
    $s = json_encode($json_words, true);
    // dd( $s[0]["term"]);
    return App\Language::all();
});