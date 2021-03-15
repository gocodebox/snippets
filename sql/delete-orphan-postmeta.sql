
/**
 * SQL queries to find and delete orphaned LifterLMS user postmeta data.
 *
 * @since 2018-05-01
 */
DELETE pm
FROM wp_lifterlms_user_postmeta AS pm
LEFT JOIN wp_users AS u ON u.ID = pm.user_id
WHERE u.id IS NULL;