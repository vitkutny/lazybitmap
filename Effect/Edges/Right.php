<?php

namespace LazyBitmap\Effect\Edges;

use LazyBitmap\Bitmap;
use LazyBitmap\ILazyBitmap;
use LazyBitmap\Operation\Difference;
use LazyBitmap\Operation\Shift;

class Right extends Bitmap {

    public function __construct(ILazyBitmap $lbm, $size = 1, $difference = 30) {
        $shift = new Shift($lbm, -$size, 0);
        $difference = new Difference($lbm, $difference, $shift);
        $this->lbm = $difference;
    }

}
