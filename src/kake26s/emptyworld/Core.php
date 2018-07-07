<?php

namespace kake26s\emptyworld;

use pocketmine\plugin\PluginBase;
use pocketmine\level\generator\GeneratorManager;


class Core extends PluginBase{

	public function onEnable(){
		GeneratorManager::addGenerator(EmptyGenerator::class, EmptyGenerator::NAME);
	}
}
