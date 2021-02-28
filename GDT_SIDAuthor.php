<?php
namespace GDO\SID;

use GDO\DB\GDT_Object;

final class GDT_SIDAuthor extends GDT_Object
{
    protected function __construct()
    {
        parent::__construct();
        $this->table = GDO_SIDAuthor::table();
    }
    
}
