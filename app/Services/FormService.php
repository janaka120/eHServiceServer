<?php 
namespace App\Services;

use Illuminate\Support\Facades\Storage;

use Illuminate\Foundation\Http\response;
use App\Repositories\FormRepository;
use App\Services\MailService;
use PDF;

class FormService{
	 
	const APPBASEURL =  'http://localhost:8090/';
 	/*
 		name => form_name,
 		content => form_content
	*/
	public static function createForm($name, $content) { 

		$form = FormRepository::saveForm($name, $content);
		if($form->id) {
			$data = [
				'id' => $form->id,
				'name' => $form->name,
				'updated_at' => $form->updated_at->toDateString()
			];

			$content_array = $content;
			if(array_key_exists('email', $content_array) && isset($content_array['email'])) {
				
				$user_email = $content_array['email'];
				$mailInfo = [
					'user_name' => $content_array['name'],
					'report_id' => $form->id,
					'report_name' => $form->name,
					'mail_subject' => "Report submit",
					'mail_from' => "admin@eService.com",
					'mail_to' => $user_email
				];

				MailService::sendReportSubmitSuccess($mailInfo);
			}

			return response()->json(['success' => true, 'data' => $data]);
		}else{
			return response()->json(['success' => false, 'data' => null]);
		}  
	}

	public static function getFormList() {
		$forms = FormRepository::getFormList();

		return response()->json(['success' => true, 'data' => $forms]);
	}

	public static function updateForm($id, $constant) {
		$form = FormRepository::updateForm($id, $content);
		if(!$form) {
			return response()->json(['success' => false, 'data' => null]);
		}

		return response()->json(['success' => true, 'data' => $form]);
	}

	public static function downloadFormPDF($id) {
		$form = FormRepository::findFormByID($id);
		if(!$form) {
			return response()->json(['success' => false, 'data' => null]);
		}
		
		$pdfName = str_random(10).'_'.$form->id.'.pdf';
		$pdf = PDF::loadView('pdf.formPdf', ['content' => json_decode($form->content)])
			->save('/home/janaka/my_projects/HService/hServiceServer/storage/app/public/report_storage/'.$pdfName);

		if(!$pdf) {
			return response()->json(['success' => false, 'data' => null]);	
		}

		$pdfUrl = self::APPBASEURL.'storage/report_storage/'.$pdfName;
		
		return response()->json(['success' => true, 'data' => $pdfUrl]);
	}

}
?>