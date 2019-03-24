<?php

require_once dirname(__FILE__) . '/../RepositoryBase.php';
require_once dirname(__FILE__) . '/../Utilities.php';

class mwbRepository extends RepositoryBase {

    public $repoShowName = 'Metabolomics Workbenchwb';
    public $wholeName ='Metabolomics$nbsp;Workbench';
    public $id = '0039';
    public $source = "https://www.metabolomicsworkbench.org/";

    public $facetsFields = ['dataset.title', 'dataset.description'];
    public $facetsShowName = [
        'dataset.title' => 'Title',
        'dataset.description' => 'Description'
    ];
    public $index = 'mwb';
    public $type = 'dataset';

    //search page
    
    public $searchPageField = ['dataset.title', 'dataset.description'];

    public $searchPageHeader = [
        'dataset.title' => 'Title',
        'dataset.description' => 'Description'
    ];


    //search-repository page
    public $searchRepoHeader = ['Dataset Title', 'Description'];
    public $searchRepoField = [ 'dataset.title', 'dataset.description'];

    public $source_main_page = 'https://www.metabolomicsworkbench.org/';
    //public $sort_field = 'dataset.dateReleased';
    public $description = 'Metabolomics Workbench serves as a public repository for metabolomics metadata and experimental data from different species including all major taxonomic categories, multiple experimental platforms, metabolite standards, metabolite structures, protocols, tutorials, training materials and other educational resources. It also provides computational and data analytics tools for large volumes of data from a wide variety of metabolomics studies including mass spectrometry (MS) and nuclear magnetic resonance spectrometry (NMR).';

    public function getDisplayItemView($rows)
    {
        $search_results = parent::getDisplayItemView($rows);
        
        #print_r($rows['dataset']['2']);
        #print_r($search_results['dataset']['2'][1]);
               
        $search_results['dataset']['2'][1] = $rows['dataset']['creators'][1]['firstName'] . " " . $rows['dataset']['creators'][1]['lastName'] . " of " . $rows['dataset']['creators'][1]['affiliations'][0]['name'];

               
        if($search_results['dataset']['3'][0]=='dates'){                   
            if($search_results['dataset']['3'][1]=="Array"){
                $search_results['dataset']['3'][1]=$rows['dataset']['dates'][0]['dates'][0]['type']['value'] . " : ". $rows['dataset']['dates'][0]['dates'][0]['date'] ;
            }
        }
        
        if($search_results['dataset']['4'][0]=='extraProperties'){
            if($search_results['dataset']['4'][1]=="Array"){
                $search_results['dataset']['4'][1]=$rows['dataset']['extraProperties'][0]['category'] . " : ". $rows['dataset']['extraProperties'][0]['values'][0]['value'];
            }
        }
             
        if($search_results['dataset']['5'][0]=='types'){
            if($search_results['dataset']['5'][1]=="Array"){
                $search_results['dataset']['5'][1]=$rows['dataset']['types'][0]['information']['value'];
            }
        }

        return $search_results;       
        
    }

}

?>