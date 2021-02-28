<?php
namespace GDO\SID;

use GDO\Core\GDO_Module;
use GDO\DB\GDT_Checkbox;

final class Module_SID extends GDO_Module
{
    public function getClasses()
    {
        return [
            GDO_SIDAuthor::class,
            GDO_SIDFile::class,
        ];
    }
    
    public function getConfig()
    {
        return [
            GDT_Checkbox::make('play_sid_on_each_page')->initial('0'),
        ];
    }
    
    public function cfgPlaySIDOnEachPage()
    {
        return $this->getConfigValue('play_sid_on_each_page');
    }
    
}
