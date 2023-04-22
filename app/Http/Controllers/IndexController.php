<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\TData;

class IndexController extends Controller {
	public function actionIndex(Request $request) {
		if($request->isMethod('post')) {
			$number = $request->input('txtNumber');
			$result = 0;

			for($i = 1; $i <= $number; $i++) {
				$result += $i;
			}

			$tData = new TData();

			$tData->idData = uniqid();
			$tData->requestData = $number;
			$tData->responseData = $result;

			$tData->save();

			return response()->json(['result' => $result]);
		}

		return view('index/index');
	}
}
?>