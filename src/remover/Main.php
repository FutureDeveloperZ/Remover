<?php

namespace remover;

use pocketmine\utils\TextFormat as C;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase {

    public function onEnable() {
        $this->getLogger()->info(C::GREEN . "Remover has been activated by Wolfkid");
        unlink($this->getServer()->getDataPath()."server.log");
    }   
        
    public function onDisable() {
        $this->getLogger()->info(C::RED . "Remover has been deactivated by Wolfkid");
    }
}
