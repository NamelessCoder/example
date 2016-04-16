<?php
namespace FluidTYPO3\Example\Provider;

use FluidTYPO3\Flux\Provider\ContentProvider;
use TYPO3\CMS\Core\DataHandling\DataHandler;

/**
 * Class ConcatenatingContentProvider
 */
class ConcatenatingContentProvider extends ContentProvider {

	protected $priority = 10;

	/**
	 * Method overrides default "should I trigger?" decision.
	 *
	 * @param array $row
	 * @param string $table
	 * @param string $field
	 * @param string|NULL $extensionKey
	 * @return bool
	 */
	public function trigger(array $row, $table, $field, $extensionKey = NULL) {
		return ($table === 'tt_content' && $row['tx_fed_fcefile'] === 'FluidTYPO3.Example:ContentProviderRecordUpdating.html');
	}

	/**
	 * Method executes when saving record, saves CSV of values
	 * of all Flux fields into "subheader" of record.
	 *
	 * @param array $row
	 * @param integer $id
	 * @param DataHandler $reference
	 */
	public function preProcessRecord(array &$row, $id, DataHandler $reference) {
		$row['subheader'] = trim(implode(',', array_column($row['pi_flexform']['data']['options']['lDEF'], 'vDEF')), ',');
	}

}
