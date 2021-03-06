<?php


/**
 * This class adds structure of 'nagios_host_template' table to 'lilac' DatabaseMap object.
 *
 *
 *
 * These statically-built map classes are used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    .map
 */
class NagiosHostTemplateMapBuilder implements MapBuilder {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = '.map.NagiosHostTemplateMapBuilder';

	/**
	 * The database map.
	 */
	private $dbMap;

	/**
	 * Tells us if this DatabaseMapBuilder is built so that we
	 * don't have to re-build it every time.
	 *
	 * @return     boolean true if this DatabaseMapBuilder is built, false otherwise.
	 */
	public function isBuilt()
	{
		return ($this->dbMap !== null);
	}

	/**
	 * Gets the databasemap this map builder built.
	 *
	 * @return     the databasemap
	 */
	public function getDatabaseMap()
	{
		return $this->dbMap;
	}

	/**
	 * The doBuild() method builds the DatabaseMap
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function doBuild()
	{
		$this->dbMap = Propel::getDatabaseMap(NagiosHostTemplatePeer::DATABASE_NAME);

		$tMap = $this->dbMap->addTable(NagiosHostTemplatePeer::TABLE_NAME);
		$tMap->setPhpName('NagiosHostTemplate');
		$tMap->setClassname('NagiosHostTemplate');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'INTEGER', true, null);

		$tMap->addColumn('NAME', 'Name', 'VARCHAR', true, 255);

		$tMap->addColumn('DESCRIPTION', 'Description', 'VARCHAR', false, 255);

		$tMap->addColumn('INITIAL_STATE', 'InitialState', 'VARCHAR', false, 1);

		$tMap->addForeignKey('CHECK_COMMAND', 'CheckCommand', 'INTEGER', 'nagios_command', 'ID', false, null);

		$tMap->addColumn('RETRY_INTERVAL', 'RetryInterval', 'INTEGER', false, null);

		$tMap->addColumn('FIRST_NOTIFICATION_DELAY', 'FirstNotificationDelay', 'INTEGER', false, null);

		$tMap->addColumn('MAXIMUM_CHECK_ATTEMPTS', 'MaximumCheckAttempts', 'INTEGER', false, null);

		$tMap->addColumn('CHECK_INTERVAL', 'CheckInterval', 'INTEGER', false, null);

		$tMap->addColumn('PASSIVE_CHECKS_ENABLED', 'PassiveChecksEnabled', 'BOOLEAN', false, null);

		$tMap->addForeignKey('CHECK_PERIOD', 'CheckPeriod', 'INTEGER', 'nagios_timeperiod', 'ID', false, null);

		$tMap->addColumn('OBSESS_OVER_HOST', 'ObsessOverHost', 'BOOLEAN', false, null);

		$tMap->addColumn('CHECK_FRESHNESS', 'CheckFreshness', 'BOOLEAN', false, null);

		$tMap->addColumn('FRESHNESS_THRESHOLD', 'FreshnessThreshold', 'INTEGER', false, null);

		$tMap->addColumn('ACTIVE_CHECKS_ENABLED', 'ActiveChecksEnabled', 'BOOLEAN', false, null);

		$tMap->addColumn('CHECKS_ENABLED', 'ChecksEnabled', 'BOOLEAN', false, null);

		$tMap->addForeignKey('EVENT_HANDLER', 'EventHandler', 'INTEGER', 'nagios_command', 'ID', false, null);

		$tMap->addColumn('EVENT_HANDLER_ENABLED', 'EventHandlerEnabled', 'BOOLEAN', false, null);

		$tMap->addColumn('LOW_FLAP_THRESHOLD', 'LowFlapThreshold', 'INTEGER', false, null);

		$tMap->addColumn('HIGH_FLAP_THRESHOLD', 'HighFlapThreshold', 'INTEGER', false, null);

		$tMap->addColumn('FLAP_DETECTION_ENABLED', 'FlapDetectionEnabled', 'BOOLEAN', false, null);

		$tMap->addColumn('PROCESS_PERF_DATA', 'ProcessPerfData', 'BOOLEAN', false, null);

		$tMap->addColumn('RETAIN_STATUS_INFORMATION', 'RetainStatusInformation', 'BOOLEAN', false, null);

		$tMap->addColumn('RETAIN_NONSTATUS_INFORMATION', 'RetainNonstatusInformation', 'BOOLEAN', false, null);

		$tMap->addColumn('NOTIFICATION_INTERVAL', 'NotificationInterval', 'INTEGER', false, null);

		$tMap->addForeignKey('NOTIFICATION_PERIOD', 'NotificationPeriod', 'INTEGER', 'nagios_timeperiod', 'ID', false, null);

		$tMap->addColumn('NOTIFICATIONS_ENABLED', 'NotificationsEnabled', 'BOOLEAN', false, null);

		$tMap->addColumn('NOTIFICATION_ON_DOWN', 'NotificationOnDown', 'BOOLEAN', false, null);

		$tMap->addColumn('NOTIFICATION_ON_UNREACHABLE', 'NotificationOnUnreachable', 'BOOLEAN', false, null);

		$tMap->addColumn('NOTIFICATION_ON_RECOVERY', 'NotificationOnRecovery', 'BOOLEAN', false, null);

		$tMap->addColumn('NOTIFICATION_ON_FLAPPING', 'NotificationOnFlapping', 'BOOLEAN', false, null);

		$tMap->addColumn('NOTIFICATION_ON_SCHEDULED_DOWNTIME', 'NotificationOnScheduledDowntime', 'BOOLEAN', false, null);

		$tMap->addColumn('STALKING_ON_UP', 'StalkingOnUp', 'BOOLEAN', false, null);

		$tMap->addColumn('STALKING_ON_DOWN', 'StalkingOnDown', 'BOOLEAN', false, null);

		$tMap->addColumn('STALKING_ON_UNREACHABLE', 'StalkingOnUnreachable', 'BOOLEAN', false, null);

		$tMap->addColumn('FAILURE_PREDICTION_ENABLED', 'FailurePredictionEnabled', 'BOOLEAN', false, null);

		$tMap->addColumn('FLAP_DETECTION_ON_UP', 'FlapDetectionOnUp', 'BOOLEAN', false, null);

		$tMap->addColumn('FLAP_DETECTION_ON_DOWN', 'FlapDetectionOnDown', 'BOOLEAN', false, null);

		$tMap->addColumn('FLAP_DETECTION_ON_UNREACHABLE', 'FlapDetectionOnUnreachable', 'BOOLEAN', false, null);

		$tMap->addColumn('NOTES', 'Notes', 'VARCHAR', false, 255);

		$tMap->addColumn('NOTES_URL', 'NotesUrl', 'VARCHAR', false, 255);

		$tMap->addColumn('ACTION_URL', 'ActionUrl', 'VARCHAR', false, 255);

		$tMap->addColumn('ICON_IMAGE', 'IconImage', 'VARCHAR', false, 255);

		$tMap->addColumn('ICON_IMAGE_ALT', 'IconImageAlt', 'VARCHAR', false, 255);

		$tMap->addColumn('VRML_IMAGE', 'VrmlImage', 'VARCHAR', false, 255);

		$tMap->addColumn('STATUSMAP_IMAGE', 'StatusmapImage', 'VARCHAR', false, 255);

		$tMap->addColumn('TWO_D_COORDS', 'TwoDCoords', 'VARCHAR', false, 255);

		$tMap->addColumn('THREE_D_COORDS', 'ThreeDCoords', 'VARCHAR', false, 255);

		$tMap->addColumn('AUTODISCOVERY_ADDRESS_FILTER', 'AutodiscoveryAddressFilter', 'VARCHAR', false, 255);

		$tMap->addColumn('AUTODISCOVERY_HOSTNAME_FILTER', 'AutodiscoveryHostnameFilter', 'VARCHAR', false, 255);

		$tMap->addColumn('AUTODISCOVERY_OS_FAMILY_FILTER', 'AutodiscoveryOsFamilyFilter', 'VARCHAR', false, 255);

		$tMap->addColumn('AUTODISCOVERY_OS_GENERATION_FILTER', 'AutodiscoveryOsGenerationFilter', 'VARCHAR', false, 255);

		$tMap->addColumn('AUTODISCOVERY_OS_VENDOR_FILTER', 'AutodiscoveryOsVendorFilter', 'VARCHAR', false, 255);

	} // doBuild()

} // NagiosHostTemplateMapBuilder
