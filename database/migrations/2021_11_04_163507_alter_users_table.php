<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {

            //perfil
            $table->boolean('lessor')->nullable();
            $table->boolean('lessee')->nullable();

            //data
            $table->string('genre')->nullable();
            $table->string('document')->unique();
            $table->string('document_secondary',20)->nullable();
            $table->string('document_secondary_complement')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('place_of_birth')->nullable();
            $table->string('civil_status')->nullable();
            $table->string('cover')->nullable();

            // income
            $table->string('occupation')->nullable();
            $table->double('income',10, 2)->nullable();
            $table->string('company_work')->nullable();

            // address
            $table->string('zipcode')->nullable();
            $table->string('street')->nullable();
            $table->string('number')->nullable();
            $table->string('complement')->nullable();
            $table->string('neighborhood')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();

            // contact
            $table->string('telephone')->nullable();
            $table->string('cell')->nullable();

            //spouse
            $table->string('type_of_communion')->nullable();
            $table->string('spouse_name')->nullable();
            $table->string('spouse_genre')->nullable();
            $table->string('spouse_document')->unique();
            $table->string('spouse_document_secondary',20)->nullable();
            $table->string('spouse_document_secondary_complement')->nullable();
            $table->date('spouse_date_of_birth')->nullable();
            $table->string('spouse_place_of_birth')->nullable();

            // income - spuse
            $table->string('spouse_occupation')->nullable();
            $table->double('spouse_income',10, 2)->nullable();
            $table->string('spouse_company_work')->nullable();

            // access
            $table->double('admin')->nullable();
            $table->double('client')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {

            //perfil
            $table->dropColumndropColumndropColumndropColumn('lessor');
            $table->dropColumndropColumndropColumndropColumn('lessee');

            //data
            $table->dropColumndropColumndropColumndropColumn('genre');
            $table->dropColumn('document');
            $table->dropColumn('document_secondary',20);
            $table->dropColumn('document_secondary_complement');
            $table->dropColumn('date_of_birth');
            $table->dropColumn('place_of_birth');
            $table->dropColumn('civil_status');
            $table->dropColumn('cover');

            // income
            $table->dropColumndropColumndropColumn('occupation');
            $table->dropColumndropColumndropColumn('income',10, 2);
            $table->dropColumndropColumndropColumn('company_work');

            // address
            $table->dropColumndropColumn('zipcode');
            $table->dropColumndropColumn('street');
            $table->dropColumndropColumn('number');
            $table->dropColumndropColumn('complement');
            $table->dropColumndropColumn('neighborhood');
            $table->dropColumndropColumn('state');
            $table->dropColumndropColumn('city');

            // contact
            $table->dropColumn('telephone');
            $table->dropColumn('cell');

            //spouse
            $table->dropColumndropColumn('type_of_communion');
            $table->dropColumndropColumn('spouse_name');
            $table->dropColumndropColumn('spouse_genre');
            $table->dropColumndropColumn('spouse_document');
            $table->dropColumndropColumn('spouse_document_secondary',20);
            $table->dropColumndropColumn('spouse_document_secondary_complement');
            $table->dropColumndropColumn('spouse_date_of_birth');
            $table->dropColumndropColumn('spouse_place_of_birth');

            // income - spuse
            $table->dropColumn('spouse_occupation');
            $table->dropColumn('spouse_income',10, 2);
            $table->dropColumn('spouse_company_work');

            // access
            $table->dropColumn('admin');
            $table->dropColumn('client');
        });
    }
}
