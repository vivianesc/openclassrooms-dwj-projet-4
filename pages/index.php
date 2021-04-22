<?php
require('../models/billet.php');

$req = getBillets();

require('../views/indexView.php');
