<?php
function exit_to($location, $message = "") {
if ($message === "")
  header("Location: $location");
else
  header("Location: $location?message=".urlencode($message));
exit ;
}
?>
