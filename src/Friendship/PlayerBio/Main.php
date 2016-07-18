<?php

namespace Friendship\PlayerBio;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\utils\TextFormat;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class Main extends PluginBase implements Listener{
     public function onEnable(){
          $this->getServer()->getPluginManager()->registerEvents($this,$this);
          $this->getLogger()->info("PlayerBio plugin has been Enabled");
     }
     public function onJoin(PlayerJoinEvent $event){
          $player = $event->getPlayer();
          $name = $player->getName();
     }
 public function onCommand(CommandSender $sender, Command $command, $label, array $args){
switch($command->getName()){
//MCU's tutorial code.

case "playerbio set": 
//i have to add the command processes here.
return true;
}
}    
}

?>
