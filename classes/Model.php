<?php
/*
  ==============================================================================================
  Askably 3.1 © 2005-2010 Amelie M.
  ==============================================================================================
*/

################################################################################################
############################ CORE ASKABLY FUNCTIONS. DO _NOT_ EDIT. ############################
################################################################################################

if (!defined('PAI_IN')) exit('<p>This file cannot be loaded directly.</p>');

/**
 * Basic model for classes.
 *
 * @author Amelie M.
 */
interface Model {
	/**
	 * Save the object.
	 */
	public function save();

	/**
	 * Create the object.
	 */
	public function create();

	/**
	 * Find a record by ID.
	 *
	 * @param int $id The ID of the record to find.
	 */
	public function findById($id, $fields = '*');

	/**
	 * Escape data for entering into MySQL.
	 *
	 * @param string $data The data to escape.
	 */
	public function sqlEscape($data);

	/**
	 * Delete the object.
	 */
	public function delete();

	/**
	 * Check that a valid ID exists for the object.
	 */
	public function checkId();

	/**
	 * Set the ID of the object.
	 *
	 * @param int $id The ID to set.
	 */
	public function setId($id);

	/**
	 * Get the ID of the object.
	 */
	public function getId();

	/**
	 * Set all properties of the object.
	 *
	 * @param object $info The info to set.
	 */
	public function setAll($info);
}
?>