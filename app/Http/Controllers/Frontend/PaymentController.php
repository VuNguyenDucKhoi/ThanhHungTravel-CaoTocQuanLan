<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\Frontend\ChuyenService;
use App\Http\Services\Payment\PaymentService;
use Illuminate\Support\Facades\Session;

class PaymentController extends Controller
{
    protected $paymentService;

    public function __construct(PaymentService $paymentService)
    {
        $this->paymentService = $paymentService;
    }

    public function datve(Request $request){
        $result = $this->paymentService->create($request);
        if($result === false){
            return redirect()->back();
        }
        return  redirect('/dat-ve/thong-tin');
    }

    public function show(Request $request){

        $chuyens = $this->paymentService->getChuyen();
        return view('frontend.payment.payment', [
            'title' => 'Đặt Vé',
            'chuyens' => $chuyens,
            'pays' => Session::get('pays', ),
            'ngays' => Session::get('ngays'),
        ]);
    }

    public function addDatVe(Request $request){
        $result = $this->paymentService->addDatVe($request);
        $chuyens = $this->paymentService->getChuyen();
        //$invoices = Session::get('invoices');

        return view('frontend.payment.payment2',[
            'title' => 'Thanh toán',
            'chuyens' => $chuyens,
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'address' => $request->input('address'),
            'country' => $request->input('country'),
            'email' => $request->input('email'),
            'ngays' => Session::get('ngays'),
            'pays' => Session::get('pays', ),
            'invoices' => Session::get('invoices'),
        ]);
    }

    public function hoanThanh(Request $request){
        $chuyens = $this->paymentService->getChuyen();
        return view('frontend.payment.payment3',[
            'title' => 'Đặt vé thành công',
            'chuyens' => $chuyens,
            'ngays' => Session::get('ngays'),
            'pays' => Session::get('pays'),
        ]);
    }


    public function datvehd(Request $request){
        $loai = $request->input('loai');
        $tau = $request->input('idtau');
        $tuyen = $request->input('idtuyen');

        $chuyenpays = $this->paymentService->getChuyenpays($tau,$loai,$tuyen);

        $result = $this->paymentService->createhd($request, $chuyenpays);
        if($result === false){
            return redirect()->back();
        }
        return view('frontend.payment.paymenthd3',[
            'title' => 'Đặt vé thành công',
            'chuyens' => $chuyenpays,
            'ngay' => $request->input('date')
        ]);
    }


}
