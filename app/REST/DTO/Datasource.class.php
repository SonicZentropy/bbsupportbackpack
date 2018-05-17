<?php

namespace App\REST\DTO;


class Datasource {
	public $id = '';
	public $externalId = 'BBDN-DSK-PHP';
	public $description = 'Demo Data Source used for REST PHP Demo';
}

class DatasourceForCreation {
    public $externalId = 'BBDN-DSK-PHP';
    public $description = 'Demo Data Source used for REST PHP Demo';

    public function setFromDatasource(Datasource $ds) {
        $this->externalId = $ds->externalId;
        $this->description = $ds->description;
    }
}