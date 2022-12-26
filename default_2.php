if($this->get_request_method() != "GET") $this->response('',406);

			$sql_settings = "SELECT * FROM tbl_settings";
			$sql_ads = "SELECT * FROM tbl_ads";
			$sql_ads_status = "SELECT * FROM tbl_ads_status";

			$settings = $this->get_one_result($sql_settings);
			$ads = $this->get_one_result($sql_ads);
			$ads_status = $this->get_one_result($sql_ads_status);

			$respon = array(
				'status' => 'ok',
			    'app' => array(
			        'package_name' => '',
			        'status' => '',
			        'redirect_url' => ''
			    ),
			    'settings' => array(
			        'id' => '1',
			        'limit_recent_wallpaper' => '30',
			        'category_sort' => 'category_name',
			        'category_order' => 'ASC',
			        'onesignal_app_id' => '7a541c69-b3de-4bc2-94a7-05d1d65f1ef9',
			        'onesignal_rest_api_key' => 'AAAAaaP74RU:APA91bGuA7gP-CJ24TW0DOW6YnfKxZL_uQ3dhiJeUAr_gGp0ozcflPomQ3tqO1sH6j22jX1H6JKutjidp1elP2IwglNfSM63iOQrfKIe-lQkwgmEc9R-B7MHZvplMlN5ZfW2yaLWIEd2',
			        'providers' => 'firebase',
			        'protocol_type' => '',
			        'privacy_policy' => '<p>Solodroid built the Material Wallpaper app as a Free app. This SERVICE is provided by Solodroid at no cost and is intended for use as is.</p>\r\n\r\n<p>This page is used to inform visitors regarding our policies with the collection, use, and disclosure of Personal Information if anyone decided to use our Service.</p>\r\n\r\n<p>If you choose to use our Service, then you agree to the collection and use of information in relation to this policy. The Personal Information that we collect is used for providing and improving the Service. We will not use or share your information with anyone except as described in this Privacy Policy.</p>\r\n\r\n<p>The terms used in this Privacy Policy have the same meanings as in our Terms and Conditions, which is accessible at Material Wallpaper unless otherwise defined in this Privacy Policy.</p>\r\n\r\n<p><strong>Information Collection and Use</strong></p>\r\n\r\n<p>For a better experience, while using our Service, we may require you to provide us with certain personally identifiable information. The information that we request will be retained by us and used as described in this privacy policy.</p>\r\n\r\n<p>The app does use third party services that may collect information used to identify you.</p>\r\n\r\n<p>Link to privacy policy of third party service providers used by the app</p>\r\n\r\n<ul>\r\n\t<li><a href=\"https://www.google.com/policies/privacy/\" target=\"_blank\">Google Play Services</a></li>\r\n\t<li><a href=\"https://support.google.com/admob/answer/6128543?hl=en\" target=\"_blank\">AdMob</a></li>\r\n\t<li><a href=\"https://firebase.google.com/policies/analytics\" target=\"_blank\">Google Analytics for Firebase</a></li>\r\n\t<li><a href=\"https://www.facebook.com/about/privacy/update/printable\" target=\"_blank\">Facebook</a></li>\r\n\t<li><a href=\"https://unity3d.com/legal/privacy-policy\" target=\"_blank\">Unity</a></li>\r\n\t<li><a href=\"https://onesignal.com/privacy_policy\" target=\"_blank\">One Signal</a></li>\r\n\t<li><a href=\"https://www.applovin.com/privacy/\" target=\"_blank\">AppLovin</a></li>\r\n\t<li><a href=\"https://www.startapp.com/privacy/\" target=\"_blank\">StartApp</a></li>\r\n</ul>\r\n\r\n<p><strong>Log Data</strong></p>\r\n\r\n<p>We want to inform you that whenever you use our Service, in a case of an error in the app we collect data and information (through third party products) on your phone called Log Data. This Log Data may include information such as your device Internet Protocol (&ldquo;IP&rdquo;) address, device name, operating system version, the configuration of the app when utilizing our Service, the time and date of your use of the Service, and other statistics.</p>\r\n\r\n<p><strong>Cookies</strong></p>\r\n\r\n<p>Cookies are files with a small amount of data that are commonly used as anonymous unique identifiers. These are sent to your browser from the websites that you visit and are stored on your device&#39;s internal memory.</p>\r\n\r\n<p>This Service does not use these &ldquo;cookies&rdquo; explicitly. However, the app may use third party code and libraries that use &ldquo;cookies&rdquo; to collect information and improve their services. You have the option to either accept or refuse these cookies and know when a cookie is being sent to your device. If you choose to refuse our cookies, you may not be able to use some portions of this Service.</p>\r\n\r\n<p><strong>Service Providers</strong></p>\r\n\r\n<p>We may employ third-party companies and individuals due to the following reasons:</p>\r\n\r\n<ul>\r\n\t<li>To facilitate our Service;</li>\r\n\t<li>To provide the Service on our behalf;</li>\r\n\t<li>To perform Service-related services; or</li>\r\n\t<li>To assist us in analyzing how our Service is used.</li>\r\n</ul>\r\n\r\n<p>We want to inform users of this Service that these third parties have access to your Personal Information. The reason is to perform the tasks assigned to them on our behalf. However, they are obligated not to disclose or use the information for any other purpose.</p>\r\n\r\n<p><strong>Security</strong></p>\r\n\r\n<p>We value your trust in providing us your Personal Information, thus we are striving to use commercially acceptable means of protecting it. But remember that no method of transmission over the internet, or method of electronic storage is 100% secure and reliable, and we cannot guarantee its absolute security.</p>\r\n\r\n<p><strong>Links to Other Sites</strong></p>\r\n\r\n<p>This Service may contain links to other sites. If you click on a third-party link, you will be directed to that site. Note that these external sites are not operated by us. Therefore, we strongly advise you to review the Privacy Policy of these websites. We have no control over and assume no responsibility for the content, privacy policies, or practices of any third-party sites or services.</p>\r\n\r\n<p><strong>Children&rsquo;s Privacy</strong></p>\r\n\r\n<p>These Services do not address anyone under the age of 13. We do not knowingly collect personally identifiable information from children under 13 years of age. In the case we discover that a child under 13 has provided us with personal information, we immediately delete this from our servers. If you are a parent or guardian and you are aware that your child has provided us with personal information, please contact us so that we will be able to do necessary actions.</p>\r\n\r\n<p><strong>Changes to This Privacy Policy</strong></p>\r\n\r\n<p>We may update our Privacy Policy from time to time. Thus, you are advised to review this page periodically for any changes. We will notify you of any changes by posting the new Privacy Policy on this page.</p>\r\n\r\n<p>This policy is effective as of 2021-09-29</p>\r\n\r\n<p><strong>Contact Us</strong></p>\r\n\r\n<p>If you have any questions or suggestions about our Privacy Policy, do not hesitate to contact us at help.solodroid@gmail.com.</p>\r\n',
			        'package_name' => 'com.anime.yumiwallpaper',
			        'fcm_server_key' => 'AAAAaaP74RU:APA91bH8m9h2gQOv4UPNRUec6uRQDCIZ3hkZWal28JLq-8eMj_7F-Zw_9FFuyRyCSrXf7U85jBwWVEwux-9HrUICTsUyE0JKRnIdT48CrZ_zy-Oi7X_P33QlSCVe7h0pFCA4tzDhN4zq',
			        'fcm_notification_topic' => 'material_wallpaper_topic',
			        'more_apps_url' => 'https://play.google.com/store/apps/developer?id=wallpapers+yumi+yumi'
			    ),
			    'ads' => array(
			        'id' => '1',
			        'ad_status' => 'on',
			        'ad_type' => 'startapp',
			        'backup_ads' => 'none',
			        'admob_publisher_id' => 'pub-6858304905719677',
			        'admob_app_id' => 'ca-app-pub-3940256099942544~3347511713',
			        'admob_banner_unit_id' => 'ca-app-pub-6858304905719677/8946446605',
			        'admob_interstitial_unit_id' => 'ca-app-pub-6858304905719677/9026337659',
			        'admob_native_unit_id' => 'ca-app-pub-6858304905719677',
			        'admob_app_open_ad_unit_id' => 'ca-app-pub-39402',
			        'fan_banner_unit_id' => '816848046188888_816850719521954',
			        'fan_interstitial_unit_id' => '816848046188888_816850776188615',
			        'fan_native_unit_id' => '816848046188888_816850862855273',
			        'startapp_app_id' => '204235546',
			        'unity_game_id' => '4423290',
			        'unity_banner_placement_id' => 'anime_ads_banner',
			        'unity_interstitial_placement_id' => 'anime_ads',
			        'applovin_banner_ad_unit_id' => '0',
			        'applovin_interstitial_ad_unit_id' => '0',
			        'applovin_native_ad_manual_unit_id' => '0',
			        'applovin_banner_zone_id' => '0',
			        'applovin_interstitial_zone_id' => '0',
			        'ad_manager_banner_unit_id' => '/6499/example/banner',
			        'ad_manager_interstitial_unit_id' => '/6499/example/interstitial',
			        'ad_manager_native_unit_id' => '/6499/example/native',
			        'ad_manager_app_open_ad_unit_id' => '/6499/example/app-open',
			        'ironsource_app_key' => '85460dcd',
			        'ironsource_banner_placement_name' => 'DefaultBanner',
			        'ironsource_interstitial_placement_name' => 'DefaultInterstitial',
			        'mopub_banner_ad_unit_id' => 'b195f8dd8ded45fe847ad89ed1d016da',
			        'mopub_interstitial_ad_unit_id' => '24534e1901884e398f1253216226017e',
			        'interstitial_ad_interval' => '1',
			        'native_ad_interval' => '13',
			        'native_ad_index' => '6',
			        'last_update_ads' => '2022-11-04 04:02:13'
			    ),
			    'ads_status' => array(
			        'ads_status_id' => '1',
			        'banner_ad_on_home_page' => '1',
			        'banner_ad_on_search_page' => '1',
			        'banner_ad_on_wallpaper_detail' => '1',
			        'banner_ad_on_wallpaper_by_category' => '1',
			        'interstitial_ad_on_click_wallpaper' => '1',
			        'interstitial_ad_on_wallpaper_detail' => '1',
			        'native_ad_on_wallpaper_list' => '1',
			        'native_ad_on_exit_dialog' => '1',
			        'app_open_ad' => '0',
			        'last_update_ads_status' => '2022-10-10 12:29:13'
			    )
			);
			$this->response($this->json($respon), 200);	
