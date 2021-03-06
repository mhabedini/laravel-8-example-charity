<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\District
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\District newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\District newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\District query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\District whereApplicationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\District whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\District whereDeepLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\District whereDeepLinkPackage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\District whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\District whereIsForced($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\District whereIsSpecific($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\District whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\District wherePlatform($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\District whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\District whereUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\District whereVersionCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\District whereVersionName($value)
 * @mixin \Eloquent
 * @property int $id
 * @property string $name
 * @property int $city_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|District whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|District whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|District whereName($value)
 */
class District extends Model
{
    use HasFactory;

    protected $fillable = ['city_id', 'name'];
}
