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

    private $wb = [];

    public function onEnable() {

        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->info(TextFormat::ORANGE . "Created by Cat -Discord- ");
        $this->getLogger()->info(TextFormat::GREEN . "WaterBoots and commands have been successfully enabled!");
    }

    public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool {
            $commands = "say water";
            $this->getServer()->dispatchCommand(new CommandSender(), $commands);
            if ($sender->hasPermission("boots.water")) {
                if (strtolower($command->getName()) == "wb") {
                    $sender->sendMessage(TF::RED . "logged!");
                } else {
                    $sender->sendMessage(TF::RED . "Incorrect usage or privlages!");
                    return false;
                }
            
        }
        
    }
    
    public function onToggle(PlayerToggleSneakEvent $event) {
        if (isset($this->hasWb[$sender->getName()])) {
            $commands = "say water";
            $this->getServer()->dispatchCommand(new CommandSender(), $commands);
            
        }
        
    }
    
    }
    
}
