<?php
namespace GDO\SID\Method;

use GDO\Form\MethodCrud;
use GDO\SID\GDO_SIDFile;

final class SIDFileCRUD extends MethodCrud
{
    public function hrefList()
    {
        return href('SID', 'SIDFileList');
    }

    public function gdoTable()
    {
        return GDO_SIDFile::table();
    }
    
}
