<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Brand;
use App\Category;
use App\Subcategory;

class PageController extends Controller
{
  public function home($value='')
  {
    $items = Item::all();
    $brands= Brand::all();
    
    // dd($items);
    return view('frontend.home',compact('items','brands'));
  }

  public function itemdetail($id)
  {
    $items = Item::find($id);
    return view('frontend.detail',compact('items'));
  }

  public function promotions($value='')
  {
    return view('frontend.promotions');
  }

  public function filteritems($value='')
  {
    return view('frontend.filteritems');
  }

  public function shoppingcart($value='')
  {
    return view('frontend.shoppingcart');
  }

  public function itemsbybrand($id)
  {
    $brand=Brand::find($id);
    return view('frontend.itemsbybrand',compact('brand'));
  }

  public function login($value='')
  {
    $categories=Category::all();
    $subcategories=Subcategory::all();
    return view('frontend.login',compact('categories','subcategories'));
  }

  public function register($value='')
  {
    $categories=Category::all();
    $subcategories=Subcategory::all();
    return view('frontend.register',compact('categories','subcategories'));
  }
  
}
