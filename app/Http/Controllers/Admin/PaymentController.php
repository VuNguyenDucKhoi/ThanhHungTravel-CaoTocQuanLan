<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Invoice;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Services\Payment\PaymentService;

class PaymentController extends Controller
{
    protected $paymentService;

    public function __construct(PaymentService $paymentService)
    {
        $this->paymentService = $paymentService;
    }

    public function index()
    {
        return view('backend.components.payment.payment',[
            'title'=> 'Danh Sách Đơn Hàng',
            'payments' => $this->paymentService->getAll(),
        ]);

    }
    public function view($id){
        $invoices = $this->paymentService->getChuyenForInvoice($id);

        if($invoices->customers->address != null){
            return view('backend.components.payment.ivoicedetail',[
                'title' => 'Chi Tiết Đơn Hàng: '.$invoices->chuyens->tenchuyen,
                'invoices' => $invoices
            ]);
        }
        else{
            return view('backend.components.payment.ivoicehddetail',[
                'title' => 'Chi Tiết Đơn Hàng: '.$invoices->chuyens->tenchuyen,
                'invoices' => $invoices
            ]);
        }


    }
    public function destroy(Request $request): JsonResponse
    {
        $result = $this->paymentService->destroy($request);
        if($result){
            return response()->json([
                'error' => false,
                'message' => 'Xóa thành công!'
            ]);
        }
        return response()->json([
            'error' => true
        ]);
    }

}
