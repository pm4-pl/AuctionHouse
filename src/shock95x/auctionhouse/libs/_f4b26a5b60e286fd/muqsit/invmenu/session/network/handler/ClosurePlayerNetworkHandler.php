<?php

declare(strict_types=1);

namespace shock95x\auctionhouse\libs\_f4b26a5b60e286fd\muqsit\invmenu\session\network\handler;

use Closure;
use shock95x\auctionhouse\libs\_f4b26a5b60e286fd\muqsit\invmenu\session\network\NetworkStackLatencyEntry;

final class ClosurePlayerNetworkHandler implements PlayerNetworkHandler{

	/**
	 * @param Closure(Closure) : NetworkStackLatencyEntry $creator
	 */
	public function __construct(
		readonly private Closure $creator
	){}

	public function createNetworkStackLatencyEntry(Closure $then) : NetworkStackLatencyEntry{
		return ($this->creator)($then);
	}
}