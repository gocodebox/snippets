# Snippets Library for LifterLMS and related Add-ons

We are aiming to collect all of the most useful Gists and Snippets here in one place.

A few of the benefits of this collection will be:

* **Quality Assurance:** Each snippet will get code reviewed for quality and compatibility
* **Access:** Easy to search via GitHub (or locally)
* **Offline Access:** Easy to checkout this repo locally by the team as needed
* **Maintainability:** One place to update as changes are needed going forward for any snippet (not stuck on any one GitHub user account)

A snippet should contain the full functionality — we should avoid having two separate snippets that rely on one another to achieve the desired result.

These code snippets are shared *as is* without warranty. 

## Submitting new snippets or changes

1. Go to the folder (or create a new path) for where you want to add/change a snippet.
2. Create a fork and submit Pull Request with your snippet work. Never use underscores in snippet file names or folder names.
3. The PR will be code reviewed.
4. In the mean time, you can provide customers with your own Gist URL of the snippet.
5. After PR is approved, the snippet will be merged.
6. Now the snippet is ready for inclusion on our site!

## Header Layout for snippets
Please include the following header format when submitting a snippet
```
/**
 * Describe what the snippet does in one sentence. (i.e. Add a checkbox to the checkout page.)
 *
 * Learn more at: https://lifterlms.com/link-to-content-if-available-or-remove-this-line/
 *
 * You can add this recipe to your site by creating a custom plugin
 * or using the Code Snippets plugin available for free in the WordPress repository.
 * Read this companion documentation for step-by-step directions on either method.
 * https://lifterlms.com/docs/adding-custom-code/
 */
```

## Choosing the "Collection" and Organizing Folders

The snippet folder should match the plugin this code modifies. For example, if the snippet modifies a direct behavior of the LifterLMS core course catalog, place the snippet in the "lifterlms/course-catalog" folder. If the snippet modifies a setting or adds content to a LifterLMS screen in the WordPress admin, while this may affect frontend components, it belongs in the "lifterlms/admin-pages" folder.

Choose the folder and subfolder that your snippet integrates with directly.

- **Folders for Each Add On**: Anything related to an Add-on. Create a folder for the Add On that exactly matches the Add-on's folder name/slug.
- **Folders for core LifterLMS**: Anything related to core LifterLMS. Use the subfolders for deeper structure.
	- **admin-pages**: Snippets that modify the core LifterLMS plugin's admin area under Memberships > Settings.
	- **blocks-shortcodes**: Snippets that adjust core LifterLMS block functionality or shortcode functionality OR snippets that add new custom block or shortcode features.
	- **courses-lessons**: Snippets that adjust core LifterLMS course catalog, single course pages, and single lesson pages.
	- **email**: Snippets that adjust how emails are sent, the email contents, adding additional emails, etc.
	- **frontend-pages**: Snippets that modify how the frontend pages appear and the contents on the frontend pages.
	- **memberships**: Snippets that adjust core LifterLMS membership features, memberships catalog, and single membership pages.
	- **orders**: Functionality that hooks into order updates, creation, changes, etc.
	- **payment-gateways**: Anything that modifies or extends payment gateway functionality. Create a subfolder for each gateway that exactly matches the gateway name in core LifterLMS.
	- **quizzes**: Snippets that adjust quiz functionality.
- **localization**: Snippets related to translating LifterLMS terms to other languages or using translation functions to change plugin language.
- **plugin-compatibility**: Basic snippets that integrate core LifterLMS with other plugins to resolve issues or bridge functionality.
- **sql**: Queries that you can run in your WordPress site's MySQL database.
- **theme-compatibility**: Basic snippets that support using LifterLMS and Add-ons with other themes to resolve issues or bridge functionality.
- **wordpress**: This collection is general WordPress functions that don't belong into any created collections. 
