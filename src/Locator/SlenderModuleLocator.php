<?php
/**
 * Slender Module Loader
 *
 * @author      Alan Pich <alan.pich@gmail.com>
 * @copyright   2015 Alan Pich
 * @link        http://github.com/alanpich/Slender-ModuleLoader
 * @license     http://github.com/alanpich/Slender-ModuleLoader/blob/master/LICENSE
 * @package     Slender\ModuleLoader
 *
 * MIT LICENSE
 *
 * Permission is hereby granted, free of charge, to any person obtaining
 * a copy of this software and associated documentation files (the
 * "Software"), to deal in the Software without restriction, including
 * without limitation the rights to use, copy, modify, merge, publish,
 * distribute, sublicense, and/or sell copies of the Software, and to
 * permit persons to whom the Software is furnished to do so, subject to
 * the following conditions:
 *
 * The above copyright notice and this permission notice shall be
 * included in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
 * MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
 * NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE
 * LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
 * OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION
 * WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */
namespace Slender\ModuleLoader\Locator;


class SlenderModuleLocator implements ModuleLocatorInterface
{

    const MODULE_INTERFACE = "Slender\\ModuleLoader\\ModuleInterface";

    /**
     * Try to locate a loadable module by using the module
     * identifier as a FQCN and testing if the class exists
     * and is_callable
     *
     * @param string $moduleIdentifier
     * @return Callable|false
     */
    public function find($moduleIdentifier)
    {
        if(class_exists($moduleIdentifier)){
            if(in_array(self::MODULE_INTERFACE, class_implements($moduleIdentifier))){
                return [new $moduleIdentifier,'invokeModule'];
            }
        }
        return false;
    }

} 
