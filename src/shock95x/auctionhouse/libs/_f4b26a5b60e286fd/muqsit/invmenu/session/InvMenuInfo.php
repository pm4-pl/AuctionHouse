<?php

declare(strict_types=1);

namespace shock95x\auctionhouse\libs\_f4b26a5b60e286fd\muqsit\invmenu\session;

use shock95x\auctionhouse\libs\_f4b26a5b60e286fd\muqsit\invmenu\InvMenu;
use shock95x\auctionhouse\libs\_f4b26a5b60e286fd\muqsit\invmenu\type\graphic\InvMenuGraphic;

final class InvMenuInfo{

	public function __construct(
		readonly public InvMenu $menu,
		readonly public InvMenuGraphic $graphic,
		readonly public ?string $graphic_name
	){}
}