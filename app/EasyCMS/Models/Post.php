<?php
/**
 * Created by PhpStorm.
 * User: Никита
 * Date: 12.10.2015
 * Time: 14:30
 */

namespace App\EasyCMS\Models;

use App\EasyCMS\CategoryType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;


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
 * @property string $category_type
 * @method static \Illuminate\Database\Query\Builder|\App\EasyCMS\Models\Post whereCategoryType($value)
 */
class Post extends Model {

    protected $table = 'cms_posts';

    /**
     * @return Post[]
     */
    public static function all_posts() {
        $posts = Post::whereType('post')->get();
        return $posts;
    }

    /**
     * @return Post[]
     */
    public static function all_pages() {
        $pages = Post::whereType('page')->get();
        return $pages;
    }

    /**
     * @return Post[]
     */
    public static function all_products() {
        $products = Post::whereType('product')->get();
        return $products;
    }

    /**
     * Возвращает все категории в зависимости от типа.
     * @param $type
     * @return Post[]
     */
    public static function categories_by_type($type) {
        $categories = Post::whereType('category')->where('category_type', $type)->get();
        return $categories;
    }

    /**
     * Возвращает все категории в зависимости от типа, которые могут иметь элементы.
     * Тип - CategoryType::POSTS or CategoryType::PRODUCTS.
     * @param $type
     * @return Post[]
     */
    public static function final_categories_by_type($type) {
        $categories = Post::whereType('category')
            ->whereCategoryType($type)
            ->whereFinal(true)
            ->get();
        return $categories;
    }

    /**
     * Возвращает корневые категории в зависимости от типа.
     * Тип - CategoryType::POSTS or CategoryType::PRODUCTS.
     * @param $type
     * @return Post[]
     */
    public static function root_categories_by_type($type) {
        $categories = Post::whereType('category')
            ->whereCategoryType($type)
            ->whereParentId(null)
            ->get();
        return $categories;
    }

    /**
     * @return Post[]
     */
    public static function files() {
        $files = Post::whereType('file')->get();
        return $files;
    }

    /**
     * Возвращает все подкатегории текущей категории.
     * Вызывается только для категорий.
     * @return Post[]
     */
    public function subcategories() {
        $categories = Post::whereType('category')
            ->whereParentId($this->id)
            ->get();
        return $categories;
    }

    /**
     * Возвращает родительскую категорию текущей категории.
     * Вызывается только для категорий.
     * @return Post
     */
    public function parent_category() {
        $category = Post::whereId($this->parent_id)->first();
        return $category;
    }

    /**
     * Возвращает категорию, к которой принадлежит Post.
     * Вызывается только для элементов с типом products или posts.
     * @return Post
     */
    public function category() {
        $category = Post::whereId($this->parent_id)->first();
        return $category;
    }

    /**
     * Возвращает продукты, которые принадлежат текущей категории.
     * Вызывается только для категорий.
     * @return Post[]
     */
    public function products() {
        $products = Post::whereType('product')
            ->whereParentId($this->id)
            ->get();
        return $products;
    }

    public function is_published() {
        return $this->status == 'publish' ? true : false;
    }

    public function is_final() {
        return $this->final ? true : false;
    }

    public function is_root() {
        return $this->parent_id == null ? true : false;
    }

    public function is_category() {
        return $this->type == 'category' ? true : false;
    }
}