<?php

include dirname(__FILE__).'/../../../../test/bootstrap/unit.php';

$h = new lime_harness(new lime_output_color());
$h->register(sfFinder::type('file')->name('*Test.php')->in(dirname(__FILE__).'/../unit'));

exit($h->run() ? 0 : 1);