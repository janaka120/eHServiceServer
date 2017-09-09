<?php 
	namespace App\Services;

	use Illuminate\Foundation\Http\response;
	use App\Repositories\FormRepository;
	use App\Services\MailService;
	
	class FormService{
 	 	
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

	}
?>