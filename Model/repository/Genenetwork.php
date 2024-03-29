<?php

require_once dirname(__FILE__) . '/../RepositoryBase.php';
require_once dirname(__FILE__) . '/../Utilities.php';

class GenenetworkRepository extends RepositoryBase {

    public $id = '0023';
    public $index = 'genenetwork';
    public $type = 'dataset';
    public $repoShowName = 'GeneNetwork';

    public $wholeName = '';

    /**
     * Specifies the fields ElasticSearch uses to run the search.
     * @var array(string)
     */
   // public $searchFields = [ 'dataset.ID','dataset.creators','dataset.description', 'dataset.keywords','dataset.title','dataset.types',
   //                         'taxonomicInformation.name','dataAcquisition.ID','dataAcquisition.name'];
    /**
     *  Specifies the list of fields to be used for facets' filtering.
     * @var array(string)
     */
    public $facetsFields = ['dataset.types.raw','dataset.keywords.raw'];
    /**
     *  Indicates the list of display values for facets' filtering.
     * @var array(key(string), value(string))
     */
    public $facetsShowName = [
        'dataset.types.raw'=>'Data Type',
        'dataset.keywords.raw'=>'Keywords'
       ];


    /**
     * Specifies the list of displayed value for headers in "search.php" page.
     * @var array(string)
     */
    public $searchPageField = ['dataset.title', 'dataset.ID', 'dataset.description'];

    /**
     * Specifies a list of fields displayed in "search.php" page.
     * @var array(string)
     */
    public $searchPageHeader = [
        'dataset.title' => 'Title',
        'dataset.ID' => 'ID',
        'dataset.description'=>'Description',
    ];

    /**
     * Specifies a list of fields displayed in "search-repository.php" page.
     * @var array(string)
     */
    public $searchRepoHeader = ['Title', 'ID', 'Description'];

    /**
     * Specifies a list of display values for headers in "search-repository.php" page.
     * @var array(string)
     */
    public $searchRepoField = ['dataset.title', 'dataset.ID', 'dataset.description'];

    //display-item page
    /**
     * Specifies the list of fields displayed in "display-item.php" page.
     * @var array(string)
     */

    public $sort_field = '';
    public $description = 'GeneNetwork is a group of linked data sets and tools used to study complex networks of genes, molecules, and higher order gene function and phenotypes. GeneNetwork combines more than 25 years of legacy data generated by hundreds of scientists together with sequence data (SNPs) and massive transcriptome data sets (expression genetic or eQTL data sets). The quantitative trait locus (QTL) mapping module that is built into GN is optimized for fast on-line analysis of traits that are controlled by combinations of gene variants and environmental factors. GeneNetwork can be used to study humans, mice (BXD, AXB, LXS, etc.), rats (HXB), Drosophila, and plant species (barley and Arabidopsis). Most of these population data sets are linked with dense genetic maps (genotypes) that can be used to locate the genetic modifiers that cause differences in expression and phenotypes, including disease susceptibility.';


}

?>