<?php

namespace baixinxing\ace;

use yii\base\Theme;

class AceTheme extends Theme {

    public $pathMap = [
        '@app/views' => [
            '@baixinxing/ace/views',
            '@app/views',
        ]
    ];

}
