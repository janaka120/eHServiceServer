<?php
namespace App\Http\Controllers;

use App\Form;
use App\Mail\Mailtrap;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Services\FormService;

class FormController extends Controller{
	
	public function postForm(Request $request) {
		$data = [
			'name' => $request->input('name'),
			'content' => $request->input('content')
		];
		return FormService::createForm($request->input('name'), $request->input('content'));
	}

	public function getForms() {
		return FormService::getFormList();
	}

	// update form
	public function putForm(Request $request, $id) {
		return FormService::updateForm($id, $request->input('content'));
	}

	public function deleteForm($id) {
		$form = Form::find($id);
		if(!$form) {
			return response()->json([], 404);
		}
		$form->delete();
		return response()->json(["message" => "Successfully delete."], 200);
	}

	public function downloadForm($id) {
		return FormService::downloadFormPDF($id);
	}
}