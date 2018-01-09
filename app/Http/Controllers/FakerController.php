<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Faker\Generator as Faker;
use Faker\Factory as Faker2;

class FakerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function faker(Faker $faker)
    {
        echo '语言版本：en_US'. '<br><br>';
        echo '姓名（realname）：' . $faker->name . '<br>';
        echo '邮箱（email）：' . $faker->email . '<br>';
        echo '地址（address）：' . $faker->address . '<br>';
        echo '标题（title）：' . $faker->sentence . '<br>';
        echo '段落（paragraph）：' . $faker->paragraph . '<br>';
        echo '文章（text）：' . $faker->text . '<br>';
        echo '图片链接（imageUrl）：' . $faker->imageUrl(640, 480, 'people') . '<br>';

        $faker2 = Faker2::create('zh_CN');
        echo '<br><br><br>语言版本：zh_CN'. '<br><br>';
        echo '姓名（realname）：' . $faker2->name('female') . '<br>';
        echo '邮箱（email）：' . $faker2->email . '<br>';
        echo '地址（address）：' . $faker2->address . '<br>';
        echo '标题（title）：' . $faker2->sentence . '<br>';
        echo '段落（paragraph）：' . $faker2->paragraph . '<br>';
        echo '文章（text）：' . $faker2->text . '<br>';
    }

    
}
