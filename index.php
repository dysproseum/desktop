<html>
<head>
<title>Dysproseum Desktop</title>
<link rel='stylesheet' media='screen' href='include/style.css' type='text/css' />

<?php
  // @todo get theme dynamically.
  // can get theme in js from index iframe
  // and can load css with js
  // uninstall or refresh if switching themes
  require_once('config.php');
  global $conf;

  $theme = isset($_GET['theme']) ? $_GET['theme'] : 'webamp';
  $player_head = '';
  $player_body = '';
  include($conf['kplaylist_dir'] . "/kptheme/$theme/player.php");
?>

<?php print $player_head; ?>

<script type="text/javascript">
  var kplaylist_url = '<?php print $conf['kplaylist_url']; ?>';
</script>
<script type="text/javascript" src="include/drag.js"></script>
<script type="text/javascript" src="include/iframe-api.js"></script>
<script type="text/javascript" src="include/iframe.js"></script>
</head>
<body class="wait">

<?php print $player_body; ?>

<div id="selection" hidden></div>

<div class="icon">
  <img src="images/mycomputer.png" width=32" />
  <div class="caption">My Computer</div>
</div>
<div class="icon" data-type="browser" data-url="https://notepad.js.org/rich-text-notes/" data-title="Notepad">
  <img src="images/notepad-1.png" width=32" />
  <div class="caption">Notepad</div>
</div>
<div class="icon" data-type="browser" data-url="index.php">
  <img src="images/netscape.jpg" width=32" />
  <div class="caption">Navigator</div>
</div>
<div class="icon" data-type="browser" data-url="/oscillator">
  <img src="images/keyboard_musical_midi.png" width=32" />
  <div class="caption">Oscillator</div>
</div>
<div class="icon" data-type="conversations_buddylist" data-url="/conversations/iframe/buddylist.php">
  <img src="images/aol_messenger.png" width=32" />
  <div class="caption">Conversations</div>
</div>
<div class="icon" data-type="webamp">
  <img src="images/webamp.png" width=32" />
  <div class="caption">Webamp</div>
</div>
<div class="icon" data-type="browser" data-url="https://jspaint.app/#local:c6c35db1cd4b28" data-title="Paint">
  <img src="images/paintbrush.png" width=32" />
  <div class="caption">JSPaint.app</div>
</div>
<div class="icon" data-type="browser" data-url="https://mrdoob.com/lab/javascript/effects/solitaire/" data-title="Solitaire">
  <img src="images/solitaire.png" width=32" />
  <div class="caption">Solitaire</div>
</div>

<?php $browsers = [
  // Named URL(s) to open on startup (optional).
  // "vplaylist" => "/vplaylist",
  "kplaylist" => "/kplaylist-php8/index.php",
  // Default URL for new windows (required).
  "default" => "index.php",
]; ?>

<?php foreach ($browsers as $index => $url): ?>
  <div class="browser <?php print $index; ?>" data-type="<?php print $index; ?>" id="<?php print $index; ?>" data-url="<?php print $url; ?>" hidden>
    <div class="titlebar">
      <h1>Dysproseum Navigator</h1>
    <a href="#" class="close"></a>
    </div>
    <div class="addressbar">
      <form class="navigate">
        <button class="back" type="button">Back<br />&larrhk;</button>
        <button class="reload" type="button">Reload<br />&orarr;</button>
        <button class="forward" type="button">Forward<br />&rarrhk;</button>
        <button class="home" type="button">Home<br />&#8962;</button>
        <label>Location</label>
        <input class="address" type="text" size="75" spellcheck="false" autocomplete="off" />
        <img class="animation" src="images/netscape.gif" width="32" />
      </form>
    </div>
    <iframe src="about:blank"></iframe>
  </div>
<?php endforeach; ?>

</body>
</html>
