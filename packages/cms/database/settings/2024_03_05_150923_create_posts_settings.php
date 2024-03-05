<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('posts.title', "Posts");
        $this->migrator->add('posts.slug', "posts");
        $this->migrator->add('posts.content', null);
        $this->migrator->add('posts.per_page', 5);
        $this->migrator->add('posts.header_image_id', null);
    }

    public function down(): void
    {
        $this->migrator->delete('posts.title');
        $this->migrator->delete('posts.slug');
        $this->migrator->delete('posts.content');
        $this->migrator->delete('posts.per_page');
        $this->migrator->delete('posts.header_image_id');
    }
};
