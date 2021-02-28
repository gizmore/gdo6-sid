<?php
namespace GDO\SID\Method;

use GDO\Table\MethodQueryTable;
use GDO\SID\GDO_SIDFile;

final class SIDFileList extends MethodQueryTable
{
    public function gdoTable()
    {
        return GDO_SIDFile::table();
    }
    
}
