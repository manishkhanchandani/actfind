<?php
/**
 * Unit tests for HTML_QuickForm2 package
 *
 * PHP version 5
 *
 * LICENSE:
 *
 * Copyright (c) 2006, 2007, Alexey Borzov <avb@php.net>,
 *                           Bertrand Mansion <golgote@mamasam.com>
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions
 * are met:
 *
 *    * Redistributions of source code must retain the above copyright
 *      notice, this list of conditions and the following disclaimer.
 *    * Redistributions in binary form must reproduce the above copyright
 *      notice, this list of conditions and the following disclaimer in the
 *      documentation and/or other materials provided with the distribution.
 *    * The names of the authors may not be used to endorse or promote products
 *      derived from this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS
 * IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO,
 * THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR
 * PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT OWNER OR
 * CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL,
 * EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO,
 * PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
 * PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY
 * OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING
 * NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
 * SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * @category   HTML
 * @package    HTML_QuickForm2
 * @author     Alexey Borzov <avb@php.net>
 * @author     Bertrand Mansion <golgote@mamasam.com>
 * @license    http://opensource.org/licenses/bsd-license.php New BSD License
 * @version    CVS: $Id: AllTests.php,v 1.8 2007/10/14 18:58:31 avb Exp $
 * @link       http://pear.php.net/package/HTML_QuickForm2
 */

if (!defined('PHPUnit_MAIN_METHOD')) {
    define('PHPUnit_MAIN_METHOD', 'QuickForm2_Rule_AllTests::main');
}

require_once 'PHPUnit/Framework/TestSuite.php';
require_once 'PHPUnit/TextUI/TestRunner.php';

require_once dirname(__FILE__) . '/NonemptyTest.php';
require_once dirname(__FILE__) . '/RequiredTest.php';
require_once dirname(__FILE__) . '/CompareTest.php';
require_once dirname(__FILE__) . '/EmptyTest.php';
require_once dirname(__FILE__) . '/RegexTest.php';
require_once dirname(__FILE__) . '/CallbackTest.php';
require_once dirname(__FILE__) . '/LengthTest.php';
require_once dirname(__FILE__) . '/MaxFileSizeTest.php';
require_once dirname(__FILE__) . '/MimeTypeTest.php';

class QuickForm2_Rule_AllTests
{
    public static function main()
    {
        PHPUnit_TextUI_TestRunner::run(self::suite());
    }

    public static function suite()
    {
        $suite = new PHPUnit_Framework_TestSuite('HTML_QuickForm2 package - QuickForm2 - Rule');

        $suite->addTestSuite('HTML_QuickForm2_Rule_NonemptyTest');
        $suite->addTestSuite('HTML_QuickForm2_Rule_RequiredTest');
        $suite->addTestSuite('HTML_QuickForm2_Rule_CompareTest');
        $suite->addTestSuite('HTML_QuickForm2_Rule_EmptyTest');
        $suite->addTestSuite('HTML_QuickForm2_Rule_RegexTest');
        $suite->addTestSuite('HTML_QuickForm2_Rule_CallbackTest');
        $suite->addTestSuite('HTML_QuickForm2_Rule_LengthTest');
        $suite->addTestSuite('HTML_QuickForm2_Rule_MaxFileSizeTest');
        $suite->addTestSuite('HTML_QuickForm2_Rule_MimeTypeTest');

        return $suite;
    }
}

if (PHPUnit_MAIN_METHOD == 'QuickForm2_Rule_AllTests::main') {
    QuickForm2_Rule_AllTests::main();
}
?>