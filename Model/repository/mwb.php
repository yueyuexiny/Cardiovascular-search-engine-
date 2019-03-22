<?php

require_once dirname(__FILE__) . '/../RepositoryBase.php';
require_once dirname(__FILE__) . '/../Utilities.php';

class mwbRepository extends RepositoryBase {

    public $repoShowName = 'Metabolomics Workbench';
    public $wholeName ='Metabolomics$nbsp;Workbench';
    public $id = '0039';
    public $source = "https://www.metabolomicsworkbench.org/";

    public $facetsFields = ['dataset.title', 'dataset.description'];
    public $facetsShowName = [
        'dataset.title' => 'Title',
        'dataset.description' => 'Description'
    ];
    public $index = 'Metabolomics Workbench';
    public $type = 'dataset';

    //search page
    public $searchPageField = ['dataset.title','dataset.identifier.identifier', 'dataset.description'];
    public $searchPageHeader = [
        'dataset.title' => 'Title',
        'dataset.identifier.identifier'=>'ID',
        'dataset.description' => 'Description'
    ];


    //search-repository page
    public $searchRepoHeader = ['Dataset Title', 'ID','Description'];
    public $searchRepoField = [ 'dataset.title', 'dataset.identifier.identifier','dataset.description'];

    public $source_main_page = 'https://www.metabolomicsworkbench.org/';
    //public $sort_field = 'dataset.dateReleased';
    public $description = 'Metabolomics Workbench serves as a public repository for metabolomics metadata and experimental data from different species including all major taxonomic categories, multiple experimental platforms, metabolite standards, metabolite structures, protocols, tutorials, training materials and other educational resources. It also provides computational and data analytics tools for large volumes of data from a wide variety of metabolomics studies including mass spectrometry (MS) and nuclear magnetic resonance spectrometry (NMR).';




}

?>