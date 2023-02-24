<?php
session_start();



session_destroy();

header("Location:/user_mgmt/index.php?success=loggedOut");
