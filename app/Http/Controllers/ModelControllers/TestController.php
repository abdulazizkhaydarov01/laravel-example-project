<?php

namespace App\Http\Controllers\ModelControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\References\Ref_Products;
use App\Models\References\Ref_Contractors;
use App\Models\Documents\Doc_ReceiptInvoice;
use App\Models\Document_Tables\DocTableReceiptInvoicesProducts;

class TestController extends Controller
{
    public function PostProduct(Request $request)
    {
        $_Link = bin2hex(random_bytes(16));

        $item = new Ref_Products;
        $item->_Link = $_Link;
        $item->_Name = $request->_Name;
        $item->_Code = '000000001';
        $result = $item->save();

        return $result;
    }

    public function PostContractor(Request $request)
    {
        $_Link = bin2hex(random_bytes(16));

        $item = new Ref_Contractors;
        $item->_Link = $_Link;
        $item->_Name = $request->_Name;
        $item->_Code = '000000001';
        $result = $item->save();

        return $result;
    }

    public function PostReceiptInvoice(Request $request)
    {

        // Document
        $_Link = bin2hex(random_bytes(16));

        $item = new Doc_ReceiptInvoice;
        $item->_Link = $_Link;
        $item->_Code = '000000001';
        $item->_Date = date('Y-m-d H:i:s', time());
        $item->Ref_Contractor_Link = $request->Ref_Contractor_Link;
        $result = $item->save();

        // Table {Products} of document    
        $item = new DocTableReceiptInvoicesProducts;
        $item->Doc_ReceiptInvoice_Link = $_Link;
        $item->Ref_Product_Link = $request->Ref_Product_Link;
        $item->Quantity = 100;
        $item->Price = 20;
        $item->Amount = 2000;
        $result = $item->save();

        return $result;

    }
}
