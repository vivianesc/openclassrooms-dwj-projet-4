<?php
require('../models/getBillets.php');

$req = getBillets();

require('viewBillets.php');
?>