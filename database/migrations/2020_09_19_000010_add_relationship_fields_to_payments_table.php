<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToPaymentsTable extends Migration
{
    public function up()
    {
        Schema::table('payments', function (Blueprint $table) {
            $table->unsignedInteger('service_id');
            $table->foreign('service_id', 'service_fk_2185532')->references('id')->on('services');
            $table->unsignedInteger('client_id');
            $table->foreign('client_id', 'client_fk_2185535')->references('id')->on('clients');
            $table->unsignedInteger('created_by_id')->nullable();
            $table->foreign('created_by_id', 'created_by_fk_2185539')->references('id')->on('users');
        });
    }
}
