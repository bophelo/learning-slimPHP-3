<?php

namespace App\Middleware;
use PDO;

class IpFilter
{
    protected $db;
    //protected $router;

    public function __construct(PDO $db /*RouterInterface $router*/)//type hinting when passing something in
    {
        $this->db = $db;
        //$this->router = $router;
    }

    public function __invoke($request, $response, $next)
    {
        //get blocked ips and check if current ip is in the list if so set some kind of status or write to the body
        if (!$this->allowed($_SERVER['REMOTE_ADDR'])) {
            return $response->withStatus(401)->write('Denied');
        }
        return $next($request, $response);
    }

    public function allowed($ip)
    {
        $ips = $this->db->query("SELECT ip FROM blocked")->fetchAll(PDO::FETCH_COLUMN, 0);//1 if 1 or more?

        return !in_array($ip, $ips);
    }
}