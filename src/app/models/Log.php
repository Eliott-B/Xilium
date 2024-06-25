<?php

namespace app\models;
/**
 * Model représentant les logs
 */
class Log extends Model
{
    /**
     * Le nom de la table associée à ce modèle
     * @var string
     */
    protected string $table = 'logs';

    /**
     * Les attributs pouvant être remplis
     * @var array
     */
    protected array $fillable = [
        'log_ip',
        'log_date',
        'log_content',
        'ticket_id',
        'user_id'
    ];

    
    public function custom($query, $data = NULL)
    {
        parent::custom($query, $data);
        
        $date = date('Y_W');
        $filePath = __DIR__."/../../data/$date.xml";

        if (file_exists($filePath)) {
            $xml = simplexml_load_file($filePath);
        } else {
            copy(__DIR__."/../../data/log_template.xml", $filePath);
            $xml = simplexml_load_file($filePath);
        }

        $log = $xml->addChild('log');
        $log->addChild('log_content', $data['log_content']);
        $log->addChild('log_date', date('Y-m-d H:i:s'));
        $log->addChild('log_ip', $data['log_ip'] ?? NULL);
        $log->addChild('ticket_id', $data['ticket_id'] ?? NULL);
        $log->addChild('user_id', $data['user_id'] ?? NULL);

        file_put_contents($filePath, $xml->asXML());
    }
}
