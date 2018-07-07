<?php

namespace kake26s\emptyworld;

use pocketmine\level\generator\Generator;
use pocketmine\block\Block;
use pocketmine\math\Vector3;
use pocketmine\level\ChunkManager;
use pocketmine\utils\Random;



class EmptyGenerator extends Generator{

	const NAME = "emptyworld";

	private $settings;


	/** contruct **/
	public function __construct(array $settings = []) {
		$this->settings = $settings;
	}

	public function init(ChunkManager $level, Random $random) : void{
		$this->level = $level;
		$this->random = $random;
	}

	public function generateChunk(int $chunkX, int $chunkZ) : void{
		if($chunkX != $this->getSpawn()->getFloorX() >> 4 || $chunkZ != $this->getSpawn()->getFloorZ() >> 4){
			return;
		}else {
			$this->level->getChunk($chunkX, $chunkZ)->setBlock(0, $this->getSpawn()->getFloorY() - 1, 0, 7);
		}
	}

	public function populateChunk(int $chunkX, int $chunkZ) : void{
		// ???
	}

	public function getSettings() : array{
		return $this->settings;
	}

	public function getName() : string{
		return self::NAME;
	}

	public function getSpawn() : Vector3{
		return new Vector3(128, 65, 128);
	}
}