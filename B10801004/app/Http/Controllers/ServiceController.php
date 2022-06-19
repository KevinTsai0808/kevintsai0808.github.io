<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    //寫入products資料表(Create)
    function store(Request $request){    
        DB::table('products')->insert([
            'image' => $request -> input('picture'),
            'name' => $request -> input('name'),
            'price' =>$request -> input('price')  , 
            'number' => $request -> input('number'),
            'description' => $request -> input('description'),  
            ]);
            
        return redirect('menu');
    }

    //根據id給予購買頁面相對應的資訊
    function show(Request $request){
        $id = $request -> input('id');
        $info = [
           ['picture' => asset('/images/product1.png'), 'price' => 1100 , 'name' => '精品風味濾掛禮盒' , 'place' => '各大洲' ,  'description' => '涵蓋各地區特色的組合 可任選3盒' , 'process' => '水洗/日曬'], 
            ['picture' => asset('/images/product2.png'), 'price' => 550,'name' => '四大洲人氣禮盒' ,'place' =>  '各大洲' , 'description' => '給您如同環遊世界的頂級咖啡享受' , 'process' => '水洗/日曬'],
            ['picture' => asset('/images/product3.png'), 'price' => 120 ,'name' => '環遊世界——亞洲' ,'place' => '亞洲' , 'description' => '酸味保守風味厚重圓潤 入口前便可感受質感厚重的香氣' , 'process' => '水洗/日曬'],
            ['picture' => asset('/images/product4.png'), 'price' => 1100 ,'name' => '環遊世界濾掛禮盒','place' => '各大洲', 'description' => '中美洲/南美洲各16包 亞洲/非洲各8包' , 'process' =>'水洗'],
            ['picture' => asset('/images/product5.png'), 'price' => 820 ,'name' => '有機風味濾掛禮盒','place' => '美洲' , 'description' => '水洗/日曬 任選3盒' , 'process' => '水洗/日曬'],
            ['picture' => asset('/images/product6.png'), 'price' => 440 ,'name' => '時尚經典手提禮盒','place' => '台灣', 'description' => '送禮自用兩相宜 可任選10包濾掛式咖啡' , 'process' => '日曬'],
            ['picture' => asset('/images/product7.png'), 'price' => 120,'name' => '環遊世界——非洲','place' => '非洲', 'description' => '香氣狂野 有草莓及藍莓的餘味' , 'process' => '日曬'],
            ['picture' => asset('/images/product8.png'), 'price' => 120,'name' =>  '環遊世界——美洲','place' => '美洲', 'description' => '口感濃烈 巧可力餘味較為苦澀', 'process' => '日曬'],
            ['picture' => asset('/images/product9.png'), 'price' => 120,'name' =>  '環遊世界——南美洲','place' => '南美洲', 'description' => '味道淡且甜度高 豆子風味平衡度好', 'process' =>'日曬'],
            ['picture' => asset('/images/product10.png'), 'price' => 600,'name' => '台灣有機阿里山日曬','place' => '台灣', 'description' =>  '阿里山莊園栽種 水果調性濃郁帶有些許茶味', 'process' =>'日曬'],
            ['picture' => asset('/images/product11.png'), 'price' => 240,'name' => '有機哥倫比亞水洗','place' => '哥倫比亞', 'description' => '柔順清爽不失厚實感 帶有熱帶水果香氣', 'process' => '水洗'],
            ['picture' => asset('/images/product12.png'), 'price' => 240,'name' => '有機衣索比亞水洗','place' => '衣索比亞', 'description' => '水洗處理後酸度更加明亮 後段有些許紅茶口感', 'process' =>'水洗'], 
            ['picture' => asset('/images/product13.png'), 'price' => 240,'name' => '瓜地馬拉水洗','place' => '瓜地馬拉', 'description' => '蜂蜜甜感明顯再加上一些榛果的香氣 乾淨且細膩' , 'process' => '水洗'],
            ['picture' => asset('/images/product14.png'), 'price' => 240,'name' => '哥倫比亞水洗','place' => '哥倫比亞', 'description' => '厚實堅果巧克力味 後段有些許烏梅汁味道', 'process' => '水洗'],
            ['picture' => asset('/images/product15.png'), 'price' => 240,'name' => '耶加雪夫日曬','place' => '耶加雪夫', 'description' => '口味淡發酵酒香 焦苦味更重且濃郁', 'process' => '日曬'],
            ['picture' => asset('/images/product16.png'), 'price' => 550,'name' => '安堤瓜火山咖啡豆','place' => '安堤瓜', 'description' => '風味包含奶油 香草 柑橘 焦糖', 'process' => '日曬'],
            ['picture' => asset('/images/product17.png'), 'price' => 500,'name' => '特調義式濃縮咖啡豆','place' => '義大利', 'description' => '風味包含核果 奶油 雪松 茴芹 麝香 巧克力', 'process' => '水洗'],
            ['picture' => asset('/images/product18.png'), 'price' => 500,'name' => '招牌義式濃縮咖啡豆','place' => '義大利', 'description' => '風味包含烤榛果 甜橙 黑巧克力', 'process' => '水洗'],
            ['picture' => asset('/images/product19.png'), 'price' => 200,'name' => '時尚經典-想喝就喝', 'place' => '卡塔摩納','description' => '卡塔摩納浸泡式咖啡 100%純研磨', 'process' => '水洗'],
            ['picture' => asset('/images/product20.png'), 'price' => 200,'name' => '時尚經典-美麗晨光','place' =>  '卡塔摩納', 'description' => '卡塔摩納濾泡式咖啡 採用充氮保鮮', 'process' =>  '水洗'],
            ['picture' => asset('/images/product21.png'), 'price' => 200,'name' => '時尚經典-午後快樂','place' =>  '卡塔摩納', 'description' => '卡塔摩納濾泡式咖啡 口感豐富 濃郁香醇', 'process' =>  '水洗'],
            ['picture' => asset('/images/product22.png'), 'price' =>350,'name' => '瓜地馬拉有機咖啡','place' => '瓜地馬拉', 'description' => '風味包含柑橘 覆盆子 奶油 紅糖 可可', 'process' => '日曬'],
            ['picture' => asset('/images/product23.png'), 'price' => 400,'name' => '哥倫比亞雨林聯盟認證','place' => '哥倫比亞', 'description' => '風味包含果香 蜂蜜 焦糖', 'process' => '日曬'], 
            ['picture' => asset('/images/product24.png'), 'price' => 600,'name' => '瓜地馬拉雨林聯盟認證','place' => '瓜地馬拉', 'description' => '風味包含柑橘 覆盆子 核果 紅糖 奶油 可可', 'process' => '日曬'],
            ['picture' => asset('/images/product25.png'), 'price' => 600,'name' => '衣索比亞雨林聯盟認證','place' => '衣索比亞', 'description' => '風味包含杏仁 雪松 花生 堅果 奶油 可可', 'process' => '日曬'],
            ['picture' => asset('/images/product26.png'), 'price' => 1500,'name' => '巴拿馬藝伎','place' => '巴拿馬', 'description' => '風味包含茉莉花 杏桃 柑橘 龍眼 紅糖', 'process' => '水洗'],
            ['picture' => asset('/images/product26.png'), 'price' => 800,'name' => '耶加雪夫日曬精品咖啡豆','place' => '耶加雪夫', 'description' => '風味包含奶油 榛果 熱帶水果 紅糖 巧克力', 'process' => '水洗']
        ];
        $infos = $info[$id];
        return view('shopcart', ['infos' => $infos]);
    }


    function update(Request $request){
        DB::table('products')->where(['id'=> $request -> input('id')])
            ->update(['number'=> $request -> input('number')]);
        return redirect('shoppingList');
    }

    
    function delete(Request $request){
        DB::table('products')->delete(['id'=> $request -> input('id')]);
        return redirect('shoppingList');
    }

    function create(Request $request){    
        DB::table('opinion')->insert([
            'name' => $request -> input('name'),
            'purpose' =>$request -> input('purpose')  , 
            'email' => $request -> input('email'),
            'address' => $request -> input('address'),
            'phone' => $request -> input('phone'),
            'main' => $request -> input('main'),  
            'content' => $request -> input('content'),
            ]);
            
        return redirect('contact');
    }

    
}