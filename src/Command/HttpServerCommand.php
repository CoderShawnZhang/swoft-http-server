<?php
/**
 * Created by PhpStorm.
 * User: zhanghongbo
 * Date: 2019/6/14
 * Time: 上午9:26
 */

namespace SwoftRewrite\Http\Server\Command;

use SwoftRewrite\Console\Annotation\Mapping\Command;
use SwoftRewrite\Console\Annotation\Mapping\CommandMapping;

/**
 * @Command("http",alias="httpserver,httpServer,http-server",coroutine=false)
 * @example
 *  {fullCmd}:start     Start the http server
 *  {fullCmd}:stop      Stop the http server
 */
class HttpServerCommand
{
    public $tt = 88;

    /**
     * @CommandMapping(usage="{fullCommand} [-d|--daemon]")
     * @example
     *  {fullCommand}
     *  {fullCommand} -d
     */
    public function start()
    {

    }
}