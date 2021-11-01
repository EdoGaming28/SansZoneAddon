<?php
declare(strict_types = 1);

/**
 * @name SansZoneAddon
 * @version 1.0.0
 * @main   JackMD\ScoreHud\Addons\SansZoneAddon
 * @depend SansZone
 */
namespace JackMD\ScoreHud\Addons
{

	use JackMD\ScoreHud\addon\AddonBase;
	use pocketmine\Player;
	use SansZone\EdoGaming\Main;

	class SansZoneAddon extends AddonBase{

		/** @var SansZone */
		private $land;

		public function onEnable(): void{
			$this->land = $this->getServer()->getPluginManager()->getPlugin("SansZone");
		}

		/**
		 * @param Player $player
		 * @return array
		 */
		public function getProcessedTags(Player $player): array{
			return [
				"{zone}"   => $this->land->onCheckLand($player)
			];
		}
	}
}
