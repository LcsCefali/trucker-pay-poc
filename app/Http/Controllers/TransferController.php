<?php

namespace App\Http\Controllers;

use App\Favored;
use App\Transfer;
use Redirect;
use Illuminate\Http\Request;

class TransferController extends Controller
{
    public function index(Request $request) {
        $s = $request->get('s');

        if ($request->has('s')) { // search
            $favoredsTruckerPay = Favored::where('isTruckPay', '=', 1)->where('name', 'like', "%$s%")->get();
            $otherFavoreds = Favored::where('isTruckPay', '=', 0)->where('name', 'like', "%$s%")->get();
        } else {
            $favoredsTruckerPay = Favored::where('isTruckPay', '=', 1)->get();
            $otherFavoreds = Favored::where('isTruckPay', '=', 0)->get();
        }

        return view('transfer.index', ['favoredsTruckerPay' => $favoredsTruckerPay, 'otherFavoreds' => $otherFavoreds, 's' => $s]);
    }

    public function find($id) {
        $favoredsTruckerPay = Favored::where([
            'isTruckPay' => 1
        ])->get();

        $otherFavoreds = Favored::where([
            'isTruckPay' => 0
        ])->get();

        $favoredFinded = Favored::findOrFail($id);

        return view('transfer.index', ['favoredFinded' => $favoredFinded, 'favoredsTruckerPay' => $favoredsTruckerPay, 'otherFavoreds' => $otherFavoreds]);
    }

    public function create(Request $request) {
        $bankName = $request->input('bankName');
        $document = $request->input('document');
        $name = $request->input('name');
        $agency = $request->input('agency');
        $account = $request->input('account');
        $accountType = $request->input('accountType');
        
        $date = $request->input('date');
        $date = explode('/', $date);
        if(isset($date[0])) {
            $date = $date[2] . '-' . $date[1] . '-' . $date[0];
        }

        $value = str_replace(",", ".", $request->input('value'));
        $value = str_replace(".", "", $value);

        $isTruckPay = $request->input('isTruckerPay');
        $isTruckPay = $isTruckPay == true ? true : false;
        $saveContact = $request->input('saveContact');

        if ($isTruckPay == true) {
            $newData = [
                'bankName' => $bankName,
                'document' => $document,
                'name' => $name,
                'date' => $date,
                'value' => $value,
                'isTruckPay' => $isTruckPay
            ];
        } else {
            $newData = [
                'bankName' => $bankName,
                'document' => $document,
                'name' => $name,
                'agency' => $agency,
                'account' => $account,
                'accountType' => $accountType,
                'value' => $value,
                'date' => $date,
                'value' => $value,
                'isTruckPay' => $isTruckPay
            ];
        }

        if ($saveContact == true) {
            $newFavored = new Favored;
            $newFavored = $newFavored->create([
                'bankName' => $bankName,
                'document' => $document,
                'name' => $name,
                'agency' => $agency,
                'account' => $account,
                'accountType' => $accountType,
                'date' => $date,
                'isTruckPay' => $isTruckPay
            ]);
        }

        $newTransfer = new Transfer;
        $newTransfer = $newTransfer->create([
            'bankName' => $bankName,
            'document' => $document,
            'name' => $name,
            'agency' => $agency,
            'account' => $account,
            'accountType' => $accountType,
            'value' => $value,
            'date' => $date,
            'isTruckPay' => $isTruckPay
        ]);

        return Redirect::to('/transfer');
    }

    public function update(Request $request, $id) {
        $bankName = $request->input('bankName');
        $document = $request->input('document');
        $name = $request->input('name');
        $agency = $request->input('agency');
        $account = $request->input('account');
        $accountType = $request->input('accountType');
        
        $date = $request->input('date');
        $date = explode('/', $date);
        if(count($date) === 3) {
            $date = $date[2] . '-' . $date[1] . '-' . $date[0];
        } else {
            $date = $request->input('date');
        }

        $value = str_replace(",", ".", $request->input('value'));
        $value = str_replace(".", "", $value);        $isTruckPay = $request->input('isTruckerPay');
        $isTruckPay = $isTruckPay == true ? true : false;
        $saveContact = $request->input('saveContact');

        if ($isTruckPay == true) {
            $newData = [
                'bankName' => $bankName,
                'document' => $document,
                'name' => $name,
                'date' => $date,
                'value' => $value,
                'isTruckPay' => $isTruckPay
            ];
        } else {
            $newData = [
                'bankName' => $bankName,
                'document' => $document,
                'name' => $name,
                'agency' => $agency,
                'account' => $account,
                'accountType' => $accountType,
                'value' => $value,
                'date' => $date,
                'value' => $value,
                'isTruckPay' => $isTruckPay
            ];
        }

        if ($saveContact == true) {
            $favoredFinded = Favored::findOrFail($id);
            $favoredFinded = $favoredFinded->update([
                'bankName' => $bankName,
                'document' => $document,
                'name' => $name,
                'agency' => $agency,
                'account' => $account,
                'accountType' => $accountType,
                'date' => $date,
                'isTruckPay' => $isTruckPay
            ]);
        }

        $newTransfer = new Transfer;
        $newTransfer = $newTransfer->create([
            'bankName' => $bankName,
            'document' => $document,
            'name' => $name,
            'agency' => $agency,
            'account' => $account,
            'accountType' => $accountType,
            'value' => $value,
            'date' => $date,
            'isTruckPay' => $isTruckPay
        ]);

        return Redirect::to('/transfer');
    }

    public function delete($id) {
        $favoredFinded = Favored::findOrFail($id);
        $favoredFinded->delete();

        return Redirect::to('/transfer');
    }
}
