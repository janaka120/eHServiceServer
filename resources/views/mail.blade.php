<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>email</title>
</head>
<body style="margin:0;padding:0">
<div style="text-align:center;background:#eee;padding:0;margin: 0 auto">
  <table width="700" style="widows:700px;background:#fff;margin:0 auto;padding:0;" cellpadding="0" cellspacing="0" border="0">
    <tbody>
      <tr>
        <td style="height:62px;text-align:left;padding:5px 0 0 10px"><img alt="Logo" title="Logo" style="display:block"  src="{{ asset('images/mail/logo1.png')}}" width="161" height="90" style="margin:0;padding:0"></td>
      </tr>
      <tr>
        <td style="height:122px;text-align:center;padding:0"><img src="{{asset('images/mail/banner1.jpg')}}" width="700" height="122" style="margin:0;padding:0"></td>
      </tr>
      <tr>
        <td style="text-align:left;vertical-align:middle; padding:20px 35px 30px"><p style="font-family:Arial, sans-serif;font-size:14px;color:#4c4c4c;margin:10px 0 20px 0;padding:0">Hello, {{$user_name}}</p>
          <p style="font-family:Arial, sans-serif;font-size:14px;color:#4c4c4c;margin:0;padding:0;line-height: 18px">You submit incident report details successfully. Below for your report reference.</p>
          <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:30px 0;padding:20px;background:#f5f5f5;text-align:left">
            <tbody>
              <tr>
                <td width="30%" style="font-family:Arial, sans-serif;font-size:14px;color:#4c4c4c;border-bottom:1px solid #dfdcdc;margin:0;padding: 12px 0;font-weight:bold;">Report ID </td>
                <td width="70%" style="font-family:Arial, sans-serif;font-size:14px;color:#4c4c4c;border-bottom:1px solid #dfdcdc;margin:0;padding: 12px 0;">{{$report_id}} </td>
              </tr>
              <tr>
                <td width="30%" style="font-family:Arial, sans-serif;font-size:14px;color:#4c4c4c;border-bottom:1px solid #dfdcdc;margin:0;padding: 12px 0;font-weight:bold;">Report Name</td>
                <td width="70%" style="font-family:Arial, sans-serif;font-size:14px;color:#4c4c4c;border-bottom:1px solid #dfdcdc;margin:0;padding: 12px 0;">{{$report_name}}</td>
              </tr>
            </tbody>
          </table>
          <p style="font-family:Arial, sans-serif;font-size:18px;color:#4c4c4c;margin:0;padding:0;line-height: 16px">In case of any question or a feedback, do let us know at <a href="mailto:support@ehealth.com" target="_blank" style="color:#333;text-decoration:none">support@ehealth.com</a></p>
          <p style="font-family:Arial, sans-serif;font-size:13px;color:#8f49a1;margin:12px 0 0 0;padding:0;line-height: 18px;text-align:right;font-weight:bold">Team eHealth<span style="font-size:11px;color:#919191;display:block"><a href="http://www.ehealth.com" target="_blank" style="color:#919191;text-decoration:none">www.ehealth.com</a></span></p></td>
      </tr>
      <tr>
        <td><table border="0" cellspacing="0" cellpadding="0" style="width:100%;margin:0 auto">
            <tr>
              <td colspan="2" style="border-bottom:1px dashed #ccc;border-top:1px dashed #ccc;padding:10px 0 0 0"><p style="font-family:Arial, Helvetica, sans-serif;font-size:12px;line-height:18px;color:#333;padding:0;margin:0 0 10px 0;text-align:center"><strong style="color:#8f49a1">ehealth.com</strong><br />
                  <span style="color:#8f49a1;font-weight:bold;padding-right:5px;">T:</span>+61 3 9654 5724&nbsp;&nbsp;&nbsp;<span style="color:#904ba1;font-weight:bold;padding-right:5px;">E:</span><a href="mailto:support@ehealth.com" target="_blank" style="color:#333;text-decoration:none">support@ehealth.com</a>&nbsp;&nbsp;&nbsp;<span style="color:#8f49a1;font-weight:bold;padding-right:5px;">W:</span><a href="http://www.ehealth.com" target="_blank" style="color:#333;text-decoration:none">www.ehealth.com</a></p></td>
            </tr>
            <tr>
              <td width="52%" style="font-family:Arial, Helvetica, sans-serif;font-size:12px;line-height:15px;color:#fff;padding:0;margin:0;text-align:left;vertical-align:top;background:#904ba1;height:88px"><p style="font-family:Arial, Helvetica, sans-serif;font-size:12px;line-height:15px;color:#fff;padding:22px 20px 10px;margin:0;text-align:left;">If you no longer wish to receive these emails, please reply to this message with "<strong style="font-weight:bold">Unsubscribe</strong>" in the subject line or simply click on the following link: <a href="#" style="color:#fff">Link</a> </p></td>
              <td width="48%" style="padding:0;vertical-align:top;background:#904ba1;text-align:right"><img src="{{asset('images/mail/logo-f1.png')}}" style="margin:15px 14px 0 0;padding:0;"></td>
            </tr>
          </table></td>
      </tr>
    </tbody>
  </table>
</div>
</body>
</html>