<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit723e34409e78a0be1cdeb8e7ed53766e
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Eventin\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Eventin\\' => 
        array (
            0 => __DIR__ . '/../..' . '/base',
            1 => __DIR__ . '/../..' . '/core',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Elementor\\Etn_Advanced_Search' => __DIR__ . '/../..' . '/widgets/advanced-search/advanced-search.php',
        'Elementor\\Etn_Event_Calendar' => __DIR__ . '/../..' . '/widgets/event-calendar/event-calendar.php',
        'Elementor\\Etn_Event_Meta_Info' => __DIR__ . '/../..' . '/widgets/event-meta-info/event-meta-info.php',
        'Elementor\\Etn_Events' => __DIR__ . '/../..' . '/widgets/events/events.php',
        'Elementor\\Etn_Events_Calendar' => __DIR__ . '/../..' . '/widgets/events-calendar/events-calendar.php',
        'Elementor\\Etn_Events_Tab' => __DIR__ . '/../..' . '/widgets/events-tab/events-tab.php',
        'Elementor\\Etn_Schedule' => __DIR__ . '/../..' . '/widgets/schedule/schedule.php',
        'Elementor\\Etn_Schedule_List' => __DIR__ . '/../..' . '/widgets/schedule-list/schedule-list.php',
        'Elementor\\Etn_Speakers' => __DIR__ . '/../..' . '/widgets/speakers/speakers.php',
        'Elementor\\Etn_Upcoming_Event_Tab' => __DIR__ . '/../..' . '/widgets/upcoming-event-tab/upcoming-event-tab.php',
        'Elementor\\Etn_Zoom' => __DIR__ . '/../..' . '/widgets/zoom/zoom.php',
        'Etn\\Base\\Action' => __DIR__ . '/../..' . '/base/action.php',
        'Etn\\Base\\Api_Handler' => __DIR__ . '/../..' . '/base/api-handler.php',
        'Etn\\Base\\Common' => __DIR__ . '/../..' . '/base/common.php',
        'Etn\\Base\\Cpt' => __DIR__ . '/../..' . '/base/cpt.php',
        'Etn\\Base\\Cron' => __DIR__ . '/../..' . '/base/cron.php',
        'Etn\\Base\\Enqueue\\Admin' => __DIR__ . '/../..' . '/base/enqueue/admin.php',
        'Etn\\Base\\Enqueue\\AdminAssets' => __DIR__ . '/../..' . '/base/enqueue/admin-assets.php',
        'Etn\\Base\\Enqueue\\AssetsInterface' => __DIR__ . '/../..' . '/base/enqueue/assets-interface.php',
        'Etn\\Base\\Enqueue\\Frontend' => __DIR__ . '/../..' . '/base/enqueue/frontend.php',
        'Etn\\Base\\Enqueue\\FrontendAssets' => __DIR__ . '/../..' . '/base/enqueue/frontend-assets.php',
        'Etn\\Base\\Enqueue\\Register' => __DIR__ . '/../..' . '/base/enqueue/register.php',
        'Etn\\Base\\Exporter\\CSV_Exporter' => __DIR__ . '/../..' . '/base/exporter/csv-exporter.php',
        'Etn\\Base\\Exporter\\Exporter_Factory' => __DIR__ . '/../..' . '/base/exporter/exporter-factory.php',
        'Etn\\Base\\Exporter\\Exporter_Interface' => __DIR__ . '/../..' . '/base/exporter/exporter-interface.php',
        'Etn\\Base\\Exporter\\Json_Exporter' => __DIR__ . '/../..' . '/base/exporter/json-exporter.php',
        'Etn\\Base\\Exporter\\Post_Exporter' => __DIR__ . '/../..' . '/base/exporter/post-exporter.php',
        'Etn\\Base\\Exporter\\Post_Exporter_Interface' => __DIR__ . '/../..' . '/base/exporter/post-exporter-interface.php',
        'Etn\\Base\\Importer\\CSV_Reader' => __DIR__ . '/../..' . '/base/importer/csv-reader.php',
        'Etn\\Base\\Importer\\JSON_Reader' => __DIR__ . '/../..' . '/base/importer/json-reader.php',
        'Etn\\Base\\Importer\\Post_Importer' => __DIR__ . '/../..' . '/base/importer/post-importer.php',
        'Etn\\Base\\Importer\\Post_Importer_Interface' => __DIR__ . '/../..' . '/base/importer/post-importer-interface.php',
        'Etn\\Base\\Importer\\Reader_Factory' => __DIR__ . '/../..' . '/base/importer/reader-factory.php',
        'Etn\\Base\\Importer\\Reader_Interface' => __DIR__ . '/../..' . '/base/importer/reader-interface.php',
        'Etn\\Base\\Post_Model' => __DIR__ . '/../..' . '/base/post-model.php',
        'Etn\\Base\\Role' => __DIR__ . '/../..' . '/base/role.php',
        'Etn\\Base\\Table' => __DIR__ . '/../..' . '/base/table.php',
        'Etn\\Base\\Taxonomy' => __DIR__ . '/../..' . '/base/taxonomy.php',
        'Etn\\Core\\Addons\\Helper' => __DIR__ . '/../..' . '/core/addons/helper.php',
        'Etn\\Core\\Addons\\Plugin_Status' => __DIR__ . '/../..' . '/core/addons/plugin-status.php',
        'Etn\\Core\\Admin\\Hooks' => __DIR__ . '/../..' . '/core/admin/hooks.php',
        'Etn\\Core\\Attendee\\Action' => __DIR__ . '/../..' . '/core/attendee/action.php',
        'Etn\\Core\\Attendee\\Api' => __DIR__ . '/../..' . '/core/attendee/api.php',
        'Etn\\Core\\Attendee\\Attendee_Exporter' => __DIR__ . '/../..' . '/core/attendee/attendee-exporter.php',
        'Etn\\Core\\Attendee\\Attendee_Importer' => __DIR__ . '/../..' . '/core/attendee/attendee-importer.php',
        'Etn\\Core\\Attendee\\Attendee_List' => __DIR__ . '/../..' . '/core/attendee/attendee-list.php',
        'Etn\\Core\\Attendee\\Attendee_Model' => __DIR__ . '/../..' . '/core/attendee/attendee-model.php',
        'Etn\\Core\\Attendee\\Cpt' => __DIR__ . '/../..' . '/core/attendee/cpt.php',
        'Etn\\Core\\Attendee\\Cron' => __DIR__ . '/../..' . '/core/attendee/cron.php',
        'Etn\\Core\\Attendee\\Hooks' => __DIR__ . '/../..' . '/core/attendee/hooks.php',
        'Etn\\Core\\Attendee\\InfoUpdate' => __DIR__ . '/../..' . '/core/attendee/info-update.php',
        'Etn\\Core\\Attendee\\Pages\\Attendee_Single_Page' => __DIR__ . '/../..' . '/core/attendee/pages/attendee-single-page.php',
        'Etn\\Core\\Attendee\\Settings' => __DIR__ . '/../..' . '/core/attendee/settings.php',
        'Etn\\Core\\Calendar\\Add_Calendar\\Add_Calendar' => __DIR__ . '/../..' . '/core/calendar/add-calendar/add-calendar.php',
        'Etn\\Core\\Event\\Action' => __DIR__ . '/../..' . '/core/event/action.php',
        'Etn\\Core\\Event\\Api' => __DIR__ . '/../..' . '/core/event/api.php',
        'Etn\\Core\\Event\\Category' => __DIR__ . '/../..' . '/core/event/category.php',
        'Etn\\Core\\Event\\Cpt' => __DIR__ . '/../..' . '/core/event/cpt.php',
        'Etn\\Core\\Event\\Event_Exporter' => __DIR__ . '/../..' . '/core/event/event-exporter.php',
        'Etn\\Core\\Event\\Event_Importer' => __DIR__ . '/../..' . '/core/event/event-importer.php',
        'Etn\\Core\\Event\\Event_Model' => __DIR__ . '/../..' . '/core/event/event-model.php',
        'Etn\\Core\\Event\\Helper' => __DIR__ . '/../..' . '/core/event/helper.php',
        'Etn\\Core\\Event\\Hooks' => __DIR__ . '/../..' . '/core/event/hooks.php',
        'Etn\\Core\\Event\\Pages\\Event_Woocommerce' => __DIR__ . '/../..' . '/core/event/pages/event-woocommerce.php',
        'Etn\\Core\\Event\\Pages\\Event_single_post' => __DIR__ . '/../..' . '/core/event/pages/event-single-post.php',
        'Etn\\Core\\Event\\Registration' => __DIR__ . '/../..' . '/core/event/registration.php',
        'Etn\\Core\\Event\\Tags' => __DIR__ . '/../..' . '/core/event/tags.php',
        'Etn\\Core\\Metaboxs\\Attendee_Meta' => __DIR__ . '/../..' . '/core/metaboxs/attendee-meta.php',
        'Etn\\Core\\Metaboxs\\Event_manager_metabox' => __DIR__ . '/../..' . '/core/metaboxs/event-manager-metabox.php',
        'Etn\\Core\\Metaboxs\\Event_manager_repeater_metabox' => __DIR__ . '/../..' . '/core/metaboxs/event-manager-repeater-metabox.php',
        'Etn\\Core\\Metaboxs\\Event_meta' => __DIR__ . '/../..' . '/core/metaboxs/event-meta.php',
        'Etn\\Core\\Metaboxs\\Pro_metabox' => __DIR__ . '/../..' . '/core/metaboxs/pro-metabox.php',
        'Etn\\Core\\Metaboxs\\Repeater_Metaboxmanager_metabox' => __DIR__ . '/../..' . '/base/metabox.php',
        'Etn\\Core\\Metaboxs\\Schedule_meta' => __DIR__ . '/../..' . '/core/metaboxs/schedule-meta.php',
        'Etn\\Core\\Metaboxs\\Speaker_meta' => __DIR__ . '/../..' . '/core/metaboxs/speaker-meta.php',
        'Etn\\Core\\Migration\\Migration' => __DIR__ . '/../..' . '/core/migration/migration.php',
        'Etn\\Core\\Modules\\Eventin_Ai\\Admin\\Admin' => __DIR__ . '/../..' . '/core/modules/eventin-ai/admin/admin.php',
        'Etn\\Core\\Modules\\Eventin_Ai\\Eventin_AI' => __DIR__ . '/../..' . '/core/modules/eventin-ai/eventin-ai.php',
        'Etn\\Core\\Modules\\Seat_Plan\\Admin\\Admin' => __DIR__ . '/../..' . '/core/modules/seat-plan/admin/admin.php',
        'Etn\\Core\\Modules\\Seat_Plan\\Admin\\Metaboxes' => __DIR__ . '/../..' . '/core/modules/seat-plan/admin/metaboxes.php',
        'Etn\\Core\\Modules\\Seat_Plan\\Frontend\\Frontend' => __DIR__ . '/../..' . '/core/modules/seat-plan/frontend/frontend.php',
        'Etn\\Core\\Modules\\Seat_Plan\\Frontend\\Views\\Seatplan_Form' => __DIR__ . '/../..' . '/core/modules/seat-plan/frontend/views/seatplan-form.php',
        'Etn\\Core\\Modules\\Seat_Plan\\Seat_Plan' => __DIR__ . '/../..' . '/core/modules/seat-plan/seat-plan.php',
        'Etn\\Core\\Recurring_Event\\Hooks' => __DIR__ . '/../..' . '/core/recurring-event/hooks.php',
        'Etn\\Core\\Schedule\\Action' => __DIR__ . '/../..' . '/core/schedule/action.php',
        'Etn\\Core\\Schedule\\Api_Schedule' => __DIR__ . '/../..' . '/core/schedule/api-schedule.php',
        'Etn\\Core\\Schedule\\Cpt' => __DIR__ . '/../..' . '/core/schedule/cpt.php',
        'Etn\\Core\\Schedule\\Hooks' => __DIR__ . '/../..' . '/core/schedule/hooks.php',
        'Etn\\Core\\Schedule\\Pages\\Schedule_single_post' => __DIR__ . '/../..' . '/core/schedule/pages/schedule-single-post.php',
        'Etn\\Core\\Schedule\\Schedule_Exporter' => __DIR__ . '/../..' . '/core/schedule/schedule-exporter.php',
        'Etn\\Core\\Schedule\\Schedule_Importer' => __DIR__ . '/../..' . '/core/schedule/schedule-importer.php',
        'Etn\\Core\\Schedule\\Schedule_Model' => __DIR__ . '/../..' . '/core/schedule/schedule-model.php',
        'Etn\\Core\\Schedule\\Settings' => __DIR__ . '/../..' . '/core/schedule/settings.php',
        'Etn\\Core\\Settings\\Settings' => __DIR__ . '/../..' . '/core/settings/settings.php',
        'Etn\\Core\\Shortcodes\\Hooks' => __DIR__ . '/../..' . '/core/shortcodes/hooks.php',
        'Etn\\Core\\Speaker\\Action' => __DIR__ . '/../..' . '/core/speaker/action.php',
        'Etn\\Core\\Speaker\\Api' => __DIR__ . '/../..' . '/core/speaker/api.php',
        'Etn\\Core\\Speaker\\ApiTaxonomy' => __DIR__ . '/../..' . '/core/speaker/api-taxonomy.php',
        'Etn\\Core\\Speaker\\Category' => __DIR__ . '/../..' . '/core/speaker/category.php',
        'Etn\\Core\\Speaker\\Cpt' => __DIR__ . '/../..' . '/core/speaker/cpt.php',
        'Etn\\Core\\Speaker\\Hooks' => __DIR__ . '/../..' . '/core/speaker/hooks.php',
        'Etn\\Core\\Speaker\\Pages\\Speaker_single_post' => __DIR__ . '/../..' . '/core/speaker/pages/speaker-single-post.php',
        'Etn\\Core\\Speaker\\Settings' => __DIR__ . '/../..' . '/core/speaker/settings.php',
        'Etn\\Core\\Speaker\\Speaker_Exporter' => __DIR__ . '/../..' . '/core/speaker/speaker-exporter.php',
        'Etn\\Core\\Speaker\\Speaker_Importer' => __DIR__ . '/../..' . '/core/speaker/speaker-importer.php',
        'Etn\\Core\\Speaker\\Speaker_Model' => __DIR__ . '/../..' . '/core/speaker/speaker-model.php',
        'Etn\\Core\\Speaker\\User_Model' => __DIR__ . '/../..' . '/core/speaker/user-model.php',
        'Etn\\Core\\TemplateBuilder\\Api_Template' => __DIR__ . '/../..' . '/core/template-builder/api-template.php',
        'Etn\\Core\\TemplateBuilder\\Template_Model' => __DIR__ . '/../..' . '/core/template-builder/template-model.php',
        'Etn\\Core\\Woocommerce\\Base' => __DIR__ . '/../..' . '/core/woocommerce/base.php',
        'Etn\\Core\\Woocommerce\\Hooks' => __DIR__ . '/../..' . '/core/woocommerce/hooks.php',
        'Etn\\Templates\\Event\\Parts\\EventDetailsParts' => __DIR__ . '/../..' . '/templates/event/parts/event-details-parts.php',
        'Etn\\Traits\\Singleton' => __DIR__ . '/../..' . '/traits/singleton.php',
        'Etn\\Utils\\Font\\Unifont\\TTFontFile' => __DIR__ . '/../..' . '/utils/font/unifont/ttfonts.php',
        'Etn\\Utils\\Helper' => __DIR__ . '/../..' . '/utils/helper.php',
        'Etn\\Utils\\Notice' => __DIR__ . '/../..' . '/utils/notice.php',
        'Etn\\Utils\\tFPDF' => __DIR__ . '/../..' . '/utils/tfpdf.php',
        'Etn\\Widgets\\Manifest' => __DIR__ . '/../..' . '/widgets/manifest.php',
        'Etn_Product_Data_Store_CPT' => __DIR__ . '/../..' . '/core/woocommerce/etn-product-data-store-cpt.php',
        'Etn_WC_Order_Item_Product' => __DIR__ . '/../..' . '/core/woocommerce/etn-order-item-product.php',
        'Etn_Woo_Product' => __DIR__ . '/../..' . '/core/woocommerce/etn-order-item-product.php',
        'Eventin\\Abstracts\\CustomPostType' => __DIR__ . '/../..' . '/base/Abstracts/CustomPostType.php',
        'Eventin\\Abstracts\\Provider' => __DIR__ . '/../..' . '/base/Abstracts/Provider.php',
        'Eventin\\Activate' => __DIR__ . '/../..' . '/base/Activate.php',
        'Eventin\\Admin\\AdminProvider' => __DIR__ . '/../..' . '/core/admin/AdminProvider.php',
        'Eventin\\Admin\\Menu' => __DIR__ . '/../..' . '/core/admin/Menu.php',
        'Eventin\\ApiManager' => __DIR__ . '/../..' . '/base/ApiManager.php',
        'Eventin\\Attendee\\Api\\AttendeeController' => __DIR__ . '/../..' . '/core/attendee/Api/AttendeeController.php',
        'Eventin\\Base\\Speaker_role' => __DIR__ . '/../..' . '/core/speaker/speaker-role.php',
        'Eventin\\Bootstrap' => __DIR__ . '/../..' . '/base/Bootstrap.php',
        'Eventin\\Container\\Container' => __DIR__ . '/../..' . '/base/Container/Container.php',
        'Eventin\\Container\\ContainerExceptionInterface' => __DIR__ . '/../..' . '/base/Container/ContainerExceptionInterface.php',
        'Eventin\\Container\\Exception\\DependencyHasNoDefaultValueException' => __DIR__ . '/../..' . '/base/Container/Exception/DependencyHasNoDefaultValueException.php',
        'Eventin\\Container\\Exception\\DependencyIsNotInstantiableException' => __DIR__ . '/../..' . '/base/Container/Exception/DependencyIsNotInstantiableException.php',
        'Eventin\\Container\\NotFoundExceptionInterface' => __DIR__ . '/../..' . '/base/Container/NotFoundExceptionInterface.php',
        'Eventin\\Core\\Container\\ContainerInterface' => __DIR__ . '/../..' . '/base/Container/ContainerInterface.php',
        'Eventin\\CustomEndpoint' => __DIR__ . '/../..' . '/base/CustomEndpoint.php',
        'Eventin\\Deactivate' => __DIR__ . '/../..' . '/base/Deactivate.php',
        'Eventin\\EventCategory\\Api\\EventCategoryController' => __DIR__ . '/../..' . '/core/event/Api/CategoryController.php',
        'Eventin\\Event\\Api\\EventController' => __DIR__ . '/../..' . '/core/event/Api/EventController.php',
        'Eventin\\Event\\Api\\EventTagController' => __DIR__ . '/../..' . '/core/event/Api/EventTagController.php',
        'Eventin\\Event\\Api\\TransactionController' => __DIR__ . '/../..' . '/core/event/Api/TransactionController.php',
        'Eventin\\Event\\MeetingPlatforms\\MeetingPlatform' => __DIR__ . '/../..' . '/core/event/MeetingPlatforms/MeetingPlatform.php',
        'Eventin\\Eventin' => __DIR__ . '/../..' . '/base/Eventin.php',
        'Eventin\\Installer' => __DIR__ . '/../..' . '/base/Installer.php',
        'Eventin\\Integrations\\CustomUrl' => __DIR__ . '/../..' . '/core/Integrations/CustomUrl.php',
        'Eventin\\Integrations\\Integration' => __DIR__ . '/../..' . '/core/Integrations/Integration.php',
        'Eventin\\Integrations\\Zoom\\Zoom' => __DIR__ . '/../..' . '/core/Integrations/Zoom/Zoom.php',
        'Eventin\\Integrations\\Zoom\\ZoomClient' => __DIR__ . '/../..' . '/core/Integrations/Zoom/ZoomClient.php',
        'Eventin\\Integrations\\Zoom\\ZoomCredential' => __DIR__ . '/../..' . '/core/Integrations/Zoom/ZoomCredential.php',
        'Eventin\\Integrations\\Zoom\\ZoomToken' => __DIR__ . '/../..' . '/core/Integrations/Zoom/ZoomToken.php',
        'Eventin\\Interfaces\\CustomPostTypeInterface' => __DIR__ . '/../..' . '/base/Interfaces/CustomPostTypeInterface.php',
        'Eventin\\Interfaces\\HookableInterface' => __DIR__ . '/../..' . '/base/Interfaces/HookableInterface.php',
        'Eventin\\Interfaces\\MeetingPlatformInterface' => __DIR__ . '/../..' . '/base/Interfaces/MeetingPlatformInterface.php',
        'Eventin\\Interfaces\\ProviderInterface' => __DIR__ . '/../..' . '/base/Interfaces/ProviderInterface.php',
        'Eventin\\Location\\Api\\LocationController' => __DIR__ . '/../..' . '/core/event/Api/LocationController.php',
        'Eventin\\Schedule\\Api\\ScheduleController' => __DIR__ . '/../..' . '/core/schedule/Api/ScheduleController.php',
        'Eventin\\Settings' => __DIR__ . '/../..' . '/base/Settings.php',
        'Eventin\\Settings\\Api\\SettingsController' => __DIR__ . '/../..' . '/core/settings/Api/SettingsController.php',
        'Eventin\\Speaker\\Api\\SpeakerCategoryController' => __DIR__ . '/../..' . '/core/speaker/Api/SpeakerCategoryController.php',
        'Eventin\\Speaker\\Api\\SpeakerController' => __DIR__ . '/../..' . '/core/speaker/Api/SpeakerController.php',
        'Eventin\\Traits\\Singleton' => __DIR__ . '/../..' . '/base/Traits/Singleton.php',
        'Eventin\\Upgrade\\Upgrade' => __DIR__ . '/../..' . '/core/Upgrade/Upgrade.php',
        'Eventin\\Upgrade\\Upgraders\\UpdateInterface' => __DIR__ . '/../..' . '/core/Upgrade/Upgraders/UpdateInterface.php',
        'Eventin\\Upgrade\\Upgraders\\V_3_3_57' => __DIR__ . '/../..' . '/core/Upgrade/Upgraders/V_3_3_57.php',
        'Eventin\\Upgrade\\Upgraders\\V_4_0_0' => __DIR__ . '/../..' . '/core/Upgrade/Upgraders/V_4_0_0.php',
        'Eventin\\Upgrade\\Upgraders\\V_4_0_2' => __DIR__ . '/../..' . '/core/Upgrade/Upgraders/V_4_0_2.php',
        'Eventin\\Upgrade\\Upgraders\\V_4_0_4' => __DIR__ . '/../..' . '/core/Upgrade/Upgraders/V_4_0_4.php',
        'Eventin\\Upgrade\\Upgraders\\V_4_0_6' => __DIR__ . '/../..' . '/core/Upgrade/Upgraders/V_4_0_6.php',
        'Eventin\\Upgrade\\Upgraders\\V_4_0_7' => __DIR__ . '/../..' . '/core/Upgrade/Upgraders/V_4_0_7.php',
        'Eventin\\Upgrade\\Upgraders\\V_4_0_8' => __DIR__ . '/../..' . '/core/Upgrade/Upgraders/V_4_0_8.php',
        'Eventin\\Validation\\RuleMap' => __DIR__ . '/../..' . '/base/Validation/RuleMap.php',
        'Eventin\\Validation\\Rules\\RequiredRule' => __DIR__ . '/../..' . '/base/Validation/Rules/RequiredRule.php',
        'Eventin\\Validation\\Rules\\Rule' => __DIR__ . '/../..' . '/base/Validation/Rules/Rule.php',
        'Eventin\\Validation\\Validator' => __DIR__ . '/../..' . '/base/Validation/Validator.php',
        'Oxaim\\Libs\\Notice' => __DIR__ . '/../..' . '/utils/notice/notice.php',
        'Wpmet\\Libs\\Banner' => __DIR__ . '/../..' . '/utils/banner/banner.php',
        'Wpmet\\Libs\\Pro_Awareness' => __DIR__ . '/../..' . '/utils/pro-awareness/pro-awareness.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit723e34409e78a0be1cdeb8e7ed53766e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit723e34409e78a0be1cdeb8e7ed53766e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit723e34409e78a0be1cdeb8e7ed53766e::$classMap;

        }, null, ClassLoader::class);
    }
}
