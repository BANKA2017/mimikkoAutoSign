<?php
/**
 * Mimikko �Զ�ǩ��
 * ����ңң������4������֪��ʱ���ܵ��
 * �������Ա�Զ�ǩ��Ҳ���Խ��ܡ�
 *
 * �÷���
 * Usage: ���� $config ����û���������, Ȼ�� php v2,php
 *
 * ���(��?��??)
 * ��ҫ(^?��?^ ) 0w0 ��
 * �漣��(��������)
 * ֮��(��������)��
 * White Lily(��?��)�g
 * 
 * @author: CYGM <hana@9999.moe>
 * @version: 1.0.0
 */
namespace mimikko;

use src\Mimikko;

require_once __DIR__ . '/vendor/autoload.php';

$config = [
    "user" => "",
    "password" => ""
];

$mimikko = new Mimikko($config["user"], $config['password']);

$mimikko->getToken()
        ->getServantId()
        ->getExchangeReward()
        ->SignAndSignInformationV2()
        ;

echo "[" . date('Y-m-d') . "]" . "  " . json_encode($mimikko->response) . PHP_EOL;

unset($mimikko);