<?php

// --------------------------------------------------------------------------
// Интерфейс для хранилища данных
// --------------------------------------------------------------------------

// TODO: split all this to separate interfaces
// Current is crap.

interface Reco_Storage {
	public function ClientUpdate(); // Update client data or register new
	public function ClientParam();  // Get client's params (table names)

	public function EntitiesUpdate($arrayFromClient);        // Update data about entities
	public function EntitiesStat();          // Get current info about all entities
	public function EntityStat($entityName); // Get info about named entity
	public function EntitiesDiff($arrayFromClient); // Get diff between current and new entities

	public function EntitiesQueueSend($entityName, $entitiesIds); // Send entities ids to fetch queue
	public function EntitiesQueueGet();  // Get task for fetching from queue

	public function CalcQueueNext(); // Get new task for calc some param from calc-queue
	public function CalcStatus();    // Get status of data coverage
}

?>