<?php

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
Route::get('/greeting', function(){
	return view('greeting', $data=['name'=>'Hung','tuoi'=>'23']);
});	
// Route::get('/greeting', function(){
// 	return view('greeting')->with('name','Nguyen Quang Hung');
// });	

Route::get('/admin/setting', function(){
	return view('admin.setting');
});
Route::get('/child', function(){
	return view('child');
});
Route::get('/todo', function(){
	$list = ['Hoc lap trinh', 'Hoc HTML', 'Hoc CSS', 'Hoc PHP'];
	return view('todo')->with('list',$list);
});
Route::get('/add', function(){
	return view('add');
})->name('todo.add');
// Route::get('/home', 'HomeController@index');
// Route::get('/page/{page?}', 'HomeController@page');
Route::prefix('home')->group(function(){
	Route::get('/', 'HomeController@index');
	Route::get('/{page?}', 'HomeController@page');
});
// Route::get('admin/setting', 'Admin\SettingController@index');
// Route::get('admin/show/{id?}', 'Admin\SettingController@show');
// Route::get('admin/user','Admin\UserController@index');




// Route::prefix('admin')->namespace('Admin')->group(function(){
// 	Route::get('setting', 'SettingController@index');
// 	Route::get('show/{id?}', 'SettingController@show');
// 	Route::get('user','UserController@index');	
// });



Route::group([
	'prefix'=>'admin',
	'namespace'=>'Admin'
], function(){
	Route::get('setting', 'SettingController@index');
	Route::get('show/{id?}', 'SettingController@show');
	Route::get('user','UserController@index');
});


Route::resource('todos','TodoController');
// Route::get('/hello', function () {
//     return "Hello";
// });
// Route::get('/form', function () {
//     return view('form');
// });
// Route::post('/form', function(){
// 	echo "Vao form";;
// })->name('post.form');
// Route::redirect('form1','form');
// Route::view('/form','form');
// Route::get('user/{id?}/{username}', function($id = null) {
// 	if ($id == null) {
// 		return "list user";
// 	}else{
// 		return 'User ' . $id;	
// 	}
    
// })->name('user');	
// Route::get('post/{id?}/comment/{comment}', function($id = 1, $idComment) {
//     return "Post $id with comment $idComment";
// });
// Route::get('/user/{id}/post/{post}', function($id, $idPost) {
//     return "This is post $idPost of user $id"; 
// });
// Route::group([
// 	'prefix' => 'admin',
// 	'name' => 'admin.'
// ], function(){
// 	Route::prefix('user')->group(function (){
// 		Route::get('/', function(){
// 			echo "user home";
// 		})->name('user.home');
// 		Route::get('profile', function(){
// 			echo "user profile";
// 		})->name('user.profile');
// 		Route::get('/edit', function(){
// 			echo "user edit";
// 		});
// 	});
// 	Route::prefix('lesson')->group(function(){
// 		Route::get('/', function (){
// 			echo "lesson";
// 		});
// 		Route::get('/edit', function (){
// 			echo "lesson edit";
// 		});
// 		Route::get('/1', function (){
// 			echo "lesson 1";
// 		});
// 		Route::get('/test', function (){
// 			echo "lesson test";
// 		});
// 		Route::prefix('/video')->group(function(){
// 			Route::get('/', function (){
// 				echo "lesson video";
// 			});
// 			Route::get('/{id}', function ($id){
// 				echo "lesson video ".$id;
// 			});
// 		});
// 	});
// });
// Route::prefix('admin')->name('admin.')->group(function (){
//    Route::prefix('category')->group(function (){
//       Route::get('/', function (){
//          return 'admin/category';
//       });
//        Route::get('/', function ($id){
//            return 'admin/category/' . $id;
//        });
//        Route::get('/{category_id}/post/{post_id?}', function ($category_id, $post_id = null){
//            if (empty($post_id)){
//                return "admin/category/$category_id/post";
//            }else{
//                return "admin/category/$category_id/post/$post_id";
//            }
//        });
//    });

//     Route::prefix('post')->group(function (){
//         Route::get('/', function (){
//             return 'admin/post';
//         });
//         Route::get('/', function ($id){
//             return 'admin/post/' . $id;
//         });
//         Route::prefix('edit')->group(function (){
//            Route::get('/{$id?}', function ($id = null){
//               if (empty($id)){
//                   return 'admin/post/edit';
//               }else{
//                   return 'admin/post/edit/' . $id;
//               }
//            }); 
//         });
//     });
// });
