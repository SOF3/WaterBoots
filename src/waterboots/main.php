<?php

namespace HTTPS7Team\WaterBoots;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\utils\Config;
use pocketmine\event\player\PlayerToggleSneakEvent;
use pocketmine\Player;
use pocketmine\command as c;
use pocketmine\plugin\PluginBase as PB;{
    
    class main extends pluginbase implements listner {

    private $ws = [];

    public function onEnable() {

        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->info(TextFormat::ORANGE . "Created by Cat -Discord- ");
        $this->getLogger()->info(TextFormat::GREEN . "WaterBoots and commands have been successfully enabled!");
    }

    public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool {
            if ($sender->hasPermission("boots.water")) {
                if (strtolower($command->getName()) == "ws") {
                    $sender->sendMessage(TF::GREEN . "logged! Crouch to spawn water.");
                } else {
                    $sender->sendMessage(TF::RED . "Incorrect usage or privlages!");
                    return false;
                }
            
        }
        
    }
    
    public function onToggle(PlayerToggleSneakEvent $event) {
        if (isset($this->hasWs[$sender->getName()])) {
            $commands = "setblock ~ ~ ~ water";
            $this->getServer()->dispatchCommand(new CommandSender(), $commands);
            
        }
        
    }
    
    }
    
}
