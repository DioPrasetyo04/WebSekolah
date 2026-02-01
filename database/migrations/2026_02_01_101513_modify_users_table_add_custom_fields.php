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
            $table->string('photo')->nullable()->after('password');
            $table->string('no_telephone')->nullable()->after('photo');
            $table->boolean('is_active')->default(false)->after('no_telephone');
            $table->softDeletes();
            
            // Add indexes for frequently queried columns
            $table->index('email');
            $table->index('is_active');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropIndex(['email']);
            $table->dropIndex(['is_active']);
            $table->dropSoftDeletes();
            $table->dropColumn(['photo', 'no_telephone', 'is_active']);
        });
    }
};
