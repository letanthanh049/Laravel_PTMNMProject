<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Http\Resources\Product as ProductResource;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product=Product::with('ProductDetail')->get();
        $arr = [
        'status' => true,
        'message' => "Danh sách sản phẩm",
        'data'=>$product,
        ];
        return response()->json($arr, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        if(Product::find($request->idsanpham)){
            $arr = [
                'status' => false,
                'message'=>"Mã sản phẩm đã tồn tại",
            ];
            return response()->json($arr, 400);
        }
        $product = Product::create([
            'idsanpham'=>$request->idsanpham, 
            'idkhuyenmai'=>$request->idkhuyenmai,
            'idnhacungcap'=>$request->idnhacungcap,
            'tensanpham'=>$request->tensanpham,
            'soluong'=>$request->soluong,
            'dongia'=>$request->dongia,
        ]);   
        $image=$request->file('anh')->store('images','public');
        $productdetail=$product->ProductDetail()->create([
            'idsanpham'=>$request->idsanpham,
            'idthuonghieu'=>$request->idthuonghieu,
            'idmau'=>$request->idmau,
            'idloaimay'=>$request->idloaimay,
            'idchatlieu'=>$request->idchatlieu,
            'gioitinh'=>$request->gioitinh,
            'xuatxu'=>$request->xuatxu,
            'mota'=>$request->mota,
            'anh'=>$image,
        ]);
        $arr = [
            'status' => true,
            'message'=>"Sản phẩm được thêm thành công",
            'data'=> $product,
            'data'=> $productdetail,
        ];
        return response()->json($arr, 201);
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request,$id)
    {
        $product = Product::with('ProductDetail')->find($id);
            $product->idkhuyenmai=$request->idkhuyenmai;
            $product->idnhacungcap=$request->idnhacungcap;
            $product->tensanpham=$request->tensanpham;
            $product->soluong=$request->soluong;
            $product->dongia=$request->dongia;
            $product->save();    
        if (is_null($product)) {
            $arr = [
            'success' => false,
            'message' => 'Không có sản phẩm này',
            ];
            return response()->json($arr, 400);
        };
        if($request->file('anh')){
                $destination=public_path('product').'/'.$product->file('anh');
                if(File::exists($destination)){
                    File::delete($destination);
                }
        }
        $image=$request->file('anh')->store('images','public');
        $product->ProductDetail()->update([
            'idthuonghieu'=>$request->idthuonghieu,
            'idmau'=>$request->idmau,
            'idloaimay'=>$request->idloaimay,
            'idchatlieu'=>$request->idchatlieu,
            'gioitinh'=>$request->gioitinh,
            'xuatxu'=>$request->xuatxu,
            'mota'=>$request->mota,
            'anh'=>$image
        ]);
        $arr = [
           'status' => true,
           'message' => 'Cập nhật thành công',
        ];
        return response()->json($arr, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function Hide($id)
    {
        $input =Product::find($id);
        if (!$input) {
            $arr = [
            'success' => false,
            'message' => 'Không có sản phẩm này',
            ];
            return response()->json($arr, 400);
        } 
        $input->visible='0';
        $input->save();
        $arr = [
           'status' => true,
           'message' => 'Sản phẩm này đã được ẩn thành công',
        ];
        return response()->json($arr, 200);
    }
}