<?php
namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    protected $casts = [
        'extend' => 'array'
    ];


    public static function boot() {
        parent::boot();

        static::saving( function ( $quick_start ) {
            if ( $quick_start->isDirty( 'extend' ) ) {
                $prev_value = $quick_start->getOriginal( 'extend' );
                $value = $quick_start->getAttribute( 'extend' );
                $prev_value = ( $prev_value ) ? json_decode( $prev_value, true ) : [];
                $value = $value ?: [];
                $quick_start->setAttribute( 'extend', array_merge( $prev_value, $value ) );
            }

        } );

    }
}