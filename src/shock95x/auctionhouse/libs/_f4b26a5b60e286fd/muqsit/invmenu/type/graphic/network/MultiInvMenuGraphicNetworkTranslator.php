<?php

declare(strict_types=1);

namespace shock95x\auctionhouse\libs\_f4b26a5b60e286fd\muqsit\invmenu\type\graphic\network;

use shock95x\auctionhouse\libs\_f4b26a5b60e286fd\muqsit\invmenu\session\InvMenuInfo;
use shock95x\auctionhouse\libs\_f4b26a5b60e286fd\muqsit\invmenu\session\PlayerSession;
use pocketmine\network\mcpe\protocol\ContainerOpenPacket;

final class MultiInvMenuGraphicNetworkTranslator implements InvMenuGraphicNetworkTranslator{

	/**
	 * @param InvMenuGraphicNetworkTranslator[] $translators
	 */
	public function __construct(
		readonly private array $translators
	){}

	public function translate(PlayerSession $session, InvMenuInfo $current, ContainerOpenPacket $packet) : void{
		foreach($this->translators as $translator){
			$translator->translate($session, $current, $packet);
		}
	}
}