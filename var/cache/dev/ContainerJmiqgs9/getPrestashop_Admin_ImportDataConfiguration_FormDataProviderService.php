<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.admin.import_data_configuration.form_data_provider' shared service.

return $this->services['prestashop.admin.import_data_configuration.form_data_provider'] = new \PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\Import\ImportDataConfigurationFormDataProvider(${($_ = isset($this->services['prestashop.core.import.dir']) ? $this->services['prestashop.core.import.dir'] : $this->load('getPrestashop_Core_Import_DirService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.core.import.factory.data_row.collection_factory']) ? $this->services['prestashop.core.import.factory.data_row.collection_factory'] : $this->load('getPrestashop_Core_Import_Factory_DataRow_CollectionFactoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.core.admin.import_match.repository']) ? $this->services['prestashop.core.admin.import_match.repository'] : $this->load('getPrestashop_Core_Admin_ImportMatch_RepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.import.data_match_saver']) ? $this->services['prestashop.adapter.import.data_match_saver'] : $this->load('getPrestashop_Adapter_Import_DataMatchSaverService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.core.form.choice_provider.import_entity_field']) ? $this->services['prestashop.core.form.choice_provider.import_entity_field'] : $this->load('getPrestashop_Core_Form_ChoiceProvider_ImportEntityFieldService.php')) && false ?: '_'}->getChoices());
