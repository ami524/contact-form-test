<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->tinyInteger('gender')->comment('性別:1=男性、2=女性');
            $table->string('email');
            $table->string('tel', 11);
            $table->string('address');
            $table->string('building')->nullable();
            $table->string('category_id')->comment('お問い合わせ種類:1=商品のお届けについて、2=商品の交換について、3=商品トラブル、4=ショップへのお問い合わせ、5=その他');
            $table->text('content')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
