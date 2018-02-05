<?php
namespace WaterBoots;
use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\utils\Config;
use pocketmine\event\player\PlayerToggleSneakEvent;
use pocketmine\Player;
use pocketmine\command as c;
use pocketmine\plugin\PluginBase as PB;

class PluginBase extends Listener{
    
    public function onEnable() {
        @mkdir($this->getDataFolder());
		$this->config = new Config($this->getDataFolder() . "config.yml", Config::YAML, array("CMD" => ""));
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
         $this->getLogger()->info(TextFormat::GREEN . "Created by Cat -Discord- ");
        
        
  public function onCommand(CommandSender $sender, Command $command) {
        if(strtolower($command->getName()) == "wb" {
        if($sender->hasPermission("boots.water")) {
            public function onSneak(PlayerToggleSneakEvent $event); {
                
                
                    } else {
                        $sender->sendMessage(TF::RED . "Incorrect usage!");
                        return false;
    }
}
