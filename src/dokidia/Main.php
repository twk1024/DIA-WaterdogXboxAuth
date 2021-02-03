<?php

namespace dokidia;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\event\player\PlayerLoginEvent;
use pocketmine\Player;

class Main extends PluginBase implements Listener {

    public function onEnable() {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function loginEvent(PlayerLoginEvent $event) {
        $player = $event->getPlayer();
        $xuid = $player->getXuid();

        if(!$xuid) {
            $event->setKickMessage("Please login with Xbox account");
            $event->setCancelled();
        }
    }
}
