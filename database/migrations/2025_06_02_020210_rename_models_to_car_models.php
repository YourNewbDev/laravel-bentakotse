<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::rename('models', 'car_models');
    }

    public function down(): void
    {
        Schema::rename('car_models', 'models');
    }
};
