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
    return ['Protein','Phenotype', 'Gene Expression', 'Data from Papers', 'Clinical Trials','Nucleotide Sequence', 'Unspecified'];
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
    return [
        'Protein' => ['pdb'],
        'Phenotype' => ['dbgap','mpd'],
        'Gene Expression' => ['geo','arrayexpress','lsdb','genenetwork','gemma'],
        'Clinical Trials'=>['clinicaltrials','ctn'],
        'Physiological Signals'=>['physiobank'],
        'Imaging Data'=>['cvrg','immport','openfmri','cil','neurovaultcols'],   
        'Data from Papers'=>['datacitepeerj'],
        'Omics Data'=>['omicsdi'],
        'Nucleotide Sequence' => ['datacitebgi'],
        'Proteomics Data'=>['peptideatlas','yped'],
        'Unspecified' =>['dryad', 'dataciteukda','bioproject','datacitedatabrary','rgd','icpsr','datacitemit','datacitefigshare','dataciteccdc','naturedata','simtk','datacitezenodo','nsrr','datacitelshtm','datacitenimh'
                         ,'datacitectsi',
        ],

];
}
// Returns data types mapping to elastic search indexes.
function getRepositoryIDMapping() {
    return [
        '0001' => 'dbgap',
        '0002' => 'geo',
        '0003' => 'arrayexpress',
        '0004' => 'datacitepeerj',
        '0005' => 'ctn',
        '0006' => 'Lsdb',
        '0007' => 'dryad',
        '0008' => 'datacitebgi',
        '0009' => 'clinicaltrials',
        '0010' => 'dataciteukda',
        '0011' => 'cvrg',
        '0012' => 'bioproject',
        '0013' => 'datacitedatabrary',
        '0014' => 'rgd',
        '0015' => 'openfmri',
        '0016' => 'peptideatlas',
        '0017' => 'icpsr',
        '0018' => 'dataverse',
        '0019' => 'pdb',
        '0020' => 'datacitemit',
        '0021' => 'physiobank',
        '0022' => 'datacitefigshare',
        '0023' => 'genenetwork',
        '0024' => 'dataciteccdc',
        '0025' => 'naturedata',
        '0026' => 'cil',
        '0027' => 'simtk',
        '0028' => 'yped',
        '0029' => 'gemma',
        '0030' => 'datacitezenodo',
        '0031' => 'omicsdi',
        '0032' => 'nsrr',
        '0033' => 'datacitelshtm',
        '0034' => 'datacitenimh',
        '0035' => 'neurovaultcols',
        '0036' => 'datacitectsi',
        '0037' => 'mpd',
        '0038' => 'immport'
    ];
}


// Map repository ID to repository name
function getRepositoryIDNameMapping() {
    return [
        '0001' => 'dbGaP',
        '0002' => 'GEO',
        '0003' => 'ArrayExpress',
        '0004' => 'PeerJ',
        '0005' => 'CTN',
        '0006' => 'LSDB',
        '0007' => 'Dryad',
        '0008' => 'GigaDB',
        '0009' => 'ClinicalTrials',
        '0010' => 'UKDA',
        '0011' => 'cvrg',
        '0012' => 'BioProject',
        '0013' => 'Databrary',
        '0014' => 'RGD',
        '0015' => 'openfMRI',
        '0016' => 'PeptideAtlas',
        '0017' => 'ICPSR',
        '0018' => 'Dataverse',
        '0019' => 'PDB',
        '0020' => 'MITLCP',
        '0021' => 'PhysioBank',
        '0022' => 'Figshare',
        '0023' => 'GeneNetwork',
        '0024' => 'CCDC',
        '0025' => 'Scientific Data',
        '0026' => 'CIL',
        '0027' => 'SimTK',
        '0028' => 'YPED',
        '0029' => 'GEMMA',
        '0030' => 'Zenodo',
        '0031' => 'OmicsDI',
        '0032' => 'NSRR',
        '0033' => 'LSHTM',
        '0034' => 'NIMH',
        '0035' => 'NeuroVault:Cols',
        '0036' => 'UCSF-CTSI',
        '0037' => 'MPD',
        '0038' => 'ImmPort'
    ];
}

// Returns data types list.
function getElasticSearchIndexes() {

    return 'geo'.',' . 'dbgap' .','.'clinicaltrials'.',' .'cvrg'.',' .'physiobank'.',' .'immport'.','.'arrayexpress'.','.'datacitepeerj'.','.'ctn'.','.'lsdb'.','.'dryad'.','.'datacitebgi'.','.
            'dataciteukda'.','.'bioproject'.','.'datacitedatabrary'.','.'rgd'.','.'openfmri'.','.'peptideatlas'.','.'icpsr'.','.'dataverse'.','.'pdb'.','.'datacitemit'.','.'datacitefigshare'.','.
            'genenetwork'.','.'dataciteccdc'.','.'naturedata'.','.'cil'.','.'simtk'.','.'yped'.','.'gemma'.','.'datacitezenodo'.','.'omicsdi'.','.'nsrr'.','.'datacitelshtm'.','.'datacitenimh'.','.
            'neurovaultcols'.','.'datacitectsi'.','.'mpd';

}

// Returns a list of accessibility types.
function getAllAccess() {
    return ['download', 'remoteAccess', 'remoteService', 'enclave','notAvailable'];
}

// Returns accessibility types mapping to elastic search indexes.
function getAccessibilityMapping() {
    return ['download' => ['dbgap','geo','cvrg','physiobank','immport','arrayexpress','datacitepeerj','ctn','lsdb', 'dryad', 'datacitebgi', 'dataciteukda','bioproject','datacitedatabrary',
                            'rgd','peptideatlas','icpsr','dataverse','pdb','datacitemit','datacitefigshare','genenetwork','dataciteccdc','naturedata','cil','simtk','yped','gemma','datacitezenodo',
                            'omicsdi','nsrr','datacitelshtm','datacitenimh','neurovaultcols','datacitectsi','mpd'
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
        'none'=>['dbgap','geo','cvrg','physiobank','immport','arrayexpress','datacitepeerj','lsdb','dryad', 'datacitebgi','dataciteukda','bioproject','datacitedatabrary','rgd','openfmri','peptideatlas','pdb','datacitemit',
                'datacitefigshare','genenetwork','dataciteccdc','naturedata','simtk','yped','gemma','datacitezenodo','omicsdi','nsrr','datacitelshtm','datacitenimh','neurovaultcols','datacitectsi','mpd'
        ],
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
