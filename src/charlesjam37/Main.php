<?php

/*                    GNU GENERAL PUBLIC LICENSE
                       Version 3, 29 June 2007

 Copyright (C) 2007 Free Software Foundation, Inc. <https://fsf.org/>
 Everyone is permitted to copy and distribute verbatim copies
 of this license document, but changing it is not allowed.
 */

namespace charlesjam37;
//BASE PMMP
use pocketmine\plugin\PluginBase;
//LISTENER
use pocketmine\event\Listener;
//UTILS
use pocketmine\utils\TextFormat;
//BLOCKS
use pocketmine\block\{Block, BlockIds, BlockFactory};
//ITEMS
use pocketmine\item\{Item, ItemIds, ItemFactory, ItemBlock};
//PLAYER
use pocketmine\Player;
//LEVEL
use pocketmine\level\{Level, Position};

//REGISTER LAVA
use charlesjam37\Blocks\Lava;

class Main extends PluginBase implements Listener {
    
	public function onEnable() {
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		BlockFactory::registerBlock(new Lava(), true);
		$this->getLogger()->info("§l§eby charlesjam37 (Enabled!)");
	}
	
	public function onDisable() {
		$this->getLogger()->info("§l§cDisabled!");
	}
}
