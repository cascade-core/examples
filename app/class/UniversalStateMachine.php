<?php
/*
 * Copyright (c) 2014, Josef Kufner  <jk@frozen-doe.net>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 *     http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 */

namespace ExampleApplication;

/**
 * Universal implementation to something as an example.
 */
class UniversalStateMachine extends \Smalldb\StateMachine\FlupdoCrudMachine
{

	/**
	 * No need for default machine.
	 */
	protected function setupDefaultMachine($config)
	{
		//debug_dump($this->getAllMachineActions());
		foreach ($this->getAllMachineActions() as $action) {
			//debug_dump($this->actions[$action], $action);
			$a = $this->actions[$action];
			if (empty($a['label']) && !empty($a['transitions'])) {
				$first_transition = reset($a['transitions']);
				//debug_dump($a);

				$this->actions[$action] = array_merge($this->actions[$action], array(
					"heading" => ucfirst($action),
					"label" => ucfirst($action),
					"method" => "setState",
					"args" => array($first_transition['targets'][0]),
					"block" => array(
						"inputs" => array(
							"ref" => null,
							"item" => null,
						),
						"outputs" => array(
							"done" => "return_value"
						),
					),
				));
			}
		}
	}


	/**
	 * Create item, add created and modified timestamps.
	 */
	protected function create($id, $properties)
	{
		if (is_array($properties)) {
			$t = strftime('%Y-%m-%d %H:%M:%S');
			$properties['created'] = $t;
			$properties['modified'] = $t;
		}

		return parent::create($id, $properties);
	}


	/**
	 * Edit item, add modified timestamp.
	 */
	protected function edit($id, $properties)
	{
		if (is_array($properties)) {
			$t = strftime('%Y-%m-%d %H:%M:%S');
			$properties['modified'] = $t;
		}
		return parent::edit($id, $properties);
	}


	/**
	 * Simple way to change state column (in a real app this would be some complex operation).
	 */
	protected function setState($id, $state)
	{
		$q = $this->flupdo->update($this->flupdo->quoteIdent($this->table));
		$this->queryAddPrimaryKeyWhere($q, $id);
		$q->set('state = ?', $state);

		$n = $q->debugDump()->exec();

		if ($n !== FALSE) {
			return true;
		} else {
			return false;
		}
	}

}

