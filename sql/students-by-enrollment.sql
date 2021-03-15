
/**
 * students-by-enrollment.sql
 *
 * @since 2017-08-26
 */
SELECT 
	  u.ID
	, u.user_email
	, u.display_name
FROM wp_users AS u
JOIN wp_lifterlms_user_postmeta AS m
  ON m.user_id = u.ID 
 AND m.meta_key = '_status'
 AND m.meta_value = 'enrolled'
 AND m.post_id = 1234 -- replace 1234 with the course or membership's post id
;
 