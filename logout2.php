<?php
session_start();
unset($_SESSION['username']);
unset($_SESSION['password']);
session_destroy();
?>
<script>
alert('logged out successfully');
window.location.href='indexpro.html';
</script>