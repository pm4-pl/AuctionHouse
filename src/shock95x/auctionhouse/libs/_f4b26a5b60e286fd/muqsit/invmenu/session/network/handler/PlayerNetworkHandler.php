<?php

declare(strict_types=1);

namespace shock95x\auctionhouse\libs\_f4b26a5b60e286fd\muqsit\invmenu\session\network\handler;

use Closure;
use shock95x\auctionhouse\libs\_f4b26a5b60e286fd\muqsit\invmenu\session\network\NetworkStackLatencyEntry;

interface PlayerNetworkHandler{

	public function createNetworkStackLatencyEntry(Closure $then) : NetworkStackLatencyEntry;
}