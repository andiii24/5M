<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::all();
        return view('front.portfolio', compact('portfolios'));
    }
    public function single($id)
    {
        $portfolio = Portfolio::find($id);
        return view('front.single', compact('portfolio'));
    }
    public function admin_index()
    {
        $portfolios = Portfolio::all();
        return view('admin.portfolio.index', compact('portfolios'));
    }
    public function create()
    {
        $category = Category::all();
        return view('admin.portfolio.create', compact('category'));
    }
    public function add(Request $request)
    {
        // dd($request);
        $request->validate([
            'name' => 'required | max:255',
            'category_id' => 'required | numeric',
            'location' => 'required',
            'url' => 'max:255',
            'bg' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $portfolio = new Portfolio;

        $images = [];
        if ($request->hasfile('images')) {
            foreach ($request->file('images') as $file) {
                $imageName = uniqid() . '.' . $file->getClientOriginalName();
                $image = Image::make($file);
                $watermark = Image::make(public_path('upload/Property/watermark.png'));
                $watermark->opacity(50);
                $image->insert($watermark, 'bottom-right', 10, 10);
                $image->save(public_path('upload/Property/' . $imageName)); // Save the image after inserting the watermark
                $images[] = $imageName;
            }
        } else {
            $images = "default.jpg";
        }
        if ($request->hasFile('bg')) {
            $file = $request->file('bg');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            $image = Image::make($file);
            $watermark = Image::make(public_path('upload/Property/watermark.png'));
            $watermark->opacity(50);
            $image->insert($watermark, 'bottom-right', 10, 10);
            $image->save(public_path('upload/Property/background/') . $filename);

            $portfolio->bg = $filename;
        }

        $portfolio->images = $images;

        $portfolio->name = $request->input('name');
        $portfolio->url = $request->input('url');
        $portfolio->category_id = $request->input('category_id');
        $portfolio->location = $request->input('location');
        $portfolio->save();
        return redirect('/portfolios')->with('status', 'Portfolio added Successfully!');

    }
    public function edit($id)
    {
        $category = Category::all();
        $portfolios = Portfolio::find($id);
        return view('admin.portfolio.update', compact('category', 'portfolios'));
    }
    public function update(Request $request, $id)
    {
        // dd($request);
        $request->validate([
            'name' => 'required | max:255',
            'category_id' => 'required | numeric',
            'location' => 'required',
            'bg' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $portfolio = Portfolio::find($id);
        $images = [];
        if ($request->hasfile('images')) {
            // Delete existing images
            $existingImages = $portfolio->images;
            if (is_array($existingImages) && count($existingImages) > 0) {
                foreach ($existingImages as $existingImage) {
                    File::delete(public_path('upload/Property/' . $existingImage));
                }
            }

            // Upload new images
            foreach ($request->file('images') as $file) {
                $imageName = uniqid() . '.' . $file->getClientOriginalName();
                $image = Image::make($file);
                $watermark = Image::make(public_path('upload/Property/watermark.png'));
                $watermark->opacity(50);
                $image->insert($watermark, 'bottom-right', 10, 10);
                $image->save(public_path('upload/Property/' . $imageName)); // Save the image after inserting the watermark
                $images[] = $imageName;
            }
        } else {
            $images = "default.jpg";
        }

        if ($request->hasFile('bg')) {

            $path = 'upload/Property/background/' . $portfolio->bg;
            if (File::exists($path)) {
                File::delete($path);
            }

            $file = $request->file('bg');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            $image = Image::make($file);
            $watermark = Image::make(public_path('upload/Property/watermark.png'));
            $watermark->opacity(50);
            $image->insert($watermark, 'bottom-right', 10, 10);
            $image->save(public_path('upload/Property/background/') . $filename);

            $portfolio->bg = $filename;
        }

        $portfolio->images = $images;

        $portfolio->name = $request->input('name');
        $portfolio->url = $request->input('url');
        $portfolio->category_id = $request->input('category_id');
        $portfolio->location = $request->input('location');
        $portfolio->save();
        return redirect('/portfolios')->with('status', 'Portfolio Updated Successfully!');

    }
}
