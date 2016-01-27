<?php

// --------------------------------------------------------------------------
// Интерфейс для хранилища данных
// --------------------------------------------------------------------------

interface Reco_Storage {
	public function CreateUpdateClient(); // Update client data or register new
	public function AppendEntities(); // Append list of entities to index
}

?>