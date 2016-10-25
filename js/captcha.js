function submit_form()
{
	var captcha_code = $("#captcha_code").val();
	if( captcha_code == "" )
	{
		$(".captcha-err").text("Please enter captcha code");
		$("#captcha_code").focus();
	}
	else
	{
		$.ajax({
			method: "POST",
			url: "thank_you.php",
			data: { captcha: captcha_code}
		})
		.done(function( data ) {
			if( data == 1 )
			{
				$("#captcha_code").val('');
				refresh_captcha();
				window.location.href = "thank_you.php";
			}
			else
			{
				$(".captcha-err").text("Invalid captcha! Please try again.");
				$("#captcha_code").focus();
			}
		});
	}
}
function refresh_captcha()
{
	return document.getElementById("captcha_code").value="",document.getElementById("captcha_code").focus(),document.images['captchaimg'].src = document.images['captchaimg'].src.substring(0,document.images['captchaimg'].src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}