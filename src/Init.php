<?php

namespace Wenprise\ImageOptimizer;

use Spatie\ImageOptimizer\OptimizerChainFactory;

class Init
{

    /**
     * constructor.
     */
    public function __construct()
    {
        add_filter('wp_handle_upload', [$this, 'optimizer']);
    }


    function optimizer($file_info)
    {
        copy($file_info[ 'file' ], $file_info[ 'file' ] . '.orig');
        $optimizerChain = OptimizerChainFactory::create();
        $optimizerChain->optimize($file_info[ 'file' ]);

        return $file_info;
    }

}