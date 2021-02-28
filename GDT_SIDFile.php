<?php
namespace GDO\SID;

use GDO\DB\GDT_Object;

final class GDT_SIDFile extends GDT_Object
{
    protected function __construct()
    {
        parent::__construct();
        $this->table = GDO_SIDFile::table();
    }
    
}
