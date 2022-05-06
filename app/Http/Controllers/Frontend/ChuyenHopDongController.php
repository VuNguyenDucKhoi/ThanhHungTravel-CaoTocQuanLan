<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Services\Backend\TauService;
use App\Http\Services\Backend\TuyenService;
use Illuminate\Http\Request;
use App\Http\Services\Slider\SliderAdminService;
use App\Http\Services\Frontend\ChuyenService;
use App\Http\Services\Blog\BlogService;

class ChuyenHopDongController extends Controller
{
    protected $sliderAdminService;
    protected $chuyenService;
    protected $tuyenService;
    protected $tauService;

    public function __construct(TauService $tauService, SliderAdminService $sliderAdminService, ChuyenService $chuyenService, TuyenService $tuyenService)
    {
        $this->sliderAdminService = $sliderAdminService;
        $this->chuyenService = $chuyenService;
        $this->tuyenService = $tuyenService;
        $this->tauService = $tauService;
    }

    public function index(Request $request){
        return view('frontend.trips.hopdong',[
            'title' => 'Chuyến Hợp Đồng',
            'sliders' => $this->sliderAdminService->show(),
            'taus' => $this->tauService->getAll(),
            'tuyens' => $this->tuyenService->gettuyenhd(),
            'chuyenhds' => $this->chuyenService->getChuyenHD($request),
        ]);
    }
}
