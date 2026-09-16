<?php sleep(10); ?>
<html>
<head>
<title>Test Child Loading Status <?php print date('Y-m-d h:i:s a'); ?></title>
<script>
  // Enhancement for click navigation:
  // * Loading animation starts before unload
  //
  // Parent page accepts 2 messages:
  // 1. onload - generate unique id
  // 2. onleave - start status animation

  var id = '';
  window.addEventListener("load", function(e) {
    if (id == '') {
      // Gets unique id for this iframe.
      id = window.parent.parentLoadRequest();
    }
  });

  window.addEventListener("beforeunload", function(e) {
    window.parent.parentUnloadRequest(id);
  });

  // if parent replies, update all links to create iframes.
</script>

<body bgcolor="gray">
<br>
<a href="loading-status.php?<?php print time(); ?>">Link</a>
<br>

