<?php
namespace ArminVieweg\Dce\ViewHelpers\Be\Version;

/*  | This extension is part of the TYPO3 project. The TYPO3 project is
 *  | free software and is licensed under GNU General Public License.
 *  |
 *  | (c) 2012-2015 Armin Ruediger Vieweg <armin@v.ieweg.de>
 */
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

/**
 * Gets the current version of DCE
 *
 * @package ArminVieweg\Dce
 */
class DceViewHelper extends \TYPO3\CMS\Fluid\ViewHelpers\Be\AbstractBackendViewHelper
{

    /**
     * Returns the current version of DCE
     *
     * @return string Current DCE version
     */
    public function render()
    {
        return ExtensionManagementUtility::getExtensionVersion('dce');
    }
}
