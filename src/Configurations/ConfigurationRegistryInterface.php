<?php declare( strict_types = 1 );
namespace CodeKandis\TiphyLdapIntegration\Configurations;

use CodeKandis\Configurations\ConfigurationRegistryInterface as OriginConfigurationRegistryInterface;
use CodeKandis\Ldap\Configurations\LdapConfigurationInterface;

/**
 * Represents the interface of any configuration registry providing a LDAP configuration.
 * @package codekandis/tiphy-ldap-integration
 * @author Christian Ramelow <info@codekandis.net>
 */
interface ConfigurationRegistryInterface extends OriginConfigurationRegistryInterface
{
	/**
	 * Gets the LDAP configuration.
	 * @return ?LdapConfigurationInterface The LDAP configuration.
	 */
	public function getLdapConfiguration(): ?LdapConfigurationInterface;
}
