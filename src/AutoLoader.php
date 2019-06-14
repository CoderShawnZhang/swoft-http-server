<?php
/**
 * Http 服务器
 */
namespace SwoftRewrite\Http\Server;


use SwoftRewrite\Framework\SwoftComponent;

class AutoLoader extends SwoftComponent
{
    public function getPrefixDirs()
    {
        return [
            __NAMESPACE__ => __DIR__,
        ];
    }


}