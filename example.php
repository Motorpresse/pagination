<?php
require './vendor/autoload.php';

use Mps\Pagination\LogPaginationFactory;
use Mps\Pagination\Gap\GapItemInterface;

$pagination = LogPaginationFactory::makeNewPagination(8872, 10, 70, 15, true);

foreach ($pagination as $item) {
    if ($item instanceof GapItemInterface) {
        echo '... ';
    } else {
        echo $item->getPageNumber() . ' ';
    }
}

echo PHP_EOL;
