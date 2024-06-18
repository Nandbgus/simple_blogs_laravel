<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Post;
use App\Models\Category;

class CategoryPostTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_create_post_with_categories()
    {
        // Buat 5 kategori tetap
        $categories = Category::factory()->count(5)->create();

        // Buat 1 post
        $post = Post::factory()->create();

        // Kaitkan post dengan kategori acak (1 hingga 3 kategori)
        $randomCategories = $categories->random(rand(1, 3));
        $post->categories()->attach($randomCategories);

        // Assert jumlah kategori pada post sesuai
        $this->assertEquals($randomCategories->count(), $post->categories()->count());

        // Assert kategori yang terlampir pada post sesuai dengan kategori acak yang dipilih
        foreach ($randomCategories as $category) {
            $this->assertTrue($post->categories->contains($category));
        }
    }

    /** @test */
    public function it_does_not_create_duplicate_category_post()
    {
        // Buat 5 kategori tetap
        $categories = Category::factory()->count(5)->create();

        // Buat 1 post
        $post = Post::factory()->create();

        // Kaitkan post dengan kategori acak (1 hingga 3 kategori)
        $randomCategories = $categories->random(rand(1, 3));
        $post->categories()->attach($randomCategories);

        // Coba kaitkan kembali kategori yang sama, harusnya tidak ada duplikasi
        foreach ($randomCategories as $category) {
            try {
                $post->categories()->attach($category);
            } catch (\Exception $e) {
                $this->assertInstanceOf(\Illuminate\Database\QueryException::class, $e);
            }
        }

        // Assert jumlah kategori pada post tetap sesuai dengan kategori acak yang pertama kali dipilih
        $this->assertEquals($randomCategories->count(), $post->categories()->count());
    }
}
