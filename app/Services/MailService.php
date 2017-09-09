<?php
	namespace App\Services;

	use App\Mail\Mailtrap;
	use Illuminate\Support\Facades\Mail;

	class MailService{

		static function sendReportSubmitSuccess($mailInfo) {
			Mail::to($mailInfo['mail_to'])->send(new Mailtrap($mailInfo));
		}
	}
?>