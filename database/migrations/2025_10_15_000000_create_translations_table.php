<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	public function up(): void
	{
		Schema::create('translations', function (Blueprint $table) {
			$table->id();
			$table->string('namespace')->default('default');
			$table->string('key');
			$table->string('locale', 10)->default('en');
			$table->text('value');
			$table->timestamps();
			$table->unique(['namespace', 'key', 'locale']);
		});
	}

	public function down(): void
	{
		Schema::dropIfExists('translations');
	}
};


