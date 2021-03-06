<?php

namespace LazyBitmap\Effect\Color\Blend;

use LazyBitmap\Effect\Color\Blend;

class Screen extends Blend {

    public static function calculateColor($bottom, $top) {
        return 255 - ((255 - $top) * (255 - $bottom) / 255);
    }

}
