<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResourcesTable extends Migration
{
    public function up()
    {
        Schema::create('resources', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('slug');
            $table->string('authors');
            $table->string('authors_affiliation')->nullable();
            $table->string('publisher')->nullable();
            $table->date('date_of_publication')->nullable();
            $table->string('year_of_publication')->nullable();
            $table->string('issn_isbn_doi')->nullable();
            $table->string('edition')->nullable();
            $table->string('volume')->nullable();
            $table->string('issue')->nullable();
            $table->longText('abstract')->nullable();
            $table->longText('references')->nullable();
            $table->string('tags');
            $table->string('pages');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
