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
        Schema::table('tasks', function (Blueprint $table) {
            // $table->unsignedBigInteger("user_id")->after("id")->nullable();
            // $table->foreign("user_id")->references("id")->on("users")->onUpdate("cascade")->onDelete("cascade");
            
            // the above parameter cascade equal to restrict
            // also we can onDelete('set null')
        
            // new syntax of creating foreign key
            $table->foreignId("user_id")->nullable()->constrained()->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tasks', function (Blueprint $table) {
            // $table->dropForeign("tasks_user_id_foreign");

            $table->dropForeign(["user_id"]);
            $table->dropColumn("user_id");
        });
    }
};

// migrate:fresh drop all tables and then create it again