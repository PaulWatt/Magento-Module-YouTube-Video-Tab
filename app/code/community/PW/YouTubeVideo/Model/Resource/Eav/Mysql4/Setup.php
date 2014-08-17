<?php
class PW_YouTubeVideo_Model_Resource_Eav_Mysql4_Setup extends Mage_Eav_Model_Entity_Setup
{

		 
		/**
		 * @return array
		 */
		public function getDefaultEntities()
		{
		$installer = Mage::getResourceModel('catalog/setup', 'catalog_setup');
 
		if (!$installer->getAttributeId(Mage_Catalog_Model_Product::ENTITY, 'youtube_video')) {
				$installer->addAttribute(Mage_Catalog_Model_Product::ENTITY, 'youtube_video', array( // TABLE.COLUMN: DESCRIPTION:
				'label' => 'YouTube Video', // eav_attribute.frontend_label admin input label
				'group' => 'General', // (not a column) tab in product edit screen
				'sort_order' => 5, // eav_entity_attribute.sort_order sort order in group
				'backend' => '', // eav_attribute.backend_model backend class (module/class_name format)
				'type' => 'text', // eav_attribute.backend_type backend storage type (varchar, text etc)
				'frontend' => '', // eav_attribute.frontend_model admin class (module/class_name format)
				'note' => null, // eav_attribute.note admin input note (shows below input)
				'default' => null, // eav_attribute.default_value admin input default value
				'wysiwyg_enabled' => false, // catalog_eav_attribute.is_wysiwyg_enabled (products only) admin input wysiwyg enabled
				'input' => 'textarea', // eav_attribute.frontend_input admin input type (select, text, textarea etc)
				'input_renderer' => '', // catalog_eav_attribute.frontend_input_renderer (products only) admin input renderer (otherwise input is used to resolve renderer)
				'source' => null, // eav_attribute.source_model admin input source model (for selects) (module/class_name format)
				'required' => false, // eav_attribute.is_required required in admin
				'user_defined' => false, // eav_attribute.is_user_defined editable in admin attributes section, false for not
				'unique' => false, // eav_attribute.is_unique unique value required
				'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL, // catalog_eav_attribute.is_global (products only) scope
				'visible' => true, // catalog_eav_attribute.is_visible (products only) visible on admin
				'visible_on_front' => false, // catalog_eav_attribute.is_visible_on_front (products only) visible on frontend (store) attribute table
				'used_in_product_listing' => false, // catalog_eav_attribute.used_in_product_listing (products only) made available in product listing
				'searchable' => false, // catalog_eav_attribute.is_searchable (products only) searchable via basic search
				'visible_in_advanced_search' => false, // catalog_eav_attribute.is_visible_in_advanced_search (products only) searchable via advanced search
				'filterable' => false, // catalog_eav_attribute.is_filterable (products only) use in layered nav
				'filterable_in_search' => false, // catalog_eav_attribute.is_filterable_in_search (products only) use in search results layered nav
				'comparable' => false, // catalog_eav_attribute.is_comparable (products only) comparable on frontend
				'is_html_allowed_on_front' => true, // catalog_eav_attribute.is_visible_on_front (products only) seems obvious, but also see visible
				'apply_to' => 'configurable', // catalog_eav_attribute.apply_to (products only) which product types to apply to
				'is_configurable' => false, // catalog_eav_attribute.is_configurable (products only) used for configurable products or not
				'used_for_sort_by' => false, // catalog_eav_attribute.used_for_sort_by (products only) available in the 'sort by' menu
				'position' => 0, // catalog_eav_attribute.position (products only) position in layered naviagtion
				'used_for_promo_rules' => false, // catalog_eav_attribute.is_used_for_promo_rules (products only) available for use in promo rules
				));
}
		}
}