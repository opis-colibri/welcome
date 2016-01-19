<?php
/* ===========================================================================
 * Opis Project
 * http://opis.io
 * ===========================================================================
 * Copyright 2014 Marius Sarca
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * ============================================================================ */

namespace Opis\Colibri\ModuleCollector;

use Opis\Colibri\ModuleCollector;

class Welcome extends ModuleCollector
{

    /**
     * Collect routes
     */
    public function routes($route, $app)
    {
        $route('/', function($view) {
            return $view('welcome');
        });
    }

    /**
     * Collect views
     */
    public function views($view, $app)
    {
        $view->handle('welcome', function() {
            return __DIR__ . '/welcome.php';
        });
    }
}
