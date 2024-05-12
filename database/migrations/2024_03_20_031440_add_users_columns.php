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
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('position_id')
                ->references('id')
                ->on('positions')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->integer('role');
            $table->date('hire_date');
            $table->decimal('base_salary', 19, 9);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['position_id']);
            $table->dropColumn('position_id');
            $table->dropColumn('role');
            $table->dropColumn('hire_date');
            $table->dropColumn('base_salary');
        });
    }
};
