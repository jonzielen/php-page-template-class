<?php
  require_once('{pageRoot}'.'/models/settings.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>{title} <?php echo $defaultSite['title']; ?></title>
  <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>css/main.css">
  <?php
    if (isset($defaultSite['meta'])) {
      function setMeta($key, $value) {
        return "<meta name=\"$key\" content=\"$value\">\n";
      }

      foreach ($defaultSite['meta'] as $key => $value) {
        echo setMeta($key, $value);
      }
    }
  ?>
  <link href="https://plus.google.com/{plusPageUrl}" rel="publisher" />
</head>
<body class="{bodyClass}">
  <h1>{h1}</h1>
  <h2>{h2}</h2>
  <h3>{h3}</h3>
<?php
  require_once('{pageRoot}'.'/views/tpls/nav.php');
?>
