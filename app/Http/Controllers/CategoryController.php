<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;
use Response;
use Datatables;
use Auth;
use Session;
use App\Http\Requests;
use App\Helpers\ConvertString;

class CategoryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Categories $categories)
    {
        $this->_categories = $categories;
        parent::__construct();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Auth::user()->hasRole('viewCategoryList')) {
            abort('403');
        }
        return view('category.list');
//        return view('frontend.category.vali_keo');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function frontentDetail($alias)
    {
        $cates = Categories::all();
        $current_cate = Categories::where('alias',$alias)->get()->first();
        if($current_cate == null){
            abort(404);
        }
        $products = $this->_categories->productOfCate($current_cate->id);
        $productsHigh = $this->_categories->productHighOfCate($current_cate->id);
        $productsBestSeller = $this->_categories->productBestSellerOfCate($current_cate->id);
        return view('frontend.category.detail',compact('products','productsHigh','productsBestSeller','cates','current_cate'));
    }
    /**
     * get list users to datatables
     *
     * @param
     *            Request
     * @return Response
     */
    public function getCategoriesJson()
    {
        if (! Auth::user()->hasRole('viewCategoryList')) {
            abort('403');
        }
        $cate = Categories::select('id','name', 'image', 'created_at','updated_at');
        $buttons = array();
        return Datatables::of($cate)
            ->editColumn('count', function ($cate) {
                $count = $this->_categories->countProductInCate($cate->id);
                return $count.' sản phẩm';
            })
            ->addColumn('action', function ($cate) {
                $buttons = array();
                if (Auth::user()->hasRole('editCategory')) {
                    $buttons[] = [
                        'href' => 'edit/' . e($cate->id),
                        'icon' => 'edit',
                        'type' => 'primary',
                        'label' => trans('system.edit')
                    ];
                }
                if (Auth::user()->hasRole('deleteCategory')) {
                    $formId = 'delete-category-' . e($cate->id);
                    $buttons[] = [
                        'href' => '#' . e($cate->id),
                        'icon' => 'remove',
                        'type' => 'danger',
                        'delete' => e($cate->id),
                        'id' => $formId,
                        'route' => 'category-del',
                        'label' => trans('system.del'),
                        'htmlOptions' => [
                            "onclick" => "confirmDelete('$formId')"
                        ]
                    ];
                }

                $action = view('partial.action', compact('buttons'))->render();
                return (string)$action;
            })
            ->make(true);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Auth::user()->hasRole('addCategory')) {
            abort('403');
        }
        return view('category.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request, ConvertString $convertString)
    {
        if (! Auth::user()->hasRole('addCategory')) {
            abort('403');
        }
        $cate = $request->all();
        $time = time();
        $trimSpace = str_replace(" ", "_", strtolower($convertString->convert_vi_to_en($cate['name'])));
        $alias = str_replace(" ", "-", strtolower($convertString->convert_vi_to_en($cate['name'])));
        $img_type = $request->file('image')->getClientOriginalExtension();
        $image = \Image::make($request->file('image')->getRealPath());
        $imageName = "img_" . $trimSpace . "_" . $time;
        $image->fit(600, 600)->save(public_path('images/categories/'. $imageName . '.' . $img_type));
        $cate['image'] = $imageName.".".$img_type;
        $cate['alias'] = $alias;
        Categories::create($cate);
        return redirect()->route('category-list');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Auth::user()->hasRole('editCategory')) {
            abort('403');
        }
        $cate = Categories::find($id);

        return view('category.edit', compact('cate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ConvertString $convertString, Request $request, $id)
    {
        if (! Auth::user()->hasRole('editCategory')) {
            abort('403');
        }
        $cateUpdate = $request->all();
        $cate = Categories::find($id);

        $cate->name = $cateUpdate['name'];
        $time = time();
        $trimSpace = str_replace(" ", "_", strtolower($convertString->convert_vi_to_en($cateUpdate['name'])));
        $alias = str_replace(" ", "-", strtolower($convertString->convert_vi_to_en($cateUpdate['name'])));
        $imageName = "img_" . $trimSpace . "_" . $time;
        if(isset($cateUpdate['image'])){
            $img_type = $request->file('image')->getClientOriginalExtension();
            $image = \Image::make($request->file('image')->getRealPath());
            $image->fit(600, 600)->save(public_path('images/categories/'. $imageName . '.' . $img_type));
            \File::delete(public_path('images/categories/' . $cate->image));
            $cate->image = $imageName. "." . $img_type;
        }
        $cate->alias = $alias;
//        $cate->description = $cateUpdate['description'];
        $cate->save();
        return redirect()->route('category-list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        if (! Auth::user()->hasRole('deleteCategory')) {
            abort('403');
        }
        // find result by id and delete
        $cate=Categories::find($id);
        $check = $this->_categories->productOfCate($id);
        if(count($check)>0){
            \Session::flash('error','Danh mục hiện đang có sản phẩm, vui lòng xoá sản phẩm trước');
        }else{
            \File::delete(public_path('images/categories/' . $cate->image_url));
            $cate->delete();
        }
        // Redirecting to index() method
        return redirect()->route('category-list');
    }
}
