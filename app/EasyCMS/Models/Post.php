<?php
/**
 * Created by PhpStorm.
 * User: Никита
 * Date: 12.10.2015
 * Time: 14:30
 */

namespace App\EasyCMS\Models;

use Illuminate\Database\Eloquent\Model;


/**
 * App\EasyCMS\Models\Post
 *
 * @property integer $id
 * @property integer $author_id
 * @property string $name
 * @property string $slug_name
 * @property integer $parent_id
 * @property string $type
 * @property string $status
 * @property string $route
 * @property string $content
 * @property string $description
 * @property string $image
 * @property boolean $final
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\EasyCMS\Models\Post whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\EasyCMS\Models\Post whereAuthorId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\EasyCMS\Models\Post whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\EasyCMS\Models\Post whereSlugName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\EasyCMS\Models\Post whereParentId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\EasyCMS\Models\Post whereType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\EasyCMS\Models\Post whereStatus($value)
 * @method static \Illuminate\Database\Query\Builder|\App\EasyCMS\Models\Post whereRoute($value)
 * @method static \Illuminate\Database\Query\Builder|\App\EasyCMS\Models\Post whereContent($value)
 * @method static \Illuminate\Database\Query\Builder|\App\EasyCMS\Models\Post whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\EasyCMS\Models\Post whereImage($value)
 * @method static \Illuminate\Database\Query\Builder|\App\EasyCMS\Models\Post whereFinal($value)
 * @method static \Illuminate\Database\Query\Builder|\App\EasyCMS\Models\Post whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\EasyCMS\Models\Post whereUpdatedAt($value)
 */
class Post extends Model {

    protected $table = 'cms_posts';

    public static function posts() {
        $posts = Post::where('type', 'post')->get();
        return $posts;
    }

    public static function pages() {
        $pages = Post::where('type', 'page')->get();
        return $pages;
    }

    public static function products() {
        $products = Post::where('type', 'product')->get();
        return $products;
    }

    public static function categories() {
        $categories = Post::where('type', 'category')->get();
        return $categories;
    }

    public static function files() {
        $files = Post::where('type', 'file')->get();
        return $files;
    }

    public function isPublished() {
        return $this->status == 'publish' ? true : false;
    }
}