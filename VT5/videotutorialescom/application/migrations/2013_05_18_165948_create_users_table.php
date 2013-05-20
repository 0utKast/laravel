<?php

class Create_Users_Table {

	/**
  * Hacer cambios en la base de datos.
  *
  * @return void
  */
  public function up()
  {
    Schema::table('users', function($table)
    {
      $table->create();

      $table->increments('id');

      $table->string('email');
      $table->string('real_name');
      $table->string('password');

      $table->timestamps();
    });
  }

  /**
  * Revertir los cambios en  la base de datos.
  *
  * @return void
  */
  public function down()
  {
    Schema::drop('users');
  }

}