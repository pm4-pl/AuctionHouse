<?php
declare(strict_types=1);

namespace shock95x\auctionhouse\database;

use Generator;
use pocketmine\item\Item;
use pocketmine\player\Player;
use pocketmine\utils\Config;
use shock95x\auctionhouse\libs\_f4b26a5b60e286fd\poggit\libasynql\DataConnector;
use shock95x\auctionhouse\libs\_f4b26a5b60e286fd\poggit\libasynql\libasynql;
use shock95x\auctionhouse\libs\_f4b26a5b60e286fd\poggit\libasynql\result\SqlChangeResult;
use shock95x\auctionhouse\libs\_f4b26a5b60e286fd\poggit\libasynql\result\SqlInsertResult;
use shock95x\auctionhouse\libs\_f4b26a5b60e286fd\poggit\libasynql\result\SqlSelectResult;
use shock95x\auctionhouse\libs\_f4b26a5b60e286fd\poggit\libasynql\SqlError;
use shock95x\auctionhouse\libs\_f4b26a5b60e286fd\poggit\libasynql\SqlResult;
use shock95x\auctionhouse\libs\_f4b26a5b60e286fd\poggit\libasynql\SqlThread;
use Ramsey\Uuid\UuidInterface;
use shock95x\auctionhouse\AHListing;
use shock95x\auctionhouse\AuctionHouse;
use shock95x\auctionhouse\database\legacy\LegacyConverter;
use shock95x\auctionhouse\database\storage\DataStorage;
use shock95x\auctionhouse\event\AuctionStartEvent;
use shock95x\auctionhouse\task\SQLiteExpireTask;
use shock95x\auctionhouse\utils\Settings;
use shock95x\auctionhouse\utils\Utils;
use shock95x\auctionhouse\libs\_f4b26a5b60e286fd\SOFe\AwaitGenerator\Await;

enum DatabaseType: string {
	case MySQL = "mysql";
	case SQLite = "sqlite";
}