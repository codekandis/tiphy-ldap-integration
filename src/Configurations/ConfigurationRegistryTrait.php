<?php declare( strict_types = 1 );
namespace CodeKandis\TiphyLdapIntegration\Configurations;

use CodeKandis\Ldap\Configurations\LdapConfigurationInterface;

/**
 * Represents the trait to integrate a LDAP configuration into a configuration registry.
 * @package codekandis/tiphy-ldap-integration
 * @author Christian Ramelow <info@codekandis.net>
 */
trait ConfigurationRegistryTrait
{
	/**
	 * Stores the LDAP configuration.
	 * @var ?LdapConfigurationInterface
	 */
	private ?LdapConfigurationInterface $ldapConfiguration = null;

	/**
	 * {@inheritDoc}
	 */
	public function getLdapConfiguration(): ?LdapConfigurationInterface
	{
		return $this->ldapConfiguration;
	}
}
