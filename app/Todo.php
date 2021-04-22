<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
  /**
   * The database connection that should be used by the model.
   *
   * @var string
   */
  protected $connection = 'sqlite';

  /**
   * The table associated with the model.
   *
   * @var string
   */
  protected $table = 'todos';

  /**
   * The primary key associated with the table.
   *
   * @var string
   */
  protected $primaryKey = 'todo_id';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'text', 'status', 'order',
  ];

  /**
   * The attributes that should be cast.
   *
   * @var array
   */
  protected $casts = [
      'created_at' => 'datetime:Y-m-d',
  ];
}
