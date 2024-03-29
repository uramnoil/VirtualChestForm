<?php


namespace UramnOIL\VirtualChestForm\Controller;


use pocketmine\Player;
use uramnoil\virtualinventory\inventory\PerpetuatedVirtualInventory;

abstract class SelectChestController extends Controller {
	/**
	 * @param  Player  $player
	 * @param  PerpetuatedVirtualInventory  $inventory
	 *
	 * @return mixed
	 * @see CustomizeController
	 *
	 */
	public abstract function onSubmit(Player $player, PerpetuatedVirtualInventory $inventory);

	/**
	 * @param  Player  $player
	 */
	public abstract function onClose(Player $player) : void;
}