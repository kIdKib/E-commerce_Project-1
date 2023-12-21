<?php

namespace App\Http\Controllers\frontend;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontController extends Controller
{
    private function cart() {
        $cart = Cart::get();
        return $cart;
    }

    public function mainpage()
    {
        $cart = $this->cart();
        $category = category::where('id','>=','1')->take(3)->get();
        $product = Product::where('id','>=','251')->take(15)->get();

        $homePage = true;

        return view('newLayouts.pages.navbarPages.index' , compact('category', 'product', 'homePage','cart'));
    }

    public function about()
    {
        $cart = $this->cart();
        return view('newLayouts.pages.navbarPages.aboutus', compact('cart') );
    }

    public function contact()
    {
        $cart = $this->cart();
        return view('newLayouts.pages.navbarPages.contact', compact('cart') );
    }


    public function boutique(Request $request)
    {
        $cart = $this->cart();
        $categories = Category::where('status','0')->get();
        $products = Product::where('id','>=','251')->take(15)->paginate(12);


        return view('newLayouts.pages.navbarPages.boutique', compact('categories', 'products', 'cart'));
    }


    public function boutiqueSearch(Request $request)
    {
      $search_product = $request->product_name;
        if($search_product != "")
        {
         return redirect('boutique/search/'.$search_product);

        }
        else
        {
            return redirect()->back();
        }
    }



    public function boutiqueResult($slug)
    {

        $products = Product::where('name',"LIKE","%$slug%")->paginate(12);
        if($products)
        {
            $categories = Category::get();
            return view('newLayouts.pages.navbarPages.boutique', compact('categories', 'products'));
        }
        else
        {
            return redirect('/boutique')->with('status',"No Such Product Found");
        }



    }




















    public function viewCategory($slug)
    {
        if(Category::where('slug',$slug)->exists())
        {
            $category = Category::where('slug',$slug)->first();
            $product = Product::where('cate_id',$category->id)->where('status','0')->get();
            return view('frontend.products.index', compact('category','product'));
        }
        else
        {
            return redirect('/')->with('status',"Slug Doesn't exits");
        }
    }



    public function productView($cate_slug  ,$prod_slug )
    {
        if(Category::where('slug',$cate_slug)->exists())
        {
            if(Product::where('slug',$prod_slug)->exists())
            {
                $product = Product::where('slug',$prod_slug)->first();
                return view('frontend.products.view', compact('product'));
            }
            else
            {
                return redirect('/')->with('status',"No Such Product Found");
            }
        }
        else
        {
            return redirect('/')->with('status',"No such Category found");
        }
    }



    public function eachProdView($prod_slug)
    {


            if(Product::where('slug',$prod_slug)->exists())
            {
                $product = Product::where('slug',$prod_slug)->first();
                return view('frontend.products.view', compact('product'));
            }
            else
            {
                return redirect('/')->with('status',"No Such Product Found");
            }
    }



    public function searchProducts(Request $request)
    {
        $search_product = $request->product_name;
        if($search_product != "")
        {
            $product = Product::where('name',"LIKE","%$search_product%")->first();
            if($product)
            {
                return redirect('view-category/'.$product->category->slug.'/'.$product->slug);
            }
            else
            {
                return redirect()->back()->with("status","No Products Matched your Search");
            }
        }
        else
        {
            return redirect()->back();
        }
    }
}

