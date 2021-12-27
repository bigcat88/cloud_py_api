<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2021 Andrey Borysenko <andrey18106x@gmail.com>
 * 
 * @copyright Copyright (c) 2021 Alexander Piskun <bigcat88@icloud.com>
 * 
 * @author 2021 Andrey Borysenko <andrey18106x@gmail.com>
 *
 * @license AGPL-3.0-or-later
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

namespace OCA\Cloud_Py_API\Migration;

use OCA\Cloud_Py_API\AppInfo\Application;
use OCA\Cloud_Py_API\Db\Setting;
use OCA\Cloud_Py_API\Db\SettingsMapper;
use OCP\IConfig;
use OCP\Migration\IOutput;
use OCP\Migration\IRepairStep;


class AppDataInitializationStep implements IRepairStep {

	/** @var SettingsMapper */
	private $settingsMapper;

	/** @var IConfig */
	private $config;

	public function __construct(SettingsMapper $settingsMapper, IConfig $config) {
		$this->settingsMapper = $settingsMapper;
		$this->config = $config;
	}

	public function getName(): string {
		return "Initializing Cloud_Py_API static tables data";
	}

	public function run(IOutput $output) {
		$output->startProgress(1);
		$data_file = $this->getCustomAppsDirectory() . Application::APP_ID . "/lib/Migration/data/app_data_Version0001Date20211028154433.json";
		$app_data = json_decode(file_get_contents($data_file), true);

		if (count($this->settingsMapper->findAll()) === 0) {
			if (isset($app_data['settings'])) {
				foreach ($app_data['settings'] as $setting) {
					$this->settingsMapper->insert(new Setting([
						'name' => $setting['name'],
						'value' => is_array($setting['value']) ? json_encode($setting['value']) : str_replace('\\', '', json_encode($setting['value'])),
						'displayName' => $setting['displayName'],
						'title' => $setting['title'],
						'description' => $setting['description'],
						'helpUrl' => $setting['helpUrl']
					]));
				}
			}
		}

		$output->advance(1);
		$output->finishProgress();
	}

	private function getCustomAppsDirectory() {
		$apps_directory = $this->config->getSystemValue('apps_paths');
		if ($apps_directory !== "" && is_array($apps_directory) && count($apps_directory) > 0) {
			foreach ($apps_directory as $custom_apps_dir) {
				$mediadcDir = $custom_apps_dir['path'] . '/' . Application::APP_ID;
				if (file_exists($custom_apps_dir['path']) && is_dir($custom_apps_dir['path']) && $custom_apps_dir['writable'] 
					&& file_exists($mediadcDir) && is_dir($mediadcDir)) {
					return $custom_apps_dir['path'] . '/';
				}
			}
		}
		return getcwd() . '/apps/';
	}

}
