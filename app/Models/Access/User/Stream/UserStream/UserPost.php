<?php
	/**
	 * Created by PhpStorm.
	 * User: Marcus
	 * Date: 3/20/2017
	 * Time: 9:05 PM
	 */
	
	
	namespace App\Models\Access\User\Stream\UserStream\UserPost;
	
	
	use App\Models\Access\User\User;
	use Illuminate\Database\Eloquent\Model;
	
	class UserPost extends Model
	{
		
		use \GetStream\StreamLaravel\Eloquent\ActivityTrait;
		/**
		 * The attributes that are mass assignable.
		 *
		 * @var array
		 */
		protected $fillable = ['name', 'display_name', 'timestamp'];
		
		/**
		 * The attributes that should be cast to native types.
		 *
		 * @var array
		 */
		protected $casts = [
			'user_id' => 'int',
		];
		/**
		 * Get the user that owns the task.
		 */
		public function user()
		{
			return $this->belongsTo(User::class);
		}
		/**
		 * Stream: Add extra activity data - task name, and user's display name:
		 */
		public function activityExtraData()
		{
			return array('name'=>$this->name, 'display_name' => $this->display_name);
		}
		/**
		 * Stream: Change activity verb to 'created':
		 */
		public function activityVerb()
		{
			return 'post';
		}
	}