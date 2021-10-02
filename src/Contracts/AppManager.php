<?php

namespace Famitekeg\LaravelWebSockets\Contracts;

use Famitekeg\LaravelWebSockets\Apps\App;

interface AppManager
{
    /**
     * Get all apps.
     *
     * @return array[\Famitekeg\LaravelWebSockets\Apps\App]
     */
    public function all(): array;

    /**
     * Get app by id.
     *
     * @param  string|int  $appId
     * @return \Famitekeg\LaravelWebSockets\Apps\App|null
     */
    public function findById($appId): ?App;

    /**
     * Get app by app key.
     *
     * @param  string  $appKey
     * @return \Famitekeg\LaravelWebSockets\Apps\App|null
     */
    public function findByKey($appKey): ?App;

    /**
     * Get app by secret.
     *
     * @param  string  $appSecret
     * @return \Famitekeg\LaravelWebSockets\Apps\App|null
     */
    public function findBySecret($appSecret): ?App;
}
