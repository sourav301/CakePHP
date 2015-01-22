<?php
class User extends AppModel{
    
    var $belongsTo = array(
        'Cities' => array(
            'className'     => 'City',
            'foreignKey'    => 'cities_id'
        ),
        'Colours' => array(
            'className'     => 'Colour',
            'foreignKey'    => 'colour_id'
        )
    );
   
}
