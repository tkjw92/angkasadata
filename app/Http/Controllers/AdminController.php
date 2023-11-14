<?php

namespace App\Http\Controllers;

use \RouterOS\Client;
use \RouterOS\Query;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    protected function koneksi()
    {
        $client = new Client([
            'host' => env('ROUTER_HOST'),
            'user' => env('ROUTER_USER'),
            'pass' => env('ROUTER_PASSWORD'),
            'port' => intval(env('ROUTER_PORT')),
        ]);

        return $client;
    }

    public function viewDashboard()
    {
        $client = $this->koneksi();

        $users = count($client->query('/ppp/secret/print', ['service', 'pppoe'])->read());
        $resources = $client->query('/system/resource/print')->read()[0];
        $query = new Query('/interface/monitor-traffic');
        $query->equal('interface', 'ether1');
        $query->equal('once', '');
        $internet = $client->query($query)->read()[0];

        return view('dashboard', compact('users', 'resources', 'internet'));
    }

    public function viewMonitoring()
    {
        $client = $this->koneksi();

        $users = $client->query('/ppp/secret/print', ['service', 'pppoe'])->read();
        $actives = $client->query('/ppp/active/print', ['service', 'pppoe'])->read();
        $interfaces = $client->query('/interface/print', ['type', 'pppoe-in'])->read();

        return view('monitoring', compact('users', 'actives', 'interfaces'));
    }
}
