<?php
namespace GDO\SID;

use GDO\Core\GDO;
use GDO\DB\GDT_AutoInc;
use GDO\File\GDT_File;
use GDO\DB\GDT_CreatedAt;
use GDO\DB\GDT_CreatedBy;
use GDO\DB\GDT_DeletedAt;
use GDO\DB\GDT_DeletedBy;
use GDO\DB\GDT_UInt;

final class GDO_SIDFile extends GDO
{
    public function gdoColumns()
    {
        return [
            GDT_AutoInc::make('sid_id'),
            GDT_File::make('sid_file'),
            GDT_SIDAuthor::make('sid_author'),
            GDT_CreatedAt::make('sid_created'),
            GDT_CreatedBy::make('sid_creator'),
            GDT_DeletedAt::make('sid_deleted'),
            GDT_DeletedBy::make('sid_deletor'),
            GDT_UInt::make('sid_num_played')->notNull()->initial('0'),
        ];
    }
    
}
