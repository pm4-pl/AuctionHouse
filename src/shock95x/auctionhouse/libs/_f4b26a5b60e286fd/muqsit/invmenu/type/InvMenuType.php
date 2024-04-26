<?php

declare(strict_types=1);

namespace shock95x\auctionhouse\libs\_f4b26a5b60e286fd\muqsit\invmenu\type;

use shock95x\auctionhouse\libs\_f4b26a5b60e286fd\muqsit\invmenu\InvMenu;
use shock95x\auctionhouse\libs\_f4b26a5b60e286fd\muqsit\invmenu\type\graphic\InvMenuGraphic;
use pocketmine\inventory\Inventory;
use pocketmine\player\Player;

interface InvMenuType{

	public function createGraphic(InvMenu $menu, Player $player) : ?InvMenuGraphic;

	public function createInventory() : Inventory;
}