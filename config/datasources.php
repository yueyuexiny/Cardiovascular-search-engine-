<?php

// Import ElasticSearch library.
require_once dirname(__FILE__) . '/config.php';
require_once dirname(__FILE__) . '/../vendor/autoload.php';

// ElasticSearch Configuration.
//$es_end_point = '129.106.149.72:9200';
//$es_end_point = '129.106.31.121:9200';

// Initialize ElasticSearch and set the end point.
$es = new Elasticsearch\Client([
    'hosts' => [$es_end_point]
        ]);

// Returns data types list.
function getDatatypes() {
    return ['Phenotype', 'Gene Expression',];
}

// Returns data types mapping to elastic search indexes.
/*function getDatatypesMapping() {
    return ['Protein' => ['pdb','swissprot','datacitesbgrid'],
        'Phenotype' => ['dbgap','mpd','datacitemorphobank','clinvar'],
        'Gene Expression' => ['geo',  'arrayexpress', 'gemma','nursadatasets'],
        'Nucleotide Sequence' => ['sra','datacitebgi'],
        'Morphology'=>['neuromorpho'],
        'Clinical Trials'=>['clinicaltrials','ctn'],
        'Proteomics Data'=>['peptideatlas','proteomexchange','yped'],
        'Physiological Signals'=>['physiobank'],
        'Epigenetic Data'=>['epigenomics'],
        'Data from Papers'=>['datacitepeerj'],

        'Omics Data'=>['omicsdi'],
        'Survey Data'=> ['datacitefdz'],
        'Cell Signaling'=>['datacitesdscsg'],
        'Imaging Data'=>['cvrg','neuromorpho','cia','openfmri','cil','bmrb','retina','emdb', 'nitrcir','neurovaultatlases','neurovaultcols','neurovaultnidm','datacitecxidb','datacitembf','datacitecandi'],
        'Unspecified' => ['lincs','bioproject','dryad','dataverse','niddkcr','icpsr','gdc','rgd','vectorbase','datacitegnd','datacitezenodo',
            'datacitecrcns','dataciteimmport','datacitedatabrary','datacitelshtm','datacitejhu',
            'datacitesimtk',
            'datacitebils',
            'dataciteada',
            'dataciteukda',
            'dataciteadaptive',
            'datacitemit',
            'datacitectsi',
            'datacitenimh',
            'nsrr'],
    ];
}*/
function getDatatypesMapping() {
    return ['Phenotype' => ['dbgap'],
        'Gene Expression' => ['geo'],
'Clinical Trials'=>['clinicaltrials'],
'Physiological Signals'=>['physiobank'],
'Imaging Data'=>['cvrg','immport'],    
];
}
// Returns data types mapping to elastic search indexes.
function getRepositoryIDMapping() {
    return ['0001' => 'dbgap',
        '0002' => 'geo',
'0009' => 'clinicaltrials',
'0011'=>'cvrg',
'0021'=>'physiobank',
'0061'=>'immport'
    ];
}


// Map repository ID to repository name
function getRepositoryIDNameMapping() {
    return ['0001' => 'dbGaP',
           '0002' => 'GEO',
'0009' => 'ClinicalTrials',
'0011'=>'cvrg',
'0021'=>'PhysioBank',
'0061'=>'ImmPort'
    ];
}

// Returns data types list.
function getElasticSearchIndexes() {

    return 'geo'.',' . 'dbgap' .','.'clinicaltrials'.',' .'cvrg'.',' .'physiobank'.',' .'immport'.',';

}

// Returns a list of accessibility types.
function getAllAccess() {
    return ['download', 'remoteAccess', 'remoteService', 'enclave','notAvailable'];
}

// Returns accessibility types mapping to elastic search indexes.
function getAccessibilityMapping() {
    return ['download' => ['dbgap','geo','cvrg','physiobank','immport'
    ],
        'remoteAccess' => [],
        'remoteService' => ['openfmri'],
        'enclave' => [],
        'notAvailable' => ['clinvar'],
    ];
}

// Return a list of authorization types
function getAllAuth(){
    return ['none','clickLicense','registration','duaIndividual','duaInstitution'];
}

// Return authorization types mapping to elasticsearch indexes.
function getAuthMapping(){
    return [
        'none'=>['dbgap','geo','cvrg','physiobank','immport'],
        'clickLicense'=>['dataverse'],
        'registration'=>['ctn','niddkcr','cil','icpsr','gdc'],
        'duaIndividual'=>[],
        'duaInstitution'=>[]
    ];
}
function get_keyword_define(){
    return [
        'remoteAccess'=>'Users may access the data in a secure remote environment.  Data may not be downloaded. ',
        'remoteService'=>'A user may request that a service or computation be applied to the data.  The remote site ensures that no protected information is identifiable in the product.  The product may be downloaded. ',
        'enclave'=>'Access is provided to approved users within a secure facility without remote access.',
        'clickLicense'=>'Users must agree to an online license agreement.',
        'registration'=>'Users must register before access is allowed.  Registration information may be verified.',
        'duaIndividual'=>'A data use agreement signed by the investigator is required.  Data use agreements may require additional information, such as a research plan and an IRB review.',
        'duaInstitution'=>"A data use agreement signed by the investigator's institution is required.  Data use agreements may require additional information, such as a research plan and an IRB review.",
        'simpleLogin'=>'Singlefactor login or the use of an authentication key or registered IP address is required.',
        'multiLogin'=>'Multiple-factor login using a combination of IP address, password protection, authentication key, or other forms of authentication.'
    ];
}
