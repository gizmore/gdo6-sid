<?php
namespace GDO\SID;

use GDO\Core\GDO;
use GDO\DB\GDT_AutoInc;
use GDO\DB\GDT_String;
use GDO\DB\GDT_CreatedAt;
use GDO\Date\GDT_Birthdate;
use GDO\DB\GDT_CreatedBy;

final class GDO_SIDAuthor extends GDO
{
    public function gdoColumns()
    {
        return [
            GDT_AutoInc::make('sida_id'),
            GDT_String::make('sida_name'),
            GDT_Birthdate::make('sida_birthdate'),
            GDT_CreatedAt::make('sida_created'),
            GDT_CreatedBy::make('sida_creator'),
        ];
    }

}
