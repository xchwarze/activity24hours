<?php
/**
 *
 * Hide 24 hour Activity Stats. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2020 Rich McGirr (RMcGirr83)
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace rmcgirr83\activity24hrs\migrations;

class m1_install_permissions extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array('\phpbb\db\migration\data\v31x\v3110');
	}

	/* Permission not set - to be assigned on a per group/user basis */
	public function update_data()
	{
		return array(
			array('permission.add', array('u_allow_a24hrs_view')),

			// Set permissions
			array('permission.permission_set',array('NEWLY_REGISTERED','u_allow_a24hrs_view','group', false)),
			array('permission.permission_set',array('ROLE_USER_NEW_MEMBER','u_allow_a24hrs_view','role',false)),
			array('permission.permission_set',array('ROLE_ADMIN_STANDARD','u_allow_a24hrs_view','role')),
			array('permission.permission_set',array('ROLE_ADMIN_FORUM','u_allow_a24hrs_view','role')),
			array('permission.permission_set',array('ROLE_ADMIN_FULL','u_allow_a24hrs_view','role')),
			array('permission.permission_set',array('ROLE_MOD_STANDARD','u_allow_a24hrs_view','role')),
			array('permission.permission_set',array('ROLE_MOD_FULL','u_allow_a24hrs_view','role')),
		);
	}
}
