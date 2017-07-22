<?php

namespace con;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;

class Main extends PluginBase{

 public function onEnable(){
  $this->getServer()->getLogger()->info("config test enabled");
  @mkdir->($this-<getDatatFolder());
  $m = [
   'm' => 'here'
   ];
  $config = new
   Config($this->getDataFolder()
          "config.yml", Config::YAML,$m);
   
