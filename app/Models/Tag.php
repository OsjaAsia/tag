<?php

namespace Osja\Tag\Models;


use Osja\Core\Models\BaseModel;

class Tag extends BaseModel
{
    /**
     * @var string
     */
    protected $table = 'tags';

    /**
     * @var array
     */
    protected $fillable = array(
        'name',
        'is_active',
        'css_class',
        'created_by',
        'updated_by'
    );

    protected $casts = [
        'is_active'=> self::CAST_BOOL
    ];

}
