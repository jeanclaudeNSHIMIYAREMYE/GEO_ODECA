<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
<<<<<<< HEAD
        if (! Schema::hasColumn('parcelles', 'type_parcelle')) {
            Schema::table('parcelles', function (Blueprint $table) {
                $table->string('type_parcelle')->nullable()->after('type_verger');
            });
        }
=======
        Schema::table('parcelles', function (Blueprint $table) {
            $table->string('type')->nullable()->after('etat_verger');
        });
>>>>>>> ae8f16f205eda2ec354ad5b108546b94a08545bd
    }

    public function down(): void
    {
<<<<<<< HEAD
        if (Schema::hasColumn('parcelles', 'type_parcelle')) {
            Schema::table('parcelles', function (Blueprint $table) {
                $table->dropColumn('type_parcelle');
            });
        }
=======
        Schema::table('parcelles', function (Blueprint $table) {
            $table->dropColumn('type');
        });
>>>>>>> ae8f16f205eda2ec354ad5b108546b94a08545bd
    }
};
