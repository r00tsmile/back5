if($this->get_request_method() != "GET") $this->response('',406);

			$sql_ads = "SELECT * FROM tbl_ads";
			$sql_ads_status = "SELECT * FROM tbl_ads_status";

			$ads = $this->get_one_result($sql_ads);
			$ads_status = $this->get_one_result($sql_ads_status);

			$respon = array(
				'status' => 'ok',
			    'ads'=> array (
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
			    'ads_status' => array (
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
