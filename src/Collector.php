<?php
/* ===========================================================================
 * Copyright 2013-2016 The Opis Project
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

namespace OpisColibri\Welcome;
use Opis\Colibri\ItemCollectors\{
    RouteCollector, ViewCollector
};
use Opis\Colibri\Collector as AbstractCollector;
use function Opis\Colibri\Functions\{
    view
};

class Collector extends AbstractCollector
{

    /**
     * Collect routes
     *
     * @param RouteCollector $route
     */
    public function routes(RouteCollector $route)
    {
        $route('/', function() {
            return view('welcome');
        });
    }

    /**
     * Collect views
     *
     * @param ViewCollector $view
     */
    public function views(ViewCollector $view)
    {
        $view->handle('welcome', function() {
            return realpath(__DIR__ . '/../views/welcome.php');
        });
    }
}
