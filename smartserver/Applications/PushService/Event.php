<?php
/**
 *
 * 主逻辑
 * 主要是处理 onMessage onClose 三个方法
 * @author walkor <walkor@workerman.net>
 *
 */

use \GatewayWorker\Lib\Gateway;

class Event
{
    /**
     * 有消息时
     * @param int $client_id
     * @param string $message
     */
    public static function onMessage($client_id, $data)
    {
        Gateway::sendToCurrentClient(array('stat'=>100, 'text'=>'no login', 'data'=>null));
    }
    
    /**
     * 连接建立时
     * @param string $message
     */
    public static function onConnect($client_id)
    {
        //$_SESSION['UID']="ADSGJAS";
        //Gateway::sendToCurrentClient($client_id);
        //Gateway::sendToClient($client_id, "hello");
        echo $client_id."建立连接\n";
    
    }
    
    /**
     * 当用户断开连接时
     * @param integer $client_id 用户id
     */
    public static function onClose($client_id)
    {
        // 广播 xxx 退出了
        GateWay::sendToAll(json_encode(array('type'=>'closed', 'id'=>$client_id)));
    }
}