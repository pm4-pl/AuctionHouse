<?php

namespace shock95x\auctionhouse\commands\subcommand\admin;

use CortexPE\Commando\BaseSubCommand;
use pocketmine\command\CommandSender;
use shock95x\auctionhouse\AuctionHouse;
use shock95x\auctionhouse\database\Query;
use shock95x\auctionhouse\libs\_f4b26a5b60e286fd\SOFe\AwaitGenerator\Await;

class AdminReturnAllSubCommand extends BaseSubCommand {

	protected function prepare(): void {}

	public function onRun(CommandSender $sender, string $aliasUsed, array $args) : void{
		Await::f2c(function() use ($sender){
			$database = AuctionHouse::getInstance()->getDatabase();
			yield from $database->getConnector()->asyncChange(Query::EXPIRE_ALL);
		});
	}
}