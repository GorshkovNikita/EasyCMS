<?php
/**
 * Created by PhpStorm.
 * User: Никита
 * Date: 12.10.2015
 * Time: 14:30
 */

namespace EasyCMS\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Post
 *
 * @property integer $id
 * @property integer $author_id
 * @property string $title
 * @property string $translit_title
 * @property string $content
 * @property string $route
 * @property string $type
 * @property string $status
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\EasyCMS\Models\Post whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\EasyCMS\Models\Post whereAuthorId($value)
 * @method static \Illuminate\Database\Query\Builder|\EasyCMS\Models\Post whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\EasyCMS\Models\Post whereTranslitTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\EasyCMS\Models\Post whereContent($value)
 * @method static \Illuminate\Database\Query\Builder|\EasyCMS\Models\Post whereRoute($value)
 * @method static \Illuminate\Database\Query\Builder|\EasyCMS\Models\Post whereType($value)
 * @method static \Illuminate\Database\Query\Builder|\EasyCMS\Models\Post whereStatus($value)
 * @method static \Illuminate\Database\Query\Builder|\EasyCMS\Models\Post whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\EasyCMS\Models\Post whereUpdatedAt($value)
 */
class Post extends Model {

    protected $table = 'cms_posts';

}