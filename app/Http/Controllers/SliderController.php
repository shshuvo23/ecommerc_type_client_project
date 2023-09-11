<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        return view('admin.Slider.addSlider');
    }

    public function createSlider(Request $request)
    {
        Slider::addSlider($request);
        return redirect('/slider-list');
    }

    public function sliderList()
    {
        return view('admin.slider.sliderList', [
            'sliders' => Slider::orderBy('id', 'desc')->get(),
        ]);
    }

    public function delete($id)
    {
        Slider::deleteSlider($id);
        return redirect('/slider/list');
    }
}
