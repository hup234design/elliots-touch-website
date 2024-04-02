<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('headerables', function (Blueprint $table) {
            $table->dropColumn('eyebrow');
            $table->dropColumn('heading');
            $table->dropColumn('text');
            $table->dropColumn('links');
        });

        Schema::table('headerables', function (Blueprint $table) {
            $table->json('header_blocks')->after('headerable_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('headerables', function (Blueprint $table) {
            $table->dropColumn('header_blocks');
        });

        Schema::table('headerables', function (Blueprint $table) {
            $table->string('eyebrow')->after('headerable_id')->nullable();
            $table->string('heading')->after('eyebrow')->nullable();
            $table->text('text')->after('heading')->nullable();
            $table->json('links')->after('text')->nullable();
        });
    }
};
