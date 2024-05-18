<?php
$mailto = $_POST[ "email" ];
$subject = "お問い合わせ";
$header = "From:123@abc.com";
$header .= "\n";
$header .= "Bcc:345@abc.com";
$message = "***************************************************" . "\n" . "\n" .
$_POST[ "name" ] . " 様、お問い合わせを頂き、誠にありがとうございます。" . "\n" .
"追って担当者よりご連絡させていただきます。" . "\n" . "\n" .
"こちらから送信したメールが迷惑フォルダに振り分けられてしまうケースがございます。" . "\n" .
"3日たっても返信がない場合はパソコンやスマートフォンの設定をご確認の上、恐れ入りますが、再度ご連絡を頂戴できればと存じます。" . "\n" . "\n" .
"***************************************************" . "\n" . "\n" .
"お客様からのお問い合わせを下記内容にて受け付けました" . "\n" . "\n" .
"お名前：" . $_POST[ "name" ] . "\n" .
"ふりがな：" . $_POST[ "huri" ] . "\n" .
"メールアドレス：" . $_POST[ "email" ] . "\n" .
"ご職業：" . $_POST[ "profession" ] . "\n" .
"件名：" . $_POST[ "subject" ] . "\n" .
"住所：〒" . $_POST[ "zip" ] . "\n" . $_POST[ "pref" ] . $_POST[ "address" ] . $_POST[ "other_address" ] . "\n" .
"電話番号：" . $_POST[ "phonenumber" ] . "\n" .
"法人様向け：" . $_POST[ "company_menu" ] . "\n" .
"お問い合わせ種別：" . $_POST[ "contact_types" ] . "\n" .
"お問い合せ内容：" . "\n" . $_POST[ "comment" ];

mb_internal_encoding( "UTF-8" );

// メール送信
$email = $_POST["email"];
if (!empty($email)) {
mb_send_mail( $mailto, $subject, $message, $header );
}
else {}

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="お問い合わせフォームテスト" />
<title> お問い合わせ | ご入力内容送信 </title>
<link href="../css/reset.css" rel="stylesheet" type="text/css">
</head>

<body>
<header>
  <div class="wrap">
      <h1>お問い合わせフォーム</h1>
  </div>
</header>
  <div class="wrap">
    <h1 class="mb_20 ta_center text_20"> お問い合わせありがとうございます。</h1>
    <p class="ta_center">ご入力内容を送信しました。<br>
      3日たっても返信がない場合はパソコンやスマートフォンの設定をご確認の上、恐れ入りますが再度ご連絡を頂戴できればと存じます。 </p>
  </div>
</body>
</html>
