=== Advanced WordPress Reset - Debug, Recover & Reset WP ===
Contributors: symptote, owleads
Tags: database, reset database, reset, clean, restore
Requires at least: 4.0
Requires PHP: 7.0
Tested up to: 6.5
Stable tag: 2.0.6
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

The ultimate solution for resetting your WordPress database or specific components to their default settings using the advanced reset features.

== Description ==

[Advanced WordPress Reset](https://awpreset.com?utm_source=wordpress_org&utm_medium=link&utm_campaign=ongoing&utm_content=awr_homepage) is the ultimate WordPress productivity and troubleshooting plugin for developers and enthusiasts.

With this plugin, you can Reset, Debug, Recover, and Automate your WordPress like never before, all in one place!

Whether you're a seasoned developer or an ambitious beginner, our plugin will make your life easier and your workdays more productive.

📢 For users looking primarily to clean up their database and delete orphaned items, we recommend using the [Advanced Database Cleaner](https://wordpress.org/plugins/advanced-database-cleaner) plugin.

### Truly Advanced WordPress Reset

Whether you're seeking simplicity or in-depth customization, this plugin offers you 3 powerful core Reset options that cater to most WordPress Reset needs:

[youtube https://www.youtube.com/watch?v=IUDCZHBKRy4]

#### Site Reset

This is the most commonly used website Reset option as it preserves your data and focuses the Reset on the database and its content.

Elements that are removed are:

* Pages, Posts and Comments
* Custom tables
* Users (except the current admin user)
* After the Reset, the following will remain untouched:

Elements that are kept are:

* The current admin user
* Files, Uploads, Themes, Child themes, Plugins, etc.
* Basic WP settings like Site title, WP address, Site address, Time zone & Language
* Non-WordPress Database Tables

Site Reset is the ideal way to start over fresh without having to re-upload all your images & videos, reconfigure user access, reinstall themes and plugins…

#### Nuclear Reset (Pro feature)

Choose this option for a total reboot. This in-depth reset removes almost everything, from files to custom settings and database tables. It's the closest you’ll get to a fresh WordPress install without the hassle.

The only things that are kept after a Nuclear Reset are: 

* The current user for you to log in
* This plugin’s files and data
* Non-WordPress Database Tables

#### Custom Reset (Pro feature)

If none of the above “out of the box” options fits your needs, try the Custom Reset option for even more control and flexibility. Set exactly what you want to reset and what you want to keep untouched:

* Choose which themes to activate, deactivate, or delete after the Reset
* Choose which plugins to activate, deactivate, or delete after the Reset
* Decide which users to keep after the Reset
* Customize your blog info after the reset
* You can also choose to keep things are they are for each element

Once you’re happy with your choices, you can save your preferences in a Custom reset for easy later use. Repeat this process as needed, and you’ll end up with your very own library of tailored Resets!

As you can see, the Custom Reset feature provides you with full control over your Reset process.

In addition to the 3 core options above, we also have numerous individual reset tools that can be used to conduct laser-targeted partial resets of specific parts of your WordPress site. 

For instance, you could choose to exclusively reset your menus and widgets while leaving the rest untouched.

### Tools & Collections for Partial Resets and Beyond

The Tools section is an extension of the 3 main Reset options above that enables you to perform laser-targeted and custom partial Resets.

With an extensive library of Tools, you can have the most precise and granular control over what you want to reset using specific tools:

* Reset the ‘uploads’ folder (/wp-content/uploads) by deleting all its content. This includes images, videos, music, documents, subfolders, etc.
* Reset Themes by deleting all themes (the plugin uses WordPress core functions to delete themes). You can keep the currently active theme or delete it as well
* Delete all plugins (the plugin will deactivate them first then uninstall them using WordPress core functions)
* Reset “wp-content” folder. All files and folders inside ‘/wp-content’ directory will be deleted and reset, except ‘index.php’ and the following folders: ‘plugins’, ‘themes’, ‘uploads’, and ‘mu-plugins’
* Delete Must-use plugins. All MU plugins in ‘/wp-content/mu-plugins’ will be deleted. These are plugins that cannot be disabled except by removing their files from the must-use directory
* Delete “.htaccess” file. This is a critical WordPress core file used to enable or disable features of websites hosted on Apache. In some cases, you may need to delete it to do some tests
* Delete all comments. All types of comments including published, pending, spam, trashed… will be deleted. Comments meta will also be deleted
* Delete pingbacks. Pingbacks allow you to notify other website owners that you have linked to their article on your website
* Delete trackbacks. Although there are some minor technical differences, a trackback is the same thing as a pingback
* …

The above Tools can also be used to clean up and optimize a WordPress site in order to save disk space, improve performance, or simply reduce security risks by getting rid of unsafe plugins, themes, and files. the possibilities are endless and the only limit is your creativity!

To enable such advanced creative use cases, the Pro version of Advanced WordPress Reset lets you build **Collections** of tools where you can pick and choose the tools you want to include in a collection. Once a collection is built and saved, you will be able to run all the tools it contains with a single click of the mouse saving you valuable time and hassle.

To take things even further and empower our power users, the Pro version of the plugin has powerful automation and scheduling features that let you choose the time and frequency at which a collection is executed automatically by the system without the need for you to log in and run it manually.

[youtube https://www.youtube.com/watch?v=aVJrKj9plpQ]

Whether it is a custom Partial Reset Collection, Cleanup Collection, or Optimization Collection… you’ll be able to automate and schedule its execution with unparalleled ease and control.

When used together, Collections and Scheduling become powerful tools to improve productivity and save time on repetitive yet essential tasks like maintenance or recurring environment resets. We’ve listed a few real-world use cases below for your reference.

### Snapshots and Restoration to the Rescue

Because Resets perform critical actions on your database and contents with potentially catastrophic consequences on your site, it was imperative to include additional safety mechanisms you could resort to if need be.

Snapshots are a simple yet powerful way of taking full copies of your database to provide you with an invaluable safety net in case things go south. Simply restore your snapshot and you should be good to go.

[youtube https://www.youtube.com/watch?v=G3E9LbLa3QI]

In other words, Snapshots create an undo button for Resets as far as database data is concerned. That’s why we highly recommend that you systematically take a snapshot of your site’s database before any Reset.

In fact, it’s always a good idea to take multiple snapshots at different points in time so you can have more than one option if you need to revert to a previous state of your site.

Since snapshots are similar in a way to backups, they can also be used to restore a hacked or damaged database. However, please understand that Snapshots DO NOT replace backups as they don’t save a copy of your files. We thus recommend you use one of the numerous backup tools available.

Even though taking a snapshot is free, quick and easy, our users are sometimes too busy or simply forget to do so. That’s why the plugin comes with a powerful scheduling Pro feature that automates the whole process for you. Just choose the options that best suit your needs and the system will take care of the rest for you.

### WP Switcher for in-depth compatibility Testing (Pro feature)

Plugin and Theme developers rely on our plugin to speed up their tests and troubleshoot their creations. However, such tests are only as good as the version they are run on.

With WP Switcher, a unique feature in Advanced WordPress Reset, we make switching from one WordPress version to another a breeze! Now, you can truly ensure the compatibility of your plugin or theme across different WordPress versions by proactively detecting and addressing any version-specific issues.

WP Switcher offers a convenient one-click feature for changing versions, making it effortless to upgrade or downgrade your existing WordPress version.

[youtube https://www.youtube.com/watch?v=UjE6kDUJj5E]

By utilizing the power of WP Switcher, you can expedite your testing workflow, making sure your projects operate flawlessly across all relevant WordPress versions.

### Advanced WordPress Reset in Real-world Scenarios

Advanced WordPress Reset is designed to cater to a wide range of users and scenarios. From beginners using it to start over fresh to experienced developers getting creative in utilizing the plugin to automate maintenance or streamline new product testing. Let’s take a look at examples of both standard and advanced scenarios:

**Efficient Site Maintenance & Optimization:** So you have a client and your contract is to maintain a perfectly working and optimized site for them. You could do this manually every now and then or turn on the autopilot thanks to the automation features included in the plugin. Start by composing the Collection of tools you want to run and decide on the frequency at which the system will execute them. That’s all, You have now saved yourself or your team countless hours going into the backend to remove or reset specific parts of the site on a weekly or monthly basis and you can even increase the frequency to daily execution if it’s a high traffic/content website. 

**Exploratory Theme and Layout Testing:** Some clients have a hard time with PSD or PNG designs and need to see a minimal live version of their future website before they can make a choice. Using Advanced WordPress Reset, you can venture into creative explorations of themes and layouts without the fear of leaving traces behind or having to do things over countless times. Test different designs with confidence, knowing that your site can be reset to its default state swiftly without losing all the data you uploaded or the menus you’ve created.

**Streamlined Debugging and Troubleshooting:** So your site isn't functioning as expected, and you're left grappling with the frustration of not knowing where things went wrong. In collaborative environments, such as when multiple individuals contribute to the site, the source of the issue is never clear and it might even be a faulty plugin update, Who knows? Instead of banging your head against the wall or resorting to a complete reset that demands starting over from scratch, our solution allows you to reset specific site components that appear suspicious or have fallen into disuse. This targeted approach saves you the exasperation and significant time that would otherwise be spent in a complete redo, enabling you to swiftly identify the cause of the problem and get back on track.

**Quick Theme and Plugin Testing:** Simplify and speed up plugin and theme testing by resetting your site to its initial state as many times as you need. Test plugins and themes comprehensively, ensuring accurate results and smooth compatibility.

**Hacked site Recovery:** Picture this: It's 6 a.m., and you are woken up by a frantic client reporting a site outage or worse, a ransom message on their homepage. With a sense of urgency, you navigate to the backend to locate the latest snapshot and swiftly restore it with a few clicks. Just like that, the site is back to normal, and you dial the client with reassuring news. As a developer or webmaster, you are well aware that attacks and technical glitches are much more frequent than we think, that’s why you had enabled the auto snapshot feature of advanced WordPress reset and scheduled it for run daily. While snapshots are not as comprehensive as backups, they are more reliable, faster to create, and take up less disk space making them a great alternative to backups.

**Security Audits and Baseline Resets:** Perform regular resets to establish a secure baseline for security audits. By starting with a clean slate, you can ensure that no malicious code or vulnerabilities from previous configurations linger, enhancing your site's security posture.

**Performance Benchmarking & Troubleshooting:** Your site is slow and you’re unsure if it’s the server, your site configuration, the theme, some plugins, PHP… By measuring the site speed in different states, the picture will become much clearer. Using Site Resets, Custom Resets, and Nuclear Resets, you can go as far as you need to until your performance issues disappear. This will help you quickly identify the root cause of the performance slump. Once the root cause is known, you can undo your actions and focus your efforts on fixing the exact problem causing the performance degradation. In this scenario, the smart combination of Resets and Snapshot restoration makes for a perfect toolset for performance benchmarking and troubleshooting.

**WordPress Update Rollback:** Like most WordPress users, it’s hard to resist that update WordPress button. However, it’s not uncommon for an update to break something in your site. Unfortunately, once that happens, your choices are limited as there is no cancel update button! You can either spend hours trying to identify the cause and fix it or restore a full backup of the site if you have one. With WP Switcher, you now have one more option, downgrading your WordPress version until you find a working version.

**Client Site Recovery:** It’s not uncommon for clients to mess things up and blame you for it. Whether your client's site faces unexpected issues or requires a do-over, this plugin simplifies the recovery process. Quickly restore their site to its default state or rebuild it entirely, fostering efficient communication and client satisfaction.

**Demo Site Automatic Reset:** Imagine you have a demo site for people to test drive your plugin or theme. After a few hours or days, you’ll certainly end up with a few pages, posts, and customizations made by users who are trying to get a feel for your tools. Instead of reinstalling the whole system again every now and then or running through everything to clean up the mess, you can simply create automatic partial resets and cleanups using Collection automation and scheduling. In addition to saving you time, you’ll also be able to increase frequency to improve user experience. tracking what they do, you can just schedule a collection to clean everything up and reset the whole demo site as it should be every 2 hours for example.

**Database Exploration and Analysis:** Study database changes caused by updates, user input, plugins, and themes by comparing your current database to any previous snapshot.

**Educational Environments Reset:** In educational settings, students should all be presented with the exact same baseline environment. With classes of tens or hundreds of students, it’s impractical to do it all by hand, let alone the potential for errors. Using site Resets, you are 100% sure all learning or demo environments are back to where they should be for all students and in record time.

**Video tutorial creation:** As a content creator for YouTube, TikTok, or any other platform, you need your WordPress interface to be as clean as possible with no extra menus or options that could distract your viewers from the plugin or theme of the day. Using Advanced WordPress Reset, you can improve productivity by instantly Resetting your WordPress over and over again while only keeping the components you’ll need for the next video. 

Unlock these versatile use cases and tap into the full potential of Advanced WordPress Reset. From seamless resets and recoveries to creative explorations and efficient optimizations, this plugin is your ultimate companion in WordPress site management.

### Do more with Advanced WordPress Reset PRO

While the free version has all you need to simply and quickly Reset your website, the Pro version is 10 times more powerful with professional-focussed features designed to turbocharge your WordPress development:

* Nuclear Resets
* Custom Resets.
* 37 Partial Reset Tools instead of 14
* Collections
* Automation & Scheduling
* WP Switcher
* Priority access to new features

### Get the #1 Top-Rated WP Reset Plugin

Whether you opt for the Free or Pro version, you can’t go wrong with Advanced WordPress Reset. The numbers speak for themselves:

* 1 Million+ Downloads: A testament to our reliability and usefulness.
* Near Perfect Rating: Our 4.9 rating speaks to the quality and user satisfaction.
* 1,183 ratings: A massive vote of confidence only top plugins can boast

Download Advanced WordPress Reset today and see for yourself.

== Installation ==

This section describes how to install the plugin and get it working.

= Single site installation =
* After extraction, upload the Plugin to your `/wp-content/plugins/` directory
* Go to "Dashboard" &raquo; "Plugins" and choose 'Activate'
* The plugin page can be accessed via "Dashboard" &raquo; "Tools" &raquo; "Advanced WP reset"

== Screenshots ==

1. Reset
2. Snapshots
3. Tools
4. Collections
5. WP switcher

== Changelog ==

= 2.0.6 - 11/01/2024 =
- Fix: the admin user is not created correctly when Elementor is active
- Tweak: few changes to the style

= 2.0.5 - 30/11/2023 =
- Fix: banners warning fixed

= 2.0.4 - 18/11/2023 =
- Fix: resolved conflicts between free and pro versions
- Tweak: enhancements to the code and style
- Compatibility: tested with wordpress 6.4.1

= 2.0.3 - 19/09/2023 =
- New: snapshots are now available in the free version, allowing for the creation, download, restoration, and comparison of snapshots
- Tweak: eliminated default backup tables prefixed with awr_bkp_
- Tweak: changed the plugin banner on wordpress.org

= 2.0.2 - 13/09/2023 =
- Tweak: introduction of demo videos
- Tweak: addition of useful links: FAQ, YouTube channel, and bug report
- Tweak: revisions and corrections to text

= 2.0.1 - 28/08/2023 =
- Fix: session bug fixed now
- Tweak: CSS improvements

= 2.0 - 16/08/2023 =
- Tweak: entire code and style refactored
- New: introducing our PRO version: https://awpreset.com

= 1.7 - 11/04/2023 =
- Fix: admin user was not properly recreated in some cases, this has been fixed
- Tweak: enhancing the JS and CSS codes little bit
- Tweak: you are now logged in directly after the reset
- Security: improving the plugin's security

= 1.6 - 01/07/2022 =
- Security fix: enhancing the security of the plugin by escaping some URLs before outputting them

= 1.5 - 23/02/2022 =
- New: feature to clean up 'uploads' folder
- New: feature to delete all themes
- New: feature to delete all plugins
- New: feature to clean up 'wp-content' folder
- New: feature to delete MU plugins
- New: feature to delete the '.htaccess' file
- New: feature to delete all comments
- New: feature to delete pending comments
- New: feature to delete spam comments
- New: feature to delete trashed comments
- New: feature to delete pingbacks
- New: feature to delete trackbacks
- Tweak: completely rewriting the JavaScript code
- Tweak: enhancing the CSS code
- Tweak: enhancing the PHP code
- Tested with WordPress 5.9

= 1.1.1 - 17/09/2020 =
- Tweak: enhancing the JavaScript code
- Tweak: we are now using SweetAlert for all popup boxes
- Tweak: enhancing some blocks of code
- Tested with WordPress 5.5

= 1.1.0 =
* Some changes to CSS style
* Changing a direct text to _e() for localization
* Test the plugin with WP 5.1

= 1.0.1 =
* The plugin is now Reactivated after the reset
* Adding "Successful Reset" message

= 1.0.0 =
* First release: Hello world!

== Frequently Asked Questions ==

= Q1: Is Advanced WordPress Reset suitable for beginners? =

Yes, our plugin is designed to cater to both beginners and experienced users. It offers an intuitive solution for efficient site management, making it suitable for those new to WordPress as well as experienced developers. However, since this plugin interacts with critical aspects of WordPress that have the potential to cause lasting damage to your site and consume valuable work hours, we've implemented a series of failsafe measures within the plugin. These measures are designed to protect against unintentional human errors and unfortunate mishaps.

= Q2: Will I lose my files and settings during a reset? =

The outcome depends on the Reset option you choose. With a site reset, your files and settings remain intact. However, this is not the case with Nuclear Reset, where a more comprehensive reset occurs, affecting files and settings.

= Q3: How does the plugin help in recovery scenarios? =

The plugin's primary function is to reset your site to its default state. This becomes a powerful tool for recovery purposes, especially in cases of hacks, corruption, or conflicts caused by plugins. By reverting to a clean slate, you can efficiently troubleshoot and resolve these issues.

= Q4: Can I use this plugin for theme development? =

Absolutely! Advanced WordPress Reset is an excellent asset for theme development. It allows you to revert your site to default settings, providing a fresh environment to work on themes without the need for a complete reinstallation. It also offers you a handy way of switching between versions so you can test drive your theme in different situations and uncover potential bugs and incompatibility issues.

= Q5: Is this plugin a substitute for backup solutions? =

While Advanced WordPress Reset is not intended as a primary backup solution, it offers efficient snapshots that can be helpful in quick site recovery in specific scenarios. However, it's essential to understand that dedicated backup solutions are highly recommended to ensure comprehensive data protection and complement our snapshot feature.

= Q6: How frequently can I use the plugin for resets? =

You can use the plugin as needed, and it's particularly useful during the testing and development phases. However, exercise caution, especially when performing resets on live sites. Frequent resets are common in testing environments, allowing developers to iterate and improve their projects.

= Q7: Can I reverse or undo a reset? =

No, but you can achieve the same result using Snapshot restoration. By utilizing Snapshots or restoring from backups, you can effectively undo a reset and bring your site back to a previous state. That’s why we highly recommend taking a snapshot before any risky reset.

= Q8: Will plugins and themes be deleted? =

During a standard site reset, plugins and themes are preserved. However, in the case of a nuclear reset, they do not survive the reset process. This distinction ensures you have control over which elements you want to retain and which ones you're comfortable letting go.

= Q9: How do Snapshots help with troubleshooting? =

Snapshots provide a critical safety net for troubleshooting. By taking Snapshots at different stages of your site's development, you can quickly revert to a previous state if issues arise. This enables you to compare changes, identify problematic areas, and efficiently resolve problems.

= Q10: Is the Pro version suitable for non-developers? =

Absolutely! The Pro version of Advanced WordPress Reset offers a wide range of advanced features that can benefit all users, regardless of their technical expertise. Whether you're a developer seeking enhanced capabilities or a non-developer looking for efficient site management tools, the Pro version caters to your needs.

= Q11: Does the free version include WP Switcher? =

No, WP Switcher is an exclusive feature available only in the Pro version of Advanced WordPress Reset. WP Switcher allows you to upgrade or downgrade your WordPress version with a single click, offering flexibility in testing your site's compatibility.

= Q12: Is WordPress multisite supported? =

Currently, Advanced WordPress Reset does not support WordPress multisite installations. The plugin is optimized for single-site setups and may not be suitable for use in multisite networks.

= Q13: Do you support WP-CLI? =

At this time, support for WP-CLI (WordPress Command Line Interface) is not available within Advanced WordPress Reset. The plugin is primarily designed for user-friendly interaction through the WordPress dashboard.

= Q14: Do you offer support in case of bugs or issues? =

Absolutely! We provide comprehensive support to assist you in resolving any bugs or issues you may encounter while using Advanced WordPress Reset. In addition to our support team, the plugin includes easy-to-follow video tutorials to help you quickly get started.

= Q15: Can I use Advanced WordPress Reset alongside other plugins? =

Yes, you can seamlessly use Advanced WordPress Reset alongside other plugins. The plugin is designed to integrate smoothly with various other plugins, allowing you to harness its power while benefiting from the functionalities of other tools.

= Q16: How often should I take Snapshots? =

The frequency of taking Snapshots depends on your specific usage scenario. If you're actively experimenting with changes, consider taking multiple daily snapshots. For regularly updated sites or staging environments, a weekly snapshot might be sufficient. Snapshots provide you with a safety net for unexpected situations, ensuring you can easily restore your site to a known state.

= Q17: Does this plugin enhance my website's security? =

Advanced WordPress Reset contributes to improved security by allowing you to quickly revert your site to a clean state. If your site experiences security issues or hacks, you can reset it to its default configuration, eliminating potentially compromised files and settings. The tools and collections are also very useful in maintaining a clean website which in turn reduces the risk of successful attacks and hacks.

= Q18: Can the plugin safeguard my data? =

Yes, the plugin offers a reliable way to safeguard your data. By regularly taking automated Snapshots, you create backup points that enable you to revert to a previous state in case of data loss or corruption, providing an additional layer of data protection.