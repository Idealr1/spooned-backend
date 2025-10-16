<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('sections')) {
            return;
        }

        // Drop legacy unique index on `key` if it exists, then ensure composite unique exists.
        $hasLegacy = DB::select("SHOW INDEX FROM sections WHERE Key_name = 'sections_key_unique'");
        if (!empty($hasLegacy)) {
            DB::statement('ALTER TABLE sections DROP INDEX sections_key_unique');
        }

        $hasComposite = DB::select("SHOW INDEX FROM sections WHERE Key_name = 'sections_key_locale_unique'");
        if (empty($hasComposite)) {
            Schema::table('sections', function (Blueprint $table) {
                $table->unique(['key', 'locale']);
            });
        }
    }

    public function down(): void
    {
        if (!Schema::hasTable('sections')) {
            return;
        }

        $hasComposite = DB::select("SHOW INDEX FROM sections WHERE Key_name = 'sections_key_locale_unique'");
        if (!empty($hasComposite)) {
            Schema::table('sections', function (Blueprint $table) {
                $table->dropUnique('sections_key_locale_unique');
            });
        }

        $hasLegacy = DB::select("SHOW INDEX FROM sections WHERE Key_name = 'sections_key_unique'");
        if (empty($hasLegacy)) {
            Schema::table('sections', function (Blueprint $table) {
                $table->unique('key');
            });
        }
    }
};


