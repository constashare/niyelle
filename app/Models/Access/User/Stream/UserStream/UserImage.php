<?php
	/**
	 * Created by PhpStorm.
	 * User: Marcus
	 * Date: 3/20/2017
	 * Time: 9:05 PM
	 */
	
	
	namespace App\Models\Access\User\Stream\UserStream\UserVideo;
	
	
	use App\Models\Access\User\User;
	use Illuminate\Database\Eloquent\Model;
	
	
	class UserVideo extends Model
	{
		
		use \GetStream\StreamLaravel\Eloquent\ActivityTrait;
		/**
		 * The attributes that are mass assignable.
		 *
		 * @var array
		 */
		protected $fillable = ['user_id', 'image_id', 'title', 'category', 'image_hashtag', 'image_thumbnail_URL', 'updated_at'];
		
		/**
		 * The attributes that should be cast to native types.
		 *
		 * @var array
		 */
		protected $casts = [
			'user_id' => 'string',
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
			return array('user_id'=>$this->user_id, 'image_id' => $this->image_id, 'title' => $this->title, 'category '=>
				$this->category, 'image_hashtag'=>$this->image_hashtag,
				'image_thumbnail_URL'=>$this->image_thumbnail_URL, 'updated_at'=>$this->updated_at);
		}
		/**
		 * Stream: Change activity verb to 'created':
		 */
		public function activityVerb()
		{
			return 'user_image';
		}
	}