<?php

function convert_char( $target ) {
  $target = stripslashes( $target );
  $target = htmlspecialchars( $target, ENT_QUOTES );
  return $target;
}

$name = convert_char( $_POST[ "name" ] );
$huri = convert_char( $_POST[ "huri" ] );
$email = convert_char( $_POST[ "email" ] );
$profession = convert_char( $_POST[ "profession" ] );
$subject = convert_char( $_POST[ "subject" ] );
$zip = convert_char( $_POST[ "zip" ] );
$pref = convert_char( $_POST[ "pref" ] );
$address = convert_char( $_POST[ "address" ] );
$other_address = convert_char( $_POST[ "other_address" ] );
$phonenumber = convert_char( $_POST[ "phonenumber" ] );
$company_menu = convert_char( $_POST[ "company_menu" ] );
$comment = convert_char( $_POST[ "comment" ] );

if (isset($_POST['contact_type']) && is_array($_POST['contact_type'])) {
  $contact_types = implode("、", $_POST["contact_type"]);
}
$contact_types = convert_char( $contact_types );

$comment = str_replace( "\r\n", "\n", $comment );
$comment = str_replace( "\r", "\n", $comment );
$comment_conv = str_replace( "\n", "<br>", $comment );
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="お問い合わせフォームテスト" />
<title> お問い合わせ | 入力内容確認</title>
<link href="../css/reset.css" rel="stylesheet" type="text/css">
</head>

<body>
<header>
  <div class="wrap">
      <h1>お問い合わせフォーム</h1>
  </div>
</header>
  <div class="wrap">
    <h1 class="heading_a mb_30">ご入力内容確認</h1>
  </div>
  <div class="wrap">
    <form action="complete.php" method="post">
      <div class="sp100 of_x">
        <table id="contactform_table" class="width81">
          <tr>
            <th>お名前</th>
            <td><?php print $name; ?></td>
          </tr>
          <tr>
            <th>ふりがな</th>
            <td><?php print $huri; ?></td>
          </tr>
          <tr>
            <th>メールアドレス</th>
            <td><?php print $email; ?></td>
          </tr>
          <tr>
            <th>ご職業</th>
            <td><?php print $profession; ?></td>
          </tr>
          <tr>
            <th>件名</th>
            <td><?php print $subject; ?></td>
          </tr>
          <tr>
            <th>住所</th>
            <td><?php print $zip; ?><br>
              <br>
              <?php print $pref; ?> <br>
              <?php print $address; ?><br>
              <br>
              <?php print $other_address; ?><br></td>
          </tr>
          <tr>
            <th>電話番号</th>
            <td><?php print $phonenumber; ?></td>
          </tr>
          <tr>
            <th>法人様向け</th>
            <td><?php print $company_menu; ?></td>
          </tr>
          <tr>
            <th>お問い合わせ種別</th>
            <td><?php print $contact_types; ?></td>
          </tr>
          <tr>
            <th>お問い合わせ内容</th>
            <td><?php print $comment_conv; ?></td>
          </tr>
          <tr>
            <th></th>
            <td><input type="button" name="return" value="戻る" id="return" onClick="history.back()" class="form_btn mr_20">
              <input type="submit" name="Submit" value="送信" id="submit" class="form_btn mr_20"></td>
          </tr>
        </table>
      </div>
      <input type="hidden" name="name" value="<?php echo $_POST['name']; ?>" />
      <input type="hidden" name="huri" value="<?php echo $_POST['huri']; ?>" />
      <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>" />
      <input type="hidden" name="profession" value="<?php echo $_POST['profession']; ?>" />
      <input type="hidden" name="subject" value="<?php echo $_POST['subject']; ?>" />
      <input type="hidden" name="zip" value="<?php echo $_POST['zip']; ?>" />
      <input type="hidden" name="pref" value="<?php echo $_POST['pref']; ?>" />
      <input type="hidden" name="address" value="<?php echo $_POST['address']; ?>" />
      <input type="hidden" name="other_address" value="<?php echo $_POST['other_address']; ?>" />
      <input type="hidden" name="phonenumber" value="<?php echo $_POST['phonenumber']; ?>" />
      <input type="hidden" name="company_menu" value="<?php echo $_POST['company_menu']; ?>" />
      <input type="hidden" name="contact_types" value="<?php echo $contact_types; ?>" />
      <input type="hidden" name="comment" value="<?php echo $_POST['comment']; ?>" />
    </form>
  </div>
</body>
</html>
