<?php
session_start();
  if (isset($_SESSION['user_id'])) {
	  echo 'your data is successfully inserted';
  }
  
