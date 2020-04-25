<?php
/**
 *
 * Hide 24 hour Activity Stats. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2017, 3Di, https://github.com/3D-I/
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace rmcgirr83\activity24hours\migrations;

class v_110 extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array('\phpbb\db\migration\data\v31x\v3110');
	}

	/* Permission not set - to be assigned on a per group/user basis */
	public function update_data()
	{
		return array(
			array('permission.add', array('u_a24hrs_view')),

			// Set permissions
			array('permission.permission_set',array('ROLE_USER_FULL','u_a24hrs_view','role')),
			array('permission.permission_set',array('ROLE_ADMIN_FULL','u_a24hrs_view','role')),
			array('permission.permission_set',array('ROLE_MOD_FULL','u_a24hrs_view','role')),
		);
	}
}
