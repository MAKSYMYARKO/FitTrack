<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('role')->default('athlete')->after('password');
            $table->string('plan')->default('free')->after('role');
            $table->smallInteger('height_cm')->nullable()->after('plan');
            $table->string('goal')->nullable()->after('height_cm');
            $table->string('experience_level')->nullable()->after('goal');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['role', 'plan', 'height_cm', 'goal', 'experience_level']);
        });
    }
};
