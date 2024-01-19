/**
 * Exclude posts (given their IDs) from being seen by users given a list of roles.
 * 
 * Learn more at: https://lifterlms.com/link-to-content-if-available-or-remove-this-line/
 * 
 * You can add this recipe to your site by creating a custom plugin
 * or using the Code Snippets plugin available for free in the WordPress repository.
 * Read this companion documentation for step-by-step directions on either method.
 * https://lifterlms.com/docs/adding-custom-code/
 */

function exclude_posts_for_roles($query) {
    // Check if it is the main query and the user is logged in
    if (is_admin() || !$query->is_main_query() || !is_user_logged_in()) {
        return;
    }

    // Replace the array with your actual roles you want
    $roles_to_exclude = array(
		    'student',
		    'editor'
	  );

    // Replace the array with your actual post IDs to exclude
    $posts_to_exclude = array(
		    98,
		    109
	  );

    // Check if the user has any of the specified roles
    $user_has_excluded_role = false;
    foreach ($roles_to_exclude as $role) {
        if (current_user_can($role)) {
            $user_has_excluded_role = true;
            break;
        }
    }

    // If the user has any of the specified roles, exclude the specific posts
    if ($user_has_excluded_role) {
        $query->set('post__not_in', $posts_to_exclude);
    }
}

add_action('pre_get_posts', 'exclude_posts_for_roles');
