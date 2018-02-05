<?php
namespace WaterBoots;
use pocketmine\plugin\PluginBase;
use pocketmine\event\player\PlayerToggleSneakEvent;
use pocketmine\command as c;
use pocketmine\plugin\PluginBase as PB;
class PluginBase extends Listener{
    
  public function onCommand(CommandSender $sender, Command $command) {
        if(strtolower($command->getName()) == "wb" {
        if($sender->hasPermission("boots.water")) {
            public function onSneak(PlayerToggleSneakEvent $event); {
                
                    } else {
                        $sender->sendMessage(TF::RED . "Incorrect usage!");
                        return false;
    }
}
