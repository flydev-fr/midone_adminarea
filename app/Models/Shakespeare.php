<?php

namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class Shakespeare extends Model
{
    protected $table = 'shakespeares';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $mappingProperties = array(
        'title' => array(
            'type' => 'string',
            'analyzer' => 'standard'
        )
/*        'line_id' => [
            'type' => 'integer',
            'analyzer' => 'standard'
        ],

        'play_name' => [
            'type' => 'string',
            'analyzer' => 'standard' // not_analyzed
        ],

        'speech_number' => [
            'type' => 'number',
            'analyzer' => 'standard'
        ],


        'line_number' => [
            'type' => 'string', // line_number??
            'analyzer' => 'standard'
        ],

        'speaker' => [
            'type' => 'string',
            'analyzer' => 'standard' // not_analyzed
        ],


        'text_entry' => [
            'type' => 'text',
            'analyzer' => 'standard'
        ],
*/
    );



    protected $fillable = [
        'id', 'line_id', 'play_name', 'speech_number', 'line_number', 'speaker', 'text_entry', 'created_at', 'updated_at'
    ];

/*    function getIndexName()
    {
        return 'shakespeares';
    }*/

    public static function setESMapping()
    {
//        return;

//        if (   Shakespeare::mappingExists() ) {
//        Shakespeare::deleteMapping();
//        }
        $ret= Shakespeare::createIndex($shards = null, $replicas = null);
        \Log::info( '-1 setESMapping $ret ::' . print_r(  $ret, true  ) );

        echo '<pre>-1 $ret::'.print_r($ret,true).'</pre>';

        $ret= Shakespeare::putMapping( $ignoreConflicts = true );
        \Log::info( '-2 setESMapping $ret ::' . print_r(  $ret, true  ) );
        echo '<pre>-2 $ret::'.print_r($ret,true).'</pre>';

        $ret= Shakespeare::addAllToIndex();
        \Log::info( '-3 setESMapping $ret ::' . print_r(  $ret, true  ) );
        echo '<pre>-3 $ret::'.print_r($ret,true).'</pre>';
        return $ret;

//        $elasticaClient = new \Elasticsearch\Client();
        $elasticaClient = \Elasticsearch\ClientBuilder::create()->build();


//        echo '<pre>$elasticaClient::'.print_r($elasticaClient,true).'</pre>';
        /* $elasticaClient::Elasticsearch\Client Object
(
    [transport] => Elasticsearch\Transport Object
        elasticsearch_type
        */

        //// WORKING CODE ///
        /*        $name= 'Default Value';
                $age= 45;
                $params = array();
                $params['body']  = array(
                    'name' => $name, 											//preparing structred data
                    'age' =>$age
                );
                $params['index'] = 'select_vote';
                $params['type']  = 'vote';
                $result = $elasticaClient->index($params);							//using Index() function to inject the data
                var_dump($result);

                die("-1 XXZ");*/
        //// WORKING CODE END ///
        $elasticaIndex = $elasticaClient->getIndex('select_vote');
        echo '<pre>$elasticaIndex::'.print_r($elasticaIndex,true).'</pre>';

        $elasticaType = $elasticaIndex->getType('vote');
        echo '<pre>$elasticaType::'.print_r($elasticaType,true).'</pre>';

// Define mapping
//        $mapping = new \Elastica\Type\Mapping();
//        $mapping->setType($elasticaType);

// Set mapping
        $mapping->setProperties(array(
            'id'      => array('type' => 'integer', 'include_in_all' => FALSE),
//            'user'    => array(
//                'type' => 'object',
//                'properties' => array(
//                    'name'      => array('type' => 'string', 'include_in_all' => TRUE),
//                    'fullName'  => array('type' => 'string', 'include_in_all' => TRUE, 'boost' => 2)
//                ),
//            ),
            'name'             => array('type' => 'string', 'include_in_all' => TRUE),
            'slug'             => array('type' => 'string', 'include_in_all' => TRUE),
            'description'      => array('type' => 'string', 'include_in_all' => FALSE),
            'created_at'       => array('type' => 'date', 'include_in_all' => FALSE),
        ));
        /*                 $elastic->index([
                            'index' => $elasticsearch_root_index,
                            'type'  => $elasticsearch_type,
                            'id'    => $nextVote->id,
                            'body'  => [
                                'id'          => $nextVote->id,
                                    'slug'        => $nextVote->slug,
                                    'name'        => $nextVote->name,
                                    'description' => $nextVote->description,
                                    'created_at'  => $nextVote->created_at,
                                'vote_items'  => $relatedVoteItemsList,
                                'category_id' => $voteCategory->id,
                                'category'    => [
                                    'name'         => $voteCategory->name,
                                    'slug'         => $voteCategory->slug,
                                    'created_at'   => $voteCategory->created_at,
                                ],
                            ]
                        ]);
         */
// Send mapping to type
        $mapping->send();
        /*$elasticaType = $elasticaIndex->getType('tweet');

// Define mapping
$mapping = new \Elastica\Type\Mapping();
$mapping->setType($elasticaType);

// Set mapping
$mapping->setProperties(array(
    'id'      => array('type' => 'integer', 'include_in_all' => FALSE),
    'user'    => array(
        'type' => 'object',
        'properties' => array(
            'name'      => array('type' => 'string', 'include_in_all' => TRUE),
            'fullName'  => array('type' => 'string', 'include_in_all' => TRUE, 'boost' => 2)
        ),
    ),
    'msg'     => array('type' => 'string', 'include_in_all' => TRUE),
    'tstamp'  => array('type' => 'date', 'include_in_all' => FALSE),
    'location'=> array('type' => 'geo_point', 'include_in_all' => FALSE)
));

// Send mapping to type
$mapping->send();*/
    } // public static function setESMapping()


    /*    public function creator(){
            return $this->belongsTo('App\Models\User', 'creator_id','id');
        }

        public function scopeGetByTitle($query, $title = null)
        {
            if (empty($title)) {
                return $query;
            }
            return $query->where( with(new Shakespeare)->getTable() . '.title', 'like', '%'.$title.'%');
        }
    */



/*    public function scopeGetByPublished($query, $published = null)
    {
        if (!isset($published) or strlen($published) == 0) {
            return $query;
        }
        return $query->where(with(new Shakespeare)->getTable().'.published', $published);
    }

    public function scopeOnlyPublished($query) {
        return $query->where('published', true);
    }*/


/*    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = workTextString($value);
    }

    public static function getShakespeareValidationRulesArray($shakespeare_id= null, array $skipFieldsArray= []) : array
    {
        $validationRulesArray = [
            'title' => [
                'required',
                'string',
                'max:255',
                Rule::unique(with(new Shakespeare)->getTable())->ignore($shakespeare_id),
            ],
            'content'           => 'required',
            'content_shortly'   => 'nullable',
            'meta_description'  => 'nullable',
            'meta_keywords'     => 'nullable',
            'image'             => 'nullable|max:100',

            'published'         => 'required|in:' . '0,1',
            'is_homeshakespeare'       => 'required|in:' . '0,1',
            'creator_id'        => 'required|integer|exists:' . (with(new User)->getTable()) . ',id',
        ];

        foreach( $skipFieldsArray as $next_field ) {
            if(!empty($validationRulesArray[$next_field])) {
                unset($validationRulesArray[$next_field]);
            }
        }

        return $validationRulesArray;
    } // public static function getShakespeareValidationRulesArray($shakespeare_id) : array
*/

}

