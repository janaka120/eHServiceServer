<?php 
	nameSpace App\Repositories;
	
	use App\Form;

	class FormRepository {
 		public static function saveForm($name, $content) {
 			$form = new Form();
			$form->name = $name;
			$form->content = json_encode($content);
			$form->save();

			return $form;
 		}

 		public static function getFormList() {
 			$forms = Form::all();
 			
			return $forms;
 		}

 		public static function findFormByID	($id) {
 			$form = Form::find($id);

 			return $form;
 		}

 		public static function updateForm($id, $content) {
 			$form = self::findFormByID($id);
			if(!$form) {
				return null;
			}

			$form->content = $content;
			$form->update();
			
			return $form;
 		}
	}
?>