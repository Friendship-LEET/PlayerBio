<?php

namespace Friendship\PlayerBio;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\utils\TextFormat;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class Main extends PluginBase implements Listener{
     public function onEnable(){ // function when plugin is enabled
          $this->getServer()->getPluginManager()->registerEvents($this,$this); // slistener enabled
          $this->getLogger()->info("Plugin Enabled"); // sends message to console when server is enabled
     }
     public function onJoin(PlayerJoinEvent $event){ // when player joins
          $player = $event->getPlayer(); // get player 
          $name = $player->getName(); // get players 
     }
 public function onCommand(CommandSender $sender, Command $command, $label, array $args){
switch($command->getName()){
// we are gonna use switch... There are more ways. 

case "broadcast": 
//i have to add the command processes here.
return true;
}
}    
}

?>
