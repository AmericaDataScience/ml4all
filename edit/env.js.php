<?php
require_once 'config.php'; // or adjust path as needed
header('Content-Type: application/javascript');
?>
window.env = {
  AZURE_BLOB_SAS_URL: "<?php echo AZURE_BLOB_SAS_URL; ?>"
};
