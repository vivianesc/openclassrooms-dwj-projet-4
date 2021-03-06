<?php
require('../models/getBillets.php');

$req = getBillets();

require('../views/indexView.php');